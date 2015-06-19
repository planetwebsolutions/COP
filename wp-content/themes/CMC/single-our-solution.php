<?php

/**

 * The template for displaying all single posts

 *

 * @package WordPress

 * @subpackage Twenty_Thirteen

 * @since Twenty Thirteen 1.0

 */



get_header(); ?>

<section class="portfolio-details page-heading heading myheding">

  <div class="container">

  

  <?php echo get_option('cmc_os');?>

    <div class="clear"></div>

  </div>

</section>

<div class="container border-bottom nopad">

  <div class="col-md-8 col-sm-6 hidden-xs text-left" itemscope itemtype="http://schema.org/WebPage">

    <ol class="breadcrumb">

       <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>


      <li><a href="http://dothejob.in/cop-cms/our-solutions/">Our Solutions</a></li>      
<?php while ( have_posts() ) : the_post(); ?>
      <li><?php echo the_title();?></li>
 <?php endwhile; 
 ?>
    </ol>

  </div>

  		

   <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>

</div>	

<div class="container nopad">

<?php while ( have_posts() ) : the_post(); ?>

  <div class="col-md-8 col-sm-12 col-xs-12 text-left portfolio-detail">
  <div id="slideshow-1">
    <p class="custom-captionoutr">
       
        <span class="custom-caption"></span>
    </p>
    <div id="cycle-1" class="cycle-slideshow"
        data-cycle-slides="> div"
        data-cycle-timeout="0"
        data-cycle-prev="#slideshow-1 .cycle-prev"
        data-cycle-next="#slideshow-1 .cycle-next"
        data-cycle-caption="#slideshow-1 .custom-caption"
        data-cycle-caption-template="Slide {{slideNum}} of {{slideCount}}"
        data-cycle-fx="fade"
        >
        <div><?php echo do_shortcode('[types field="dtail-page-image1" size="crope-image" align="none"][/types]');?></div>
        <div><?php echo do_shortcode('[types field="dtail-page-image2" size="crope-image"][/types]');?></div>
        <div><?php echo do_shortcode('[types field="dtail-page-image3" size="crope-image"][/types]');?></div>
    </div>
</div>
     <div id="slideshow-2">
    <div id="cycle-2" class="cycle-slideshow"
        data-cycle-slides="> div"
        data-cycle-timeout="0"
        data-cycle-prev="#slideshow-2 .cycle-prev"
        data-cycle-next="#slideshow-2 .cycle-next"
        data-cycle-caption="#slideshow-2 .custom-caption"
        data-cycle-caption-template="Slide {{slideNum}} of {{slideCount}}"
        data-cycle-fx="carousel"
        data-cycle-carousel-visible="3"
        data-cycle-carousel-fluid=true
        data-allow-wrap="false"
        >
      <div><img src="<?php echo do_shortcode('[types field="dtail-page-image1" alt="tab1" title="tab1" size="crope-image" align="none" url="true"][/types]');?>" alt="">
         <span>&nbsp;</span>
      </div>
        <div><img src="<?php echo do_shortcode('[types field="dtail-page-image2" size="crope-image" url="true"][/types]');?>" alt="">
         <span>&nbsp;</span>
        </div>
        <div><img src="<?php echo do_shortcode('[types field="dtail-page-image3" size="crope-image" url="true"][/types]');?>" alt="">
         <span>&nbsp;</span>
        </div>
    </div>

    <p class="pre_next">
        <a href="#" class="cycle-prev"><img src="images/pre-arrowicon.png" width="11" height="19"></a> <a href="#" class="cycle-next"><img src="images/next-arrowicon.png" width="11" height="19"></a>
      
    </p>
</div>  

    <div class="border-bottom toppad">

      <div class="col-md-6 portfolio-title"><?php the_title();?> </div>

      <div class="col-md-6 text-right">

        <ol class="breadcrumb portfolio-breadcrumb">

   <li> <?php $categories = get_the_category(); foreach($categories as $category) { echo $category->name . '/'; } ?></li>

        </ol>

      </div>

      <div class="clear"></div>

    </div>

    <div class="border-bottom">

      <div class="verticalspace"></div>

      <h6>Description: </h6>

    </div>

    <div>

 <?php the_content();?>

     

     

    </div>

  </div> 

 <?php endwhile; 

 ?>

 <div class="col-md-4 col-sm-12 col-xs-12">

    <?php get_sidebar();?>

</div>

</div>



<?php get_footer(); ?>