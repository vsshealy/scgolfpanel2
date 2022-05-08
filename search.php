<?php 
    /**
     * search.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<!DOCTYPE HTML>
<!-- SC GOLF COURSE RATINGS PANEL | www.scgolfpanel.org -->

<html id="scgolfpanel" <?php language_attributes(); ?>>
    
    <!-- HEAD -->
    <head>
        <?php include(get_template_directory()."/php/theme/scripts/head/page.php"); ?>
    </head>

    <!-- BODY -->
    <body id="<?php global $post; $post_slug = $post -> post_name; echo $post_slug ?>" <?php body_class(); ?>>
        
        <!-- BODY-SCRIPTS -->
        <?php include(get_template_directory()."/php/theme/scripts/body/body-scripts.php"); ?>

        <!-- HEADER -->
        <?php include(get_template_directory()."/header.php"); ?>

        <!-- CONTENT | SEARCH.PHP -->
        <?php include(get_template_directory()."/php/theme/templates/search.php"); ?>

        <!-- FOOTER -->
        <?php include(get_template_directory()."/footer.php"); ?>

        <!-- SCRIPTS -->
        <?php include(get_template_directory()."/php/theme/scripts/footer/footer-scripts.php"); ?>
        
    </body>

</html>