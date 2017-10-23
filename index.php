<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mobile Nav Test</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
	</head>
	<body>

		<header class="site-header"></header>
			<div class="wrap">
				<button id="mobile-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="menu-toggle-text screen-reader-text"><?php esc_html_e( 'Menu', 'timtam' ); ?></span>
				</button>

				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'menu dropdown animated',
						) );
					?>

					<?php
						// @codingStandardsIgnoreStart
						echo _get_social_customizer();
						// @codingStandardsIgnoreEnd
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .wrap -->
	</body>
</html>
