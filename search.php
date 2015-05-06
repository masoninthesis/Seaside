<?php
if (!defined('ABSPATH')) exit;?>

<?php get_header(); ?>

<div class="id_page blog-color">
    <div class="container">
    <?php

    if (have_posts()) : ?>

    <div class="container text_center">
        <h3><?php _e('Search results for:','GoGetThemes'); ?></h3>

        <div class="lines sub_title"><?php printf(__('%s', 'GoGetThemes'), '' . get_search_query() . ''); ?></div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <ul class="nostyle">
                    <?php while (have_posts()) : the_post(); ?>

                        <li class="post">
                            <h1 class="text_center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        </li>

                    <?php endwhile; ?>
                </ul>

                <?php if (function_exists('page_navi')) {
                    page_navi();
                } ?>
            </div>

            <?php get_sidebar('blog'); ?>
        </div>

        <?php else : ?>



            <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'GoGetThemes'); ?></h1>

            <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'GoGetThemes'); ?></p>

            <h6><?php _e('You can return', 'GoGetThemes'); ?> <a href="<?php echo home_url(); ?>/"
                                                                title="<?php esc_attr_e('Home', 'GoGetThemes'); ?>"><?php _e('&larr; Home', 'GoGetThemes'); ?></a> <?php _e('or search for the page you were looking for', 'GoGetThemes'); ?>
            </h6>

            <?php get_search_form(); ?>



        <?php
        endif;
        ?>
    </div>
        <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
    </div>



<?php get_footer(); ?>

