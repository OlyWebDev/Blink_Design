<?php get_header('page'); ?> 
<section class="header_background_wrapper">
     <img src="<?php bloginfo('template_directory'); ?>/img/header2.jpg" alt="sky">
     <h1>My Thoughts</h1>            
 </section>
 <section class="belowslider_content"  attribute="sub-pages">
  	 <?php while ( have_posts() ) : the_post(); ?>
  	 <article <?php post_class(); ?> >
 			<h2 title="pages"><?php the_title(); ?></h2>
 			<h5><?php the_time('F j, Y'); ?> </h5>
       		<div class="picture"><?php the_post_thumbnail(); ?></div>
       		<p><?php the_content(); ?> </p>
       		<div class="tags"><?php the_tags('Tags: ',' '); ?></div>
       		<div class="previous-post"> <?php previous_post_link('%link', 'PREVIOUS', FALSE ); ?></div>
	   		<div class="next-post"> <?php next_post_link('%link', 'NEXT', FALSE ); ?></div> 	
  	 </article>
	 <?php endwhile; ?>    
	 <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
		 <a class="a2a_button_facebook"></a>
	     <a class="a2a_button_twitter"></a>
		 <a class="a2a_button_google_plus"></a>
	 </div>
	 <script async src="https://static.addtoany.com/menu/page.js"></script>  
</section>
<?php get_footer('single'); ?> 