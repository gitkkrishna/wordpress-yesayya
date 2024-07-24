<?php
/** 
 * Template Name: Portuguese  Language
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */
?>

<?php

/**

 * The header for Astra Theme.

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Astra

 * @since 1.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



?><!DOCTYPE html>

<?php astra_html_before(); ?>

<html lang="pt-BR">

<head>

<?php astra_head_top(); ?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="msvalidate.01" content="A3A59281A39600F182FFFB95F7CB414C" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="https://gmpg.org/xfn/11">

<script data-ad-client="ca-pub-6411152360257874" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<?php wp_head(); ?>

<?php astra_head_bottom(); ?>

</head>



<body <?php astra_schema_body(); ?> <?php body_class(); ?>>



<?php astra_body_top(); ?>

<?php wp_body_open(); ?>

<div 

	<?php

	echo astra_attr(

		'site',

		array(

			'id'    => 'page',

			'class' => 'hfeed site',

		)

	);

	?>

>

	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>



	<?php astra_header_before(); ?>



	<?php astra_header(); ?>



	<?php astra_header_after(); ?>



	<?php astra_content_before(); ?>



	<div id="content" class="site-content">



		<div class="ast-container">



		<?php astra_content_top(); ?>

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
</script></div>
<div class="related-posts">
	<h5>Popular Posts</h5>
	<?php get_related_posts_thumbnails(); ?>
</div>
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
	</div><!-- #primary -->



<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>



	<?php get_sidebar(); ?>



<?php endif ?>



<?php get_footer(); ?>