<?php
#-----------------------------------------------------------------#
# Column one_half shortcode
#-----------------------------------------------------------------#
add_shortcode('one_half', 'gg_shortcode_one_half');
function gg_shortcode_one_half($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'last' => 'no',
        ), $atts);
    if ($atts['last'] == 'yes') {
        return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    } else {
        return '<div class="one_half">' . do_shortcode($content) . '</div>';
    }
}

#-----------------------------------------------------------------#
# Column one_third shortcode
#-----------------------------------------------------------------#
add_shortcode('one_third', 'gg_shortcode_one_third');
function gg_shortcode_one_third($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'last' => 'no',
        ), $atts);
    if ($atts['last'] == 'yes') {
        return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    } else {
        return '<div class="one_third">' . do_shortcode($content) . '</div>';
    }
}

#-----------------------------------------------------------------#
# Column two_third shortcode
#-----------------------------------------------------------------#
add_shortcode('two_third', 'gg_shortcode_two_third');
function gg_shortcode_two_third($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'last' => 'no',
        ), $atts);
    if ($atts['last'] == 'yes') {
        return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    } else {
        return '<div class="two_third">' . do_shortcode($content) . '</div>';
    }
}

#-----------------------------------------------------------------#
# Column one_fourth shortcode
#-----------------------------------------------------------------#
add_shortcode('one_fourth', 'gg_shortcode_one_fourth');
function gg_shortcode_one_fourth($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'last' => 'no',
        ), $atts);
    if ($atts['last'] == 'yes') {
        return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    } else {
        return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
    }
}

#-----------------------------------------------------------------#
# Column three_fourth shortcode
#-----------------------------------------------------------------#
add_shortcode('three_fourth', 'gg_shortcode_three_fourth');
function gg_shortcode_three_fourth($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'last' => 'no',
        ), $atts);
    if ($atts['last'] == 'yes') {
        return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
    } else {
        return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
    }
}

#-----------------------------------------------------------------#
# Youtube shortcode
#-----------------------------------------------------------------#
add_shortcode('youtube', 'gg_shortcode_youtube');
function gg_shortcode_youtube($atts)
{
    $atts = shortcode_atts(
        array(
            'id' => '',
            'width' => 600,
            'height' => 360
        ), $atts);
    return '<div style="max-width:' . $atts['width'] . 'px;max-height:' . $atts['height'] . 'px;"><div class="video-shortcode"><iframe title="YouTube video player" width="' . $atts['width'] . '" height="' . $atts['height'] . '" src="http://www.youtube.com/embed/' . $atts['id'] . '"></iframe></div></div>';
}

#-----------------------------------------------------------------#
# Vimeo shortcode
#-----------------------------------------------------------------#
add_shortcode('vimeo', 'gg_shortcode_vimeo');
function gg_shortcode_vimeo($atts)
{
    $atts = shortcode_atts(
        array(
            'id' => '',
            'width' => 600,
            'height' => 360
        ), $atts);
    return '<div style="max-width:' . $atts['width'] . 'px;max-height:' . $atts['height'] . 'px;"><div class="video-shortcode"><iframe src="http://player.vimeo.com/video/' . $atts['id'] . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '"></iframe></div></div>';
}

#-----------------------------------------------------------------#
# SoundCloud shortcode
#-----------------------------------------------------------------#
add_shortcode('soundcloud', 'gg_shortcode_soundcloud');
function gg_shortcode_soundcloud($atts)
{
    $atts = shortcode_atts(
        array(
            'url' => '',
            'width' => '100%',
            'height' => 81,
            'comments' => 'true',
            'auto_play' => 'true',
            'color' => 'ff7700',
        ), $atts);
    return '<iframe width="' . $atts['width'] . '" height="' . $atts['height'] . '" scrolling="no" frameborder="no" src="https:#w.soundcloud.com/player/?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '"></iframe>';
}

