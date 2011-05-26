<?php 

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'bryanmurdaugh' ),
	) );

	register_sidebar( array(
    'id'          => 'sidebar',
    'name'        => __( 'Sidebar', $text_domain ),
    'description' => __( 'This is the sidebar.', 'bryanmurdaugh' ),
	) );

?>