<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Astra

 * @since 1.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



?>

			<?php astra_content_bottom(); ?>



			</div> <!-- ast-container -->



		</div><!-- #content -->



		<?php astra_content_after(); ?>



		<?php astra_footer_before(); ?>



		<?php astra_footer(); ?>



		<?php astra_footer_after(); ?>



	</div><!-- #page -->



	<?php astra_body_bottom(); ?>



	<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161824797-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161824797-1');
</script>

<script>
 let url = window.location.href;
 url_query=url.split('?')[1];
 if(url_query==undefined){

 }else{
    url = url.split('?')[0];
    window.location.href=url;
 }
</script>
	</body>

</html>

