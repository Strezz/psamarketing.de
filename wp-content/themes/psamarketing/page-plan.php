<?php

/*
Template Name: Amazon Plan
*/

get_header('page'); // подключаем header-page.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="plan-hero">
            <div class="container">
                <p><?php echo get_field('hero_sup_title'); ?></p>
                <h2><?php echo get_field('hero-title'); ?></h2>
                <div class="arbitrage-hero__button plan-hero__button">
                    <a href="/contact">
                        <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                    </a>
                </div>
            </div>
        </section>
        <!--plan-blocked-->
        <section class="plan-blocked">
            <div class="container">
                
                <div class="blocks df jcsb">
                    <div class="block">
                        <div><?php echo get_field('first-text_1'); ?></div>
                    </div>
                    <div class="block lang-select">
						<div class="lang de">
							
						
                <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                <script>
                hbspt.forms.create({
                    region: "eu1",
                    portalId: "26073268",
                    formId: "4fac3c08-7c7a-45aa-ab74-8c4da32a32d5"
                });
                </script>
                </div>
                <div class="lang en">			
                <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                <script>
                hbspt.forms.create({
                    region: "eu1",
                    portalId: "26073268",
                    formId: "19c1531d-0131-4c9e-b573-a96028b68e44"
                });
                </script>
                </div>
                    </div>
                </div>
            </div>
        </section>
        <!--plan-action-->
        <section class="plan-action plan-action__first" id="plan-action1">
            <div class="container">
                <div class="blocks df jcsb">
                <div class="block">
                       
                        <?php echo get_field('second-text_1'); ?>
                        <div class="plan-button">
                            <a href="/contact">
                                <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                            </a>
                        </div>
                    </div>
                    <div class="block">
                        <img class="bestenimg" src="<?php bloginfo('template_directory') ?>/img/besten_001.png" alt="">
                        <div class="hero-saper">
                                <a href="https://instagram.com/pavelsaper">
                                    <div class="hero-saper__title df aic">
                                        <span>Pavel Saper</span>
                                        <div class="hero-saper__verify">
                                            <img src="<?php bloginfo('template_directory') ?>/img/verified.svg" alt="">
                                        </div>
                                    </div>
                                    <p><?php echo get_field('strong_2'); ?></p>
                                    <div class="hero-saper__instagram df aic">
                                        <p>Instagram:</p>
                                        <div class="hero-instagram">
                                            <img src="<?php bloginfo('template_directory') ?>/img/instagram_001.svg" alt="instagram">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="hero-google new-google">
                                <div class="hero-google__top new-google__top df aic jcsb">
                                    <div class="new-google__logo">
                                        <img src="<?php bloginfo('template_directory') ?>/img/google_logo.svg" alt="google">
                                    </div>
                                    <div class="new-google__stars">
                                        <img src="<?php bloginfo('template_directory') ?>/img/hero-stars.svg" alt="">
                                    </div>
                                </div>
                                <span>300+</span>
                                <p><?php echo get_field('second-text_2'); ?></p>
                            </div>
                            <div class="hero-proven">
                                <div class="hero-proven__header df aic jcsb">
                                    <div class="hero-proven__logo">
                                        <img src="<?php bloginfo('template_directory') ?>/img/proven-logo.svg" alt="">
                                    </div>
                                    <div class="hero-proven__stars">
                                        <img src="<?php bloginfo('template_directory') ?>/img/hero-stars.svg" alt="">
                                    </div>
                                </div>
                                <span>433+</span>
                                <p><?php echo get_field('second-text_3'); ?></p>
                            </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="plan-action" id="plan-action2">
            <div class="container">
                <div class="blocks df jcsb">
                    <div class="block">
                        <div class="rightblock">
                            <?php echo get_field('third-text'); ?>
                            <div class="attention"><?php echo get_field('why_1'); ?></div>
                            <div class="text"><?php echo get_field('why_2'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="plan-action" id="plan-action3">
            <div class="container">
            <h2><?php echo get_field('why_3'); ?></h2>
                <div class="blocks df jcsb">
                    <div class="block">
                        <div class="marker"><?php echo get_field('wir_1'); ?></div>
                        <?php echo get_field('wir_1_txt'); ?>
                        <p><a href="/contact" class="cbtn bh"><?php echo get_field('wir_1_btn'); ?></a></p>
                    </div>
                    <div class="block">
                        <div class="marker"><?php echo get_field('wir_2'); ?></div>
                        <?php echo get_field('wir_2_txt'); ?>
                        <p><a href="/contact" class="cbtn bh"><?php echo get_field('wir_2_btn'); ?></a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bewer" id="plan-action4">
            <div class="container">
                <h2><?php echo get_field('was_1_title'); ?></h2>
                <p><?php echo get_field('was_1_txt'); ?></p>
                <p><?php echo get_field('was_2_txt'); ?></p>
            <div class="bewer-container">
                    <div class="bewer-slider">
                        <?php
                            $bewer = get_posts( array(
                            'numberposts' => -1,
                            'cat'    => '3, 30',
                            'category_name' => 'reviews',	
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        ) );
                                                    global $post;

                        foreach( $bewer as $post ){
                            setup_postdata( $post ); ?>
                                <div class="slick-slide bewer-slide accordeon accordion__item <?php echo get_field('source'); ?>">
                                    <div class="bewer-head df aic">
                                        <div class="bewer-round">
                                            <img src="<?php echo get_field('image'); ?>" alt="">
                                        </div>
                                        <div class="bewer-name">
                                            <h3><?php echo get_field('name'); ?></h3>
                                            <p><?php echo get_field('date'); ?></p>
                                        </div>
                                    </div>
                                    <div class="bewer-stars">
                                        <img src="<?php bloginfo('template_directory') ?>/img/stars3.svg" alt="">
                                    </div>
                                    <div class="bewer-body accordion__content accordeon-body">
                                        <?php echo get_field('text'); ?>
                                    </div>
                                    <div class="bewer-more accordeon-title accordion__btn">
                                        <p>Lesen Sie hier weiter</p>
                                    </div>
                                    <div class="bewer-source">
                            <?php if (get_field('source') == "google"): ?>
                                <img src="<?= get_template_directory_uri() ?>/img/posted_google.webp" alt="">
                            <?php else: ?>
                            <img src="<?= get_template_directory_uri() ?>/img/posted_proven.webp" alt="">
                            <?php endif; ?>
                                    </div>
                                </div>
                    <?php
                        }

                        wp_reset_postdata(); 
                    ?>

                    </div>
                </div>
                <div class="container">
                    <div class="bewer-arrows"><div class="bewer-count"><span class="sl">1</span>/<span>28</span></div></div>
                </div>  
        </section>
        <section class="plan-action" id="plan-action5">
            <div class="container">
                <h2><?php echo get_field('wir2_title'); ?></h2>
                <p><?php echo get_field('wir2_subtitle'); ?></p>
                <div class="blocks df jcsb">
                    <div class="block">
                        <img src="<?php echo get_template_directory_uri() ?>/img/loop.svg" alt="loop">
                        <div class="clear"></div>
                        <?php echo get_field('loop_txt'); ?>
                    </div>
                    <div class="block">
                        <img src="<?php echo get_template_directory_uri() ?>/img/suitcase.svg" alt="suitcase">
                        <div class="clear"></div>
                        <?php echo get_field('suitcase_txt'); ?>
                    </div>
                    <div class="block">
                        <img src="<?php echo get_template_directory_uri() ?>/img/rocket.svg" alt="rocket">
                        <div class="clear"></div>
                        <?php echo get_field('rocket_txt'); ?>
                    </div>

                </div>
            </div>
        </section>
        <section class="plan-callback">
                <h2><?php echo get_field('form_head'); ?></h2>
                <div class="callback-container lang-select container">
                    <div id="footer_form">
                        <div class="lang en">
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