<?php get_header(); ?>
<main class="blog">
        <div class="blog_top" style="background-image: url(/wp-content/themes/psa/img/blog.webp);">
                      <div class="blog_top_wrapper">
                          <h1>PSA MARKETING BLOG</h1>
                          <p>Wir bieten individuelle und über Jahre erprobte Lösungen 
        im E-Commerce an.</p>
                      </div>
        </div>
<!--
         <section class="about-us_top blue_overlay" style="background-image: url(/wp-content/themes/psa/img/koeln-min.jpg);">
              <div class="container">
                  <h1 class="sppb-addon-title animated-heading-text push">
                      <span class="animated-heading-before-part">PSA MARKETING</span>
                      <span class="animated-text-words-wrapper" style="transition-duration: 600ms; transition-property: width; width: max-content;">
                          <span class="animated-text is-visible">BLOG</span>
                      </span>
                  </h1>
              </div>
          </section>
-->
          <section class="blog_content">
              <div class="container">
<!--                  <h2>UPDATED MATERIALS FROM PSA Marketing EXPERTS</h2>-->
                 <h2>UNSER BLOG MIT DEN AKTUELLEN NEWS RUND UM DEN ONLINEHANDEL</h2>
                  <div class="blog_filters">
                      <style>
                        .blog_filters ul .current-blog-<?php $category_id = get_queried_object_id(); echo $category_id; ?>{
                          background-color: #fd9b01;
                          border-color: #fd9b01;                          
                        }
                        html body .current-blog-<?php $category_id = get_queried_object_id(); echo $category_id; ?> a {
                          color: #fff;
                        }
                      </style>  
                      <ul>
                        <?php
                            $category_id = 2; // ID рубрики, для которой нужно получить ссылку
                            $category_link = get_term_link( $category_id );
                            echo '<li class="current-blog-2"><a href="' . esc_url( $category_link ) . '">ALL</a></li>';

                            $args = array(
                                'taxonomy' => 'category',
                                'parent' => 2 // ID родительской рубрики
                            );

                            $child_categories = get_terms( $args ); 

                            if( $child_categories && !is_wp_error( $child_categories ) ) {
                                foreach( $child_categories as $category ) {
                                    echo '<li class="current-blog-'.$category->term_id.'"><a href="' . get_term_link( $category ) . '">' . $category->name .'</a></li>';
                                }
                            }
                        ?>
                          <!-- <li class="active">ALL</li>
                          <li>Amazon</li>
                          <li>E-СOMMERCE</li>
                          <li>TAXES</li>
                          <li>ACCOUNTS AND PAYMENT SYSTEMS</li> -->
                      </ul>
                  </div>
                  <div class="blog_items">
                     <?php while (have_posts()) : the_post(); ?>
                    <?php $metas = get_post_meta( $post->ID ); ?>
                    <?php $url = get_permalink(); ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <div class="blog_item">
                         <a href="<?php echo $url; ?>" class="blog_item_img"><img src="<?php echo get_field('previewpreview')['url']; ?>" alt=""></a>
                         <div class="blog_item_content">
                             <a href="<?php echo $url; ?>" class="blog_item_title"><?php the_title(); ?></a>        
                             <div class="blog_item_desk">
                                 <?php echo get_the_excerpt(); ?>
                             </div>
                             <a href="<?php echo $url; ?>" class="blog_item_link">Weiterlesen</a>
                         </div>
                      </div>
   
                    <?php endwhile; ?>
                  </div>
              </div>
          </section>
     </main>

<?php get_footer(); ?>
