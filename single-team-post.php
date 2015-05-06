<?php
// Exit if accessed directly

if (!defined('ABSPATH')) exit;
?>

<?php get_header(); ?>
<div class="id_page2">
    <?php if (have_posts()) : ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <?php while (have_posts()) : the_post(); ?>

                    <!-- ========== POST SECTION ========== -->

                    <div <?php post_class();?> >
                        <div class="ts-ava">
                            <?php the_post_thumbnail('team-thumb');?>
                            <h2 class="extrab"><?php the_title(); ?></h2>
                            <div class="team_social">
                                <?php while (the_flexible_field("person_social")): ?>
                                    <?php if (get_row_layout() == "facebook"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Facebook" class="zocial facebook"></a>
                                    <?php elseif (get_row_layout() == "twitter"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Twitter" class="zocial twitter"></a>
                                    <?php elseif (get_row_layout() == "google+"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Google Plus" class="zocial googleplus"></a>
                                    <?php elseif (get_row_layout() == "dribbble"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Dribbble" class="zocial dribbble"></a>
                                    <?php elseif (get_row_layout() == "linkedin"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="LinkedIn" class="zocial linkedin"></a>
                                    <?php elseif (get_row_layout() == "myspace"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="MySpace" class="zocial myspace"></a>
                                    <?php elseif (get_row_layout() == "github"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="GitHub" class="zocial github"></a>
                                    <?php elseif (get_row_layout() == "tumblr"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Tumblr" class="zocial tumblr"></a>
                                    <?php elseif (get_row_layout() == "blogger"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Blogger" class="zocial blogger"></a>
                                    <?php elseif (get_row_layout() == "pinterest"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Pinterest" class="zocial pinterest"></a>
                                    <?php elseif (get_row_layout() == "flickr"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Flickr" class="zocial flickr"></a>
                                    <?php elseif (get_row_layout() == "email"): ?>
                                        <a href="<?php the_sub_field("url"); ?>" title="Email" class="zocial email"></a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="ts-right">

                                <?php $ts_gallery = get_field('member_gallery');
                                if($ts_gallery){
                                    echo '<div class="ts-gallery">';
                                    foreach($ts_gallery as $ts_img){
                                        echo '<a href="'.$ts_img['url'].'" class="prettyPhoto ts-img" rel="prettyPhoto"><img src="'.$ts_img['sizes']['team-thumb'].'" alt="'.$ts_img['alt'].'"></a>';
                                    }
                                    echo '</div>';
                                }?>

                            <div class="padding">
                                    <div class="entry">
                                        <?php the_content(); ?>
                                    </div>
                            </div>
                        </div>

                    </div>

                <?php endwhile; ?>
            </div>
        </div>

        <?php else : ?>
            <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'GoGetThemes'); ?></h1>
            <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'GoGetThemes'); ?></p>
            <h6><?php _e('You can return', 'GoGetThemes'); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e('Home', 'GoGetThemes'); ?>"><?php _e('&larr; Home', 'GoGetThemes'); ?></a> <?php _e('or search for the page you were looking for', 'GoGetThemes'); ?></h6>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
    <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
</div>





<?php get_footer(); ?>

