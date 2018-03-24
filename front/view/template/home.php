<header id="home">
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  
  <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" style="background-image: url(<?= $resourceLoader->resolvePath('WEB_RESOURCE_IMG', '/slider/1.jpg'); ?>)">
        <div class="caption">
          <h1 class="animated fadeInLeftBig"><?= $textProvider->get('NAME'); ?></h1>
          <p class="animated fadeInRightBig"><?= $textProvider->get('OCCUPATION'); ?></p>
          <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><?= $textProvider->get('START_NOW'); ?></a>
        </div>
      </div>
      <div class="item" style="background-image: url(<?= $resourceLoader->resolvePath('WEB_RESOURCE_IMG', '/slider/3.jpg'); ?>)">
        <div class="caption">
          <h1 class="animated fadeInLeftBig"><?= $textProvider->get('CODING_PASSION'); ?></h1>
          <p class="animated fadeInRightBig"><?= $textProvider->get('TECH_SUMMARY'); ?></p>
          <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><?= $textProvider->get('START_NOW'); ?></a>
        </div>
      </div>
    </div>
    <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

    <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

  </div><!--/#home-slider-->
  <div class="main-nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- There is no navbar brand so class and space is used for flags -->
        <a class="navbar-brand" href="/es">
          <img src="<?= $resourceLoader->resolvePath('WEB_RESOURCE_IMG', 'sp_flag.png'); ?>" />
        </a>
        <a class="navbar-brand" href="/en">
          <img src="<?= $resourceLoader->resolvePath('WEB_RESOURCE_IMG', 'uk_flag.png'); ?>" />
        </a>

      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">                 
          <li class="scroll active"><a href="#home"><?= $textProvider->get('HOME'); ?></a></li>
          <li class="scroll"><a href="#about-us"><?= $textProvider->get('ME'); ?></a></li>
          <li class="scroll"><a href="#services"><?= $textProvider->get('TECHNOLOGIES'); ?></a></li> 
          <li class="scroll"><a href="#portfolio"><?= $textProvider->get('STUDIES'); ?></a></li>
          <li class="scroll"><a href="#portfolio"><?= $textProvider->get('CAREER'); ?></a></li>
          <li class="scroll"><a href="#portfolio"><?= $textProvider->get('MY_JOB'); ?></a></li>
          <li class="scroll"><a href="#contact"><?= $textProvider->get('CONTACT'); ?></a></li>
        </ul>
      </div>
    </div>
  </div><!--/#main-nav-->
</header><!--/#home-->