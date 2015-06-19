<?php
/**
 * Template Name:Service Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="clear"></div>
<section class="header_img heading myheding5">
  <div class="container">
<?php echo get_option('cmc_st');?>
  </div>
</section>
<div class="bread_crumb">
  <div class="container">
    <div class="breadcrumb f_left">
    <div class="breadcrumbs" itemprop="breadcrumb"  xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
    </div>
       <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img  src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
      <?php 
      $i=1;
// no default values. using these as examples
$taxonomies = array( 
);

$args = array(
    'order'=> 'ASC',
		'orderby'=>'ID',
    'hide_empty'=> false
); 

$terms = get_terms('services-categories', $args);

//print_r($terms);
foreach ($terms as $term){
	
	
	$term_link = $term->slug;

	
	$term->name;
	$term->description;
	
?>
       <?php if($i%2!=0){ ?> 
      <div class="col-lg-12 <?php echo $i; ?>">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 f_left"><div class="left-img"><img class="_img" src="<?php echo z_taxonomy_image_url($term->term_id); ?>"></div></div>
        <article class="col-lg-10 col-md-10 col-sm-10 col-xs-12 f_right t_right">
          <h2><a href="<?php echo get_term_link( $term_link, 'services-categories' );?>"> <?php echo $term->name; ?> </a></h2>
          <p><?php echo $term->description;?> </p>
          <a href="<?php echo get_term_link( $term_link, 'services-categories' );?>">Read More</a>
        </article>
        <div class="clear"></div>
        
      </div>
          <?php } else{ ?>
      <div class="col-lg-12">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 f_right"> <div class="right-img"><img class="_img" src="<?php echo z_taxonomy_image_url($term->term_id); ?>"></div></div>
      <article class="col-lg-10 col-md-10 col-sm-10 col-xs-12 f_left t_left">
          <h2><a href="<?php echo get_term_link( $term_link, 'services-categories' );?>"> <?php echo $term->name; ?></a></h2>
            <p><?php echo $term->description;?></p>
         <a href="<?php echo get_term_link( $term_link, 'services-categories' );?>">Read More</a>
        </article>
        <div class="clear"></div>
      </div>
      <?php  } $i++;}?>
   
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
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