var gulp        = require('gulp'),
livereload      = require('gulp-livereload'),
uglify          = require('gulp-uglifyjs'),
sass            = require('gulp-sass'),
autoprefixer    = require('gulp-autoprefixer'),
sourcemaps      = require('gulp-sourcemaps'),
image           = require('gulp-imagemin'),
pngquant        = require('imagemin-pngquant'),
esformatter     = require('gulp-esformatter');

var theme_name  = "xavier" 
var path_themes = "wp-content/themes/";
var path_theme  = path_themes + theme_name

// optimized images, use $gulp image
gulp.task('image', function () {
    return gulp.src(path_theme + '/*')
    .pipe(image({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngquant()]
    }))
    .pipe(gulp.dest(path_theme + '/images'));
});

// compile sass files, use $gulp sass
gulp.task('sass', function () {
  gulp.src(path_theme + '/sass/**/*.scss')
  .pipe(sourcemaps.init())
    // Type: String Default: nested Values: nested, expanded, compact, compressed
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(autoprefixer(
    {
        browsers: ['last 2 versions'],
        cascade: false
    }
    ))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(path_theme));
});

// compress js files, use $gulp uglify
gulp.task('uglify', function() {
  var path = path_theme + "/lib/bootstrap-sass-3.3.7/assets/javascripts/bootstrap/";
  gulp.src([
    // Libraries custom theme
    path_theme + '/lib/*.js', 
    // Bootstrap components
    //path + 'affix.js',
    //path + 'alert.js',
    path + 'button.js',
    //path + 'carrousel.js',
    path + 'collapse.js',
    path + 'dropdown.js',
    //path + 'popover.js',
    //path + 'scrollspy.js',
    //path + 'tab.js',
    //path + 'tooltip.js',
    path + 'transition.js',
    ])
  .pipe(uglify('main.js'))
  .pipe(gulp.dest(path_theme + '/js'))
});

// Formater JS
gulp.task('esformatter', function () {
    return gulp.src(path_theme + '/js-raw/main.js')
        .pipe(esformatter({indent: {value: '  '}}))
        .pipe(gulp.dest(path_theme + '/js-raw/output'));
});

// Task watch, use $gulp watch
gulp.task('watch', function(){
    livereload.listen();
    gulp.watch(path_theme + '/sass/**/*.scss', ['sass']);
    //gulp.watch('themes/custom/fisherprice/images/**/*'+'[.jpg, .JPG, .png, .PNG]', ['image']);
    gulp.watch(path_theme + '/lib/*.js', ['uglify']);
    gulp.watch([path_theme + '/style.css', path_theme + '/**/*.php', path_theme + '/js/*.js'], function (files){
        livereload.changed(files)
    });
});