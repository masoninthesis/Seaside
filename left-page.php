<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Sidebar Left
 */
?>
<?php get_header(); ?>

<div class="id_page2">
    <div class="container">
        <div class="row">
            <div class="span3">
            	<div class="customm">
                <?php generated_dynamic_sidebar(); ?>
                </div>
            </div>
            <div class="span9">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                    <h1 class="post-title text-left page_tit"><?php the_title(); ?></h1>
                    <div class="post-entry">
                        <?php the_content(__('Read more &#8250;', 'GoGetThemes')); ?>

                        <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'GoGetThemes'), 'after' => '</div>')); ?>
                    </div>
                    <!-- end of .post-entry -->
            <?php endwhile; ?>
        <?php else : ?>
            <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'GoGetThemes'); ?></h1>
            <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'GoGetThemes'); ?></p>
            <h6><?php _e('You can return', 'GoGetThemes'); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e('Home', 'GoGetThemes'); ?>"><?php _e('&larr; Home', 'GoGetThemes'); ?></a> <?php _e('or search for the page you were looking for', 'GoGetThemes'); ?></h6>
            <?php get_search_form(); ?>
        <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- end of #content -->
</div>

<?php get_footer(); ?>

