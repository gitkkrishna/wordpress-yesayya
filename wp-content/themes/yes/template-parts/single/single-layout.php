<?php

/**

 * Template for Single post

 *

 * @package     Astra

 * @author      Astra

 * @copyright   Copyright (c) 2020, Astra

 * @link        https://wpastra.com/

 * @since       Astra 1.0.0

 */



?>



<div <?php astra_blog_layout_class( 'single-layout-1' ); ?>>



	<?php astra_single_header_before(); ?>



	<header class="entry-header <?php astra_entry_header_class(); ?>">



		<?php astra_single_header_top(); ?>



		<?php astra_blog_post_thumbnail_and_title_order(); ?>

<p>Learn the lyrics <strong><?php echo get_the_title(); ?></strong> the inspirational song and most famous chords, lyrics, video and audio mp3 download of all time!</p>
<p>This is a good hymn that will make you feel closer to the lord Jesus. When you sing out <strong><?php echo get_the_title(); ?></strong> lyrics, we will be filled with joy, strength, love, and power of God.</p>

<h2><strong><strong><?php echo get_the_title(); ?></strong> Chords, Lyrics, Video and Audio mp3 Download</strong></h2>
		<?php astra_single_header_bottom(); ?>



	</header><!-- .entry-header -->



	<?php //astra_single_header_after(); ?>



	<div class="entry-content clear"
	

	<?php

				echo astra_attr(

					'article-entry-content-single-layout',

					array(

						'class' => '',

					)

				);

				?>

	>



		<?php astra_entry_content_before(); ?>



		<?php the_content(); ?>



		<?php

			astra_edit_post_link(

				sprintf(

					/* translators: %s: Name of current post */

					esc_html__( 'Edit %s', 'astra' ),

					the_title( '<span class="screen-reader-text">"', '"</span>', false )

				),

				'<span class="edit-link">',

				'</span>'

			);

			?>



		<?php astra_entry_content_after(); ?>



		<?php

			wp_link_pages(

				array(

					'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),

					'after'       => '</div>',

					'link_before' => '<span class="page-link">',

					'link_after'  => '</span>',

				)

			);

			?>

	</div><!-- .entry-content .clear -->

</div>

