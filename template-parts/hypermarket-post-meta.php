<?php
/**
 * Display the post meta.
 *
 * @package 		Hooked into "hypermarket_loop_posts"
 * @author  		Mahdi Yazdani
 * @package 		Hypermarket
 * @since 		    1.0
 */
?>
<div class="col-md-3 col-sm-4">
	<div class="blog-post-meta">
		<div class="column">
			<span><?php _e('by', 'hypermarket'); ?> </span>
			<?php the_author_posts_link(); ?>
			<span class="divider"></span>
			<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . __(' ago', 'hypermarket'); ?>
		</div><!-- .column -->
		<div class="column">
			<?php echo hypermarket_get_simple_likes_button( $post->ID ); ?>
		</div><!-- .column -->
	</div><!-- .blog-post-meta -->
	<h2 class="blog-post-title">
		<a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a>
	</h2><!-- .blog-post-title -->
</div><!-- .col-md-3 -->