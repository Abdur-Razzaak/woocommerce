<?php
/**
 * The header for our theme
 * 
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php  bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
			<section class="search">
				<div class="container">
					Search
				</div>
			</section>
			<section class="top-bar">
				<div class="container">
					<div class="row">
						<div class="brand col-3">Logo</div>
						<div class="second-column col-9">
							<div class="acount">Account</div>
							<nav class="main-menu">
								<?php
									wp_nav_menu(
										array(
											'theme_location'	=> 'fancy_lab_main_menu'
										)
									);
								?>
							</nav>
						</div>						
					</div>
				</div>
			</section>
		</header>