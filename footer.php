		
			<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
		<footer>
			<div class="primary-footer">
				<div class="container">
					<div class="row">
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-4">
							<div class="footer-widget about-us">
								<?php if(is_active_sidebar( 'footer-1' )){
									dynamic_sidebar( 'footer-1' );
								} ;?>

								<?php 
									$gallery_1 = cs_get_option('footer_gallery');
									$gallery_array_2   = explode( ',', $gallery_1 );
									if ( ! empty( $gallery_1 ) ): 
								?>
								<div class="online-card"> 
									<?php 
										foreach($gallery_array_2 as $gallery_3):
										$gallery_4 = wp_get_attachment_image_src( $gallery_3, 'thumbnail' );
									?>
									<img src="<?php echo $gallery_4[0];?>" alt="" />
									<?php endforeach; ?>
								</div>
								<?php endif; ?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-2">
							<div class="footer-widget usefull-link">
								<?php if(is_active_sidebar( 'footer-2' )){
									dynamic_sidebar( 'footer-2' );
								} ;?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget latest-post">
								<?php if(is_active_sidebar( 'footer-3' )){
									dynamic_sidebar( 'footer-3' );
								} ;?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget news-letter">
								<?php if(is_active_sidebar( 'footer-4' )){
										dynamic_sidebar( 'footer-4' );
									} ;?>								
							</div><!-- /.news-letter -->
						</div><!-- end single footer widget -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.primary-footer -->

			<!-- footer copyright area -->
			<div class="copyright-wrapper text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php echo cs_get_option('footer_copyright'); ?>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- ./end copyright-wrapper -->
		</footer>

		<!-- preloader -->
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_four"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_one"></div>
				</div>
			</div>
		</div>

		<!-- main jQuery -->
        <?php wp_footer(); ?>
	</body>
</html>




