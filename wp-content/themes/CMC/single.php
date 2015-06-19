<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<section class="header_img">
  <div class="container">
    <h1>COMPANY</h1>
    <h3>Our Services Detail</h3>
  </div>
</section>
<div class="bread_crumb">
  <div class="container">
   <div class="col-md-8 col-sm-6 hidden-xs text-left" itemscope itemtype="http://schema.org/WebPage">
     <ol class="breadcrumb">
     <div class="breadcrumbs" itemprop="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
    </ol>
    </div>
    <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img style="margin-left:5px;" src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>
  </div>
</div>
<div class="content">
 <div class="container">
    <div class="col-lg-8 col-sm-8">
    	<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();?>
<h2><?php the_title();?></h2>
</br>
			<?php the_content();?>
	<?php endwhile;
			?>
	</div>

 <div class="col-md-4 col-sm-4">
    <?php get_sidebar();?>
</div>
</div>

<?php get_footer(); ?>