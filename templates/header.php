<?php include_once 'getpath.php'; ?>


<header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix"> <a class="logo" href="<?php echo $path; ?>index.php">Home</a>
        <nav class="navigation" role="navigation">
            <ul class="primary-nav">
            <?php
            if(strpos($current_page, 'index.php')){
            ?>
                <li><a href="#work-experience">Work</a></li>
                <li><a href="#projectsHeading">Projects</a></li>
            <?php
            } else {
            ?>
                <li><a href="<?php echo $path; ?>index.php#work-experience">Work</a></li>
                <li><a href="<?php echo $path; ?>index.php#projectsHeading">Projects</a></li>
            <?php
            }
            ?>
                <li><a href="<?php echo $path; ?>about.php">About Me</a></li>
                <li><a href="<?php echo $path; ?>contact.php">Contact</a></li>
            </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
    </div>
    <!-- navigation section  --> 
</header>