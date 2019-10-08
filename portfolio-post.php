 
<?php
include ("../conexion_eco.php");
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<?php

    if (isset($_GET['id_post'])) {
    $post=$_GET['id_post'];
    $sql="SELECT * FROM posts inner join users on posts.id_users=users.id_users where id_posts= $post";
    $res=ejecutar($sql);
    $datos = mysqli_fetch_array($res);

}
?>
    
    <head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="qGM74a2yo9cNhrITi6T9tsIG1kV7eZ_owY3yGx6aAeA" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="<?php echo $datos["keywords"] ?>">
    <meta property="og:image"              content="/img/<?php echo($datos["foto_principal"])?>" />
    <title><?php $titulo = explode("<small>", $datos["titulo"] );
                echo $titulo[0];       ?></title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta charset="utf-8">
        <title>Ecopolíticas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>    </head>
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
			<header class="title">
					<div class="background-image-holder parallax-background">
						<img class="background-image" alt="Background Image" src="img/<?php echo($datos["foto_principal"])?>">
					</div>
					
					<div class="container align-bottom">
						<div class="row">
							<div class="col-xs-12">
								<h1 class="text-white"><?php echo($datos["titulo"])?></h1>
								<span class="sub alt-font text-white">Subido el: <?php echo($datos["fecha"])?></span>
							</div>
						</div><!--end of row-->
					</div><!--end of container-->
			</header>
			
			<section class="article-single">
				<div class="container">
					<div class="row">
		
						<div class="col-sm-4 col-md-3">
							<div class="author-details no-pad-top">
								<img alt="Author" src="img/<?php echo($datos["avatar"])?>">
								<h5><?php echo($datos["nombre"])?></h5>
								<p>Socio Fundador</p>
								<ul class="social-icons">
								<li>
									<a href="#">
										<i class="icon social_twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_facebook"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_tumblr"></i>
									</a>
								</li>
							</ul>
							</div>
						</div>
									
						<div class="col-sm-8">
							<div class="article-body">
                                <?php echo($datos["resena"])?>
								<figure>
									<img alt="Blog Article Figure" src="img/<?php echo($datos["foto_principal"])?>">

									<figcaption><?php echo($datos["titulo"])?></figcaption>
								</figure>
							</div><!--end of article body-->
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
				