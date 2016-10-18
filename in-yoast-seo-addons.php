<?php 
/**
 * Plugin Name: IN Yoast SEO Addons
 * Plugin URI: http://in-soft.pro/soft/in-yoast-seo-addons/
 * Description: Add-on set for Yoast SEO WordPress Plugin
 * Version: 0.1
 * Author: Ivan Nikitin and partners
 * Author URI: https://ivannikitin.com
 * Text domain: in-yoast-seo-addons
 *
 * Copyright 2016 Ivan Nikitin  (email: info@ivannikitin.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Напрямую не вызываем!
if ( ! defined( 'ABSPATH' ) ) 
	die( '-1' );


// Определения плагина
define( 'INYSA', 		'in-yoast-seo-addons' );				// Название плагина и текстовый домен

// Инициализация плагина
add_action( 'init', 'inysa_init' );
function inysa_init() 
{
	// Локализация плагина
	load_plugin_textdomain( INUG, false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );		

}

/* Remove Images From Yoast Sitemap */
add_filter( 'wpseo_xml_sitemap_img', '__return_false' );
