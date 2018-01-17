<?php 
/*
Template Name: Custom About
*/ 
 get_header('page'); ?>
 <section class="header_background_wrapper">
     <img src="<?php bloginfo('template_directory'); ?>/img/header2.jpg" alt="sky">
     <h1><?php the_title(); ?></h1>            
 </section>
     <section class="belowslider_content">
     	<div id="about" class="clearfix">
	        <?php while ( have_posts() ) : the_post(); ?>
            <div class="title_andtexts">
                <p><?php the_content(); ?> </p>
            </div>
        </div>
    </section>
<?php endwhile;
get_footer(); ?>