<?php

/**

 * The template for displaying archive pages.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package Astra

 * @since 1.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



get_header(); ?>



<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>



	<?php get_sidebar(); ?>



<?php endif ?>



	<div id="primary" <?php astra_primary_class(); ?>>



		<?php astra_primary_content_top(); ?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- yes and onlinebadi -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6411152360257874"
     data-ad-slot="4961984818"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

		<?php astra_archive_header(); ?>



		<?php astra_content_loop(); ?>



		<?php astra_pagination(); ?>

<div class="gaDs">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-6411152360257874"
     data-ad-slot="7041454871"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>

		<?php astra_primary_content_bottom(); ?>



	</div><!-- #primary -->



<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>



	<?php get_sidebar(); ?>



<?php endif ?>



<?php get_footer(); ?>

