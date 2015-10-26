<?php
/**
 * This template is used for displaying posts in post lists
 * Path file: /childe-theme/partials
 * Note: File name just content-list.php , remove  _2_column
 * View demo: https://drive.google.com/file/d/0B2Hg2fExEQHHQlRGLVRoZDNkVzA/view
 * @package Layers
 * @since Layers 1.0.0
 */

global $post, $layers_post_meta_to_display; ?>


<article id="post-<?php the_ID(); ?>" class="column span-6 post-list-gl">
	<?php do_action('layers_before_list_post_title'); ?>
	
	<?php do_action('layers_after_list_post_title'); ?>

	<?php /**
	* Display the Featured Thumbnail
	*/
echo layers_post_featured_media( array( 'postid' => get_the_ID(), 'wrap_class' => 'thumbnail push-bottom', 'size' => 'large' ) ); 

?>
<div class="date-list-post-gl">
<?php echo get_the_date(); ?>
</div>
	<header class="section-title small	">
		<?php do_action('layers_before_list_title'); ?>
		<h1 class="heading list-post-gl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php do_action('layers_after_list_title'); ?>
	</header>
	<?php if( '' != get_the_excerpt() || '' != get_the_content() ) { ?>
		<?php do_action('layers_before_list_post_content'); ?>
		<div class="copy">
			<?php /**
			* Display the Excerpt
			*/

			echo get_the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" ><?php _e( 'xem thêm' , 'layerswp' ); ?></a>

		</div>
		<?php do_action('layers_after_list_post_content'); ?>
	<?php } ?>

	<?php do_action('layers_before_list_post_meta'); ?>
		
	<?php do_action('layers_after_list_post_meta'); ?>

	<?php do_action('layers_before_list_read_more'); ?>
	<?php do_action('layers_after_list_read_more'); ?>
</article>
