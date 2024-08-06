<?php
/*
Template Name: Main
*/

get_header('home');
?>

	<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="hero">
            <div class="hero-slider slider ">


                <div class="hero-slide">
                    <div class="slider-bg">
                        <img src="<?php bloginfo('template_directory') ?>/img/slide_bg_001.jpg" alt="">
                    </div>
                    <div class="slider-content container df aic">
                        <div class="slider-text">
                            <!--<div class="slider-counter"><span class="cp">1</span>/<span>3</span></div>-->
                            <h1 class="slider-title"><?php echo get_field('slider-title'); ?></h1>
                            <h6 class="slider-subtitle"><?php echo get_field('slider-subtitle'); ?></h6>
                            <div class="slider-buttons df aic">
                                <div class="slider-button header-left__button">
                                    <a href="<?php echo get_field('hero-link'); ?>">
                                        <button class="primary-button"><?php echo get_field('hero-button-1'); ?></button>
                                    </a>
                                </div>
								<!--<div class="slider-button header-left__button">
                                    <a href="/services">
                                        <button class="secondary-button"><?php echo get_field('hero-button-1'); ?></button>
                                    </a>
                                </div>-->
                               <!-- <div class="slider-button header-right__button">
                                    <a href="/services">
                                        <button><?php echo get_field('hero-button-2'); ?></button>
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <div class="slider-photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/hero_001.webp" alt="">
                            <div class="hero-saper">
                                <a href="<?php echo get_field('instagram-link'); ?>" target="_blank">
                                    <div class="hero-saper__title df aic">
                                        <h2>Pavel Saper</h2>
                                        <div class="hero-saper__verify">
                                            <img src="<?php bloginfo('template_directory') ?>/img/verified.svg" alt="">
                                        </div>
                                    </div>
                                    <p><?php echo get_field('instagram-post'); ?></p>
                                    <div class="hero-saper__instagram df aic">
                                        <h6>Instagram:</h6>
                                        <div class="hero-instagram">
                                            <img src="<?php bloginfo('template_directory') ?>/img/instagram_001.svg" alt="instagram">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="hero-google">
                                <a href="https://www.google.com/maps/place/PSA+Marketing/@50.9844406,6.888997,16z/data=%214m7%213m6%211s0x0:0x40eaa7b87634ebd6%218m2%213d50.9837464%214d6.8913741%219m1%211b1" target="_blank">
                                    <div class="hero-google__logo">
                                        <img src="<?php bloginfo('template_directory') ?>/img/google_logo.svg" alt="google">
                                    </div>
                                    <h2>280+</h2>
                                    <p><?php echo get_field('google_01'); ?></p>
                                    <div class="hero-google__stars df">
                                        <p>5.0</p>
                                        <div class="">
                                            <img src="<?php bloginfo('template_directory') ?>/img/stars.svg" alt="stars">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--slide-->
                </div>
            </div>
            <div class="container">
                <div class="hero-advantages df aic jcsb">
                    <h2 class="hero-advantages__title"><?php echo get_field('hero-advantages__title'); ?></h2>
                    <div class="hero-advantages__block">
                        <h2 class="hero-advantages__number"><?php echo get_field('advantage-1__number'); ?></h2>
                        <p class="hero-advantages__text"><?php echo get_field('advantage-1__text'); ?></p>
                    </div>
                    <div class="hero-advantages__block">
                        <h2 class="hero-advantages__number"><?php echo get_field('advantage-2__number'); ?></h2>
                        <p class="hero-advantages__text"><?php echo get_field('advantage-2__text'); ?></p>
                    </div>
                    <div class="hero-advantages__block">
                        <h2 class="hero-advantages__number"><?php echo get_field('advantage-3__number'); ?></h2>
                        <p class="hero-advantages__text"><?php echo get_field('advantage-3__text'); ?></p>
                    </div>
                    <div class="hero-advantages__block">
						<h2 class="hero-advantages__number"><?php echo get_field('advantage-4__number'); ?></h2>
                        <p class="hero-advantages__text"><?php echo get_field('advantage-4__text'); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <h2 class="section-title services-title"><?php echo get_field('services-title'); ?></h2>
                <div class="services-blocks df jcsb">
                    <div class="services-block">
                        <div class="services-bg">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-bg-1.webp" alt="" class="desktop">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-mobile-bg-1.webp" alt="" class="mobile">
                        </div>
                        <div class="services-container df">
                            <div class="services-link">
                                <a href="<?php echo get_field('link_1'); ?>"><?php echo get_field('services-subtitle_01'); ?></a>
                            </div>
                            <p class="services-description">
                                <?php echo get_field('services-description_1'); ?>                           
                            </p>
                            <div class="services-subdescription df">
                                <p><?php echo get_field('services-subdescription_1'); ?></p>
                                <p><?php echo get_field('services-subdescription_2'); ?></p>
                                <p><?php echo get_field('services-subdescription_3'); ?></p>
                            </div>
                            <div class="services-button">
                                <a href="<?php echo get_field('link_1'); ?>">
                                    <button class="primary-button"><?php echo get_field('services-button'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services-block">
                        <div class="services-bg">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-bg-2.webp" alt="" class="desktop">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-mobile-bg-2.webp" alt="" class="mobile">
                        </div>
                        <div class="services-container df">
                            <div class="services-link">
                                <a href="<?php echo get_field('link_2'); ?>"><?php echo get_field('services-subtitle_02'); ?></a>
                            </div>
                            <p class="services-description">
                                <?php echo get_field('services-description_2'); ?>                            
                            </p>
                            <div class="services-button">
                                <a href="<?php echo get_field('link_2'); ?>">
                                    <button class="primary-button"><?php echo get_field('services-button'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services-block">
                        <div class="services-bg">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-bg-3.webp" alt="" class="desktop">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-mobile-bg-3.webp" alt="" class="mobile">
                        </div>
                        <div class="services-container df">
                            <div class="services-link">
                                <a href="<?php echo get_field('link_3'); ?>"><?php echo get_field('services-subtitle_03'); ?></a>
                            </div>
                            <p class="services-description">
                                <?php echo get_field('services-description_3'); ?>                            
                            </p>
                            <div class="services-button">
                                <a href="<?php echo get_field('link_3'); ?>">
                                    <button class="primary-button"><?php echo get_field('services-button'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services-block">
                        <div class="services-bg">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-bg-4.webp" alt="" class="desktop">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-mobile-bg-4.webp" alt="" class="mobile">
                        </div>
                        <div class="services-container df">
                            <div class="services-link">
                                <a href="<?php echo get_field('link_4'); ?>"><?php echo get_field('services-subtitle_04'); ?></a>
                            </div>
                            <p class="services-description">
                                <?php echo get_field('services-description_4'); ?>   
                            </p>                        
                            <div class="services-button">
                                <a href="<?php echo get_field('link_4'); ?>">
                                    <button class="primary-button"><?php echo get_field('services-button'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services-block">
                        <div class="services-bg">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-bg-5.webp" alt="" class="desktop">
                            <img src="<?php bloginfo('template_directory') ?>/img/home-services-mobile-bg-5.webp" alt="" class="mobile">
                        </div>
                        <div class="services-container services-container__youtube df">
                            <div class="services-link">
                                <a href="https://youtube.com/c/PSAMarketing" target="_blank"><?php echo get_field('services-subtitle_05'); ?></a>
                            </div>
                            <p class="services-description">
                                <?php echo get_field('services-description_5'); ?><span>YouTube</span>
                            </p>                           
                            <div class="services-button youtube-button">
                                <a href="https://youtube.com/c/PSAMarketing" target="_blank">
                                    <button><img src="<?php bloginfo('template_directory') ?>/img/projector.svg">YouTube</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sol">
            <div class="sol-container container">
                <h2 class="section-title sol-title"><?php echo get_field('sol-title'); ?></h2>
                <p class="sol-subtitle"><?php echo get_field('sol-subtitle'); ?></p>
                <div class="sol-content df">
                    <div class="sol-block">
                        <img src="<?php bloginfo('template_directory') ?>/img/home-coaching.webp" alt="">
                    </div>
                    <div class="sol-block">
                        <p><?php echo get_field('sol-text_1'); ?></p>
                        <p><?php echo get_field('sol-text_2'); ?></p>
                        <p><?php echo get_field('sol-text_3'); ?></p>
                        <div class="sol-links df aic">
                            <div class="sol-link df">
                                <div class="sol-icon">
                                    <img src="<?php bloginfo('template_directory') ?>/img/email_color.svg" alt="email">
                                </div>
                                <h2>
                                    <a href="mailto:info@psamarketing.de"><?php echo get_field('sol-email'); ?></a>
                                </h2>
                            </div>
                            <div class="sol-link df">
                                <div class="sol-icon">
                                    <img src="<?php bloginfo('template_directory') ?>/img/phone_color.svg" alt="phone">
                                </div>
                                <h2>
                                    <a href="tel:49022156094145"><?php echo get_field('sol-phone'); ?></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="offer">
            <div class="offer-container container">
                <div class="offer-content df aic jcsb">
                    <div class="offer-block">
                        <h2 class="offer-title"><?php echo get_field('offer-title'); ?></h2>
                        <p><?php echo get_field('offer-text_1'); ?></p>
                        <p><span><img src="https://s.w.org/images/core/emoji/14.0.0/svg/1f525.svg" class="emoji" width="16" height="16" alt=""></span> <?php echo get_field('offer-text_2'); ?></p>
                        <div class="offer-buttons df aic">
                            <div class="offer-button">
                                <a href="tel:49022156094145">
                                    <button class="primary-button"><?php echo get_field('offer-button_1'); ?></button>
                                </a>
                            </div>
                            <div class="offer-button">
                                <a href="/kontakt">
                                    <button><?php echo get_field('offer-button_2'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="offer-block">
                        <img src="<?php bloginfo('template_directory') ?>/img/home-expertise.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="youtube">
            <div class="youtube-container container">
                <h2 class="section-title youtube-title"><?php echo get_field('youtube-title_1'); ?> <span><a href="https://youtube.com/c/PSAMarketing" target="_blank"><?php echo get_field('youtube-title_2'); ?></a></span> <?php echo get_field('youtube-title_3'); ?></h2>
                <p class="youtube-subtitle"><?php echo get_field('youtube-subtitle'); ?></p>
            </div>
            <div class="youtube-slider slider multiple-items">
                <?php
				$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'youtube',
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

foreach( $my_posts as $post ){
	setup_postdata( $post ); ?>
				 <div class="youtube-slide">
                    <a href="<?php echo get_field('link'); ?>" class="video" target="_blank">
						<div class="youtube-image">
							<img src="<?php echo get_field('image'); ?>" alt="">
							 <div class="youtube-logo">
                                <img src="<?php bloginfo('template_directory') ?>/img/youtube.svg" alt="youtube">
                            </div>
						</div>

                        <h3><?php echo get_field('title'); ?></h3>
						<p><?php echo get_field('date'); ?></p>

                    </a>
                </div>
				<?php
}

wp_reset_postdata(); 
				?>








            </div>
            <div class="slider-counter"><span class="cp">1</span>/<span>8</span></div>
        </section>
		
		<section class="section" id="reviews">
        <div class="container">
            <h3><?php echo get_field('reviews-title_1'); ?> <span class="accent"><?php echo get_field('reviews-title_2'); ?></span> <?php echo get_field('reviews-title_3'); ?></h3>
            <div class="reviews_filter">
                <div class="filter active">
                <span>All Reviews<strong>5.0</strong></span>
                </div>
                <div class="filter" data-type="google">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri() ?>/img/home-reviews-google.webp" alt="">
                    </div>
                    <span>Google   <strong>5.0</strong></span>
                </div>
                <div class="filter" data-type="proven">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri() ?>/img/home-reviews-expert.webp" alt="">
                    </div>
                    <span>Proven Expert   <strong>5.0</strong></span>
                </div>
            </div>
            <div class="reviews">
                <?php
                    query_posts('cat=3&posts_per_page=99&order=ASC');
                    while (have_posts()):
                        the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                        $text = get_the_content();
                ?>
                <div class="review" data-type="<?php echo get_field('source'); ?>">
                    <div class="info">
                        <div class="avatar">
                            <img src="<?php echo get_field('image'); ?>" alt="">
                        </div>
                        <div class="text">
                            <p class="name"><?php echo get_field('name'); ?></p>
                            <p class="date"><?php echo get_field('date'); ?></p>
                        </div>
                    </div>
                   <!-- <div class="rating">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <img src="<?= get_template_directory_uri() ?>/img/review_stars.svg" alt="">
                        <?php endfor; ?>
                    </div> -->
					<div class="review-stars">
                       <img src="<?php bloginfo('template_directory') ?>/img/review_stars.svg" alt="">
                    </div>
                    <div class="review_text"><?php echo get_field('text'); ?></div>
                    <div class="read_more_collapse">
                        <button>Continue reading here</button>
                        <button>Collapse</button>
                    </div>
                    <div class="source">
                        <?php if (get_field('source') == "google"): ?>
                            <img src="<?= get_template_directory_uri() ?>/img/posted_google.webp" alt="">
                        <?php else: ?>
                        <img src="<?= get_template_directory_uri() ?>/img/posted_proven.webp" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="reviews_pagination">
                <button class="slider_left" aria-label="Reviews slider left">
                    <svg width="24" height="24">
                        <path d="M24 12.5H2M2 12.5L12.5 1.5M2 12.5L12.5 23.5" stroke="#111825" stroke-width="2"/>
                    </svg>
                </button>
                <div class="spans">
                    <span class="current">1</span>
                    <span class="separator">/</span>
                    <span class="total">10</span>
                </div>
                <button class="slider_right active" aria-label="Reviews slider left">
                    <svg width="24" height="24">
                        <path d="M0 12.5H22M22 12.5L11.5 1.5M22 12.5L11.5 23.5" stroke="#111825" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
		
		
	
        <section class="callback">
            <div class="callback-container container">
                <h2 class="section-title callback-title"><?php echo get_field('callback-title'); ?></h2>
        <div class="container lang-select">
        
			<div class="lang en">
				<h2 class="section-title callback-title">Contact us now!</h2>
				                    <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "eu1",
    portalId: "26073268",
    formId: "19c1531d-0131-4c9e-b573-a96028b68e44"
  });
</script>
			</div>
			<div class="lang de">
				<h2 class="section-title callback-title">Kontaktiere Sie uns jetzt!</h2>

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