<?php global $naturalbeauty_options; ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Md. Mostak Shahid">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
	<div class="logo-section bg-white">
		<div class="content-wrap"><?php echo do_shortcode( '[site-identity container_class="d-flex" class="ml-auto mr-auto mt-4 mb-4"]' ); ?></div>
	</div>
	<header id="main-header" class="bg-white">
		<nav class="navbar navbar-expand-md navbar-light">
			<a class="navbar-brand d-md-none d-lg-none" href="#">
				<?php if (has_site_icon()) : ?>
					<img class="img-responsive img-fluid" src="<?php echo get_site_icon_url(32)?>" alt="Logo">
				<?php else : ?>
					<?php echo bloginfo( 'name' ); ?>
				<?php endif; ?>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			wp_nav_menu([
				'menu'            => 'mainmenu',
				'theme_location'  => 'mainmenu',
				'container'       => 'div',
				'container_id'    => 'collapsibleNavbar',
				'container_class' => 'collapse navbar-collapse',
				'menu_id'         => false,
				'menu_class'      => 'navbar-nav ml-auto mr-auto',
				'depth'           => 2,
				'fallback_cb'     => 'bs4navwalker::fallback',
				'walker'          => new bs4navwalker()
				]);
			?>
		</nav>
	</header>
	<?php if (!is_front_page()) : ?>
		<section id="page-title" class="bg-white">
			<div class="content-wrap">
				<div class="container">
					<?php 
					if (is_home()) :
						$page_for_posts = get_option( 'page_for_posts' );
					$title = get_the_title($page_for_posts);
					elseif (is_404()) :
						$title = '404 Page';
					else :
						$title = get_the_title();
					endif; 
					?>
					<span class="heading"><?php echo $title ?></span>
				</div>
			</div>
		</section>
	<?php endif ?>