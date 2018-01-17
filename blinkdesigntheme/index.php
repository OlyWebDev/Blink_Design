<? get_header(); ?>
<section class="slider_wrapper">
        <div class="mobile_bg_img"><img src="<?php bloginfo('template_directory'); ?>/img/slider/5.jpg" alt="sunrise">
        </div>
        <div class="owl-carousel owl-theme owl-loaded">
            <div class="owl-item"><img src="<?php bloginfo('template_directory'); ?>/img/slider/1.jpg" alt="sunset">
            </div>
            <div class="owl-item"><img src="<?php bloginfo('template_directory'); ?>/img/slider/2.jpg" alt="sky">
            </div>
            <div class="owl-item"><img src="<?php bloginfo('template_directory'); ?>/img/slider/3.jpg" alt="horizon">
            </div>
            <div class="owl-item"><img src="<?php bloginfo('template_directory'); ?>/img/slider/4.jpg" alt="girl">
            </div>
            <div class="owl-item"><img src="<?php bloginfo('template_directory'); ?>/img/slider/5.jpg" alt="sunrise">
            </div>
        </div>
        <div class="owl-controls">
            <div class="owl-dots">
                <div class="owl-dot active"><span></span>
                </div>
                <div class="owl-dot"><span></span>
                </div>
                <div class="owl-dot"><span></span>
                </div>
            </div>
        </div>
        <div class="introduction_message">
            <h1>Beautiful Designs in a Blink</h1>
            <h3>Want to see more?</h3>
            <a class="explore_button" href="#about">EXPLORE</a>
        </div>
</section>
<section class="belowslider_content">
<div id="about" class="clearfix">
	<?php // This block gets the featured image for the page
		$id = 19; // "43" is just an example of a page id
		$p = get_page($id);
		echo get_the_post_thumbnail($id, array(960,540)); 
		?>
		
		<h2 title="About"><?php 
		$id = 19;
		$p = get_page($id);
		echo apply_filters('the_title', $p->post_title);
		?></h2>
		
		<p><?php 
		$id = 19;
		$p = get_page($id);
		echo apply_filters('the_content', $p->post_content);
	?></p>
</div>
		<div class="recent_postswrapper">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Widgets 1') ) : ?>
			<?php endif; ?>
    	</div>
</section>
<? get_footer(); ?>