<?php get_header(); ?>
<div id="content" class="clearfix">
<?php get_sidebar(); ?>
<!-- search -->
<div id="left"><h2 class="archive-title">Search</h2>
<?php include ( get_stylesheet_directory(). "/wp-loop.php"); ?>
</div>
</div>
<?php get_footer(); ?>
