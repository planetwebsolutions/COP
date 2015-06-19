<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Thirteen

 * @since Twenty Thirteen 1.0

 */

?>

<!-- testimonials ends here -->

<!--Clients-->

<div id="clients">
  <div class="container">
    <div class="section_header">
      <h3>Our Clients Include</h3>
      <br>
    </div>
    <div class="row clientslogo">
      <ul id="scroller">
        <?php

//WordPress loop for custom post type

 $my_query = new WP_Query('post_type=our-clients&order=ASC'

 		 );

      while ($my_query->have_posts()) : $my_query->the_post();

      $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
        <li>
          <div><img src="<?php echo $feat_image;?>" alt=" "></div>
        </li>
        <?php endwhile;  wp_reset_query(); ?>
      </ul>
    </div>
  </div>
</div>

<!--clients- ends-->

<footer id="footer">
  <div class="container">
    <div class="row sections">
      <div class="col-md-4 col-sm-6 col-xs-12 recent_posts">
        <div class="footer01"><h3 class="footer_header"> About Us </h3>
        <?php $logos=get_option('cmc_footerlogo');?>
        <?php if($logos){?><div class="img"> <a href=" <?php echo esc_url( home_url( '/' ) ); ?> "> <img src="<?php echo$logos;?>" width="206" height="230" alt=" "></a> </div><?php }?>
        <div class="links">
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div></div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 testimonials">
        <div class="footer02">
          <h3 class="footer_header our-service"> Our Services </h3>
          <?php dynamic_sidebar( 'sidebar-4' ); ?>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12 contact">
        <div class="footer03">
          <h3 class="footer_header"> Contact Us </h3>
          <ul>
            <li> <span>Tel: </span><a href="tel:<?php echo get_option('cmc_phn');?>"> <?php echo get_option('cmc_phn');?> </a> </li>
            <li> <span>Mob: </span><a href="tel:<?php echo get_option('cmc_phn');?>"> <?php echo get_option('cmc_Mobile');?> </a> </li>
            <li> <span>Email: </span> <a class="main-to" href="mailto:<?php echo get_option('cmc_mail');?>"><?php echo get_option('cmc_mail');?></a></li>
             <li> <span class="follow">Follow Us: </span>   
<div class="social-right">  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
           <div class="fb-like" data-href="https://www.facebook.com/CriticalMissionComputing" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
           <a class="twitter-share-button"
  href="https://twitter.com/share"
  data-url="https://twitter.com"
  data-via="twitterdev">
Tweet
</a><br/>
<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
        <!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-href="https://plus.google.com"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/FollowCompany" data-id="1" data-counter="right"></script>
</div>
<div class="clear-fix"></div>
         </li> </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <p><?php echo get_option('cmc_copyright');?></p>
      <a href="#">Back To Top <img src="<?PHP bloginfo('template_url');?>/img/up-arrow.png" width="18" height="9" alt=" "></a> </div>
  </div>
</footer>

<!-- Scripts --> 

<script src="<?PHP bloginfo('template_url');?>/js/jquery-latest.js"></script> 
<script src="<?PHP bloginfo('template_url');?>/js/common.js"></script> 
<script src="<?PHP bloginfo('template_url');?>/js/owl.carousel.js"></script> 
<script src="<?PHP bloginfo('template_url');?>/js/bootstrap.min.js"></script> 
<script src="<?PHP bloginfo('template_url');?>/js/theme.js"></script> 
<script src="<?PHP bloginfo('template_url');?>/js/modernizr.js"></script> <!-- Modernizr --> 

<script type="text/javascript" src="<?PHP bloginfo('template_url');?>/js/index-slider.js"></script> 
<script type="text/javascript">

jQuery(document).ready(function($){

	var w,mHeight,tests=$("#testimonials");

	w=tests.outerWidth();

	mHeight=0;

	tests.find(".testimonial").each(function(index){

		$("#t_pagers").find(".pager:eq(0)").addClass("active");	//make the first pager active initially

		if(index==0)

			$(this).addClass("active");	//make the first slide active initially

		if($(this).height()>mHeight)	//just finding the max height of the slides

			mHeight=$(this).height();

		var l=index*w;				//find the left position of each slide

		$(this).css("left",l);			//set the left position

		tests.find("#test_container").height(mHeight);	//make the height of the slider equal to the max height of the slides

	});

	$(".pager").on("click",function(e){	//clicking action for pagination

		e.preventDefault();

		next=$(this).index(".pager");

		clearInterval(t_int);	//clicking stops the autoplay we will define later

		moveIt(next);

	});

	var t_int=setInterval(function(){	//for autoplay

		var i=$(".testimonial.active").index(".testimonial");

		if(i==$(".testimonial").length-1)

			next=0;

		else

			next=i+1;

		moveIt(next);

	},10000);

});

function moveIt(next){	//the main sliding function

	var c=parseInt($(".testimonial.active").removeClass("active").css("left"));	//current position

	var n=parseInt($(".testimonial").eq(next).addClass("active").css("left"));	//new position

	$(".testimonial").each(function(){	//shift each slide

		if(n>c)

			$(this).animate({'left':'-='+(n-c)+'px'});

		else

			$(this).animate({'left':'+='+Math.abs(n-c)+'px'});

	});

	$(".pager.active").removeClass("active");	//very basic

	$("#t_pagers").find(".pager").eq(next).addClass("active");	//very basic

}

$(".sub-menu").addClass("dropdown-menu");

$(".sub-menu").addClass("multi-level");

$(".sub-menu li").addClass("dropdown-submenu");

$(".menu-item-has-children").addClass("dropdown");

$(".menu-item-has-children a").addClass("");

$(".menu-item-has-children a").addClass("");

$(".menu-item-has-children a").attr("","dropdown");





</script>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  40000);
</script> 
<script src="<?php bloginfo('template_url');?>/js/jquery.custom-file-input.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/jquery.simplyscroll.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.slicknav.js"></script> 
<script src="http://malsup.github.io/jquery.cycle2.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.tile.js"></script>
<script>

 $('.custom-file-input input, #lefile').customHtmlFileInput({

  inputClass: 'file-input-text',

  buttonClass: 'file-input-button'

 });</script> 
<script type="text/javascript">

(function($) {

	$(function() { //on DOM ready 

    		$("#scroller").simplyScroll();

	});

 })(jQuery);




</script>
<script>
jQuery(document).ready(function(){
	jQuery('#menu').slicknav();
});
</script>
<script>
$(document).ready(function(){
        var get_width = jQuery(window).width();
		if(get_width<=1030){
		$("ul").removeClass("dropdown-menu");
		}
});

</script> 
<script>
jQuery(document).ready(function($){

var slideshows = $('.cycle-slideshow').on('cycle-next cycle-prev', function(e, opts) {
    // advance the other slideshow
    slideshows.not(this).cycle('goto', opts.currSlide);
});

$('#cycle-2 .cycle-slide').click(function(){
    var index = $('#cycle-2').data('cycle.API').getSlideIndex(this);
    slideshows.cycle('goto', index);
});


});

</script> 
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,900,700,500' rel='stylesheet' type='text/css' >
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,500,700|Roboto+Condensed:400,700|Raleway:400,300,500,700' rel='stylesheet' type='text/css'>
<style>
.fb-like{
    height: 20px;
    overflow: hidden;
}
 </style>


<?php wp_footer(); ?>

</body>
</html>