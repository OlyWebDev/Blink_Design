<?php 
/*
Template Name: Category 
*/ 
 get_header('page'); ?>
 <section class="header_background_wrapper">
     <img src="<?php bloginfo('template_directory'); ?>/img/header2.jpg" alt="sky">
     <h1>Versailles</h1>            
 </section>
 <section class="belowslider_content">
	 <?php while ( have_posts() ) : the_post(); ?>
		 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	     <h5><?php the_time('F j, Y'); ?></h5>
		 <div class="feature_img"><?php the_post_thumbnail(); ?></div>
		 <p><?php the_content(); ?></p>
		 <div class="tags" attribute="post-tags"><?php the_tags('',' '); ?></div>
		 <?php the_category(); ?>
	 <?php endwhile; ?>
	<div class="pagination>">
		 <?php wp_paginate(); ?> 
	</div>
 </section>
<?php get_footer(); ?>