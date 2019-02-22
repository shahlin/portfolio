<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
	
	<!-- Custom CSS only for this page  -->
	<link rel="stylesheet" href="js/skill-bar/docs/styles/an-skill-bar.css">

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
						<h1 id="page-title"></h1>
						<p>I'm a software developer.<br>I mainly do backend development and design prototypes<br>
								Scroll down to see my work!</p>
						<!-- banner text --> 
					</div>
				</div>
			</div>
		</section>
		<!-- header section --> 
		<!-- skill set section -->
		<section id="descripton" class="section descripton">
			<div class="container">
				<!-- <div class="col-md-10 col-md-offset-1 text-center">
					<p>My experience? Java/JavaFX, Python (including Flask, Django, Tkinter, PyQT and much more!), C++, Git, MySQL, PHP (including Laravel), jQuery, etc. Web development is something I started back in high school and still continue learning. I'm also good with Photoshop. I create prototypes for mobile apps and websites. Apart from that, I love designing random objects from scratch (a room, for instance). I've gained alot of experience in different technologies over the years, x86 Assembly Language, video editing, app development, software architecture, Raspberry Pi, and alot more!</p>
				</div> -->
				<h2 style="text-align:center;">Programming Experience</h2><br>
				<div id="left-skill-set">
					<div class="skillbar python">
						<div class="filled" data-width="90%"></div>
						<span class="title">Python</span>
						<span class="percent">90%</span>
					</div>

					<div class="skillbar java">
						<div class="filled" data-width="90%"></div>
						<span class="title">Java</span>
						<span class="percent">90%</span>
					</div>

					<div class="skillbar php">
						<div class="filled" data-width="85%"></div>
						<span class="title">PHP</span>
						<span class="percent">85%</span>
					</div>

					<div class="skillbar css">
						<div class="filled" data-width="50%"></div>
						<span class="title"></i> CSS</span>
						<span class="percent">50%</span>
					</div>

					<div class="skillbar js">
						<div class="filled" data-width="60%"></div>
						<span class="title">JS</span>
						<span class="percent">60%</span>
					</div>
				</div>
				<div id="right-skill-set">
					<div class="skillbar flask">
						<div class="filled" data-width="90%"></div>
						<span class="title">Flask</span>
						<span class="percent">90%</span>
					</div>

					<div class="skillbar django">
						<div class="filled" data-width="70%"></div>
						<span class="title">Django</span>
						<span class="percent">70%</span>
					</div>

					<div class="skillbar laravel">
						<div class="filled" data-width="70%"></div>
						<span class="title">Laravel</span>
						<span class="percent">70%</span>
					</div>

					<div class="skillbar mysql">
						<div class="filled" data-width="85%"></div>
						<span class="title">SQL</span>
						<span class="percent">85%</span>
					</div>

					<div class="skillbar others">
						<div class="filled" data-width="40%"></div>
						<span class="title">Others</span>
						<span class="percent">40%</span>
					</div>
				</div>
			</div>
		</section>
		<!-- skill set section --> 
		<hr>
		<section id="work-experience" class="section work-experience">
			<div class="container">
				<h2 style="text-align:center;margin-bottom: 30px;">Work Experience</h2><br>
				<div class="row">
					<div class="col-md-6 work-entry-left">
						<div class="work-entry">
							<img src="images/assembly.jpg" alt="The Assembly Logo" class="work-entry-logo">
							<h3 class="work-entry-title">The Assembly</h3>
							<p class="work-entry-description">Developer Intern</p>
						</div>
						<div class="work-entry">
							<img src="images/dso.jpg" alt="Dubai Silicon Oasis Logo" class="work-entry-logo">
							<h3 class="work-entry-title">Dubai Silicon Oasis</h3>
							<p class="work-entry-description">Prototype Developer</p>
						</div>
					</div>
					
					<div class="col-md-6 work-entry-right">
						<div class="work-entry">
							<img src="images/gitex.jpg" alt="GITEX Logo" class="work-entry-logo">
							<h3 class="work-entry-title">GITEX</h3>
							<br><p class="work-entry-description">Product Exhibitor</p>
							<div class="clear"></div>
						</div>
						<div class="work-entry">
							<img src="images/uowd.jpg" alt="University of Wollongong in Dubai Logo" class="work-entry-logo">
							<h3 class="work-entry-title">UOWD</h3>
							<br><p class="work-entry-description">Programming Lab Assistant</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<h2 id="projectsHeading">My Projects</h2>

		<!-- portfolio section -->
		<section class="section no-padding">
			<div class="container-fluid">
				<div class="row no-gutter">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="work">
						<a href="projects/linite.php" class="work-box"> 
							<img src="images/linite_cover.jpg" alt="Linite">							
							<div class="overlay">
								<div class="overlay-caption">
									<h5>Linite</h5>
									<p>Desktop Application (Linux)</p>
								</div>
							</div>
						</a>
						</div>
					</div>

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

		<!-- Page title typing effect -->
		<script src="js/typeit/dist/typeit.min.js"></script>
		<script>
			const instance = new TypeIt('#page-title', {
				strings: ['Hey, I’m Shahlin'],
			}).go();
		</script>

		<!-- Skill bar -->
		<script src="js/skill-bar/docs/scripts/an-skill-bar.js"></script>
		<script>
			$(document).ready(function () {
				$('.skillbar').skillbar();
			});
		</script>
	</body>
</html>