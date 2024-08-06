<?php

/*
 Template name: blog-item
 Template post type: post, page
*/

get_header(); // подключаем header.php ?>

<main class="single blog-post static_page" id="post-<?php the_ID(); ?>">
    <div class="container blog-container">
		<div class="preview">
			<img class="desktop" src="<?php echo get_field('preview'); ?>">
			<img class="mobile" src="<?php echo get_field('mobile-image'); ?>">
			<h1>
				<?php echo get_field('post-title'); ?>
			</h1>
		</div>
        <div class="post-content">
			<h1>
				<?php echo get_field('post-title'); ?>
			</h1>
			<?php the_content() ?>
			<div class="post-button">
			    <a href="/kontakt">
					<button class="primary-button">Direkt kontaktieren</button>
				</a>
			</div>
		</div>

    </div>
	<div class="container post-footer">
				
			                <div class="services-list__offer df jcsb aic">
                    <div class="df aic">
                        <div class="services-list__offer-photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/arbitrage_comment.webp" alt="">
                        </div>
                        <div class="services-list__offer-text">
                            <h2 class="df aic">PSA Marketing<span><img src="<?php bloginfo('template_directory') ?>/img/verified.webp" alt=""></span></h2>
                            <h6>Offizieller Servicepartner Amazon SPN</h6>
                        </div>
                    </div>
                    <div class="df aic jcsb">
                        <div class="services-list__offer-link df aic">
                            <div>
                                <img src="<?php bloginfo('template_directory') ?>/img/phone_color.svg" alt="">
                            </div>
                            <a href="tel:49022156094145">+ 49(0) 221 560 94 145</a>
                        </div>
                        <div class="services-list__offer-link df aic">
                            <div>
                                <img src="<?php bloginfo('template_directory') ?>/img/email_color.svg" alt="">
                            </div>
                            <a href="mailto:info@psamarketing.de">info@psamarketing.de</a>
                        </div>
                        <div class="services-list__offer-button">
                            <a href="/kontakt">
                                <button class="primary-button">Direkt kontaktieren</button>
                            </a>
                        </div>
                    </div>
                
		</div>
	</div>
</main>


<?php get_footer() ?>