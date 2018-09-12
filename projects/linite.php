<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->
  <?php include_once '../templates/head.php'; ?>

  <title>Linite</title>

  <body>
    <!-- header section -->
    <section class="innerbanner" role="banner">
      <?php include_once '../templates/header.php'; ?>
      
      <!-- banner text -->
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="innerbanner-text text-center">
            <p>Linite / <span class="project_subtitle">essential applications downloader</span></p>
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
            <iframe src="https://www.youtube.com/embed/Ccw-CY46P-8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1 space">
            
          <h3>About the project</h3>
          <p class="project_p">
            Linite is a Linux based application that allows users to easily select the applications they want and download & install them with just a click of a button. Typically, the user would have to go over each application's website, download the package and install it themself. Linite eases this process. Also it downloads the latest packages from the operating system's official repository so the user gets the latest version at all times.
            <br><br>Linite is inspired by <a href="https://ninite.com/" target="blank">Ninite</a>, a similar program available on Windows platform. Since Ninite was no longer supported on Linux, I decided to build one for Linux myself. One of the things I really like about the program is that it is scalable. So if a new application is to be added to the list, the developer just has to add an element to the XML file and it will automatically incorporate the application according to the existing design.
          </p>
          
          <hr>

          <h3>Basic features</h3>

          <ul class="project_ul">
            <li>One click download & install</li>
            <li>Updated applications</li>
            <li>User-friendly design</li>
            <li>Scalable</li>
            <li>Less than 2 MB in size and only a single dependency</li>
          </ul>
          
          <hr>
          
          <h3>Stack used</h3>

          <ul class="project_ul">
            <li>Python</li>
            <li>XML</li>
            <li>Bash Shell Scripting</li>
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