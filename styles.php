<?php global $smof_data; ?>

<style>



#woo .woo_mid
{
    background: <?php echo $smof_data['woo_colors_bg'];?> !important;
    color: <?php echo $smof_data['woo_colors_text'];?> !important;
}

.single-product .id_woo .bot-border-left {
    border-color: <?php echo $smof_data['woo_pages_background'];?> transparent transparent transparent;
}
.single-product .id_woo .bot-border-right{
    border-color: transparent <?php echo $smof_data['woo_pages_background'];?> transparent transparent;
}

.single-product .id_woo{

	background:<?php echo $smof_data['woo_pages_background'];?>;
}

.woo_main h1,
.woo_main h2,
.woo_main h3,
.woo_main h4,
.woo_main h5,
.woo_main h6,
.woo_main .sub_title {
    color: <?php echo $smof_data['woo_colors_text'];?> !important;
}
.woo_main .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['woo_colors_bg'];?>;
}
.woo_main .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['woo_colors_bg'];?> transparent;
}
.woo_main .bot-border-left {
    border-color: <?php echo $smof_data['woo_colors_bg'];?> transparent transparent transparent;
}
.woo_main .bot-border-right{
    border-color: transparent <?php echo $smof_data['woo_colors_bg'];?> transparent transparent;
}
#woo a {
    color: <?php echo $smof_data['woo_colors_link']; ?>;
}
#woo a:hover {
    color: <?php echo $smof_data['woo_colors_link_h']; ?>;
}






.woo_intro .rubik {
    background: <?php echo $smof_data['woo_colors_intro_bg']; ?>;
    opacity:.<?php echo $smof_data['woo_colors_intro_opacity'];?>;
    color: <?php echo $smof_data['woo_colors_intro_text']; ?>;
}
.woo_intro .rubik-top-border{
    border-color: <?php echo $smof_data['woo_colors_intro_bg']; ?> transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['woo_colors_intro_opacity']);?>) transparent;
}
.woo_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['woo_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['woo_colors_intro_opacity']);?>) transparent transparent;
}

#logo img {
    margin: <?php echo $smof_data['logo_pad_t'];?>px 0 0 <?php echo $smof_data['logo_pad_l'];?>px;
}
header#site-header {
    background: <?php echo $smof_data['bg_header'];?>;
}
.header-border-bot {
    border-color: <?php echo $smof_data['bg_header'];?> transparent transparent transparent;
}
#home {
    <?php if($smof_data['header-border-bot']==1) echo "margin-top: 100px"; else echo "margin-top: 0px";?>;
}

    /* TYPOGRAPHY */
<?php if (!empty($smof_data['google_font'])) {if($smof_data['google_font'] == 1) { ?>
body {
    font-family: <?php if (!empty($smof_data['google_body_font'])) { echo $smof_data['google_body_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_body_font_w'])) { echo $smof_data['google_body_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_body_font_s'])) { echo strtolower($smof_data['google_body_font_s']);} ?>;
}
.sf-menu a {
    font-family: <?php if (!empty($smof_data['google_menu_font'])) { echo $smof_data['google_menu_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_menu_font_w'])) { echo $smof_data['google_menu_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_menu_font_s'])) { echo strtolower($smof_data['google_menu_font_s']);} ?>;
}
h1,.h1 {
    font-family: <?php if (!empty($smof_data['google_h1_font'])) { echo $smof_data['google_h1_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h1_font_w'])) { echo $smof_data['google_h1_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h1_font_s'])) { echo strtolower($smof_data['google_h1_font_s']);} ?>;
    line-height: 72px;
    margin: 0 0 15px;
}
h2,.h2 {
    font-family: <?php if (!empty($smof_data['google_h2_font'])) { echo $smof_data['google_h2_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h2_font_w'])) { echo $smof_data['google_h2_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h2_font_s'])) { echo strtolower($smof_data['google_h2_font_s']);} ?>;
    line-height: 52px;
    margin: 0 0 15px;
}
h3,.h3 {
    font-family: <?php if (!empty($smof_data['google_h3_font'])) { echo $smof_data['google_h3_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h3_font_w'])) { echo $smof_data['google_h3_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h3_font_s'])) { echo strtolower($smof_data['google_h3_font_s']);} ?>;
    margin: 0 0 12px;
}
h4,.h4 {
    font-family: <?php if (!empty($smof_data['google_h4_font'])) { echo $smof_data['google_h4_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h4_font_w'])) { echo $smof_data['google_h4_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h4_font_s'])) { echo strtolower($smof_data['google_h4_font_s']);} ?>;
    margin: 0 0 10px;
    line-height: 34px;
}
h5,.h5 {
    font-family: <?php if (!empty($smof_data['google_h5_font'])) { echo $smof_data['google_h5_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h5_font_w'])) { echo $smof_data['google_h5_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h5_font_s'])) { echo strtolower($smof_data['google_h5_font_s']);} ?>;
    margin: 0 0 0.5em 0;
}
h6,.h6 {
    font-family: <?php if (!empty($smof_data['google_h6_font'])) { echo $smof_data['google_h6_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h6_font_w'])) { echo $smof_data['google_h6_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h6_font_s'])) { echo strtolower($smof_data['google_h6_font_s']);} ?>;
    font-size: 14px;
    margin: 10px 0;
}
<?php } } else {?>
body {
    font-family: <?php echo $smof_data['std_body_font']['face'];?>;
<?php if ($smof_data['std_body_font']['style'] == 'bold' || $smof_data['std_body_font']['style'] == 'normal') {
        echo 'font-weight: '. $smof_data['std_body_font']['style'] . ';';
    }
    if($smof_data['std_body_font']['style'] == 'italic'){
        echo 'font-style: '. $smof_data['std_body_font']['style'] . ';';
}?>
}
.sf-menu a {
    font-family: <?php echo $smof_data['std_menu_font']['face'];?>;
<?php if ($smof_data['std_menu_font']['style'] == 'bold' || $smof_data['std_menu_font']['style'] == 'normal') {
        echo 'font-weight: '. $smof_data['std_menu_font']['style'] . ';';
    }
    if($smof_data['std_menu_font']['style'] == 'italic'){
        echo 'font-style: '. $smof_data['std_menu_font']['style'] . ';';
}?>
}
h1, h2, h3, h4, h5, h6,.h1,.h2,.h3,.h4,.h5,.h6 {
    font-family: <?php echo $smof_data['std_h1_font']['face'];?>;
<?php if ($smof_data['std_h1_font']['style'] == 'bold' || $smof_data['std_h1_font']['style'] == 'normal') {
        echo 'font-weight: '. $smof_data['std_h1_font']['style'] . ';';
    }
    if($smof_data['std_h1_font']['style'] == 'italic'){
        echo 'font-style: '. $smof_data['std_h1_font']['style'] . ';';
}?>
}
<?php } ?>



body {
    font-size: <?php if (!empty($smof_data['font_size_body'])) { echo $smof_data['font_size_body'];} ?>px;
    color: <?php if (!empty($smof_data['font_color_body'])) { echo $smof_data['font_color_body'];} ?> !important;
    background: <?php if (!empty($smof_data['bg_body'])) { echo $smof_data['bg_body'];} ?>;
}


.pp_content_container .comment-form-comment,
.pp_content_container .comment-form-rating {
    color: <?php if (!empty($smof_data['font_color_body'])) { echo $smof_data['font_color_body'];} ?>;
}
.id_page {
	
    color: <?php if (!empty($smof_data['woo_text'])) { echo $smof_data['woo_text'];} ?>;
}

