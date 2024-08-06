<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psamarketing
 */

?>
<?php
$lang = get_user_locale();
/*kz_KZ ru_RU en_US*/
?>
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

        <footer class="footer new-footer">
            <div class="container">
                <div class="footer-top df jcsb">
                    <div class="footer-logo">
                        <img src="<?php bloginfo('template_directory') ?>/img/logo_001.svg" alt="logo">
                    </div>
                    <div class="footer-right lang-select">
                        <div class="footer-social df aic mobile">
                            <div class="footer-link">
                                <a href="https://facebook.com/psamarketingDE" target="_blank">
                                    <img src="<?php bloginfo('template_directory') ?>/img/fb_new.svg" alt="fb">
                                </a>
                            </div>
                            <div class="footer-link">
                                <a href="https://www.instagram.com/psamarketingde/" target="_blank">
                                    <img src="<?php bloginfo('template_directory') ?>/img/insta_new.svg" alt="instagram">
                                </a>
                            </div>
                            <div class="footer-link">
                                <a href="https://youtube.com/c/PSAMarketing" target="_blank">
                                    <img src="<?php bloginfo('template_directory') ?>/img/youtube_new.svg" alt="youtube">
                                </a>
                            </div>
                        </div>
                        <div class="footer-links df aic">
                            <a href="/impressum/">Impressum</a>
                            <div class="divider">/</div>
                            <a href="/agb/">AGB</a>
                            <div class="divider">/</div>
                            <a href="">Datenschutzerklärung</a>
                        </div>
                        <div class="footer-text de">
                            <p>Mit unserer Expertise aus der Praxis bringen wir dich schnell und
                                <br>unkompliziert zu deinem persönlichen Ziel.</p>
                        </div>
                        <div class="footer-text en">
                            <p>With our practical expertise, we will get you to your personal
<br>goal quickly and easily.</p>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom df aic jcsb">
                    <div class="footer-copyright">
                        <p>© Сopyright 2024 All Rights Reserved <br>PSA Marketing GmbH</p>
                    </div>
                    <div class="footer-social df aic desktop">
                        <div class="footer-link">
                            <a href="https://facebook.com/psamarketingDE" target="_blank">
                                <img src="<?php bloginfo('template_directory') ?>/img/fb_new.svg" alt="fb">
                            </a>
                        </div>
                        <div class="footer-link">
                            <a href="https://www.instagram.com/psamarketingde/" target="_blank">
                                <img src="<?php bloginfo('template_directory') ?>/img/insta_new.svg" alt="instagram">
                            </a>
                        </div>
                        <div class="footer-link">
                            <a href="https://youtube.com/c/PSAMarketing" target="_blank">
                                <img src="<?php bloginfo('template_directory') ?>/img/fb_new.svg" alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
