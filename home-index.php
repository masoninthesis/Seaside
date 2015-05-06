<?php
/*
 * Template Name: Paralax home page
 */
// Exit if accessed directly
if (!defined('ABSPATH')) exit;?>
<?php global $smof_data; ?>
<?php get_header(); ?>
<?php
    if(function_exists('icl_get_languages') && !class_exists('WPML_String_Translation')){
        foreach($smof_data as $key=>$value){
            $language_key = $key."_".ICL_LANGUAGE_CODE;
            if(isset($smof_data[$language_key])){
                $smof_data[$key] = $smof_data[$language_key];
            }
        }

    }
?>
    <!-- ========== HOME SECTION ========== -->
    <div id="home">
        <section class="slider">
            <?php
            if(!empty($smof_data['hp_slider'])){
                if($smof_data['hp_slider'] == 1){
                    putRevSlider( $smof_data['hp_slider_id'] );
                }
            }
            ?>
        </section>
    </div>
<!-- =========================PAGES============================= -->
<section id="pages">
    <ul class="unstyled">
        <?php $smof_data['homepage_blocks'];

        foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
            switch ($block) {
                case 'Service' :
                    ?>

                    <!-- ========== SERVICES SECTION ========== -->

                    <li id="services" class="section">
                        <?php if ($smof_data['serv_switch'] == 1) { ?>

                            <section class="serv_intro intro"
                                <?php if ($smof_data['serv_intro_img']) { ?>
                                    style="background-image: url(<?php echo $smof_data['serv_intro_img']; ?>);"
                                <?php } ?>>

                                <!-- ============ INTRO TEXT =========== -->
                                <?php if ($smof_data['serv_switch_int'] == 1) { ?>
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['serv_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['serv_intro_h1']; ?> </div>
                                            <?php } ?>
                                            <?php if ($smof_data['serv_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['serv_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                                <?php } ?>

                            </section>

                        <?php } ?>

                        <section class="service_box man_box">

                            <!-- ==== BORDERTOP ==== -->
                            <?php if ($smof_data['serv_bord_top'] == 1) { ?>
                            <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                            <?php } ?>

                            <div class="serv_mid section-mid">
                                <div class="container">
                                    <?php if ($smof_data['serv_title']) { ?>
                                        <h1 class="text-center text-up"><?php echo $smof_data['serv_title']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['serv_subtitle']) { ?>
                                        <div class="lines sub_title text-center"><?php echo $smof_data['serv_subtitle']; ?></div>
                                    <?php } ?>

                                    <div class="section_exc">
                                        <?php
                                        if($smof_data['serv_excerpt'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['serv_excerpt'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>
                                    <?php if($smof_data['serv_cor'] == "1"){?>
                                    <div class="serv_corusel">
                                        <div class="mycont">
                                            <!-- Carousel items -->
                                            <ul class="mycarousel2 row-fluid">
                                                <?php $service_args = array(
                                                    'post_type' => 'service-post',
                                                    'showposts' => $smof_data['serv_posts_num']
                                                );
                                                $the_query = new WP_Query($service_args);
                                                while ($the_query->have_posts()) :
                                                    $the_query->the_post();?>

                                                    <li class="item span3">
                                                        <h3><?php the_title(); ?></h3>
                                                        <?php $icon_url = get_field('icon_url');
                                                        if (!empty($icon_url)) {
                                                            echo '<a href="' . $icon_url . '" class="serv_link">';
                                                        }
                                                        $icon = get_field('icon_class');
                                                        $icon_image = get_field('icon_image');
                                                        if (!empty($icon)) {
                                                            ?>
                                                            <i class="<?php echo $icon; ?>"></i>
                                                        <?php } else { ?>
                                                            <img src="<?php echo $icon_image; ?>" alt=""/>
                                                        <?php } ?>
                                                        <?php if (!empty($icon_url)) {
                                                            echo '</a>';
                                                        } ?>
                                                        <div class="serv_entry text-center">
                                                            <?php the_content(); ?>
                                                        </div>
                                                    </li>

                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="section_exc">
                                        <?php
                                        if($smof_data['serv_excerpt2'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['serv_excerpt2'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- ==== BORDERBOTTOM ==== -->
                            <?php if ($smof_data['serv_bord_bot'] == 1) { ?>
                                <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                            <?php } ?>

                        </section>
                    </li>

                    <?php break;
                case 'Portfolio' :
                    ?>

                    <!-- ========== PORTFOLIO SECTION ========== -->

                    <li id="portfolio" class="section">
                        <?php if ($smof_data['port_switch'] == 1) { ?>

                            <section class="portfolio_intro intro"
                                <?php if ($smof_data['port_intro_img']) { ?>
                                    style="background-image: url(<?php echo $smof_data['port_intro_img']; ?>);"
                                <?php } ?>>

                                <!-- ============ INTRO TEXT =========== -->
                            <?php if ($smof_data['port_switch_int'] == 1) { ?> 
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['port_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['port_intro_h1']; ?></div>
                                            <?php } ?>
                                            <?php if ($smof_data['port_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['port_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                            <?php } ?>
                            </section>

                        <?php } ?>

                        <section class="portfolio_main man_box">

                            <!-- ==== BORDERTOP ==== -->
                            <?php if ($smof_data['port_bord_top'] == 1) { ?>
                                <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                            <?php } ?>

                            <div class="portfolio_mid section-mid">

                                <div class="container">
                                    <?php if ($smof_data['port_title']) { ?>
                                        <h1 class="text-center text-up"><?php echo $smof_data['port_title']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['port_subtitle']) { ?>
                                        <div class="lines sub_title text-center"><?php echo $smof_data['port_subtitle']; ?></div>
                                    <?php } ?>

                                    <div class="section_exc">
                                        <?php
                                        if($smof_data['port_excerpt'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['port_excerpt'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>

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
                                                    <div class="<?php if($smof_data['port_img_anim'] == 1) { echo "thumbTextWrap"; }?>">
                                                         <div class="thumbText">
                                                            <?php if($smof_data['port_lb'] == 1){ ?>
                                                                <a class="thumbLink portfolio_pop" href="<?php the_permalink(); ?>"><i class="icon-search"></i></a>
                                                                <a href="<?php the_permalink(); ?>" class="portfolio_pop"><h3 class="sectionTitle"><?php the_title();?></h3></a>
                                                            <?php } else { ?>
                                                            
                                                                <a class="thumbLink" href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>
                                                                <a href="<?php the_permalink(); ?>" class=""><h3 class="sectionTitle"><?php the_title();?></h3></a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </section>
                                            </article>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php if(!empty($smof_data['port_ajax'])) { if($smof_data['port_ajax'] == 1) { ?>
                                    <div class="text-center">
                                        <a href="<?php echo get_template_directory_uri() . '/ajax.php'; ?>" class="load_more"><?php _e('MORE','GoGetThemes'); ?></a>
                                    </div>
                                    <?php } } ?>
                                    <div class="section_exc">
                                        <?php
                                        if($smof_data['port_excerpt2'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['port_excerpt2'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- ==== BORDERBOTTOM ==== -->
                            <?php if ($smof_data['port_bord_bot'] == 1) { ?>
                                <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                            <?php } ?>

                        </section>
                    </li>

                    <?php break;
                case 'Pricing Table' :
                    ?>

                    <!-- ========== PRICING TABLE ========== -->

                    <li id="pricing_table" class="section">
                    <?php if ($smof_data['price_switch'] == 1) { ?>

                        <section class="pricing_table_intro intro"
                            <?php if ($smof_data['price_intro_img']) { ?>
                                style="background-image: url(<?php echo $smof_data['price_intro_img']; ?>);"
                            <?php } ?>>

                            <!-- ======= INTROTEXT ======= -->
                            <?php if ($smof_data['price_switch_int'] == 1) { ?> 
                            <div class="rubik">
                                <div class="rubik-top-border"></div>
                                <div class="container text-center">
                                    <div class="intro_pad">
                                        <?php if ($smof_data['price_intro_h1']) { ?>
                                            <div class="h1"><?php echo $smof_data['price_intro_h1']; ?></div>
                                        <?php } ?>
                                        <?php if ($smof_data['price_intro_h2']) { ?>
                                            <div class="h2"><?php echo $smof_data['price_intro_h2']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="rubik-bot-border"></div>
                            </div>
                            <?php } ?>
                        </section>

                    <?php } ?>

                    <section class="pricing_table_main man_box">

                        <!-- ==== BORDERTOP ==== -->
                        <?php if ($smof_data['price_bord_top'] == 1) { ?>
                            <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                        <?php } ?>

                        <div class="pricing_table_mid section-mid">
                            <div class="container">
                            <?php if ($smof_data['price_title']) { ?>
                                <h1 class="text-center text-up"><?php echo $smof_data['price_title']; ?></h1>
                            <?php } ?>
                            <?php if ($smof_data['price_subtitle']) { ?>
                                <div class="lines sub_title text-center"><?php echo $smof_data['price_subtitle']; ?></div>
                            <?php } ?>

                                <div class="section_exc">
                                    <?php
                                    if($smof_data['price_excerpt'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['price_excerpt'], 'post_type' => 'page' ) );
                                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                    }
                                    ?>
                                </div>

                                <div id="pricing-table">
                                    <?php
                                    if($smof_data['price_table'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['price_table'], 'post_type' => 'page' ) );
                                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                    }
                                    ?>
                                </div>

                                <div class="section_exc">
                                    <?php
                                    if($smof_data['price_excerpt2'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['price_excerpt2'], 'post_type' => 'page' ) );
                                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                    }
                                    ?>
                                </div>
                            <?php if ($smof_data['price_client'] == 1) { ?>
                                <?php if ($smof_data['price_client_title']) { ?>
                                    <h1 class="text-center text-up"><?php echo $smof_data['price_client_title']; ?></h1>
                                <?php } ?>
                                <?php if ($smof_data['price_client_subtitle']) { ?>
                                    <div class="lines sub_title text-center"><?php echo $smof_data['price_client_subtitle']; ?></div>
                                <?php } ?>
                                <div class="hapy_boys row-fluid mycarousel2">
                                	
                                    <?php $client_args = array(
                                        'post_type' => 'testimonial-post',
                                        'showposts' => $smof_data['price_client_num']
                                    );
                                    $the_query = new WP_Query($client_args);
                                    while ($the_query->have_posts()) :
                                        $the_query->the_post();?>
                                        
                                        <div class="testimonial span3"><div class="hapy_boys_t"></div>
                                            <?php the_post_thumbnail('customer');?>
                                            <div class="from">
                                                <h3 class="firm testimonial-name"><?php the_title();?></h3>
                                                <a href="<?php the_field('link_url');?>" class="testimonial-link"><?php the_field('link_text');?></a>
                                            </div>
                                            <div class="clear testimonial-exc">
                                                <?php the_field('testimonial'); ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php } ?>
                            </div>
                        </div>

                        <!-- ==== BORDERBOTTOM ==== -->
                        <?php if ($smof_data['price_bord_bot'] == 1) { ?>
                            <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                        <?php } ?>

                    </section>
                    </li>

                    <?php break;
                case 'About Us' :
                    ?>

                    <!-- ========== ABOUT TEAM ========== -->

                    <li id="about_us" class="section">
                    <?php if ($smof_data['about_switch'] == 1) { ?>
                        <section class="about_us_intro intro"
                            <?php if ($smof_data['about_intro_img']) { ?>
                                style="background-image: url(<?php echo $smof_data['about_intro_img']; ?>);"
                            <?php } ?>>

                                <!-- ============ INTRO TEXT =========== -->
                                <?php if ($smof_data['about_switch_int'] == 1) { ?> 
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['about_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['about_intro_h1']; ?></div>
                                            <?php } ?>
                                            <?php if ($smof_data['about_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['about_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                                <?php } ?>
                        </section>

                    <?php } ?>

                    <section class="about_us_main man_box">

                        <!-- ==== BORDERTOP ==== -->



                        <?php if ($smof_data['about_bord_top'] == 1) { ?>
                            <!--<div class="top-border-full"></div>-->
                            <div class="top-border">
                                <div class="top-border-left"></div>
                                <div class="top-border-right"></div>
                            </div>
                        <?php } ?>

                        <div class="about_us_mid section-mid">
                            <div class="container">
                            
                            <?php if ($smof_data['about_title']) { ?>
                                <h1 class="text-center text-up"><?php echo $smof_data['about_title']; ?></h1>
                            <?php } ?>
                            <?php if ($smof_data['about_subtitle']) { ?>
                                <div class="lines sub_title text-center"><?php echo $smof_data['about_subtitle']; ?></div>
                            <?php } ?>

                            <div class="section_exc"><?php
                                if($smof_data['about_excerpt'] != "Select page"){
                                    $page = get_posts( array( 'name' => $smof_data['about_excerpt'], 'post_type' => 'page' ) );
                                    if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                } ?>
                            </div>
                            <?php if($smof_data['about_cor'] == "1") { ?>
                            <div class="team_corusel">
                                <div class="mycont">

                                    <!-- Carousel items -->
                                    <?php $post_counter = 1; $rows_counter=1;?>
                                   
                                        <?php $team_args = array(
                                            'post_type' => 'team-post',
                                            'posts_per_page' => -1
                                        );
                                        $the_query = new WP_Query($team_args);
                                        while ($the_query->have_posts()) :
                                            $the_query->the_post();
                                            if($post_counter==1){ 
                                            	if($rows_counter!=1){ ?>
                                            		<ul class="mycarousel2 unstyled row-fluid margin-top-30">
                                            <?php 	} else {?>
                                                	<ul class="mycarousel2 unstyled row-fluid">
                                            <?php }
                                           		} ?>
											
                                            <li class="item span3">
                                           
                                			<div class="team_container">


                                                <div class="<?php if($smof_data['about_animation'] == "1") { echo "rift";}?>">
                                                	
                                                    <?php if (has_post_thumbnail()) {
                                                        the_post_thumbnail();
                                                    } else {
                                                        echo '<img src="' . get_template_directory_uri() . '/images/800x800.jpg" alt="" />';
                                                    }?>
                                                    


                                                   
                                                    <div class="caption">
                                                    	
                                                    	<!-- <?php the_title(); ?>
                                                        <?php the_field('person_position'); ?>
                                                        <i class="icon-chevron-down icon-2x"></i> -->
                                                        
                                                        
                                                  
                                                        <?php while (the_flexible_field("person_social")): ?>
                                                            <?php if (get_row_layout() == "facebook"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial facebook"></a>
                                                            <?php elseif (get_row_layout() == "twitter"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial twitter"></a>
                                                            <?php elseif (get_row_layout() == "google+"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial googleplus"></a>
                                                            <?php elseif (get_row_layout() == "dribbble"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial dribbble"></a>
                                                            <?php elseif (get_row_layout() == "linkedin"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial linkedin"></a>
                                                            <?php elseif (get_row_layout() == "myspace"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial myspace"></a>
                                                            <?php elseif (get_row_layout() == "github"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial github"></a>
                                                            <?php elseif (get_row_layout() == "tumblr"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial tumblr"></a>
                                                            <?php elseif (get_row_layout() == "blogger"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial blogger"></a>
                                                            <?php elseif (get_row_layout() == "pinterest"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial pinterest"></a>
                                                            <?php elseif (get_row_layout() == "flickr"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>" class="zocial flickr"></a>
                                                            <?php elseif (get_row_layout() == "email"): ?>
                                                                <a href="<?php the_sub_field("url"); ?>"class="zocial email"></a>
                                                       			<!-- <a href="<?php the_sub_field("url"); ?>" title="Email" class="zocial email"></a> -->
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    
                                                    </div>
                                                </div>
                                                <div class="team_entry">

                                                    	<div class="team_name"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
                                                    	<div class="team_person_t"></div>
                                                        <div class="team_person"><?php the_field('person_position'); ?></div>
                                                         <!-- <a class="team-link btn white" href="<?php the_permalink();?>"><i class="icon-chevron-down icon-2x"></i></a> -->
                                                        
                                                        
                                                    <?php the_excerpt(); ?>
                                                </div>
                                              </div>
                                            </li>
											<?php 
                                            	$post_counter++;
                                            	
                                                if($post_counter>4){
                                                	$post_counter = 1;
                                                    $rows_counter++;
                                                    ?>
                                                    </ul>
                                                    <?php
                                                }
                                                
                                            ?>
                                        <?php endwhile; ?>
                                        <?php if($rows_counter==1){ ?>
                                    </ul>
                                    <?php } ?>
                                </div>

                            </div>
                            <?php } ?>

                                <div class="section_exc"><?php
                                    if($smof_data['about_excerpt2'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['about_excerpt2'], 'post_type' => 'page' ) );
                                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                    } ?>
                                </div>
                            </div>
                        </div>


                        <!-- ==== BORDERBOTTOM ==== -->
                        <?php if ($smof_data['about_bord_bot'] == 1) { ?>
                            <div class="bot-border">
                                <div class="bot-border-left"></div>
                                <div class="bot-border-right"></div>
                            </div>
                        <?php } ?>

                    </section>
                    </li>

                    <?php break;
                case 'Contact Us' :
                    ?>

                    <!-- ========== CONTACT US ========== -->

                    <li id="contact_us" class="section">
                        <?php if ($smof_data['contact_switch'] == 1) { ?>
                            <section class="contact_us_intro intro"
                                <?php if ($smof_data['contact_intro_img']) { ?>
                                    style="background-image: url(<?php echo $smof_data['contact_intro_img']; ?>);"
                                <?php } ?>>


                                <!-- ============ INTRO TEXT =========== -->
                                <?php if ($smof_data['contact_switch_int'] == 1) { ?> 
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['contact_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['contact_intro_h1']; ?></div>
                                            <?php } ?>
                                            <?php if ($smof_data['contact_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['contact_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                                <?php } ?>
                            </section>

                        <?php } ?>

                        <section class="contact_us_main man_box">

                            <!-- ==== BORDERTOP ==== -->
                            <?php if ($smof_data['contact_bord_top'] == 1) { ?>
                                <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                            <?php } ?>

                            <div class="contact_us_mid section-mid">
                                <div class="container">
                                    <?php if ($smof_data['contact_title']) { ?>
                                        <h1 class="text-center text-up"><?php echo $smof_data['contact_title']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['contact_subtitle']) { ?>
                                        <div class="lines sub_title text-center"><?php echo $smof_data['contact_subtitle']; ?></div>
                                    <?php } ?>

                                    <div class="section_exc"><?php
                                        if($smof_data['contact_excerpt'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['contact_excerpt'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>

                                        <div class="form">
                                            <div class="row-fluid">
                                             <?php if($smof_data['google_map']==1) {?>
                                                <div class="google_map span6 <?php if($smof_data['contact_form_det']==0) {echo "offset3";}?>">
                                                	<?php if ($smof_data['contact_map_type']==0){?>
                                                    <script type="text/javascript">
                                                        //<![CDATA[
                                                        jQuery(document).ready(function ($) {
                                                            var geocoder = new google.maps.Geocoder();

                                                            geocoder.geocode({'address': '<?php echo str_replace(' ','+',$smof_data['contact_gmap']); ?>'}, function (results, status) {
                                                                if (status == google.maps.GeocoderStatus.OK) {
                                                                    var latitude = results[0].geometry.location.lat();
                                                                    var longitude = results[0].geometry.location.lng();
                                                                    function initialize() {
                                                                        var myOptions = {
                                                                            zoom: <?php echo $smof_data['contact_gmap_zoom']; ?>,
                                                                            center: new google.maps.LatLng(-33.397, 150.644),
                                                                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                                            sensor: 'true'
                                                                        }
                                                                        var map = new google.maps.Map(document.getElementById("gmap"), myOptions);

                                                                        var marker = new google.maps.Marker({
                                                                            position: new google.maps.LatLng(latitude, longitude),
                                                                             map: map,
                                                                            icon: 'wp-content/themes/oceanplaza/images/marker.png'
																		});

                                                                        
                                                                        google.maps.event.addListener(marker, "click", function(e) {
                                                                            var infoBox = new InfoBox({latlng: marker.getPosition(), map: map});
                                                                        });
                                                                        google.maps.event.trigger(marker, "click");
                                                                    }
                                                                    initialize();
                                                                }
                                                            });



                                                        /* An InfoBox is like an info window, but it displays
                                                         * under the marker, opens quicker, and has flexible styling.
                                                         * @param {GLatLng} latlng Point to place bar at
                                                         * @param {Map} map The map on which to display this InfoBox.
                                                         * @param {Object} opts Passes configuration options - content,
                                                         * offsetVertical, offsetHorizontal, className, height, width
                                                         */
                                                        function InfoBox(opts) {
                                                            google.maps.OverlayView.call(this);
                                                            this.latlng_ = opts.latlng;
                                                            this.map_ = opts.map;
                                                            this.offsetVertical_ = -195;
                                                            this.offsetHorizontal_ = 0;
                                                            this.height_ = 165;
                                                            this.width_ = 266;
                                                            var me = this;
                                                            this.boundsChangedListener_ =
                                                                google.maps.event.addListener(this.map_, "bounds_changed", function() {
                                                                    return me.panMap.apply(me);
                                                                });
// Once the properties of this OverlayView are initialized, set its map so
// that we can display it. This will trigger calls to panes_changed and
// draw.
                                                            this.setMap(this.map_);

                                                        }
                                                        /* InfoBox extends GOverlay class from the Google Maps API
                                                         */
                                                        InfoBox.prototype = new google.maps.OverlayView();
                                                        /* Creates the DIV representing this InfoBox
                                                         */
                                                        InfoBox.prototype.remove = function() {
                                                            if (this.div_) {
                                                                this.div_.parentNode.removeChild(this.div_);
                                                                this.div_ = null;
                                                            }
                                                        };
                                                        /* Redraw the Bar based on the current projection and zoom level
                                                         */
                                                        InfoBox.prototype.draw = function() {
// Creates the element if it doesn't exist already.
                                                            this.createElement();
                                                            if (!this.div_) return;
// Calculate the DIV coordinates of two opposite corners of our bounds to
// get the size and position of our Bar
                                                            var pixPosition = this.getProjection().fromLatLngToDivPixel(this.latlng_);
                                                            if (!pixPosition) return;
// Now position our DIV based on the DIV coordinates of our bounds
                                                            this.div_.style.width = this.width_ + "px";
                                                            this.div_.style.left = (pixPosition.x + this.offsetHorizontal_) + "px";
                                                            this.div_.style.height = this.height_ + "px";
                                                            this.div_.style.top = (pixPosition.y + this.offsetVertical_) + "px";
                                                            this.div_.style.display = 'block';
                                                        };
                                                        /* Creates the DIV representing this InfoBox in the floatPane. If the panes
                                                         * object, retrieved by calling getPanes, is null, remove the element from the
                                                         * DOM. If the div exists, but its parent is not the floatPane, move the div
                                                         * to the new pane.
                                                         * Called from within draw. Alternatively, this can be called specifically on
                                                         * a panes_changed event.
                                                         */
                                                        InfoBox.prototype.createElement = function() {
                                                            var panes = this.getPanes();
                                                            var div = this.div_;
                                                            if (!div) {
// This does not handle changing panes. You can set the map to be null and
// then reset the map to move the div.
                                                                div = this.div_ = document.createElement("div");
                                                                div.style.border = "0px none";
                                                                div.style.position = "absolute";
                                                                div.style.background = "url('http://demo1.oceanplazatheme.com/wp-content/themes/oceanplaza/images/blueinfowindow.gif')";
                                                                div.style.width = this.width_ + "px";
                                                                div.style.height = this.height_ + "px";
                                                                var contentDiv = document.createElement("div");
                                                                contentDiv.style.padding = "30px"
                                                                contentDiv.innerHTML = "<b><?php echo $smof_data['contact_gmap'];?></b>";
                                                                var topDiv = document.createElement("div");
                                                                topDiv.style.textAlign = "right";
                                                                var closeImg = document.createElement("img");
                                                                closeImg.style.width = "32px";
                                                                closeImg.style.height = "32px";
                                                                closeImg.style.cursor = "pointer";
                                                                closeImg.src = "http://gmaps-samples.googlecode.com/svn/trunk/images/closebigger.gif";
                                                                topDiv.appendChild(closeImg);
                                                                function removeInfoBox(ib) {
                                                                    return function() {
                                                                        ib.setMap(null);
                                                                    };
                                                                }
                                                                google.maps.event.addDomListener(closeImg, 'click', removeInfoBox(this));
                                                                div.appendChild(topDiv);
                                                                div.appendChild(contentDiv);
                                                                div.style.display = 'none';
                                                                panes.floatPane.appendChild(div);
                                                                this.panMap();
                                                            } else if (div.parentNode != panes.floatPane) {
// The panes have changed. Move the div.
                                                                div.parentNode.removeChild(div);
                                                                panes.floatPane.appendChild(div);
                                                            } else {
// The panes have not changed, so no need to create or move the div.
                                                            }
                                                        }
                                                        /* Pan the map to fit the InfoBox.
                                                         */
                                                        InfoBox.prototype.panMap = function() {
// if we go beyond map, pan map
                                                            var map = this.map_;
                                                            var bounds = map.getBounds();
                                                            if (!bounds) return;
// The position of the infowindow
                                                            var position = this.latlng_;
// The dimension of the infowindow
                                                            var iwWidth = this.width_;
                                                            var iwHeight = this.height_;
// The offset position of the infowindow
                                                            var iwOffsetX = this.offsetHorizontal_;
                                                            var iwOffsetY = this.offsetVertical_;
// Padding on the infowindow
                                                            var padX = 270;
                                                            var padY = 20;
// The degrees per pixel
                                                            var mapDiv = map.getDiv();
                                                            var mapWidth = mapDiv.offsetWidth;
                                                            var mapHeight = mapDiv.offsetHeight;
                                                            var boundsSpan = bounds.toSpan();
                                                            var longSpan = boundsSpan.lng();
                                                            var latSpan = boundsSpan.lat();
                                                            var degPixelX = longSpan / mapWidth;
                                                            var degPixelY = latSpan / mapHeight;
// The bounds of the map
                                                            var mapWestLng = bounds.getSouthWest().lng();
                                                            var mapEastLng = bounds.getNorthEast().lng();
                                                            var mapNorthLat = bounds.getNorthEast().lat();
                                                            var mapSouthLat = bounds.getSouthWest().lat();
// The bounds of the infowindow
                                                            var iwWestLng = position.lng() + (iwOffsetX - padX) * degPixelX;
                                                            var iwEastLng = position.lng() + (iwOffsetX + iwWidth + padX) * degPixelX;
                                                            var iwNorthLat = position.lat() - (iwOffsetY - padY) * degPixelY;
                                                            var iwSouthLat = position.lat() - (iwOffsetY + iwHeight + padY) * degPixelY;
// calculate center shift
                                                            var shiftLng =
                                                                (iwWestLng < mapWestLng ? mapWestLng - iwWestLng : 0) +
                                                                    (iwEastLng > mapEastLng ? mapEastLng - iwEastLng : 0);
                                                            var shiftLat =
                                                                (iwNorthLat > mapNorthLat ? mapNorthLat - iwNorthLat : 0) +
                                                                    (iwSouthLat < mapSouthLat ? mapSouthLat - iwSouthLat : 0);
// The center of the map
                                                            var center = map.getCenter();
// The new map center
                                                            var centerX = center.lng() - shiftLng;
                                                            var centerY = center.lat() - shiftLat;
// center the map to the new shifted center
                                                            map.setCenter(new google.maps.LatLng(centerY, centerX));
// Remove the listener after panning is complete.
                                                            google.maps.event.removeListener(this.boundsChangedListener_);
                                                            this.boundsChangedListener_ = null;
                                                        };

                                                        });
                                                        //]]>
                                                    </script>
                                                    <?php } ?>
                                                   <div class="gmap" id="gmap">
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <?php if($smof_data['contact_form_det']==1) {?>
                                                <div class="span6 <?php if($smof_data['google_map']==0) echo "offset3";?>">
                                                    <div class="span6">
                                                        <h3><?php echo $smof_data['det_title']; ?></h3>

                                                        <ul class="more_info_box unstyled">
                                                            <li><i class="icon-phone firm"></i> <?php echo $smof_data['contact_info_phone']; ?></li>
                                                            <li><i class="icon-envelope firm"></i> <?php echo $smof_data['contact_info_email']; ?></li>
                                                            <li><i class="icon-skype firm"></i> <?php echo $smof_data['contact_info_skype']; ?></li>
                                                            <li><i class="icon-map-marker firm"></i> <?php echo $smof_data['contact_info_addr']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="span6">
                                                        <h3><?php echo $smof_data['cf_title']; ?></h3>
                                                        <?php echo do_shortcode($smof_data['email']);?>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                    <div class="section_exc"><?php
                                        if($smof_data['contact_excerpt2'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['contact_excerpt2'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- ==== BORDERBOTTOM ==== -->
                            <?php if ($smof_data['contact_bord_bot'] == 1) { ?>
                                <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                            <?php } ?>

                        </section>
                    </li>
<?php break;
                case 'WooSection' :
                    ?>

                    <!-- ========== PRICING TABLE ========== -->

                    <li id="woo" class="section">
                        <?php if ($smof_data['woo_switch'] == 1) { ?>

                            <section class="woo_intro intro"
                                <?php if ($smof_data['woo_intro_img']) { ?>
                                    style="background-image: url(<?php echo $smof_data['woo_intro_img']; ?>);"
                                <?php } ?>>

                                <!-- ======= INTROTEXT ======= -->
                                <?php if ($smof_data['woo_switch_int'] == 1) { ?>
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['woo_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['woo_intro_h1']; ?></div>
                                            <?php } ?>
                                            <?php if ($smof_data['woo_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['woo_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                        <?php } ?>
                            </section>

                        <?php } ?>

                        <section class="woo_main man_box">

                            <!-- ==== BORDERTOP ==== -->
                            <?php if ($smof_data['woo_bord_top'] == 1) { ?>
                                <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                            <?php } ?>

                            <div class="woo_mid section-mid">
                                <div class="container">
                                    <?php if ($smof_data['woo_title']) { ?>
                                        <h1 class="text-center text-up"><?php echo $smof_data['woo_title']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['woo_subtitle']) { ?>
                                        <div class="lines sub_title text-center"><?php echo $smof_data['woo_subtitle']; ?></div>
                                    <?php } ?>

                                    <div class="section_exc">
                                        <?php
                                        if($smof_data['woo_excerpt'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['woo_excerpt'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>

                                    <div id="woo_2" class="">

                                        <?php
                                        if ( ! function_exists( 'is_woocommerce_activated' ) ) {
																					function is_woocommerce_activated() {
																						if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
																					}
																				}
																				if(is_woocommerce_activated() == true) {
                                        if(!empty($smof_data['woo_post_number'])){
                                            $number = $smof_data['woo_post_number'];
                                        }
                                        if(!empty($smof_data['woo_type'])){
                                            if($smof_data['woo_type'] === "Featured"){
                                                $query_args = array('posts_per_page' => $number, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product' );

                                                $query_args['meta_query'] = $woocommerce->query->get_meta_query();
                                                $query_args['meta_query'][] = array(
                                                    'key' => '_featured',
                                                    'value' => 'yes'
                                                );

                                                $r = new WP_Query($query_args);

                                                if ($r->have_posts()) : ?>
													
    												<!-- <ul class="mycarousel product_list_widget"> -->
                                                    <ul class="mycarousel-woo product_list_widget row-fluid mycarousel2">
                                                        <?php while ($r->have_posts()) : $r->the_post(); global $product; ?>

                                                            <li class="span3">
                                                                <a class="image-clear" href="<?php echo esc_url( get_permalink( $r->post->ID ) ); ?>" title="<?php echo esc_attr($r->post->post_title ? $r->post->post_title : $r->post->ID); ?>">
                                                                    <?php echo $product->get_image(); ?>
                                                                    <?php if ( $r->post->post_title ) echo get_the_title( $r->post->ID ); else echo $r->post->ID; ?>
                                                                </a> <?php echo $product->get_price_html(); ?>
                                                            </li>

                                                        <?php endwhile; ?>
                                                    </ul>

                                                <?php endif;

                                                wp_reset_postdata();
                                            }
                                            elseif($smof_data['woo_type'] === "Top Rated"){
                                                add_filter( 'posts_clauses',  array( $woocommerce->query, 'order_by_rating_post_clauses' ) );

                                                $query_args = array('posts_per_page' => $number, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product' );

                                                $query_args['meta_query'] = $woocommerce->query->get_meta_query();

                                                $top_rated_posts = new WP_Query( $query_args );

                                                if ($top_rated_posts->have_posts()) :                                            ?>
                                                    <ul class="mycarousel-woo product_list_widget row-fluid mycarousel2">
                                                        <?php while ($top_rated_posts->have_posts()) : $top_rated_posts->the_post(); global $product;
                                                            ?>
                                                            <li class="span3">
                                                                <a class="image-clear" href="<?php echo esc_url( get_permalink( $top_rated_posts->post->ID ) ); ?>" title="<?php echo esc_attr($top_rated_posts->post->post_title ? $top_rated_posts->post->post_title : $top_rated_posts->post->ID); ?>">
                                                                    <?php echo $product->get_image(); ?>
                                                                    <?php if ( $top_rated_posts->post->post_title ) echo get_the_title( $top_rated_posts->post->ID ); else echo $top_rated_posts->post->ID; ?>
                                                                </a> <?php echo $product->get_rating_html(); ?><?php echo $product->get_price_html(); ?>
                                                            </li>

                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php
                                                endif;

                                                wp_reset_query();
                                                remove_filter( 'posts_clauses', array( $woocommerce->query, 'order_by_rating_post_clauses' ) );
                                            }
                                            elseif($smof_data['woo_type'] === "Recent"){
                                                $query_args = array('posts_per_page' => $number, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product');

                                                $query_args['meta_query'] = array();

                                                $query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();
                                                $query_args['meta_query']   = array_filter( $query_args['meta_query'] );

                                                $r = new WP_Query($query_args);

                                                if ( $r->have_posts() ) {

                                                    echo '<ul class="mycarousel-woo product_list_widget row-fluid mycarousel2">';

                                                    while ( $r->have_posts()) {
                                                        $r->the_post();
                                                        global $product;

                                                        echo '<li class="span3">
                                                            <a class="image-clear" href="' . get_permalink() . '">
                                                                ' . ( has_post_thumbnail() ? get_the_post_thumbnail( $r->post->ID, 'shop_thumbnail' ) : woocommerce_placeholder_img( 'shop_thumbnail' ) ) . ' ' . get_the_title() . '
                                                            </a> ' . $product->get_price_html() . '
                                                        </li>';
                                                    }

                                                    echo '</ul>';

                                                }

                                                wp_reset_postdata();
                                            }
                                            elseif($smof_data['woo_type'] === "Random"){
                                                $query_args = array(
                                                    'post_type'      => 'product',
                                                    'post_status'    => 'publish',
                                                    'posts_per_page' => $number,
                                                    'orderby'        => 'rand',
                                                    'no_found_rows'  => 1
                                                );

                                                $query_args['meta_query'] = array();


                                                $query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();
                                                $query_args['meta_query']   = array_filter( $query_args['meta_query'] );

                                                $query = new WP_Query( $query_args );

                                                if ( $query->have_posts() ) {

                                                    ?>

                                                    <ul class="mycarousel-woo product_list_widget mycarousel2">
                                                        <?php while ($query->have_posts()) : $query->the_post(); global $product; ?>
                                                            <li>
                                                                <a class="image-clear" href="<?php the_permalink() ?>">
                                                                    <?php
                                                                    if ( has_post_thumbnail() )
                                                                        the_post_thumbnail( 'shop_thumbnail' );
                                                                    else
                                                                        echo woocommerce_placeholder_img( 'shop_thumbnail' );
                                                                    ?>
                                                                    <?php the_title() ?>
                                                                </a>
                                                                <?php echo $product->get_price_html() ?>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>

                                                <?php
                                                }

                                                wp_reset_postdata();
                                            }
                                        }

}
                                        ?>
                                        </div>

                                    <div class="section_exc">
                                        <?php
                                        if($smof_data['woo_excerpt2'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['woo_excerpt2'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- ==== BORDERBOTTOM ==== -->
                            <?php if ($smof_data['woo_bord_bot'] == 1) { ?>
                                <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                            <?php } ?>

                        </section>
                    </li>
                      <?php break;
                case 'Blank1' :
#=====================================================#
#                      = BLANK1 =                     #
#=====================================================#
                    ?>
                    <li class="section" id="blank1">
                    <?php if ($smof_data['blank1_switch'] == 1) { ?>
                        <section class="blank1_intro intro"
                            <?php if ($smof_data['blank1_intro_img']) { ?>
                                style="background-image: url(<?php echo $smof_data['blank1_intro_img']; ?>);"
                            <?php } ?>>

                                <!-- ============ INTRO TEXT =========== -->
                                <?php if ($smof_data['blank1_switch_int'] == 1) { ?> 
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['blank1_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['blank1_intro_h1']; ?></div>
                                            <?php } ?>
                                            <?php if ($smof_data['blank1_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['blank1_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                                <?php } ?>
                        </section>

                    <?php } ?>

                    <section class="blank1_main man_box">

                        <!-- ==== BORDERTOP ==== -->



                        <?php if ($smof_data['blank1_bord_top'] == 1) { ?>
                            <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                        <?php } ?>

                        <div class="blank1_mid section-mid">
                            <div class="container">
                            
                            <?php if ($smof_data['blank1_title']) { ?>
                                <h1 class="text-center text-up"><?php echo $smof_data['blank1_title']; ?></h1>
                            <?php } ?>
                            <?php if ($smof_data['blank1_subtitle']) { ?>
                                <div class="lines sub_title text-center"><?php echo $smof_data['blank1_subtitle']; ?></div>
                            <?php } ?>

                            <div class="section_exc"><?php
                                if($smof_data['blank1_excerpt'] != "Select page"){
                                    $page = get_posts( array( 'name' => $smof_data['blank1_excerpt'], 'post_type' => 'page' ) );
                                    if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                } ?>
                            </div>
                                <div class="section_exc"><?php
                                    if($smof_data['blank1_excerpt2'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['blank1_excerpt2'], 'post_type' => 'page' ) );
                                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                    } ?>
                                </div>
                            </div>
                        </div>


                        <!-- ==== BORDERBOTTOM ==== -->
                        <?php if ($smof_data['blank1_bord_bot'] == 1) { ?>
                            <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                        <?php } ?>

                    </section>
                    </li>
                    
                    <?php break;
#=====================================================#
#                      = BLANK2 =                     #
#=====================================================#
                case 'Blank2' :
                    ?>
                    <li class="section" id="blank2">
                    <?php if ($smof_data['blank2_switch'] == 1) { ?>
                        <section class="blank2_intro intro"
                            <?php if ($smof_data['blank2_intro_img']) { ?>
                                style="background-image: url(<?php echo $smof_data['blank2_intro_img']; ?>);"
                            <?php } ?>>

                                <!-- ============ INTRO TEXT =========== -->
                                <?php if ($smof_data['blank2_switch_int'] == 1) { ?> 
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['blank2_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['blank2_intro_h1']; ?></div>
                                            <?php } ?>
                                            <?php if ($smof_data['blank2_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['blank2_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                                <?php } ?>
                        </section>

                    <?php } ?>

                    <section class="blank2_main man_box">

                        <!-- ==== BORDERTOP ==== -->



                        <?php if ($smof_data['blank2_bord_top'] == 1) { ?>
                            <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                        <?php } ?>

                        <div class="blank2_mid section-mid">
                            <div class="container">
                            
                            <?php if ($smof_data['blank2_title']) { ?>
                                <h1 class="text-center text-up"><?php echo $smof_data['blank2_title']; ?></h1>
                            <?php } ?>
                            <?php if ($smof_data['blank2_subtitle']) { ?>
                                <div class="lines sub_title text-center"><?php echo $smof_data['blank2_subtitle']; ?></div>
                            <?php } ?>

                            <div class="section_exc"><?php
                                if($smof_data['blank2_excerpt'] != "Select page"){
                                    $page = get_posts( array( 'name' => $smof_data['blank2_excerpt'], 'post_type' => 'page' ) );
                                    if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                } ?>
                            </div>
                                <div class="section_exc"><?php
                                    if($smof_data['blank2_excerpt2'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['blank2_excerpt2'], 'post_type' => 'page' ) );
                                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                    } ?>
                                </div>
                            </div>
                        </div>


                        <!-- ==== BORDERBOTTOM ==== -->
                        <?php if ($smof_data['blank2_bord_bot'] == 1) { ?>
                            <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                        <?php } ?>

                    </section>
                    </li>
                    
                    <?php break;
#=====================================================#
#                      = BLANK3 =                     #
#=====================================================#
                case 'Blank3' :
                    ?>
                    <li class="section" id="blank3">
                    <?php if ($smof_data['blank3_switch'] == 1) { ?>
                        <section class="blank3_intro intro"
                            <?php if ($smof_data['blank3_intro_img']) { ?>
                                style="background-image: url(<?php echo $smof_data['blank3_intro_img']; ?>);"
                            <?php } ?>>

                                <!-- ============ INTRO TEXT =========== -->
                                <?php if ($smof_data['blank3_switch_int'] == 1) { ?> 
                                <div class="rubik">
                                    <div class="rubik-top-border"></div>
                                    <div class="container text-center">
                                        <div class="intro_pad">
                                            <?php if ($smof_data['blank3_intro_h1']) { ?>
                                                <div class="h1"><?php echo $smof_data['blank3_intro_h1']; ?></div>
                                            <?php } ?>
                                            <?php if ($smof_data['blank3_intro_h2']) { ?>
                                                <div class="h2"><?php echo $smof_data['blank3_intro_h2']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="rubik-bot-border"></div>
                                </div>
                                <?php } ?>
                        </section>

                    <?php } ?>

                    <section class="blank3_main man_box">

                        <!-- ==== BORDERTOP ==== -->



                        <?php if ($smof_data['blank3_bord_top'] == 1) { ?>
                            <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                        <?php } ?>

                        <div class="blank3_mid section-mid">
                            <div class="container">
                            
                            <?php if ($smof_data['blank3_title']) { ?>
                                <h1 class="text-center text-up"><?php echo $smof_data['blank3_title']; ?></h1>
                            <?php } ?>
                            <?php if ($smof_data['blank3_subtitle']) { ?>
                                <div class="lines sub_title text-center"><?php echo $smof_data['blank3_subtitle']; ?></div>
                            <?php } ?>

                            <div class="section_exc"><?php
                                if($smof_data['blank3_excerpt'] != "Select page"){
                                    $page = get_posts( array( 'name' => $smof_data['blank3_excerpt'], 'post_type' => 'page' ) );
                                    if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                } ?>
                            </div>
                                <div class="section_exc"><?php
                                    if($smof_data['blank3_excerpt2'] != "Select page"){
                                        $page = get_posts( array( 'name' => $smof_data['blank3_excerpt2'], 'post_type' => 'page' ) );
                                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                    } ?>
                                </div>
                            </div>
                        </div>


                        <!-- ==== BORDERBOTTOM ==== -->
                        <?php if ($smof_data['blank3_bord_bot'] == 1) { ?>
                            <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                        <?php } ?>

                    </section>
                    </li>

                    <?php break;
#=====================================================#
#                      Recent posts                   #
#=====================================================#
                case 'Recent posts' :
                    ?>
                    <li class="section" id="recent">
                        <?php if ($smof_data['recent_switch'] == 1) { ?>
                            <section class="recent_intro intro"
                                <?php if ($smof_data['recent_intro_img']) { ?>
                                    style="background-image: url(<?php echo $smof_data['recent_intro_img']; ?>);"
                                <?php } ?>>

                                <!-- ============ INTRO TEXT =========== -->
                                <?php if ($smof_data['recent_switch_int'] == 1) { ?>
                                    <div class="rubik">
                                        <div class="rubik-top-border"></div>
                                        <div class="container text-center">
                                            <div class="intro_pad">
                                                <?php if ($smof_data['recent_intro_h1']) { ?>
                                                    <div class="h1"><?php echo $smof_data['recent_intro_h1']; ?></div>
                                                <?php } ?>
                                                <?php if ($smof_data['recent_intro_h2']) { ?>
                                                    <div class="h2"><?php echo $smof_data['recent_intro_h2']; ?></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="rubik-bot-border"></div>
                                    </div>
                                <?php } ?>
                            </section>

                        <?php } ?>

                        <section class="recent_main man_box">

                            <!-- ==== BORDERTOP ==== -->



                            <?php if ($smof_data['recent_bord_top'] == 1) { ?>
                                <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
                            <?php } ?>

                            <div class="recent_mid section-mid">
                                <div class="container">

                                    <?php if ($smof_data['recent_title']) { ?>
                                        <h1 class="text-center text-up"><?php echo $smof_data['recent_title']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['recent_subtitle']) { ?>
                                        <div class="lines sub_title text-center"><?php echo $smof_data['recent_subtitle']; ?></div>
                                    <?php } ?>
                                    <div class="section_exc"><?php
                                        if($smof_data['recent_excerpt'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['recent_excerpt'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        } ?>
                                    </div>
                                    <?php
                                    if (isset($smof_data['recent_posts_count'])){
                                        $post_to_show = $smof_data['recent_posts_count'];
                                    }else{
                                        $post_to_show = -1;
                                    }
                                    switch ($smof_data['recent_posts_type']):
                                        case 'default':
                                            $terms = array(
                                                'post-format-aside',
                                                'post-format-audio',
                                                'post-format-chat',
                                                'post-format-gallery',
                                                'post-format-image',
                                                'post-format-link',
                                                'post-format-quote',
                                                'post-format-status',
                                                'post-format-video'
                                            );
                                            $ggt_recent_args = array(
                                                'posts_per_page' => $post_to_show,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'post_format',
                                                        'field' => 'slug',
                                                        'terms' => $terms,
                                                        'operator' => 'NOT IN'
                                                    )
                                                )
                                            ) ;
                                            break;
                                        case 'all_formats':
                                            $ggt_recent_args = array(
                                                'posts_per_page' => $post_to_show,
                                                'orderby'          => 'post_date',
                                                'ignore_sticky_posts' => 1,
                                                'order'            => 'DESC',
                                                'post_type'        => 'post',
                                                'post_status'      => 'publish',
                                                'suppress_filters' => true);
                                            break;
                                    endswitch;
                                    if (isset($smof_data['recent_posts_type']) && $smof_data['recent_posts_type'] != 'default' && $smof_data['recent_posts_type'] != 'all_formats' ):
                                        $ggt_recent_args=array(
                                            'posts_per_page' => $post_to_show,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'post_format',
                                                    'field' => 'slug',
                                                    'terms' => array(
                                                        'post-format-'.$smof_data['recent_post_type']
                                                    ),
                                                )
                                            )
                                        ) ;
                                    endif;?>
                    <div class="team_corusel">
                        <div class="mycont">

                            <!-- Carousel items -->
                            <?php $post_counter = 1; $rows_counter=1;?>

                            <?php
                                $ggt_recent = new WP_Query($ggt_recent_args);
                                    if($ggt_recent->have_posts()){
                                        global $post;
                                            while($ggt_recent->have_posts()){
                                            $ggt_recent->the_post(); ?>
                                            <?php if($post_counter==1){
                                            if($rows_counter!=1){ ?>
                                            <ul class="mycarousel2 unstyled row-fluid margin-top-30">
                                                <?php 	} else {?>
                                                <ul class="mycarousel2 unstyled row-fluid">
                                                    <?php }
                                                    }?>

                                            <li class="item span3">
                                                <div class="team_container">
                                                    <div>
                                                        <a href="<?php the_permalink(); ?>">
                                                        <?php if (has_post_thumbnail()) {
                                                            the_post_thumbnail();
                                                        } else {
                                                            echo '<img src="' . get_template_directory_uri() . '/images/800x800.jpg" alt="" />';
                                                        }?>
                                                        </a>
                                                        <div class="caption">
                                                            <?php if(isset($smof_data['recent_date']) && $smof_data['recent_date']==1){ ?><p><?php the_time('F j, Y');?></p> <?php } ?>
                                                            <?php the_title('<h3>','</h3>'); ?>
                                                            <?php the_excerpt(); ?>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </li>
                                                <?php
                                                $post_counter++;

                                                if($post_counter>4){
                                                $post_counter = 1;
                                                $rows_counter++;
                                                ?>
                                                </ul>
                                            <?php
                                            }

                                        ?>
                                    <?php } ?>
                                        <?php if($rows_counter==1){echo '</ul>';}?>
                                    <?php }

                                    wp_reset_postdata();
                                    ?>
                        </div>
                    </div>
                                    <div class="section_exc"><?php
                                        if($smof_data['recent_excerpt2'] != "Select page"){
                                            $page = get_posts( array( 'name' => $smof_data['recent_excerpt2'], 'post_type' => 'page' ) );
                                            if ( $page ) { echo do_shortcode($page[0]->post_content); }
                                        } ?>
                                    </div>
                                </div>
                            </div>


                            <!-- ==== BORDERBOTTOM ==== -->
                            <?php if ($smof_data['recent_bord_bot'] == 1) { ?>
                                <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
                            <?php } ?>

                        </section>
                    </li>

                    <?php break;
                default :
                    break;
            }
        }

        ?>
    </ul>
</section>

<?php get_footer(); ?>