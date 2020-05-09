<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

	<?php
$Header_top_on_of = cs_get_option( 'Header_top_on_of' );
wp_head();
?>

	</head>


	<body <?php body_class();?>>

		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<!-- start top bar -->
		<?php if ( $Header_top_on_of == true ): ?>
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="contact">
								<p>
									<i class="fa fa-phone"></i>
									+880 123 456 789
								</p>
								<p>
									<i class="fa fa-envelope"></i>
									<a href="#">24hrsuport@domain.com</a>
								</p>
							</div><!-- /.contact -->
						</div><!-- /.col-sm-8 -->

						<div class="col-sm-4">
							<div class="social-icon">
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href=""><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div><!-- /.social-icon -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- end top bar -->
		<?php endif;?>

	        <!-- Start Navigation -->
	        <nav class="navbar navbar-default navbar-sticky bootsnav">


	            <div class="container">
	                <!-- Start Header Navigation -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                        <i class="fa fa-bars"></i>
	                    </button>
	                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo logo-scrolled" alt="headerimg"></a>
	                </div>
	                <!-- End Header Navigation -->

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="navbar-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'topmenu',
								'menu_id'        => 'topmenu',
								'menu_class'     => 'nav navbar-nav navbar-right',
								'depth'          => 4,
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),

							) );
						?>
	                </div><!-- /.navbar-collapse -->
	            </div>
	        </nav>
	        <!-- End Navigation -->
	        <div class="clearfix"></div>
		</header> <!-- end header -->