<?php
if (!isset($_COOKIE["acceptCookie"])) {
    ?>
    <style>
        .cookies-modal {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 100000;
        }

        .cookies-modal.show {
            display: block !important;
        }

        .cookies-modal_wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 auto;
            padding: 20px 30px 15px 30px;
            max-width: 100%;
            box-shadow: 0 0 11px 1px rgba(0, 0, 0, 0.14);
            background-color: #ffffff;
        }

        .cookies-modal_wrapper h3,
        .cookies-modal_wrapper h4 {
            margin: 0 0 4px 0 !important;
            color: #242f3f !important;
            font-family: 'Source Sans Pro', Verdana;
            margin: 0;
            margin-bottom: 13px;
            font-weight: 700;
            line-height: 1;
        }

        .cookies-modal_wrapper p,
        .cookies-modal_wrapper a {
            color: #242f3f;
            font-family: "Source Sans Pro";
            font-size: 14px;
            font-weight: 300;
            line-height: 19px;
            margin-bottom: 15px;
        }

        .cookies-modal_wrapper p:nth-last-child(-n+2) {
            margin-bottom: 0;
        }

        .cookies-modal_wrapper p a {
            margin-bottom: 0;
        }

        .cookies-modal_wrapper a {
            text-decoration: underline;
        }

        .cookies-modal_wrapper h3 {
            font-size: 18px;
        }

        .cookies-modal_wrapper h4 {
            font-size: 18px;
        }

        .cookies-modal_details {
            display: none;
        }

        .cookies-modal_details.open {
            display: block;
        }

        .cookies-modal_info.hide {
            display: none;
        }

        .cookies-modal_info {
            margin-right: 30px;
        }

        .cookies-modal_buttons {
            display: flex;
        }

        .cookies-modal_wrapper .accept {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
            width: 164px;
            height: 45px;
            border: none;
            border-radius: 22px;
            background-color: #ff9201;
            background-image: linear-gradient(to right, #ffa71f 0%, #ff8c01 100%);
            color: #fffefe;
            font-size: 15px;
            font-weight: 400;
            transition: all 0.3s ease;
        }

        .cookies-modal_wrapper .accept:hover {
            opacity: 0.8;
            transform: scale(1.04);
        }

        .cookies-modal_wrapper .details,
        .cookies-modal_wrapper .back {
            height: initial;
            padding: 0;
            border: none;
            color: #000;
            font-size: 15px;
            font-weight: 400;
            background: transparent;
            text-decoration: underline;
            transition: all 0.3s ease;
        }

        .cookies-modal_wrapper .details:hover,
        .cookies-modal_wrapper .back:hover {
            transform: scale(1.04);
        }

        .cookies-modal_wrapper .back {
            display: none;
        }

        .cookies-modal_wrapper .back.show {
            display: flex;
        }

        @media (max-width: 560px) {
            .cookies-modal_wrapper {
                flex-direction: column;
                align-items: flex-start;
            }

            .cookies-modal_info {
                margin-right: 0;
            }

            .cookies-modal_wrapper .accept {
                margin-top: 10px;
            }
        }
    </style>
    <?php
    if ($lang == 'de_DE') {
        ?>
        <div class="cookies-modal" style="display: none;">
            <div class="cookies-modal_wrapper">
                <div class="cookies-modal_info">
                    <p>Diese Website verwendet Cookies. Wir verwenden Cookies, um sicherzustellen, dass Sie die beste
                        Erfahrung auf unserer Website machen. Bitte lesen Sie unsere Datenschutz und
                        Cookie-Richtlinien.</p>
                    <button class="details">Cookie-Details</button>
                </div>
                <div class="cookies-modal_details">
                <h4>Datenschutzeinstellungen</h4>
                    <p>Wir verwenden Cookies und andere Technologien auf unserer Website. Einige von ihnen sind
                        essenziell,
                        während andere uns helfen, diese Website und Ihre Erfahrung zu verbessern. Personenbezogene
                        Daten
                        können verarbeitet werden (z. B. IP-Adressen), z. B. für personalisierte Anzeigen und Inhalte
                        oder
                        Anzeigen- und Inhaltsmessung. Weitere Informationen über die Verwendung Ihrer Daten finden Sie
                        in
                        unserer <a href="https://psamarketing.de/de/data-protection">Datenschutzerklärung</a>. Hier
                        finden
                        Sie eine Übersicht über alle verwendeten Cookies. Sie können Ihre Einwilligung zu ganzen
                        Kategorien
                        geben oder sich weitere Informationen anzeigen lassen und so nur bestimmte Cookies auswählen.
                    </p>
                    <h4>Essenziell </h4>
                    <p>Essenzielle Cookies ermöglichen grundlegende Funktionen und sind für die einwandfreie Funktion
                        der
                        Website erforderlich.</p>
                    <h4>Marketing</h4>
                    <p>Marketing-Cookies werden von Drittanbietern oder Publishern verwendet, um personalisierte Werbung
                        anzuzeigen. Sie tun dies, indem sie Besucher über Websites hinweg verfolgen.</p>
                    <h4>Externe Medien</h4>
                    <p>Inhalte von Videoplattformen und Social-Media-Plattformen werden standardmäßig blockiert. Wenn
                        Cookies von externen Medien akzeptiert werden, bedarf der Zugriff auf diese Inhalte keiner
                        manuellen
                        Einwilligung mehr.</p>
                    <button class="back">Zurück</button>
                </div>
                <div class="cookies-modal_buttons">
                    <button class="accept">Alle akzeptieren</button>
                </div>
            </div>
        </div>
        <?php
    } elseif ($lang == 'en_US') {
        ?>
        <div class="cookies-modal" style="display: none;">
            <div class="cookies-modal_wrapper">
                <div class="cookies-modal_info">
                    <p>This website uses cookies. We use cookies to make sure you get the best experience on our
                        website.
                        Please read our privacy and cookie policy.</p>
                    <button class="details">Cookie Details</button>
                </div>
                <div class="cookies-modal_details">
                    <h4>Privacy Preference</h4>
                    <p>We use cookies and other technologies on our website. Some of them are essential, while others
                        help
                        us to improve this website and your experience. Personal data may be processed (e.g. IP
                        addresses),
                        for example for personalized ads and content or ad and content measurement. You can find more
                        information about the use of your data in our
                        <a href="https://psamarketing.de/en/data-protection">privacy policy</a>.
                        Here you will find an overview of all cookies used. You can give your consent to whole
                        categories or
                        display further information and select certain cookies.
                    </p>
                    <h4>Essential </h4>
                    <p>Essential cookies enable basic functions and are necessary for the proper function of the
                        website</p>
                    <h4>Marketing</h4>
                    <p>Marketing cookies are used by third-party advertisers or publishers to display personalized ads.
                        They
                        do this by tracking visitors across websites.</p>
                    <h4>External Media</h4>
                    <p>Content from video platforms and social media platforms is blocked by default. If External Media
                        cookies are accepted, access to those contents no longer requires manual consent. </p>
                    <button class="back">Back</button>
                </div>
                <div class="cookies-modal_buttons">
                    <button class="accept">Accept all</button>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

	
<script>
    function getCookie(name) {
        const matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()\[\]\\\/+^])/g, '\\$1') + "=([^;]*)"));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    jQuery(document).ready(function () {
        jQuery('.cookies-modal .details').on('click', function () {
            jQuery('.cookies-modal_info').hide();
            jQuery('.cookies-modal .details').hide();
            jQuery('.cookies-modal .back').addClass('show');
            jQuery('.cookies-modal_details').show();
            jQuery('.cookies-modal_buttons').hide();
        });
        jQuery('.cookies-modal .back').on('click', function () {
            jQuery('.cookies-modal_info').show();
            jQuery('.cookies-modal .details').show();
            jQuery('.cookies-modal_buttons').show();
            jQuery('.cookies-modal .back').removeClass('show');
            jQuery('.cookies-modal_details').hide();
        });
        if (getCookie("acceptCookie")) {
            let acceptCookie = getCookie("acceptCookie");
            if (acceptCookie === 0) {
                jQuery('.cookies-modal').addClass('show');
            }
        } else {
            jQuery('.cookies-modal').addClass('show');
        }
        jQuery('.cookies-modal .accept').on('click', function () {
            jQuery('.cookies-modal').removeClass('show');
            document.cookie = "acceptCookie=1";
        });
    });
</script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.fancybox.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/slick/slick.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/main.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/dropdown.js"></script>
    <script>
        jQuery(document).ready(function($) {
            // Открытие модального окна и загрузка видео
            $('.youtube-slide .video, .methode-slide a').on('click', function(e) {
                e.preventDefault();
                var videoId = $(this).data('video-id');
                var videoURL = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';

                $('#videoContainer').html('<iframe src="' + videoURL + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
                $('#videoModal').fadeIn();
            });

            // Закрытие модального окна при нажатии на <span> (x)
            $('.close').on('click', function() {
                $('#videoModal').fadeOut(function() {
                    $('#videoContainer').empty();
                });
            });

            // Закрытие модального окна при клике вне окна
            $(window).on('click', function(event) {
                if ($(event.target).is('#videoModal')) {
                    $('#videoModal').fadeOut(function() {
                        $('#videoContainer').empty();
                    });
                }
            });
        });
    </script>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZHX2L3W190"></script>
    <script> window.dataLayer = window.dataLayer || []; function
    gtag(){dataLayer.push(arguments);} gtag('js', new Date());
    gtag('config', 'G-ZHX2L3W190');</script>

<?php wp_footer() ?>
</body>
</html>
