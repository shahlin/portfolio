<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->
  <?php include_once '../templates/head.php'; ?>

  <title>Arlkon</title>

  <body>
    <!-- header section -->
    <section class="innerbanner" role="banner">
      <?php include_once '../templates/header.php'; ?>
      
      <!-- banner text -->
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="innerbanner-text text-center">
            <p>Arlkon / <span class="project_subtitle">online trading application</span></p>
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
            <iframe src="https://www.youtube.com/embed/nJvwULt5aMk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1 space">
            
          <h3>About the project</h3>
          <p class="project_p">Arlkon was built as part of a Distributed Systems project to demonstrate fault tolerance, concurrency, security, architecture, etc. Arlkon is a crypto-currency investments and binary trading simulation platform that allows potential investors to ‘practice’ with virtual currencies. The currency rates and information are real-time data which is same as the actual market rates. Users can practice in this platform and once they feel comfortable, they can invest using real currencies.</p>
          
          <hr>

          <h3>Basic features</h3>

          <ul class="project_ul">
            <li>Binary Trading</li>
            <li>Crypto-Currency Investments</li>
            <li>Group Chat</li>
            <li>Real-time data</li>
            <li>User-friendly design</li>
          </ul>
          
          <hr>
          
          <h3>Stack used</h3>

          <ul class="project_ul">
            <li>JavaFX</li>
            <li>MySQL</li>
            <li>PHP</li>
            <li>CSS</li>
            <li>XML</li>
            <li>GlassFish Server</li>
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