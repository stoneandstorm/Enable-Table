<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Plugin Name: Enable Table
 * Description: It does one thing: Enable table support for the TinyMCE in WordPress
 * Version: 1.0.0
 * Author: Erwin Romkes
 * Author URI: http://www.stoneandstorm.com
 * License: GPL2
 *
 * Enable Table is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Enable Table is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Enable Table. If not, see <http://www.gnu.org/licenses/>.
 */

function sas_enable_table( $plugins ) {
    $plugins['table'] = plugins_url( 'js/plugin.min.js', __FILE__ );
    return $plugins;
}
add_filter( 'mce_external_plugins', 'sas_enable_table' );

function sas_add_table_button( $buttons ) {
    array_push( $buttons, 'fontsizeselect', 'separator', 'table' );
    return $buttons;
}
add_filter( 'mce_buttons', 'sas_add_table_button' );
?>