<?php
/**
 * Plugin Name: GP Conditional Pricing
 * Description: Create flexible, conditional pricing for your Gravity Form product fields.
 * Plugin URI: http://gravitywiz/category/perks/
 * Version: 1.2.17
 * Author: David Smith
 * Author URI: http://gravitywiz.com/
 * License: GPL2
 * Perk: True
 * Text Domain: gp-conditional-pricing
 * Domain Path: /languages
 */

require 'includes/class-gp-bootstrap.php';

$gp_conditional_pricing_bootstrap = new GP_Bootstrap( 'class-gp-conditional-pricing.php', __FILE__ );