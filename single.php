<?php
get_header();
?>
<?php	four_pane(); ?>
<div class="clearboth"></div>

<div id="content">
<?php
get_template_part( 'loop', 'index' );
?>
</div><!-- #content -->
<?php
get_sidebar(); 
?>
<div class="clearboth"></div>
<?php
get_footer();

?>