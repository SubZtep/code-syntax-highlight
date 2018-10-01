<?php
/*
Plugin Name: Code Syntax Highlight
Plugin URI: https://github.com/SubZtep/code-syntax-highlight
Description: WordPress plugin for embed Prism - https://prismjs.com
Version: 0.1.0
Author: Andras Serfozo
Author URI: http://twitter.com/SubZtep
*/

function register_scripts() {
	wp_enqueue_style('code-syntax-highlight', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/themes/prism.min.css');
	wp_enqueue_script('code-syntax-highlight', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js');	
}

add_action('wp_enqueue_scripts', 'register_scripts');
