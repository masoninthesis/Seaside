<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

global $smof_data;
if($smof_data['port_lb'] == 1){
    get_template_part('pop-single-portfolio');
 } else {
    get_template_part('one-single-portfolio');
 }