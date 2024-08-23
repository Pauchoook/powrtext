<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
    <div class="footer-top-container">
        <div class="container">
            <div class="footer-top">
                <?php wp_nav_menu(array('menu' => 'Footer Menu', 'theme_location' => 'main-menu', 'menu_class' => 'footer-links', 'container_class' => 'footer-menu-container', 'depth' => 1)); ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="footer-content">
        <div class="container">
            <div class="footer-content__body">
                <div class="footer-content__items">
                    <div class="footer-content__item">
                        <div class="footer-content__offer">Навигация</div>
                        <?php wp_nav_menu(array('menu' => 'Footer Navigation', 'theme_location' => 'main-menu', 'menu_class' => 'footer-content-ul', 'container_class' => '', 'depth' => 1)); ?>
                    </div>
                    <div class="footer-content__item">
                        <div class="footer-content__offer">Программы</div>
                        <?php wp_nav_menu(array('menu' => 'Footer Programs', 'theme_location' => 'main-menu', 'menu_class' => 'footer-content-ul', 'container_class' => '', 'depth' => 1)); ?>
                    </div>
                    <div class="footer-content__item">
                        <div class="footer-content__offer">Академия юных гениев</div>
                        <?php wp_nav_menu(array('menu' => 'Footer Academy', 'theme_location' => 'main-menu', 'menu_class' => 'footer-content-ul', 'container_class' => '', 'depth' => 1)); ?>
                    </div>  
                    <div class="footer-content__item">
                        <div class="footer-content__offer">Корпоративное обучение</div>
                        <?php wp_nav_menu(array('menu' => 'Footer Corporative', 'theme_location' => 'main-menu', 'menu_class' => 'footer-content-ul', 'container_class' => '', 'depth' => 1)); ?>
                    </div>
                    <div class="footer-content__item">
                        <div class="footer-content__offer">Контакты</div>
                        <div class="footer-content__sub">Телефон:</div>
                        <a href="tel:<?php echo __(nl2br(get_option('ace_settings_phone')), 'ace'); ?>" class="footer-content__text"><?php echo __(nl2br(get_option('ace_settings_phone')), 'ace'); ?></a>
                        <a href="tel:<?php echo __(nl2br(get_option('ace_settings_phone_second')), 'ace'); ?>" class="footer-content__text"><?php echo __(nl2br(get_option('ace_settings_phone_second')), 'ace'); ?></a>
                        <div class="footer-content__sub footer-content__sub--top">Адрес:</div>
                        <div class="footer-content__text">
                            <?php
                                if (get_locale() == 'en_US') :
                                    echo __(nl2br(get_option('ace_settings_address_en')), 'ace');
                                else :
                                    echo __(nl2br(get_option('ace_settings_address_ru')), 'ace');
                                endif;
                            ?>
                        </div>
                        <div class="footer-content-social">
                            <?php
                            $social_links = array(
                                'wh' => array('logo' => get_stylesheet_directory_uri() . '/images/whatsapp-black.svg', 'url' => get_option('ace_settings_wh_link')),
                                'tg' => array('logo' => get_stylesheet_directory_uri() . '/images/telegram.svg', 'url' => get_option('ace_settings_tg_link')),
                                'vk' => array('logo' => get_stylesheet_directory_uri() . '/images/vk-black.svg', 'url' => get_option('ace_settings_vk_link')),
                                'fb' => array('logo' => get_stylesheet_directory_uri() . '/images/fb.png', 'url' => get_option('ace_settings_fb_link')),
                                'ig' => array('logo' => get_stylesheet_directory_uri() . '/images/instagram.png', 'url' => get_option('ace_settings_ig_link')),
                                'in' => array('logo' => get_stylesheet_directory_uri() . '/images/in.png', 'url' => get_option('ace_settings_in_link')),
                                'gp' => array('logo' => get_stylesheet_directory_uri() . '/images/gp.png', 'url' => get_option('ace_settings_gp_link')),
                                'yt' => array('logo' => get_stylesheet_directory_uri() . '/images/yt.svg', 'url' => get_option('ace_settings_yt_link')),
                            );
                            ?>

                            <?php foreach ($social_links as $link) : ?>
                                <?php if ($link['url'] !== "") : ?>
                                    <a target="blank" href="<?php echo $link['url']; ?>">
                                        <span class="social-link" style="background-image: url(<?php echo $link['logo']; ?>);"></span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="footer-content__bottom">
                    <div class="footer-content__bottom-left">
                        <?php
                            if (get_locale() == 'en_US') :
                                echo __(nl2br(get_option('ace_settings_footer_en')), 'ace');
                            else :
                                echo __(nl2br(get_option('ace_settings_footer_ru')), 'ace');
                            endif;
                        ?>
                    </div>
                    <a href="/" class="footer-content__bottom-right">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src='https://use.fontawesome.com/d7c2187760.js?ver=1.0.0' id='awesome-js-js'></script>
