<!doctype html>
<html lang="en">
  <head>
    <title><?php wp_title('|',true,'right'); ?></title>
    <meta charset="utf-8">

	

   <?php wp_head();?>
     </head>
  <body>
      


  
	<div class="col-md-12 col-12 header-ust">
	
	<div class="container">
		<div class="row">
		<div class="col-md-3 col-sm-3 col-6 header-slogan"><?php the_field('header_ust_slogan','option');?> </div>
		<div class="col-md-3 col-sm-2 col-6 header-telefon"><i class="fas fa-phone-volume"></i> <?php the_field('header_ust_telefon','option');?></div>
		<div class="col-md-3 col-sm-2 col-6 header-mail"><i class="fas fa-envelope"></i> <a href="mailto:<?php the_field('Header_ust_email','option');?>"><?php 
        the_field('Header_ust_email','option')?></a></div>
		<div class="col-md-3 col-sm-5 col-6 header-sosyal"><ul class="list-unstyled">

        <?php 

$sosyal_medya_facebook = get_field('header_sosyal_medya_facebook','option');
$sosyal_medya_twitter = get_field('header_sosyal_medya_twitter_adresi','option');
$sosyal_medya_linkedin = get_field('header_sosyal_medya_linkedin_adresi','option');
$sosyal_medya_instgram = get_field('header_sosyal_medya_instagram_adresi','option');




?>
<?php if($sosyal_medya_facebook):?>
			<li><a href="<?php the_field('header_sosyal_medya_facebook','option');?>"><i class="fab fa-facebook"></i></a></li>
<?php endif;?>

<?php if($sosyal_medya_twitter):?>
    <li><a href="<?php the_field('header_sosyal_medya_twitter_adresi','option');?>"><i class="fab fa-twitter"></i></a></li>
<?php endif;?>


<?php if($sosyal_medya_linkedin):?>
    <li><a href="<?php the_field('header_sosyal_medya_linkedin_adresi','option');?>"><i class="fab fa-linkedin"></i></a></li>
<?php endif;?>


<?php if($sosyal_medya_instgram):?>
    <li><a href="<?php echo $sosyal_medya_instgram;?>"><i class="fab fa-instagram"></i></a></li>
<?php endif;?>
			

			

			
			</ul>
		</div>	
		</div>	
	</div>
	
	</div>
	<div class="clearfix"></div>
	
	<div class="container header-alani">
		<div class="row">
	<div class="col-md-2 col-sm-3 col-6 header-logo">


	<?php $site_logosu = get_field('site_logosu' ,'option');?>
		
		
	
	
	
	
	<a href=""><img src="<?php echo $site_logosu['url']; ?>" class="img-fluid" alt=""/></a></div>
	<div class="col-md-10 col-sm-9 col-6 header-menu">



	<?php wp_nav_menu(array('theme_location' => 'anamenu','menu_class' => 'ana-menusu')); ?>

			
		
		
	<div class="mobile-menu">
	<?php wp_nav_menu(array('theme_location' => 'mobilmenu','menu_class' => 'mobile-menusu')); ?>
	
		</div>
	<a href="#" class="mobile-menu-ackapa"><i class="fa fa-bars"></i></a>
		
	</div>
		</div>	
	</div>	






