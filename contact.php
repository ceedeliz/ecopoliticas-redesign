
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
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
        <?php 
            include 'blocks/nav.php';
        ?>
		<div class="main-container">
		<section class="contact-photo">
				
				<div class="background-image-holder">
					<img class="background-image" alt="Background Image" src="img/hero4.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1 class="text-white">Contacto<br>
							 Escríbenos
							</h1>
						</div>
					</div><!--end of row-->
					
					<div class="photo-form-wrapper clearfix">
						<form class="email-form">
							<div class="row">
								<div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
									<input class="form-name validate-required" type="text" placeholder="Nombre" name="name">
								</div>
							
								<div class="col-md-3 col-sm-4">
									<input class="form-email validate-required validate-email" type="text" placeholder="Email" name="email">
								</div>
							</div><!--end of row-->
						
							<div class="row">
								<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center">
									<input class="form-message validate-required" type="text" name="message" placeholder="Mensaje">
									<input type="submit" class="send-form btn-filled" value="Enviar">
									<div class="form-success">
										<span class="text-white">Mensaje enviado - Gracias por escribirnos</span>
									</div>
									<div class="form-error">
										<span class="text-white">Revisa los campos y vuelve a intentarlo</span>
									</div>
								</div>	
							</div><!--end of row-->
						</form>
						
					</div><!--end of photo form wrapper-->
					
					<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
								<ul class="social-icons">
                                                                <li>
                                                                        <a href="https://twitter.com/eco_politicas">
                                                                                <i class="icon social_twitter"></i>
                                                                        </a>
                                                                </li>
                                                        
                                                                <li>
                                                                        <a href="https://www.facebook.com/ecopoliticas?_rdr=p">
                                                                                <i class="icon social_facebook"></i>
                                                                        </a>
                                                                </li>

								
								</ul><br>
								<span class="sub">© Copright ecopolíticas - All Rights Reserved</span>
							</div>
						</div><!--end of row-->
		
				</div><!--end of container-->
			
			</section>
            <section>
                <div class="row">
				    <div class="col-sm-12 text-center">
						<h1>Detalles de contacto</h1>
                    </div>
				</div><!--end of row-->
                <div class="row">
				    <div class="col-sm-6 center-block" style="display:flex; justify-content:center;">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.239548742156!2d-99.16388778497767!3d19.40205314668408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff11507df54f%3A0x8793190f0959d373!2sTanana%2C+Piedad+Narvarte%2C+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1549558309432" frameborder="0" style="border:0; width:80%; height: 500px;" allowfullscreen></iframe>
								</div>
							
								<div class="col-sm-6">
									<h2 class="text-center">Tanana</h2>	
									<p class="text-center">Col. Piedad Narvarte, DF 03000</p>	
                                     <p class="text-center"><i class="icon icon-phone"></i> P: (52) 55 4192-4226</p>
                                     <p class="text-center"><i class="icon icon-ribbon"></i> E: admin@ecopoliticas.com</p>
                                     <p class="text-center"><i class="icon icon-clock"></i> H: Lunes - Viernes: 9:00 AM to 6:00 PM</p>
								</div>
							</div><!--end of row-->

            </section>
		</div>
                 <?php 
        include 'blocks/footer.php';
    ?>
    </body>
</html>
				