<a href="https://wa.me/79871843210" title="Напишите нам" rel="noopener noreferrer nofollow" target="blank_">
   <div class="whatsapp-button"><i class="fa fa-whatsapp"></i></div>
</a>

</div>
<script src="https://api-maps.yandex.ru/2.1/?apikey=b46e9249-4925-4460-b11c-3aaf76ad0115&lang=ru_RU" type="text/javascript"></script>
<?php wp_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        isMobile = false;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            isMobile = true;
        }

        //        $('.sub-menu').hide();
        if (isMobile) {
            $('ul.menu > li').click(function(e) {
                if (!$(this).hasClass('toggle')) {
                    e.preventDefault();
                    hideSubMenus();

                    if ($('> .sub-menu', this).length > 0) {
                        $('> .sub-menu', this).stop().delay(300).show(0);
                    }

                    $('ul.menu > li').addClass('inactive');
                    $(this).addClass('toggle');
                    $(this).removeClass('inactive');
                } else {

                    if ($('> .sub-menu', this).length > 0) {
                        $('> .sub-menu', this).stop().hide(0);
                    }

                    $('ul.menu > li').removeClass('inactive');
                    $('ul.menu > li').removeClass('toggle');
                }
            });

            $(window).click(function() {
                $('.menu-ace-menu-container .sub-menu').hide();
            });
            $('ul.menu > li > ul.sub-menu').click(function(e) {
                e.stopPropagation();
            });



        } else {
            $('ul.menu > li').hover(function() {
                if ($('> .sub-menu', this).length > 0) {
                    $('> .sub-menu', this).stop().delay(300).show(0);
                }
                $('ul.menu > li').addClass('inactive');
                $(this).removeClass('inactive');
            }, function() {
                if ($('> .sub-menu', this).length > 0) {
                    $('> .sub-menu', this).stop().hide(0);
                }
                $('ul.menu > li').removeClass('inactive');
            });
        }

        function hideSubMenus() {
            $('.menu-ace-menu-container .sub-menu').hide(0);
        }

        $(".ui-loader").hide();




        var isUserLogedIn = <?php echo is_user_logged_in() ? 1 : 0 ?>;

        if (!isUserLogedIn) {
            // $('ul.menu > li:last-child').remove();
            $('#cabinet').show();

            $('#cabinet').hover(function() {
                $('> .login', this).stop().delay(300).show(0);
            }, function() {
                $('> .login', this).stop().hide();
            });
        } else {
            $('.menu-container ul.menu').css('width', '100%');
            $('ul.menu > li:last-child ul.sub-menu').append('<li>' + '<?php echo wp_loginout(home_url()); ?>' + '</li>')
        }


        // Burger
        const btnMenu = document.querySelector('#toggle');
        const menu = document.querySelector('.mobile-menu-overlay');
        const bodyEl = document.querySelector('body');


        const toggleMenu = function() {
            menu.classList.toggle('active');
        }
        const toggleBurger = function() {
            btnMenu.classList.toggle('active');
        }
        const bodyOverflow = function() {
            bodyEl.classList.toggle('hidden');
        }

        btnMenu?.addEventListener('click', function(e) {
            console.log('123');
            e.stopPropagation();
            toggleMenu();
            toggleBurger();
            bodyOverflow();

        });


        // $('#toggle').click(function() {
        //     $('.header-top').toggleClass('dark-header-top');
        //     $('.menu-mobile-container ul.sub-menu').show();
        //     $('.mobile-menu-overlay').toggle();
        // });


        $('.contact-form-overlay').click(function() {
            $(this).hide();
        });
        $('.contact-form').click(function(e) {
            e.stopPropagation();
        });


        // Visit Form, Trial Form
        $('a[href="#visit"]').click(function(e) {
            e.preventDefault();
            $('#visit-form-overlay').toggle();
        });
        $('#visit-form-close').click(function() {
            $('#visit-form-overlay').hide();
        });

        $('.visit-form-program-other').css('display', 'none');
        $('.visit-form-program-other-wrap label').remove();
        $('select.visit-form-program-select').change(function() {
            if ($(this).val() == 'Other') {
                $('.visit-form-program-other').show();
                $('.visit-form-program-other').val("");
            } else {
                $('.visit-form-program-other').val("Выбрана программа");
                $('.visit-form-program-other').hide();
            }
        })

        $('a[href="#trial"]').click(function(e) {
            e.preventDefault();
            $('#trial-form-overlay').toggle();
        });
        $('#trial-form-close').click(function() {
            $('#trial-form-overlay').hide();
        });


        // Contact Info Modal
        $('div.contacts-modal').click(function(e) {
            e.preventDefault();
            $('#contacts-modal-overlay').toggle();
        });
        $('#contacts-modal-close').click(function() {
            $('#contacts-modal-overlay').hide();
        });


        jQuery(this).on('submitResponse.myFunction', function(e, response) {
            if (!response.errors) {
                $('.form-submit-success').toggle();
                $('.form-title').hide();
            } else {
                var innerHTML = '';
                var form_id = response.form_id;
                var errors = response.errors;

                if (errors != false) {
                    for (var propName in errors) {
                        if (errors[propName]['location'] == 'general') {
                            innerHTML += '<p>' + errors[propName]['msg'] + '</p>';
                        } else {
                            var field_id = errors[propName]['location'];
                            jQuery(".contact-form-no-modal").find("#ninja_forms_field_" + field_id + "_error").show();
                            jQuery(".contact-form-no-modal").find("#ninja_forms_field_" + field_id + "_error").prop("innerHTML", errors[propName]['msg']);
                            jQuery(".contact-form-no-modal").find("#ninja_forms_field_" + field_id + "_error").addClass("ninja-forms-error");

                        }
                    }
                    if (innerHTML != '') {
                        jQuery(".contact-form-no-modal").find("#ninja_forms_form_" + form_id + "_response_msg").removeClass("ninja-forms-success-msg");
                        jQuery(".contact-form-no-modal").find("#ninja_forms_form_" + form_id + "_response_msg").addClass("ninja-forms-error-msg");
                        jQuery(".contact-form-no-modal").find("#ninja_forms_form_" + form_id + "_response_msg").prop("innerHTML", innerHTML);
                    }
                }
            }

            return true;
        });




        // Minimize header
        var didScroll;
        var lastScrollTop = 0;
        var delta = 1;
        var navbarHeight = $('header#header').outerHeight();

        $(window).scroll(function(event) {
            didScroll = true;
        });

        $(window).on('scroll', function() {
            if ($(window).width() > 800) {
                var st = $(this).scrollTop();

                if (Math.abs(lastScrollTop - st) <= delta)
                    return;

                if (st > lastScrollTop && st > navbarHeight) {
                    // Scroll Down
                    $('.header-top').slideUp(200);
                    $('header#header').css('height', '48px');
                    $('#header-wrap').css('border-bottom', '1px solid #f1f1f2');
                } else {
                    //                        if(st + $(window).height() < $(document).height()) {
                    //                            $('.header-top').show();
                    //                        }
                    if (st < 187) {
                        $('.header-top').stop().show(0);
                        $('#header-wrap').css('border-bottom', 'none');
                    }
                }

                lastScrollTop = st;
            }
        });

        $(window).resize(function() {
            if ($(window).width() < 800) {
                $('header#header').css('height', '94px');
                $('.header-top').show();
            }
        });
    });


    // detect IE
    (function detectIE() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf('MSIE ');
        var trident = ua.indexOf('Trident/');
        var edge = ua.indexOf('Edge/');
        if (msie > 0 || trident > 0 || edge > 0) {
            jQuery('#wrapper').css('display', 'block');
            jQuery('#container').css('flex', 'none');
        }
    })();
</script>

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-87180737-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(97981561, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97981561" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
    document.getElementById('ninja_forms_field_6').onclick = function() {
        yaCounter39066090.reachGoal('SEND1');
        return true;
    }
    document.getElementById('ninja_forms_field_19').onclick = function() {
        yaCounter39066090.reachGoal('SEND2');
        return true;
    }
</script>

<script type="text/javascript">
    document.getElementById('ninja_forms_field_6').onclick = function() {
        yaCounter40369465.reachGoal('SEND1');
        return true;
    }
    document.getElementById('ninja_forms_field_19').onclick = function() {
        yaCounter40369465.reachGoal('SEND2');
        return true;
    }
</script>
<script data-skip-moving="true">
    (function(w, d, u, b) {
        s = d.createElement('script');
        r = 1 * new Date();
        s.async = 1;
        s.src = u + '?' + r;
        h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn.bitrix24.ru/b3156657/crm/site_button/loader_2_k84qoo.js');
</script>
</body>

</html>