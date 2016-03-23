<?php
/**
 * The template for displaying all single posts.
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
get_header();
	$freesiaempire_settings = freesiaempire_get_theme_options();
	global $post;	
	global $freesiaempire_content_layout;
	if( $post ) {
		$layout = get_post_meta( $post->ID, 'freesiaempire_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}
	if( 'default' == $layout ) { //Settings from customizer
		if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')){ ?>

<div id="primary">
<?php }
	}else{ // for page/ post
		if(($layout != 'no-sidebar') && ($layout != 'full-width')){ ?>
<div id="primary">
	<?php }
	}?>
	<main id="main" class="site-main clearfix">
	<?php global $freesiaempire_settings;
	global $post;
	if( have_posts() ) {
		while( have_posts() ) {
			the_post(); ?>
		<?php $format = get_post_format(); ?>
			<article <?php post_class('post-format'.' format-'.$format); ?><?php  ?> id="post-<?php the_ID(); ?>">
				<?php $featured_image_display = $freesiaempire_settings['freesiaempire_single_post_image'];
					if($featured_image_display == 'on'):
						if( has_post_thumbnail() ) {
							$image = '';
							$title_attribute = apply_filters( 'the_title', get_the_title( $post->ID ) );
							$image .= '<figure class="post-featured-image">';
							$image .= '<a href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">';
							$image .= get_the_post_thumbnail( $post->ID, 'featured', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
							$image .='<span class="arrow"></span>';
							$image .= '</figure><!-- .post-featured-image -->';
							echo $image;
						}
					endif;
				} ?>
				<header class="entry-header">
					<div class="entry-meta">
						
					</div> <!-- .entry-meta -->
				</header> <!-- .entry-header -->
				<div class="entry-content">
				<?php the_content();
					wp_link_pages( array( 
						'before'			=> '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'freesia-empire' ),
						'after'			=> '</div>',
						'link_before'	=> '<span>',
						'link_after'	=> '</span>',
						'pagelink'		=> '%',
						'echo'			=> 1
					) ); ?>
				</div> <!-- .end entry-content -->
				<?php if( is_single() ) {
					$tag_list = get_the_tag_list( '', __( ' ', 'freesia-empire' ) ); ?>
					<footer class="entry-footer"> <span class="cat-links">
						<?php _e('Категория : ','freesia-empire');  the_category(', '); ?> </span> <!-- .cat-links -->
						<?php $tag_list = get_the_tag_list( '', __( ', ', 'freesia-empire' ) );
							if(!empty($tag_list)){ ?>
							<span class="tag-links">  <?php   echo $tag_list; ?> </span> <!-- .tag-links -->
							<?php } ?>
					</footer> <!-- .entry-meta -->
				<?php } ?>
			</article>
	<?php
		}
	else { ?>
	<h1 class="entry-title"> <?php _e( 'No Posts Found.', 'freesia-empire' ); ?> </h1>
	<?php } ?>
	</main> <!-- #main -->
	<?php 
	 if ( is_single() ) {
		if( is_attachment() ) { ?>
		<ul class="default-wp-page clearfix">
			<li class="previous"> <?php previous_image_link( false, __( '&larr; Previous', 'freesia-empire' ) ); ?> </li>
			<li class="next">  <?php next_image_link( false, __( 'Next &rarr;', 'freesia-empire' ) ); ?> </li>
		</ul>
		<?php } else { ?>
		<ul class="default-wp-page clearfix">
			<li class="previous"> <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'freesia-empire' ) . '</span> %title' ); ?> </li>
			<li class="next"> <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'freesia-empire' ) . '</span>' ); ?> </li>
		</ul>
			<?php }
					}
	comments_template();
	if( 'default' == $layout ) { //Settings from customizer
		if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}else{ // for page/post
	if(($layout != 'no-sidebar') && ($layout != 'full-width')){
		echo '</div><!-- #primary -->';
	}
}
get_sidebar();
get_footer(); ?>