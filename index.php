<?php include("functions/init.php"); ?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dental.bg</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	
        <?php loggin_check(); ?>
        
    
        
        
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<?php include(TEMPLATE_FRONT . DS . "logo.php") ?>

							 
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
                                
						</div>
					</header>

				 
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
                            <li><a href="index.html">Home</a></li>
							 <?php if(logged_in()): ?>
                                <li><a href="logout.php">Logout</a></li>
                             <?php endif; ?>
                             
						</ul>
					</nav>
                                        
                    

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1><center>Добре дошли</center></h1>
								
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="patients.php?patients">
										<h2>Пациенти</h2>
										<div class="content">
											<p>Информация за вашите пациенти</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="generic.php">
										<h2>Календар</h2>
										<div class="content">
											<p>Запишете час</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="generic.php">
										<h2>Акаунт</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								
							</section>
						</div>
					</div>

				<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>