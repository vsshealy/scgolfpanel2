<?php 
    /**
     * php/theme/templates/parts/content-none.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<!-- CONTENT-NONE -->
<article id="no-results-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>