<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="msvalidate.01" content="997FE377C3E0977C537DF9D03CF4DD5D" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
	<link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php bloginfo('template_url');?>/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php bloginfo('template_url');?>/css/owl.theme.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="<?php bloginfo('template_url');?>/css/reset.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="<?php bloginfo('template_url');?>/css/testimonial.css" rel="stylesheet" type="text/css" media="all"> 
	 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">  
	<link rel="stylesheet" type="text/css" href="<?PHP bloginfo('template_url');?>/css/lib/animate.css" media="screen, projection" />

	<link rel="stylesheet" type="text/css" href="<?PHP bloginfo('template_url');?>/css/slicknav.css" media="screen, projection" /> 
	<link rel="stylesheet" type="text/css" href="<?PHP bloginfo('template_url');?>/css/Responsive.css" media="screen, projection" /> 

	<link href="https://plus.google.com/u/0/107877195392211757058/" rel="publisher" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	
	<![endif]-->
	<?php wp_head(); ?>
	<style>
	.myheding{ background:url('<?php echo get_option('cmc_osm');?>')no-repeat scroll 54% top / cover rgba(0, 0, 0, 0);}
	</style>
	<style>
	.myheding1{ background:url('<?php echo get_option('cmc_con');?>')no-repeat scroll 54% top / cover rgba(0, 0, 0, 0);}
	</style>
	<style>
	.myheding2{ background:url('<?php echo get_option('cmc_testi');?>')no-repeat scroll 54% top / cover rgba(0, 0, 0, 0);}
	</style>
	<style>
	.myheding3{ background:url('<?php echo get_option('cmc_we');?>')no-repeat scroll 54% top / cover rgba(0, 0, 0, 0);}
	</style>
	<style>
	.myheding4{ background:url('<?php echo get_option('cmc_port');?>')no-repeat scroll 54% top / cover rgba(0, 0, 0, 0);}
	.myheding5{ background:url('<?php echo get_option('cmc_service');?>')no-repeat scroll 54% top / cover rgba(0, 0, 0, 0);}
	</style>
</head>

<body class="pull_top">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><img src="<?php echo get_option('cmc_logo');?>" alt="CMc-Logo"/></a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-mob"><img src="<?php echo get_option('cmc_mlogo');?>" alt="CMc-Logo"/></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
<?php

	$defaults = array(
		'theme_location'  => '',
		'menu'            => 'Header menu',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="menu" class="nav navbar-nav navbar-right %2$s nav-primary">%3$s</ul>'
		
	
	);
	wp_nav_menu( $defaults );?>
                    
            </div>
        </div>
    </div>
    <div class="clear"></div>  
	<?php if ( is_front_page()){?>
	    <section class="res-sdr">
	        <ul id="owl-demo" class="owl-carousel">
	          	<?php
				//WordPress loop for custom post type

				 $my_query = new WP_Query('post_type=Slider&order=ASC');
			      while ($my_query->have_posts()) : $my_query->the_post();
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$alt_text = get_post_meta(get_post_thumbnail_id() , '_wp_attachment_image_alt', true);
     			?>
                <li class="item">
                <img src="<?php echo $feat_image;?>"  alt="<?php echo $alt_text;?>">
                <div class="container">
                <div class="banner-detail-bg">
                <div class="info">
	         
	                <h2><span class="cap"><?php echo do_shortcode('[types field="title1"][/types]');?> </span><?php echo do_shortcode('[types field="title2"][/types]');?></h2>
	                <br/>
	                <p><strong><?php echo do_shortcode('[types field="slider-content-2"][/types]');?></strong></p>
	                <p>
	                <?php
						$content = preg_replace("/<.*?>/", "", get_the_content());
						$content = strip_tags($content);
						$text = substr($content,0,1000);
						echo $text = preg_replace( "#(^(&nbsp;|\s)+|(&nbsp;|\s)+$)#", "", $text );?></p>
						<br/>                
            	</div>
                </div></div>
                </li>
                  <?php endwhile;  wp_reset_query(); ?>
              </ul>
    </section>
    <?php }?>
