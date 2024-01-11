<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mir
 */

?>

<div class="container toys">
	
	<!-- //_ Для вывода заголовка -->
	<h2 class="subtitle"><?php the_title(); ?></h2> 

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- //_ Для вывода заголовка -->


		<div class="entry-content">
			<?php
			//_ Функция для вывода контета из поста записи
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mir' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mir' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->


	</article><!-- #post-<?php the_ID(); ?> -->

</div>
