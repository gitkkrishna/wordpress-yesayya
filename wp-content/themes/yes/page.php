<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

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

<div class="gaDs">
<!-- Yesayya2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6411152360257874"
     data-ad-slot="1842712519"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>

		<?php astra_primary_content_top(); ?>



		<?php astra_content_page_loop(); ?>



		<?php astra_primary_content_bottom(); ?>


<div class="gaDs">
<!-- yes and onlinebadi -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6411152360257874"
     data-ad-slot="4961984818"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<div class="related-posts">
	<h5>Popular Posts</h5>
	<?php get_related_posts_thumbnails(); ?>
</div><!-- #primary -->



<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>



	<?php get_sidebar(); ?>



<?php endif ?>



<?php get_footer(); ?>

