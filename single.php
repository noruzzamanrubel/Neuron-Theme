<?php get_header(); ?>

		<!-- ::::::::::::::::::::: start breadcrumb:::::::::::::::::::::::::: -->
		<section class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2>News &amp; Press</h2>
							<p><a href="<?php echo esc_url(home_url()) ;?>">Home</a> / News Details</p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
        </section><!-- end breadcrumb -->

        <!-- ::::::::::::::::::::: single-blog section:::::::::::::::::::::::::: -->
    <?php if ( have_posts() ) : while(have_posts()) : the_post();?>    
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- post wrapper -->
						<div class="post-wrapper clearfix">
							<!-- post thumbnail -->
							<div class="single-thumb">
                                <?php the_post_thumbnail(); ?>
							</div>
							
							<!-- start single blog content -->
							<div class="blog-content">
								<!-- start single blog header -->
								<header class="single-header">
									<div class="single-post-title">
										<h2><?php the_title(); ?></h2>
									</div>
									<!-- post meta -->
									<div class="post-meta">
										<ul>
											<li>
												<a href="<?php the_permalink();?>">
													<i class="fa fa-user"></i>
													<?php the_author();?>
												</a>
											</li>
											<li>
												<a href="<?php the_permalink();?>">
													<i class="fa fa-tag"></i>
													<?php the_tags();?>
												</a>
											</li>
											<li>
												<a href="<?php the_permalink();?>">
													<i class="fa fa-calendar"></i>
													<?php the_time( 'F j, Y' ) ;?> 
												</a>
											</li>
											<li>
												<a href="<?php the_permalink();?>">
													<i class="fa fa-comment"></i>
														comment
												</a>
											</li>
											<li class="rating">
												<a href="<?php the_permalink();?>">
													Rating
													<ul>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
														<li><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</a>
											</li>
										</ul>
									</div>
								</header><!-- /.end single blog header -->
								
								<!-- start single blog entry content -->
								<div class="entry-content">
                                    <?php the_content(); ?>

								</div><!-- /.end single blog entry content -->							
								
							</div><!-- /.end single blog content -->
							
							<!-- start comments wrapper -->
						<?php if ( comments_open() || get_comments_number() ) : ?>
							<div class="comments-wrapper">
								<?php comments_template(); ?>

							</div><!-- /.end comments wrapper -->

						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
        </section><!-- ./end single-blog section -->
<?php endwhile; endif;?>   

<?php get_footer(); ?>