 <!DOCTYPE html>
<html lang="en-US">
    <!-- Mirrored from elementorpress.com/templatekit-pro/layout31/team/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 09:58:43 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Team &#8211; wellbeing</title>
        <meta name="robots" content="max-image-preview:large" />
        <link rel="alternate" type="application/rss+xml" title="wellbeing &raquo; Feed" href="../feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="wellbeing &raquo; Comments Feed" href="../comments/feed/index.html" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
                svgExt: ".svg",
                source: { concatemoji: "https:\/\/elementorpress.com\/templatekit-pro\/layout31\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.3" },
            };
            /*! This file is auto-generated */
            !(function (i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = { supportTests: e, timestamp: new Date().valueOf() };
                        sessionStorage.setItem(o, JSON.stringify(t));
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function (e, t) {
                        return e === r[t];
                    });
                }
                function u(e, t, n) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")
                                ? !1
                                : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") &&
                                      !n(
                                          e,
                                          "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                          "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                      );
                        case "emoji":
                            return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b");
                    }
                    return !1;
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                        a = r.getContext("2d", { willReadFrequently: !0 }),
                        o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                    return (
                        e.forEach(function (e) {
                            o[e] = t(a, e, n);
                        }),
                        o
                    );
                }
                function t(e) {
                    var t = i.createElement("script");
                    (t.src = e), (t.defer = !0), i.head.appendChild(t);
                }
                "undefined" != typeof Promise &&
                    ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = { everything: !0, everythingExceptFlag: !0 }),
                    (e = new Promise(function (e) {
                        i.addEventListener("DOMContentLoaded", e, { once: !0 });
                    })),
                    new Promise(function (t) {
                        var n = (function () {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if ("object" == typeof e && "number" == typeof e.timestamp && new Date().valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                                try {
                                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                                        r = new Blob([e], { type: "text/javascript" }),
                                        a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" });
                                    return void (a.onmessage = function (e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                        .then(function (e) {
                            for (var t in e) (n.supports[t] = e[t]), (n.supports.everything = n.supports.everything && n.supports[t]), "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                            (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag),
                                (n.DOMReady = !1),
                                (n.readyCallback = function () {
                                    n.DOMReady = !0;
                                });
                        })
                        .then(function () {
                            return e;
                        })
                        .then(function () {
                            var e;
                            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                        }));
            })((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <link rel="stylesheet" id="elementor-frontend-css" href="../wp-content/plugins/elementor/assets/css/frontend-lite.mine248.css?ver=3.5.4" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-6-css" href="../wp-content/uploads/elementor/css/post-60c5e.css?ver=1643613599" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-5-all-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/all.mine248.css?ver=3.5.4" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-4-shim-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.mine248.css?ver=3.5.4" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-2856-css" href="../wp-content/uploads/elementor/css/post-28560c5e.css?ver=1643613599" type="text/css" media="all" />
        <style id="wp-emoji-styles-inline-css" type="text/css">
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
        <link rel="stylesheet" id="wp-block-library-css" href="../wp-includes/css/dist/block-library/style.minef10.css?ver=6.5.3" type="text/css" media="all" />
        <style id="classic-theme-styles-inline-css" type="text/css">
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em;
            }
            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none;
            }
        </style>
        <style id="global-styles-inline-css" type="text/css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
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
            body .is-layout-flex {
                display: flex;
            }
            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }
            body .is-layout-flex > * {
                margin: 0;
            }
            body .is-layout-grid {
                display: grid;
            }
            body .is-layout-grid > * {
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
        <link rel="stylesheet" id="niche-frame-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/niche-frame5152.css?ver=1.0" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/animate.minf3df.css?ver=3.7.2" type="text/css" media="all" />
        <link rel="stylesheet" id="themify-icons-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/themify-icons.min8a54.css?ver=1.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="linea-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/linea.min8a54.css?ver=1.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="magnific-popup-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/magnific-popup.min5152.css?ver=1.0" type="text/css" media="all" />
        <link rel="stylesheet" id="owl-carousel-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/owl.carousel.min531b.css?ver=2.3.4" type="text/css" media="all" />
        <link rel="stylesheet" id="juxtapose-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/juxtapose5152.css?ver=1.0" type="text/css" media="all" />
        <link rel="stylesheet" id="naevents-styles-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/stylesef6d.css?ver=1.8.2" type="text/css" media="all" />
        <link rel="stylesheet" id="naevents-responsive-css" href="../wp-content/plugins/events-addon-for-elementor/assets/css/responsiveef6d.css?ver=1.8.2" type="text/css" media="all" />
        <link rel="stylesheet" id="template-kit-export-css" href="../wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min365c.css?ver=1.0.21" type="text/css" media="all" />
        <link rel="stylesheet" id="hello-elementor-css" href="../wp-content/themes/hello-elementor/style.mina305.css?ver=2.4.2" type="text/css" media="all" />
        <link rel="stylesheet" id="hello-elementor-theme-style-css" href="../wp-content/themes/hello-elementor/theme.mina305.css?ver=2.4.2" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-5-css" href="../wp-content/uploads/elementor/css/post-50c5e.css?ver=1643613599" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="../wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons91ee.css?ver=2.5.3" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-icons-css" href="../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mine900.css?ver=5.14.0" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-4320-css" href="../wp-content/uploads/elementor/css/post-43208965.css?ver=1643613644" type="text/css" media="all" />
        <link rel="stylesheet" id="ekit-widget-styles-css" href="../wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles91ee.css?ver=2.5.3" type="text/css" media="all" />
        <link rel="stylesheet" id="ekit-responsive-css" href="../wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive91ee.css?ver=2.5.3" type="text/css" media="all" />
        <link
            rel="stylesheet"
            id="google-fonts-1-css"
            href="https://fonts.googleapis.com/css?family=Jost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.5.3"
            type="text/css"
            media="all"
        />
        <link rel="stylesheet" id="elementor-icons-shared-0-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3" type="text/css" media="all" />
        <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.mine248.js?ver=3.5.4" id="font-awesome-4-shim-js"></script>
        <script type="text/javascript" src="../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min365c.js?ver=1.0.21" id="template-kit-export-js"></script>
        <link rel="https://api.w.org/" href="../wp-json/index.html" />
        <link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/4320.json" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
        <meta name="generator" content="WordPress 6.5.3" />
        <link rel="canonical" href="index.html" />
        <link rel="shortlink" href="../indexa791.html?p=4320" />
        <link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed5b70.json?url=https%3A%2F%2Felementorpress.com%2Ftemplatekit-pro%2Flayout31%2Fteam%2F" />
        <link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embedffae?url=https%3A%2F%2Felementorpress.com%2Ftemplatekit-pro%2Flayout31%2Fteam%2F&amp;format=xml" />
    </head>
    <body class="page-template page-template-elementor_header_footer page page-id-4320 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-4320">
        <div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
            <div data-elementor-type="wp-post" data-elementor-id="6" class="elementor elementor-6" data-elementor-settings="[]">
                <div class="elementor-section-wrap">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-a5aa493 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="a5aa493"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee2ee09" data-id="ee2ee09" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-80b8d45 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="80b8d45"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-24db0c7" data-id="24db0c7" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-b917e69 elementor-widget elementor-widget-image" data-id="b917e69" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.5.4 - 23-01-2022 */
                                                                .elementor-widget-image {
                                                                    text-align: center;
                                                                }
                                                                .elementor-widget-image a {
                                                                    display: inline-block;
                                                                }
                                                                .elementor-widget-image a img[src$=".svg"] {
                                                                    width: 48px;
                                                                }
                                                                .elementor-widget-image img {
                                                                    vertical-align: middle;
                                                                    display: inline-block;
                                                                }
                                                            </style>
                                                            <img width="199" height="40" src="../wp-content/uploads/2021/12/logo.png" class="attachment-full size-full" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2beda11" data-id="2beda11" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-aeda8f3 elementor-widget elementor-widget-ekit-nav-menu"
                                                        data-id="aeda8f3"
                                                        data-element_type="widget"
                                                        data-widget_type="ekit-nav-menu.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon="" data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">
                                                                <button class="elementskit-menu-hamburger elementskit-menu-toggler">
                                                                    <span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span>
                                                                </button>
                                                                <div
                                                                    id="ekit-megamenu-main-menu"
                                                                    class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_fill_arrow ekit-nav-menu-one-page-no ekit-nav-dropdown-hover"
                                                                >
                                                                    <ul id="menu-main-menu" class="elementskit-navbar-nav elementskit-menu-po-center submenu-click-on-icon">
                                                                        <li
                                                                            id="menu-item-51"
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-51 nav-item elementskit-mobile-builder-content"
                                                                            data-vertical-menu="750px"
                                                                        >
                                                                            <a href="../index.html" class="ekit-menu-nav-link">Home</a>
                                                                        </li>
                                                                        <li
                                                                            id="menu-item-50"
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50 nav-item elementskit-mobile-builder-content"
                                                                            data-vertical-menu="750px"
                                                                        >
                                                                            <a href="../about/index.html" class="ekit-menu-nav-link">About</a>
                                                                        </li>
                                                                        <li
                                                                            id="menu-item-46"
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46 nav-item elementskit-mobile-builder-content"
                                                                            data-vertical-menu="750px"
                                                                        >
                                                                            <a href="../contact/index.html" class="ekit-menu-nav-link">Contact</a>
                                                                        </li>
                                                                        <li
                                                                            id="menu-item-5387"
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5387 nav-item elementskit-mobile-builder-content"
                                                                            data-vertical-menu="750px"
                                                                        >
                                                                            <a href="../testimonials/index.html" class="ekit-menu-nav-link">Testimonials</a>
                                                                        </li>
                                                                        <li
                                                                            id="menu-item-5389"
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4320 current_page_item menu-item-5389 nav-item elementskit-mobile-builder-content active"
                                                                            data-vertical-menu="750px"
                                                                        >
                                                                            <a href="index.html" class="ekit-menu-nav-link active">Team</a>
                                                                        </li>
                                                                        <li
                                                                            id="menu-item-5394"
                                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5394 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                                            data-vertical-menu="750px"
                                                                        >
                                                                            <a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle">More<i class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
                                                                            <ul class="elementskit-dropdown elementskit-submenu-panel">
                                                                                <li
                                                                                    id="menu-item-5388"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5388 nav-item elementskit-mobile-builder-content"
                                                                                    data-vertical-menu="750px"
                                                                                >
                                                                                    <a href="../price/index.html" class="dropdown-item">Price</a>
                                                                                </li>
                                                                                <li
                                                                                    id="menu-item-5393"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5393 nav-item elementskit-mobile-builder-content"
                                                                                    data-vertical-menu="750px"
                                                                                >
                                                                                    <a href="../video-tutorials/index.html" class="dropdown-item">Video Tutorials</a>
                                                                                </li>
                                                                                <li
                                                                                    id="menu-item-5392"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5392 nav-item elementskit-mobile-builder-content"
                                                                                    data-vertical-menu="750px"
                                                                                >
                                                                                    <a href="../faqs/index.html" class="dropdown-item">FAQ</a>
                                                                                </li>
                                                                                <li
                                                                                    id="menu-item-6514"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6514 nav-item elementskit-mobile-builder-content"
                                                                                    data-vertical-menu="750px"
                                                                                >
                                                                                    <a href="../benefits/index.html" class="dropdown-item">Benefits</a>
                                                                                </li>
                                                                                <li
                                                                                    id="menu-item-5391"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5391 nav-item elementskit-mobile-builder-content"
                                                                                    data-vertical-menu="750px"
                                                                                >
                                                                                    <a href="../coming-soon/index.html" class="dropdown-item">Coming Soon</a>
                                                                                </li>
                                                                                <li
                                                                                    id="menu-item-5390"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5390 nav-item elementskit-mobile-builder-content"
                                                                                    data-vertical-menu="750px"
                                                                                >
                                                                                    <a href="../404-2/index.html" class="dropdown-item">404</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="elementskit-nav-identity-panel">
                                                                        <div class="elementskit-site-title">
                                                                            <a class="elementskit-nav-logo" href="https://elementorpress.com/templatekit-pro/layout31" target="_self" rel="">
                                                                                <img width="204" height="40" src="../wp-content/uploads/2022/01/footer-logo.png" class="attachment-full size-full" alt="" decoding="async" />
                                                                            </a>
                                                                        </div>
                                                                        <button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button>
                                                                    </div>
                                                                </div>
                                                                <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5b19397 elementor-hidden-tablet elementor-hidden-mobile"
                                                data-id="5b19397"
                                                data-element_type="column"
                                            >
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-eec147a elementor-hidden-tablet elementor-hidden-mobile elementor-align-right elementor-widget elementor-widget-button"
                                                        data-id="eec147a"
                                                        data-element_type="widget"
                                                        data-widget_type="button.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-icon elementor-align-icon-left"> <i aria-hidden="true" class="fas fa-unlock"></i> </span>
                                                                        <span class="elementor-button-text">Login</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1493945 elementor-hidden-tablet elementor-hidden-mobile"
                                                data-id="1493945"
                                                data-element_type="column"
                                            >
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-944c8a0 elementor-widget elementor-widget-button" data-id="944c8a0" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-icon elementor-align-icon-left"> <i aria-hidden="true" class="far fa-edit"></i> </span>
                                                                        <span class="elementor-button-text">Register </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div data-elementor-type="wp-page" data-elementor-id="4320" class="elementor elementor-4320" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-bf30494 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="bf30494"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a07480" data-id="1a07480" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-9fbc927 elementor-widget elementor-widget-heading" data-id="9fbc927" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.5.4 - 23-01-2022 */
                                            .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1;
                                            }
                                            .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"] > a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit;
                                            }
                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px;
                                            }
                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px;
                                            }
                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px;
                                            }
                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px;
                                            }
                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px;
                                            }
                                        </style>
                                        <h2 class="elementor-heading-title elementor-size-default">Our Professional Team</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-53d3fba elementor-widget elementor-widget-text-editor" data-id="53d3fba" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.5.4 - 23-01-2022 */
                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                background-color: #818a91;
                                                color: #fff;
                                            }
                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                color: #818a91;
                                                border: 3px solid;
                                                background-color: transparent;
                                            }
                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                margin-top: 8px;
                                            }
                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                width: 1em;
                                                height: 1em;
                                            }
                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                float: left;
                                                text-align: center;
                                                line-height: 1;
                                                font-size: 50px;
                                            }
                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                display: inline-block;
                                            }
                                        </style>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-9a4feca elementor-align-center elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="9a4feca"
                                    data-element_type="widget"
                                    data-widget_type="icon-list.default"
                                >
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.5.4 - 23-01-2022 */
                                            .elementor-widget.elementor-icon-list--layout-inline .elementor-widget-container {
                                                overflow: hidden;
                                            }
                                            .elementor-widget .elementor-icon-list-items.elementor-inline-items {
                                                margin-right: -8px;
                                                margin-left: -8px;
                                            }
                                            .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                                                margin-right: 8px;
                                                margin-left: 8px;
                                            }
                                            .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                                                width: auto;
                                                left: auto;
                                                right: auto;
                                                position: relative;
                                                height: 100%;
                                                border-top: 0;
                                                border-bottom: 0;
                                                border-right: 0;
                                                border-left-width: 1px;
                                                border-style: solid;
                                                right: -8px;
                                            }
                                            .elementor-widget .elementor-icon-list-items {
                                                list-style-type: none;
                                                margin: 0;
                                                padding: 0;
                                            }
                                            .elementor-widget .elementor-icon-list-item {
                                                margin: 0;
                                                padding: 0;
                                                position: relative;
                                            }
                                            .elementor-widget .elementor-icon-list-item:after {
                                                position: absolute;
                                                bottom: 0;
                                                width: 100%;
                                            }
                                            .elementor-widget .elementor-icon-list-item,
                                            .elementor-widget .elementor-icon-list-item a {
                                                display: -webkit-box;
                                                display: -ms-flexbox;
                                                display: flex;
                                                -webkit-box-align: center;
                                                -ms-flex-align: center;
                                                align-items: center;
                                                font-size: inherit;
                                            }
                                            .elementor-widget .elementor-icon-list-icon + .elementor-icon-list-text {
                                                -ms-flex-item-align: center;
                                                align-self: center;
                                                padding-left: 5px;
                                            }
                                            .elementor-widget .elementor-icon-list-icon {
                                                display: -webkit-box;
                                                display: -ms-flexbox;
                                                display: flex;
                                            }
                                            .elementor-widget .elementor-icon-list-icon svg {
                                                width: var(--e-icon-list-icon-size, 1em);
                                                height: var(--e-icon-list-icon-size, 1em);
                                            }
                                            .elementor-widget .elementor-icon-list-icon i {
                                                width: 1.25em;
                                                font-size: var(--e-icon-list-icon-size);
                                            }
                                            .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon {
                                                text-align: var(--e-icon-list-icon-align);
                                            }
                                            .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon svg {
                                                margin: var(--e-icon-list-icon-margin, 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25) 0 0);
                                            }
                                            .elementor-widget.elementor-list-item-link-full_width a {
                                                width: 100%;
                                            }
                                            .elementor-widget.elementor-align-center .elementor-icon-list-item,
                                            .elementor-widget.elementor-align-center .elementor-icon-list-item a {
                                                -webkit-box-pack: center;
                                                -ms-flex-pack: center;
                                                justify-content: center;
                                            }
                                            .elementor-widget.elementor-align-center .elementor-icon-list-item:after {
                                                margin: auto;
                                            }
                                            .elementor-widget.elementor-align-center .elementor-inline-items {
                                                -webkit-box-pack: center;
                                                -ms-flex-pack: center;
                                                justify-content: center;
                                            }
                                            .elementor-widget.elementor-align-left .elementor-icon-list-item,
                                            .elementor-widget.elementor-align-left .elementor-icon-list-item a {
                                                -webkit-box-pack: start;
                                                -ms-flex-pack: start;
                                                justify-content: flex-start;
                                                text-align: left;
                                            }
                                            .elementor-widget.elementor-align-left .elementor-inline-items {
                                                -webkit-box-pack: start;
                                                -ms-flex-pack: start;
                                                justify-content: flex-start;
                                            }
                                            .elementor-widget.elementor-align-right .elementor-icon-list-item,
                                            .elementor-widget.elementor-align-right .elementor-icon-list-item a {
                                                -webkit-box-pack: end;
                                                -ms-flex-pack: end;
                                                justify-content: flex-end;
                                                text-align: right;
                                            }
                                            .elementor-widget.elementor-align-right .elementor-icon-list-items {
                                                -webkit-box-pack: end;
                                                -ms-flex-pack: end;
                                                justify-content: flex-end;
                                            }
                                            .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
                                                left: 0;
                                            }
                                            .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
                                                right: 0;
                                            }
                                            @media (max-width: 1024px) {
                                                .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item,
                                                .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item a,
                                                .elementor-widget.elementor-tablet-align-center .elementor-icon-list-items {
                                                    -webkit-box-pack: center;
                                                    -ms-flex-pack: center;
                                                    justify-content: center;
                                                }
                                                .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item:after {
                                                    margin: auto;
                                                }
                                                .elementor-widget.elementor-tablet-align-left .elementor-icon-list-items {
                                                    -webkit-box-pack: start;
                                                    -ms-flex-pack: start;
                                                    justify-content: flex-start;
                                                }
                                                .elementor-widget.elementor-tablet-align-left .elementor-icon-list-item,
                                                .elementor-widget.elementor-tablet-align-left .elementor-icon-list-item a {
                                                    -webkit-box-pack: start;
                                                    -ms-flex-pack: start;
                                                    justify-content: flex-start;
                                                    text-align: left;
                                                }
                                                .elementor-widget.elementor-tablet-align-right .elementor-icon-list-items {
                                                    -webkit-box-pack: end;
                                                    -ms-flex-pack: end;
                                                    justify-content: flex-end;
                                                }
                                                .elementor-widget.elementor-tablet-align-right .elementor-icon-list-item,
                                                .elementor-widget.elementor-tablet-align-right .elementor-icon-list-item a {
                                                    -webkit-box-pack: end;
                                                    -ms-flex-pack: end;
                                                    justify-content: flex-end;
                                                    text-align: right;
                                                }
                                                .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
                                                    left: 0;
                                                }
                                                .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
                                                    right: 0;
                                                }
                                            }
                                            @media (max-width: 767px) {
                                                .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item,
                                                .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item a,
                                                .elementor-widget.elementor-mobile-align-center .elementor-icon-list-items {
                                                    -webkit-box-pack: center;
                                                    -ms-flex-pack: center;
                                                    justify-content: center;
                                                }
                                                .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item:after {
                                                    margin: auto;
                                                }
                                                .elementor-widget.elementor-mobile-align-left .elementor-icon-list-items {
                                                    -webkit-box-pack: start;
                                                    -ms-flex-pack: start;
                                                    justify-content: flex-start;
                                                }
                                                .elementor-widget.elementor-mobile-align-left .elementor-icon-list-item,
                                                .elementor-widget.elementor-mobile-align-left .elementor-icon-list-item a {
                                                    -webkit-box-pack: start;
                                                    -ms-flex-pack: start;
                                                    justify-content: flex-start;
                                                    text-align: left;
                                                }
                                                .elementor-widget.elementor-mobile-align-right .elementor-icon-list-items {
                                                    -webkit-box-pack: end;
                                                    -ms-flex-pack: end;
                                                    justify-content: flex-end;
                                                }
                                                .elementor-widget.elementor-mobile-align-right .elementor-icon-list-item,
                                                .elementor-widget.elementor-mobile-align-right .elementor-icon-list-item a {
                                                    -webkit-box-pack: end;
                                                    -ms-flex-pack: end;
                                                    justify-content: flex-end;
                                                    text-align: right;
                                                }
                                                .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                                                    left: 0;
                                                }
                                                .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                                                    right: 0;
                                                }
                                            }
                                        </style>
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-text">Home</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-cabe340 elementor-align-center elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="cabe340"
                                    data-element_type="widget"
                                    data-widget_type="icon-list.default"
                                >
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-minus"></i> </span>
                                                <span class="elementor-icon-list-text">Team</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-4ba27ea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="4ba27ea"
                    data-element_type="section"
                    data-settings='{"background_background":"classic"}'
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9afadfe" data-id="9afadfe" data-element_type="column" data-settings='{"background_background":"classic"}'>
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-32cac49 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="32cac49"
                                    data-element_type="section"
                                    data-settings='{"background_background":"classic"}'
                                >
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8946a1c elementor-invisible"
                                            data-id="8946a1c"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInDown"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-8a2f806 animated-slow elementor-widget elementor-widget-image"
                                                    data-id="8a2f806"
                                                    data-element_type="widget"
                                                    data-settings='{"_animation":"none","_animation_delay":1}'
                                                    data-widget_type="image.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async" width="215" height="210" src="../wp-content/uploads/2022/01/professionals-img-1.png" class="elementor-animation-float attachment-full size-full" alt="" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c0c57b8 elementor-widget elementor-widget-heading" data-id="c0c57b8" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Taylor Parkes</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-38763ae elementor-widget elementor-widget-text-editor" data-id="38763ae" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-8b7608e elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="8b7608e"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                            /*! elementor - v3.5.4 - 23-01-2022 */
                                                            .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                                            .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                                            .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                                line-height: 1;
                                                                font-size: 0;
                                                            }
                                                            .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                                display: inline-grid;
                                                            }
                                                            .elementor-widget-social-icons .elementor-grid {
                                                                grid-column-gap: var(--grid-column-gap, 5px);
                                                                grid-row-gap: var(--grid-row-gap, 5px);
                                                                grid-template-columns: var(--grid-template-columns);
                                                                -webkit-box-pack: var(--justify-content, center);
                                                                -ms-flex-pack: var(--justify-content, center);
                                                                justify-content: var(--justify-content, center);
                                                                justify-items: var(--justify-content, center);
                                                            }
                                                            .elementor-icon.elementor-social-icon {
                                                                font-size: var(--icon-size, 25px);
                                                                line-height: var(--icon-size, 25px);
                                                                width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                                                                height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                                                            }
                                                            .elementor-social-icon {
                                                                --e-social-icon-icon-color: #fff;
                                                                display: -webkit-inline-box;
                                                                display: -ms-inline-flexbox;
                                                                display: inline-flex;
                                                                background-color: #818a91;
                                                                -webkit-box-align: center;
                                                                -ms-flex-align: center;
                                                                align-items: center;
                                                                -webkit-box-pack: center;
                                                                -ms-flex-pack: center;
                                                                justify-content: center;
                                                                text-align: center;
                                                                cursor: pointer;
                                                            }
                                                            .elementor-social-icon i {
                                                                color: var(--e-social-icon-icon-color);
                                                            }
                                                            .elementor-social-icon svg {
                                                                fill: var(--e-social-icon-icon-color);
                                                            }
                                                            .elementor-social-icon:last-child {
                                                                margin: 0;
                                                            }
                                                            .elementor-social-icon:hover {
                                                                opacity: 0.9;
                                                                color: #fff;
                                                            }
                                                            .elementor-social-icon-android {
                                                                background-color: #a4c639;
                                                            }
                                                            .elementor-social-icon-apple {
                                                                background-color: #999;
                                                            }
                                                            .elementor-social-icon-behance {
                                                                background-color: #1769ff;
                                                            }
                                                            .elementor-social-icon-bitbucket {
                                                                background-color: #205081;
                                                            }
                                                            .elementor-social-icon-codepen {
                                                                background-color: #000;
                                                            }
                                                            .elementor-social-icon-delicious {
                                                                background-color: #39f;
                                                            }
                                                            .elementor-social-icon-deviantart {
                                                                background-color: #05cc47;
                                                            }
                                                            .elementor-social-icon-digg {
                                                                background-color: #005be2;
                                                            }
                                                            .elementor-social-icon-dribbble {
                                                                background-color: #ea4c89;
                                                            }
                                                            .elementor-social-icon-elementor {
                                                                background-color: #d30c5c;
                                                            }
                                                            .elementor-social-icon-envelope {
                                                                background-color: #ea4335;
                                                            }
                                                            .elementor-social-icon-facebook,
                                                            .elementor-social-icon-facebook-f {
                                                                background-color: #3b5998;
                                                            }
                                                            .elementor-social-icon-flickr {
                                                                background-color: #0063dc;
                                                            }
                                                            .elementor-social-icon-foursquare {
                                                                background-color: #2d5be3;
                                                            }
                                                            .elementor-social-icon-free-code-camp,
                                                            .elementor-social-icon-freecodecamp {
                                                                background-color: #006400;
                                                            }
                                                            .elementor-social-icon-github {
                                                                background-color: #333;
                                                            }
                                                            .elementor-social-icon-gitlab {
                                                                background-color: #e24329;
                                                            }
                                                            .elementor-social-icon-globe {
                                                                background-color: #818a91;
                                                            }
                                                            .elementor-social-icon-google-plus,
                                                            .elementor-social-icon-google-plus-g {
                                                                background-color: #dd4b39;
                                                            }
                                                            .elementor-social-icon-houzz {
                                                                background-color: #7ac142;
                                                            }
                                                            .elementor-social-icon-instagram {
                                                                background-color: #262626;
                                                            }
                                                            .elementor-social-icon-jsfiddle {
                                                                background-color: #487aa2;
                                                            }
                                                            .elementor-social-icon-link {
                                                                background-color: #818a91;
                                                            }
                                                            .elementor-social-icon-linkedin,
                                                            .elementor-social-icon-linkedin-in {
                                                                background-color: #0077b5;
                                                            }
                                                            .elementor-social-icon-medium {
                                                                background-color: #00ab6b;
                                                            }
                                                            .elementor-social-icon-meetup {
                                                                background-color: #ec1c40;
                                                            }
                                                            .elementor-social-icon-mixcloud {
                                                                background-color: #273a4b;
                                                            }
                                                            .elementor-social-icon-odnoklassniki {
                                                                background-color: #f4731c;
                                                            }
                                                            .elementor-social-icon-pinterest {
                                                                background-color: #bd081c;
                                                            }
                                                            .elementor-social-icon-product-hunt {
                                                                background-color: #da552f;
                                                            }
                                                            .elementor-social-icon-reddit {
                                                                background-color: #ff4500;
                                                            }
                                                            .elementor-social-icon-rss {
                                                                background-color: #f26522;
                                                            }
                                                            .elementor-social-icon-shopping-cart {
                                                                background-color: #4caf50;
                                                            }
                                                            .elementor-social-icon-skype {
                                                                background-color: #00aff0;
                                                            }
                                                            .elementor-social-icon-slideshare {
                                                                background-color: #0077b5;
                                                            }
                                                            .elementor-social-icon-snapchat {
                                                                background-color: #fffc00;
                                                            }
                                                            .elementor-social-icon-soundcloud {
                                                                background-color: #f80;
                                                            }
                                                            .elementor-social-icon-spotify {
                                                                background-color: #2ebd59;
                                                            }
                                                            .elementor-social-icon-stack-overflow {
                                                                background-color: #fe7a15;
                                                            }
                                                            .elementor-social-icon-steam {
                                                                background-color: #00adee;
                                                            }
                                                            .elementor-social-icon-stumbleupon {
                                                                background-color: #eb4924;
                                                            }
                                                            .elementor-social-icon-telegram {
                                                                background-color: #2ca5e0;
                                                            }
                                                            .elementor-social-icon-thumb-tack {
                                                                background-color: #1aa1d8;
                                                            }
                                                            .elementor-social-icon-tripadvisor {
                                                                background-color: #589442;
                                                            }
                                                            .elementor-social-icon-tumblr {
                                                                background-color: #35465c;
                                                            }
                                                            .elementor-social-icon-twitch {
                                                                background-color: #6441a5;
                                                            }
                                                            .elementor-social-icon-twitter {
                                                                background-color: #1da1f2;
                                                            }
                                                            .elementor-social-icon-viber {
                                                                background-color: #665cac;
                                                            }
                                                            .elementor-social-icon-vimeo {
                                                                background-color: #1ab7ea;
                                                            }
                                                            .elementor-social-icon-vk {
                                                                background-color: #45668e;
                                                            }
                                                            .elementor-social-icon-weibo {
                                                                background-color: #dd2430;
                                                            }
                                                            .elementor-social-icon-weixin {
                                                                background-color: #31a918;
                                                            }
                                                            .elementor-social-icon-whatsapp {
                                                                background-color: #25d366;
                                                            }
                                                            .elementor-social-icon-wordpress {
                                                                background-color: #21759b;
                                                            }
                                                            .elementor-social-icon-xing {
                                                                background-color: #026466;
                                                            }
                                                            .elementor-social-icon-yelp {
                                                                background-color: #af0606;
                                                            }
                                                            .elementor-social-icon-youtube {
                                                                background-color: #cd201f;
                                                            }
                                                            .elementor-social-icon-500px {
                                                                background-color: #0099e5;
                                                            }
                                                            .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                                -webkit-border-radius: 10%;
                                                                border-radius: 10%;
                                                            }
                                                            .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                                -webkit-border-radius: 50%;
                                                                border-radius: 50%;
                                                            }
                                                        </style>
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2d23133 elementor-invisible"
                                            data-id="2d23133"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-0bbfd95 elementor-widget elementor-widget-image" data-id="0bbfd95" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async" width="214" height="210" src="../wp-content/uploads/2022/01/professionals-img-2.png" class="elementor-animation-float attachment-full size-full" alt="" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-da4bc1f elementor-widget elementor-widget-heading" data-id="da4bc1f" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Alexandra Lowe</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9a991a9 elementor-widget elementor-widget-text-editor" data-id="9a991a9" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-7954627 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="7954627"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3f6471b elementor-invisible"
                                            data-id="3f6471b"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInDown"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-f06fb18 elementor-widget elementor-widget-image" data-id="f06fb18" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img decoding="async" width="214" height="210" src="../wp-content/uploads/2022/01/professionals-img-3.png" class="elementor-animation-float attachment-full size-full" alt="" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1687f33 elementor-widget elementor-widget-heading" data-id="1687f33" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Hollie Blake</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-15bc35e elementor-widget elementor-widget-text-editor" data-id="15bc35e" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Coach Teacher
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-dcf84fb elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="dcf84fb"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b84668e elementor-invisible"
                                            data-id="b84668e"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-83996dc elementor-widget elementor-widget-image" data-id="83996dc" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="214"
                                                            height="210"
                                                            src="../wp-content/uploads/2022/01/professionals-img-4.png"
                                                            class="elementor-animation-float attachment-full size-full"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-94cb435 elementor-widget elementor-widget-heading" data-id="94cb435" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Morgan Nicholson</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8bbfe93 elementor-widget elementor-widget-text-editor" data-id="8bbfe93" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-56c1f09 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="56c1f09"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-599d035 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="599d035"
                                    data-element_type="section"
                                    data-settings='{"background_background":"classic"}'
                                >
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7099cb9 elementor-invisible"
                                            data-id="7099cb9"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInDown"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-0228ca5 animated-slow elementor-widget elementor-widget-image"
                                                    data-id="0228ca5"
                                                    data-element_type="widget"
                                                    data-settings='{"_animation":"none","_animation_delay":1}'
                                                    data-widget_type="image.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="215"
                                                            height="210"
                                                            src="../wp-content/uploads/2022/01/team-image-5-1.jpg"
                                                            class="elementor-animation-float attachment-full size-full"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4d95547 elementor-widget elementor-widget-heading" data-id="4d95547" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Jessica Gilbert</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3a5fd0e elementor-widget elementor-widget-text-editor" data-id="3a5fd0e" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-f90c1f1 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="f90c1f1"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8f037c9 elementor-invisible"
                                            data-id="8f037c9"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-8a72adf elementor-widget elementor-widget-image" data-id="8a72adf" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="214"
                                                            height="210"
                                                            src="../wp-content/uploads/2022/01/MicrosoftTeams-image-17.png"
                                                            class="elementor-animation-float attachment-full size-full"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b2691f6 elementor-widget elementor-widget-heading" data-id="b2691f6" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Ethan Watson</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8304597 elementor-widget elementor-widget-text-editor" data-id="8304597" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-87e94d6 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="87e94d6"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6da108d elementor-invisible"
                                            data-id="6da108d"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInDown"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-85c9fcd elementor-widget elementor-widget-image" data-id="85c9fcd" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="214"
                                                            height="210"
                                                            src="../wp-content/uploads/2022/01/team-image-6-1.png"
                                                            class="elementor-animation-float attachment-full size-full"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5c682b6 elementor-widget elementor-widget-heading" data-id="5c682b6" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Amelie Francis</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5849050 elementor-widget elementor-widget-text-editor" data-id="5849050" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Coach Teacher
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-49e3c29 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="49e3c29"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3c2a705 elementor-invisible"
                                            data-id="3c2a705"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-f5d45d0 elementor-widget elementor-widget-image" data-id="f5d45d0" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="214" height="210" src="../wp-content/uploads/2022/01/team-image-7.png" class="elementor-animation-float attachment-full size-full" alt="" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-efb40e4 elementor-widget elementor-widget-heading" data-id="efb40e4" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Riley Hayward</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff81ca elementor-widget elementor-widget-text-editor" data-id="4ff81ca" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-d07f70e elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="d07f70e"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-f1a866a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="f1a866a"
                                    data-element_type="section"
                                    data-settings='{"background_background":"classic"}'
                                >
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9755df5 elementor-invisible"
                                            data-id="9755df5"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInDown"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-42e5664 animated-slow elementor-widget elementor-widget-image"
                                                    data-id="42e5664"
                                                    data-element_type="widget"
                                                    data-settings='{"_animation":"none","_animation_delay":1}'
                                                    data-widget_type="image.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="215" height="210" src="../wp-content/uploads/2022/01/team-image-8.png" class="elementor-animation-float attachment-full size-full" alt="" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-32c13bc elementor-widget elementor-widget-heading" data-id="32c13bc" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Kyle Martin</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-733ba00 elementor-widget elementor-widget-text-editor" data-id="733ba00" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-3cfa28f elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="3cfa28f"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e47b4f5 elementor-invisible"
                                            data-id="e47b4f5"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-59e3053 elementor-widget elementor-widget-image" data-id="59e3053" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="214" height="210" src="../wp-content/uploads/2022/01/team-image-9.png" class="elementor-animation-float attachment-full size-full" alt="" />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-40a439f elementor-widget elementor-widget-heading" data-id="40a439f" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Evie Edwards</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-72bff2d elementor-widget elementor-widget-text-editor" data-id="72bff2d" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-6b1f8cb elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="6b1f8cb"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-71fab4d elementor-invisible"
                                            data-id="71fab4d"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInDown"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-225b787 elementor-widget elementor-widget-image" data-id="225b787" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="214"
                                                            height="210"
                                                            src="../wp-content/uploads/2022/01/team-image-10-1.png"
                                                            class="elementor-animation-float attachment-full size-full"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-dc85df1 elementor-widget elementor-widget-heading" data-id="dc85df1" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Dylan Steven</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-76d6991 elementor-widget elementor-widget-text-editor" data-id="76d6991" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Coach Teacher
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-4abff5c elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="4abff5c"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0e08166 elementor-invisible"
                                            data-id="0e08166"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-4728fe0 elementor-widget elementor-widget-image" data-id="4728fe0" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="214"
                                                            height="210"
                                                            src="../wp-content/uploads/2022/01/team-image-11-1.png"
                                                            class="elementor-animation-float attachment-full size-full"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-26c930d elementor-widget elementor-widget-heading" data-id="26c930d" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Niamh Goodwin</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ab35939 elementor-widget elementor-widget-text-editor" data-id="ab35939" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Motivation Speaker
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-6790a1d elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                    data-id="6790a1d"
                                                    data-element_type="widget"
                                                    data-widget_type="social-icons.default"
                                                >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-c4b31cc" target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-f330480" target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-16e0304" target="_blank">
                                                                    <span class="elementor-screen-only">Linkedin-in</span>
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f97745c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f97745c"
                    data-element_type="section"
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b70ac0" data-id="5b70ac0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-756da1a elementor-widget elementor-widget-heading" data-id="756da1a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Our Happy Clients</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-0381965 elementor-widget elementor-widget-text-editor" data-id="0381965" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscinge lit sed do eiusm tempor incididunt ut labore etdolor emagna aliquan enim justo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-5c2bc90 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="5c2bc90"
                    data-element_type="section"
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1dd1487" data-id="1dd1487" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7357f26 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="7357f26"
                                    data-element_type="section"
                                >
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f874052 elementor-invisible"
                                            data-id="f874052"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInLeft"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-879b901 elementor-widget elementor-widget-text-editor" data-id="879b901" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-108c0ad elementor-widget elementor-widget-heading" data-id="108c0ad" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Shoo Phar Dhie</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f06480c elementor-widget elementor-widget-text-editor" data-id="f06480c" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        exemple.com
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-15e44de elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="15e44de"
                                    data-element_type="section"
                                >
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ea8b281 elementor-invisible"
                                            data-id="ea8b281"
                                            data-element_type="column"
                                            data-settings='{"background_background":"classic","animation":"fadeInUp"}'
                                        >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-40e1017 elementor-widget elementor-widget-text-editor" data-id="40e1017" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa quis enim.
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-62cb819 elementor-widget elementor-widget-heading" data-id="62cb819" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Callum Morley</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d7ee7fe elementor-widget elementor-widget-text-editor" data-id="d7ee7fe" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        exemple.com
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b13c1b9 elementor-invisible" data-id="b13c1b9" data-element_type="column" data-settings='{"animation":"fadeIn"}'>
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-33c5f7f elementor-widget elementor-widget-image" data-id="33c5f7f" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img
                                            loading="lazy"
                                            decoding="async"
                                            width="445"
                                            height="586"
                                            src="../wp-content/uploads/2022/01/home-page-7th-sec-img.jpg"
                                            class="elementor-animation-float attachment-large size-large"
                                            alt=""
                                            srcset="
                                                https://elementorpress.com/templatekit-pro/layout31/wp-content/uploads/2022/01/home-page-7th-sec-img.jpg         445w,
                                                https://elementorpress.com/templatekit-pro/layout31/wp-content/uploads/2022/01/home-page-7th-sec-img-228x300.jpg 228w
                                            "
                                            sizes="(max-width: 445px) 100vw, 445px"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-9c7c8c3 elementor-absolute elementor-widget elementor-widget-image"
                                    data-id="9c7c8c3"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img
                                            loading="lazy"
                                            decoding="async"
                                            width="444"
                                            height="550"
                                            src="../wp-content/uploads/2022/01/home-page-5th-sec-img-bg.jpg"
                                            class="attachment-full size-full"
                                            alt=""
                                            srcset="
                                                https://elementorpress.com/templatekit-pro/layout31/wp-content/uploads/2022/01/home-page-5th-sec-img-bg.jpg         444w,
                                                https://elementorpress.com/templatekit-pro/layout31/wp-content/uploads/2022/01/home-page-5th-sec-img-bg-242x300.jpg 242w
                                            "
                                            sizes="(max-width: 444px) 100vw, 444px"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-fbd6051 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                    data-id="fbd6051"
                    data-element_type="section"
                    data-settings='{"animation":"fadeInRight"}'
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-67440e8" data-id="67440e8" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-9328bc1 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="9328bc1" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="91" height="43" src="../wp-content/uploads/2022/01/logo1.png" class="elementor-animation-float attachment-large size-large" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-c1b13a6" data-id="c1b13a6" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-e778416 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="e778416" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="116" height="40" src="../wp-content/uploads/2022/01/logo2.png" class="elementor-animation-float attachment-large size-large" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-ff992bb" data-id="ff992bb" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-e8194be elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="e8194be" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="94" height="50" src="../wp-content/uploads/2022/01/logo3.png" class="elementor-animation-float attachment-large size-large" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-1d7fc61" data-id="1d7fc61" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-54eb9f4 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="54eb9f4" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="126" height="41" src="../wp-content/uploads/2022/01/logo4.png" class="elementor-animation-float attachment-large size-large" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-9ab6e9a" data-id="9ab6e9a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1b980ba elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="1b980ba" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="114" height="26" src="../wp-content/uploads/2022/01/logo5.png" class="elementor-animation-float attachment-large size-large" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-ce0a0a9" data-id="ce0a0a9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-572c2b0 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="572c2b0" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="106" height="50" src="../wp-content/uploads/2022/01/logo6.png" class="elementor-animation-float attachment-large size-large" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support">
            <div data-elementor-type="wp-post" data-elementor-id="2856" class="elementor elementor-2856" data-elementor-settings="[]">
                <div class="elementor-section-wrap">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-6c3c88ea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6c3c88ea"
                        data-element_type="section"
                        data-settings='{"background_background":"classic"}'
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-764069ec" data-id="764069ec" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-4e822588 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="4e822588"
                                        data-element_type="widget"
                                        data-widget_type="divider.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.5.4 - 23-01-2022 */
                                                .elementor-widget-divider {
                                                    --divider-border-style: none;
                                                    --divider-border-width: 1px;
                                                    --divider-color: #2c2c2c;
                                                    --divider-icon-size: 20px;
                                                    --divider-element-spacing: 10px;
                                                    --divider-pattern-height: 24px;
                                                    --divider-pattern-size: 20px;
                                                    --divider-pattern-url: none;
                                                    --divider-pattern-repeat: repeat-x;
                                                }
                                                .elementor-widget-divider .elementor-divider {
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex;
                                                }
                                                .elementor-widget-divider .elementor-divider__text {
                                                    font-size: 15px;
                                                    line-height: 1;
                                                    max-width: 95%;
                                                }
                                                .elementor-widget-divider .elementor-divider__element {
                                                    margin: 0 var(--divider-element-spacing);
                                                    -ms-flex-negative: 0;
                                                    flex-shrink: 0;
                                                }
                                                .elementor-widget-divider .elementor-icon {
                                                    font-size: var(--divider-icon-size);
                                                }
                                                .elementor-widget-divider .elementor-divider-separator {
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex;
                                                    margin: 0;
                                                    direction: ltr;
                                                }
                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                    -webkit-box-align: center;
                                                    -ms-flex-align: center;
                                                    align-items: center;
                                                }
                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                    display: block;
                                                    content: "";
                                                    border-bottom: 0;
                                                    -webkit-box-flex: 1;
                                                    -ms-flex-positive: 1;
                                                    flex-grow: 1;
                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
                                                }
                                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator > .elementor-divider__svg:first-of-type {
                                                    -webkit-box-flex: 0;
                                                    -ms-flex-positive: 0;
                                                    flex-grow: 0;
                                                    -ms-flex-negative: 100;
                                                    flex-shrink: 100;
                                                }
                                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                    content: none;
                                                }
                                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                    margin-left: 0;
                                                }
                                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator > .elementor-divider__svg:last-of-type {
                                                    -webkit-box-flex: 0;
                                                    -ms-flex-positive: 0;
                                                    flex-grow: 0;
                                                    -ms-flex-negative: 100;
                                                    flex-shrink: 100;
                                                }
                                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                    content: none;
                                                }
                                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                    margin-right: 0;
                                                }
                                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
                                                }
                                                .elementor-widget-divider--separator-type-pattern {
                                                    --divider-border-style: none;
                                                }
                                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                .elementor-widget-divider--separator-type-pattern:not([class*="elementor-widget-divider--view"]) .elementor-divider-separator {
                                                    width: 100%;
                                                    min-height: var(--divider-pattern-height);
                                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                    mask-size: var(--divider-pattern-size) 100%;
                                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                    mask-repeat: var(--divider-pattern-repeat);
                                                    background-color: var(--divider-color);
                                                    -webkit-mask-image: var(--divider-pattern-url);
                                                    mask-image: var(--divider-pattern-url);
                                                }
                                                .elementor-widget-divider--no-spacing {
                                                    --divider-pattern-size: auto;
                                                }
                                                .elementor-widget-divider--bg-round {
                                                    --divider-pattern-repeat: round;
                                                }
                                                .rtl .elementor-widget-divider .elementor-divider__text {
                                                    direction: rtl;
                                                }
                                            </style>
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator"> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-4579e5d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="4579e5d"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-11bd3441" data-id="11bd3441" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-798816d6 elementor-widget elementor-widget-image" data-id="798816d6" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img width="204" height="40" src="../wp-content/uploads/2022/01/footer-logo.png" class="attachment-full size-full" alt="" loading="lazy" />
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ef54f52 elementor-widget elementor-widget-text-editor" data-id="ef54f52" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod tempororem ipsum dolor sit am econsect ametconsectetetur adipiscing.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-50f24a2b elementor-widget elementor-widget-image" data-id="50f24a2b" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img width="194" height="28" src="../wp-content/uploads/2022/01/payment-img.png" class="attachment-full size-full" alt="" loading="lazy" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5901dd07 elementor-hidden-mobile" data-id="5901dd07" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1bd90596 elementor-widget elementor-widget-heading" data-id="1bd90596" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Quick Link</h2>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-430c481c elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="430c481c"
                                                        data-element_type="widget"
                                                        data-widget_type="icon-list.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Basic Life Coach</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Helath Coach</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Business Coach</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Basic Learn English</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Web Development</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Latest Courses</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-27952e64 elementor-hidden-mobile elementor-hidden-tablet"
                                                data-id="27952e64"
                                                data-element_type="column"
                                            >
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-50fa0895 elementor-widget elementor-widget-heading" data-id="50fa0895" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Support</h2>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-7942c8b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="7942c8b0"
                                                        data-element_type="widget"
                                                        data-widget_type="icon-list.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Mission & Vision</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Our Approach</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Exclusive Advisors</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Join a Career</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Terms of Use</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-caret-right"></i> </span>
                                                                    <span class="elementor-icon-list-text">Privacy Policy</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3c998ff5 elementor-hidden-mobile" data-id="3c998ff5" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4573061b elementor-widget elementor-widget-heading" data-id="4573061b" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Get in Touch</h2>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-1e946de6 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                        data-id="1e946de6"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <p>Email:</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-2ce97998 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                        data-id="2ce97998"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <p>info@wellbeing.com</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-60478d09 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                        data-id="60478d09"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <p>Phone:</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-28a6dc9 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                        data-id="28a6dc9"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <p>+1 234 567 89 0 0</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-41956295 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                        data-id="41956295"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <p>Fax:</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-2a27f9e7 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                        data-id="2a27f9e7"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <p>+1 ( 987 ) 654 321 9 9</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-feb90fb e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                        data-id="feb90fb"
                                                        data-element_type="widget"
                                                        data-widget_type="social-icons.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-repeater-item-c4b31cc" target="_blank">
                                                                        <span class="elementor-screen-only">Facebook-square</span>
                                                                        <i class="fab fa-facebook-square"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter-square elementor-repeater-item-f330480" target="_blank">
                                                                        <span class="elementor-screen-only">Twitter-square</span>
                                                                        <i class="fab fa-twitter-square"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-16e0304" target="_blank">
                                                                        <span class="elementor-screen-only">Linkedin</span>
                                                                        <i class="fab fa-linkedin"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest-square elementor-repeater-item-20b0748" target="_blank">
                                                                        <span class="elementor-screen-only">Pinterest-square</span>
                                                                        <i class="fab fa-pinterest-square"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-ad153dc elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="ad153dc"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-766370bb" data-id="766370bb" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2a0e42e1 elementor-widget elementor-widget-text-editor" data-id="2a0e42e1" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Copyright ©2022 Wellbeing. All Rights Reserved
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <link rel="stylesheet" id="e-animations-css" href="../wp-content/plugins/elementor/assets/lib/animations/animations.mine248.css?ver=3.5.4" type="text/css" media="all" />
        <script type="text/javascript" src="../wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/jquery.magnific-popup.minf488.js?ver=1.1.0" id="magnific-popup-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/juxtaposecfa9.js?ver=1.1.2" id="juxtapose-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/typed.min3c89.js?ver=2.0.11" id="typed-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/owl.carousel.min531b.js?ver=2.3.4" id="owl-carousel-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/jquery.countdown.min1f22.js?ver=1.6.2" id="countdown-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/jquery.matchHeight.min230a.js?ver=0.7.2" id="matchheight-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/isotope.min41fe.js?ver=3.0.1" id="isotope-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/packery-mode.pkgd.min7406.js?ver=2.0.1" id="packery-mode-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/theia-sticky-sidebar.minef6d.js?ver=1.8.2" id="theia-sticky-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/scriptsef6d.js?ver=1.8.2" id="naevents-scripts-js"></script>
        <script type="text/javascript" src="../wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0" id="hello-theme-frontend-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script91ee.js?ver=2.5.3" id="elementskit-framework-js-frontend-js"></script>
        <script type="text/javascript" id="elementskit-framework-js-frontend-js-after">
            /* <![CDATA[ */
            var elementskit = {
                resturl: "https://elementorpress.com/templatekit-pro/layout31/wp-json/elementskit/v1/",
            };

            /* ]]> */
        </script>
        <script type="text/javascript" src="../wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts91ee.js?ver=2.5.3" id="ekit-widget-scripts-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/webpack.runtime.mine248.js?ver=3.5.4" id="elementor-webpack-runtime-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend-modules.mine248.js?ver=3.5.4" id="elementor-frontend-modules-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script>
        <script type="text/javascript" src="../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
        <script type="text/javascript" id="elementor-frontend-js-before">
            /* <![CDATA[ */
            var elementorFrontendConfig = {
                environmentMode: { edit: false, wpPreview: false, isScriptDebug: false },
                i18n: {
                    shareOnFacebook: "Share on Facebook",
                    shareOnTwitter: "Share on Twitter",
                    pinIt: "Pin it",
                    download: "Download",
                    downloadImage: "Download image",
                    fullscreen: "Fullscreen",
                    zoom: "Zoom",
                    share: "Share",
                    playVideo: "Play Video",
                    previous: "Previous",
                    next: "Next",
                    close: "Close",
                },
                is_rtl: false,
                breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
                responsive: {
                    breakpoints: {
                        mobile: { label: "Mobile", value: 767, default_value: 767, direction: "max", is_enabled: true },
                        mobile_extra: { label: "Mobile Extra", value: 880, default_value: 880, direction: "max", is_enabled: false },
                        tablet: { label: "Tablet", value: 1024, default_value: 1024, direction: "max", is_enabled: true },
                        tablet_extra: { label: "Tablet Extra", value: 1200, default_value: 1200, direction: "max", is_enabled: false },
                        laptop: { label: "Laptop", value: 1366, default_value: 1366, direction: "max", is_enabled: false },
                        widescreen: { label: "Widescreen", value: 2400, default_value: 2400, direction: "min", is_enabled: false },
                    },
                },
                version: "3.5.4",
                is_static: false,
                experimentalFeatures: {
                    e_dom_optimization: true,
                    e_optimized_assets_loading: true,
                    e_optimized_css_loading: true,
                    a11y_improvements: true,
                    e_import_export: true,
                    additional_custom_breakpoints: true,
                    e_hidden_wordpress_widgets: true,
                    "hello-theme-header-footer": true,
                    "landing-pages": true,
                    "elements-color-picker": true,
                    "favorite-widgets": true,
                    "admin-top-bar": true,
                },
                urls: { assets: "https:\/\/elementorpress.com\/templatekit-pro\/layout31\/wp-content\/plugins\/elementor\/assets\/" },
                settings: { page: [], editorPreferences: [] },
                kit: {
                    active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                    global_image_lightbox: "yes",
                    lightbox_enable_counter: "yes",
                    lightbox_enable_fullscreen: "yes",
                    lightbox_enable_zoom: "yes",
                    lightbox_enable_share: "yes",
                    lightbox_title_src: "title",
                    lightbox_description_src: "description",
                    hello_header_logo_type: "title",
                    hello_header_menu_layout: "horizontal",
                    hello_footer_logo_type: "logo",
                },
                post: { id: 4320, title: "Team%20%E2%80%93%20wellbeing", excerpt: "", featuredImage: false },
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend.mine248.js?ver=3.5.4" id="elementor-frontend-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle91ee.js?ver=2.5.3" id="animate-circle-js"></script>
        <script type="text/javascript" id="elementskit-elementor-js-extra">
            /* <![CDATA[ */
            var ekit_config = { ajaxurl: "https:\/\/elementorpress.com\/templatekit-pro\/layout31\/wp-admin\/admin-ajax.php", nonce: "f9f46b947b" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="../wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor91ee.js?ver=2.5.3" id="elementskit-elementor-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/swiper/swiper.min91ee.js?ver=2.5.3" id="swiper-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/elementor/js/naevents-elementoref10.js?ver=6.5.3" id="naevents-elementor-js"></script>
        <script type="text/javascript" src="../wp-content/plugins/events-addon-for-elementor/assets/js/Chart.mind315.js?ver=2.6.0" id="naevents-chartjs-js"></script>
    </body>

    <!-- Mirrored from elementorpress.com/templatekit-pro/layout31/team/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 09:58:58 GMT -->
</html>
