<?php
include ("../conexion_eco.php");
ini_set('display_errors', '1');
//var_dump((int)($datos["calificacion"]))
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <?php 
        include 'blocks/header.php';
    ?>
    <body>
        <?php 
            include 'blocks/nav.php';
        ?>
		<div class="main-container">
			<header class="fullscreen-element no-pad centered-text">
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Background Image" src="img/header1.JPG">
				</div>
				
				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="text-white alt-font">Análisis Costo Beneficio</span>
							<h1 class="text-white">Bienvenido al sitio de Ecopolíticas</h1>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
					<section class="feature-selector">
				<div class="container">
					<div class="row">
						<ul class="selector-tabs clearfix">
							<li class="clearfix text-primary col-md-4 col-sm-6 active">
									<i class="icon icon-globe"></i>
									<span>Análisis Costo Beneficio</span>
							</li><!--end of tab-->
						
							<li class="clearfix text-primary col-md-4 col-sm-6">
									<i class="icon icon-map"></i>
									<span> Valoración Económica de Servicios Ambientales</span>
							</li><!--end of tab-->
						
							<li class="clearfix text-primary col-md-4 col-sm-6">
									<i class="icon icon-presentation"></i>
									<span>Investigación</span>
							</li><!--end of tab-->
												</ul>
					</div>
				</div>
				
				<div class="container">
					<ul class="selector-content">
						<li class="clearfix active">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1> Análisis Costo Beneficio</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
		          						Este recurso permite realizar análisis costo beneficio desde una perspectiva social. Para utilizar esta herramienta es suficiente con subir un archivo de texto con el formato preestablecido (es posible descargar un ejemplo) y la aplicación calcula los indicadores de rentabilidad más relevantes a partir de una análisis de Monte Carlo.
									</p>	
                                    <a href="http://www.acbgiz.org/" class="btn btn-primary">Ver más</a>

								</div>
							
								<div class="col-sm-6">
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1> Valoración Económica de Servicios Ambientales</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
                                        En esta sección se encuentra un compendio de los estudios sobre valoración económica de servicios ambientales en México. Puedes realizar consultas sobre una base de datos sistematizada. La base contiene más de 300 registros sobre distintos bienes y servicios ambientales de los distintos ecosistemas en México. (Contenido en inglés)
									</p>
        							<a href="http://www.ecopoliticas.com/value/" class="btn btn-primary">Ver más</a>

								</div>
							
								<div class="col-sm-6">
									<p class="lead">

									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Investigación</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
                                        En esta sección se muestran los principales productos académicos y proyectos de consultoría que hemos realizado. Los principales temas que encontrarás están relacionados a los bosques, a la relación entre medio ambiente y pobreza, al diseño de evaluación de impacto, entre otros.
									</p>
                                    <a href="portfolio.php" class="btn btn-primary">Ver más</a>
								</div>
							
								<div class="col-sm-6">
									<p class="lead">

									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Numerous appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
					</ul>
				</div>
			</section>
			
	
			<section class="pure-text-centered">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
							<h1><strong>¿Qué somos?</strong></h1>
							<p class="lead">
                                Ecopolíticas es una organización integrada por especialistas en economía ambiental con más de 20 años de experiencia en el diseño, implementación y evaluación de políticas ambientales. En este sitio concentramos algunas herramientas que hemos desarrollado para el análisis económico. Asimismo, presentamos un compendio de los principales proyectos en los que hemos estado involucrados en los últimos años. Si deseas mayor información acerca de nuestros servicios no dudes en contactarnos.
                            </p>
						</div>
					</div><!--end of row-->
		
				</div><!--end of container-->
			</section>
			
			<section class="side-image clearfix">
				<div class="image-container col-md-5 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img class="background-image" alt="Background Image" src="img/equipo_trabajo.jpeg">
					</div>
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 content clearfix">
							<h1>Nuestros recursos</h1>
							<p class="lead">
                                Ecopolíticas es una organización compuesta por académicos especialistas en economía ambiental que trabajan para el diseño, implementación y evaluación de políticas públicas en materia ambiental.
							</p>
						
							<div class="row">
								<div class="col-md-4 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-globe"></i>
										</div>
										<div class="feature-text">
											<h6>Investigadores especializados en <br> economía ambiental</h6>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-4 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-linegraph"></i>
										</div>
										<div class="feature-text">
											<h6>Desarrollo de modelos estadísticos</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-4 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-map  icon-large"></i>
										</div>
										<div class="feature-text">
											<h6>Análisis con Sistemas de Información Geográfica (SIG)</h6>
										</div>
									</div>
								</div><!--end of feature-->

							</div><!--end of row-->
						
							<div class="row">
								<div class="col-md-4 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-laptop icon-large"></i>
										</div>
										<div class="feature-text">
											<h6>Diseño de recursos didácticos en línea</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-4 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-book-open icon-large"></i>
										</div>
										<div class="feature-text">
											<h6>Trabajo de campo</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-4 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-browser icon-large"></i>
										</div>
										<div class="feature-text">
											<h6>Programación web y computacional</h6>
										</div>
									</div>
								</div><!--end of feature-->
							</div><!--end of row-->
					
						</div>
					</div><!--end of row-->
				</div>
			</section>
			
			<section class="video-inline">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<h1 class="space-bottom-medium">Servicios</h1>
							<p class="lead space-bottom-medium">
                                    Si te interesan nuestros servicios haz contacto con nosotros.							
                            </p>
							<a href="contact.php" class="btn btn-primary">Contáctanos</a>
						</div>
						
						<div class="col-md-6 col-sm-12">
							<div class="inline-video-wrapper">
								<video controls="">
									<source type="video/webm" src="video/video.webm">
									<source type="video/mp4" src="video/video.mp4">
									<source type="video/ogg" src="video/video.ogv">
								</video>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
			
			<section class="bg-primary">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="testimonials-slider text-center">
								<ul class="slides">
									<li>
										<p class="text-white lead">Pivot is hands down the most flexible and enjoyable HTML template I've ever used. I was a startup framework die-hard but now my eyes have been opened to the sheer power of Variant page builder, I won't be going back!</p>
										<span class="author text-white">Louise Duke - Mother Goose</span>
									</li>
									
									<li>
										<p class="text-white lead">I was getting fed up with the hassle of setting up bloated WordPress themes. Luckily I've now found Pivot with Variant. Building pages in real-time without a CMS gives me all the power and flexibility I could want.</p>
										<span class="author text-white">Elizabeth Atkinson - Shapewear Australia</span>
									</li>
									
									<li>
										<p class="text-white lead">The plethora of content blocks available in Pivot has made it my go-to template of choice. I've already used it for a number of clients - all of which have been thrilled with the outcome. Well done Medium Rare!</p>
										<span class="author text-white">Toby Whittaker - Design Dojo</span>
									</li>
								</ul>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
			
			<section class="clients">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="lead">Nuestros socios han trabajado con:</p>
						</div>
					</div><!--end of row-->
					
					<div class="row client-row">
						<div class="row-wrapper">
							<div class="col-sm-2 text-center">
								<img alt="client" src="img/logos_bussines/126_a_0.jpg">
							</div>
						
							<div class="col-sm-2 text-center">
								<img alt="client" src="img/logos_bussines/CSFlogo_optimizedcolor.gif">
							</div>
						
							<div class="col-sm-2 text-center">
								<img alt="client" src="img/logos_bussines/logo.jpg">
							</div>
						
							<div class="col-sm-2 text-center">
								<img alt="client" src="img/logos_bussines/Logo_INECC.jpg">
							</div>
							<div class="col-sm-2 text-center">
								<img alt="client" src="img/logos_bussines/logotipoconeval_color.png">
							</div>

						</div>
					</div><!--end of row-->
					
				</div><!--end of container-->
			</section>
		</div>
        <?php 
        include 'blocks/footer.php';
    ?>
    </body> 
</html>
				
