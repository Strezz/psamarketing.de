<?php

/*
Template Name: Services
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="services-hero">
            <div class="container">
                <h2 class="services-hero__title"><?php echo get_field('hero-title'); ?></h2>
                <h6 class="services-hero__subtitle"><?php echo get_field('hero-subtitle'); ?></h6>
                <div class="services-hero__button">
                    <a href="/contact">
                        <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                    </a>
                </div>
                <div class="services-hero__icon">
                    <img src="<?php bloginfo('template_directory') ?>/img/mouse.webp" alt="">
                </div>
            </div>
        </section>
        <section class="services-list">
            <div class="container">
                <h2 class="other-title services-list__title"><?php echo get_field('list-title'); ?></h2>
                <h3 class="services-list__subtitle"><?php echo get_field('list-subtitle'); ?></h3>
                <div class="services-list__blocks df aic jcsb">
                    <div class="services-list__block df">
                        <a href="<?php echo get_field('service-link_1'); ?>" class="df">
                            <div class="services-list__block-icon">
                                <img src="<?php bloginfo('template_directory') ?>/img/unsere_mini_1.webp" alt="">
                            </div>
                            <h3><?php echo get_field('service-1'); ?></h3>
                        </a>
                    </div>
                    <div class="services-list__block df">
                        <a href="<?php echo get_field('service-link_2'); ?>" class="df">
                        <div class="services-list__block-icon">
                                <img src="<?php bloginfo('template_directory') ?>/img/unsere_mini_2.webp" alt="">
                            </div>
                            <h3><?php echo get_field('service-2'); ?></h3>
                        </a>
                    </div>
                    <div class="services-list__block df">
                        <a href="<?php echo get_field('service-link_3'); ?>" class="df">
                        <div class="services-list__block-icon">
                                <img src="<?php bloginfo('template_directory') ?>/img/unsere_mini_3.webp" alt="">
                            </div>
                            <h3><?php echo get_field('service-3'); ?></h3>
                        </a>
                    </div>
                    <div class="services-list__block df">
                        <a href="<?php echo get_field('service-link_4'); ?>" class="df">
                        <div class="services-list__block-icon">
                                <img src="<?php bloginfo('template_directory') ?>/img/unsere_mini_4.webp" alt="">
                            </div>
                            <h3><?php echo get_field('service-4'); ?></h3>
                        </a>
                    </div>
                </div>
                <p class="services-list__description">
                    <?php echo get_field('list-text'); ?></p>
                <div class="services-list__offer df jcsb aic">
                    <div class="df aic">
                        <div class="services-list__offer-photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/arbitrage_comment.webp" alt="">
                        </div>
                        <div class="services-list__offer-text">
                            <h2 class="df aic">PSA Marketing<span><img src="<?php bloginfo('template_directory') ?>/img/verified.webp" alt=""></span></h2>
                            <h6><?php echo get_field('offer-text'); ?></h6>
                        </div>
                    </div>
                    <div class="df aic jcsb">
                        <div class="services-list__offer-link df aic">
							<a class="df services-list__phone" href="tel:49022156094145">+ 49(0) 221 560 94 145</a>
                        </div>
                        <div class="services-list__offer-link df aic">
							<a class="df services-list__email" href="mailto:info@psamarketing.de">info@psamarketing.de</a>
                        </div>
                        <div class="services-list__offer-button">
                            <a href="/contact">
                                <button class="primary-button"><?php echo get_field('offer-button'); ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-text">
            <div class="container">
                <h3 class="other-title services-text__title"><?php echo get_field('title_001'); ?></h3>
                <p><?php echo get_field('text_001'); ?></p>
                <h3 class="other-title services-text__title"><?php echo get_field('title_002'); ?></h3>
                <p><?php echo get_field('text_002'); ?></p>
                <h3 class="other-title services-text__title"><?php echo get_field('title_003'); ?></h3>
                <p><?php echo get_field('text_003'); ?></p>
                <ul class="services-text__ul">
                    <li><strong><?php echo get_field('strong_001'); ?></strong> <?php echo get_field('li_001'); ?></li>
                    <li><strong><?php echo get_field('strong_002'); ?></strong> <?php echo get_field('li_002'); ?></li>
                    <li><strong><?php echo get_field('strong_003'); ?></strong> <?php echo get_field('li_003'); ?></li>
                </ul>
                <h6><?php echo get_field('text_004'); ?></h6>
            </div>
        </section>
        <aside class="services-aside">
            <div class="container df">
                <div class="block">
                    <div class="services-aside__title df aic">
                        <div class="image">
                            <img src="<?php bloginfo('template_directory') ?>/img/amazon_logo_orange.webp" alt="">
                        </div>
                        <h2 class="title">Amazon</h2>
                    </div>
                    <ul class="services-aside__text">
                        <li><?php echo get_field('amazon-text_01'); ?></li>
                        <li><?php echo get_field('amazon-text_02'); ?></li>
                        <li><?php echo get_field('amazon-text_03'); ?></li>
                        <li><?php echo get_field('amazon-text_04'); ?></li>
                        <li><?php echo get_field('amazon-text_05'); ?></li>
                        <li><?php echo get_field('amazon-text_06'); ?></li>
                    </ul>
                    <h6><?php echo get_field('amazon-subtext'); ?></h6>
                </div>
                <div class="block">
                    <div class="services-aside__title df aic">
                        <div class="image">
                            <img src="<?php bloginfo('template_directory') ?>/img/unsere_mini_4.webp" alt="">
                        </div>
                        <h2 class="title">
                            <?php echo get_field('solutions'); ?>
                        </h2>
                    </div>
                    <ul class="services-aside__text">
                        <li><?php echo get_field('other-text_01'); ?></li>
                        <li><?php echo get_field('other-text_02'); ?></li>
                        <li><?php echo get_field('other-text_03'); ?></li>
                        <li><?php echo get_field('other-text_04'); ?></li>
                        <li><?php echo get_field('other-text_05'); ?></li>
                    </ul>
                    <h6><?php echo get_field('solutions-text'); ?></h6>
                </div>
            </div>
        </aside>
        <section class="callback">
            <div class="callback-container container lang-select">
                <h2 class="section-title callback-title"><?php echo get_field('callback-title'); ?></h2>
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
        </section>
		</main>

<?php get_footer() ?>