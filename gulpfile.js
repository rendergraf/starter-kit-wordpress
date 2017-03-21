var gulp        = require('gulp'),
livereload      = require('gulp-livereload'),
uglify          = require('gulp-uglifyjs'),
sass            = require('gulp-sass'),
autoprefixer    = require('gulp-autoprefixer'),
sourcemaps      = require('gulp-sourcemaps');

var theme_name  = "starter-kit-wordpress" 
var path_themes = "./wp-content/themes/";
var path_theme  = path_themes + theme_name

gulp.task('sass', function () {
  gulp.src( path_theme + '/sass/**/*.scss')
  .pipe(sourcemaps.init())
        // Type: String Default: nested Values: nested, expanded, compact, compressed
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        // https://github.com/postcss/autoprefixer#options
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest( path_theme + '/css'));
      });

// compress js files, use $gulp uglify
gulp.task('compress', function() {
  var ruta = "./node_modules/bootstrap-sass/assets/javascripts/bootstrap/";
  gulp.src([ 
    // Bootstrap components
    ruta + 'affix.js',
    ruta + 'alert.js',
    ruta + 'button.js',
    ruta + 'carousel.js',
    ruta + 'collapse.js',
    ruta + 'dropdown.js',
    ruta + 'scrollspy.js',
    ruta + 'tooltip.js',
    ruta + 'popover.js',
    ruta + 'tab.js',
    ruta + 'tooltip.js',
    ruta + 'transition.js',
    ruta + 'modal.js',
    // Libraries custom theme
    path_theme + '/js-source/*.js',
    //rutaflow + 'index.js'
    ])
  // Compress version
  .pipe(uglify('main.min.js'))
  //Uncompress version
  // .pipe(uglify('main.js', {
  //     mangle: false,
  //     output: {
  //       beautify: true
  //     }
  //   }))
.pipe(gulp.dest(path_theme + '/js'))
});

gulp.task('watch', function(){
  livereload.listen();
  gulp.watch( path_theme + '/sass/**/*.scss', ['sass']);
  gulp.watch( path_theme + '/js-source/*.js', ['compress']);
  gulp.watch([ path_theme + '/css/style.css',  path_theme + '/**/*.twig',  path_theme + '/js/*.js'], function (files){
    livereload.changed(files)
  });
});