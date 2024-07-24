<?php

/**
* Template Name: Home Page
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



		<?php astra_primary_content_top(); ?>


<h1 class="title single-title"><?php the_title(); ?></h1>
		<?php //astra_content_page_loop(); ?>	
		<?php the_content();?>
		<?php astra_primary_content_bottom(); ?>
		<div style="clear: both"></div>
 <h5 class="font-weight-light ast-mt-5 ast-mb-3" style="padding:45px 0px 0 0;">LATEST</h4>
 
<div class="ast-row latest-div" style="padding:25px 0px 0 0;">

  <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 15, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach($recent_posts as $post) : ?>
  <div class="ast-col-md-4 ast-mb-3"> <a href="<?php echo get_permalink($post['ID']) ?>"> <?php //echo get_the_post_thumbnail($post['ID'], 'medium'); ?>
    <h3 class="title mt-2"><?php echo $post['post_title'] ?></h3>
    </a> </div>
  <?php endforeach; wp_reset_query(); ?>
</div>

	
	
		
		


	</div><!-- #primary -->



<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>



	<?php get_sidebar(); ?>



<?php endif ?>

<?php /*?>
<script>
    jQuery(document).ready(function(){
        jQuery.get('<?php echo get_template_directory_uri() . "/ads/ad1.php" ?>', function(data, status){
            jQuery("#primary p:nth-of-type(1)").after(data);
        });
        jQuery.get('<?php echo get_template_directory_uri() . "/ads/ad2.php" ?>', function(data, status){
            jQuery("#primary p:nth-of-type(2)").after(data);
        });
		jQuery.get('<?php echo get_template_directory_uri() . "/ads/ad3.php" ?>', function(data, status){
            jQuery("#primary p:nth-of-type(4)").after(data);
        });
    });
</script><?php */?>
<?php get_footer(); ?>

