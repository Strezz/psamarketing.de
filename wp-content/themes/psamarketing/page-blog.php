      <?php

/*
Template Name: Blog
*/

get_header(); // подключаем header.php ?>

		<main class="single static_page" id="post-<?php the_ID(); ?>">
            <section class="blog-hero df">
                <div class="container">
                    <h1>PSA MARKETING BLOG</h1>
                    <h6>Wir bieten individuelle und über Jahre erprobte Lösungen im E-Commerce an.</h6>
                </div>
            </section>
            <section class="blog">
                <div class="container">
                    <h2>UNSER BLOG MIT DEN AKTUELLEN NEWS RUND UM DEN ONLINEHANDEL</h2>
                </div>
                <div class="container df blog-content">
					                <?php
				$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'blogs',
	'orderby'     => 'date',
	'order'       => 'DESC',
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
                    <div class="blog-item">
						<a href="<?php echo get_the_permalink(); ?>">
                        
                            <div class="blog-image">
                                <img src="<?php echo get_field('mobile-image'); ?>" alt="">
                            </div>
                            <div class="blog-block">
                                <div class="blog-title">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <?php echo get_field('blog-title'); ?>
                                    </a>
                                </div>
                                <div class="blog-text">
                                    
									<?php the_content() ?>
                                </div>
                                <div class="blog-link">
                                    <a href="<?php echo get_the_permalink(); ?>">Weiterlesen</a>
                                </div>
                            </div>
						</a>
                    </div>
				<?php
}

wp_reset_postdata(); 
				?>

            </section>
		</main>

<?php get_footer() ?>
			
			