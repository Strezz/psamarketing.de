<?php

/*
Template Name: Online Arbitrage
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="arbitrage-hero">
            <div class="container">
                <h5><?php echo get_field('hero-pretitle'); ?></h5>
                <h2><?php echo get_field('hero-title'); ?></h2>
                <h6><?php echo get_field('hero-subtitle'); ?></h6>
                <div class="arbitrage-hero__button">
                    <a href="/contact">
                        <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                    </a>
                </div>
                <div class="amazon-hero__icon">
                    <img src="<?php bloginfo('template_directory') ?>/img/mouse.webp" alt="">
                </div>
            </div>
        </section>
        <section class="online-arbitrage">
            <div class="arbitrage-block">
                <div class="arbitrage-wrapper">
                </div>
                <div class="container df jcsb aic">
                    <div class="arbitrage-column">
                        
                    </div>
                    <div class="arbitrage-column">
                        <h2><?php echo get_field('first-title'); ?></h2>
                        <h6><?php echo get_field('first-text_1'); ?></h6>
                        <h6><?php echo get_field('first-text_2'); ?></h6>
                        <div class="arbitrage-button">
                            <a href="/contact">
                                <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arbitrage-block">
                <div class="arbitrage-wrapper">
                </div>
                <div class="container df jcsb aic">
                    <div class="arbitrage-column">
                        <img src="<?php bloginfo('template_directory') ?>/img/arbitrage-bg_002.png" alt="">
                    </div>
                    <div class="arbitrage-column">
                        <h2><?php echo get_field('second-title'); ?></h2>
                        <ul class="arbitrage-list">
                            <li><strong><?php echo get_field('strong_1'); ?></strong> <?php echo get_field('second_1'); ?></li>
                            <li><strong><?php echo get_field('strong_2'); ?></strong> <?php echo get_field('second_2'); ?></li>
                            <li><strong><?php echo get_field('strong_3'); ?></strong> <?php echo get_field('second_3'); ?></li>
                           <!-- <li><strong><?php echo get_field('strong_4'); ?></strong> <?php echo get_field('second_4'); ?></li> -->
                        </ul>
                        <div class="arbitrage-button">
                            <a href="/contact">
                                <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arbitrage-block">
                <div class="container df jcsb aic">
                    <div class="arbitrage-column">
                        <h2><?php echo get_field('third-title'); ?></h2>
                        <ul class="arbitrage-ul">
                            <li>• <?php echo get_field('third-text_1'); ?></li>
                            <li>• <?php echo get_field('third-text_2'); ?></li>
                            <li>• <?php echo get_field('third-text_3'); ?></li>
                            <li>• <?php echo get_field('third-text_4'); ?></li>
                            <li>• <?php echo get_field('third-text_5'); ?></li>
                            <li>• <?php echo get_field('third-text_6'); ?></li>
                       <!--     <li>• <?php echo get_field('third-text_7'); ?></li> -->
                        </ul>
                        <div class="arbitrage-button">
                            <a href="/contact">
                                <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arbitrage-block">
                <div class="arbitrage-wrapper">
                </div>
                <div class="container df jcsb aic">
                    <div class="arbitrage-column">
                        
                    </div>
                    <div class="arbitrage-column">
                        <h2><?php echo get_field('fourth-title'); ?></h2>
                        <h6><?php echo get_field('fourth-text_1'); ?></h6>
                        <h6><?php echo get_field('fourth-text_2'); ?></h6>
                        <h6><?php echo get_field('fourth-text_3'); ?></h6>
                        <h6><?php echo get_field('fourth-text_4'); ?></h6>
                        <div class="arbitrage-button">
                            <a href="/contact">
                                <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="arbitrage-offer">
            <div class="container df aic jcsb">
                <div class="block">
                    <img src="<?php bloginfo('template_directory') ?>/img/arbitrage_comment.webp" alt="">
                </div>
                <h6>
                    <?php echo get_field('offer-text'); ?>
                </h6>
                <div class="arbitrage-button">
                    <a href="/contact">
                        <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                    </a>
                </div>
            </div>
        </section>
        <section class="arbitrage-callback lang-select">
            <div class="container">
                <h2 class="amazon-title"><?php echo get_field('hero-button'); ?></h2>
            <div id="footer_form">
											
				<!--<h2 class="section-title callback-title">Contact us now!</h2>-->

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