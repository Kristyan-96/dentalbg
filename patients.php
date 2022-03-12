<?php include("functions/init.php"); ?>

<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/css_add_patients.css" />
		
		
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
                             
                           <?php include(TEMPLATE_FRONT . DS . "logo.php") ?>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
								

							 <?php 
                            
                            if(isset($_GET['patients'])){
                                
                                include(TEMPLATE_BACK . "/patients.php");  
                                
                            }
                            
                            
                            if(isset($_GET['add_patient'])){
    
                        include(TEMPLATE_BACK . "/add_patient.php");                    
    
                        }
                            ?>
                        
						</div>
					</header>
                
				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="patients.php?add_patient">Добави пациент</a></li>
							
						</ul>
					</nav>
					
						 

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

                            
                   
                                                

					

				