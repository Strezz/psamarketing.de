<?php

/*
Template Name: Contact
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="contact-hero">
            <div class="container">
                <h1><?php echo get_field('title'); ?></h1>
            </div>
        </section>
        <div class="contact-content">
            <div class="container lang-select df jcsb">
                <div class="contact-left df">
                    <div class="contact-block">
                        <div class="contact-top df jcsb aic">
                            <div class="df aic">
                                <div class="services-list__offer-photo">
                                    <img src="<?php bloginfo('template_directory') ?>/img/arbitrage_comment.webp" alt="">
                                </div>
                                <div class="services-list__offer-text">
                                    <h2 class="df aic">PSA Marketing<span><img src="<?php bloginfo('template_directory') ?>/img/verified.webp" alt=""></span></h2>
                                    <h6><?php echo get_field('company-subtitle'); ?></h6>
                                </div>
                            </div>
                            <div>
                                <img src="<?php bloginfo('template_directory') ?>/img/amazon_logo.webp" alt="">
                            </div>
                            <div>
                                <?php echo get_field('company-text'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="contact-block">
                        <div class="contact-links df jcsb aic">
                            <a href="https://psamarketing.de/en/contact/tel:+%2049(0)%20221%20560%2094%20145" class="df aic contact-links__phone">
                                <?php echo get_field('phone'); ?>
                            </a>
                            <a href="mailto:info@psamarketing.de" class="df aic contact-links__mail">
                                <?php echo get_field('email'); ?>
                            </a>
                            <a href="mailto:info@psamarketing.de" class="df aic contact-links__adress">
                                <?php echo get_field('adress'); ?>
                            </a>
                        </div>
                        <div class="map" id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.307066789919!2d6.886342415755137!3d51.102794479570726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bf32f8841264e3%3A0xdd96ee07c6b8a982!2zUmhlaW5wcm9tZW5hZGUgMTMsIDQwNzg5IE1vbmhlaW0gYW0gUmhlaW4sINCT0LXRgNC80LDQvdC40Y8!5e0!3m2!1sru!2sru!4v1687288925620!5m2!1sen!2sen" frameborder="0" width="100%" height="530"></iframe>
                        </div>
                    </div>
                </div>
                <div class="contact-right">
                    <div class="contact-block">
             <div class="contacts_wrapper_right">
				 <div class="lang en">
                 <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                 <script data-hubspot-rendered="true">
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
                </div>
            </div>
        </div>
		</main>

<?php get_footer() ?>