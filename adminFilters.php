
<?php

add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

 	if (is_user_logged_in()) {
        echo '<li><a href="'. get_admin_url() .'" id="adminId">Admin</a></li>';
    }
    return $items;
}

?>