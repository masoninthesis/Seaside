<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;?>
<?php get_header(); ?>
<div class="id_page">
    <div class="container">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php $slider = get_field('image_slider');
            if ($slider) {
                ?>

                <div class="cycle-slideshow" data-cycle-fx=scrollHorz
                     data-cycle-timeout=0
                     data-cycle-prev=".cycle-prev"
                     data-cycle-next=".cycle-next">
                    <!-- prev/next links -->
                    <div class="cycle-prev"><i class="icon-chevron-left"></i></div>
                    <div class="cycle-next"><i class="icon-chevron-right"></i></div>

                    <?php
                    foreach ($slider as $slide) {
                        echo '<img src="' . $slide['url'] . '" alt="' . $slide['alt'] . '" />';
                    }

                    ?>
                </div>

            <?php }  else{
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                ?>
                <div class="clearfix">
                    <img src="<?php echo $thumb_url[0]; ?>" alt="">
                </div>
            <?php }?>

            <h1><?php the_title(); ?></h1>

            <div class="entry">
                <?php the_content(); ?>
            </div>


        <?php endwhile; ?>

    <?php else : ?>



        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'GoGetThemes'); ?></h1>

        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'GoGetThemes'); ?></p>

        <h6><?php _e('You can return', 'GoGetThemes'); ?> <a href="<?php echo home_url(); ?>/"
                                                            title="<?php esc_attr_e('Home', 'GoGetThemes'); ?>"><?php _e('&larr; Home', 'GoGetThemes'); ?></a> <?php _e('or search for the page you were looking for', 'GoGetThemes'); ?>
        </h6>

        <?php get_search_form(); ?>



    <?php endif; ?>
        </div>
        <!-- end of #content -->
        <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
    </div>

<?php get_footer(); ?>