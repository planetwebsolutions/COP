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

	<section class="header_img">
  <div class="container">
    <h1>COMPANY</h1>
    <h3>Our Services Detail</h3>
  </div>
</section>
<div class="bread_crumb">
  <div class="container">
   <div class="col-md-8 col-sm-6 hidden-xs text-left">
     <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Our Services</a></li>      
      <li>Software & Web Developement</li>
    </ol>
    </div>
    <div class="social f_right"> <a href="<?php echo get_option('cmc_fb');?>"><img src="<?php bloginfo('template_url');?>/img/facebook.png" width="36" height="36" alt=""/></a><a href="<?php echo get_option('cmc_twtr');?>"> <img src="<?php bloginfo('template_url');?>/img/twitter.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_linked');?>"> <img src="<?php bloginfo('template_url');?>/img/linked-in.png" width="37" height="36" alt=""/></a><a href="<?php echo get_option('cmc_gpluse');?>"> <img src="<?php bloginfo('template_url');?>/img/google-plus.png" width="35" height="36" alt=""/></a> <a href="<?php echo get_option('cmc_mail');?>"><a href="mailto:<?php echo get_option('cmc_mail');?>"><img style="margin-left:5px;" src="<?PHP bloginfo('template_url');?>/img/email.png" width="36" height="36" alt=""/></a></div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="col-lg-9 f_left">
<?php while ( have_posts() ) : the_post(); ?>
    <div class="page-detail">
     <div class="page-title">
      <div class="row">
       <div class="col-sm-4 col-md-4">
       <?php echo the_post_thumbnail();?>
       </div>
       <div class="col-sm-8 col-md-7 aligncenter">
        <div class="page-name"><?php the_title();?></strong></div>
       </div>       
      </div>
     </div>
     
     <p> <?php the_content();?></p>
     
     <div class="service-boxes">
      <div class="row">
       <div class="col-sm-4">
        <div class="box product">
         <h3>Product Development</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box crm">
         <h3>CRM Development</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box database">
         <h3>Database Management Solution</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>              
      </div>
      <div class="row">
       <div class="col-sm-4">
        <div class="box software">
         <h3>Software Consulting</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box integration">
         <h3>Integration Solution</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box web-app">
         <h3>Web Application Development</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>              
      </div>
	  <div class="row">
       <div class="col-sm-4">
        <div class="box web-design">
         <h3>Web Design Services</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box custom-web">
         <h3>Custom Web Design</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box responsive-web">
         <h3>Responsive Web Design</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>              
      </div>
      <div class="row">
       <div class="col-sm-4">
        <div class="box e-commerce">
         <h3><a href="#">E-Commerce Solution</a></h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box cms-devel">
         <h3>CMS Development</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>
	   <div class="col-sm-4">
        <div class="box portal">
         <h3>Portal Development</h3>
         <div class="detail"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p></div>
        </div>
       </div>              
      </div>                  
     </div>
    </div>  
   <?php endwhile; 
 ?>   
    </div>

 <div class="col-md-3">
    <?php get_sidebar();?>
</div>
</div>

<?php get_footer(); ?>