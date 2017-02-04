<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="outer-content blog-date-flex">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php and_also_too_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<div class="flex-col-2">
			<div class="featured-image std-content-area">
				<?php
				if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
				}
				?>
			</div><!-- .featured-image -->
			<div class="blog-title std-content-area">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</div><!-- .blog-title -->
			<div class="entry-content std-content-area">
				<?php

					if ( is_single() ) :
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'and-also-too' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'and-also-too' ),
						'after'  => '</div>',
					) );

					else :
						the_excerpt();?>
						<div class="align-right">
						<a class="read-link" href="<?php echo get_permalink(); ?>">read
						 <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
					<?php endif; ?>
			</div><!-- .entry-content -->
		</div><!-- .flex-col2 -->
	</div><!-- .outer-content -->
</article><!-- #post-## -->
