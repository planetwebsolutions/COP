<?php
/**
 * The template for displaying Post Format pages
 *
 * Used to display archive-type pages for posts with a post format.
 * If you'd like to further customize these Post Format views, you may create a
 * new template file for each specific one.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php $current_cat = get_queried_object()->term_id;?>
<section class="header_img heading myheding5">
  <div class="container">
<?php echo get_option('cmc_st');?>
  </div>
</section>
<div class="bread_crumb">
  <div class="container">
   <div class="col-md-8 col-sm-6 hidden-xs text-left" itemscope itemtype="http://schema.org/WebPage">
     <ol class="breadcrumb">
<?php 
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
	//echo $term->term_id;
	$term->name;
	
	
?>
<?php if($current_cat == $term->term_id){?>
   <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>


      <li><a href="http://dothejob.in/cop-cms/our-services/">Our Services</a></li>      

      <li><?php echo $term->name;?></li>
   
    <?php } }?>
        </ol>

    </div>
     <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <?php $current_cat = get_queried_object()->term_id;?>
  <?php 
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
	$term->term_id;
	$term->name;
	$term->description;
	
?>
<?php if($current_cat == $term->term_id){?>
    <div class="page-detail">
     <div class="page-title">
      <div class="row">
       <div class="col-sm-2 col-md-2">
      <img class="_img" src="<?php echo z_taxonomy_image_url($term->term_id); ?>">
       </div>
       <div class="col-sm-10 col-md-10 aligncenter">
        <div class="page-name"><h2><?php echo $term->name;?></h2></div>
       </div>       
      </div>
     </div>
     
     <p><?php echo $term->description;;?></p>
     <?php } ?>
     <?php if($current_cat == $term->term_id){?>
     <div class="service-boxes">
      <div class="row">
      <?php
//WordPress loop for custom post type
 $my_query = new WP_Query(array(
    'post_type' => 'services',
    'tax_query' => array(
        array(
        'taxonomy' => 'services-categories',
        'field' => 'term_id',
        'order'=> 'ASC',
        'orderby'=> 'menu',
        'terms' => $current_cat)
    ))
 		 );
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="box product">
       <div class="img-area"><?php echo do_shortcode('[types field="page-icon" alt="service-portal-devel" title="service-portal-devel" size="full" align="none"][/types]');?></div>
         <h3><?php the_title();?></h3>
         <div class="detail"><?php the_content();?></div>
        </div>
       </div>
	     <?php endwhile;  wp_reset_query(); ?>
      </div>                  
     </div>
     
    </div>  
    <?php } ?>
        <?php }?>
    </div>

 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <?php get_sidebar();?>
</div>
</div>

<?php get_footer(); ?>