<?php
/**
 * Displays the header content
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$freesiaempire_settings = freesiaempire_get_theme_options(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<!-- Masthead ============================================= -->
<header id="masthead" class="site-header">
	<?php
				if($header_image = $freesiaempire_settings['freesiaempire_display_header_image'] == 'top'){
					do_action('freesiaempire_header_image');
				}
				echo '<div class="top-header">
						<div class="container clearfix">';
						do_action('freesiaempire_site_branding');

						echo '<div class="menu-toggle">      
								<div class="line-one"></div>
								<div class="line-two"></div>
								<div class="line-three"></div>
							</div>';

						echo '<div class="header-info clearfix">';
							if(has_nav_menu('social-link') && $freesiaempire_settings['freesiaempire_top_social_icons'] == 0):
								echo '<div class="header-social-block">';
									do_action('social_links');
								echo '</div>'.'<!-- end .header-social-block -->';
							endif;
							if( is_active_sidebar( 'freesiaempire_header_info' )) {
								dynamic_sidebar( 'freesiaempire_header_info' );
							}
						echo ' </div> <!-- end .header-info -->';
						$search_form = $freesiaempire_settings['freesiaempire_search_custom_header'];
						if (1 != $search_form) { ?>
							<div id="search-toggle" class="header-search"></div>
							<div id="search-box" class="clearfix">
								<?php get_search_form();?>
							</div>  <!-- end #search-box -->
						<?php } 

					echo '</div> <!-- end .container -->
				</div> <!-- end .top-header -->';
			if($header_image = $freesiaempire_settings['freesiaempire_display_header_image'] == 'below'){
				do_action('freesiaempire_header_image');
			} 
			?>
	<!-- Main Header============================================= -->
	<div id="sticky_header">
		<div class="container clearfix">
			<!-- Main Nav ============================================= -->
			<?php
				if (has_nav_menu('primary')) { ?>
			<?php $args = array(
				'theme_location' => 'primary',
				'container'      => '',
				'items_wrap'     => '<ul class="menu">%3$s</ul>',
				); ?>
			<nav id="site-navigation" class="main-navigation clearfix">
				<?php wp_nav_menu($args);//extract the content from apperance-> nav menu ?>
			</nav> <!-- end #site-navigation -->
			<?php } else {// extract the content from page menu only ?>
			<nav id="site-navigation" class="main-navigation clearfix">
				<?php	wp_page_menu(array('menu_class' => 'menu')); ?>
			</nav> <!-- end #site-navigation -->
			<?php } ?>
		</div> <!-- end .container -->
	</div> <!-- end #sticky_header -->
	<?php
		$enable_slider = $freesiaempire_settings['freesiaempire_enable_slider'];
		freesiaempire_slider_value();
		if ($enable_slider=='frontpage'|| $enable_slider=='enitresite'){
			if(is_front_page() && ($enable_slider=='frontpage') ) {
				if($freesiaempire_settings['freesiaempire_slider_type'] == 'default_slider') {
						freesiaempire_page_sliders();
				}else{
						freesiaempire_image_sliders();
				}
			}
			if($enable_slider=='enitresite'){
				if($freesiaempire_settings['freesiaempire_slider_type'] == 'default_slider') {
						freesiaempire_page_sliders();
				}else{
						freesiaempire_image_sliders();
				}
			}
		}
		if(!is_page_template('page-templates/freesiaempire-corporate.php') && !is_page_template('alter-front-page-template.php')) {
			if (('' != freesiaempire_header_title()) || function_exists('bcn_display_list')) {
				if(is_home()){
					if($freesiaempire_settings['freesiaempire_blog_header_display'] == 'show'){ ?>
						<div class="page-header clearfix">
							<div class="container">
									<h2 class="page-title"><?php echo freesiaempire_header_title();?></h2> <!-- .page-title -->
									<?php freesiaempire_breadcrumb(); ?>
							</div> <!-- .container -->
						</div> <!-- .page-header -->
					<?php }
				} else { ?>
						<div class="page-header clearfix">
							<div class="container">
									<h1 class="page-title"><?php echo freesiaempire_header_title();?></h1> <!-- .page-title -->
									<?php freesiaempire_breadcrumb(); ?>
							</div> <!-- .container -->
						</div> <!-- .page-header -->
				<?php }
			}
		} ?>
</header> <!-- end #masthead -->

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function () {
				try {
					w.yaCounter35886050 = new Ya.Metrika({
						id: 35886050,
						clickmap: true,
						trackLinks: true,
						accurateTrackBounce: true,
						webvisor: true
					});
				} catch (e) {
				}
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () {
					n.parentNode.insertBefore(s, n);
				};
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else {
				f();
			}
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/35886050" style="position:absolute; left:-9999px;" alt=""/></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
	<!--    гугл аналистик-->
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-54699426-3', 'auto');
		ga('send', 'pageview');

	</script>

<!-- Main Page Start ============================================= -->
<div id="content">
<?php if (!is_page_template('page-templates/freesiaempire-corporate.php') ){ 
  if(is_page_template('three-column-blog-template.php') || is_page_template('our-team-template.php') || is_page_template('about-us-template.php') || is_page_template('portfolio-template.php') ){

	}else{?>
<div class="container clearfix">
<?php }
	} ?>