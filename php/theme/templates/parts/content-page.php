<?php 
    /**
     * php/theme/templates/parts/content-page.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<!-- CONTENT-PAGE -->
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>