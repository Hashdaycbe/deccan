<?php 
$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];

$title= "Deccan Doors";

$active = '';

if($mypage=='index.php'){
    $title= "Home - Deccan Doors";
    $act = 'act';
}elseif($mypage=='service.php'){
    $title= "Our-Services - Deccan Doors";
    $act = 'act';
}elseif($mypage=='aboutus.php'){
    $title= "About Us - Deccan Doors";
    $act = 'act';
}elseif($mypage=='contact.php'){
    $title= "Contact Us - Deccan Doors";
    $act = 'act';
}elseif($mypage=='404.php'){
    $title= "Error 404 - Not Found";
    $act = 'act';
}elseif($mypage=='product.php'){
    $title= "Product - Deccan Doors";
    $act = 'act';
    
}

?>
<!DOCTYPE html>

<html lang="en-US" class="no-js">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>Deccan Fibre Doors</title>
    <meta name='robots' content='max-image-preview:large' />

    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/www.asrasteels.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #FFF;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--accent: #fac952;
            --wp--preset--color--dark-gray: #111;
            --wp--preset--color--light-gray: #767676;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/stylesdfc9.css?ver=5.8.5' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7bb8.css?ver=5.25.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/uploads/elementor/css/custom-frontend.min55d3.css?ver=1704357611' type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-1795 .elementor-element.elementor-element-af1f873 .elementor-slide-description {
            color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-af1f873 .elementor-slide-button {
            color: #222222;
            background-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-af1f873 .elementor-slide-button:hover {
            color: #222222;
            background-color: #f4b34b;
        }

        .elementor-1795 .elementor-element.elementor-element-af1f873 .elementor-swiper-button {
            color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-af1f873 .elementor-swiper-button svg {
            fill: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-flip-box__back {
            background-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-view-stacked .elementor-icon {
            background-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-view-stacked .elementor-icon svg {
            stroke: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-view-framed .elementor-icon,
        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-view-default .elementor-icon {
            color: #fac952;
            border-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-view-framed .elementor-icon svg,
        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-view-default .elementor-icon svg {
            fill: #fac952;
            border-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-flip-box__back .elementor-flip-box__layer__title {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-flip-box__back .elementor-flip-box__layer__description {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-22cc50f3 .elementor-flip-box__button {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-flip-box__back {
            background-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-view-stacked .elementor-icon {
            background-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-view-stacked .elementor-icon svg {
            stroke: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-view-framed .elementor-icon,
        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-view-default .elementor-icon {
            color: #fac952;
            border-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-view-framed .elementor-icon svg,
        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-view-default .elementor-icon svg {
            fill: #fac952;
            border-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-flip-box__back .elementor-flip-box__layer__title {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-flip-box__back .elementor-flip-box__layer__description {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-2510be5 .elementor-flip-box__button {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-flip-box__back {
            background-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-view-stacked .elementor-icon {
            background-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-view-stacked .elementor-icon svg {
            stroke: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-view-framed .elementor-icon,
        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-view-default .elementor-icon {
            color: #fac952;
            border-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-view-framed .elementor-icon svg,
        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-view-default .elementor-icon svg {
            fill: #fac952;
            border-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-flip-box__back .elementor-flip-box__layer__title {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-flip-box__back .elementor-flip-box__layer__description {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-32062fdc .elementor-flip-box__button {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-7d36e4b9>.elementor-element-populated {
            border-color: #fac952;
        }

        .elementor-1795 .elementor-element.elementor-element-6b32e47 .elementor-post__title,
        .elementor-1795 .elementor-element.elementor-element-6b32e47 .elementor-post__title a {
            color: #333333;
        }

        .elementor-1795 .elementor-element.elementor-element-6b32e47 .elementor-post__meta-data {
            color: #f4b34b;
        }

        .elementor-1795 .elementor-element.elementor-element-8f74d1a .elementor-button {
            fill: #222222;
            color: #222222;
            background-color: #fac952;
            background-image: none;
        }

        .elementor-1795 .elementor-element.elementor-element-8f74d1a .elementor-button:hover,
        .elementor-1795 .elementor-element.elementor-element-8f74d1a .elementor-button:focus {
            color: #222222;
            background-color: #f4b34b;
            background-image: none;
        }

        .elementor-1795 .elementor-element.elementor-element-8f74d1a .elementor-button:hover svg,
        .elementor-1795 .elementor-element.elementor-element-8f74d1a .elementor-button:focus svg {
            fill: #222222;
        }
    </style>
    <link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-1091-css' href='wp-content/uploads/elementor/css/post-109155d3.css?ver=1704357611' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css' href='wp-content/uploads/elementor/css/custom-pro-frontend.min55d3.css?ver=1704357611' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/global55d3.css?ver=1704357611' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-1795-css' href='wp-content/uploads/elementor/css/post-17956514.css?ver=1704357612' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-414-css' href='wp-content/uploads/elementor/css/post-4146514.css?ver=1704357612' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-main-css' href='wp-content/themes/dt-the7/css/main.min55f8.css?ver=11.10.1.1' type='text/css' media='all' />
    <style id='dt-main-inline-css' type='text/css'>
        body #load {
            display: block;
            height: 100%;
            overflow: hidden;
            position: fixed;
            width: 100%;
            z-index: 9901;
            opacity: 1;
            visibility: visible;
            transition: all .35s ease-out;
        }

        .load-wrap {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            text-align: center;
            display: -ms-flexbox;
            display: -ms-flex;
            display: flex;
            -ms-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-flow: column wrap;
            flex-flow: column wrap;
            -ms-flex-pack: center;
            -ms-justify-content: center;
            justify-content: center;
        }

        .load-wrap>svg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #load {
            background: var(--the7-elementor-beautiful-loading-bg, #ffffff);
            --the7-beautiful-spinner-color2: var(--the7-beautiful-spinner-color, #fac952);
        }
    </style>
    <link rel='stylesheet' id='the7-custom-scrollbar-css' href='wp-content/themes/dt-the7/lib/custom-scrollbar/custom-scrollbar.min55f8.css?ver=11.10.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='the7-core-css' href='wp-content/plugins/dt-the7-core/assets/css/post-type.min3b33.css?ver=2.7.7' type='text/css' media='all' />
    <link rel='stylesheet' id='the7-css-vars-css' href='wp-content/uploads/the7-css/css-vars85c5.css?ver=781ba628955e' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-custom-css' href='wp-content/uploads/the7-css/custom85c5.css?ver=781ba628955e' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-media-css' href='wp-content/uploads/the7-css/media85c5.css?ver=781ba628955e' type='text/css' media='all' />
    <link rel='stylesheet' id='the7-mega-menu-css' href='wp-content/uploads/the7-css/mega-menu85c5.css?ver=781ba628955e' type='text/css' media='all' />
    <!--<link rel='stylesheet' id='the7-elements-albums-portfolio-css' href='wp-content/uploads/the7-css/the7-elements-albums-portfolio85c5.css?ver=781ba628955e' type='text/css' media='all' />-->
    <link rel='stylesheet' id='the7-elements-css' href='wp-content/uploads/the7-css/post-type-dynamic85c5.css?ver=781ba628955e' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='wp-content/themes/dt-the7/style55f8.css?ver=11.10.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='the7-elementor-global-css' href='wp-content/themes/dt-the7/css/compatibility/elementor/elementor-global.min55f8.css?ver=11.10.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMulish%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>

    <script type="text/javascript" src="wp-content/themes/dt-the7/js/above-the-fold.min55f8.js?ver=11.10.1.1" id="dt-above-fold-js"></script>

    <meta property="og:site_name" content="Deccan Fibre Doors" />
    <meta property="og:title" content="Home" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta name="generator" content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">

    <script type="text/javascript" id="dt-above-fold-js-extra">
        /* <![CDATA[ */
        var dtLocal = {
            
            "passText": "To view this protected post, enter the password below:",
            "moreButtonText": {
                "loading": "Loading...",
                "loadMore": "Load more"
            },
            "postID": "1795",
            
            "contactMessages": {
                "required": "One or more fields have an error. Please check and try again.",
                "terms": "Please accept the privacy policy.",
                "fillTheCaptchaError": "Please, fill the captcha."
            },
            "captchaSiteKey": "",
            "ajaxNonce": "445f5ae975",
            "pageData": {
                "type": "page",
                "template": "page",
                "layout": null
            },
            "themeSettings": {
                "smoothScroll": "off",
                "lazyLoading": false,
                "desktopHeader": {
                    "height": 190
                },
                "ToggleCaptionEnabled": "disabled",
                "ToggleCaption": "Navigation",
                "floatingHeader": {
                    "showAfter": 150,
                    "showMenu": true,
                    "height": 60,
                    "logo": {
                        "showLogo": true,                        
                    }
                },
                "topLine": {
                    "floatingTopLine": {
                        "logo": {
                            "showLogo": false,
                            "html": ""
                        }
                    }
                },
                "mobileHeader": {
                    "firstSwitchPoint": 1025,
                    "secondSwitchPoint": 778,
                    "firstSwitchPointHeight": 60,
                    "secondSwitchPointHeight": 60,
                    "mobileToggleCaptionEnabled": "disabled",
                    "mobileToggleCaption": "Menu"
                },
                "stickyMobileHeaderFirstSwitch": {
                    "logo": {
                      
                    }
                },
                "stickyMobileHeaderSecondSwitch": {
                    "logo": {
                      
                    }
                },
                "sidebar": {
                    "switchPoint": 992
                },
                "boxedWidth": "1680px"
            },
            "elementor": {
                "settings": {
                    "container_width": 1300
                }
            }
        };
        var dtShare = {
            "shareButtonText": {
                "facebook": "Share on Facebook",
                "twitter": "Tweet",
                "pinterest": "Pin it",
                "linkedin": "Share on Linkedin",
                "whatsapp": "Share on Whatsapp"
            },
            "overlayOpacity": "90"
        };
        /* ]]> */
    </script>

    <!-- End Google Tag Manager snippet added by Site Kit -->
    <script type="text/javascript" id="the7-loader-script">
        document.addEventListener("DOMContentLoaded", function(event) {
            var load = document.getElementById("load");
            if (!load.classList.contains('loader-removed')) {
                var removeLoading = setTimeout(function() {
                    load.className += " loader-removed";
                }, 300);
            }
        });
    </script>
    <link rel="icon" href="assets/deccan-logo.jpeg" type="image/png" sizes="16x16" />
    <link rel="icon" href="assets/deccan-logo.jpeg" type="image/png" sizes="32x32" />
    <style id='the7-custom-inline-css' type='text/css'>
        .sub-nav .menu-item i.fa,
        .sub-nav .menu-item i.fas,
        .sub-nav .menu-item i.far,
        .sub-nav .menu-item i.fab {
            text-align: center;
            width: 1.25em;
        }
    </style>
</head>

<body id="the7-body" class="home page-template-default page page-id-1795 wp-custom-logo wp-embed-responsive the7-core-ver-2.7.7 title-off dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon  minus-medium-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-fade phantom-line-decoration phantom-custom-logo-on sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-11.10.1.1 elementor-default elementor-kit-1091 elementor-page elementor-page-1795 elementor-page-2178">

    <div id="load" class="spinner-loader">
        <div class="load-wrap">
            <style type="text/css">
                [class*="the7-spinner-animate-"] {
                    animation: spinner-animation 1s cubic-bezier(1, 1, 1, 1) infinite;
                    x: 46.5px;
                    y: 40px;
                    width: 7px;
                    height: 20px;
                    fill: var(--the7-beautiful-spinner-color2);
                    opacity: 0.2;
                }

                .the7-spinner-animate-2 {
                    animation-delay: 0.083s;
                }

                .the7-spinner-animate-3 {
                    animation-delay: 0.166s;
                }

                .the7-spinner-animate-4 {
                    animation-delay: 0.25s;
                }

                .the7-spinner-animate-5 {
                    animation-delay: 0.33s;
                }

                .the7-spinner-animate-6 {
                    animation-delay: 0.416s;
                }

                .the7-spinner-animate-7 {
                    animation-delay: 0.5s;
                }

                .the7-spinner-animate-8 {
                    animation-delay: 0.58s;
                }

                .the7-spinner-animate-9 {
                    animation-delay: 0.666s;
                }

                .the7-spinner-animate-10 {
                    animation-delay: 0.75s;
                }

                .the7-spinner-animate-11 {
                    animation-delay: 0.83s;
                }

                .the7-spinner-animate-12 {
                    animation-delay: 0.916s;
                }

                @keyframes spinner-animation {
                    from {
                        opacity: 1;
                    }

                    to {
                        opacity: 0;
                    }
                }

                .page-title .breadcrumbs li:before,
                .page-title .breadcrumbs li:before {
                    color: rgb(0 0 0);
                }

                .page-title .breadcrumbs,
                .page-title .breadcrumbs a {
                    color: #000000;
                }
            </style>
            <svg width="75px" height="75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <rect class="the7-spinner-animate-1" rx="5" ry="5" transform="rotate(0 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-2" rx="5" ry="5" transform="rotate(30 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-3" rx="5" ry="5" transform="rotate(60 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-4" rx="5" ry="5" transform="rotate(90 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-5" rx="5" ry="5" transform="rotate(120 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-6" rx="5" ry="5" transform="rotate(150 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-7" rx="5" ry="5" transform="rotate(180 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-8" rx="5" ry="5" transform="rotate(210 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-9" rx="5" ry="5" transform="rotate(240 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-10" rx="5" ry="5" transform="rotate(270 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-11" rx="5" ry="5" transform="rotate(300 50 50) translate(0 -30)"></rect>
                <rect class="the7-spinner-animate-12" rx="5" ry="5" transform="rotate(330 50 50) translate(0 -30)"></rect>
            </svg>
            <!-- <img src="assets/loading.gif" /> -->
        </div>
    </div>

    <div id="page">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        <div class="masthead classic-header justify bg-behind-menu widgets full-height dividers surround shadow-mobile-header-decoration large-mobile-menu-icon dt-parent-menu-clickable show-sub-menu-on-hover show-device-logo show-mobile-logo" role="banner">

            <div class="top-bar full-width-line top-bar-empty top-bar-line-hide">
                <div class="top-bar-bg"></div>
                <div class="mini-widgets left-widgets"></div>
                <div class="mini-widgets right-widgets"></div>
            </div>
            <header class="header-bar">
                <div class="branding">
                    <div id="site-title" class="assistive-text">Deccan Fibre Doors</div>
                    <!-- <div id="site-description" class="assistive-text">Manufacturer of Stainless Steel, Aluminum, Alu-Steel and Tin Sheet Metal Baking Moulds</div> -->
                    <a class="" href="index.php"><img class=" preload-me" src="assets/deccan-logo.jpeg" style="width: 200px" alt="Deccan Fibre Doors" /><img class="mobile-logo preload-me" src="assets/deccan-logo.jpeg" style="width: 200px"  alt="Deccan Fibre Doors" /></a>
                    <div class="mini-widgets"></div>
                    <div class="mini-widgets">
                        <a href="https://wa.me/919597778997" class="mini-contacts phone show-on-desktop near-logo-first-switch in-menu-second-switch"><i class="fa fa-whatsapp"></i>+91 88381 48691</a>
                        <a href="tel:+919092963237" class="mini-contacts phone show-on-desktop near-logo-first-switch in-menu-second-switch"><i class="fa fa-phone"></i>+91 90929 63237</a>
                        <a href="tel:+918122349490" class="mini-contacts phone show-on-desktop near-logo-first-switch in-menu-second-switch"><i class="fa fa-phone"></i>+91 81223 49490</a>
                        
                        <span class="mini-contacts clock show-on-desktop near-logo-first-switch in-menu-second-switch"><i class="fa-fw icomoon-the7-font-the7-clock-03"></i>Mon-Sat: 8 am – 8 pm</span>
                        <a href="javascript:void(0)" onclick="openModal()" class="microwidget-btn mini-button header-elements-button-2 show-on-desktop in-menu-first-switch in-menu-second-switch microwidget-btn-bg-on microwidget-btn-hover-bg-on disable-animation-bg border-off hover-border-off btn-icon-align-right"><span>REQUEST A QUOTE</span><i class="fas fa-calculator"></i></a></div>
                </div>
                <nav class="navigation">
                    <ul id="primary-menu" class="main-nav bg-outline-decoration hover-bg-decoration hover-line-decoration active-bg-decoration active-line-decoration">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1795 current_page_item menu-item-1830 <?php if($mypage=="index.php"){echo $act;}?> first depth-0">
                            <a href='index.php' class=' mega-menu-img mega-menu-img-left'>
                                <i class="fa-fw icomoon-the7-font-the7-home-021"></i>
                                <span class="menu-item-text">
                                    <span class="menu-text">Home</span>
                                </span>
                                
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1829 depth-0 <?php if($mypage=="aboutus.php"){echo $act;}?>">
                            <a href='aboutus.php' class=' mega-menu-img mega-menu-img-left' >
                                <span class="menu-item-text">
                                    <span class="menu-text">About Us</span>
                                </span>
                                
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1828 depth-0 <?php if($mypage=="service.php"){echo $act;}?>"><a href='service.php' class=' mega-menu-img mega-menu-img-left' ><span class="menu-item-text"><span class="menu-text">Our Services</span></span>
                        
                        
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1826 depth-0 <?php if($mypage=="product.php"){echo $act;}?>"><a href='product.php' class=' mega-menu-img mega-menu-img-left' ><span class="menu-item-text"><span class="menu-text">Products</span></span></a></li>
                        
                        <!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1826 depth-0"><a href='javascript:void(0)' class=' mega-menu-img mega-menu-img-left' ><span class="menu-item-text"><span class="menu-text">Portfolio</span></span></a></li>-->
                        
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1824 last depth-0 <?php if($mypage=="contact.php"){echo $act;}?>"><a href='contact.php' class=' mega-menu-img mega-menu-img-left' ><span class="menu-item-text"><span class="menu-text">Contact</span></span></a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div role="navigation" class="dt-mobile-header ">
            <div class="dt-close-mobile-menu-icon">
                <div class="close-line-wrap"><span class="close-line"></span><span class="close-line"></span><span class="close-line"></span></div>
            </div>
            <ul id="mobile-menu" class="mobile-main-nav">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1795 current_page_item menu-item-1830 act first depth-0"><a href='index.php' class=' mega-menu-img mega-menu-img-left' ><i class="fa-fw icomoon-the7-font-the7-home-021"></i><span class="menu-item-text"><span class="menu-text">Home</span></span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1829 depth-0"><a href='aboutus.php' class=' mega-menu-img mega-menu-img-left' ><i class="fa-fw dt-icon-the7-menu-012"></i><span class="menu-item-text"><span class="menu-text">About Us</span></span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1828 depth-0"><a href='service.php' class=' mega-menu-img mega-menu-img-left' ><i class="fa-fw dt-icon-the7-menu-012"></i><span class="menu-item-text"><span class="menu-text">Our Services</span></span></a></li>                
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1826 depth-0"><a href='product.php' class=' mega-menu-img mega-menu-img-left' ><i class="fa-fw dt-icon-the7-menu-012"></i><span class="menu-item-text"><span class="menu-text">Products</span></span></a></li>
                <!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1824 last depth-0"><a href='javascript:void(0)' class=' mega-menu-img mega-menu-img-left' ><i class="fa-fw icomoon-the7-font-the7-phone-06"></i><span class="menu-item-text"><span class="menu-text">Portfolio</span></span></a></li>-->
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1824 last depth-0"><a href='javascript:void(0)' class=' mega-menu-img mega-menu-img-left' ><i class="fa-fw icomoon-the7-font-the7-phone-06"></i><span class="menu-item-text"><span class="menu-text">Contact</span></span></a></li>
            </ul>
            <div class='mobile-mini-widgets-in-menu'></div>
        </div>

        <style id="the7-page-content-style">
            #main {
                padding-top: 0px;
                padding-bottom: 0px;
            }

            #main>.wf-wrap {
                padding-right: 30px;
                padding-left: 30px;
            }

            @media screen and (max-width: 1025px) {
                #main {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                #main>.wf-wrap {
                    padding-right: 0px;
                    padding-left: 0px;
                }
            }

            .img-css-resize-wrapper {
                aspect-ratio: 0.8;
            }
            .float{
            	position:fixed;
            	width:60px;
            	height:60px;
            	bottom:40px;
            	left:20px;
            	background-color:#25d366;
            	color:#FFF;
            	border-radius:50px;
            	text-align:center;
              font-size:30px;
            	box-shadow: 2px 2px 3px #999;
              z-index:100;
            }
            
            .my-float{
            	margin-top:16px;
            }
            
            .bounce {
                animation: bounce 2s infinite;
            }
            
            @keyframes bounce {
                0%,
                25%,
                50%,
                75%,
                100% {
                    transform: translateY(0);
                }
                40% {
                    transform: translateY(-20px);
                }
                60% {
                    transform: translateY(-12px);
                }
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=+918838148691" class="float bounce" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
        
        <style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }
    
    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <!-- Your form content goes here -->
    <div class="elementor-widget-container">
                                 <form class="elementor-form" method="post" name="Request a quote">
                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                       <div style="margin-bottom:14px;margin-top:14px" class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                                          <label for="form-field-name" class="elementor-field-label elementor-screen-only">
                                          Name							</label>
                                          <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name">
                                       </div>
                                       <div style="margin-bottom:14px" class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_5fa1fd8 elementor-col-100">
                                          <label for="form-field-field_5fa1fd8" class="elementor-field-label elementor-screen-only">
                                          Phone							</label>
                                          <input size="1" type="tel" name="form_fields[field_5fa1fd8]" id="form-field-field_5fa1fd8" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Phone" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                                       </div>
                                       <div style="margin-bottom:14px" class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                          <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                          Email							</label>
                                          <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
                                       </div>
                                       <div style="margin-bottom:14px" class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-field_5d3800f elementor-col-100">
                                          <label for="form-field-field_5d3800f" class="elementor-field-label elementor-screen-only">
                                          Article No							</label>
                                          <input type="number" name="form_fields[field_5d3800f]" id="form-field-field_5d3800f" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Article No." min="0" max="9999">
                                       </div>
                                       <div style="margin-bottom:14px" class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                          <label for="form-field-message" class="elementor-field-label elementor-screen-only">
                                          Message							</label>
                                          <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="form_fields[message]" id="form-field-message" rows="6" placeholder="Short case description"></textarea>				
                                       </div>
                                       <div style="margin-bottom:14px" class="elementor-field-type-recaptcha_v3 elementor-field-group elementor-column elementor-field-group-field_bfd4277 elementor-col-100 recaptcha_v3-bottomright">
                                          <div class="elementor-field" id="form-field-field_bfd4277">
                                             <div class="elementor-g-recaptcha" data-sitekey="6LelfGwaAAAAAJyTY97Xa4_rMqeQOQfzBxD7npVW" data-type="v3" data-action="Form" data-badge="bottomright" data-size="invisible">
                                                <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                                   <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-c5brljvc6k0n" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LelfGwaAAAAAJyTY97Xa4_rMqeQOQfzBxD7npVW&amp;co=aHR0cHM6Ly93d3cuYXNyYXN0ZWVscy5jb206NDQz&amp;hl=en&amp;type=v3&amp;v=vj7hFxe2iNgbe-u95xTozOXW&amp;size=invisible&amp;badge=bottomright&amp;sa=Form&amp;cb=ngs9q68ul6tz"></iframe></div>
                                                   <div class="grecaptcha-error"></div>
                                                   <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                </div>
                                                <iframe style="display: none;"></iframe>
                                             </div>
                                          </div>
                                       </div>
                                       <div style="margin-bottom:14px" class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                          <button type="submit" class="elementor-button elementor-size-sm">
                                          <span>
                                          <span class=" elementor-button-icon">
                                          </span>
                                          <span class="elementor-button-text">Send request</span>
                                          </span>
                                          </button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// When the user clicks on the button, open the modal
function openModal() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>