.id_page2 {
	
    color: <?php if (!empty($smof_data['font_color_body'])) { echo $smof_data['font_color_body'];} ?>;
}
.id_page2 a,
.id_page h3 {
   color: <?php if (!empty($smof_data['font_color_a'])) { echo $smof_data['font_color_a'];} ?>;
}
.id_page2 a:hover,
.id_page h3  {
   color: <?php if (!empty($smof_data['font_color_a_h'])) { echo $smof_data['font_color_a_h'];} ?> !important;
}
.id_page2 h1, h2, h4, h5 {
	color: <?php if (!empty($smof_data['font_color_headlines'])) { echo $smof_data['font_color_headlines'];} ?>;
}
.id_page2 .bot-border-left {
    border-color: <?php echo $smof_data['bg_body'];?> transparent transparent transparent;
}
.id_page2 .bot-border-right{
    border-color: transparent <?php echo $smof_data['bg_body'];?> transparent transparent;
}


.id_page2 .bot-border-left {
    border-color: <?php echo $smof_data['bg_body'];?> transparent transparent transparent;
}
.id_page2 .bot-border-right{
    border-color: transparent <?php echo $smof_data['bg_body'];?> transparent transparent;
}

.page-title,
.id_page h1,
.id_page h2,
.id_page h3,
.id_page h4 {
    color: <?php if (!empty($smof_data['woo_title_color'])) { echo $smof_data['woo_title_color'];} ?>;
}




.id_page a,
.id_page h3{
	color: <?php if (!empty($smof_data['font_color_a'])) { echo $smof_data['font_color_a'];} ?> !important;
}

.id_page a:hover,
.product_list_widget a:hover {
   color: <?php if (!empty($smof_data['woo_links_color_h'])) { echo $smof_data['woo_links_color_h'];} ?>;
}

.id_woo a,
.id_woo h3 {
	color: <?php if (!empty($smof_data['woo_links_color'])) { echo $smof_data['woo_links_color'];} ?>;
}

.id_woo h1,
.id_woo h2,
.id_woo h4 {
	color: <?php if (!empty($smof_data['woo_title_color'])) { echo $smof_data['woo_title_color'];} ?>;
}


.id_woo  {
    background: <?php if (!empty($smof_data['woo_pages_background'])) { echo $smof_data['woo_pages_background'];} ?>;
}
.id_woo .bot-border-left {
    border-color: <?php echo $smof_data['woo_pages_background'];?> transparent transparent transparent;
}
.id_woo .bot-border-right{
    border-color: transparent <?php echo $smof_data['woo_pages_background'];?> transparent transparent;
}

.product_list_widget a {
	   color: #3d7f78;
}




.woocommerce ul.products li.product .price, 
.woocommerce-page ul.products li.product .price,
li.product .price,
.product_list_widget span{
   color: <?php if (!empty($smof_data['woo_price'])) { echo $smof_data['woo_price'];} ?>;
    font-size: 30px;
    font-weight: 900;
    line-height: 60px;
}

.woocommerce div.product p.price{
   color: <?php if (!empty($smof_data['woo_price'])) { echo $smof_data['woo_price'];} ?>;
}


.id_page .bot-border-left {
    border-color: <?php echo $smof_data['bg_body'];?> transparent transparent transparent;
}
.id_page .bot-border-right{
    border-color: transparent <?php echo $smof_data['bg_body'];?> transparent transparent;
}

.sf-menu a {
    font-size: <?php if (!empty($smof_data['font_size_menu'])) { echo $smof_data['font_size_menu'];} ?>px;
}
h1,.h1 {
    font-size: <?php if (!empty($smof_data['font_size_h1'])) { echo $smof_data['font_size_h1'];} ?>px;
    line-height: <?php if (!empty($smof_data['font_size_h1'])) { echo $smof_data['font_size_h1'];} ?>px;
}
h2,.h2 {
    font-size: <?php if (!empty($smof_data['font_size_h2'])) { echo $smof_data['font_size_h2'];} ?>px;
    line-height: <?php if (!empty($smof_data['font_size_h2'])) { echo $smof_data['font_size_h2'];} ?>px;
}
h3,.h3 {
    font-size: <?php if (!empty($smof_data['font_size_h3'])) { echo $smof_data['font_size_h3'];} ?>px;
}
h4,.h4 {
    font-size: <?php if (!empty($smof_data['font_size_h4'])) { echo $smof_data['font_size_h4'];} ?>px;
    line-height: <?php if (!empty($smof_data['font_size_h4'])) { echo $smof_data['font_size_h4']+3;} ?>px;
}
h5,.h5 {
    font-size: <?php if (!empty($smof_data['font_size_h5'])) { echo $smof_data['font_size_h5'];} ?>px;
}
h6,.h6 {
    font-size: <?php if (!empty($smof_data['font_size_h6'])) { echo $smof_data['font_size_h6'];} ?>px;
}

#parallax-nav ul{
	 background: <?php if (!empty($smof_data['para_back'])) { echo $smof_data['para_back'];} ?>;
}

#parallax-nav ul li.current a{
	 background: <?php if (!empty($smof_data['para_active'])) { echo $smof_data['para_active'];} ?>;
}

#parallax-nav ul li:hover{
	 background: <?php if (!empty($smof_data['para_li_h'])) { echo $smof_data['para_li_h'];} ?>;
}

#parallax-nav ul li a{
	 color: <?php if (!empty($smof_data['para_link'])) { echo $smof_data['para_link'];} ?>;
}
#parallax-nav li:hover a{
	 color: <?php if (!empty($smof_data['para_link_h'])) { echo $smof_data['para_link_h'];} ?>;
}
#parallax-nav .trig{
	 color: <?php if (!empty($smof_data['para_icon'])) { echo $smof_data['para_icon'];} ?>;
	 border-color: transparent <?php if (!empty($smof_data['para_back'])) { echo $smof_data['para_back'];} ?> transparent;
}




<?php if($smof_data['text_uppercase'] == 1) { ?>
.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button,
h1, h2, h3, h4, h5, h6, .sf-menu a, #sidebar .widget ul li a,.h1,.h2,.h3,.h4,.h5,.h6 {
    text-transform: uppercase;
}
<?php } ?>
a {
    color: <?php if (!empty($smof_data['font_color_a'])) { echo $smof_data['font_color_a'];} ?>;
}
a:hover {
    color: <?php if (!empty($smof_data['font_color_a_h'])) { echo $smof_data['font_color_a_h'];} ?>;
}
.tooltip-inner {
    max-width: 200px;
    padding: 8px;
    color: #ffffff;
    text-align: center;
    text-decoration: none;
    background-color: <?php if (!empty($smof_data['font_color_tooltip'])) { echo $smof_data['font_color_tooltip'];} ?>;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    z-index: 99;
}
.tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    z-index: 99;
}
.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: <?php if (!empty($smof_data['font_color_tooltip'])) { echo $smof_data['font_color_tooltip'];} ?>;
        z-index: 99;
}
/* INDEX COLORS AND OTHER*/

