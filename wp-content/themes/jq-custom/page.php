<?php get_header(); ?>
<div id="content" class="clearfix">
<?php include ( get_stylesheet_directory(). "/sidebar.php"); ?>
<div id="left">
<div class="single_content">
<!-- page content -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1 class="page_headline"><?php the_title(); ?></h1>
<div class="clearfix"></div>
<?php if ( is_user_logged_in() ) : ?><small><?php edit_post_link('Edit','&middot; ',' &middot;'); ?></small><?php endif; ?>
<?php the_content(); ?>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php include ( get_stylesheet_directory(). "/searchform.php"); ?>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>
