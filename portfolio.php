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
        include 'blocks/header.php';
    ?>
     
    <body>
<!--
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
-->			
        <?php 
            include 'blocks/nav.php';
        ?> 
		
		<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="img/hero23.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<span class="text-white alt-font">Portafolio</span>
							<h1 class="text-white">Nuestros proyectos</h1>
							
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="blog-masonry bg-muted">
			
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<ul class="blog-filters">
                                	<li data-filter="*" class="active">Todas</li>		
                                
            <?php  
              $sql="SELECT * FROM categorias";
              $rs=ejecutar($sql);
              $filas = mysqli_num_rows($rs);
              $columnas=mysqli_num_fields($rs);
              $rs=ejecutar($sql);
              $contador= 0;
              while($datos=mysqli_fetch_array($rs)){ ?>
								<li data-filter=".<?php echo($datos["nombre"]); ?>"><?php echo($datos["nombre"]); ?></li>
                                <?php } ?>
							</ul>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
				
				<div class="container">
					<div class="row">
						<div class="col-md-12 order-seq">
							<div class="blog-masonry-container">
            <?php  
              $sql="SELECT *, categorias.nombre as categoria FROM posts inner join users on posts.id_users=users.id_users inner join categorias on posts.id_categorias=categorias.id_categorias order by fecha desc";
              $rs=ejecutar($sql);
              $filas = mysqli_num_rows($rs);
              $columnas=mysqli_num_fields($rs);
              $rs=ejecutar($sql);
              $contador= 0;
              while($datos=mysqli_fetch_array($rs)){ ?>
                <?php $contador++ ?>
                <?php if($contador%2){ ?>
              <div class="col-md-6 col-sm-6 blog-masonry-item <?php echo($datos["categoria"]); ?>">
                <div class="item-inner">
                    <a href="blog-single.html">
                        <img alt="Blog Preview" src="img/<?php echo($datos["foto_principal"]); ?>">
                    </a>
                    <div class="post-title">
                        <h2><?php echo($datos["titulo"]); ?></h2>
                            <?php echo(substr($datos["resena"],0,500). "..."); ?>
                        <div class="post-meta">

                            <span class="sub alt-font">Posted on <?php echo($datos["fecha"]); ?></span>
                        </div>
                        <a href="articulo/<?php echo ($datos ["id_posts"]) ?>/<?php echo beauty_url($datos["titulo"])[0] ?>" class="link-text">Ver más</a>
                    </div>
                </div>
            </div>
               <?php }else{ ?> 
                <div class="col-md-6 col-sm-6 blog-masonry-item <?php echo($datos["categoria"]); ?>">
                            <div class="item-inner quote-post">
                                <div class="post-title">
                                    <h1><?php echo($datos["titulo"]); ?></h1>
                                    <div class="post-meta">
                                      <span class="sub alt-font">Posted on <?php echo($datos["fecha"]); ?></span>
             
                                    </div>
                       <a href="articulo/<?php echo ($datos ["id_posts"]) ?>/<?php echo beauty_url($datos["titulo"])[0] ?>" class="link-text">Ver más</a>                                </div>
                            </div>
                        </div><!--end of individual post-->

              <?php } ?>
            
            <?php } ?>
        

					
							</div><!--end of blog masonry container-->
							
						</div>
						
					</div><!--end of row-->
				</div><!--end of container-->
			
		
				
			</section>
		</div>
                <?php 
        include 'blocks/footer.php';
    ?>

		<script>
/*            $('.order-seq .blog-masonry-item').eq(1).addClass('branding');
            $('.order-seq .blog-masonry-item').eq(2).addClass('development');
            $('.order-seq .blog-masonry-item').eq(3).addClass('development');
            $('.order-seq .blog-masonry-item').eq(4).addClass('print');
            $('.order-seq .blog-masonry-item').eq(5).addClass('branding');
            $('.order-seq .blog-masonry-item').eq(6).addClass('print');
            $('.order-seq .blog-masonry-item').eq(7).addClass('print');
            $('.order-seq .blog-masonry-item').eq(8).addClass('development'); */
        </script>				
    </body>
</html>
				
