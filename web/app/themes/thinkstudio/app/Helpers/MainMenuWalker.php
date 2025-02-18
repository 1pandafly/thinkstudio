<?php

namespace App\Helpers;

class MainMenuWalker extends \Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        $output .= '<li class="' . implode(' ', $item->classes) . '">';
        $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
        if ($has_children) {
            $output .= '<button class="submenu-toggle" type="button" aria-label="Toggle submenu">
                <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.58203 6.04883L1.83203 9.79883C1.56836 10.0625 1.1582 10.1504 0.806641 10.0039C0.455078 9.85742 0.220703 9.50586 0.220703 9.125V1.625C0.220703 1.24414 0.455078 0.921875 0.806641 0.775391C1.1582 0.628906 1.56836 0.716797 1.83203 0.980469L5.58203 4.73047C5.96289 5.08203 5.96289 5.69727 5.58203 6.04883Z" fill="#1D1E42"/>
                </svg>
                </button>';
        }
    }
}
