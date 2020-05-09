
<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>


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
    
        <!-- ::::::::::::::::::::: start contant section :::::::::::::::::::::::::: -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                        <!-- contact title -->
                        <div class="template-title text-center">
                            <h2><?php echo cs_get_option('Contact_page_title'); ?></h2>
                            <?php echo wpautop(cs_get_option('contact_page_content')); ?>
                        </div>
                    </div>
                    <div class="gmap">
                        <?php echo do_shortcode( '[gmap]' ) ;?>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-8">

                        <form class="contact-form" id="contactForm" name="contact-form" action="sendemail.php" method="POST">
                            <?php the_content(); ?>
                        </form>
                    </div>
                    
                    <div class="col-md-4">
                        <!-- company address -->
                        <div class="company-address">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <?php echo wpautop(cs_get_option('company_address_1')); ?>
                                    <span class="divider"></span>
                                    <?php echo wpautop(cs_get_option('company_address_2')); ?>
                                    
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    Fax: <?php echo cs_get_option('fax'); ?>
                                    <br>Phone: <?php echo cs_get_option('phone'); ?>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a><?php echo cs_get_option('email'); ?></a>
                                    <a><?php echo cs_get_option('website'); ?></a>
                                </li>
                            </ul>
                        </div><!-- ./end company address -->
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
    
    <?php get_footer(); ?>