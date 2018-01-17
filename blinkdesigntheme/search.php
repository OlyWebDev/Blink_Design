<?php get_header('page'); ?> 
<section class="header_background_wrapper">
     <img src="<?php bloginfo('template_directory'); ?>/img/header2.jpg" alt="sky">
     <h1>Search Results</h1>            
</section>
<section class="belowslider_content search_page">
	<?php if (have_posts()) :
	    while ( have_posts() ) : the_post(); ?>
		   	<h2 title="search"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		 	<h5><?php the_time('F j, Y'); ?> </h5>
		   	<div class="picture"><?php the_post_thumbnail(); ?></div>
		   	<p><?php the_content(); ?> </p>
		   	<?php echo do_shortcode(''); ?>
		   	<div class="tags"><?php the_tags('Tags: ',' '); ?></div> 
	<?php endwhile; 
	else:
	  	echo '<h4>No Posts Found</h4>'; 
	  	endif; ?>
	<div class="pagination>">
		  <?php wp_paginate(); ?> 
	</div>     
</section>
  
<?php get_footer('single'); ?> 