#-----------------------------------------------------------------#
# Button shortcode
#-----------------------------------------------------------------#
add_shortcode('button', 'gg_shortcode_button');
function gg_shortcode_button($atts, $content = null)
{
    if (!$atts['color']) {
        $atts['color'] = 'default';
    }
    if (!empty($atts['icon'])) {
        $atts['icon'] = "<i class='".$atts['icon']."'></i>";
    }   else {
        $atts['icon'] = "";
    }
    if ( !empty($atts['link']) && isset($atts['link']) )    { 
    	$atts['link'] =   "href=\"{$atts['link']}\"";     
        }else {
        	$atts['link']="";
        }
        
    if ( !empty($atts['target']) && isset($atts['target']) )  { 
    	$atts['target'] = "target=\"{$atts['target']}\"";   
        }	else {
        	$atts['target']="";
        }

    //return '<a class="btn ' . $atts['size'] . ' ' . $atts['color'] . '" href="' . $atts['link'] . '" target="' . $atts['target'] . '"> '. $atts['icon'] .' '. do_shortcode($content) . '</a>';
    return '<a class="btn '.$atts['size'].' '.$atts['color'].'" ' . $atts['link'] . ' ' . $atts['target'] . '>'. $atts['icon'] . ' '.do_shortcode($content).'</a>';
}

#-----------------------------------------------------------------#
# Dropcap shortcode
#-----------------------------------------------------------------#
add_shortcode('dropcap', 'gg_shortcode_dropcap');
function gg_shortcode_dropcap($atts, $content = null)
{
    return '<span class="dropcap">' . do_shortcode($content) . '</span>';
}

#-----------------------------------------------------------------#
# Highlight shortcode
#-----------------------------------------------------------------#
add_shortcode('highlight', 'gg_shortcode_highlight');
function gg_shortcode_highlight($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'color' => 'white',
        ), $atts);
    if ($atts['color'] == 'black') {
        return '<span class="highlight2">' . do_shortcode($content) . '</span>';
    } else {
        return '<span class="highlight1">' . do_shortcode($content) . '</span>';
    }
}

#-----------------------------------------------------------------#
# Check list shortcode
#-----------------------------------------------------------------#
add_shortcode('checklist', 'gg_shortcode_checklist');
function gg_shortcode_checklist($atts, $content = null)
{
    $content = str_replace('<ul>', '<ul class="arrow">', do_shortcode($content));
    $content = str_replace('<li>', '<li>', do_shortcode($content));
    return $content;
}

#-----------------------------------------------------------------#
# Tabs shortcode
#-----------------------------------------------------------------#
add_shortcode('tabs', 'gg_shortcode_tabs');
function gg_shortcode_tabs($atts, $content = null)
{
    extract(shortcode_atts(array(), $atts));
    $out = '';
    $out .= '<div class="tab-holder shortcode-tabs">';
    $out .= '<div class="tab-hold tabs-wrapper">';
    $out .= '<ul id="tabs" class="tabset tabs nav-tabs">';
    foreach ($atts as $key => $tab) {
        $out .= '<li><a href="#' . $key . '" data-toggle="tab">' . $tab . '</a></li>';
    }
    $out .= '</ul>';
    $out .= '<div class="tab-box tabs-container">';
    $out .= do_shortcode($content) . '</div></div></div>';
    return $out;
}

add_shortcode('tab', 'gg_shortcode_tab');
function gg_shortcode_tab($atts, $content = null)
{
    extract(shortcode_atts(array(), $atts));
    $out = '';
    $out .= '<div id="tab' . $atts['id'] . '" class="tab tab_content">' . do_shortcode($content) . '</div>';
    return $out;
}

#-----------------------------------------------------------------#
# Accordian
#-----------------------------------------------------------------#
add_shortcode('accordian', 'gg_shortcode_accordian');
function gg_shortcode_accordian($atts, $content = null)
{
    $out = '';
    $out .= '<div class="accordian">';
    $out .= do_shortcode($content);
    $out .= '</div>';
    return $out;
}

