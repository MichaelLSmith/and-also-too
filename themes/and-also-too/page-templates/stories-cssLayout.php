<?php
/**
 * Template Name: Stories
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="outer-content masonry-layout">
						<div class="masonry-layout-panel masonry-layout-cluster masonry-layout-cluster--vertical">

  						<div class="masonry-layout-cluster__segment masonry-layout-cluster__segment--column">
							<div class="masonry-layout-panel masonry-layout-cluster__segment">
								<div class="first-story masonry-layout-panel__content">
									<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-photo1-1.png">
									<h2 class="story-title">Name of the Project in One Line 1</h1>
									<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
								</div><!-- story-summary masonry-layout-panel__content -->
							</div><!-- masonry-layout-panel masonry-layout-cluster__segment -->
						</div><!-- masonry-layout-cluster__segment masonry-layout-cluster__segment--column -->




						<div class="masonry-layout-panel">
							<div class="masonry-layout-panel__content">
								<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-photo2-1.png" alt="" />
								<h2 class="story-title">Name of the Project in One Line 2</h1>
								<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
							</div><!-- story-summary masonry-layout-panel__content -->

						</div><!-- masonry-layout-panel -->

						<div class="masonry-layout-panel">
							<div class="masonry-layout-panel__content">
								<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-photo3.png" alt="" />
								<h2 class="story-title">Name of the Project in One Line 3</h1>
								<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
							</div><!-- story-summary masonry-layout-panel__content --></div>
						</div><!-- masonry-layout-panel -->
							<div class="masonry-layout-panel">
								<div class="masonry-layout-panel__content">
									<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-Photo4.png" alt="" />
									<h2 class="story-title">Name of the Project in One Line 4</h1>
									<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
								</div><!-- story-summary masonry-layout-panel__content -->
							</div><!-- masonry-layout-panel -->
							<div class="masonry-layout-panel">
								<div class="masonry-layout-panel__content">
									<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-Photo5.png" alt="" />
									<h2 class="story-title">Name of the Project in One Line 5</h1>
									<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
								</div><!-- story-summary masonry-layout-panel__content -->
							</div><!-- masonry-layout-panel -->
							<div class="masonry-layout-panel">
								<div class="masonry-layout-panel__content">
									<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-photo1-1.png" alt="" />
									<h2 class="story-title">Name of the Project in One Line 6</h1>
									<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
								</div><!-- story-summary masonry-layout-panel__content -->
							</div><!-- masonry-layout-panel -->
							<div class="masonry-layout-panel">
								<div class="masonry-layout-panel__content">
									<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-photo3.png" alt="" />
									<h2 class="story-title">Name of the Project in One Line 7</h1>
									<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
								</div><!-- story-summary masonry-layout-panel__content -->
							</div><!-- masonry-layout-panel -->
							<div class="masonry-layout-panel">
								<div class="masonry-layout-panel__content">
									<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-photo2-1.png" alt="" />
									<h2 class="story-title">Name of the Project in One Line 8</h1>
									<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
								</div><!-- story-summary masonry-layout-panel__content -->
							</div><!-- masonry-layout-panel -->
						<div class="masonry-layout-panel">
							<div class="masonry-layout-panel__content">
								<img class="story-img" src="http://and-also-too.dev/wp-content/uploads/2017/02/story-photo1-1.png" alt="" />
								<h2 class="story-title">Name of the Project in One Line 9</h1>
								<h3 class="story-italic">with Provincial Advocate for Children & Youth</h3>
							</div><!-- story-summary masonry-layout-panel__content -->
						</div><!-- masonry-layout-panel -->
				</div><!-- .outer-content-->
			</div><!-- .entry-content -->

			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
