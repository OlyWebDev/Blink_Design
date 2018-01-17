<?php
/*
Template Name: Archives
*/ 
 get_header('page'); ?>
 <section class="header_background_wrapper">
     <img src="<?php bloginfo('template_directory'); ?>/img/header2.jpg" alt="sky">
     <h1>Archive</h1>            
 </section>
 <section class="belowslider_content archive_page">
	   <?php the_post(); ?>
	    <div class="archive_articles">
			<h2>Recent Articles</h2>
			<ol><?php wp_get_archives('type=postbypost&limit=10'); ?></ol>
	    </div>
	    <div class="month_archive">
			<h2>Archives by Month:</h2>
			<ul><?php wp_get_archives('type=monthly'); ?></ul>
	    </div>
	    <div class="category_archive">
			<h2>Archives by Category:</h2>
			<ul><?php wp_list_categories('title_li='); ?></ul>
	    </div>
		<div class="pagination>">
			 <?php wp_paginate(); ?> 
		</div>
 </section>
<?php get_footer(); ?>