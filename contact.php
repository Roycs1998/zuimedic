<!DOCTYPE html>
<html lang="es">


	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
			
		<!-- SITE TITLE -->
		<title>ZUI MEDIC - CONTACTANOS</title>
		<?php include('assets/estructura/links.php');?>

	</head>

	<body>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
		
			<!-- START PRELOADER -->
			<div class="atf-preloader">
				<div class="atf-status">
					<div class="atf-status-mes"></div>
				</div>
			</div> 
			<!-- END PRELOADER -->	
			
			<!-- START back-to-top -->	
			<button class="atf-scroll-top atf-back-to-top" data-targets="html">
				<i class="fa fa-angle-up atf-scrollup-icon"></i>
			</button>
			<!-- END back-to-top-->	
			<div class="body-overlay" id="body-overlay"></div>
			
			<!-- search popup area start -->

			<!-- //. search Popup -->
		
            <?php include('assets/estructura/header.php'); ?>
			

			<div class="atf-content clearfix">
				<div class="atf-page-heading atf-size-md atf-dynamic-bg" data-stellar-background-ratio="0.3" style="background-image: url(assets/img/banner/contacto-min.jpg); background-size:cover; background-position: center center;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-7 col-md-6 col-12">
								<div class="atf-page-heading-in text-center">
									<h1 class="atf-page-heading-title">COTIZACIÓN EN LINEA</h1>
							
								</div>
							</div>
						</div>
					</div>
				</div><!-- .atf-page-heading -->

				<!-- CONTACT SECTION START-->
				<section id="contact" class="atf-contact-area atf-section-padding">
					<div class="container">
					
						
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-12 my-auto mx-auto">
								<div class="contact mr-lg-5"> 
									<h4>CONTACTANOS</h4>
									<form id="contact-form" class="atf-contact-form form" method="POST" action="assets/php/mail.php">
										<div class="row">
											<div class="form-group col-md-6">
												<input type="text" name="name" class="form-control" id="name" placeholder="Nombres" required="required">
											</div>
											<div class="form-group col-md-6">
												<input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" required="required">
											</div>
											<div class="form-group col-md-6">
												<input type="text" name="celular" class="form-control" id="celular" placeholder="Celular" required="required">
											</div>
											<div class="form-group col-md-6">
												<input type="text" name="ruc" class="form-control" id="ruc" placeholder="RUC" required="required">
											</div>
											<div class="form-group col-md-12">
												<input type="text" name="subject" class="form-control" id="subject" placeholder="Razón Social" required="required">
											</div>
											
											<div class="form-group col-md-12">
												<textarea rows="6" name="message" class="form-control" id="message" placeholder="Mensaje" required="required"></textarea>
											</div>
											<div class="col-md-12">
												<div class="actions atf-contact-btn text-left">
													<button type="submit" value="Enviar Mensaje" name="submit" id="submitButton" class="btn atf-themes-btn" title="Enviar Mensaje!" >Enviar mensaje</button>
												</div>
											</div>
										</div>
									</form>
									<p class="form-message"></p>
								</div>
							</div><!--- END COL -->
							

							<div class="col-xl-6 col-lg-6 col-12">
								<div class="atf-contact-info mx-auto my-auto">
									<div class="atf-contact-details">
										<i class="fa-solid fa-location-dot"></i>
										<h4>Dirección de oficina.</h4>
										<p>Av. Las Camelias 790, distrito de San Isidro</p>
									</div>
									<div class="atf-contact-details">
										<i class="fa-solid fa-phone"></i>
										<h4>Celular</h4>
										<p>(+51)957404672 / (+51)981453402</p>
									</div>
									<div class="atf-contact-details">
										<i class="fa fa-envelope"></i>
										<h4>Correo Electrónico</h4>
										<p>ebelin@zuimedic.com</p>
									</div>
								</div><!--- END CONTACT -->
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</section>
				<!-- CONTACT SECTION END-->
				
				<!-- Google Map start-->
				<div id="atf-map-area">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d579.919254077545!2d-77.02877642521577!3d-12.09728746055126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c868bd340ee1%3A0x14e3b337b0d072f1!2sC.%20las%20Camelias%20790%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1649788231992!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<!-- Google Map end -->
				
			</div>
			<!--- END CONTENT -->
			
			
			

        <?php include('assets/estructura/foot.php');?>
        </div>
				   
	    <?php include('assets/estructura/link-foot.php');?>

	</body>
</html>