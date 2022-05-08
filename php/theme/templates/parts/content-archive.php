<?php 
    /**
     * php/theme/templates/parts/content-archive.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<!-- CONTENT-ARCHIVE -->
<article id="archive-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>