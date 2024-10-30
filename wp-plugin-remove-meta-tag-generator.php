<?php

/*
Plugin Name: Remove Meta Generator Tag
Description: Removes the WordPress meta information 'generator'. This helps to protect your blog (at least a litte bit).
Plugin URI: http://dennishoppe.de/wordpress-plugins/meta-tag-generator-remover
Version: 1.0
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de
*/


//   Remove the WP hook:
Remove_Action ('wp_head', 'wp_generator');
//   Yes! That's all =)


/* End of File */