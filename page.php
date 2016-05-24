<?php
/**
 * Template Name: Full Width
 *
 * @package BoldGrid
 */

get_header(); ?>

<div class="spacer"></div>

<div class="row background-primary">
	<div class="col-md-12">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="container">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>

                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>

				<?php endwhile; // end of the loop. ?>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .col -->
</div><!-- .row -->

<?php get_footer(); ?>
