<?php

/**
 * Template Name: Homepage
 */

get_header(); ?>
	

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
			
			<!-- slide item three -->
		<section class="slider-area">

			<?php
			global $post;
			$args = array( 'posts_per_page' => 5, 'post_type'=> 'slider', 'orderby' => 'menu_order', 'order' => 'ASC' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
			
			<?php 
			$btn_link= get_post_meta($post->ID, 'btn_link', true);
			$btn_text= get_post_meta($post->ID, 'btn_text', true);
			  
			?>

				<div style="background-image: url(<?php the_post_thumbnail_url( 'large' ) ;?>)" class="homepage-slider ">
					<div class="display-table">
						<div class="display-table-cell">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="slider-content">
										<h1><?php the_title(); ?></h1>
										<?php the_content(); ?>
										<a href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?> <i class="fa fa-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			

			<?php endforeach; wp_reset_query(); ?>
			
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2><?php echo cs_get_option('home_featured') ;?></h2>
							<div class="hidden-xs">
								<?php echo wpautop( cs_get_option( 'home_featured_content' )) ;?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single intro -->
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'post_type'=> 'feature', 'orderby' => 'menu_order', 'order' => 'ASC' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post); ?>
						
						<div class="col-md-4">
							<div class="single-intro">
								<div style="background-image: url(<?php the_post_thumbnail_url( 'large' ) ;?>)" class="intro-img"></div>
								<div class="intro-details text-center">
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					<?php endforeach; wp_reset_query(); ?>

				</div>
			</div>
		</section><!-- intro area end -->
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo cs_get_option('home_details') ;?></h2>
							<?php echo wpautop( cs_get_option( 'home_dtails_dese' )) ;?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">							
							<img src="<?php echo cs_get_option('home_details_image') ;?> " alt="images" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="template-title text-center">
							<h2><?php echo cs_get_option('home_service_title') ;?></h2>
							<?php echo wpautop( cs_get_option( 'home_service_dese' )) ;?>
						</div>
					</div>
				</div>
				
				<div class="row">

					<?php
						global $post;
						$args = array( 'posts_per_page' => 6, 'post_type'=> 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post); ?>
						
						
						<!-- single service -->
						<div class="col-sm-6 col-md-4">
							<div class="services-tiem">
								<?php the_post_thumbnail( 'thumbnail', array('class'=> 'hvr-buzz-out') ) ;?>
								<h3><a href="<?php echo get_post_meta( $post->ID, link, true ) ;?>"><?php the_title(); ?></a></h3>
								<?php the_content(); ?>
							</div>
						</div>
						<!-- single service -->
					<?php endforeach; wp_reset_query(); ?>
				</div>
			</div>
		</section><!-- end services section -->
		
		<?php get_template_part('common/client'); ?>

	

<?php get_footer(); ?>