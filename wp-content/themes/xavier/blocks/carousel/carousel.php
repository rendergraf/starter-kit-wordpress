<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators carousel__indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel__banner" role="listbox">
    <div class="item active carousel__banner__slide">
      <img class="image-responsive carousel__banner__slide--image" src="<?php bloginfo('template_url'); ?>/images/office.png">
      <div class="carousel-caption carousel__banner__slide__carousel-caption">
        <h2>The No. Software for small and medium business</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sapiente aut neque numquam, quis nemo doloribus expedita quae in, itaque beatae consequatur asperiores dolores magnam quidem omnis fuga id, non.</p>
        <a href="#" class="btn btn-primary button carousel__banner__slide__carousel-caption--button">Link</a>
      </div>
    </div>
    <div class="item carousel__banner__slide">
      <img class="image-responsive carousel__banner__slide--image" src="<?php bloginfo('template_url'); ?>/images/office.png">
      <div class="carousel-caption carousel__banner__slide__carousel-caption">
        <h2>The No. Software for small and medium business</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sapiente aut neque numquam, quis nemo doloribus expedita quae in, itaque beatae consequatur asperiores dolores magnam quidem omnis fuga id, non.</p>
        <a href="#" class="btn btn-primary button carousel__banner__slide__carousel-caption--button">Link</a>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control carousel__control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left carousel__control__chevron--left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control carousel__control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right carousel__control__chevron--right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>