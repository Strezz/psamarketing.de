<?php

/*
Template Name: FAQ
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
        <section class="faq-hero">
            <div class="container">
                <h1><?php echo get_field('title'); ?></h1>
            </div>
        </section>
        <section class="faq">
            <div class="container">
                <h2><?php echo get_field('subtitle'); ?></h2>
                <ol>
                    <li>
                        <h3><?php echo get_field('q_1'); ?></h3>
                        <h6><?php echo get_field('a_1'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_2'); ?></h3>
                        <h6><?php echo get_field('a_2'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_3'); ?></h3>
                        <h6><?php echo get_field('a_3'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_4'); ?></h3>
                        <h6><?php echo get_field('a_4'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_5'); ?></h3>
                        <h6><?php echo get_field('a_5'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_6'); ?></h3>
                        <h6><?php echo get_field('a_6'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_7'); ?></h3>
                        <h6><?php echo get_field('a_7'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_8'); ?></h3>
                        <h6><?php echo get_field('a_8'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_9'); ?></h3>
                        <h6><?php echo get_field('a_9'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_10'); ?></h3>
                        <h6><?php echo get_field('a_10'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_11'); ?></h3>
                        <h6><?php echo get_field('a_11'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_12'); ?></h3>
                        <h6><?php echo get_field('a_12'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_13'); ?></h3>
                        <h6><?php echo get_field('a_13'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_14'); ?></h3>
                        <h6><?php echo get_field('a_14'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_15'); ?></h3>
                        <h6><?php echo get_field('a_15'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_16'); ?></h3>
                        <h6><?php echo get_field('a_16'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_17'); ?></h3>
                        <h6><?php echo get_field('a_17'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_18'); ?></h3>
                        <h6><?php echo get_field('a_18'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_19'); ?></h3>
                        <h6><?php echo get_field('a_19'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_20'); ?></h3>
                        <h6><?php echo get_field('a_20'); ?></h6>
                    </li>
                    <li>
                        <h3><?php echo get_field('q_21'); ?></h3>
                        <h6><?php echo get_field('a_21'); ?></h6>
                    </li>
                </ol>
                <div class="faq-form lang-select">
               
                        <h2><?php echo get_field('form-title'); ?></h2>
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
            </div>
        </section>
		</main>

<?php get_footer() ?>