<?php $rgba = gg_HEXvRGB($smof_data['serv_colors_intro_bg']);?>
.serv_intro .rubik {
	color: <?php if (!empty($smof_data['serv_colors_intro_text'])) { echo $smof_data['serv_colors_intro_text'];} ?>;
    background: <?php echo $smof_data['serv_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['serv_colors_intro_opacity']/100);?>);
    
}


.serv_corusel i{
	color: <?php echo $smof_data['serv_icons_bg'];?> !important;
}

.serv_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['serv_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['serv_colors_intro_opacity']/100);?>);
}
.serv_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['serv_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['serv_colors_intro_opacity']/100);?>) transparent transparent;
}
.service_box .section-mid{
    background: <?php echo $smof_data['serv_colors_bg'];?>;
    color: <?php echo $smof_data['serv_colors_text'];?>;
}
.service_box h1,
.service_box h2,
.service_box h3,
.service_box h4,
.service_box h5,
.service_box h6,
.service_box .sub_title {
    color: <?php echo $smof_data['serv_colors_text'];?>;
}
.service_box .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['serv_colors_bg'];?>;
}
.service_box .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['serv_colors_bg'];?> transparent;
}
.service_box .bot-border-left {
    border-color: <?php echo $smof_data['serv_colors_bg'];?> transparent transparent transparent;
}
.service_box .bot-border-right{
    border-color: transparent <?php echo $smof_data['serv_colors_bg'];?> transparent transparent;
}

.widget_recent_comments .recentcomments a {
	 color: <?php echo $smof_data['font_color_a']; ?>;
}
.widget_recent_comments .recentcomments a:hover {
	 color: <?php echo $smof_data['font_color_a_h']; ?>;
}

<?php $rgba = gg_HEXvRGB($smof_data['port_colors_intro_bg']);?>
.portfolio_intro .rubik {
    background: <?php echo $smof_data['port_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['port_colors_intro_opacity']/100);?>);
}

#portfolio .intro_pad div{
 color: <?php echo $smof_data['port_colors_intro_text']; ?>;
}

.portfolio_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['port_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['port_colors_intro_opacity']/100);?>);
}
.portfolio_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['port_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['port_colors_intro_opacity']/100);?>) transparent transparent;
}
.portfolio_main .section-mid{
    background: <?php echo $smof_data['port_colors_bg'];?>;
    color: <?php echo $smof_data['port_colors_text'];?>;
}
.portfolio_main h1,
.portfolio_main h2,
.portfolio_main h3,
.portfolio_main h4,
.portfolio_main h5,
.portfolio_main h6,
.portfolio_main .sub_title {
    
}
.portfolio_main .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['port_colors_bg'];?>;
}
.portfolio_main .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['port_colors_bg'];?> transparent;
}
.portfolio_main .bot-border-left {
    border-color: <?php echo $smof_data['port_colors_bg'];?> transparent transparent transparent;
}
.portfolio_main .bot-border-right{
    border-color: transparent <?php echo $smof_data['port_colors_bg'];?> transparent transparent;
}
#portfolio a {
    color: <?php echo $smof_data['port_colors_link']; ?>;
}
#portfolio a:hover {
    color: <?php echo $smof_data['port_colors_link_h']; ?>;
}

#filters a:hover {
    color: <?php echo $smof_data['port_cat_link_h']; ?>;
}

<?php $rgba = gg_HEXvRGB($smof_data['price_colors_intro_bg']);?>
.pricing_table_intro .rubik {
    background: <?php echo $smof_data['price_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['price_colors_intro_opacity']/100);?>);
    color: <?php echo $smof_data['price_colors_intro_text']; ?>;
}
.pricing_table_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['price_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['price_colors_intro_opacity']/100);?>);
}
.pricing_table_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['price_colors_intro_bg']; ?>  transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['price_colors_intro_opacity']/100);?>) transparent transparent;
}

#pricing_table .intro_pad div{
 color: <?php echo $smof_data['price_colors_intro_text']; ?>;
}

.pricing_table_main .section-mid{
    background: <?php echo $smof_data['price_colors_bg'];?>;
    color: <?php echo $smof_data['price_colors_text'];?>;
}
.pricing_table_main h1,
.pricing_table_main h2,
.pricing_table_main h3,
.pricing_table_main h4,
.pricing_table_main h5,
.pricing_table_main h6,
.pricing_table_main .sub_title {
    color: <?php echo $smof_data['price_title_color'];?>;
}
.pricing_table_main .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['price_colors_bg'];?>;
}
.pricing_table_main .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['price_colors_bg'];?> transparent;
}
.pricing_table_main .bot-border-left {
    border-color: <?php echo $smof_data['price_colors_bg'];?> transparent transparent transparent;
}
.pricing_table_main .bot-border-right{
    border-color: transparent <?php echo $smof_data['price_colors_bg'];?> transparent transparent;
}
#pricing_table a {
    color: <?php echo $smof_data['price_colors_link']; ?>;
	font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
}
#pricing_table a:hover {
    color: <?php echo $smof_data['price_colors_link_h']; ?>;
	font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
}

#pricing_table a.btn {
	background:<?php echo $smof_data['price_button']; ?>;		
}

#pricing_table a.btn:hover {
	background:<?php echo $smof_data['price_button_h']; ?>;		
}
#pricing-table .title-row{
	color: <?php echo $smof_data['price_table_title_text']; ?>;
	background: <?php echo $smof_data['price_row']; ?>;
	
}
.pricing-row{
	color: <?php echo $smof_data['price_color']; ?>;
	background: <?php echo $smof_data['price_row']; ?>;
	
}
.pricing_table_sc ul{
	color: <?php echo $smof_data['price_table_text']; ?>;
	background: <?php echo $smof_data['price_table_bg']; ?>;
		-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;

}

.from a{
		color: <?php echo $smof_data['customers_link_color']; ?> !important;
}
.from a:hover{
		color: <?php echo $smof_data['customers_link_color_h']; ?> !important;
}
.testimonial-name {
		color: <?php echo $smof_data['customers_title_color']; ?> !important;
}
<?php $rgba = gg_HEXvRGB($smof_data['about_colors_intro_bg']);?>
.about_us_intro .rubik {
    background: rgba(<?php echo $smof_data['about_colors_intro_bg'];?>);
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['about_colors_intro_opacity']/100);?>);
    color: <?php echo $smof_data['about_colors_intro_text']; ?>;
}
#about_us .intro_pad div{
	color: <?php echo $smof_data['about_colors_intro_text']; ?>;
}
.about_us_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['about_colors_intro_bg'];?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['about_colors_intro_opacity']/100);?>);
}
.about_us_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['about_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['about_colors_intro_opacity']/100);?>) transparent transparent;
}
.about_us_main .section-mid{
    background: <?php echo $smof_data['about_colors_bg'];?>;
    color: <?php echo $smof_data['about_colors_text'];?>;
}
.about_us_main h1,
.about_us_main h2,
.about_us_main h3,
.about_us_main h4,
.about_us_main h5,
.about_us_main h6,
.about_us_main .sub_title {
    color: <?php echo $smof_data['about_title_color'];?>;
}
.about_us_main .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['about_colors_bg']?>;
}
.about_us_main .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['about_colors_bg']?> transparent;
}

.about_us_main .box-bord-left{
    border-color: transparent transparent transparent <?php echo $smof_data['about_colors_bg']?>;
}
.about_us_main .box-bord-right{
    border-color: transparent transparent <?php echo $smof_data['about_colors_bg']?> transparent;
}

.about_us_main .bot-border-left {
    border-color: <?php echo $smof_data['about_colors_bg'];?> transparent transparent transparent;
}
.about_us_main .bot-border-right{
    border-color: transparent <?php echo $smof_data['about_colors_bg'];?> transparent transparent;
}

