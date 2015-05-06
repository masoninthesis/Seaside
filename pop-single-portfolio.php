<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;
?>
<div class="container">
<div id="portfolio_box">
    <?php
    global $post;
    if (have_posts()) : ?>
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
                    }                    ?>
                </div>
            <?php }  else{
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
                ?>
                <div class="clearfix">
                    <img src="<?php echo $thumb_url[0]; ?>" alt="">
                </div>
            <?php }?>
            <div class="entry">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            <script>
                jQuery(document).ready(function ($) {
                    $('.cycle-slideshow').cycle({
                        swipe: true
                    });
                });
            </script>
            <style>
                .video-shortcode iframe {
                    max-width: 100%;
                }
            </style>
        <?php endwhile; ?>
    <?php else : ?>

        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'GoGetThemes'); ?></h1>
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'GoGetThemes'); ?></p>
        <h6><?php _e('You can return', 'GoGetThemes'); ?> <a href="<?php echo home_url(); ?>/"
        </h6>
        <?php get_search_form(); ?>
    <?php endif; ?>
</div>

</div>