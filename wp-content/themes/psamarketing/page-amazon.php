<?php

/*
Template Name: Amazon
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="amazon-hero">
            <div class="container">
                <div class="amazon-hero__logo">
                    <img src="<?php bloginfo('template_directory') ?>/img/new-amazon-logo.webp" alt="">
                </div>
                <h1><?php echo get_field('hero-title'); ?></h1>
                <h6><?php echo get_field('hero-text'); ?></h6>
                <div class="amazon-hero__button">
                    <a href="/contact">
                        <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                    </a>
                </div>
                <div class="amazon-hero__icon">
                    <img src="<?php bloginfo('template_directory') ?>/img/mouse.webp" alt="">
                </div>
            </div>
        </section>
        <section class="amazon-services">
			<div class="container mobile">
				<h2><?php echo get_field('services-title'); ?></h2>
			</div>
            <div class="container df aic jcsb">
				
                <div class="amazon-services__block">
					<h2 class="desktop"><?php echo get_field('services-title'); ?></h2>
                    <ul>
                        <li><?php echo get_field('service_1'); ?></li>
                        <li><?php echo get_field('service_2'); ?></li>
                        <li><?php echo get_field('service_3'); ?></li>
                        <li><?php echo get_field('service_4'); ?></li>
                        <li><?php echo get_field('service_5'); ?></li>
                        <li><?php echo get_field('service_6'); ?></li>
                    </ul>
                    <div class="amazon-services__button amazon-hero__button">
                        <a href="/contact">
                            <button class="primary-button"><?php echo get_field('service_button'); ?></button>
                        </a>
                    </div>
                </div>
                <div class="amazon-services__block amazon-photo__block">
                    <img src="<?php bloginfo('template_directory') ?>/img/new_amazon_first.webp" alt="">
                    <div class="amazon-services__content df jcsb">
                        <div class="amazon-services__instagram hero-saper">
                            <a href="https://instagram.com/pavelsaper">
                                <div class="hero-saper__title df aic">
                                    <h2>Pavel Saper</h2>
                                    <div class="hero-saper__verify">
                                        <img src="<?php bloginfo('template_directory') ?>/img/verified.svg" alt="">
                                    </div>
                                </div>
                                <p><?php echo get_field('insta-text'); ?></p>
                                <div class="hero-saper__instagram df aic">
                                    <h6>Instagram:</h6>
                                    <div class="hero-instagram">
                                        <img src="<?php bloginfo('template_directory') ?>/img/instagram_001.svg" alt="instagram">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="amazon-services__google hero-google">
							<a href="">
							    <div class="hero-google__logo">
                                    <img src="<?php bloginfo('template_directory') ?>/img/google_logo.svg" alt="google">
                                </div>
                                <h2>280+</h2>
                                <p><?php echo get_field('google-text'); ?></p>
                                <div class="hero-google__stars df">
                                    <p>5.0</p>
                                    <div class="">
                                        <img src="<?php bloginfo('template_directory') ?>/img/stars3.svg" alt="stars">
                                    </div>
                                </div>
							</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="amazon-services amazon-platform">
            <div class="container df aic jcsb">
                <div class="amazon-services__block">
                    <h2 class="amazon-title"><?php echo get_field('amazon-title'); ?></h2>
                    <h6><?php echo get_field('amazon-text'); ?></h6>
                    <div class="amazon-services__button amazon-hero__button">
                        <a href="/contact">
                            <button class="primary-button"><?php echo get_field('amazon-button'); ?></button>
                        </a>
                    </div>
                </div>
                <div class="amazon-services__block">
                    <img src="<?php bloginfo('template_directory') ?>/img/new_amazon_hands.webp" alt="">
                </div>
            </div>
        </section>
        <section class="amazon-services amazon-advantages">
            <div class="container tac">
                <h2><?php echo get_field('adv-title'); ?></h2>
            </div>
            <div class="container df aic jcsb">
                <div class="amazon-services__block">
                    <ul>
                        <li><?php echo get_field('adv-text_1'); ?></li>
                        <li><?php echo get_field('adv-text_2'); ?></li>
                        <li><?php echo get_field('adv-text_3'); ?></li>
                        <li><?php echo get_field('adv-text_4'); ?></li>
                    </ul>
                    <div class="amazon-services__button amazon-hero__button">
                        <a href="/contact">
                            <button class="primary-button"><?php echo get_field('amazon-button'); ?></button>
                        </a>
                    </div>
                </div>
                <div class="amazon-services__block">
                    <img src="<?php bloginfo('template_directory') ?>/img/new_amazon_hubdle_right.webp" alt="">
                </div>
            </div>
        </section>
        <section class="amazon-callback">
            <div class="container lang-select">
                <h2 class="amazon-title"><?php echo get_field('callback-title'); ?></h2>
				<div id="footer_form">
							<div class="lang en">
				<!--<h2 class="section-title callback-title">Contact us now!</h2>-->
<script charset="utf-8" type="text/javascript" src="https://js-eu1.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "eu1",
    portalId: "26073268",
    formId: "8592b231-7096-4edd-8553-7c0dfdbcbe07"
  });
</script>
			</div>
			<div class="lang de">
				<!--<h2 class="section-title callback-title">Kontaktiere Sie uns jetzt!</h2>-->
				<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "eu1",
    portalId: "26073268",
    formId: "1db1b839-f955-4546-b68e-de3e8f18733a"
  });
</script>
			</div> 
			</div>  
            </div>
        </section>
		</main>

<?php get_footer() ?>