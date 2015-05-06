<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;?>
<?php global $smof_data; ?>

<!-- ==========================FOOTER======================= -->
<footer>
	<?php if ($smof_data['widget_switcher'] == 1){ ?>
    <?php if ($smof_data['widget_switch'] == 1) { ?>
        <section class="widget_intro intro"
            <?php if ($smof_data['widget_intro_img']) { ?>
                style="background-image: url(<?php echo $smof_data['widget_intro_img']; ?>);"
            <?php } ?>>

            <!-- ============ INTRO TEXT =========== -->
            <?php if ($smof_data['widget_switch_int'] == 1) { ?>
            <div class="rubik">
                <div class="rubik-top-border"></div>
                <div class="container text-center">
                    <div class="intro_pad">
                        <?php if ($smof_data['widget_intro_h1']) { ?>
                            <h1><?php echo $smof_data['widget_intro_h1']; ?></h1>
                        <?php } ?>
                        <?php if ($smof_data['footer_social'] == 1) { ?>
                            <ul class="social_line unstyled inline">
                                <?php if ($smof_data['footer_soc_skype']) { ?>
                                    <li><a target="_blank" href="tel:<?php echo $smof_data['footer_soc_skype']; ?>" title="Skype" class="fsoc">S</a></li>
                                <?php } if ($smof_data['footer_soc_tumblr']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_tumblr']; ?>" title="Tumblr" class="fsoc">t</a></li>
                                <?php } if ($smof_data['footer_soc_digg']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_digg']; ?>" title="Digg" class="fsoc">;</a></li>
                                <?php } if ($smof_data['footer_soc_linkedin']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_linkedin']; ?>" title="LinkedIn" class="fsoc">L</a></li>
                                <?php } if ($smof_data['footer_soc_facebook']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_facebook']; ?>" title="Facebook" class="fsoc">f</a></li>
                                <?php } if ($smof_data['footer_soc_twitter']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_twitter']; ?>" title="Twitter" class="fsoc">T</a></li>
                                <?php } if ($smof_data['footer_soc_youtube']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_youtube']; ?>" title="YouTube" class="fsoc">U</a></li>
                                <?php } if ($smof_data['footer_soc_vimeo']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_vimeo']; ?>" title="Vimeo" class="fsoc">V</a></li>
                                <?php } if ($smof_data['footer_soc_rss']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_rss']; ?>" title="RSS" class="fsoc">R</a></li>
                                <?php } if ($smof_data['footer_soc_google']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_google']; ?>" title="Google Plus" class="fsoc">+</a></li>
                                <?php } if ($smof_data['footer_soc_flickr']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_flickr']; ?>" title="Flickr" class="fsoc">F</a></li>
                                <?php } if ($smof_data['footer_soc_dribbble']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_dribbble']; ?>" title="Dribbble" class="fsoc">D</a></li>
                                <?php } if ($smof_data['footer_soc_email']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_email']; ?>" title="Email" class="fsoc">]</a></li>
                                <?php } if ($smof_data['footer_soc_blogger']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_blogger']; ?>" title="Blogger" class="fsoc">B</a></li>
                                <?php } if ($smof_data['footer_soc_flattr']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_flattr']; ?>" title="Flattr" class="fsoc">%</a></li>
                                <?php } if ($smof_data['footer_soc_github']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_github']; ?>" title="Github" class="fsoc">è</a></li>
                                <?php } if ($smof_data['footer_soc_instagram']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_instagram']; ?>" title="Instagram" class="fsoc">Ü</a></li>
                                <?php } if ($smof_data['footer_soc_myspace']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_myspace']; ?>" title="MySpace" class="fsoc">_</a></li>
                                <?php } if ($smof_data['footer_soc_pinterest']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_pinterest']; ?>" title="Pinterest" class="fsoc">1</a></li>
                                <?php } if ($smof_data['footer_soc_reddit']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_reddit']; ?>" title="Reddit" class="fsoc"></a></li>
                                <?php } if ($smof_data['footer_soc_soundcloud']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_soundcloud']; ?>" title="SoundCloud" class="fsoc">s</a></li>
                                <?php } if ($smof_data['footer_soc_stumbleupon']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_stumbleupon']; ?>" title="Stumbleupon" class="fsoc">/</a></li>
                                <?php } if ($smof_data['footer_soc_vk']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_vk']; ?>" title="VK" class="fsoc">N</a></li>
                                <?php } if ($smof_data['footer_soc_yahoo']) { ?>
                                    <li><a target="_blank" href="<?php echo $smof_data['footer_soc_yahoo']; ?>" title="Yahoo" class="fsoc">Y</a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="rubik-bot-border"></div>
            </div>
            <?php } ?>
        </section>

    <?php } ?>

    <section class="widget_main man_box">

        <!-- ==== BORDERTOP ==== -->
        <?php if ($smof_data['widget_bord_top'] == 1) { ?>
            <div class="top-border"><div class="top-border-left"></div><div class="top-border-right"></div></div>
        <?php } ?>

        <div class="widget_mid">
            <div class="container">
                <?php if ($smof_data['widget_title']) { ?>
                    <h1 class="text-center text-up"><?php echo $smof_data['widget_title']; ?></h1>
                <?php } ?>
                <?php if ($smof_data['widget_subtitle']) { ?>
                    <div
                        class="lines sub_title text-center"><?php echo $smof_data['widget_subtitle']; ?></div>
                <?php } ?>

                <div class="section_exc"><?php
                    if($smof_data['widget_excerpt'] != "Select page"){
                        $page = get_posts( array( 'name' => $smof_data['widget_excerpt'], 'post_type' => 'page' ) );
                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                    }
                    ?>
                </div>
                <div class="row-fluid fwidgets mycarousel2">
                    <?php
                        dynamic_sidebar('footer_type_1');
                        dynamic_sidebar('footer_type_2');
                        dynamic_sidebar('footer_type_3');
                        dynamic_sidebar('footer_type_4');
                    ?>
                </div>

                <div class="section_exc"><?php
                    if($smof_data['widget_excerpt2'] != "Select page"){
                        $page = get_posts( array( 'name' => $smof_data['widget_excerpt2'], 'post_type' => 'page' ) );
                        if ( $page ) { echo do_shortcode($page[0]->post_content); }
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- ==== BORDERBOTTOM ==== -->
        <?php if ($smof_data['widget_bord_bot'] == 1) { ?>
            <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
        <?php } ?>

    </section>
    <?php } ?>
    <section class="footer_bottom">
        <?php if ($smof_data['footer_bord_top'] == 1) { ?>
        <div class="footer-top-bord"></div>
        <?php } ?>
        <div class="container">
            <div class="row-fluid">
                <div class="span3" id="flogo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo $smof_data['flogo']; ?>" alt=""/></a>
                </div>
                <div class="span3 copyright">
                    <?php if (!empty($smof_data['footer_copyright'])) { echo $smof_data['footer_copyright'];} ?>
                </div>
                <div class="span3 themeby">
                    <?php if (!empty($smof_data['footer_theme'])) { echo $smof_data['footer_theme'];} ?>
                </div>
                <div class="span3 powerby text-right">
                    <?php if (!empty($smof_data['footer_power'])) { echo $smof_data['footer_power'];} ?>
                </div>
            </div>
        </div>
    </section>
</footer>

<script>
    //<![CDATA[
    jQuery(document).ready(function ($) {
        var retina = window.devicePixelRatio > 1 ? true : false;
        <?php if($smof_data['logo_retina'] && $smof_data['logo_retina_w'] && $smof_data['logo_retina_h']): ?>
        if (retina) {
            jQuery('header #logo img').attr('src', '<?php echo $smof_data["logo_retina"]; ?>');
            jQuery('header #logo img').attr('width', '<?php echo $smof_data["logo_retina_w"]; ?>');
            jQuery('header #logo img').attr('height', '<?php echo $smof_data["logo_retina_h"]; ?>');
        }
        <?php endif; ?>
        <?php if (!empty($smof_data['flogo_retina']) && !empty($smof_data['flogo_retina_w']) && !empty($smof_data['flogo_retina_h'])) { ?>
        <?php if($smof_data['flogo_retina'] && $smof_data['flogo_retina_w'] && $smof_data['flogo_retina_h']): ?>
        if (retina) {
            jQuery('#flogo img').attr('src', '<?php echo $smof_data["flogo_retina"]; ?>');
            jQuery('#flogo img').attr('width', '<?php echo $smof_data["flogo_retina_w"]; ?>');
            jQuery('#flogo img').attr('height', '<?php echo $smof_data["flogo_retina_h"]; ?>');
        }
        <?php endif; } ?>

    });
    //]]>
</script>

<script>
    jQuery(document).ready(function ($) {

	/**
 * Rift v1.0.0
 * An itsy bitsy image-splitting jQuery plugin
 * 
 * Licensed under the MIT license.
 * Copyright 2013 Kyle Foster @hkfoster
 */
;(function ( $, window, document, undefined ) {

  $.fn.rift = function () {

    return this.each(function () {
      
      // Vurribles
      var element = $(this),
          elemImg = element.find('img'),
          imgSrc  = elemImg.attr('src');
  
      // We be chainin'  
      element
        .prepend('<span class="top-span"></span>')
        .append('<span class="btm-span"></span>')
        .find('span.top-span')
        .css('background', 'url(' + imgSrc + ') no-repeat center top')
        .css('background-size', '100%')
        .parent()
        .find('span.btm-span')
        .css('background', 'url(' + imgSrc + ') no-repeat center bottom')
        .css('background-size', '100%');
    });
  };
})( jQuery, window, document );

$('.rift').rift();
    });

</script>

<?php wp_footer(); ?>

</body>
</html>