#-----------------------------------------------------------------#
# Toggle shortcode
#-----------------------------------------------------------------#
add_shortcode('toggle', 'gg_shortcode_toggle');
function gg_shortcode_toggle($atts, $content = null)
{
    extract(shortcode_atts(array(
        'title' => '',
        'open' => 'no'
    ), $atts));
    $toggleclass = '';
    $toggleclass2 = '';
    $togglestyle = '';
    if ($atts['open'] == 'yes') {
        $toggleclass = "active";
        $toggleclass2 = "default-open";
        $togglestyle = "display: block;";
    }
    $out = '';
    $out .= '<h3 class="toggle ' . $toggleclass . '"><a href="#"><span class="arrow"></span>' . $atts['title'] . '</a></h3>';
    $out .= '<div class="toggle-content ' . $toggleclass2 . '" style="' . $togglestyle . '">';
    $out .= do_shortcode($content);
    $out .= '</div>';
    return $out;
}

#-----------------------------------------------------------------#
# Tagline box shortcode
#-----------------------------------------------------------------#
add_shortcode('tagline_box', 'gg_shortcode_tagline_box');
function gg_shortcode_tagline_box($atts, $content = null)
{
    $str = '';
    $str .= '<section class="reading-box">';
    if ($atts['link'] && $atts['button']):

        $str .= '<a href="' . $atts['link'] . '" ' . $atts['linktarget'] . ' class="continue btn btn-large firm">' . $atts['button'] . '</a>';

    endif;
    if ($atts['title']):

        $str .= '<h3>' . $atts['title'] . '</h3>';

    endif;
    if ($atts['description']):

        $str .= '<p>' . $atts['description'] . '</p>';

    endif;
    if ($atts['link'] && $atts['button']):

        $str .= '<a href="' . $atts['link'] . '" ' . $atts['linktarget'] . ' class="continue mobile-button btn btn-large firm">' . $atts['button'] . '</a>';

    endif;
    $str .= '</section>';
    return $str;
}
#-----------------------------------------------------------------#
# Pricing table
#-----------------------------------------------------------------#
add_shortcode('pricing_table', 'gg_shortcode_pricing_table');
function gg_shortcode_pricing_table($atts, $content = null)
{
    $str = '';
    $str .= '<div class="pricing_table_sc row-fluid">';
    $str .= do_shortcode($content);
    $str .= '</div><div class="clear"></div>';
    return $str;
}

#-----------------------------------------------------------------#
# Pricing Column
#-----------------------------------------------------------------#
add_shortcode('pricing_column', 'gg_shortcode_pricing_column');
function gg_shortcode_pricing_column($atts, $content = null)
{
    $str = '<div class="column">';
    $str .= '<ul>';
    if ($atts['title']):

        $str .= '<li class="title-row">' . $atts['title'] . '</li>';

    endif;
    $str .= do_shortcode($content);
    $str .= '</ul>';
    $str .= '</div>';
    return $str;
}

#-----------------------------------------------------------------#
# Pricing Row
#-----------------------------------------------------------------#
add_shortcode('pricing_price', 'gg_shortcode_pricing_price');
function gg_shortcode_pricing_price($atts, $content = null)
{
    $str = '';
    $str .= '<li class="pricing-row">';
    if (isset($atts['currency'])  && isset($atts['price'])) {
        $class = '';
        $price = explode('.', $atts['price']);
        if (!empty($price[1])) {
            $class .= 'price-with-decimal';
        }
        $str .= '<div class="price ' . $class . '">';
        $str .= '<span>' . $atts['currency'] . '</span>';
        $str .= '<span class="exact_price">' . $price[0] . '</span>';
        if (!empty($price[1])) {
            $str .= '<sup>' . $price[1] . '</sup>';
        }
        if ($atts['time']) {
            $str .= '<span class="time">/' . $atts['time'] . '</span>';
        }
        $str .= '</div>';
    } else {
        $str .= do_shortcode($content);
    }
    $str .= '</li>';
    return $str;
}

