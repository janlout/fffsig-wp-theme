<?php

function footer_menu() {
    $menu_name = 'footer-menu';
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;

            $menu_list .= '<a href="' . $url . '" class="mx-1 link-light text-decoration-none">';
            $menu_list .= $title;
            $menu_list .= '</a>' . "\n";
        }
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}
