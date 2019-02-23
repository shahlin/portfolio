<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->
  <?php include_once '../templates/head.php'; ?>

  <title>Whatsapp Autoresponder</title>

  <body>
    <!-- header section -->
    <section class="innerbanner" role="banner">
      <?php include_once '../templates/header.php'; ?>
      
      <!-- banner text -->
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="innerbanner-text text-center">
            <p>Whatsapp Web Autoresponder / <span class="project_subtitle">automation</span></p>
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
            <p class="project_p">
            <a href="https://github.com/shahlin/whatsapp-autoresponder" target="_new">Whatsapp Web Autoresponder</a> is a small program that allows you to send automatic replies to your whatsapp messages. You might be busy or away for a while and instead of letting your friends or family wait on you for a long time without any reply, you could let the program take care of that while you're away! You can specify a message to send when you receive new messages and the program will take care of sending it.
            <br><br>The program uses <a href="https://www.seleniumhq.org/" target="_new">Selenium</a> to perform the automation. It constantly checks if there is a new message and for every new message, it opens the chat and sends the automated reply.
            <br><br><b>Note</b>: This is only for Whatsapp Web and not the mobile application.
            </p>

            <hr>

            <h3>Basic features</h3>

            <ul class="project_ul">
                <li>Customizable</li>
                <li>Open source</li>
                <li>Quick and easy to start</li>
            </ul>

            <hr>

            <h3>Stack used</h3>

            <ul class="project_ul">
                <li>Python</li>
                <li>Selenium</li>
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