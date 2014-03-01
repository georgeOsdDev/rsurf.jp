<?php
// http://1000old.com/oss/footer-widget-area/
function remove_twentytwelve_widgets_init() {
    remove_action('widgets_init', 'twentytwelve_widgets_init');
}
add_action('init','remove_twentytwelve_widgets_init');


function rsurf_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentytwelve' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
        'name' => __( 'Footer Widget Area 1', 'twentytwelve' ),
        'id' => 'footer-widget-1',
        'description' => __( 'Widget area is displayed on a footer portion', 'twentytwelve' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'rsurf_widgets_init' );


function twentytwelve_footer_widget_class() {
    $count = 0;
    if ( is_active_sidebar( 'footer-widget-1' ) )
        $count++;
    if ( is_active_sidebar( 'footer-widget-2' ) )
        $count++;
    if ( is_active_sidebar( 'footer-widget-3' ) )
        $count++;
    if ( is_active_sidebar( 'footer-widget-4' ) )
        $count++;
    $class = '';
    switch ( $count ) {
        case '1':
            $class = 'one';
            break;
        case '2':
            $class = 'two';
            break;
        case '3':
            $class = 'three';
            break;
        case '4':
            $class = 'four';
            break;
    }
    if ( $class )
        echo $class;
}
?>