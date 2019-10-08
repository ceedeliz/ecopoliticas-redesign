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
						<img class="background-image" alt="Background Image" src="img/side2.jpg">
					</div>
					
					<div class="container align-bottom">
						<div class="row">
							<div class="col-xs-12">
								<h1 class="text-white">Stock photography in cafe windows</h1>
								<span class="sub alt-font text-white">15th July 2014 - 3 Minute Read</span>
							</div>
						</div><!--end of row-->
					</div><!--end of container-->
			</header>
			
			<section class="article-single">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-9">
							<div class="article-body">
								<p class="lead">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
								</p>
							
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
								</p>
								<figure>
									<img alt="Blog Article Figure" src="img/hero18.jpg">
									<figcaption>Here is a caption for this picture</figcaption>
								</figure>
								<p>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
								</p>
								<h2>A mid-post heading for some attention</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
								</p>
								<blockquote>
									“Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est”
								</blockquote>
								<p>
									Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
								</p>
							</div><!--end of article body-->
							<div class="author-details">
								<img alt="Author" src="img/team-small-1.png">
								<h5>Chip Mayer</h5>
								<p>
									Molly Lautamo is a freelance writer and conservationist. She currently works as the Admissions Coordinator and oversees communications at the Seymour Marine Discovery Center in Santa Cruz, CA.
								</p>
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
						
						<div class="col-sm-3 col-md-offset-1">
							<div class="blog-sidebar">
								<div class="sidebar-widget">
									<h5>Categories</h5>
									<ul>
										<li><a href="#">Web Design <i class="icon arrow_right"></i></a></li>
										<li><a href="#">Photography <i class="icon arrow_right"></i></a></li>
										<li><a href="#">Lifestyle <i class="icon arrow_right"></i></a></li>
									</ul>
								</div>
								
								<div class="sidebar-widget">
									<h5>Recent Posts</h5>
									<ul>
										<li><a href="#">Discussing Web Trends <i class="icon arrow_right"></i></a></li>
										<li><a href="#">Image Slider Post <i class="icon arrow_right"></i></a></li>
										<li><a href="#">Soundcloud Embed Post <i class="icon arrow_right"></i></a></li>
									</ul>
								</div>
								
								<div class="sidebar-widget">
									<h5>Tags</h5>
									<ul class="tags">
										<li><a href="#">Portfolio</a></li>
										<li><a href="#">Web Design</a></li>
										<li><a href="#">Photography</a></li>
										<li><a href="#">Responsive</a></li>
										<li><a href="#">Freebie</a></li>
										<li><a href="#">Variant</a></li>
									</ul>
								</div>
								
								<div class="sidebar-widget">
									<h5>Instagram</h5>
									<div class="instafeed" data-user-name="behance">
										<ul></ul>
									</div>
								</div>
								
								<div class="sidebar-widget">
									<h5>Twitter</h5>
									<div id="tweets" data-widget-id="492085717044981760">
							
									</div>
								</div>
							</div>
						</div>
						
					</div><!--end of row-->
					
					<div class="row">
						<div class="col-md-8 col-sm-9">
							<div class="comment-list">
								<h5>4 Comments</h5>
								<ol>
									<li>
										<div class="blog-comment">
											<div class="user">
												<img alt="User" src="img/team-small-2.png" />
											</div>
											<div class="message">
												<div class="info">
													<h6>Chip Mayer</h6>
													<span class="date alt-font sub">September 17 2014</span>
													<a href="#" class="link-text">Reply</a>
												</div>
												<p>
													Under my tutelage, you will grow from boys to men. From men into gladiators. And from gladiators into Swansons.
												</p>
											</div>
										</div>
									</li><!--end of individual comment-->
									
									<li>
										<div class="blog-comment">
											<div class="user">
												<img alt="User" src="img/team-small-3.png" />
											</div>
											<div class="message">
												<div class="info">
													<h6>Rita Repulsa</h6>
													<span class="date alt-font sub">September 18 2014</span>
													<a href="#" class="link-text">Reply</a>
												</div>
												<p>
													Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
												</p>
											</div>
										</div>
									</li><!--end of individual comment-->
									
									<ul class="children">
										<li>
											<div class="blog-comment">
												<div class="user">
													<img alt="User" src="img/team-small-4.png" />
												</div>
												<div class="message">
													<div class="info">
														<h6>Robin Banks</h6>
														<span class="date alt-font sub">September 17 2014</span>
														<a href="#" class="link-text">Reply</a>
													</div>
													<p>
														Under my tutelage, you will grow from boys to men. From men into gladiators. And from gladiators into Swansons.
													</p>
												</div>
											</div>
										</li><!--end of individual comment-->
									</ul>
									
									<li>
										<div class="blog-comment">
											<div class="user">
												<img alt="User" src="img/team-small-1.png" />
											</div>
											<div class="message">
												<div class="info">
													<h6>Bill Thompson</h6>
													<span class="date alt-font sub">September 12 2014</span>
													<a href="#" class="link-text">Reply</a>
												</div>
												<p>
													Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
												</p>
											</div>
										</div>
									</li><!--end of individual comment-->
									
								</ol>
							</div><!--end of comments list-->
							
							<div class="comment-form-wrapper">
								<h5>Join the conversation</h5>
								<p>
									Your email address will not be published. Required fields are marked *
								</p>
								<div class="comment-respond">
									<h5>Leave a reply</h5>
									<form class="comment-form">
										<div class="form-input">
											<input type="text" placeholder="Your Name" />
										</div>
										
										<div class="form-input">
											<input type="text" placeholder="Your Email" />
										</div>
										
										<div class="form-input">
											<input type="text" placeholder="Website" />
										</div>
										
										<div class="form-input">
											<textarea rows="8" placeholder="Your comment here"></textarea>
										</div>
										
										<div class="form-input">
											<input type="Submit" class="btn btn-primary" value="Submit Comment" />
										</div>
										
									</form>
								</div>
							</div><!--end of comment form wrapper-->
						</div><!--end of 8 columns-->
					</div><!--end of row-->
					
				</div><!--end of container-->	
			</section>
		</div>
		
        <?php 
        include 'blocks/footer.php';
    ?>

    </body>
</html>
				