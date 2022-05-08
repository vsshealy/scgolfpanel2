<?php 
    /**
     * php/theme/scripts/head/page.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<!-- TITLE -->
    <title><?php single_post_title(); ?> | <?php bloginfo("name"); ?></title>

<!-- META -->
    <?php include(get_template_directory()."/php/theme/scripts/head/files/meta.php"); ?>

<!-- HEADER-SCRIPTS -->
    <?php include(get_template_directory()."/php/theme/scripts/head/files/header-scripts.php"); ?>