<?php
/*
Plugin Name: GitHub Shortcode
Plugin URI: http://json.sx/githubshortcode
Description: Adds a GitHub Shortcode to embed a repository
Version: 0.1
Author: Jason Stallings
Author URI: http://json.sx
License: GPL2
*/
?>
<?php


add_action('init', 'load_github_script'); 
add_shortcode( 'github', 'github_func' );



function github_func( $atts ) {
	extract( shortcode_atts( array(
		'repo' => 'octalmage/GitHub Shortcode'
	), $atts ) );

	return "<div class=\"github-widget\" data-repo=\"" . $repo . "\"></div>";
}

function load_github_script() 
{  
    wp_register_script('githubRepoWidget', plugins_url('jquery.githubRepoWidget.min.js',__FILE__), array("jquery"), '1.0', true );  
    wp_enqueue_script('githubRepoWidget');  
}  
?>