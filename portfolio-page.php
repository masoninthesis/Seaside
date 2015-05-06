<?php
// Exit if accessed directly

if (!defined('ABSPATH')) exit;

/**
 * Template Name: Portfolio
 */
?>

<?php get_header(); ?>

<div class="id_page">
    <div class="container">
        <?php if (have_posts()) : ?>



            <?php while (have_posts()) : the_post(); ?>



                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="post-title text-center page_tit"><?php the_title(); ?></h1>

                    <div class="post-entry">
                        <?php the_content(__('Read more &#8250;', 'GoGetThemes')); ?>

                        <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'GoGetThemes'), 'after' => '</div>')); ?>
                    </div>
                    <!-- end of .post-entry -->
                </div><!-- end of #post-<?php the_ID(); ?> -->

                <section id="options" class="clearfix">
                                        <ul id="filters" class="option-set clearfix unstyled" data-option-key="filter">
                                            <li><a href="#filter" data-option-value="*" class="selected">show all</a></li>
                                            <?php
                                    if ($smof_data['port_categories_switch']=='0'){
                                    	$taxonomies = get_terms('project-type', 'orderby=count&hide_empty=0');
                                    	foreach ($taxonomies as $tax) {
                                        	echo '<li><a href="#filter" data-option-value=".' . $tax->slug . '">' . $tax->name . '</a></li>';
                                    	}
                                    } else {
                                     	foreach ($smof_data['port_categories_sorter']['enabled'] as $port_category_slug => $port_category) {
                                     		if($port_category == 'placebo'){
                                        		continue;
                                       		}
                                        	echo '<li><a href="#filter" data-option-value=".' . $port_category_slug . '">' . $port_category . '</a></li>';
                                    	}
                                    }
                                    ?>
                                        </ul>
                                    </section>
                <div id="port-container">
                    <?php $port_args = array(
                        'post_type' => 'portfolio',
                        'showposts' => $smof_data['port_posts_num']
                    );
                    $the_query = new WP_Query($port_args);
                    while ($the_query->have_posts()) :

                        $the_query->the_post();?>

                        <article <?php post_class(); ?>>
                            <section class="thumbImage">
                                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); $url = $thumb['0']; ?>
                                <?php if($smof_data['port_lb'] == 1){ ?>
                                    <a class="portfolio_pop" href="<?php the_permalink(); ?>">
                                        <img class="fullwidth" src="<?php echo $url; ?>" alt="" width="280" height="280"/>
                                    </a>
                                <?php } else { ?>
                                    <a class="" href="<?php the_permalink(); ?>">
                                        <img class="fullwidth" src="<?php echo $url; ?>" alt="" width="280" height="280"/>
                                    </a>
                                <?php } ?>
                                <div class="thumbTextWrap">
                                                        <div class="thumbText">
                                                            <?php if($smof_data['port_lb'] == 1){ ?>
                                                                <a class="thumbLink portfolio_pop" href="<?php the_permalink(); ?>"><i class="icon-search"></i></a>
                                                                <a href="<?php the_permalink(); ?>" class="thumbLink portfolio_pop"><h3 class="sectionTitle"><?php the_title();?></h3></a>
                                                            <?php } else { ?>
                                                                <a class="thumbLink" href="<?php the_permalink(); ?>"><i class="icon-search"></i></a>
                                                                <a href="<?php the_permalink(); ?>" ><h3 class="sectionTitle"><?php the_title();?></h3></a>
                                                            <?php } ?>
                                                            
                                                        </div>
                                                    </div>
                            </section>
                        </article>

                    <?php endwhile; ?>
                </div>
                <div class="text-center">
                    <a href="<?php echo get_template_directory_uri() . '/ajax.php'; ?>" class="load_more">MORE</a>
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

