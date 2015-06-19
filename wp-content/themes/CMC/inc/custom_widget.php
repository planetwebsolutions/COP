<?php

/**
 * Footer about Widget
 *
 * @since 3.0.0
 */

class footermenu_widget extends WP_Widget {

	function footermenu_widget() {

		$widget_ops = array('description' => 'footer widget' );

		parent::WP_Widget(false, $name = __('footer widget', eedan),$widget_ops);

	}

	function form($instance) {

		// outputs the options form on admin
		
		?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>
  <p><label for="<?php echo $this->get_field_id('Logo'); ?>"><?php _e('Logo:'); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id('title1'); ?>" name="<?php echo $this->get_field_name('title1'); ?>" type="text" value="<?php echo $instance['title1']; ?>" /></p>
<p><label for="<?php echo $this->get_field_id('content'); ?>"><?php _e('content:'); ?></label>

<textarea rows="10" class="widefat" id="<?php echo $this->get_field_id('title2'); ?>" name="<?php echo $this->get_field_name('title2'); ?>" ><?php echo $instance['title2']; ?></textarea></p>
<?php 

 }

 function widget($args, $instance) {

  ?>


<?php echo $args['before_widget'];?> <?php echo $args['before_title'];?>

<?php echo $instance['title']; ?><?php echo $args['after_title'];?>
<div class="logo"><img alt="" src="<?php echo $instance['title1']; ?>"></div>
<div class="des"><?php echo $instance['title2']; ?></div>

<?php  echo $args['after_widget'];?>
			
<?php 

 }

}

register_widget('footermenu_widget');

//Contact form-----------------------------------------------------------------------------
class form_widget extends WP_Widget {

	function form_widget() {

		$widget_ops = array('description' => 'Contact form' );

		parent::WP_Widget(false, $name = __('Contact form', eedan),$widget_ops);

	}

	function form($instance) {

		// outputs the options form on admin

		?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>
 
<?php 

 }

function widget($args, $instance) {
$link = apply_filters('widget_title_link', isset($instance['title_link']) ? $instance['title_link'] : null , $instance);
extract( $args );
  ?>



<div class="verticalspace"></div>
<?php if($link) { ?>
<h2><a href="<?php echo $link; ?>"><?php echo $instance['title']; ?></a><h2>
<?php } else { ?>
<h2><?php echo $instance['title']; ?></h2>
<?php } ?>

<ul>
<?php echo do_shortcode('[contact-form-7 id="179" title="Contact form 1"]');?>
</ul>

 <div class="verticalspace"></div>
<?php 
//echo $after_widget;
 }

}

register_widget('form_widget');



//Our Services-----------------------------------------------------------------------------------------------------
class Services_widget extends WP_Widget {

	function Services_widget() {

		$widget_ops = array('description' => 'Services' );

		parent::WP_Widget(false, $name = __('Services', eedan),$widget_ops);

	}

	function form($instance) {

		// outputs the options form on admin

		?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>
 
<?php 

 }

function widget($args, $instance) {
$link = apply_filters('widget_title_link', isset($instance['title_link']) ? $instance['title_link'] : null , $instance);
extract( $args );
?>


<?php if($link) { ?>
<a href="<?php echo $link; ?>"><?php echo $instance['title']; ?></a></h1>
<?php } else { ?>
 <h2><?php echo $instance['title']; ?> </h2>
<?php } ?>


<ul>      
<?php
//WordPress loop for custom post type
$i=1;
 $my_query = new WP_Query('post_type=Services&order=ASC'
 		 );
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li <?php if($i==1){ ?> class="active"  <?php } ?>><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
        <?php $i++; endwhile;  wp_reset_query(); ?>
      </ul>
      <div class="verticalspace"></div>
<?php 


 }

}

register_widget('Services_widget');
////Our Testimonial----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
class Testimonial_widget extends WP_Widget {

	function Testimonial_widget() {

		$widget_ops = array('description' => 'Testimonial' );

		parent::WP_Widget(false, $name = __('Testimonial', eedan),$widget_ops);

	}

	function form($instance) {

		// outputs the options form on admin

		?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>
 
<?php 

 }

function widget($args, $instance) {
$link = apply_filters('widget_title_link', isset($instance['title_link']) ? $instance['title_link'] : null , $instance);
extract( $args );
  ?>

<div class="verticalspace"></div> 
<h2>
<?php if($link) { ?>
<a href="<?php echo $link; ?>"><?php echo $instance['title']; ?></a></h1>
<?php } else { ?>
<?php echo $instance['title']; ?>
<?php } ?>
</h2>
 <div id="ticker">
<?php
//WordPress loop for custom post type
$args1 = array(
		'post_type'=>'customer-review',
		'posts_per_page' =>-1
			
);
 $my_query = new WP_Query($args1);

 		
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
    
     
     <div><p>"<?php
					
$content = get_the_content();
$trimmed_content = wp_trim_words( $content, 20, '...' );
echo $trimmed_content;?>"</p>
     <div class="text-right">
     <div class="testimonial_designation"><strong><?php the_title();?></strong><br/><?php echo do_shortcode('[types field="author-destination"][/types]');?><br/><?php echo do_shortcode('[types field="author-company-name"][/types]');?></div></div></div>
      <?php endwhile;  wp_reset_query(); ?>
      </div><div class="view-all"><a href="http://www.criticalmissioncomputing.co.uk/testimonial/">+ View All</a></div>
   
<?php 


 }

}

register_widget('Testimonial_widget');