<?php $rgba = gg_HEXvRGB($smof_data['contact_colors_intro_bg']);?>
.contact_us_intro .rubik {
    background-color: <?php echo $smof_data['contact_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['contact_colors_intro_opacity']/100);?>);
    color: <?php echo $smof_data['contact_colors_intro_text']; ?>;
}

#contact_us .intro_pad div{
	color: <?php echo $smof_data['contact_colors_intro_text']; ?>;
}
.contact_us_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['contact_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['contact_colors_intro_opacity']/100);?>);
}
.contact_us_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['contact_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['contact_colors_intro_opacity']/100);?>) transparent transparent;
}
.contact_us_main .section-mid{
    background: <?php echo $smof_data['contact_colors_bg'];?>;
    color: <?php echo $smof_data['contact_colors_text'];?>;
}
.contact_us_main h1,
.contact_us_main h2,
.contact_us_main h3,
.contact_us_main h4,
.contact_us_main h5,
.contact_us_main h6,
.contact_us_main .sub_title {
    color: <?php echo $smof_data['contact_colors_text'];?>;
}
.contact_us_main .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['contact_colors_bg'];?>;
}
.contact_us_main .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['contact_colors_bg'];?> transparent;
}
.contact_us_main .bot-border-left {
    border-color: <?php echo $smof_data['contact_colors_bg'];?> transparent transparent transparent;
}
.contact_us_main .bot-border-right{
    border-color: transparent <?php echo $smof_data['contact_colors_bg'];?> transparent transparent;
}
#contact_us a {
    color: <?php echo $smof_data['contact_colors_link']; ?>;
}
#contact_us a:hover {
    color: <?php echo $smof_data['contact_colors_link_h']; ?>;
}

.more_info_box i{
	color:<?php echo $smof_data['contact_icon'];?>;
}


.widget_main {
    background: <?php echo $smof_data['widget_colors_bg'];?>;
    color: <?php echo $smof_data['widget_colors_text'];?>;
}
.widget_main h1,
.widget_main h2,
.widget_main h3,
.widget_main h4,
.widget_main h5,
.widget_main h6,
.widget_main .sub_title {
    color: <?php echo $smof_data['widget_colors_text'];?>;
}
.widget_main .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['widget_colors_bg'];?>;
}
.widget_main .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['widget_colors_bg'];?> transparent;
}
.widget_main .bot-border-left {
    border-color: <?php echo $smof_data['widget_colors_bg'];?> transparent transparent transparent;
}
.widget_main .bot-border-right{
    border-color: transparent <?php echo $smof_data['widget_colors_bg'];?> transparent transparent;
}
footer a {
    color: <?php echo $smof_data['widget_colors_link']; ?>;
}
footer a:hover {
    color: <?php echo $smof_data['widget_colors_link_h']; ?>;
}
.widget_mid .widget {
    background: <?php echo $smof_data['widget_colors_boxbg'] ?>;
    color: <?php echo $smof_data['widget_colors_boxtext'] ?>;
}


footer {
    background-color: <?php echo $smof_data['footer_color']; ?>;
    color: <?php echo $smof_data['footer_text_color']; ?>;
}
.footer-top-bord {
    border-color: transparent transparent <?php echo $smof_data['footer_color']; ?>;
}
.blog-color {
    background: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?>;
    color: <?php if (!empty($smof_data['blog_text_color'])) { echo $smof_data['blog_text_color'];} ?>;
}

.blog-color li{
    color: <?php if (!empty($smof_data['blog_text_color'])) { echo $smof_data['blog_text_color'];} ?>;
}

.blog-color .bbtn{
    background: <?php if (!empty($smof_data['blog_btn_bg'])) { echo $smof_data['blog_btn_bg'];} ?>;
    color: <?php if (!empty($smof_data['blog_btn'])) { echo $smof_data['blog_btn'];} ?> !important;
}

.blog-color .bbtn:hover{
    background: <?php if (!empty($smof_data['blog_btn_bg_h'])) { echo $smof_data['blog_btn_bg_h'];} ?>;
    color: <?php if (!empty($smof_data['blog_btn_h'])) { echo $smof_data['blog_btn_h'];} ?> !important;
}
.blog-color h1,
.blog-color h2,
.blog-color h3,
.blog-color h4,
.blog-color h5,
.blog-color h6,
.blog-color .sub_title{
    color: <?php if (!empty($smof_data['blog_title_color'])) { echo $smof_data['blog_title_color'];} ?>;
}

.blog-color a{
    color: <?php if (!empty($smof_data['blog_link_color'])) { echo $smof_data['blog_link_color'];} ?>;
}
.blog-color a:hover{
    color: <?php if (!empty($smof_data['blog_link_color_h'])) { echo $smof_data['blog_link_color_h'];} ?>;
}
.blog-color .bot-border-left {
    border-color: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?> transparent transparent transparent;
}
.blog-color .bot-border-right{
    border-color: transparent <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?> transparent transparent;
}

.blog-color .full-box, .blog-color .widget, .blog-color .right-box, .blog-color .widget a{
    background: <?php if (!empty($smof_data['blog_block_bg'])) { echo $smof_data['blog_block_bg'];} ?> !important;
}
.blog-color .widgettitle{
    color: <?php if (!empty($smof_data['blog_sidebar_title'])) { echo $smof_data['blog_sidebar_title'];} ?> !important;
}
.blog-color .widget_categories{
    background: <?php if (!empty($smof_data['blog_cat_color'])) { echo $smof_data['blog_cat_color'];} ?> !important;
}

.blog-color .widget_categories li a{
    color: <?php if (!empty($smof_data['blog_cat_link_color'])) { echo $smof_data['blog_cat_link_color'];} ?> !important;
    background: <?php if (!empty($smof_data['blog_cat_li_link_color'])) { echo $smof_data['blog_cat_li_link_color'];} ?> !important;
}
.blog-color .widget_categories li:hover a{
    color: <?php if (!empty($smof_data['blog_cat_link_color_h'])) { echo $smof_data['blog_cat_link_color_h'];} ?> !important;
    background: <?php if (!empty($smof_data['blog_cat_li_link_color_h'])) { echo $smof_data['blog_cat_li_link_color_h'];} ?> !important;
}
/* FIRM COLOR */
.c_quot,
h3.toggle span.arrow:before,
h3.toggle a,
.mycarousel li i,
.sf-menu li li:hover > a,
.sf-menu li li.sfHover > a,
.star-rating span,
.thumbLink i,
.btn.white
{
    rgba (0,0,0,0.5);
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
}
a.zocial,
.icon-chevron-down

{
    color: <?php if (!empty($smof_data['about_colors_icons'])) { echo $smof_data['about_colors_icons'];} ?>;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
    margin: 12px 13px 0 20px;
}

a.zocial:hover,
.icon-chevron-down:hover
 {
	color: <?php if (!empty($smof_data['about_colors_icons_h'])) { echo $smof_data['about_colors_icons_h'];} ?>;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
}

.rift .caption  {
	background: <?php if (!empty($smof_data['about_colors_icons_bg'])) { echo $smof_data['about_colors_icons_bg'];} ?>;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
}



.mycarousel li:hover a
{
	 color: <?php if (!empty($smof_data['serv_icons_bg_hover'])) { echo $smof_data['serv_icons_bg_hover'];} ?>;
}

#sidebar .widget_categories,
#sidebar .widget_categories ul li a,
#sidebar .widget_categories ul ul li a,
input[type="submit"], button {
	background: #3d7f78;
}



.sf-menu ul li a,
.sf-menu ul ul li a,
.sf-menu li:hover > a,
.sf-menu li.sfHover > a,
h3.toggle:hover,
.progress-bar-content,
.nav-tabs li a,
.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
.serv_corusel li:hover,
.btn.white:hover
{ 
    background: rgba(0,0,0,0.5);
    transition: all .5s;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
    color: rgba(255,255,255,0.5);
    
}

