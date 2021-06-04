<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo ('title'); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>    
    <nav class="skip-links">
		<ul>
			<li><a href="#menu">Skip to main menu</a></li>
			<li><a href="#main-content">Skip to main content</a></li>
		</ul>
	</nav>
    <header class="site-header">
		<div class="container">
			<a href="index.html" class="logo">
                <?php the_field('logo');?>
				<span class="screen-reader-text">Alex Spencer's Website</span>
			</a>
			<nav class="main-nav"role="navigation" aria-label="Menu principal">
				<button aria-expanded="false" aria-controls="menu" aria-label="Toggle menu">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
				<ul id="menu" class="menu" hidden>
                    <?php wp_nav_menu( array( 
                    'Menu principal' => 'main',
                    'container' => false,
                    'hidden',
                    ) ); ?>
				</ul>
			</nav>
		</div>
	</header>

    <main id="main-content">

