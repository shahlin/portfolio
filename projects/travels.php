<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->
  <?php include_once '../templates/head.php'; ?>

  <title>Travels</title>
  
  <style>
    .inner-description .project_screenshots img {
      width: 90%;
      height: 100%;
      border-radius: 0;
    }
  </style>

  <body>
    <!-- header section -->
    <section class="innerbanner" role="banner">
      <?php include_once '../templates/header.php'; ?>
      
      <!-- banner text -->
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="innerbanner-text text-center">
            <p>Travels / <span class="project_subtitle">tourism application</span></p>
            <!-- banner text --> 
          </div>
        </div>
      </div>
    </section>
    <!-- header section --> 
    <!-- description text section -->
    <section id="inner-description" class="section inner-description">
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <h3>About the project</h3>
          <p class="project_p">Universal Tourism was a desktop application developed when I was in high school as part of 12th grade informatics project. It was a basic package booking application, that allowed users to pick a location that they wanted. This is one of the first projects that I developed.</p>
          
          <hr>
          
          <h3>Stack used</h3>

          <ul class="project_ul">
            <li>Java</li>
            <li>MySQL</li>
            <li>PHP (for emailing booking confirmations)</li>
          </ul>

          <hr>
          
          <h3>Screenshots (click to enlarge)</h3>
          <section class="section project_screenshots no-padding"><br>
            <div class="container-fluid">
              <div class="row no-gutter">
                <div class="col-md-2 work">
                  <a href="../images/travelsScreenshots/1.jpg" class="work-fancybox">
                    <img src="../images/travelsScreenshots/1.jpg" alt="Index page">
                  </a>
                </div>

                <div class="col-md-2 work">
                  <a href="../images/travelsScreenshots/2.jpg" class="work-fancybox">
                    <img src="../images/travelsScreenshots/2.jpg" alt="Index bottom">
                  </a>
                </div>
                
                <div class="col-md-2 work">
                  <a href="../images/travelsScreenshots/3.jpg" class="work-fancybox">
                    <img src="../images/travelsScreenshots/3.jpg" alt="Welcome page">
                  </a>
                </div>

                <div class="col-md-2 work">
                  <a href="../images/travelsScreenshots/4.jpg" class="work-fancybox">
                    <img src="../images/travelsScreenshots/4.jpg" alt="Post an activity">
                  </a>
                </div>

                <div class="col-md-2 work">
                  <a href="../images/travelsScreenshots/5.jpg" class="work-fancybox">
                    <img src="../images/travelsScreenshots/5.jpg" alt="All feeds">
                  </a>
                </div>
                
                <div class="col-md-2 work">
                  <a href="../images/travelsScreenshots/6.jpg" class="work-fancybox">
                    <img src="../images/travelsScreenshots/6.jpg" alt="Help page">
                  </a>
                </div>
              </div>
            </div>
          </section>
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