.btn
{
	    background: rgba(0,0,0,0.5);
}

.thumbImage .thumbTextWrap{
	background: <?php if (!empty($smof_data['port_item_color_h'])) { echo $smof_data['port_item_color_h'];} ?>;
}

#filters li a.selected{
	background: <?php if (!empty($smof_data['port_active_bg'])) { echo $smof_data['port_active_bg'];} ?>;	
}

#filters li a:hover {
    background: <?php if (!empty($smof_data['port_active_bg_h'])) { echo $smof_data['port_active_bg_h'];} ?>;
}

#filters li a
{
    color: <?php if (!empty($smof_data['port_cat_link'])) { echo $smof_data['port_cat_link'];} ?>;
}


#portfolio .thumbText .sectionTitle{
	 background: <?php if (!empty($smof_data['port_div_bg'])) { echo $smof_data['port_div_bg'];} ?>;
	 color: <?php if (!empty($smof_data['port_div_text'])) { echo $smof_data['port_div_text'];} ?>;
}

#portfolio .thumbText .sectionTitle:hover{
	 background: <?php if (!empty($smof_data['port_div_bg_h'])) { echo $smof_data['port_div_bg_h'];} ?>;
	 color: <?php if (!empty($smof_data['port_div_text_h'])) { echo $smof_data['port_div_text_h'];} ?>;
}


.icon-search:before{
		color: <?php echo $smof_data['port_icon_color'];?>;
}

#portfolio .thumbText:hover .icon-search:before{
	 color: <?php echo $smof_data['port_icon_color_h'];?>;
}

#portfolio .thumbText .sectionTitle:hover .icon-search{
		color: <?php echo $smof_data['port_icon_color_h'];?>;
}

.serv_corusel li:hover, .serv_corusel li:hover h3, .btn.white:hover{
    color: #fff;
}

.load_more:hover{
	background: <?php if (!empty($smof_data['port_colors_load_back_h'])) { echo $smof_data['port_colors_load_back_h'];} ?>;
}
.load_more{
	background: <?php if (!empty($smof_data['port_colors_load_back'])) { echo $smof_data['port_colors_load_back'];} ?>;
}
.serv_corusel li:hover i{
	color:<?php if (!empty($smof_data['serv_icons_bg_hover'])) { echo $smof_data['serv_icons_bg_hover'];} ?> !important;
}


.mycarousel li{
	 background: <?php if (!empty($smof_data['serv_bg'])) { echo $smof_data['serv_bg'];} ?>;
}

.mycarousel li:hover{
	 background: <?php if (!empty($smof_data['serv_bg_hover'])) { echo $smof_data['serv_bg_hover'];} ?>;
}


.serv_corusel li h3{
	color:<?php if (!empty($smof_data['serv_text_h3'])) { echo $smof_data['serv_text_h3'];} ?> !important;
}

.serv_corusel li:hover h3{
	color:<?php if (!empty($smof_data['serv_text_hover'])) { echo $smof_data['serv_text_hover'];} ?> !important;
}

.serv_corusel li:hover div p{
	color:<?php if (!empty($smof_data['serv_text_hover'])) { echo $smof_data['serv_text_hover'];} ?> !important;
}

.footer-row a{
	 background: <?php if (!empty($smof_data['price_button'])) { echo $smof_data['price_button'];} ?>;
}
.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt,
.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button{
    border: none;
    box-shadow: none;
    text-shadow: none !important;
    color: #fff;
  
}


.progress-bar {
    border: 2px solid  rgba(0,0,0,0.5);;
}
.btn.firm:hover , button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover {
    background: rgba(255,255,255,0.5);
    transition: all .5s;
    -moz-transition: all .5s;
    -webkit-transition: all .5s;
}


#contact_us input[type="submit"]{
	color: <?php echo $smof_data['contact_button_text'];?>;
	background: <?php echo $smof_data['contact_button'];?>;
}

#contact_us input[type="submit"]:hover{
	color: <?php echo $smof_data['contact_button_text_h'];?>;
	background: <?php echo $smof_data['contact_button_h'];?>;
}
.team_name a{
		color: <?php echo $smof_data['about_colors_link'];?>;
}
.team_name a:hover{
		color: <?php echo $smof_data['about_colors_link_h'];?>;
}

.team_container {
		background: <?php echo $smof_data['team_cont_bg'];?>;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
}

.team_hover{
background: <?php echo $smof_data['about_colors_link'];?>;
opacity: .<?php echo $smof_data['about_colors_hover_opacity']?>;
}

.team_social a{
	background: <?php echo $smof_data['about_buttons'];?>;

}

.team_social a:hover{
	background: <?php echo $smof_data['about_buttons_h'];?>;

}





.port-title {
    background: rgba(<?php echo $firm[0].', '.$firm[1].', '.$firm[2];?>, 0.9);
}

<?php if($smof_data['first_intro'] != 1) { ?>
#pages > ul > li:first-child .intro {
    display: none;
}
<?php } ?>
<?php if($smof_data['port_img_anim'] != 1) { ?>
.port-overlay {
    display: none !important;
}
<?php } ?>

@media (max-width: 1024px) {
    .intro {
        background-size:cover;
        background-position: center top;
        background-attachment: scroll;
    }
}

@media (max-width: 979px) {
    .top_navigation {
        display: none;
    }
    .tinynav {
        display: block;
        margin-top: 35px;
    }
    .rubik {
    	bottom: 0 !important;
    }
}
@media (min-width: 768px) and (max-width: 979px) {

}
@media (min-width: 480px) and (max-width: 979px) {
    .isotope-item {
        width: 32%;
    }
}
@media (max-width: 767px) {
    .row-fluid [class*="span"] {
        padding: 0 15px;
    }
    body {
        font-size: 12px;
    }
    .h1 {
        font-size: 26px;
        line-height: 26px;
    }
    .h2 {
        font-size: 16px;
        line-height: 16px;
    }
    .rubik {
        height: 100px;
    }
    .widget_intro .intro_pad {
        margin: 0;
    }
    .widget_intro h1 {
        margin-bottom: 15px;
    }
    h1 {
        font-size: 28px;
        margin-bottom: 10px;
    }
    #gmap {
        width: 80%;
        margin: 0 10%;

    }
    .footer_bottom, .powerby {
        text-align: center;
    }
    .port-overlay {
        display: none !important;
    }
    .reading-box p {
        margin: 0 !important;
    }
    .continue {
        display: none;
    }
    .mobile-button {
        display: inline-block;
    }
}
@media (max-width: 480px) {
    .isotope-item {
        width: 48%;
    }
    #logo, #main_menu {
        float: none;
        text-align: center;
    }
    .tinynav {
        margin: 10px auto;
    }
    #logo img {
        margin: 0;
    }
    header#site-header {
        height: auto;
    }
    .product .images, .summary.entry-summary {
        width: 100% !important;
        float: none !important;
        padding: 0 15px;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
}

<?php $rgba = gg_HEXvRGB($smof_data['widget_intro']);?>
.widget_intro .rubik {
    background: <?php echo $smof_data['widget_intro']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['widget_intro_opacity']/100);?>);
    
}
<?php $rgba = gg_HEXvRGB($smof_data['widget_intro']);?>
.widget_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['widget_intro']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['widget_intro_opacity']/100);?>);
}
.widget_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['widget_intro']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['widget_intro_opacity']/100);?>) transparent transparent;
}

.widget_intro .intro_pad h1{
	color: <?php  echo $smof_data['widget_intro_text']; ?> ;
}

.intro_pad .social_line a{
	color: <?php  echo $smof_data['widget_intro_icons']; ?> ;
}

