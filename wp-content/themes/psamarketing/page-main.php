<?php 

/*
Template Name: Main-New
*/

get_header('home'); ?>
    <main class="main main-page main-new" id="post-<?php the_ID(); ?>">
    <section class="hero">
            <div class="hero-slider slider">
                <div class="hero-slide">
                    <div class="slider-bg">
                        <img src="<?php bloginfo('template_directory') ?>/img/slide_bg_001.jpg" alt="">
                    </div>
                    <div class="slider-content container df aic">
                        <div class="slider-text">
                            
                            <h2 class="slider-title"><?php echo get_field('page-title'); ?></h2>
                            <h6 class="slider-subtitle desktop"><?php echo get_field('page-subtitle'); ?></h6>
							<h6 class="slider-subtitle mobile"><?php echo get_field('page-subtitle'); ?></h6>
                            <div class="slider-buttons df aic">
                                <div class="slider-button header-right__button">
                                    <a href="<?php echo get_field('hero-link'); ?>">
                                        <button class="primary-button"><?php echo get_field('hero-button'); ?></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/hero_002.webp" alt="">
                            <div class="hero-saper">
                                <a href="https://instagram.com/pavelsaper">
                                    <div class="hero-saper__title df aic">
                                        <span>Pavel Saper</span>
                                        <div class="hero-saper__verify">
                                            <img src="<?php bloginfo('template_directory') ?>/img/verified.svg" alt="">
                                        </div>
                                    </div>
                                    <p><?php echo get_field('amazon-work'); ?></p>
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
                                <p><?php echo get_field('google-rewiews'); ?></p>
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
                                <p><?php echo get_field('proven-reviews'); ?></p>
                            </div>
                        </div>
                    </div>
                    <!--slide-->
                </div>
            </div>
            <div class="container advertise-container">
                <div class="hero-advantages df aic jcsb">
                    <p class="hero-advantages__title"><?php echo get_field('adv-title'); ?></p>
                    <div class="hero-advantages__block">
                        <p class="hero-advantages__number"><?php echo get_field('adv-number_1'); ?></p>
                        <p class="hero-advantages__text"><?php echo get_field('adv-text_1'); ?></p>
                    </div>
                    <div class="hero-advantages__block">
                        <p class="hero-advantages__number"><?php echo get_field('adv-number_2'); ?></p>
                        <p class="hero-advantages__text"><?php echo get_field('adv-text_2'); ?></p>
                    </div>
                    <div class="hero-advantages__block">
                        <p class="hero-advantages__number"><?php echo get_field('adv-number_3'); ?></p>
                        <p class="hero-advantages__text"><?php echo get_field('adv-text_3'); ?></p>
                    </div>
                    <div class="hero-advantages__block">
                        <p class="hero-advantages__number"><?php echo get_field('adv-number_4'); ?></p>
                        <p class="hero-advantages__text"><?php echo get_field('adv-text_4'); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="zeit">
            <div class="container df aic jcsb">
                <div class="zeit-block zeit-photo">
                    <img src="<?php bloginfo('template_directory') ?>/img/zeit-bg.webp" alt="">
                </div>
                <div class="zeit-block zeit-info">
                    <h2 class="zeit-title block-title"><?php echo get_field('zeit-title'); ?><span> <?php echo get_field('zeit-title_span'); ?></span>!</h2>
                    <p><?php echo get_field('zeit_1'); ?></p>
                    <p><?php echo get_field('zeit_2'); ?></p>
                    <p><strong><?php echo get_field('zeit_3'); ?></strong></p>
                    <p><?php echo get_field('zeit_4'); ?></p>
                    <div class="zeit-button">
                        <a href="<?php echo get_field('zeit-link'); ?>">
                            <button class="primary-button"><?php echo get_field('zeit-button'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="kunden">
            <div class="container">
                <h5 class="kunden-title block-title"><?php echo get_field('kunden-title_1'); ?> <span><?php echo get_field('kunden-title_span'); ?></span> <?php echo get_field('kunden-title_2'); ?></h5>
                <p class="kunden-subtitle"><?php echo get_field('kunden-subtitle'); ?></p>
            </div>
			<div class="kunden-container">
				<div class="kunden-items">
                    <div class="kunden-block kunden-block__001">
                        <p class="kunden-name"><?php echo get_field('kunden-name_1'); ?></p>
                        <p class="kunden-description"><?php echo get_field('kunden-text_1_1'); ?> <span><?php echo get_field('kunden-span_1'); ?></span> <?php echo get_field('kunden-text_1_2'); ?></p>
                    </div>
                    <div class="kunden-block kunden-block__002">
                        <p class="kunden-name"><?php echo get_field('kunden-name_2'); ?></p>
                        <p class="kunden-description"><?php echo get_field('kunden-text_2_1'); ?> 
                             <span><?php echo get_field('kunden-span_2'); ?></span> <?php echo get_field('kunden-text_2_2'); ?></p>
                    </div>
                    <div class="kunden-block kunden-block__003">
                        <p class="kunden-name"><?php echo get_field('kunden-name_3'); ?></p>
                        <p class="kunden-description"><?php echo get_field('kunden-text_3_1'); ?> <span> <?php echo get_field('kunden-span_3'); ?></span><?php echo get_field('kunden-text_3_2'); ?></p>
                    </div>
                </div>
			</div>
		    <div class="container">
				<div class="kunden-dots">
					
				</div>
            </div>
        </section>
        <section class="besten">
            <div class="container df aic">
                <div class="besten-block besten-image">
                    <img src="<?php bloginfo('template_directory') ?>/img/besten_001.png" alt="">
					<div class="besten-button mobile">
                        <a href="<?php echo get_field('besten-link'); ?>">
                            <button class="primary-button"><?php echo get_field('besten-button'); ?></button>
                        </a>
                    </div>
                </div>
                <div class="besten-block besten-info">
                    <h2 class="besten-title"><?php echo get_field('besten-title_1'); ?><span> <?php echo get_field('besten-title_span'); ?></span> <?php echo get_field('besten-title_2'); ?></h2>
                    <ul class="besten-list">
                        <li><?php echo get_field('besten-list_1'); ?></li>
                        <li><?php echo get_field('besten-list_2'); ?></li>
                        <li><?php echo get_field('besten-list_3'); ?></li>
                        <li class="emoji"><?php echo get_field('besten-list_4'); ?></li>
                    </ul>
                    <div class="besten-button desktop">
                        <a href="<?php echo get_field('besten-link'); ?>">
                            <button class="primary-button"><?php echo get_field('besten-button'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

	<section class="bewer">
            <div class="container">
				<h3 class="bewer-title"><?php echo get_field('bewer-title_1'); ?><span> <?php echo get_field('bewer-title_span'); ?></span> <?php echo get_field('bewer-title_2'); ?></h3>
                <ul class="filter js-filter clearfix df aic">
                    <li data-filter="all" class="all filtered"><?php echo get_field('filter_1'); ?> (279)</li>
                    <li data-filter="google" class="google df aic"><img src="<?= get_template_directory_uri() ?>/img/google-bewer.svg"><?php echo get_field('filter_2'); ?></li>
                    <li data-filter="proven" class="proven df aic"><img src="<?= get_template_directory_uri() ?>/img/proven-bewer.svg"><?php echo get_field('filter_3'); ?></li>
                  </ul>
            </div>
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
                                        <h4><?php echo get_field('name'); ?></h4>
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
        <!-- section for youtube videos -->
        <section class="youtube">
            <div class="youtube-container container">
                <h3 class="section-title youtube-title">
                    <?php echo get_field('youtube-title_1'); ?> 
                    <span><a href="https://youtube.com/c/PSAMarketing" target="_blank"><?php echo get_field('youtube-title_span'); ?></a></span>
                    <?php echo get_field('youtube-title_2'); ?>
                </h3>
                <p class="youtube-subtitle"><?php echo get_field('youtube-subtitle'); ?></p>
            </div>
            <div class="youtube-slider slider multiple-items">
                <?php
                $my_posts = get_posts(array(
                    'numberposts' => -1,
                    'cat'    => '2, 35',
                    'category_name' => 'youtube',                
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  => '',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ));
                global $post;

                foreach($my_posts as $post) {
                    setup_postdata($post); ?>
                    <div class="youtube-slide">
                        <a href="#" class="video" data-video-id="<?php echo get_field('link'); ?>">
                            <div class="youtube-image">
                                <img src="<?php echo get_field('image'); ?>" alt="">
                                <div class="youtube-logo">
                                    <img src="<?php bloginfo('template_directory') ?>/img/youtube.svg" alt="youtube">
                                </div>
                                <div class="youtube-play df">
                                    <img src="<?php bloginfo('template_directory') ?>/img/play.svg" alt="">
                                </div>
                            </div>
                            <h5><?php echo get_field('title'); ?></h5>
                            <p><?php echo get_field('date'); ?></p>
                        </a>
                    </div>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
            <div class="youtube-arrows">
                <div class="slider-counter"><span class="cp">1</span>/<span>8</span></div>
            </div>

            <!-- Модальное окно -->
            <div id="videoModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div id="videoContainer"></div>
                </div>
            </div>
        </section>
        <!-- mehr -->
        <section class="mehr">
            <div class="container">
                <h2 class="mehr-title"><?php echo get_field('mehr-title_1'); ?><span> <?php echo get_field('mehr-title_span'); ?></span> <?php echo get_field('mehr-title_2'); ?></h2>
                <div class="mehr-content df jcsb">
                    <div class="mehr-block">
                        <div class="mehr-icon">
                            <img src="<?php bloginfo('template_directory') ?>/img/mehr-icon_001.webp" alt="">
                        </div>
                        <div class="mehr-text">
                            <p><?php echo get_field('mehr-text-1_1'); ?><strong>  <?php echo get_field('mehr-strong_1'); ?> </strong></p>
                        </div>
                    </div>
                    <div class="mehr-block">
                        <div class="mehr-icon">
                            <img src="<?php bloginfo('template_directory') ?>/img/mehr-icon_002.webp" alt="">
                        </div>
                        <div class="mehr-text">
                            <p><?php echo get_field('mehr-text-2_1'); ?></p>
                        </div>
                    </div>
                    <div class="mehr-block">
                        <div class="mehr-icon">
                            <img src="<?php bloginfo('template_directory') ?>/img/mehr-icon_003.webp" alt="">
                        </div>
                        <div class="mehr-text">
                            <p><?php echo get_field('mehr-text-3_1'); ?></p>
                        </div>
                    </div>
                    <div class="mehr-block">
                        <div class="mehr-icon">
                            <img src="<?php bloginfo('template_directory') ?>/img/mehr-icon_004.webp" alt="">
                        </div>
                        <div class="mehr-text">
                            <p><?php echo get_field('mehr-text-4_1'); ?> <strong><?php echo get_field('mehr-strong_2'); ?></strong><?php echo get_field('mehr-text-4_2'); ?></p>
                        </div>
						<div class="mehr-image mobile">
                            <img src="<?php bloginfo('template_directory') ?>/img/mehr_bg.webp" alt="">
                        </div>
                    </div>
                    <div class="mehr-block">
                        <div class="mehr-icon">
                            <img src="<?php bloginfo('template_directory') ?>/img/mehr-icon_005.webp" alt="">
                        </div>
                        <div class="mehr-text">
                            <p><?php echo get_field('mehr-text_5_1'); ?></p>
                        </div>
                    </div>
                </div>
                <p class="mehr-subtitle"><?php echo get_field('mehr-subtitle'); ?></p>
                <div class="mehr-button">
                    <a href="<?php echo get_field('mehr-link'); ?>">
                        <button class="primary-button"><?php echo get_field('mehr-button'); ?></button>
                    </a>
                </div>
            </div>
        </section>
		<section class="methode">
            <div class="container">
                <h3 class="methode-title"><?php echo get_field('methode-title'); ?> <span><?php echo get_field('methode-title_span'); ?></span></h3>
			</div>
			<div class="methode-container">
                <div class="responcive">


                <?php
				$stories = get_posts( array(
                    'numberposts' => 5,
                    'cat'    => '41, 43',
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

foreach( $stories as $post ){
	setup_postdata( $post ); ?>
				<div class="methode-slide df jcsb">
                        <div class="methode-left">
                            <h4 class="methode-name"><?php echo get_field('name'); ?></h4>
                            <p class="methode-age"><?php echo get_field('age'); ?></p>
                            <h5 class="aus"><?php echo get_field('title_1'); ?></h5>
                            <p class="aus-text">
                                <?php echo get_field('text_1'); ?>
                            </p>
                            <h5 class="aus"><?php echo get_field('title_2'); ?></h5>
                            <p class="aus-text">
                                <?php echo get_field('text_2'); ?> <span><?php echo get_field('cash'); ?></span> <?php echo get_field('text_3'); ?> 
                            </p>
                        </div>
                        <div class="methode-right">
							<a  data-video-id="<?php echo get_field('link'); ?>" target="_blank">
                            	<img src="<?php echo get_field('photo'); ?>" alt="">
								<div class="methode-wrapper">
								
								</div>
							</a>
                        </div>
                    </div>
				<?php
}

wp_reset_postdata(); 
				?>



                </div>
				<div class="methode-arrows">
					<div class="methode-counter"><span class="me">1</span>/<span>3</span></div>
				</div>
				
            </div>
			

			
        </section>

        <section class="wir">
            <div class="container">
                <div class="wir-content df jcsb">
                    <div class="wir-block">
                        <h2 class="wir-title"><?php echo get_field('wir-title'); ?></h2>
                        <div class="wir-list">
                            <li><?php echo get_field('wir-list_1'); ?></li>
                            <li><?php echo get_field('wir-list_2'); ?></li>
                            <li><?php echo get_field('wir-list_3'); ?></li>
                            <li><?php echo get_field('wir-list_4'); ?></li>
                            <li><?php echo get_field('wir-list_5'); ?></li>
                            <li><?php echo get_field('wir-list_6'); ?></li>
                        </div>
                        <div class="wir-button">
                            <a href="<?php echo get_field('wir-link'); ?>">
                                <button class="primary-button"><?php echo get_field('wir-button'); ?></button>
                            </a>
                        </div>
                    </div>
                    <div class="wir-block">
                        <h2><?php echo get_field('wir-text-1_1'); ?><span> <?php echo get_field('wir-text_span'); ?></span> <?php echo get_field('wir-text-1_2'); ?></h2>
                        <div class="wir-button">
                            <a href="<?php echo get_field('wir-link'); ?>">
                                <button class="primary-button"><span><img src="<?php bloginfo('template_directory') ?>/img/fire2.svg"></span><?php echo get_field('wir-button_2'); ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form callback">
            <div class="container lang-select">
                <h3 class="form-title"><?php echo get_field('form-title_1'); ?><span> <?php echo get_field('form-span_1'); ?></span> <?php echo get_field('form-title_2'); ?> <span><?php echo get_field('form-span_2'); ?></span> <?php echo get_field('form-title_3'); ?></h3>
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
<?php get_footer(); ?>