<?php

/*
Template Name: Further Services
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="fur-hero">
            <div class="container">
                <h1><?php echo get_field('hero-title'); ?></h1>
                <h6><?php echo get_field('hero-subtitle'); ?></h6>
                <div class="fur-hero__button">
                    <a href="/contact">
                        <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                    </a>
                </div>
                <div class="amazon-hero__icon">
                    <img src="<?php bloginfo('template_directory') ?>/img/mouse.webp" alt="">
                </div>
            </div>
        </section>
        <section class="fur">
            <div class="container df jcsb aic">
                <div class="block">
					<h2 class="mobile"><?php echo get_field('fur-title'); ?></h2>
                    <img src="<?php bloginfo('template_directory') ?>/img/new_unsere_pavel.webp" alt="">
					<div class="hero-saper">
                        <a href="https://instagram.com/pavelsaper">
                            <div class="hero-saper__title df aic">
                                <h2>Pavel Saper</h2>
                                <div class="hero-saper__verify">
                                    <img src="<?php bloginfo('template_directory') ?>/img/verified.svg" alt="">
                                </div>
                            </div>
                            <p><?php echo get_field('fur-saper'); ?></p>
                            <div class="hero-saper__instagram df aic">
                                <h6>Instagram:</h6>
                                <div class="hero-instagram">
                                    <img src="<?php bloginfo('template_directory') ?>/img/instagram_001.svg" alt="instagram">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="block">
                    <h2 class="desktop"><?php echo get_field('fur-title'); ?></h2>
                    <h6><?php echo get_field('text_1'); ?></h6>
                    <h6><?php echo get_field('text_2'); ?></h6>
                    <h6><?php echo get_field('text_3'); ?></h6>
                    <ul class="fur-list df jcsb">
                        <li><?php echo get_field('fur_1'); ?></li>
                        <li><?php echo get_field('fur_2'); ?></li>
                        <li><?php echo get_field('fur_3'); ?></li>
                        <li><?php echo get_field('fur_4'); ?></li>
                    </ul>
                    <div class="links df aic jcsb">
                        <div class="fur-button">
                            <a href="/contact">
                                <button class="primary-button"><?php echo get_field('fur-button'); ?></button>
                            </a>
                        </div>
                        <div class="fur-social df aic">
                            <h5><?php echo get_field('fur-social'); ?></h5>
                            <div class="link">
                                <a href="https://facebook.com/psamarketingDE" target="_blank" rel="noopener">
                                    <img src="<?php bloginfo('template_directory') ?>/img/fb_gray.svg" alt="">
                                </a>
                            </div>
                            <div class="link">
                                <a href="https://www.instagram.com/psamarketingde/" target="_blank">
                                    <img src="<?php bloginfo('template_directory') ?>/img/inst_gray.svg" alt="">
                                </a>
                            </div>
                            <div class="link">
                                <a href="https://youtube.com/c/PSAMarketing" target="_blank">
                                    <img src="<?php bloginfo('template_directory') ?>/img/youtube_gray.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	    <section class="amazon-callback">
            <div class="container lang-select">
                <h2 class="amazon-title"><?php echo get_field('form-title'); ?></h2>
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
<script charset="utf-8" type="text/javascript" src="https://js-eu1.hsforms.net/forms/embed/v2.js " ></script>
<script>
  hbspt.forms.create({
    region: "eu1",
    portalId: "26073268",
    formId: "3ed7dbd8-788d-4f37-88a2-4808cb2282bb"
  });
</script>
			</div>  
            </div>
            </div>
        </section>
		</main>

<?php get_footer() ?>