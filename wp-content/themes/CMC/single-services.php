<?php

/**

 * The template for displaying all single posts

 *

 * @package WordPress

 * @subpackage Twenty_Thirteen

 * @since Twenty Thirteen 1.0

 */



get_header(); ?>



<section class="header_img heading myheding5">

  <div class="container">

  <?php echo get_option('cmc_st');?>

  </div>

</section>

<div class="bread_crumb">

  <div class="container">

   <div class="col-md-8 col-sm-6 hidden-xs text-left" itemscope itemtype="http://schema.org/WebPage">

     <ol class="breadcrumb" itemprop="breadcrumb">

      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>


      <li><a href="http:dothejob.in/cop-cms/our-services/">Our Services</a></li>      

      <li>Software & Web Developement</li>

    </ol>

    </div>

    <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img  src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>

  </div>

</div>

<div class="content">

  <div class="container">

    <div class="col-lg-8 col-sm-8">

<?php 
while ( have_posts() ) : the_post();
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

    <div class="page-detail">

     <div class="page-title">

      <div class="row">

       <div class="col-sm-2 col-md-2">

     <img class="_img" src="<?php echo $feat_image;?>" alt=" ">

       </div>

       <div class="col-sm-10 col-md-10 aligncenter">

     <div class="page-name"><?php the_title();?></strong></div>

       </div>       

      </div>

     </div> <?php endwhile; 

 ?>  

     

     <p> <?php the_content();?></p>

     

     
    </div>  

   

    </div>



 <div class="col-md-4 col-sm-4">

    <?php get_sidebar();?>

</div>

</div>



<?php get_footer(); ?>