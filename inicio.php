<!DOCTYPE html>
<html lang="es">	
    <?php include('assets/estructura/links.php');?>
	<body>
		<!-- Page Wrapper -->
		<div class="page-wrapper">
		
			<!-- START PRELOADER -->

			<!-- END PRELOADER -->	
			
			<!-- START back-to-top -->	
			<button class="atf-scroll-top atf-back-to-top" data-targets="html">
				<i class="fa fa-angle-up atf-scrollup-icon"></i>
			</button>
			<!-- END back-to-top-->	
		<?php include('assets/estructura/header.php'); ?>

			
			
			<!-- START HOME -->
			<section id="home">
				<div class="atf-slider atf-style1 atf-hero-slider1 atf-hero-slider2">
					<div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1" data-fade-slide="1">
						<div class="slick-wrapper">
							<div class="slick-slide-in">						
								<div class="atf-single-home atf-hero-area" style="background-image: url(assets/img/banner/doctor-banner.jpg);  background-size:cover; background-position: center center;">
									<div class="atf-home-overlay">
										<div class="container">
											<div class="row atf-single-slide-sm2 atf-align-items-details align-items-center atf-single-text justify-content-center">
												 <!--LEFT COL-->
												<div class="col-xl-6 col-lg-6 col-12 text-center atf-single-details ">
													<h5 class="mb-0 d-block d-lg-block text-white">ZUI MEDIC</h5>
													<h2 class="mb-0 d-block d-lg-block">TU SALUD ES NUESTRA PRIORIDAD</h2>
													<p class="pr-lg-5">Nuestros médicos y enfermeras ocupacionales se encargan de velar por la salud de tus colaboradores realizando actividades de control y supervisión.</p>
													<!-- Main-btn -->
													<div class="d-block d-sm-block d-md-none atf-main-btn mt-3"> 
														<a href="contacto.php" class="page-scroll atf-themes-btn mr-4">Contactanos<i class="fa fa-angle-right"></i></a>
														<a href="#" class="page-scroll atf-themes-btn">Ver más<i class="fa fa-angle-right"></i></a>
													</div>
												</div><!--- END COL -->
												<div class="d-none d-sm-none d-md-block col-xl-6 col-lg-6 col-12 atf-hero-img text-lg-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;">
													<div class="formulario-inicio">
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
																		<button type="submit" value="Enviar Mensaje" name="submit" id="submitButton" class="btn atf-themes-btn" title="Enviar Mensaje!" >Contactar</button>
																	</div>
																</div>
															</div>
														</form>
														<p class="form-message"></p>
													</div>
												</div><!--- END COL -->
											</div><!--- END ROW -->
										</div><!--- END CONTAINER -->
									</div><!--- END Overlay -->			
								</div><!--- END slide -->			
							</div><!-- .slick-slide-in -->							
						</div>
					</div><!-- .slick-container -->
					
					<div class="pagination atf-style1 container"></div> <!-- If dont need Pagination then add class .atf-hidden -->
					<div class="swipe-arrow atf-style1 atf-hidden"> <!-- If dont need navigation then add class .atf-hidden -->
						<div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
						<div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
					</div>
				</div><!-- .atf-slider -->
			</section>
			<!-- END  HOME DESIGN -->

			<!--- START SECTION SERVICES -->
			<div id="servicio" class="atf-section-padding atf-blog-area atf-blog-grid-area">
			<div  class="container">
			            <h2>Contamos con excelentes especialistas</h2>
						<div class="atf-slider atf-style2">
						    
							<div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"  data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
								<div class="slick-wrapper">
								    
									<div class="slick-slide-in">
										<div class="atf-post-slide">
											<div class="atf-post-pic">
												<img src="assets/img/servicio/m-o-min.jpg" alt="">
											</div>
											<div class="atf-post-header">
												
												<h4 class="atf-post-title">
													<a href="#">MÉDICOS OCUPACIONALES</a>
												</h4>
											</div>
											<p class="atf-post-description">
												Es importante la incorporación de profesionales de la salud en los centros de trabajo. Ellos cumplen la función de gestionar o realizar la vigilancia de la SALUD de los TRABAJADORES.
											</p>
											<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
												<a href="contacto.php" class="atf-themes-btn">Cotizar<i class="fa fa-angle-right atf-blogs-btn"></i></a>
											</div>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-post-slide">
											<div class="atf-post-pic">
												<img src="assets/img/servicio/e-o-min.jpg" alt="">

											</div>
											<div class="atf-post-header">

												<h4 class="atf-post-title">
													<a href="#">ENFERMERAS OCUPACIONALES</a>
												</h4>
											</div>
											<p class="atf-post-description">
												Ellas   tienen   como   objetivo   CONSERVAR   LA   SALUD   del   trabajador,   prevención y atención de accidentes de trabajo, protegiendo al personal de daños o efermedades a raiz de su acción laboral.
											</p>
											<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
												<a href="contacto.php" class="atf-themes-btn">Cotizar<i class="fa fa-angle-right atf-blogs-btn"></i></a>
											</div>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-post-slide">
											<div class="atf-post-pic">
												<img src="assets/img/servicio/e-min.jpg" alt="">
												
											</div>
											<div class="atf-post-header">
												
												<h4 class="atf-post-title">
													<a href="#">ERGÓNOMOS</a>
												</h4>
											</div>
											<p class="atf-post-description">
												Es  aquel  profesional,  quien  cuenta  con  conocimientos  sólidos  sobre  la  actividad  humana,  el  trabajo  y  los  riesgos  laborales,  los  cuales  pueden  adquirirse de ramas y disciplinas de la ciencia como las ciencias de la salud o las sociales.
											</p>
											<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
												<a href="contacto.php" class="atf-themes-btn">Cotizar<i class="fa fa-angle-right atf-blogs-btn"></i></a>
											</div>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-post-slide">
											<div class="atf-post-pic">
												<img src="assets/img/servicio/t-min.jpg" alt="">
											
											</div>
											<div class="atf-post-header">
											
												<h4 class="atf-post-title">
													<a href="#">TERAPEUTAS</a>
												</h4>
											</div>
											<p class="atf-post-description">
												Son aquellos quienes se enfocan en asistir en el desarrollo de destrezas y en la rehabilitación de personas con discapacidades físicas o mentales. Con el fin de brindarles las herramientas necesarias para que logren funcionar como miembros regulares de la sociedad.
											</p>
											<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
												<a href="contacto.php" class="atf-themes-btn">Cotizar<i class="fa fa-angle-right atf-blogs-btn"></i></a>
											</div>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-post-slide">
											<div class="atf-post-pic">
												<img src="assets/img/servicio/p-min.jpg" alt="">
											
											</div>
											<div class="atf-post-header">
											
												<h4 class="atf-post-title">
													<a href="#">PSICÓLOGO ORGANIZACIONAL</a>
												</h4>
											</div>
											<p class="atf-post-description">
												Son aquellos quienes se enfocan en asistir en el desarrollo de destrezas y en la rehabilitación de personas con discapacidades físicas o mentales. Con el fin de brindarles las herramientas necesarias para que logren funcionar como miembros regulares de la sociedad.
											</p>
											<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
												<a href="contacto.php" class="atf-themes-btn">Cotizar<i class="fa fa-angle-right atf-blogs-btn"></i></a>
											</div>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-post-slide">
											<div class="atf-post-pic">
												<img src="assets/img/servicio/emo-min.jpg" alt="">
											
											</div>
											<div class="atf-post-header">
											
												<h4 class="atf-post-title">
													<a href="#">PROTOCOLOS DE EMO <br>(Exámen Médico Ocupacional)</a>
												</h4>
											</div>
											<p class="atf-post-description">
												Estos exámenes son de alta importancia para la salud del trabajador, además permite diagnosticar  a  tiempo  alguna  condición  que  pueda  relacionarse  con  su  actividad  laboral. El objetivo de estos, son la vigilancia de la salud de los trabajadores.
											</p>
											<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
												<a href="contacto.php" class="atf-themes-btn">Cotizar<i class="fa fa-angle-right atf-blogs-btn"></i></a>
											</div>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-post-slide">
											<div class="atf-post-pic">
												<img src="assets/img/servicio/p-m-min.jpg" alt="">
											
											</div>
											<div class="atf-post-header">
											
												<h4 class="atf-post-title">
													<a href="#">PARAMÉDICOS</a>
												</h4>
											</div>
											<p class="atf-post-description">
												Son aquel personal especialista en tratar emergencias de salud o aquellas en las que se haya registrado un riesgo de vida.
											</p>
											<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
												<a href="contacto.php" class="atf-themes-btn">Cotizar<i class="fa fa-angle-right atf-blogs-btn"></i></a>
											</div>
										</div>
									</div><!-- .slick-slide-in -->

								</div><!-- .slick-slide-Wrapper -->
							</div><!-- .slick-container -->
							
							<div class="pagination atf-style1 atf-flex atf-hidden"></div> <!-- If dont need Pagination then add class .atf-hidden -->
							<div class="swipe-arrow atf-style1"> <!-- If dont need navigation then add class .atf-hidden -->
								<div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
								<div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
							</div>
						</div><!-- .atf-slider -->
					</div><!-- .container -->	
			</div>
			<!--- END SECTION SERVICES -->
			
			<!-- START SERVICE SECTION  -->
			<section id="service" class="atf-service-area atf-section-padding">
				<div class="container">
				    <h2>Tenemos más servicios que pueden complementarte</h2>
				    <br><br>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="atf-single-service-wrap text-center">
								<div class="atf-single-service-wrap">
									<div class="atf-services-icon text-center mb-4">
										<i class="fas fa-solid fa-file-medical"></i>
									</div>
									<div class="atf-service-content">
										<h3>Informes técnicos de vigilancia médica</h3>
										<p>Comparación de informe médicos previos / Detección de personal en riesgo / Exámenes médicos especializados.</p>
									</div>
								</div>
							</div>   
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="atf-single-service-wrap text-center">
								<div class="atf-single-service-wrap">
									<div class="atf-services-icon text-center mb-4">
										<i class="fas fa-solid fa-virus"></i>
									</div>
									<div class="atf-service-content">
										<h3>Medidas Preventivas ANTICOVID</h3>
										<p>Protocolos de seguridad / Aplicación de normativas MINSA /Control y detección de personal / Supervisión de recuperación.</p>
									</div>
								</div>
							</div>   
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="atf-single-service-wrap text-center">
								<div class="atf-single-service-wrap">
									<div class="atf-services-icon text-center mb-4">
										<i class="fas fa-solid fa-user-tie"></i>
									</div>
									<div class="atf-service-content">
										<h3>Implementacióny Asesoría Médica</h3>
										<p>Planes de asesoría médica y seguridad salúbrica.</p><br>
									</div>
								</div>
							</div>   
						</div>
					</div>
				</div>
			</section>
			<!-- Service-Area End-->
	        <?php include('assets/estructura/foot.php');?>
			</div>
		    <?php include('assets/estructura/link-foot.php');?>
	</body>
</html>