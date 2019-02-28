<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->

  <?php include_once 'templates/head.php'; ?>
  
  <title>Contact</title>

  <body>
    <!-- header section -->
    <section class="innerbanner" role="banner">
      
      <?php include_once 'templates/header.php'; ?>

      <!-- banner text -->
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="innerbanner-text text-center">
            <p>Contact</p>
            
            <ul id="contact-links">
              <li><a href="https://www.linkedin.com/in/shahlin/" target="_new">LinkedIn</a></li>
              <li><a href="https://github.com/shahlin" target="_new">GitHub</a></li>
              <li><a href="https://stackoverflow.com/users/2736770/shahlin-ibrahim" target="_new">StackOverflow</a></li>
            </ul>
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
          <p>I am honest, discreet and always focused on completing my tasks. If you are looking for a software developer, just leave me a message and I'll contact you soon.</p>
          <!--contact form start-->
          <div class="col-md-6 col-md-offset-3 conForm">
            <div id="message"></div>
            <form method="post" action="php/contact.php" name="cform" id="cform">
              <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
              <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
              <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
              <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
              <div id="simple-msg"></div>
            </form>
          </div>
          <!--contact form end--> 
        </div>
      </div>
    </section>
    <!-- description text section --> 
    <!-- footer -->
    <?php include_once 'templates/footer.php'; ?>

    <!-- JS FILES --> 
    <?php include_once 'templates/jsfiles.php'; ?>
  </body>
</html>