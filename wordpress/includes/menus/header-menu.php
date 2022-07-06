<?php

function header_menu() {
    $menu_name = 'header-menu';
    $menu_list = '';

    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;

            if ($menu_item->title == "Mitmachen") {
                $menu_list .= '<li class="nav-item mx-3 my-1">' . "\n";
                $menu_list .= ' <a class="nav-link btn btn-primary text-white" href="' . $url . '">' . $title . '</a>' . "\n";
                $menu_list .= '</li>' . "\n";
            } else {
                $menu_list .= '<li class="nav-item mx-3 my-1">' . "\n";
                $menu_list .= ' <a class="nav-link text-dark text-center" href="' . $url . '">' . $title . '</a>' . "\n";
                $menu_list .= '</li>' . "\n";
            }
        }
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}
