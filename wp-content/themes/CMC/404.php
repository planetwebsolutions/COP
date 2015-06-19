<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<section class="header_img page-heading who-we-are-banner" style="background-image: url('<?php echo get_option('cmc_we');?>')no-repeat 54% top;">
  <div class="container">
  <?php
	// Start the Loop.
	while ( have_posts() ) : the_post();?>
	<h1><?php the_title();?></h1>
	<?php endwhile;
  ?>
  </div>
</section>
<div class="bread_crumb">
  <div class="container">
   <div class="col-md-8 col-sm-6 hidden-xs text-left">
     <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Page Not Found</a></li>      
      
    </ol>
    </div>
 <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img style="margin-left:5px;" src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>
  </div>
</div>
<div class="content">
 <div class="container">
    <div class="col-lg-8 f_left">
     <div class="page-detail">
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

				 </div> 
	</div>

 <div class="col-md-4">
    <?php get_sidebar();?>
</div>
</div>

<?php get_footer(); ?>