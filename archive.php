<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;?>
<?php global $smof_data; ?>
<?php get_header(); ?>




<div class="id_blog blog-color">
    <div class="container">
        <?php if (have_posts()) : ?>

            <h3 class="text-center"><?php if (is_day()) : ?>

                    <?php printf(__('Daily Archives: %s', 'GoGetThemes'), '<span>' . get_the_date() . '</span>'); ?>

                <?php elseif (is_month()) : ?>

                    <?php printf(__('Monthly Archives: %s', 'GoGetThemes'), '<span>' . get_the_date('F Y') . '</span>'); ?>

                <?php elseif (is_year()) : ?>

                    <?php printf(__('Yearly Archives: %s', 'GoGetThemes'), '<span>' . get_the_date('Y') . '</span>'); ?>

                <?php else : ?>

                    <?php single_cat_title(); ?>

                <?php endif; ?></h3>

            <?php if(is_home()){?>
                <div class="lines sub_title text-center"><h1><?php echo $smof_data['blog_title']; ?></h1></div>
            <?php }else { ?> <div class="lines sub_title text-center"><?php echo $smof_data['blog_subtitle']; ?></div>
            <?php } ?>
            <div class="row-fluid">
                <div class="span9">
                    <?php while (have_posts()) : the_post(); ?>

                        <!-- ========== POST SECTION ========== -->

                        <div <?php post_class(); ?>>
                            <div class="post-box">

                                <?php
                                $format = get_post_format();
                                if ($format === "video") {
                                    $post_class = 'right-box';
                                    echo '<div class="left-box video-post">';
                                    $video_type = get_field('video_type');
                                    if ($video_type === "youtube") {
                                        echo '<div style="max-width:' . get_field('video_width') . 'px;max-height:' . get_field('video_height') . 'px;"><div class="video-shortcode"><iframe title="YouTube video player" width="' . get_field('video_width') . '" height="' . get_field('video_height') . '" src="http://www.youtube.com/embed/' . get_field('video_id') . '"></iframe></div></div>';
                                    } elseif ($video_type === "vimeo") {
                                        echo '<div style="max-width:' . get_field('video_width') . 'px;max-height:' . get_field('video_height') . 'px;"><div class="video-shortcode"><iframe src="http://player.vimeo.com/video/' . get_field('video_id') . '" width="' . get_field('video_width') . '" height="' . get_field('video_height') . '"></iframe></div></div>';
                                    } else {
                                        echo '<div style="max-width:' . get_field('video_width') . 'px;max-height:' . get_field('video_height') . 'px;"><div class="video-shortcode">' . get_field('iframe_code') . '</div></div>';
                                    }
                                    echo '</div>';
                                } elseif ($format === "gallery") {
                                    $post_class = 'right-box';
                                    echo '<div class="left-box gallery-post">';
                                    $gallery = get_field('gallery');
                                    if(isset($gallery[0]))
                                    echo '<img class="mb" src="' . $gallery[0]['sizes']['blog-thumb'] . '" alt="" />';
                                    echo '<div class="row-fluid">';
                                    if(isset($gallery[1]))
                                    echo '<div class="span6"><img src="' . $gallery[1]['sizes']['medium'] . '" alt=""/></div>';
                                    if(isset($gallery[2]))
                                    echo '<div class="span6"><img src="' . $gallery[2]['sizes']['medium'] . '" alt=""/></div>';
                                    echo '</div>';
                                    echo '</div>';
                                } elseif ($format === "image") {
                                    $post_class = 'right-box';
                                    echo '<div class="left-box slider-post">';
                                    $slider = get_field('slider_images');
                                    echo '<div class="cycle-slideshow" data-cycle-timeout="5000" data-cycle-swipe="true" data-cycle-auto-height="425:320">';
                                    echo '<div class="cycle-prev"><i class="icon-chevron-left"></i></div>';
                                    echo '<div class="cycle-next"><i class="icon-chevron-right"></i></div>';
                                    foreach ($slider as $slide) {
                                        echo '<img src="' . $slide['sizes']['blog-thumb'] . '" alt=""/>';
                                    }
                                    echo '</div>';
                                    echo '</div>';
                                } else {
                                    $post_class = 'full-box';
                                    if (has_post_thumbnail()) {
                                        $post_class = 'right-box';
                                        echo '<div class="left-box stand-post">'; ?>
                                        <div class="post_thumb">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail('blog-thumb'); ?>
                                            </a>
                                        </div>

                                        <?php echo '</div>';
                                    }
                                } ?>
                                <div class="<?php echo $post_class; ?>">
                                    <div class="padding">
                                        <ul class="post_info unstyled inline">
                                            <?php if ($smof_data['blog_cat'] == 1) { ?>
                                                <li><?php the_category(', '); ?><span class="slash">/</span></li>
                                            <?php
                                            }
                                            if ($smof_data['blog_date'] == 1) {
                                                ?>
                                                <li class="blog_date">
                                                    <?php the_time('d M Y'); ?><span class="slash">/</span>
                                                </li>
                                            <?php
                                            }
                                            if ($smof_data['blog_comment'] == 1) {
                                                ?>
                                                <li class="comments">
                                                    <?php if ('open' == $post->comment_status) : ?>
                                                        <!-- If comments are open, but there are no comments. -->
                                                        <?php comments_popup_link(__('0 Comments', 'GoGetThemes'), __('1 Comments', 'GoGetThemes'), __('% Comments', 'GoGetThemes')); ?>
                                                    <?php else : // comments are closed ?>

                                                        <!-- If comments are closed. -->
                                                        <?php _e('Comments Off.', 'GoGetThemes'); ?>
                                                    <?php endif; ?>
                                                    <span class="slash">/</span>
                                                </li>
                                            <?php
                                            }
                                            if ($smof_data['blog_author'] == 1) {
                                                ?>
                                                <li class="author">
                                                    <?php _e('By', 'GoGetThemes');?> <?php the_author(); ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <h2 class="extrab"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <?php if ($smof_data['blog_excerpt'] == 1) { ?>
                                            <div class="entry">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($smof_data['blog_rm'] == 1) { ?>
                                            <a href="<?php the_permalink();?>" class="bbtn nomarg"><?php _e('READ MORE'); ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>


                        </div>

                    <?php endwhile; ?>

                    <?php if (function_exists('page_navi')) {
                        page_navi();
                    } ?>
                </div>

                <?php get_sidebar('blog'); ?>
            </div>

        <?php else : ?>



            <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'GoGetThemes'); ?></h1>
            <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'GoGetThemes'); ?></p>
            <h6><?php _e('You can return', 'GoGetThemes'); ?> <a href="<?php echo home_url(); ?>/"><?php _e('Home'); ?></a></h6>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
    <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
</div>
<?php if(!is_home()) get_footer(); ?>