#-----------------------------------------------------------------#
# Pricing Row
#-----------------------------------------------------------------#
add_shortcode('pricing_row', 'gg_shortcode_pricing_row');
function gg_shortcode_pricing_row($atts, $content = null)
{
    $str = '';
    $str .= '<li class="normal-row">';
    $str .= do_shortcode($content);
    $str .= '</li>';
    return $str;
}

#-----------------------------------------------------------------#
# Pricing Footer
#-----------------------------------------------------------------#
add_shortcode('pricing_footer', 'gg_shortcode_pricing_footer');
function gg_shortcode_pricing_footer($atts, $content = null)
{
    $str = '';
    $str .= '<li class="footer-row">';
    $str .= do_shortcode($content);
    $str .= '</li>';
    return $str;
}

#-----------------------------------------------------------------#
# Content box shortcode
#-----------------------------------------------------------------#
add_shortcode('content_boxes', 'gg_shortcode_content_boxes');
function gg_shortcode_content_boxes($atts, $content = null)
{
    $str = '';
    $str .= '<section class="columns content-boxes">';
    $str .= do_shortcode($content);
    $str .= '</section>';
    return $str;
}

#-----------------------------------------------------------------#
# Content box shortcode
#-----------------------------------------------------------------#
add_shortcode('content_box', 'gg_shortcode_content_box');
function gg_shortcode_content_box($atts, $content = null)
{
    $str = '';
    if (!empty($atts['last']) && $atts['last'] == 'yes'):

        $str .= '<article class="col last">'; else:

        $str .= '<article class="col">';

    endif;
    if ($atts['image'] || $atts['title']):

        if (!empty($atts['image']) || !empty($atts['icon'])) {
            $str .= '<div class="heading heading-and-icon">';
        } else {
            $str .= '<div class="heading">';
        }
        if ($atts['image']):

            $str .= '<img src="' . $atts['image'] . '" width="35" height="35" alt="">';

        endif;
        if (!empty($atts['icon']) && $atts['icon']):

            $str .= '' . do_shortcode('[fontawesome icon="' . $atts['icon'] . '" circle="yes" size="medium"]') . '';

        endif;
        if ($atts['title']):

            $str .= '<h3>' . $atts['title'] . '</h3>';

        endif;
        $str .= '</div>';

    endif;
    $str .= do_shortcode($content);
    if ($atts['link'] && $atts['linktext']):

        $str .= '<span class="more"> <a href="' . $atts['link'] . '" ' . $atts['linktarget'] . '>' . $atts['linktext'] . '</a></span>';

    endif;
    $str .= '</article>';
    return $str;
}

#-----------------------------------------------------------------#
# Testimonials
#-----------------------------------------------------------------#
add_shortcode('testimonials', 'gg_shortcode_testimonials');
function gg_shortcode_testimonials($atts, $content = null)
{
    $str = '';
    $str .= '<div class="lines sub_title text-center c_quot">&quot;</div>';
    $str .= '<div class="reviews cycle-slideshow" data-cycle-slides="> div">';
    $str .= do_shortcode($content);
    $str .= '</div>';
    return $str;
}

#-----------------------------------------------------------------#
# Testimonial
#-----------------------------------------------------------------#
add_shortcode('testimonial', 'gg_shortcode_testimonial');
function gg_shortcode_testimonial($atts, $content = null)
{
    $str = '';
    $str .= '<div class="review">';
    $str .= '<blockquote>';
    $str .= do_shortcode('' . $content . '');
    if ($atts['name']):

        $str .= '<div><span class="company-name">';
        $str .= '<strong>' . $atts['name'] . '</strong>';
        if ($atts['company']):

            if (!empty($atts['link']) && $atts['link']):
                if ( !empty($atts['target']) )  { $atts['target'] = "target=\"{$atts['target']}\"";   }
                $str .= ', <a href="' . $atts['link'] . '" ' . $atts['target'] . '>';

            endif;
            $str .= '<span>' . $atts['company'] . '</span>';
            if (!empty($atts['link']) && $atts['link']):

                $str .= '</a>';

            endif;

        endif;
        $str .= '</span></div>';

    endif;
    $str .= '</blockquote>';
    $str .= '</div>';
    return $str;
}

