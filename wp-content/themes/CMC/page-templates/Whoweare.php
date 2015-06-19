<?php
/**
 * Template Name: Who We are Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section class="header_img page-heading who-we-are-banner heading myheding3">

  <div class="container">
  <?php echo get_option('cmc_wer');?>
    <div class="clear"></div>
  </div>
</section>
<div class="container border-bottom nopad">
  <div class="col-md-8 col-sm-6  text-left" itemscope itemtype="http://schema.org/WebPage">
    <ol class="breadcrumb">
   <div class="breadcrumbs" itemprop="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
    </ol>
  </div>
     <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img  src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>
</div>
<div class="container nopad">
  <div class="col-md-8 col-sm-8  text-left">
	
  <div class="page-detail">
  <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();?>
   <p class="imgleft"><?php echo the_post_thumbnail();?></p>
   <h2><?php the_title();?></h2>
   <p><?php the_content();?></p>
	<?php endwhile;
			?>
  

  </div>

  </div>
  <div class="col-md-4 col-sm-4">
   <?php get_sidebar();?>
  </div>
    <!--    <div class="col-lg-9 f_left border">

    </div>--> 
    <!--    <div class="col-lg-9 f_left border">

    </div>--> 
    <!--    <div class="col-lg-9 f_left border">

    </div>--> 
    <!--    <div class="col-lg-9 f_left border">

    </div>--> 
   <!-- <div class="col-lg-9 f_left"> </div>-->
</div>
</div>


<?php

get_footer();