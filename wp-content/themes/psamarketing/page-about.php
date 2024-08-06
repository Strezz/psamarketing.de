<?php

/*
Template Name: About
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="about-hero">
            <div class="container">
                <div id='animated-text' class="animated-text df aic">
                    <div>
                        <?php echo get_field('about-title_1'); ?> 
                    </div>
                    <div id="wrapper">
                        <p id="hi"></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-marketing">
            <div class="container">
                <div class="about-marketing__text">
                    <h2 class="other-title about-marketing__title"><?php echo get_field('marketing__title'); ?></h2>
                    <p><?php echo get_field('marketing-text_1'); ?></p>
                    <p><?php echo get_field('marketing-text_2'); ?></p>
                    <p><?php echo get_field('marketing-text_3'); ?></p>
                </div>
                <div class="about-marketing__buttons df aic">
                    <div class="about-marketing__button">
                        <a href="<?php echo get_field('contact-link'); ?>">
                            <button class="primary-button"><?php echo get_field('marketing-button_1'); ?></button>
                        </a>
                    </div>
                    <div class="about-marketing__button">
                        <a href="https://www.youtube.com/channel/UCD7pLAl69wft8u9WtolAo4g" target="_blank">
                            <button class="df aic"><img src="<?php bloginfo('template_directory') ?>/img/youtube-icon.png" alt=""><?php echo get_field('marketing-button_2'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-team">
            <div class="container">
                <h2 class="other-title about-team__title"><?php echo get_field('experts-title'); ?></h2>

				<div class="about-cards df">

            
			
                    <div class="about-card df jcsb aic" id="about-card-1">
                        <div class="about-card__block">
                            <div class="about-card__head df aic">
                                <h2 class="about-card__name">Pavel Saper</h2>
                                <div class="about-card__lang df aic jcsb">
                                    <div class="about-card__lang-flag">
                                        <img src="<?php bloginfo('template_directory') ?>/img/de.webp" alt="">
                                    </div>
                                    <div class="about-card__lang-flag">
                                        <img src="<?php bloginfo('template_directory') ?>/img/ru.webp" alt="">
                                    </div>
                                    <div class="about-card__lang-flag">
                                        <img src="<?php bloginfo('template_directory') ?>/img/en.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <h3 class="about-card__subtitle"><?php echo get_field('expert_01_work'); ?></h3>
                            <a class="about-card__youtube df aic" href="https://www.youtube.com/psamarketing" target="_blank">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_directory') ?>/img/youtube-icon.png" alt="youtube">
                                </div>
                                <div class="text">
                                    <?php echo get_field('saper_youtube'); ?>
                                </div>
                            </a>
                            <div class="about-card__text">
                                <p><?php echo get_field('saper_text_01'); ?></p>
                                <p><?php echo get_field('saper_text_02'); ?></p>
                                <p><?php echo get_field('saper_text_03'); ?></p>
                            </div>
                            <div class="about-card__button">
                                <a href="<?php echo get_field('contact-link'); ?>">
                                    <button class="primary-button"><?php echo get_field('saper_button'); ?></button>
                                </a>
                            </div>
                        </div>
                        <div class="about-card__photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/team-pic-1.png.webp" alt="team">
                        </div>
                    </div>
                    <div class="about-card df jcsb aic" id="about-card-2">
                        <div class="about-card__photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/team-pic-2.png.webp" alt="team">
                        </div>
                        <div class="about-card__block">
                            <div class="about-card__head df aic">
                                <h2 class="about-card__name">Muamed Safer</h2>
                            </div>
                            <h3 class="about-card__subtitle"><?php echo get_field('safer_work'); ?></h3>
                            <div class="about-card__text">
                                <p><?php echo get_field('safer_text_01'); ?></p>
                                <p><?php echo get_field('safer_text_02'); ?></p>
                                <p><?php echo get_field('safer_text_03'); ?></p>
                            </div>
                            <div class="about-card__button">
                                <a href="<?php echo get_field('contact-link'); ?>">
                                    <button class="primary-button"><?php echo get_field('safer_button'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="about-card df jcsb aic" id="about-card-3">
                        <div class="about-card__block">
                            <div class="about-card__head df aic">
                                <h2 class="about-card__name">Allan Bright</h2>
                            </div>
                            <h3 class="about-card__subtitle"><?php echo get_field('bright_work'); ?></h3>
                            <div class="about-card__text">
                                <p><?php echo get_field('bright_text_01'); ?></p>
                                <p><?php echo get_field('bright_text_02'); ?></p>
                                <p><?php echo get_field('bright_text_03'); ?></p>
                                <p><?php echo get_field('bright_text_04'); ?></p>
                            </div>
                            <div class="about-card__button">
                                <a href="<?php echo get_field('contact-link'); ?>">
                                    <button class="primary-button"><?php echo get_field('bright_button'); ?></button>
                                </a>
                            </div>
                        </div>
                        <div class="about-card__photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/team-pic-3.png.webp" alt="team">
                        </div>
                    </div>
                    <div class="about-card df jcsb aic" id="about-card-4">
                        <div class="about-card__photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/team-pic-4.png.webp" alt="team">
                        </div>
                        <div class="about-card__block">
                            <div class="about-card__head df aic">
                                <h2 class="about-card__name">Francis J. Mari Jr., MBA</h2>
                            </div>
                            <h3 class="about-card__subtitle"><?php echo get_field('mba_work'); ?></h3>
                            <div class="about-card__text">
                                <p><?php echo get_field('mba_text_01'); ?></p>
                                <p><?php echo get_field('mba_text_02'); ?></p>
                            </div>
                            <div class="about-card__button">
                                <a href="<?php echo get_field('contact-link'); ?>">
                                    <button class="primary-button"><?php echo get_field('mba_button'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="about-card df jcsb aic" id="about-card-5">
                        <div class="about-card__block">
                            <div class="about-card__head df aic">
                                <h2 class="about-card__name">Eray Erkisi</h2>
                            </div>
                            <h3 class="about-card__subtitle"><?php echo get_field('erkisi_work'); ?></h3>
                            <div class="about-card__text">
                                <p><?php echo get_field('erkisi_text_01'); ?></p>
                            </div>
                            <div class="about-card__button">
                                <a href="<?php echo get_field('contact-link'); ?>">
                                    <button class="primary-button"><?php echo get_field('erkisi_button'); ?></button>
                                </a>
                            </div>
                        </div>
                        <div class="about-card__photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/team-pic-6.png.webp" alt="team">
                        </div>
                    </div>
					<div class="about-card df jcsb aic" id="about-card-4">
                        <div class="about-card__photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/team-pic-7.png.webp" alt="team">
                        </div>
                        <div class="about-card__block">
                            <div class="about-card__head df aic">
                                <h2 class="about-card__name">Alexander Meinzer</h2>
                            </div>
							<h3 class="about-card__subtitle"><?php echo get_field('meinzer_work'); ?></h3>
                            <div class="about-card__text">
                                <p><?php echo get_field('meinzer_text_01'); ?></p>
                            </div>
                            <div class="about-card__button">
                                <a href="<?php echo get_field('contact-link'); ?>">
                                    <button class="primary-button"><?php echo get_field('meinzer_button'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </section>
        <section class="about-contact">
            <div class="container">
                <div class="about-contact__button">
                    <a href="<?php echo get_field('contact-link'); ?>">
                        <button class="primary-button"><?php echo get_field('bottom'); ?></button>
                    </a>
                </div>
            </div>
        </section>
		</main>

<?php get_footer() ?>