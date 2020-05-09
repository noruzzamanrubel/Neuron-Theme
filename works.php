<?php

/**
 * Template Name: Works
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
	

	<!-- ::::::::::::::::::::: start portfolio section:::::::::::::::::::::::::: -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<!-- portfolio title -->
					<div class="template-title text-center">
						<h2><?php echo cs_get_option('works_title'); ?></h2>
						<?php echo wpautop(cs_get_option('works_content')); ?>
					</div>
				</div>
			</div>
		
			<div class="row">
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => 6, 'post_type'=> 'work', 'orderby' => 'menu_order', 'order' => 'ASC' );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>

                <!-- portfolio item -->
                <div class="col-sm-6 col-md-4">
                    <div class="portfolio-item">
                        <?php the_post_thumbnail('large') ;?>
                        <div class="portfolio-details">
                            <h3><a href="<?php the_permalink( ) ;?>"><?php the_title(); ?></a></h3>
                            <?php echo get_post_meta( $post->ID, 'sub_title', true ) ?>
                        </div><!-- /.portfolio-details -->
                    </div><!-- /.portfolio-item -->
                </div>

                <?php endforeach; wp_reset_query(); ?>
				
			</div>
		</div>
	</section>
	
	<!-- ::::::::::::::::::::: testimonial section:::::::::::::::::::::::::: -->
	<section class="testimonial text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h3><?php echo cs_get_option('works_ceo_quote'); ?></h3>
					<h4><a href="<?php echo cs_get_option('works_ceo_link'); ?>"><?php echo cs_get_option('works_ceo_name'); ?></a></h4>
					<span><?php echo cs_get_option('works_ceo_post'); ?></span>
				</div>
			</div>
		</div>
	</section><!-- ./end testimonial section -->       

	<?php endwhile; ?>

<?php get_footer(); ?>
