<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->
  
  <?php include_once '../templates/head.php'; ?>
  
  <title>Project Y</title>
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
            <p>Project Y / <span class="project_subtitle">activity sharing website</span></p>
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
          <p class="project_p">I've had the idea of an activity sharing website since a very long time. Maybe that explains why I have two different projects with the same idea (<a href="dlindle.php" target="blank">dlindle</a>). Project Y was developed back in 2015 just after finishing school. I wanted to create a platform which was easy to use but helpful and fun at the same time. Since I was not good at front-end, I downloaded a commercially free HTML5 page and started modifying that tot fit my needs. Unfortunately, Project Y's development was stopped halfway as university began. But I never gave up on my idea of an activity sharing website though. So I came up with dlindle, which was a fully functioning activity sharing website!</p>
          
          <hr>

          <h3>Basic features</h3>

          <ul class="project_ul">
            <li>Minimal/elegant web design</li>
            <li>Find people with similar interests</li>
            <li>Lightweight environment</li>
            <li>Facebook integration</li>
          </ul>
          
          <hr>
          
          <h3>Stack used</h3>

          <ul class="project_ul">
            <li>PHP</li>
            <li>MySQL</li>
            <li>Javascript (jQuery)</li>
            <li>HTML</li>
            <li>CSS</li>
          </ul>

          <hr>
          
          <h3>Screenshots (click to enlarge)</h3>
          <section class="section project_screenshots no-padding"><br>
            <div class="container-fluid">
              <div class="row no-gutter">
                <div class="col-md-2 work">
                  <a href="../images/projectYScrn/index.png" class="work-fancybox">
                    <img src="../images/projectYScrn/index.png" alt="Index page">
                  </a>
                </div>

                <div class="col-md-2 work">
                  <a href="../images/projectYScrn/indexBottom.png" class="work-fancybox">
                    <img src="../images/projectYScrn/indexBottom.png" alt="Index bottom">
                  </a>
                </div>
                
                <div class="col-md-2 work">
                  <a href="../images/projectYScrn/welcome.png" class="work-fancybox">
                    <img src="../images/projectYScrn/welcome.png" alt="Welcome page">
                  </a>
                </div>

                <div class="col-md-2 work">
                  <a href="../images/projectYScrn/post.png" class="work-fancybox">
                    <img src="../images/projectYScrn/post.png" alt="Post an activity">
                  </a>
                </div>

                <div class="col-md-2 work">
                  <a href="../images/projectYScrn/allFeeds.png" class="work-fancybox">
                    <img src="../images/projectYScrn/allFeeds.png" alt="All feeds">
                  </a>
                </div>
                
                <div class="col-md-2 work">
                  <a href="../images/projectYScrn/help.png" class="work-fancybox">
                    <img src="../images/projectYScrn/help.png" alt="Help page">
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