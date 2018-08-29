<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

	<!-- Include head tag including meta tags, link tags and favicon -->
	<?php include_once 'templates/head.php'; ?>

	<title>Shahlin - My Portfolio</title>

	<body>
		<!-- header section -->
		<section class="banner" role="banner">
			
			<?php include_once 'templates/header.php'; ?>
			
			<!-- banner text -->
			<div class="container">
				<div class="col-md-10 col-md-offset-1">
					<div class="banner-text text-center">
						<h1>Hey, I’m Shahlin</h1>
						<p>I'm a developer. I mainly do backend for websites and design prototypes<br>
								Scroll down to see my work!</p>
						<!-- banner text --> 
					</div>
				</div>
			</div>
		</section>
		<!-- header section --> 
		<!-- description text section -->
		<section id="descripton" class="section descripton">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 text-center">
					<p>My experience? C++, Java/JavaFX, Git, Python (basic), MySQL, PHP (including Laravel), jQuery, etc. Web development is something I started back in high school and still continue learning. I'm also good with Photoshop. I create prototypes for mobile apps and websites. Apart from that, I love designing random objects from scratch (a room, for instance). I've gained alot of experience in different technologies over the years, x86 Assembly Language, video editing, app development, Raspberry Pi, and alot more!</p>
				</div>
			</div>
		</section>
		<!-- description text section --> 

		<h2 id="projectsHeading">My Projects</h2>

		<!-- portfolio section -->
		<section class="section no-padding">
			<div class="container-fluid">
				<div class="row no-gutter">
					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="projects/arlkon.php" class="work-box"> 
							<img src="images/arlkon_cover.jpg" alt="Arlkon">
							<div class="overlay">
								<div class="overlay-caption">
									<h5>Arlkon</h5>
									<p>Desktop Application</p>
								</div>
							</div>
						</a> 
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="projects/dlindle.php" class="work-box"> 
							<img src="images/dlindle_cover.jpg" alt="dlindle">
							<div class="overlay">
								<div class="overlay-caption">
									<h5>dlindle</h5>
									<p>Website</p>
								</div>
							</div>
						</a> 
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="projects/shell.php" class="work-box">
							<img src="images/shell_cover.jpg" alt="Shell">
							<div class="overlay">
								<div class="overlay-caption">
									<h5>Shell</h5>
									<p>Desktop Application</p>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="projects/prototypes.php" class="work-box">
							<img src="images/prototypes_cover.jpg" alt="Prototypes">
							<div class="overlay">
								<div class="overlay-caption">
									<h5>Prototypes</h5>
									<p>Photoshop</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="projects/projecty.php" class="work-box">
							<img src="images/projecty_cover.jpg" alt="Project Y">
							<div class="overlay">
								<div class="overlay-caption">
									<h5>Project Y</h5>
									<p>Website</p>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="projects/designs.php" class="work-box">
							<img src="images/designs_cover.jpg" alt="Designs">
							<div class="overlay">
								<div class="overlay-caption">
									<h5>Designs</h5>
									<p>Photoshop</p>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="projects/travels.php" class="work-box">
							<img src="images/travels_cover.jpg" alt="Travels">
							<div class="overlay">
								<div class="overlay-caption">
									<h5>Universal Tourism</h5>
									<p>Desktop Application</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 work">
						<a href="#" class="work-box">
							<img src="images/moreToCome_cover.jpg" alt="More to come">
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- portfolio section --> 
		<!-- Get in touch section -->
		<!-- hire me section --> 
		<?php include_once 'templates/hireme.php'; ?>

		<!-- Include footer -->
		<?php include_once 'templates/footer.php'; ?>

		<!-- JS FILES --> 
		<?php include_once 'templates/jsfiles.php'; ?>
	</body>
</html>