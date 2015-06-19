<?php
/**
 * Template Name:Testimonial Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section class="header_img page-heading testimonial-banner heading myheding2">
  <div class="container">
 <?php echo get_option('cmc_test');?>
    <div class="clear"></div>
  </div>
</section>
<div class="container border-bottom nopad">
  <div class="col-md-8 col-sm-6 text-left" itemscope itemtype="http://schema.org/WebPage">
    <ol class="breadcrumb">
      <div class="breadcrumbs"  itemprop="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
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
  
  <ul class="testimonials">
  	<?php
//WordPress loop for custom post type
 $my_query = new WP_Query('post_type=customer-review&order=ASC'
 		 );
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <li class="testimonial">
    <div class="text"><p>"<?php the_content();?>"</p></div>
    <div class="name"><?php the_title();?><span><?php echo do_shortcode('[types field="author-destination"][/types]');?><br/><?php echo do_shortcode('[types field="author-company-name"][/types]');?></span></div>
   </li>
   <?php endwhile;  wp_reset_query(); ?>
  </ul>

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