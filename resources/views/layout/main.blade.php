@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

@php
    use App\Helpers\Helper;

    $configData = Helper::applClasses();
@endphp

        <!doctype html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-------------------------------- All in One SEO ----------------------------------->
@yield('seo')
<!----------------------------------------------------------------------------------->

    <!------- Google Analytics (https://www.monsterinsights.com/) plus fonts ------------>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/kelia-travaux.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.1"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <link rel='stylesheet'
          id='google-fonts-1-css'
          href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8.1'
          type='text/css' media='all'/>
    <!----------------------------------------------------------------------------------->

    <!------------------------------- Default styles for all ---------------------------->
    <link rel="stylesheet" href="{{asset('css/defaults/elementor.css')}}">
    <!----------------------------------------------------------------------------------->

    <!-------------- only for four block in other words only for main page -------------->
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'main')
        <link rel="stylesheet" href="{{asset('css/defaults/four-block.css')}}">
    @endif
<!------------------------------------------------------------------------------------>

    <!---------------------------------- JQuery ------------------------------------------>
    <script type='text/javascript' src="{{asset('js/defaults/jquery.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/defaults/jquery-migrate.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!------------------------------------------------------------------------------------>

    <!------------------------------ Reading Progress ------------------------------------>
    {{--    <link rel='stylesheet' id='eael-reading-progress-css'  href='https://kelia-travaux.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/reading-progress.min.css?ver=4.8.4' type='text/css' media='all' />--}}
    {{--    <script type='text/javascript' src='https://kelia-travaux.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/reading-progress.min.js?ver=4.8.4' id='eael-reading-progress-js'></script>--}}
<!------------------------------------------------------------------------------------>

    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css')}}">

    @yield('additional-head')
</head>

<body
        class="home page-template-default page elementor-default elementor-template-full-width elementor-kit-10 elementor-page">
@include('layout.partials.header')
@yield('content')
@include('layout.partials.footer')

{{--    <div class="eael-reading-progress-wrap eael-reading-progress-wrap-local">--}}
{{--        <div class="eael-reading-progress eael-reading-progress-local eael-reading-progress-top">--}}
{{--            <div class="eael-reading-progress-fill"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
<script type='text/javascript' id='elementor-frontend-js-before'>
    const elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.4.4",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "a11y_improvements": true,
            "e_import_export": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "admin-top-bar": true,
            "form-submissions": true,
            "video-playlist": true
        },
        "urls": {"assets": "https:\/\/kelia-travaux.com\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "viewport_mobile": 767,
            "viewport_tablet": 1024,
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {"id": 593, "title": "Accueil%20-%20Kelia%20Travaux", "excerpt": "", "featuredImage": false}
    };
    const JetTabsSettings = {
        "ajaxurl": "https:\/\/kelia-travaux.com\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "templateApiUrl": "https:\/\/kelia-travaux.com\/wp-json\/jet-tabs-api\/v1\/elementor-template",
        "devMode": "false"
    };
    const wpforms_settings = {
        "val_required": "This field is required.",
        "val_url": "Please enter a valid URL.",
        "val_email": "Please enter a valid email address.",
        "val_email_suggestion": "Did you mean {suggestion}?",
        "val_email_suggestion_title": "Click to accept this suggestion.",
        "val_number": "Please enter a valid number.",
        "val_confirm": "Field values do not match.",
        "val_fileextension": "File type is not allowed.",
        "val_filesize": "File exceeds max size allowed. File was not uploaded.",
        "val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
        "val_time24h": "Please enter time in 24-hour format (eg 22:45).",
        "val_requiredpayment": "Payment is required.",
        "val_creditcard": "Please enter a valid credit card number.",
        "val_post_max_size": "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
        "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
        "val_limit_characters": "{count} of {limit} max characters.",
        "val_limit_words": "{count} of {limit} max words.",
        "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
        "post_max_size": "268435456",
        "uuid_cookie": "1",
        "locale": "en",
        "wpforms_plugin_url": "https:\/\/kelia-travaux.com\/wp-content\/plugins\/wpforms\/",
        "gdpr": "",
        "ajaxurl": "https:\/\/kelia-travaux.com\/wp-admin\/admin-ajax.php",
        "mailcheck_enabled": "1",
        "mailcheck_domains": [],
        "mailcheck_toplevel_domains": ["dev"],
        "currency_code": "USD",
        "currency_thousands": ",",
        "currency_decimal": ".",
        "currency_symbol": "$",
        "currency_symbol_pos": "left",
        "val_phone": "Please enter a valid phone number."
    };
    const ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/kelia-travaux.com\/wp-admin\/admin-ajax.php",
        "nonce": "b4167463f0",
        "urls": {"assets": "https:\/\/kelia-travaux.com\/wp-content\/plugins\/elementor-pro\/assets\/"},
        "i18n": {"toc_no_headings_found": "No headings were found on this page."},
        "shareButtonsNetworks": {
            "facebook": {"title": "Facebook", "has_counter": true},
            "twitter": {"title": "Twitter"},
            "google": {"title": "Google+", "has_counter": true},
            "linkedin": {"title": "LinkedIn", "has_counter": true},
            "pinterest": {"title": "Pinterest", "has_counter": true},
            "reddit": {"title": "Reddit", "has_counter": true},
            "vk": {"title": "VK", "has_counter": true},
            "odnoklassniki": {"title": "OK", "has_counter": true},
            "tumblr": {"title": "Tumblr"},
            "digg": {"title": "Digg"},
            "skype": {"title": "Skype"},
            "stumbleupon": {"title": "StumbleUpon", "has_counter": true},
            "mix": {"title": "Mix"},
            "telegram": {"title": "Telegram"},
            "pocket": {"title": "Pocket", "has_counter": true},
            "xing": {"title": "XING", "has_counter": true},
            "whatsapp": {"title": "WhatsApp"},
            "email": {"title": "Email"},
            "print": {"title": "Print"}
        },
        "facebook_sdk": {"lang": "en_US", "app_id": ""},
        "lottie": {"defaultAnimationUrl": "https:\/\/kelia-travaux.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}
    };
    const wpformsElementorVars = {"recaptcha_type": "v2"};
</script>
<script src="{{asset('js/defaults/elementor/elementor.before.min.js')}}"></script>
<script src="{{asset('js/defaults/elementor/elementor.min.js')}}"></script>
<script src="{{asset('js/defaults/elementor/elementor-pro.min.js')}}"></script>
<script src="{{asset('js/defaults/elementor/wpforms.min.js')}}"></script>
<script src="{{asset('js/defaults/elementor/jet-tabs.min.js')}}"></script>

@yield('scripts')
{{-- include default scripts --}}
{{--    @include('panels/scripts')--}}
</body>
</html>