#-----------------------------------------------------------------#
# Person
#-----------------------------------------------------------------#
add_shortcode('person', 'gg_shortcode_person');
function gg_shortcode_person($atts, $content = null)
{
    $html = '';
    $html .= '<div class="person">';
    if ($atts['picture']):

        $html .= '<img class="person-img" src="' . $atts['picture'] . '" alt="' . $atts['name'] . '" />';

    endif;
    if ($atts['name'] || $atts['title'] || $atts['facebooklink'] || $atts['twitterlink'] || $atts['google'] || $content) {
        $html .= '<div class="person-desc">';
        $html .= '<div class="person-author clearfix">';
        $html .= '<div class="person-author-wrapper"><h5 class="person-name">' . $atts['name'] . '</h5>';
        $html .= '<span class="person-title">' . $atts['title'] . '</span></div>';
        $html .= '<div class="clear"></div></div>';
        $html .= '<div class="person-content">' . $content . '</div>';
        if ( !empty($atts['linktarget']) )    { $atts['linktarget'] =   "target=\"{$atts['linktarget']}\"";     }
        if (!empty($atts['facebook'])) {
            $html .= '<a title="Facebook" href="' . $atts['facebook'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon facebook"></a>';
        }
        if (!empty($atts['twitter'])) {
            $html .= '<a title="Twitter" href="' . $atts['twitter'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon twitter"></a>';
        }
        if (!empty($atts['google'])) {
            $html .= '<a title="Google+" href="' . $atts['google'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon googleplus"></a>';
        }
        if (!empty($atts['dribbble'])) {
            $html .= '<a title="Dribbble" href="' . $atts['dribbble'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon dribbble"></a>';
        }
        if (!empty($atts['linkedin'])) {
            $html .= '<a title="LinkedIn" href="' . $atts['linkedin'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon linkedin"></a>';
        }
        if (!empty($atts['blogger'])) {
            $html .= '<a title="Blogger" href="' . $atts['blogger'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon blogger"></a>';
        }
        if (!empty($atts['tumblr'])) {
            $html .= '<a title="Tumblr" href="' . $atts['tumblr'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon tumblr"></a>';
        }
        if (!empty($atts['flickr'])) {
            $html .= '<a title="Flickr" href="' . $atts['flickr'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon flickr"></a>';
        }
        if (!empty($atts['digg'])) {
            $html .= '<a title="Digg" href="' . $atts['digg'] . '" ' . $atts['linktarget'] . ' class="fsoc zocial icon social-icon digg"></a>';
        }
        $html .= '</div>';
    }
    $html .= '</div>';
    return $html;
}

#-----------------------------------------------------------------#
# Progess Bar
#-----------------------------------------------------------------#
add_shortcode('progress', 'gg_shortcode_progress');
function gg_shortcode_progress($atts, $content = null)
{
    $html = '';
    $html .= '<div class="progress-bar">';
    $html .= '<div class="progress-bar-content" data-percentage="' . $atts['percentage'] . '" style="width: ' . $atts['percentage'] . '%">';
    $html .= '</div>';
    $html .= '<span class="progress-title">' . $content . ' ' . $atts['percentage'] . '%</span>';
    $html .= '</div>';
    return $html;
}

#-----------------------------------------------------------------#
# Alert Message
#-----------------------------------------------------------------#
add_shortcode('alert', 'gg_shortcode_alert');
function gg_shortcode_alert($atts, $content = null)
{
    $html = '';
    $html .= '<div class="alert ' . $atts['type'] . '">';
    $html .= '<div class="msg">' . do_shortcode($content) . '</div>';
    $html .= '<a href="#" class="toggle-alert"></a>';
    $html .= '</div>';
    return $html;
}

#-----------------------------------------------------------------#
# FontAwesome Icons
#-----------------------------------------------------------------#
add_shortcode('fontawesome', 'gg_shortcode_fontawesome');
function gg_shortcode_fontawesome($atts, $content = null)
{
    $html = '';
    $html .= '<i class="fontawesome-icon ' . $atts['size'] . ' circle-' . $atts['circle'] . ' icon-' . $atts['icon'] . '"></i>';
    return $html;
}

#-----------------------------------------------------------------#
# Social Links
#-----------------------------------------------------------------#
add_shortcode('social_links', 'gg_shortcode_social_links');
function gg_shortcode_social_links($atts, $content = null)
{
    $html = '<div class="social_links_shortcode clearfix">';
    $html .= '<ul class="social-networks clearfix">';
    if ( !empty($atts['linktarget']) )    { $atts['linktarget'] =   "target=\"{$atts['linktarget']}\"";     }
    foreach ($atts as $key => $link) {
        if ($link && $key != 'linktarget') {
            $html .= '<li class="' . $key . '">

            <a title="' . ucwords($key) . '" class="zocial icon soc_font ' . $key . '" href="' . $link . '" ' . $atts['linktarget'] . '></a>

            </li>';
        }
    }
    $html .= '</ul>';
    $html .= '</div>';
    return $html;
}

#-----------------------------------------------------------------#
# Title
#-----------------------------------------------------------------#
add_shortcode('title', 'gg_shortcode_title');
function gg_shortcode_title($atts, $content = null)
{
    $html = '';
    $html .= '<span class="title h'.$atts['size'].'">' . do_shortcode($content) . '</span>';
    return $html;
}

#-----------------------------------------------------------------#
# Separator
#-----------------------------------------------------------------#
add_shortcode('separator', 'gg_shortcode_separator');
function gg_shortcode_separator($atts, $content = null)
{
    $html = '';
    $html .= '<div class="demo-sep" style="margin-top: ' . $atts['top'] . 'px;"></div>';
    return $html;
}

#-----------------------------------------------------------------#
# Add buttons to tinyMCE
#-----------------------------------------------------------------#
add_action('init', 'gg_add_button');
add_action('init', 'gg_add_button_2');
function gg_add_button()
{
    if (current_user_can('edit_posts') && current_user_can('edit_pages')) {
        add_filter('mce_external_plugins', 'gg_add_plugin');
        add_filter('mce_buttons_3', 'gg_register_button');
    }
}

function gg_add_button_2()
{
    if (current_user_can('edit_posts') && current_user_can('edit_pages')) {
        add_filter('mce_external_plugins', 'gg_add_plugin_2');
        add_filter('mce_buttons_4', 'gg_register_button_2');
    }
}

function gg_register_button($buttons)
{
    array_push($buttons, "one_half", "one_third", "two_third", "one_fourth", "three_fourth", "button", "dropcap", "highlight", "checklist", "tabs", "toggle", "testimonial", "person");
    return $buttons;
}

function gg_register_button_2($buttons)
{
    array_push($buttons, "youtube", "vimeo", "soundcloud", "social_links", "title", "separatoor", "progress", "alert", "pricing_table", "tagline_box", "content_boxes", "fontawesome");
    return $buttons;
}

function gg_add_plugin($plugin_array)
{
    $plugin_array['one_half'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['one_third'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['two_third'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['one_fourth'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['three_fourth'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['button'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['dropcap'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['highlight'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['checklist'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['tabs'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['toggle'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['testimonial'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['person'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    return $plugin_array;
}

function gg_add_plugin_2($plugin_array)
{
    $plugin_array['youtube'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['vimeo'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['soundcloud'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['progress'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['alert'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['pricing_table'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['tagline_box'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['content_boxes'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['fontawesome'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['social_links'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['title'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    $plugin_array['separatoor'] = get_template_directory_uri() . '/includes/tinymce/customcodes.js';
    return $plugin_array;
}

function gg_shortcode_empty_paragraph_fix($content)
{
    $array = array(
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );
    $content = strtr($content, $array);
    return $content;
}

add_filter('the_content', 'gg_shortcode_empty_paragraph_fix');

