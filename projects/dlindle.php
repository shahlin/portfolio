<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->
  <?php include_once '../templates/head.php'; ?>

  <title>dlindle</title>

  <body>
    <!-- header section -->
    <section class="innerbanner" role="banner">
    <?php include_once '../templates/header.php'; ?>
      
      <!-- banner text -->
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="innerbanner-text text-center">
            <p>dlindle / <span class="project_subtitle">activity sharing website</span></p>
            <!-- banner text --> 
          </div>
        </div>
      </div>
    </section>
    <!-- header section --> 
    <!-- description text section -->
    <section id="inner-description" class="section inner-description">
      <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">
          <div class="youtube_embed_vid">
            <iframe src="https://www.youtube.com/embed/NV3vLcSlI-M?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1 space">
            
          <h3>About the project</h3>
          <p class="project_p">dlindle is an activity sharing website that lets you post an activity you're currently doing (within 80 characters). Your activities are visible to all the registered users and are expired in 24 hours.<br>The project was mainly started to get comfortable with the use of the popularly known PHP framework, Laravel. I plan on publishing the website in the near future after adding a few more features and also when the design is polished. As of now, the website is not responsive. I'm not a front-end developer hence the flaw in design.</p>
          
          <hr>

          <h3>Basic features</h3>

          <ul class="project_ul">
            <li>Minimal and user friendly web design</li>
            <li>Find people with similar interests</li>
            <li>Collaborate/help people</li>
            <li>Lightweight environment</li>
            <li>Private messaging or group chat</li>
          </ul>
          
          <hr>
          
          <h3>Stack used</h3>

          <ul class="project_ul">
            <li>PHP (laravel)</li>
            <li>MySQL</li>
            <li>Javascript (jQuery)</li>
            <li>HTML</li>
            <li>CSS</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- description text section --> 

    <!-- hire me section -->
    <?php include_once '../templates/hireme.php'; ?>

    <!-- footer -->
    <?php include_once '../templates/footer.php'; ?>

    <!-- JS FILES --> 
    <?php include_once '../templates/jsfiles.php'; ?>
  </body>
</html>