<?php

/**

 * The sidebar containing the main widget area.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Astra

 * @since 1.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



$sidebar = apply_filters( 'astra_get_sidebar', 'sidebar-1' );



echo '<div ';

	echo astra_attr(

		'sidebar',

		array(

			'id'    => 'secondary',

			'class' => join( ' ', astra_get_secondary_class() ),

			'role'  => 'complementary',

		)

	);

	echo '>';

	?>



	<div class="sidebar-main" <?php echo apply_filters( 'astra_sidebar_data_attrs', '', $sidebar ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>



		<?php astra_sidebars_before(); ?>



		<?php if ( is_active_sidebar( $sidebar ) ) : ?>



			<?php dynamic_sidebar( $sidebar ); ?>



		<?php endif; ?>



		<?php astra_sidebars_after(); ?>


<!-- Yesayya1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6411152360257874"
     data-ad-slot="3296568448"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div><!-- .sidebar-main -->

</div><!-- #secondary -->

