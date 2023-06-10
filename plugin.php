<?php
/*
Plugin Name: Margin Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/margin-calculator/
Description: Free margin calculator using the margin formula ((R - C) / R) × 100 to help businesses quickly calculate both margin and markup percentages based on cost and sale price.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_margin_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_margin_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/margin-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Margin Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_margin_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_margin_calculator', 'display_ci_margin_calculator' );