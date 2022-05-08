<?php 
    /**
     * php/theme/scripts/head/files/header-scripts.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<!-- FAVICON -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/icon-scgolfpanel-160x160.png" />

<!-- FONTS -->
    <?php include(get_template_directory()."/php/theme/scripts/external/fonts/merriweather.php"); ?>
    <?php include(get_template_directory()."/php/theme/scripts/external/fonts/roboto.php"); ?>

<!-- FONT-AWESOME -->
    <?php include(get_template_directory()."/php/theme/scripts/external/font-awesome/header.php"); ?>

<!-- FRAMEWORK -->
    <?php include(get_template_directory()."/php/theme/scripts/external/bootstrap/header.php"); ?>

<!-- WP-HEAD -->
    <?php wp_head(); ?>

<!-- GOOGLE-ANALYTICS -->
    <?php include(get_template_directory()."/php/theme/scripts/external/google-analytics/header.php"); ?>

<!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css"/>