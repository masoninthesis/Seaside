<?php
// Exit if accessed directly

if (!defined('ABSPATH')) exit;?>

<div class="span3" id="sidebar">
    <?php if (!dynamic_sidebar('ocean-blog')) : ?>

        <div class="widget-wrapper">
            <?php get_search_form(); ?>

            <h4 class="widget-title"><?php _e('Categories', 'GoGetThemes'); ?></h4>

            <div class="widget widget_categories">
                <ul>
                    <?php

                    $args = array(
                        'show_count' => 1,
                        'hide_empty' => 1,
                        'hierarchical' => 1,
                        'title_li' => 0,
                        'taxonomy' => 'category',
                        'walker' => null
                    );


                    wp_list_categories($args); ?>
                </ul>
            </div>
        </div><!-- end of .widget-wrapper -->

    <?php endif; //end of main-sidebar ?>
</div><!-- end of #widgets -->