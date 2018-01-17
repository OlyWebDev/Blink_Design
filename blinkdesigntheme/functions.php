<?php
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
if (function_exists("register_sidebar")) {
register_sidebar();
}
if (function_exists('register_sidebar')) {
     register_sidebar(array(
      'name' => 'Bottom Widgets 1',
      'id'   => 'bottom-widgets-1',
      'description'   => 'Widget Area',
      'before_widget' => '<div class="recent_postswrapper">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
     ));
    }
?>
