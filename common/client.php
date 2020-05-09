<?php 
	$gallery_10 = cs_get_option('footer_client_gallery');
	$gallery_array_20   = explode( ',', $gallery_10 );
	if ( ! empty( $gallery_10 ) ): 
?>
		<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
		<section class="client-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="all-client-logo">
						<?php 
							foreach($gallery_array_20 as $gallery_30):
							$gallery_40 = wp_get_attachment_image_src( $gallery_30, 'medium' );
							?>
							<img src="<?php echo $gallery_40[0];?>" alt="" /> 
							<?php endforeach; ?>
						</div>

					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- end client section -->
<?php endif; ?>
