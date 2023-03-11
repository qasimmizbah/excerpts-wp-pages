<?php
/**
 * Plugin Name: Excerpts For Wordpress Pages
 * Plugin URI:  https://www.upwork.com/freelancers/~01d00918bea0f63345
 * Description: Add Excerpts For Wordpress Pages
 * Version:     1.0
 * Author:      Qasimmizbah
 * Author URI:  https://www.upwork.com/freelancers/~01d00918bea0f63345
 */


function myexcerpt() {
  add_post_type_support('page', array('excerpt'));
}
add_action('init', 'myexcerpt');
