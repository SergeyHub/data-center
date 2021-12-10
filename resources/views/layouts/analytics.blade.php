@if (app()->getLocale() === 'ru')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130766361-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag () {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-130766361-1');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(46709433, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });

        window.yandexAction = function (action, params) {
          return ym(46709433, action,  params);
        }

    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/46709433" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
@endif

@if (app()->getLocale() === 'en')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130697245-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag () {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-130697245-1');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(46709643, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });

        window.yandexAction = function (action, params) {
          return ym(46709643, action,  params);
        }
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/46709643" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
@endif
