<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage GP
 * @since GP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<section style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/headers/chrg.jpg');" class="headblock">

		<div class="lineIcon">

			<div class="iconLink">
				<a href="http://chrg.gp.gov.ua/ua/site_map.html" class="map" title="Карта сайту"></a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home" title="Головна сторiнка"></a>
				<a href="http://chrg.gp.gov.ua/ua/order_appeal.html" class="mail" title="e-mail"></a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>?s=print" class="print" title="Друк"></a>
			</div>
		</div>
	</section>
</header>

<!-- Верхнее меню -->
<nav class="topMenu">
	<div class="mButton" >
		<a href="javascript:;">Про прокуратуру</a>
		<div class="topSubMenu">
			<div class="blockMenuLink">
				<div class="delimeter">
					<ul>
						<li>
							<a href="<?php echo get_permalink(5); ?>" >Інформація</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(7); ?>" >Керівництво</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(9); ?>" >Структура</a>
						</li>
					</ul>
				</div>
				<div class="second_column">
					<ul>
						<li>
							<a href="<?php echo get_permalink(11); ?>" style="color: yellow; padding-left: 10px;">Прокуратура Чернігівської області</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(13); ?>" style="color: yellow; padding-left: 10px;">Підпорядковані прокуратури</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="static_menu" >
		<a href="<?php echo get_category_link(1); ?>">Новини та публікації</a>
		<div class="topSubMenu">
			<div class="blockMenuLink">
			</div>
		</div>
	</div>
	<div class="mButton" >
		<a href="#">Приймальня громадян</a>
		<div class="topSubMenu">
			<div class="blockMenuLink">
				<div class="delimeter">
					<ul>
						<li>
							<a href="<?php echo get_permalink(19); ?>" >Графік та години прийому</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(21); ?>" >Контактна інформація</a>
						</li>
					</ul>
				</div>
				<div class="second_column">
					<ul>
						<li>
							<a href="<?php echo get_permalink(23); ?>" >Інформація про підпорядковані прокуратури</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="static_menu2" >
		<a href="<?php echo get_permalink(15); ?>">Забезпечення доступу до публічної інформації</a>
		<div class="topSubMenuRight">
			<div class="blockMenuLink">
			</div>
		</div>
	</div>
</nav>