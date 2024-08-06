<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage landing
 */
get_header(); // Подключаем header.php ?>
<?php
    $lang = get_locale();
    $current_lang = 'DE';
    $current_url = $_SERVER['REQUEST_URI'];
    $current_lang_link = substr($current_url, 3);
    //echo $current_lang_link;
    if ($current_lang_link != '/') {
        $active_lang_link = $current_lang_link;
    } else {
    	if ($_SERVER['REQUEST_URI'] == '/en/' || $_SERVER['REQUEST_URI'] == '/de/') {
    		$active_lang_link = '';
    	} else {
    		$active_lang_link = $_SERVER['REQUEST_URI'];
    	}        
    }

    if ($lang == 'de_DE') {
        $current_lang = 'de';
    } elseif ($lang == 'en_US') {
        $current_lang = 'en';
    }
?>
<style>
    .header_usual_bottom {
            padding: 20px 0;
            background: rgba(0,0,0,0.8);
        }
    .not-found-page {
        background: #fff;
        color: #fff;
        padding-top: 100px;
    }
    .not-found-page .container {
        display: flex;
        align-items: center;
    }
    .not-found-page h1 {
        margin-bottom: 60px;
        color: rgb(51, 51, 51);
        font-size: 43px;
    }
    .not-found-page h2 {
        margin-bottom: 20px;
    }
    .not-found-page_left,
    .not-found-page_right {
        width: 50%;
    }
    .not-found-page_right img {
        width: 90%;
        margin-left: auto;
    }
    .not-found-page_button_home {
        display: inline-block;
        background-color: #ffffff;
        color: #ff6d00;
        font-size: 16px;
        border: 2px solid #ff6d00 !important;
        margin: 5px;
        padding: 0 35px;
        line-height: 45px;
        border-radius: 30px;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }
    .not-found-page_button_home:hover {
        background-color: #ff6d00;
        color: #fff;
    }
    .not-found-page_services_link {
        display: inline-block;
        margin: 5px;
        padding: 0 35px;
        line-height: 45px;
        border: 2px solid #ff6d00;
        background-color: #ff6d00;
        color: #fff;
        font-size: 18px;
        border-radius: 30px;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }
    .not-found-page_services_link:hover {
        background-color: #c25300;
    }
    @media(max-width: 991px) {
        .not-found-page {
            padding-top: 0p;
        }
        .not-found-page .container {
            padding: 20px;
            flex-wrap: wrap;
        }
        .not-found-page_left,
        .not-found-page_right {
            width: 100%;
        }
        .not-found-page_left {
            margin-bottom: 15px;
        }
    }
    @media(max-width: 560px) {
        .not-found-page h1 {
            font-size: 25px;
            margin-bottom: 20px;
        }
        .not-found-page_button_home, .not-found-page_services_link{
            padding: 0 25px;
            line-height: 40px;
            font-size: 14px;
        }
    }
</style>
<main class="not-found-page">
    <div class="container">
       <div class="not-found-page_left">
           <h1>Whoops...<br>
This page is not available</h1>
          <div class="not-found-page_left_buttons">
              <a href="/" class="not-found-page_button_home">Go back home</a>
              <a href="/<?php echo $current_lang ?>/services/" class="not-found-page_services_link">Services</a>
          </div>
       </div>
       <div class="not-found-page_right">
           <img src="<?php bloginfo('template_directory') ?>/img/error-pic.png" alt="">
       </div>
    </div>
</main>
<?php get_footer(); // подключаем footer.php ?>