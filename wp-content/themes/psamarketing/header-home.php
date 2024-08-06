<?php
/**
 * The header for main page our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psamarketing
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="prefetch prerender" href="<?php bloginfo('template_directory') ?>/img/hero_002.webp" />
	<link rel="prefetch prerender" href="<?php bloginfo('template_directory') ?>/img/slide_bg_001.jpg.webp" />
	<?php wp_head(); ?>
    <title>PSA Marketing - Amazon FBA, Online Arbitrage, Kontoentsperrung</title>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <main class="main main-page">
        <header class="header">
			   <div class="mobile-wrapper" id="mobile-wrapper">
                                    <div class="mobile-close">
                                        <img src="<?php bloginfo('template_directory') ?>/img/close_icon.svg" alt="">
                                    </div>
                                <ul class="header-menu df jcsb aic">
																												                    <?php
                    if ($current_language == "de") {
                        wp_nav_menu(array(
                            "menu" => "main-menu"
                        ));
                    } else {
                        wp_nav_menu(array(
                            "menu" => "menu-en"
                        ));
                    }
                    ?>

                                </ul>
				         <ul class="header-social df aic jcsb">
                            <li><a href="https://youtube.com/c/PSAMarketing" target="_blank">Youtube</a></li>
							<div class="divider">/</div>
                            <li><a href="https://www.instagram.com/psamarketingde/" target="_blank">Instagram</a></li>
							<div class="divider">/</div>
                            <li><a href="https://facebook.com/psamarketingDE" target="_blank">Facebook</a></li>
                        </ul>
								<ul class="df aic mobile-lang">
                                    <?php pll_the_languages( array( 'show_flags' => 0, 'show_names' => 1 ) ); ?>
                                </ul> 
                            </div>
            <div class="header-stars">
                <a class="header-rating df aic" title="Kundenbewertungen & Erfahrungen zu PSA Marketing. Mehr Infos anzeigen." target="_blank" href="https://www.provenexpert.com/psa-marketing/">
                    <img src="<?php bloginfo('template_directory') ?>/img/stars2.svg" alt="" height="10">
                    <h6>348 Bewertungen auf ProvenExpert.com</h6>
                </a>
            </div>
            <div class="header-lead">
                <div class="container df jcsb aic">
                    <div class="header-lead__block">
                        <a href="https://psamarketing.de/e-book/?utm_source=startseite" target="_blank">
                            <div class="row df aic">
                                <div class="image">
                                    <img src="<?php bloginfo('template_directory') ?>/img/fire.webp" alt="">
                                </div>
                                <div class="text">
                                    <h5>Die 7 Schritte für den sicheren Start in den Vertrieb von Handelsware auf Amazon - gratis</h5>
                                    <h6>Erhalte sofortigen Zugang zum E-Book mit den Insider Hacks zum Amazon Vertrieb</h6>
                                </div>
                            </div>    
                        </a>
                    </div>
                    <div class="header-lead__block">
                        <a href="https://psamarketing.de/e-book/?utm_source=startseite" target="_blank">
                            <button class="primary-button">Kostenlos herunterladen PDF</button>
                        </a>
                    </div>
                </div>
            </div>
			<div class="header-bottom">
				            <div class="header-nav">
                <div class="container df jcsb">

                    <ul class="header-menu df jcsb aic">
											                    <?php
                    if ($current_language == "de") {
                        wp_nav_menu(array(
                            "menu" => "main-menu"
                        ));
                    } else {
                        wp_nav_menu(array(
                            "menu" => "menu-en"
                        ));
                    }
                    ?>
                    </ul>
                    <div class="header-links df aic jcsb">
                        <ul class="header-social df aic jcsb">
                            <li><a href="https://youtube.com/c/PSAMarketing" target="_blank">Youtube</a></li>
							<div class="divider">/</div>
                            <li><a href="https://www.instagram.com/psamarketingde/" target="_blank">Instagram</a></li>
							<div class="divider">/</div>
                            <li><a href="https://facebook.com/psamarketingDE" target="_blank">Facebook</a></li>
                        </ul>
                            <div class="dropbtn df aic" id="lang">
                                <img src="<?php bloginfo('template_directory') ?>/img/globe.svg" alt="">
                                <div class="lang-select">
                                    <div class="en">
                                        EN
                                    </div>
                                    <div class="de">
                                        DE
                                    </div>
                                </div>
                                <div class="dropdown-content">
                                    <ul class="switch df">
                                        
                                        <?php pll_the_languages( array( 'show_flags' => 0, 'show_names' => 1, 'hide_current' => 0  ) ); ?>
                                    </ul> 
                                </div>
                            </div>

                           <!-- <div class="header-lang">
						        <ul class="switch df aic">
						        	<img src="<?php bloginfo('template_directory') ?>/img/globe.svg" alt="">
						        	<?php pll_the_languages( array( 'show_flags' => 0, 'show_names' => 1, 'hide_current' => 1  ) ); ?>
                                </ul> 
                            </div>    -->                       
                        
                    </div>
                </div>
                <!--header-nav-->
            </div>
            <div class="header-main">
                <div class="container df jcsb aic">
                    <div class="header-logo df aic">
                        <div class="header-logo__image">
                            <a href="/">
							    <img src="<?php bloginfo('template_directory') ?>/img/logo_001.png" alt="logo">
							</a>
                        </div>
                        <div class="header-logo__slash"></div>
                        <div class="header-logo__span">
                            <?php echo get_field('site_subtitle', pll_current_language('slug')); ?>
                        </div>
                    </div>
                    <div class="header-cta df aic">
                        <div class="header-phone home desktop">
                            <a href="https://psamarketing.de/tel:+49%20(0)%20221%20560%2094%20145" class="df aic">
                                <!--<div class="header-phone__icon desktop">
                                    <svg>
									<path d="M16.1891 4.0625C17.5672 4.43236 18.8239 5.15821 19.8328 6.16719C20.8418 7.17617 21.5677 8.43279 21.9375 9.81094" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.3461 7.20081C16.1749 7.42094 16.9309 7.85627 17.5373 8.46269C18.1437 9.06911 18.5791 9.82506 18.7992 10.6539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.39453 12.675C10.2306 14.4015 11.6268 15.7941 13.3555 16.6258C13.483 16.6861 13.624 16.7123 13.7647 16.7016C13.9054 16.6909 14.0409 16.6438 14.1578 16.5648L16.6969 14.8687C16.8091 14.7926 16.9387 14.7462 17.0737 14.7338C17.2086 14.7213 17.3446 14.7433 17.4688 14.7976L22.2219 16.839C22.3843 16.9066 22.52 17.0258 22.6081 17.1781C22.6962 17.3304 22.7318 17.5075 22.7094 17.682C22.5587 18.8578 21.9848 19.9385 21.095 20.7217C20.2052 21.505 19.0604 21.9372 17.875 21.9375C14.2117 21.9375 10.6984 20.4822 8.10809 17.8919C5.51774 15.3015 4.0625 11.7883 4.0625 8.12497C4.06277 6.93953 4.49497 5.7948 5.27823 4.90499C6.06149 4.01517 7.14214 3.44125 8.31797 3.2906C8.49249 3.26818 8.66955 3.30375 8.82187 3.39184C8.97419 3.47993 9.09332 3.61565 9.16094 3.7781L11.2023 8.54138C11.2554 8.66361 11.2776 8.79702 11.267 8.92985C11.2564 9.06268 11.2132 9.19086 11.1414 9.3031L9.44531 11.8828C9.3698 11.9995 9.32548 12.1336 9.31659 12.2723C9.3077 12.411 9.33454 12.5496 9.39453 12.675Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
                                </div>-->
								<div class="header-phone__icon">
<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.8">
<path d="M16.1891 4.0625C17.5672 4.43236 18.8239 5.15821 19.8328 6.16719C20.8418 7.17617 21.5677 8.43279 21.9375 9.81094" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.3461 7.20081C16.1749 7.42094 16.9309 7.85627 17.5373 8.46269C18.1437 9.06911 18.5791 9.82506 18.7992 10.6539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.39453 12.675C10.2306 14.4015 11.6268 15.7941 13.3555 16.6258C13.483 16.6861 13.624 16.7123 13.7647 16.7016C13.9054 16.6909 14.0409 16.6438 14.1578 16.5648L16.6969 14.8687C16.8091 14.7926 16.9387 14.7462 17.0737 14.7338C17.2086 14.7213 17.3446 14.7433 17.4688 14.7976L22.2219 16.839C22.3843 16.9066 22.52 17.0258 22.6081 17.1781C22.6962 17.3304 22.7318 17.5075 22.7094 17.682C22.5587 18.8578 21.9848 19.9385 21.095 20.7217C20.2052 21.505 19.0604 21.9372 17.875 21.9375C14.2117 21.9375 10.6984 20.4822 8.10809 17.8919C5.51774 15.3015 4.0625 11.7883 4.0625 8.12497C4.06277 6.93953 4.49497 5.7948 5.27823 4.90499C6.06149 4.01517 7.14214 3.44125 8.31797 3.2906C8.49249 3.26818 8.66955 3.30375 8.82187 3.39184C8.97419 3.47993 9.09332 3.61565 9.16094 3.7781L11.2023 8.54138C11.2554 8.66361 11.2776 8.79702 11.267 8.92985C11.2564 9.06268 11.2132 9.19086 11.1414 9.3031L9.44531 11.8828C9.3698 11.9995 9.32548 12.1336 9.31659 12.2723C9.3077 12.411 9.33454 12.5496 9.39453 12.675Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>
								</div>
                                <div class="header-phone__text">
                                    +49 (0) 221 560 94 145
                                </div>
                            </a>
                        </div>
                        <div class="header-button">
                            <a href="<?php echo get_field('header-link', pll_current_language('slug')); ?>"><?php echo get_field('header-button', pll_current_language('slug')); ?></a>
                        </div>
						<div class="tel-button mobile">
							<a href="https://psamarketing.de/tel:+49%20(0)%20221%20560%2094%20145">
								<img src="<?php bloginfo('template_directory') ?>/img/tel-button.svg" alt="tel">
							</a>
						</div>
                        <div class="mobile-menu">
                            <!--<span></span>-->
							<img src="<?php bloginfo('template_directory') ?>/img/burg.svg" alt="youtube">
                        </div>
                    </div>
                </div>
				<div class="mobile-social mobile">
                    <div class="container df aic jcsb">
                        <div class="mobile-link">
                            <a class="df aic" href="https://youtube.com/c/PSAMarketing" target="_blank">
                                <div class="mobile-link__image">
                                    <img src="<?php bloginfo('template_directory') ?>/img/youtube_white.svg" alt="youtube">
                                </div>
                                <p>Youtube</p>
                            </a>
                        </div>
						
                        <div class="mobile-link">
                            <a class="df aic" href="https://www.instagram.com/psamarketingde/" target="_blank">
                                <div class="mobile-link__image">
                                    <img src="<?php bloginfo('template_directory') ?>/img/insta_white.svg" alt="instagram">
                                </div>
                                <p>Instagram</p>
                            </a>
                        </div>
						
                        <div class="mobile-link">
                            <a class="df aic" href="https://facebook.com/psamarketingDE" target="_blank">
                                <div class="mobile-link__image">
                                    <img src="<?php bloginfo('template_directory') ?>/img/fb_white.svg" alt="facebook">
                                </div>
                                <p>Facebook</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
			</div>
        </header>