.intro_pad .social_line a:hover{
	color: <?php  echo $smof_data['widget_intro_icons_h']; ?> ;
}

.widget_mid .text-up, .widget_mid .sub_title{
	color: <?php  echo $smof_data['widget_title_color']; ?> ;
}


.fwidgets .widget{
	color: <?php  echo $smof_data['widget_text_color']; ?> ;
}

/*========================== HEADER MENU ===========================*/
#menu {
		position: relative;
		float: left;
		width: 100%;
		padding: 0 20px;
		border-radius: 3px;
		/*box-shadow: inset 0 1px 1px rgba(255,255,255,.5), inset 0 -1px 0 rgba(0,0,0,.15), 0 1px 3px rgba(0,0,0,.15);*/
		 background: <?php if (!empty($smof_data['h_m_back'])) { echo $smof_data['h_m_back'];} ?>;
	}

#container {
		position: relative;
		width: 940px;		
	}

	#container:after {
		content: "";
		display: block;
		clear: both;
		height: 0;
	}


	#menu, #menu ul {
		list-style: none;
	}

	#menu > li {
		float: left;
		position: relative;
		border-right: 1px solid rgba(0,0,0,.05);
		/*box-shadow: 1px 0 0 rgba(255,255,255,.25);*/
		perspective: 1000px;
        -webkit-perspective: 1000px;
	}

	#menu > li:first-child {
		/* border-left: 1px solid rgba(255,255,255,.25); */
		/*box-shadow: -1px 0 0 rgba(0,0,0,.1), 1px 0 0 rgba(255,255,255,.25);*/
	}

	#menu a {
		display: block;
		position: relative;
		z-index: 10;
		padding: 13px 20px 13px 20px;
		text-decoration: none;
		color:<?php if (!empty($smof_data['h_m_links'])) { echo $smof_data['h_m_links'];} ?>;
		line-height: 1;
		font-weight: 800;
        font-size:<?php if (!empty($smof_data['font_size_smenu'])) { echo $smof_data['font_size_smenu'];} ?>px;
		background: transparent;		
		/*text-shadow: 0 1px 1px rgba(255,255,255,.9);*/
		transition: all .25s ease-in-out;
		-webkit-transition: all .25s ease-in-out;

	}

	#menu > li:hover > a {
		 background: <?php if (!empty($smof_data['h_m_back_hover'])) { echo $smof_data['h_m_back_hover'];} ?>;
		color:<?php if (!empty($smof_data['h_m_links_hover'])) { echo $smof_data['h_m_links_hover'];} ?>;
		text-shadow: none;
	}

	#menu li ul  {
		position: absolute;
		left: 0;
		z-index: 1;
		width: 200px;
		padding: 0;
		opacity: 0;
		visibility: hidden;
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
		background: transparent;
		overflow: hidden;
		transform-origin: 50% 0%;
		-webkit-transform-origin: 50% 0%;
	}


	#menu li:hover ul {
		
		padding: 15px 0;
		 background: <?php if (!empty($smof_data['h_m_back_sub'])) { echo $smof_data['h_m_back_sub'];} ?>;
		opacity: 1;
		visibility: visible;
		animation: swingdown 1s ease;
        -webkit-animation: swingdown 1s ease;
        -moz-animation: swingdown 1s ease;

	}

	<?php
    if($smof_data['top_menu_animation']){ ?>
    @keyframes swingdown {
		0% {
			opacity: .99999;
			transform: rotateX(90deg);
		}

		30% {			
			transform: rotateX(-20deg) rotateY(5deg);
			animation-timing-function: ease-in-out;
		}

		65% {
			transform: rotateX(20deg) rotateY(-3deg);
			animation-timing-function: ease-in-out;
		}

		100% {
			transform: rotateX(0);
			animation-timing-function: ease-in-out;
		}
	}
	
	@-moz-keyframes swingdown {
		0% {
			opacity: .99999;
			-moz-transform: rotateX(90deg);
		}

		30% {			
			-moz-transform: rotateX(-20deg) rotateY(5deg);
			-moz-animation-timing-function: ease-in-out;
		}

		65% {
			-moz-transform: rotateX(20deg) rotateY(-3deg);
			-moz-animation-timing-function: ease-in-out;
		}

		100% {
			-moz-transform: rotateX(0);
			-moz-animation-timing-function: ease-in-out;
		}
	}
    @-webkit-keyframes swingdown {
        0% {
            opacity: .99999;
            -webkit-transform: rotateX(90deg);
        }

        30% {
            -webkit-transform: rotateX(-20deg) rotateY(5deg);
            -webkit-animation-timing-function: ease-in-out;
        }

        65% {
            -webkit-transform: rotateX(20deg) rotateY(-3deg);
            -webkit-animation-timing-function: ease-in-out;
        }

        100% {
            -webkit-transform: rotateX(0);
            -webkit-animation-timing-function: ease-in-out;
        }
    }
    
   <?php } ?>

	#menu li li a {
		padding-left: 15px;
		font-weight: 400;
		/*color: #ddd;*/
		text-shadow: none;
		border-top: dotted 1px transparent;
		border-bottom: dotted 1px transparent;
		transition: all .15s linear;
		-webkit-transition: all .15s linear;
	}

	#menu li li a:hover {
		background: <?php if (!empty($smof_data['sub_hover'])) { echo $smof_data['sub_hover'];} ?>;
		color: rgba(225,225,225,1);
		border-top: dotted 1px rgba(255,255,255,.15);
		border-bottom: dotted 1px rgba(255,255,255,.15);
	}	
	
	


<?php require_once get_template_directory().'/Mobile_Detect.php';
$detect = new Mobile_Detect;
$check = $detect->isTablet(); if($check): ?>
.rubik {
    bottom: 0 !important;
}
<?php endif;?>


<?php
if(!empty($smof_data['custom_css'])){ if ($smof_data['custom_css']) {
        echo $smof_data['custom_css'];
}}?>

