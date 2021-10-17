<?php
/*
Plugin Name: Example plugin
Description: We will demonstrate how to make it git-updater compatible
Version:     1.1
Author:      Andy & Maciek
License:     GPL2 etc
GitHub Plugin URI: palmiak/git-updater-test-plugin
Release Asset: true
Primary Branch: main
*/

add_action( 'admin_notices', 'test_print_notice', 0, 0 );

function test_print_notice() {
	printf(
		'<div class="notice notice-error"><p>%1$s</p></div>',
		'test 2'
	);
}
