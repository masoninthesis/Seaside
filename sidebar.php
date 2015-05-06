<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;?>

<div class="span3" id="sidebar">
    <div class="widget-wrapper">
        <?php get_search_form(); ?>

        <h4 class="widget-title"><?php _e('Categories','GoGetThemes'); ?></h4>

        <div class="widget widget_categories">
            <ul>
                <?php

                $args = array(
                    'show_option_all' => '',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'style' => 'list',
                    'show_count' => 1,
                    'hide_empty' => 1,
                    'use_desc_for_title' => 1,
                    'child_of' => 0,
                    'feed' => '',
                    'feed_type' => '',
                    'feed_image' => '',
                    'exclude' => '',
                    'exclude_tree' => '',
                    'include' => '',
                    'hierarchical' => 1,
                    'title_li' => 0,
                    'show_option_none' => __('No categories','GoGetThemes'),
                    'number' => null,
                    'echo' => 1,
                    'depth' => 0,
                    'current_category' => 0,
                    'pad_counts' => 0,
                    'taxonomy' => 'category',
                    'walker' => null
                );


                wp_list_categories($args); ?>
            </ul>
        </div>
        <div class="tagcloud">
            <?php the_tags() ?>
        </div>
    </div>
    <!-- end of .widget-wrapper -->
</div><!-- end of #widgets -->