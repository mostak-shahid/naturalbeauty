<?php
//Add widgets area
function naturalbeauty_widgets_init(){
	/*register_sidebar(array(
		'id' => 'sidebar',
		'name' => __('Sidebar for Post', 'naturalbeauty'),
		//'description' => __('Add widgets here to appear in your Left SideBar', 'naturalbeauty'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'sidebar-page',
		'name' => __('Sidebar for Page', 'naturalbeauty'),
		//'description' => __('Add widgets here to appear in your Left SideBar', 'naturalbeauty'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'after_widget' => '</div>'
	));	*/
	register_sidebar(array(
		'id' => 'footer_1',
		'name' => __('Footer Column 1', 'naturalbeauty'),
		'description' => __('Add widgets here to appear in your Footer Column 1', 'naturalbeauty'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'footer_2',
		'name' => __('Footer Column 2', 'naturalbeauty'),
		'description' => __('Add widgets here to appear in your Footer Column 2', 'naturalbeauty'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'footer_3',
		'name' => __('Footer Column 3', 'naturalbeauty'),
		'description' => __('Add widgets here to appear in your Footer Column 3', 'naturalbeauty'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'after_widget' => '</div>'
	));	
	register_sidebar(array(
		'id' => 'footer_4',
		'name' => __('Footer Column 4', 'naturalbeauty'),
		'description' => __('Add widgets here to appear in your Footer Column 4', 'naturalbeauty'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'after_widget' => '</div>'
	));		

}
add_action('widgets_init', 'naturalbeauty_widgets_init');
