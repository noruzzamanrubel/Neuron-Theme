<?php 
/**
 * Template Name: Servics
 */

get_header();?>

	<?php while(have_posts()): the_post(); ?>

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<section <?php if(has_post_thumbnail( )):?> style="background-image:url(<?php the_post_thumbnail_url( 'large' );?>)"<?php endif; ?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2><?php the_title(); ?></h2>
							<p><a href="<?php echo site_url();?>">Home</a> /<?php the_title(); ?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->
	
		
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

		<!-- ::::::::::::::::::::: Block Content :::::::::::::::::::::::::: -->
		<section class="block block2">
			<div class="container">
				<div class="row">
					<!-- block image -->
					<div class="col-md-12">
						<div class="block-img block-text">
							<?php the_content(); ?>
						</div>
					</div>
					<!-- block content -->					
				</div>
			</div>
		</section><!-- block area end -->

	<?php endwhile; ?>

<?php get_footer(); ?>
