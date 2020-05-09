<?php

/**
 * Template Name: About Us
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
	
		<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
		<section class="block about-us-block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- block text -->
						<div class="block-text block-img">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
        </section><!-- block area end -->

		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2><?php echo cs_get_option('featured') ?></h2>
							<div class="hidden-xs">
							<?php echo wpautop( cs_get_option('featured_content') ); ?>
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

        <!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
        
		<section class="accordian-section section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="accorian-item">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php

							$faqs = cs_get_option('faqs');
							
							?>
								<?php 
								$faq_no = 0;
								foreach($faqs as $faq):
								 $faq_no++;
								 if($faq_no == 1){
									$area_expendared = 'true';
									$in_class = 'in';
								 }else{
									$area_expendared = 'false';
									$in_class = '';
								 }

								 ?>
									<!-- accordian item-<?php echo $faq_no;?> -->
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading-<?php echo $faq_no;?>">
											<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_no;?>" aria-expanded="<?php $area_expendared ;?>" aria-controls="collapse-<?php echo $faq_no;?>">
												<?php echo $faq['title'] ;?>
											</a>
											</h4>
										</div>
										<div id="collapse-<?php echo $faq_no;?>" class="panel-collapse collapse <?php echo $in_class ;?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_no;?>">
											<div class="panel-body">
											<?php echo wpautop($faq['content']) ;?>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- accordian right text block -->
						<div class="accordian-right-content">
							<h2><?php echo cs_get_option('about_us_title') ?></h2>
							<?php echo wpautop( cs_get_option('about_us_dese') ); ?>
						</div>
					</div>
				</div>
			</div>
        </section>
        
        <!-- end accordian section -->        

	<?php endwhile; ?>

	<?php get_template_part('common/client'); ?>

<?php get_footer(); ?>
