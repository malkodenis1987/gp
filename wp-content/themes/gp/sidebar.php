<?php
/**
* The sidebar containing the main widget area
*
* @package WordPress
* @subpackage GP
* @since GP 1.0
*/
?>
<section class="leftBlock">
    <div class="bgMenu"></div>
    <nav class="leftMenu">
        <?php
        $args = array(
            'menu' => 'Бокове Меню',
            'container' => '',
            'menu_class' => 'level1',
            'link_before' => '<b></b>',
            'walker' => new WPDocs_Walker_Nav_Menu()
        );
        wp_nav_menu($args);
        ?>
    </nav>
    <div class="clear"></div>

    <section class="linkBlock" style="margin-top: 1em;">
        <ul>
            <li class="searchLink">
                <a href="http://chrg.gp.gov.ua/ua/search.html">
                    <p>Пошук по сайту</p>
                </a></li>
            <li class="autorization">
                <a href="javascript:void(0)" onclick="openbox('Авторизація на порталі', 1,'','')">
                    <p>Авторизація на порталі</p>
                </a>
            </li>
        </ul>
    </section>

	<?php
	if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
		<div id="secondary" class="secondary">

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav id="social-navigation" class="social-navigation" role="navigation">
					<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="widget-area" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div><!-- .widget-area -->
			<?php endif; ?>

		</div><!-- .secondary -->

	<?php endif; ?>

</section>