<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container"> 

<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "Critical Mission Computing Ltd.",
  "description" : "Critical Mission Computing specialises in re-engineering and bespoke software solutions for businesses to match their exact requirements.",
  "url" : "http://www.criticalmissioncomputing.co.uk",
  "logo" : "http://www.criticalmissioncomputing.co.uk/wp-content/uploads/2015/03/logo1.png",
  "sameAs" : [ "https://www.facebook.com/CriticalMissionComputing",
    "https://www.linkedin.com/company/critical-mission-computing-ltd",
    "https://twitter.com/cmcsoftwaredev",
    "https://plus.google.com/u/0/107877195392211757058/"],
  "contactPoint" : [
    {
      "@type" : "ContactPoint",
      "telephone" : "+44-2084020696",
      "email": "info@criticalmissioncomputing.co.uk",
      "contactType" : "Customer service"
    } ]
}
</script>        
<div class="social f_right social-main"> <a href="<?php echo get_option('cmc_fb');?>" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>" target="_blank"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>" target="_blank"><a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><img  src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>
     
       <div class="row feature_wrapper">
                <!-- Features Row -->
                <div class="features_op1_row">
                    <!-- Feature -->
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
	$term_link = $term->slug;
?>

        <!--Do Stuff-->

                    <div class="col-sm-4 feature first">
                      
                        <div class="text">
                             <h3 class="admarbot"><?php echo $term->name;?></h3>
                             <div class="img_box">
                               <img class="_img" src="<?php echo z_taxonomy_image_url($term->term_id); ?>">
                       		 </div>
                            <p>
                               <?php echo $term->description;;?>

                            </p>
                        </div>
                    </div>  <?php }?>
                    <!-- Feature -->
                   
                    <!-- Feature -->
                    
                        </div>
                    </div>
                </div>
             
            </div>
           
        </div>
        

      <!-- middle text section ends here-->
    <!-- Who section starts -->
    <div class="who">
    	<div class="container">
    	<?php
$post_id = 15;
$queried_post = get_post($post_id);
?> 
        	<h4><?php echo $queried_post->post_title; ?></h4>
        	<br />
        <?php echo $queried_post->post_content; ?>
        </div>
    </div>
        <!-- Who section ends -->
        
        <!-- testimonials starts here -->
        <section class="test-bg"><div class="container">
       
		<div id="slideshow">
		<?php
//WordPress loop for custom post type
 $my_query = new WP_Query('post_type=customer-review&order=ASC'
 		 );
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="testimonial">
				<div class="testimonial_text"><i class="fa fa-quote-left"></i><span class="quo">"</span><?php
					
$content = get_the_content();
$trimmed_content = wp_trim_words( $content, 100, '...' );
echo $trimmed_content;?><span class="quo">"</span><i class="fa fa-quote-right"></i></div>
				<h3 class="testimonial_name"><?php the_title();?></h3>
				<div class="testimonial_designation"><?php echo do_shortcode('[types field="author-destination"][/types]');?><br/><?php echo do_shortcode('[types field="author-company-name"][/types]');?></div>
			</div>
			<?php endwhile;  wp_reset_query(); ?>
			
		</div>
 
</div></section>
       
     
<div class="modal in fade" id="myModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>   
<?php

get_footer();
