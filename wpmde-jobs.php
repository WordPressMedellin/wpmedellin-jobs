<?php
/*
Plugin Name:  WP Medellín - Jobs
Description:  Allow business and individuals to offer their services to the community
Version:      0.1
Author:       WordPress Medellín
Text Domain:  wpmde-jobs
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'WPMDE_JOBS_FILE', __FILE__ );
define( 'WPMDE_JOBS_VERSION', '0.1.0.0' );

require plugin_dir_path( WPMDE_JOBS_FILE ) . 'includes/content-type-profile.php';
require plugin_dir_path( WPMDE_JOBS_FILE ) . 'includes/taxonomy-skills.php';
