<?php

/**
 * Plugin Name: RemoveWCDashboard
 * Author: SeenKid
 * Version: 1.2
 * Description: Remove woocommerce dashboard without removing login
 * Plugin URI: https://github.com/SeenKid/RemoveWCDashboard
 */

 function WOO_account_menu_items($items) {
    unset($items['dashboard']);
    return $items;            
}

add_filter ('woocommerce_account_menu_items', 'WOO_account_menu_items');

?>
