<?php
/**
 * The template for displaying content.
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
$freesiaempire_settings = freesiaempire_get_theme_options();
global $post; ?>
	<?php
	$format = get_post_format(); ?>
	<article <?php post_class('post-format'.' format-'.$format); ?> id="post-<?php the_ID(); ?>">
	<?php
		$freesiaempire_blog_post_image = $freesiaempire_settings['freesiaempire_blog_post_image'];
				if( has_post_thumbnail() && $freesiaempire_blog_post_image == 'on') {
					$image = '';
					$title_attribute = apply_filters( 'the_title', get_the_title( $post->ID ) );
					$image .= '<figure class="post-featured-image">';
					$image .= '<a href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">';
					$image .= get_the_post_thumbnail( $post->ID, 'post-thumbnails', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
					$image .= '</figure><!-- end.post-featured-image  -->';
					echo $image;
				} ?>
		<header class="entry-header">
			<h2 class="entry-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"> <?php the_title();?> </a> </h2> <!-- end.entry-title -->
		<?php 
			$entry_format_meta_blog = $freesiaempire_settings['freesiaempire_entry_meta_blog'];
			if($entry_format_meta_blog == 'show-meta' ){?>
			<div class="entry-meta">
			
			</div> <!-- end .entry-meta -->
		<?php } ?>
		</header> <!-- end .entry-header -->
		<div class="entry-content">
			<?php $content_display = $freesiaempire_settings['freesiaempire_blog_content_layout'];
				if($content_display == 'fullcontent_display'):
					the_content();
				else:
					the_excerpt();
				endif; ?>
		</div> <!-- end .entry-content -->
		<?php 
			$excerpt = get_the_excerpt();
			$content = get_the_content();
			$disable_entry_format = $freesiaempire_settings['freesiaempire_entry_format_blog'];
			if($disable_entry_format =='show' || $disable_entry_format =='show-button' || $disable_entry_format =='hide-button'){ ?>
		<footer class="entry-footer">
			<?php if($disable_entry_format !='show-button'){ ?>
			<span class="cat-links">
			<?php _e('Категория : ','freesia-empire');  the_category(', '); ?>
			</span> <!-- end .cat-links -->
			<?php $tag_list = get_the_tag_list( '', __( ', ', 'freesia-empire' ) );
				if(!empty($tag_list)){ ?>
				<span class="tag-links">
				<?php   echo $tag_list; ?>
				</span> <!-- end .tag-links -->
				<?php } 
			}
			$freesiaempire_tag_text = $freesiaempire_settings['freesiaempire_tag_text'];
			if(strlen($excerpt) < strlen($content) && $disable_entry_format !='hide-button'){ ?>
			<a class="more-link" title="<?php the_title( '', '', false );?>" href="<?php the_permalink();?>">
			<?php
				if($freesiaempire_tag_text == 'Read More' || $freesiaempire_tag_text == ''):
					_e('Читать дальше', 'freesia-empire');
				else:
					echo esc_attr($freesiaempire_tag_text);
				endif;?></a>
			<?php } ?>
		</footer> <!-- .entry-meta -->
		<?php
		} ?>
		</article>