<?php get_header(); ?>

<div class="clearfix"></div>
<div class="col-md-12 slider-alani">
	<div class="row">
		<div class="owl-carousel anasayfa-slider owl-theme">
			<?php if (have_rows('slider_icerikleri', 'option')) :

				while (have_rows('slider_icerikleri', 'option')) :
					the_row();
					$slider_fotografi = get_sub_field('slider_fotograf', 'option');
			?>
					<div class="item owl-lazy" data-src="<?php echo $slider_fotografi['url']; ?>">
						<div class="container">
							<div class="clearfix"></div>
							<div class="slider-baslik-1"><?php the_sub_field('slider_baslik_1_'); ?></div>
							<div class="slider-baslik-2"><?php the_sub_field('slider_baslik_2'); ?></div>
							<div class="slider-buton"><a href="<?php the_sub_field('slider_buton_link'); ?>" class="buton acik-mavi-buton">
									<?php the_sub_field('slider_buton_yazi'); ?></a></div>
						</div>
					</div>
			<?php endwhile;
			else : endif; ?>
		</div>
	</div>
</div>


<div class="clearfix">
<div class="container anasayfa-hizmetlerimiz">
<div class="row">
	<div class="col-md-9 margin-top-30 margin-bottom-30">
		<h2><?php the_field('hizmetlerimi_baslik', 'option') ?></h2>
		<p><?php the_field('hizmetlerimi_yazisi', 'option') ?></p>
	</div>
	<div class="col-md-3 margin-top-30 margin-bottom-30 text-right">
		<a href="<?php the_field('hizmetlerimi_buton_link', 'option') ?>" class="buton mavi-buton">
		<?php the_field('hizmetlerimi_buton_yazi', 'option') ?></a>
	</div>
	<?php
	$hizmetlerimiz_kac_adet = get_field('kac_adet_hizmet_gozuksun', 'option');
	$args = array(
		'post_type' => 'hizmet',
		'order_by' => 'date',
		'post_per_page' => $hizmetlerimiz_kac_adet

	);
	$wp_query = new WP_Query($args);
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="col-md-4 hizmet-oge">
			<?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?>
			<div class="col-md-12 hizmet-oge-aciklama">
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>

				<div class="clearfix"></div>
			</div>
		</div>
<?php endwhile; ?>
</div>
</div>

</div>
</div>
<div class="clearfix"></div>
	<div class="container-fluid anasayfa-hakkimizda">
		<div class="row">
		<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2><?php the_field('hakkimizda_basligi', 'option'); ?></h2>
				<?php the_field('hakkimizda_yazisi', 'option'); ?>
				<a href="<?php the_field('hakkimizda_buton_link', 'option'); ?>" class="buton acik-mavi-buton"><?php the_field('hakkimizda_buton_yazi', 'option'); ?></a>
			</div>
			<div class="col-md-6">
				<?php $hakkimizda_gorseli = get_field('hakkimizda_gorseli', 'option'); ?>
				<img src="<?php echo $hakkimizda_gorseli['url']; ?>" class="img-fluid anasayfa-hakkimizda-foto" alt="" />
			</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	


	<div class="clearfix"></div>

	<div class="container anasayfa-referanslarimiz">

		<div class="row">

			<div class="col-md-9 margin-top-30 margin-bottom-30">
				<h2><?php the_field('referansanlar_basligi', 'option'); ?></h2>
				<p><?php the_field('referansanlar_yazisi', 'option'); ?></p>
			</div>

			<div class="col-md-3 margin-top-30 margin-bottom-30 text-right">

				<a href="<?php the_field('referansanlar_buton_link', 'option'); ?>" class="buton mavi-buton">
					<?php the_field('referansanlar_buton_yazi', 'option'); ?></a>

			</div>

			<div class="clearfix"></div>


			<?php

			
			$referanslarimiz = get_field('kac_adet_referans_gosterilsin', 'option');
			$sayac = 0;
			$args = array(




				'post_type' => 'referans',
				'order_by' => 'date',
				'post_per_page' => $referanslarimiz

			);

			
			$wp_query = new WP_Query($args);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="col-md-3 referans-oge">

					<a href="#" data-toggle="modal" data-target="#ref-<?php echo $sayac; ?>">
						<?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?></a>
					<div class="modal fade" id="ref-<?php echo $sayac; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">

								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body">
									<?php the_post_thumbnail('thumbnail-large', array('class' => 'img-fluid')); ?><br>
									<a href="<?php the_permalink(); ?>">Detaylar İçin Tıklayınız</a>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
								</div>
							</div>
						</div>

				


					</div>
					
				</div>
				<?php $sayac++;
				endwhile; ?>
				
				</div>
				
				
				</div>
				
				</body>

				</html>
				<?php get_footer(); ?>