<?php if ( is_page_template('portfolio-page.php') ) {?>
	
	.id_page{
            	background: <?php if (!empty($smof_data['s_port_colors_bg'])) { echo $smof_data['s_port_colors_bg'];} ?>;
               
    		}	
	 .id_page, .id_page .post-title{
     			color: <?php echo $smof_data['s_port_colors_text'];?> !important;
     }           
	.portfolio_main .top-border-left {
    			border-color: transparent transparent transparent <?php echo $smof_data['s_port_colors_bg'];?>;
	}
	.portfolio_main .top-border-right {
    			border-color: transparent transparent <?php echo $smof_data['s_port_colors_bg'];?> transparent;
	}
	.id_page .bot-border-left {
    			border-color: <?php echo $smof_data['s_port_colors_bg'];?> transparent transparent transparent;
	}
	.id_page .bot-border-right{
   				 border-color: transparent <?php echo $smof_data['s_port_colors_bg'];?> transparent transparent;
	}
	.container .text-center a {
    			color: <?php echo $smof_data['s_port_colors_link']; ?> !important;
                background: <?php echo $smof_data['s_port_colors_load_back']; ?>;
	}
	.container .text-center a:hover {
    			color: <?php echo $smof_data['s_port_colors_link_h']; ?> !important;
                background: <?php echo $smof_data['s_port_colors_load_back_h']; ?>;
	}

	#filters a:hover {
    			color: <?php echo $smof_data['s_port_cat_link_h']; ?> ;
	}
    
    
    .thumbImage .thumbTextWrap{
				background: <?php if (!empty($smof_data['s_port_item_color_h'])) { echo $smof_data['s_port_item_color_h'];} ?>;
	}

	#filters li a.selected{
				background: <?php if (!empty($smof_data['s_port_active_bg'])) { echo $smof_data['s_port_active_bg'];} ?>;	
	}

	#filters li a:hover {
    			background: <?php if (!empty($smof_data['s_port_active_bg_h'])) { echo $smof_data['s_port_active_bg_h'];} ?>;
	}

	.id_page li a
	{
   				color: <?php if (!empty($smof_data['s_port_cat_link'])) { echo $smof_data['s_port_cat_link'];} ?> !important;
	}
    
    .id_page li a:hover
	{
   				color: <?php if (!empty($smof_data['s_port_cat_link_h'])) { echo $smof_data['s_port_cat_link_h'];} ?> !important;
	}


	.thumbImage .thumbText h3{
	 			background: <?php if (!empty($smof_data['s_port_div_bg'])) { echo $smof_data['s_port_div_bg'];} ?>;
	}

	.thumbImage .thumbText h3:hover{
	 			background: <?php if (!empty($smof_data['s_port_div_bg_h'])) { echo $smof_data['s_port_div_bg_h'];} ?>;
	}
	.id_page .thumbText h3{
   				color: <?php if (!empty($smof_data['s_port_div_text'])) { echo $smof_data['s_port_div_text'];} ?> !important; 
   	}
    
    .id_page .thumbText h3:hover{
   				color: <?php if (!empty($smof_data['s_port_div_text_h'])) { echo $smof_data['s_port_div_text_h'];} ?> !important; 
   	}
    
	.thumbImage .thumbText .icon-link:before{
		color: <?php echo $smof_data['s_port_icon_color'];?>;
	}

	.thumbImage .thumbText:hover .icon-link:before{
	 color: <?php echo $smof_data['s_port_icon_color_h'];?>;
	}	

<?php } ?>



<?php $rgba = gg_HEXvRGB($smof_data['blank1_colors_intro_bg']);?>
.blank1_intro .rubik {
	color: <?php if (!empty($smof_data['blank1_colors_intro_text'])) { echo $smof_data['blank1_colors_intro_text'];} ?>;
    background: <?php echo $smof_data['blank1_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank1_colors_intro_opacity']/100);?>);
}
.blank1_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['blank1_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank1_colors_intro_opacity']/100);?>);
}
.blank1_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['blank1_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank1_colors_intro_opacity']/100);?>) transparent transparent;
}
#blank1 .section-mid{
    background: <?php echo $smof_data['blank1_colors_bg'];?>;
    color: <?php echo $smof_data['blank1_text_color'];?>;
}
#blank1 h1,
#blank1 h2,
#blank1 h3,
#blank1 h4,
#blank1 h5,
#blank1 h6,
#blank1 .sub_title {
    color: <?php echo $smof_data['blank1_colors_text'];?>;
}
#blank1 .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['blank1_colors_bg'];?>;
}
#blank1 .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['blank1_colors_bg'];?> transparent;
}
#blank1 .bot-border-left {
    border-color: <?php echo $smof_data['blank1_colors_bg'];?> transparent transparent transparent;
}
#blank1 .bot-border-right{
    border-color: transparent <?php echo $smof_data['blank1_colors_bg'];?> transparent transparent;
}
<?php $rgba = gg_HEXvRGB($smof_data['blank1_colors_intro_bg']);?>
.blank1_intro .rubik {
    background: <?php echo $smof_data['blank1_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank1_colors_intro_opacity']/100);?>);
}
#blank1.intro_pad div{
 color: <?php echo $smof_data['blank1_colors_intro_text']; ?>;
}
.blank1_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['blank1_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank1_colors_intro_opacity']/100);?>);
}
.blank1_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['blank1_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank1_colors_intro_opacity']/100);?>) transparent transparent;
}
.blank1_main .section-mid{
    background: <?php echo $smof_data['blank1_colors_bg'];?>;
    color: <?php echo $smof_data['blank1_colors_text'];?>;
}
#blank1 a{
	color:<?php echo $smof_data['blank1_colors_link']; ?>;
}

#blank1 a:hover{
	color:<?php echo $smof_data['blank1_colors_link_h']; ?>;
}



<?php $rgba = gg_HEXvRGB($smof_data['blank2_colors_intro_bg']);?>
.blank2_intro .rubik {
	color: <?php if (!empty($smof_data['blank2_colors_intro_text'])) { echo $smof_data['blank2_colors_intro_text'];} ?>;
    background: <?php echo $smof_data['blank2_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank2_colors_intro_opacity']/100);?>);
}
.blank2_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['blank2_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank2_colors_intro_opacity']/100);?>);
}
.blank2_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['blank2_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank2_colors_intro_opacity']/100);?>) transparent transparent;
}
#blank2 .section-mid{
    background: <?php echo $smof_data['blank2_colors_bg'];?>;
    color: <?php echo $smof_data['blank2_text_color'];?>;
}
#blank2 h1,
#blank2 h2,
#blank2 h3,
#blank2 h4,
#blank2 h5,
#blank2 h6,
#blank2 .sub_title {
    color: <?php echo $smof_data['blank2_colors_text'];?>;
}
#blank2 .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['blank2_colors_bg'];?>;
}
#blank2 .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['blank2_colors_bg'];?> transparent;
}
#blank2 .bot-border-left {
    border-color: <?php echo $smof_data['blank2_colors_bg'];?> transparent transparent transparent;
}
#blank2 .bot-border-right{
    border-color: transparent <?php echo $smof_data['blank2_colors_bg'];?> transparent transparent;
}
<?php $rgba = gg_HEXvRGB($smof_data['blank2_colors_intro_bg']);?>
.blank2_intro .rubik {
    background: <?php echo $smof_data['blank2_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank2_colors_intro_opacity']/100);?>);
}
#blank2.intro_pad div{
 color: <?php echo $smof_data['blank2_colors_intro_text']; ?>;
}
.blank2_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['blank2_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank2_colors_intro_opacity']/100);?>);
}
.blank2_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['blank2_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank2_colors_intro_opacity']/100);?>) transparent transparent;
}
.blank2_main .section-mid{
    background: <?php echo $smof_data['blank2_colors_bg'];?>;
    color: <?php echo $smof_data['blank2_colors_text'];?>;
}
#blank2 a{
	color:<?php echo $smof_data['blank2_colors_link']; ?>;
}

#blank2 a:hover{
	color:<?php echo $smof_data['blank2_colors_link_h']; ?>;
}



