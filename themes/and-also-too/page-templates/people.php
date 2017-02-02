<?php
/**
 * Template Name: People
 *
 * This is the template for the people page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package And_Also_Too
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<div class="entry-content people-content">

					<header class="people-header entry-header">
						<div class="bg">
					<!-- <img src="/wp-content/uploads/2017/01/people-landing.png">-->
					</div>
								<div class="outer-content">

									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

									<div class="landing-name landing-bold">
										Una Lee
									</div>
									<div class="landing-title landing-italic">
										Creative Director
									</div>
									<div class="landing-name landing-bold">
										Lara Stefanovich-Thomson
									</div>
									<div class="landing-title landing-italic">
										Designer
									</div>
									<div class="landing-name landing-bold">
										Lupe Pérez
									</div>
									<div class="landing-title landing-italic">
										Designer
									</div>
									<div class="landing-name landing-bold">
										Shameela Lazan
									</div>
									<div class="landing-title landing-italic">
										Studio Coordinator
									</div>

								</div><!-- .outer-content-->


					</header><!-- .entry-header -->

					<div class="outer-content">
							<div>
								<div>
								</div>
								<div>
								</div>
								<div>
								</div>
							</div>
							<div>
								<img src="/wp-content/uploads/2017/01/una.png">
							</div>
					</div><!-- .outer-content-->

					<div class="outer-content">
						<div>
							<div>
							</div>
							<div>
							</div>
							<div>
							</div>
						</div>
						<div>
							<img src="/wp-content/uploads/2017/01/lara.png">
						</div>
					</div><!-- .outer-content-->

					<div class="outer-content">
						<div>
							<div>
							</div>
							<div>
							</div>
							<div>
							</div>
						</div>
						<div>
							<img src="/wp-content/uploads/2017/01/lupe.png">
						</div>
					</div><!-- .outer-content-->

					<div class="outer-content">
						<div>
							<div>
							</div>
							<div>
							</div>
							<div>
							</div>
						</div>
						<div>
							<img src="/wp-content/uploads/2017/01/shameela.png">
						</div>
					</div><!-- .outer-content-->

				</div><!-- .entry-content -->

			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
