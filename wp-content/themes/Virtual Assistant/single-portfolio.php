<?php
get_header();
if ( class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_enabled() ) { $flbuilder = ' class="fl-builder-enable"'; }
?>
<main id="content"<?php if( empty( $post->post_content) ) { echo (' class="no-content"'); } echo $flbuilder; ?>>
	<div id="content-area"<?php if (get_field('content_padding')) { ?> class="<?php echo get_field('content_padding'); ?>"<?php } ?>>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if ( class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_enabled() ) { ?>
				<?php the_content(); ?>
			<?php } else { ?>
				<div class="container">
					<?php the_content(); ?>
				</div>
			<?php } ?>
		<?php endwhile; endif; ?>
	</div>
</main>
<?php get_footer(); ?>