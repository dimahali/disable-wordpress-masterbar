<?php

/**
 * Plugin Name: Disable Wordpress Master Bar
 * Plugin URI: https://github.com/dimahali/disable-wordpress-masterbar
 * Description: Disable WordPress.com Master Bar
 * Author: Hamid Ali
 * Version: 1.0
 * Author URI: https://dimahali.github.io
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Filter the Jetpack module list and remove WordPress.com MasterBar.
 * 
 * @param array $modules Collection of Jetpack modules.
 * 
 * @return array
 */
function startfunction_no_masterbar ( $modules ) {

    if ( isset( $modules['masterbar'] ) ) {

      unset( $modules['masterbar'] );

    }

    return $modules;

}

add_filter( 'jetpack_get_available_modules', 'startfunction_no_masterbar' );