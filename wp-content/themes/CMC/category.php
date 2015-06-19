<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<!-- page heading start-->
<section class="portfolio-details page-heading heading myheding4">
  <div class="container">
<?php echo get_option('cmc_pt');?>

    <div class="clear"></div>
  </div>
</section>
<div class="container border-bottom nopad">
  <div class="col-md-5 col-sm-5  text-left" itemscope itemtype="http://schema.org/WebPage">
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
   <ul class="portfolio">

			<?php global $wp_query;
$query = new WP_Query(array_merge(
$wp_query->query, 
array(
    'post_type' => 'portfolio-post'
    )
));

while($query->have_posts()) : $query->the_post();  $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      $link_img = do_shortcode('[types field="website-link"][/types]'); ?>
    
 	
   
      <li><a href="<?php the_permalink();?>"><img src="<?php echo $feat_image;?>"  alt=""/></a><span><a href="<?php if($link_img){ echo $link_img;}else{ the_permalink(); } ?>" target="_blank"><?php the_title();?></span></a></li>
<?php endwhile; wp_reset_query();?>
 </ul>
     <div class="blog-pager">
	</div>	
  </div>
  <div class="col-md-4 col-sm-4">
    <?php get_sidebar();?>
</div>

</div>

<?php

get_footer();
			
