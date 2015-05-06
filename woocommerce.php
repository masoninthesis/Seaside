<?php
if (!defined('ABSPATH')) exit;
?>

<?php get_header(); ?>

<div class="id_woo"> 
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <?php woocommerce_content(); ?>
            </div>
            <div class="span3" id="sidebar">
                <?php dynamic_sidebar('shop-sidebar'); ?>
            </div>
        </div>
    </div>
    <!-- end of #content -->
    <div class="bot-border"><div class="bot-border-left"></div><div class="bot-border-right"></div></div>
</div>

<?php get_footer(); ?>