<?php $rgba = gg_HEXvRGB($smof_data['blank3_colors_intro_bg']);?>
.blank3_intro .rubik {
	color: <?php if (!empty($smof_data['blank3_colors_intro_text'])) { echo $smof_data['blank3_colors_intro_text'];} ?>;
    background: <?php echo $smof_data['blank3_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank3_colors_intro_opacity']/100);?>);
}
.blank3_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['blank3_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank3_colors_intro_opacity']/100);?>);
}
.blank3_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['blank3_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank3_colors_intro_opacity']/100);?>) transparent transparent;
}
#blank3 .section-mid{
    background: <?php echo $smof_data['blank3_colors_bg'];?>;
    color: <?php echo $smof_data['blank3_text_color'];?>;
}
#blank3 h1,
#blank3 h2,
#blank3 h3,
#blank3 h4,
#blank3 h5,
#blank3 h6,
#blank3 .sub_title {
    color: <?php echo $smof_data['blank3_colors_text'];?>;
}
#blank3 .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['blank3_colors_bg'];?>;
}
#blank3 .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['blank3_colors_bg'];?> transparent;
}
#blank3 .bot-border-left {
    border-color: <?php echo $smof_data['blank3_colors_bg'];?> transparent transparent transparent;
}
#blank3 .bot-border-right{
    border-color: transparent <?php echo $smof_data['blank3_colors_bg'];?> transparent transparent;
}
<?php $rgba = gg_HEXvRGB($smof_data['blank3_colors_intro_bg']);?>
.blank3_intro .rubik {
    background: <?php echo $smof_data['blank3_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank3_colors_intro_opacity']/100);?>);
}
#blank3.intro_pad div{
 color: <?php echo $smof_data['blank3_colors_intro_text']; ?>;
}
.blank3_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['blank3_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank3_colors_intro_opacity']/100);?>);
}
.blank3_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['blank3_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['blank3_colors_intro_opacity']/100);?>) transparent transparent;
}
.blank3_main .section-mid{
    background: <?php echo $smof_data['blank3_colors_bg'];?>;
    color: <?php echo $smof_data['blank3_colors_text'];?>;
}
#blank3 a{
	color:<?php echo $smof_data['blank3_colors_link']; ?>;
}

#blank3 a:hover{
	color:<?php echo $smof_data['blank3_colors_link_h']; ?>;
}
<?php $rgba = gg_HEXvRGB($smof_data['recent_colors_intro_bg']);?>
.recent_intro .rubik {
    color: <?php if (!empty($smof_data['recent_colors_intro_text'])) { echo $smof_data['recent_colors_intro_text'];} ?>;
    background: <?php echo $smof_data['recent_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['recent_colors_intro_opacity']/100);?>);
}
.recent_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['recent_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['recent_colors_intro_opacity']/100);?>);
}
.recent_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['recent_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['recent_colors_intro_opacity']/100);?>) transparent transparent;
}
#recent .section-mid{
    background: <?php echo $smof_data['recent_colors_bg'];?>;
    color: <?php echo $smof_data['recent_text_color'];?>;
}
#recent h1,
#recent h2,
#recent h3,
#recent h4,
#recent h5,
#recent h6,
#recent .sub_title {
    color: <?php echo $smof_data['recent_colors_text'];?>;
}
#recent .top-border-left {
    border-color: transparent transparent transparent <?php echo $smof_data['recent_colors_bg'];?>;
}
#recent .top-border-right {
    border-color: transparent transparent <?php echo $smof_data['recent_colors_bg'];?> transparent;
}
#recent .bot-border-left {
    border-color: <?php echo $smof_data['recent_colors_bg'];?> transparent transparent transparent;
}
#recent .bot-border-right{
    border-color: transparent <?php echo $smof_data['recent_colors_bg'];?> transparent transparent;
}
<?php $rgba = gg_HEXvRGB($smof_data['recent_colors_intro_bg']);?>
.recent_intro .rubik {
    background: <?php echo $smof_data['recent_colors_intro_bg']; ?>;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['recent_colors_intro_opacity']/100);?>);
}
#recent.intro_pad div{
    color: <?php echo $smof_data['recent_colors_intro_text']; ?>;
}
.recent_intro .rubik-top-border{
    border-color: transparent transparent <?php echo $smof_data['recent_colors_intro_bg']; ?>;
    border-color: transparent transparent rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['recent_colors_intro_opacity']/100);?>);
}
.recent_intro .rubik-bot-border {
    border-color: <?php echo $smof_data['recent_colors_intro_bg']; ?> transparent transparent;
    border-color: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', '.($smof_data['recent_colors_intro_opacity']/100);?>) transparent transparent;
}
.recent_main .section-mid{
    background: <?php echo $smof_data['recent_colors_bg'];?>;
    color: <?php echo $smof_data['recent_colors_text'];?>;
}
#recent a{
    color:<?php echo $smof_data['recent_colors_link']; ?>;
}

#recent a:hover{
    color:<?php echo $smof_data['recent_colors_link_h']; ?>;
}

#recent .caption{
	padding:20px;
}

.mycarousel li:hover h3 {
  <?php if($smof_data['serv_icon_anim'] == 1) { ?>
  	transform: translateY(100px);
  	-moz-transform: translateY(100px);
  	-o-transform: translateY(100px);
  	-webkit-transform: translateY(100px);
  <?php } ?>
  transition: all .5s;
  -moz-transition: all .5s;
  -webkit-transition: all .5s;
}

.serv_corusel li h3 {
  text-transform: uppercase;
  position: relative;
  transition: all .5s;
  -moz-transition: all .5s;
  -webkit-transition: all .5s;
}
.serv_corusel li i {
  font-size: 56px;
  margin: 25px 0;
  display: inline-block;
  width: 80px;
  line-height: 80px;
  height: 80px;
  border-radius: 50%;
  transition: all .5s;
  -moz-transition: all .5s;
  -webkit-transition: all .5s;
  position: relative;
}
.serv_corusel li:hover i {
  color: #fff;
  cursor: pointer;
  transition: all .5s linier 0;
  -moz-transition: all .5s linier 0;
  -webkit-transition: all .5s linier 0;
 <?php if($smof_data['serv_icon_anim'] == 1) { ?>
 	transform: translateY(-50px);
 	-moz-transform: translateY(-50px);
 	-o-transform: translateY(-50px);
 	-webkit-transform: translateY(-50px);
  <?php } ?>
}
<?php if($smof_data['port_img_anim'] == 1) {?>
.thumbImage:hover img {
  opacity: 0;
  transform: scale(10);
  -moz-transform: scale(10);
  -o-transform: scale(10);
  -webkit-transform: scale(10);
}
.touch-device .thumbImage:hover img {
  transform: none;
}
.thumbImage:hover .thumbTextWrap {
  opacity: 1;
  transition-delay: .2s;
  -moz-transition-delay: .2s;
  -o-transition-delay: .2s;
  -webkit-transition-delay: .2s;
}
.thumbImage:hover .thumbText {
  transform: scale(1);
  -moz-transform: scale(1);
  -o-transform: scale(1);
  -webkit-transform: scale(1);
}
.touch-device .thumbImage:hover .thumbTextWrap {
  display: block;
}
.ie8 .thumbImage:hover .thumbTextWrap {
  display: block;
}
<?php }?>
.margin-top-30 {
	margin-top:30px;
}
.widget_FacebookLikeBox iframe {
	height: 100% !important;
    width:100% !important;
}
.mycarousel2 {
    text-align: center;
    font-size:0; /* убираем горизонтальные отступы */
    line-height:0; /* ...и вертикальные в некоторых браузерах */
    letter-spacing:-1px; /* переубеждаем webkit'ы */
}
.row-fluid.mycarousel2 [class*="span"]{
    float: none;
    font-size:14px; /* Не забываем восстановить нормальные значения */
    line-height:normal;
    letter-spacing:normal;
    display:inline-block;
//display:inline;
    zoom:1;
    vertical-align: top;
}
<?php if($smof_data['blog_content_layout'] == 0) {?>

.single-format-standard .left-box{
	width:100%;
    float:none;
}

.single-format-standard .right-box{
	width:100%;
    float:none;
}
<?php } ?>
<?php if($smof_data['contact_map_type']==1){?>
#gmap{
	background:url('http://maps.googleapis.com/maps/api/staticmap?center=<?php echo str_replace(' ','+',$smof_data['contact_gmap']); ?>&zoom=<?php echo $smof_data['contact_gmap_zoom']; ?>&size=640x640&scale=4&format=jpg&sensor=false') no-repeat;
	background-position:center center;
	background-size:cover;
}
<?php } ?>
</style>
