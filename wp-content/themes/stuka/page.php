<?php get_header(); ?>



<?php while(have_posts()) : the_post(); ?>

<div class="container sayfa-kutusu">
	<div class="row">
		<div class="col-md-12  margin-bottom-30">
			 <h2><?php the_title(); ?></h2>
             <?php the_post_thumbnail('thumbnail-large',array('class' =>'img-fluid margin-bottom-30'));?>
		<?php the_content();?>				
           
    </div>
            <?php endwhile; ?>
	</div>	
</div>





			
<?php get_footer(); ?>			