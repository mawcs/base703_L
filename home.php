<?php
/**
 * The home page template file
 *
 * This is the dedicated home page.
 *
 * @package SevenOThree
 * @package 703base
 * @since 703Base 0.1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/vend/wow.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/homepage/js/p.js"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/homepage/font/raleway.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/homepage/font/socicon.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/less/homepage.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="homepage" >
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-content">

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
				<?php wp_nav_menu( array( 'theme_location' => LAYERS_THEME_SLUG . '-primary' ,'container' => FALSE, 'fallback_cb' => 'layers_menu_fallback' )); ?>
			</nav><!-- #site-navigation -->

			<div class="site-branding"><!--TODO Fix the z-index issue-->

				<?php $logo = get_option( 'site_logo' ); ?>

				<?php if ( $logo ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo-link" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo esc_url( $logo['url'] ) ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>
			</div><!-- .site-branding -->

		</div>
	</header><!-- #masthead -->

	<section id="hero" class="wow">
		<div class="hero-content">
			<div class="call-to-action-block">
				<div id="lipsum">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt tincidunt cursus. Nullam imperdiet, orci ut lobortis maximus, dui lacus imperdiet lectus, nec molestie libero metus sed nibh. Proin vulputate rhoncus euismod. Pellentesque turpis ligula, vestibulum vitae iaculis sed, cursus sed felis. Maecenas viverra vehicula lorem at ornare. Integer dignissim ligula nunc, et euismod lacus rutrum nec. Pellentesque nec nisl eu arcu blandit bibendum. Aenean vestibulum, massa eu fringilla imperdiet, mauris justo lacinia massa, sed semper ex turpis eget ante. Pellentesque tristique diam at augue viverra tempus. Praesent facilisis enim et urna tincidunt malesuada eget et sapien.
					</p>

				</div>
			</div>
		</div>
	</section>

	<section id="currentstuff-block">
		<div id="lipsum ">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt tincidunt cursus. Nullam imperdiet, orci ut lobortis maximus, dui lacus imperdiet lectus, nec molestie libero metus sed nibh. Proin vulputate rhoncus euismod. Pellentesque turpis ligula, vestibulum vitae iaculis sed, cursus sed felis. Maecenas viverra vehicula lorem at ornare. Integer dignissim ligula nunc, et euismod lacus rutrum nec. Pellentesque nec nisl eu arcu blandit bibendum. Aenean vestibulum, massa eu fringilla imperdiet, mauris justo lacinia massa, sed semper ex turpis eget ante. Pellentesque tristique diam at augue viverra tempus. Praesent facilisis enim et urna tincidunt malesuada eget et sapien.
			</p>
			<p>
				Nulla id semper ipsum. Duis aliquet dignissim feugiat. Maecenas tempor est urna, in posuere mi cursus a. Cras non orci vitae lorem sagittis cursus nec eget odio. Etiam tincidunt pharetra ultricies. Nam consequat suscipit est, placerat lobortis leo consequat eget. Vestibulum nisi urna, aliquam eu vulputate ut, congue nec sapien. Curabitur viverra sodales tellus in sollicitudin. Curabitur ornare urna id turpis aliquet, ac aliquam risus venenatis. In nec ullamcorper enim, vel iaculis ex. Duis eu tortor vitae nulla fermentum laoreet. Suspendisse dolor urna, posuere vitae arcu eu, blandit tempus nisl. Ut sed consectetur velit, non pharetra orci.
			</p>
			<p>
				Aenean congue a purus eget elementum. Aliquam nec dui suscipit, rutrum erat non, vestibulum elit. Integer porta volutpat lectus vel faucibus. Aliquam lobortis molestie sem, id bibendum risus sodales sit amet. Quisque euismod sapien vel libero semper maximus. Proin nec nibh arcu. Ut molestie lectus ac congue consequat. Phasellus pretium consequat tempor. Nulla at lectus aliquam ligula consectetur sagittis. Nam ligula massa, condimentum quis neque sit amet, vulputate iaculis leo. Ut eleifend mauris sit amet sem finibus facilisis. Integer blandit vulputate rutrum. Fusce eros mauris, pretium non dignissim sed, laoreet vel erat. Proin condimentum varius hendrerit. Aliquam vehicula ante nec nibh volutpat, in hendrerit velit gravida.
			</p>
			<p>
				Nulla facilisi. Nullam ultricies posuere nulla, at tristique dui viverra ac. Suspendisse gravida semper mi sed luctus. Vivamus malesuada lacus non velit vulputate maximus. Duis in nisl vel ipsum porttitor mollis. Nunc sollicitudin lacus molestie feugiat eleifend. Mauris id orci at lorem mollis gravida. Donec odio nunc, condimentum sed purus sit amet, vestibulum dignissim justo. Curabitur sollicitudin dui id metus bibendum maximus. Nulla sagittis ultrices ligula id elementum. Integer in neque quam. Nam fringilla tincidunt massa laoreet dignissim. Praesent augue metus, tempus sit amet finibus ut, luctus sit amet tellus.
			</p>
			<p>
				Proin vel sodales nulla. Phasellus ac massa in libero congue fermentum sed et nisl. Mauris sit amet lacinia purus, non viverra erat. Mauris placerat ante a leo maximus, a cursus sem suscipit. In dolor eros, luctus laoreet iaculis ut, dapibus vitae dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque pretium nulla eu blandit commodo. Nunc odio erat, dapibus ac massa non, malesuada pharetra tellus.
			</p>
		</div>
	</section>

	<section id="homepage-video">
		<div id="lipsum">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt tincidunt cursus. Nullam imperdiet, orci ut lobortis maximus, dui lacus imperdiet lectus, nec molestie libero metus sed nibh. Proin vulputate rhoncus euismod. Pellentesque turpis ligula, vestibulum vitae iaculis sed, cursus sed felis. Maecenas viverra vehicula lorem at ornare. Integer dignissim ligula nunc, et euismod lacus rutrum nec. Pellentesque nec nisl eu arcu blandit bibendum. Aenean vestibulum, massa eu fringilla imperdiet, mauris justo lacinia massa, sed semper ex turpis eget ante. Pellentesque tristique diam at augue viverra tempus. Praesent facilisis enim et urna tincidunt malesuada eget et sapien.
			</p>
			<p>
				Nulla id semper ipsum. Duis aliquet dignissim feugiat. Maecenas tempor est urna, in posuere mi cursus a. Cras non orci vitae lorem sagittis cursus nec eget odio. Etiam tincidunt pharetra ultricies. Nam consequat suscipit est, placerat lobortis leo consequat eget. Vestibulum nisi urna, aliquam eu vulputate ut, congue nec sapien. Curabitur viverra sodales tellus in sollicitudin. Curabitur ornare urna id turpis aliquet, ac aliquam risus venenatis. In nec ullamcorper enim, vel iaculis ex. Duis eu tortor vitae nulla fermentum laoreet. Suspendisse dolor urna, posuere vitae arcu eu, blandit tempus nisl. Ut sed consectetur velit, non pharetra orci.
			</p>
			<p>
				Aenean congue a purus eget elementum. Aliquam nec dui suscipit, rutrum erat non, vestibulum elit. Integer porta volutpat lectus vel faucibus. Aliquam lobortis molestie sem, id bibendum risus sodales sit amet. Quisque euismod sapien vel libero semper maximus. Proin nec nibh arcu. Ut molestie lectus ac congue consequat. Phasellus pretium consequat tempor. Nulla at lectus aliquam ligula consectetur sagittis. Nam ligula massa, condimentum quis neque sit amet, vulputate iaculis leo. Ut eleifend mauris sit amet sem finibus facilisis. Integer blandit vulputate rutrum. Fusce eros mauris, pretium non dignissim sed, laoreet vel erat. Proin condimentum varius hendrerit. Aliquam vehicula ante nec nibh volutpat, in hendrerit velit gravida.
			</p>
			<p>
				Nulla facilisi. Nullam ultricies posuere nulla, at tristique dui viverra ac. Suspendisse gravida semper mi sed luctus. Vivamus malesuada lacus non velit vulputate maximus. Duis in nisl vel ipsum porttitor mollis. Nunc sollicitudin lacus molestie feugiat eleifend. Mauris id orci at lorem mollis gravida. Donec odio nunc, condimentum sed purus sit amet, vestibulum dignissim justo. Curabitur sollicitudin dui id metus bibendum maximus. Nulla sagittis ultrices ligula id elementum. Integer in neque quam. Nam fringilla tincidunt massa laoreet dignissim. Praesent augue metus, tempus sit amet finibus ut, luctus sit amet tellus.
			</p>
			<p>
				Proin vel sodales nulla. Phasellus ac massa in libero congue fermentum sed et nisl. Mauris sit amet lacinia purus, non viverra erat. Mauris placerat ante a leo maximus, a cursus sem suscipit. In dolor eros, luctus laoreet iaculis ut, dapibus vitae dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque pretium nulla eu blandit commodo. Nunc odio erat, dapibus ac massa non, malesuada pharetra tellus.
			</p>
		</div>
	</section>

	<footer id="homepage-footer">
		<div class="homepage-footer-wrapper wow">

			<div class="footer-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div>

			<div class="newsletter-signup">
				

			</div>

			<div class="social-icons">
				<a href="https://www.facebook.com/moversmakersxyz"><span class="socicon socicon-facebook"></span></a>
				<a href="https://twitter.com/moversmakersxyz"><span class="socicon socicon-twitter"></span></a>
				<!--<a href="https://www.linkedin.com/in/><span class="socicon socicon-linkedin"></span></a>-->
				<a href="https://google.com/+MoversandMakersXYZ"><span class="socicon socicon-google"></span></a>
				<a href="https://www.youtube.com/channel/UCozq9mc4zdDvJlhaeqD4igQ"><span class="socicon socicon-youtube"></span></a>
				<!--<a href=""><span class="socicon socicon-vimeo"></span></a>-->
				<!--<a href=""><span class="socicon socicon-soundcloud"></span></a>-->
				<a href="rss"><span class="socicon socicon-rss"></span></a>
			</div>

			<div class="subfooter">
				<span class="copyright">&copy;2016 Williamson Creative, LLC. DBA 703 Creative. All Rights Reserved</span>
				<ul class="subnav">
					<li><a href="sitemap">Sitemap</a></li>
					<li><a href="privacy">Privacy</a></li>
					<li><a href="terms">Terms</a></li>
				</ul>
			</div>

		</div>


	</footer>


<?php wp_footer(); ?>

</body>
</html>