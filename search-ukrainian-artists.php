<?php
/*
Plugin Name: Search Ukrainian Artists
Plugin URI: http://sannda.com/wp-content/plugins/
Description: This plugin will automatic search for similar paintings by any Ukrainian artists.
Version: 1.0
Author: Edmund Sannda
Author URI: http://www.sannda.com/AboutMe
License: GPLv2
Domain Path: /languages
Text Domain: my-toolset


Search Ukrainian Artists is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Search Ukrainian Artists. If not, see {License URI}.
*/


// Begin code

function get_ukrainian_artist(){
	echo '<div><p>Sample paintings will display here!</P></div>';
	
	/*
	$url = 'http://www.ukrainianart.com/styles/abstract/';

	$request = new WP_Http;
	$result = $request->request($url);
	$content = array();

	if (isset($result->errors)) {
		echo '<p>Unable to find similar artists</p>';
	} else {
		echo $content = $result['body'];
	}
	*/
} // ends function gua
add_action('wp_footer', 'get_ukrainian_artist');


?>