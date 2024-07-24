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

<html <?php language_attributes(); ?>>

<head>

<?php astra_head_top(); ?>
<link rel="dns-prefetch" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="dns-prefetch" href="https://pagead2.googlesyndication.com">
<link rel="preconnect" href="https://pagead2.googlesyndication.com">
<link rel="dns-prefetch" href="https://marketingplatform.google.com">
<link rel="preconnect" href="https://marketingplatform.google.com">
<link rel="dns-prefetch" href="https://marketingplatform.google.com">
<link rel="preconnect" href="https://marketingplatform.google.com">
<link rel="dns-prefetch" href="https://marketingplatform.google.com/about/analytics">
<link rel="preconnect" href="https://marketingplatform.google.com/about/analytics">
<link rel="dns-prefetch" href="https://lh3.googleusercontent.com">
<link rel="preconnect" href="https://lh3.googleusercontent.com">
<link rel="dns-prefetch" href="https://googleads.g.doubleclick.net">
<link rel="preconnect" href="https://googleads.g.doubleclick.net">
<link rel="dns-prefetch" href="https://tpc.googlesyndication.com">
<link rel="preconnect" href="https://tpc.googlesyndication.com">
<link rel="dns-prefetch" href="https://www.gstatic.com">
<link rel="preconnect" href="https://www.gstatic.com">
<link rel="dns-prefetch" href="https://www.cmportal.in">
<link rel="preconnect" href="https://www.cmportal.in">
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com"
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="msvalidate.01" content="A3A59281A39600F182FFFB95F7CB414C" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="https://gmpg.org/xfn/11">

<script data-ad-client="ca-pub-6411152360257874" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php $product_schema = get_post_meta($post->ID)['Product Schema'][0];
if(!empty($product_schema)){ echo $product_schema;}?>
 <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["EntertainmentApplication", "WebApplication"],
      "name": "<?php wp_title(''); ?>",
      "operatingSystem": "All",
      "applicationCategory": "BusinessApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "ratingCount": "50"
      },
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      }
    }
</script>
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

