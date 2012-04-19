<!-- footer template -->
<div id="appendix" class="clearfix">
<div class="app_widget">
<!-- sidebar_bottom_left -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_bottom_left') ) : ?>
<?php endif; // endif widget ?>
</div>
<div class="app_widget">
<!-- sidebar_bottom_middle -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_bottom_middle') ) : ?>
<?php endif; // endif widget ?>
</div>
<div class="app_widget">
<!-- sidebar_bottom_right -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_bottom_right') ) : ?>
<?php endif; // endif widget ?>
</div>
</div>
<!-- wp_footer -->
<?php wp_footer(); ?>
</body>
</html>
