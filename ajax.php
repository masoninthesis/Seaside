<?php

include '../../../wp-load.php';

global $smof_data;

$offset = $_GET['offset'];


$port_args = array(
    'post_type' => 'portfolio',
    'showposts' => $smof_data['port_ajax_num'],
    'offset' => $offset
);


$the_query = new WP_Query($port_args);

while ($the_query->have_posts()) :

    $the_query->the_post();?>

    <article <?php post_class(); ?>>
        <section class="thumbImage j-port-l">
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
                    <?php } else { ?>
                        <a class="thumbLink" href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>
                    <?php } ?>
                    <a href="<?php the_permalink(); ?>"><h3 class="sectionTitle"><?php the_title();?></h3></a>
                </div>
            </div>
        </section>
    </article>



<?php endwhile; ?>



