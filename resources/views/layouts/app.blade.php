@inject('canonicalLink', 'App\Services\CanonicalLink')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="yandex-verification" content="a92e116c5401816c" />

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;800;900&display=swap" rel="stylesheet">
    @if($canonicalLink->isPaginate())
        <link rel="canonical" href="{{ $canonicalLink->getUrl() }}">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(strpos(url()->current(), 'press-room'))
        <meta property="og:url" content="{{ url()->full() }}"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="{{$model->name }}"/>
        <meta property="og:description" content="{{ $model->meta_description }}"/>
        <meta property="og:image" content="{{ $image_openGraph ?? '/images/logo.svg' }}"/>
    @endif
    <meta name="facebook-domain-verification" content="twuhozdk9k8yq4mjzec16iyowtx0r8" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-644837888"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MG69MZ2');</script>
    <!-- End Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag () {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'AW-644837888');
    </script>
    <script>
        gtag('event', 'page_view', {
            'send_to': 'AW-644837888',
            'user_id': 'replace with value',
            'value': 'replace with value',
            'items': [{
                'id': 'replace with value',
                'location_id': 'replace with value',
                'google_business_vertical': 'custom'
            }]
        });
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "{{ url('/') }}",
            "name": "admindatacenter",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Moscow, Russia",
                "postalCode": "127083",
                "streetAddress": "8 Marta Street, Building 14, Construction 1"
            },
            "email": "info@admindatacenter.com",
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+7 495 369-05-94",
                    "contactType": "customer service"
                },
                {
                    "@type": "ContactPoint",
                    "telephone": "+7 812 244-05-94",
                    "contactType": "customer service"
                },
                {
                    "@type": "ContactPoint",
                    "telephone": "+31 20 261-74-92",
                    "contactType": "customer service"
                }
            ]
        }


    </script>
    @yield('schema')
    @if (!empty($model))
        <title>{{ $model->meta_title ?: $model->name }}</title>
        @if ($model->meta_description)
            <meta content="{{ $model->meta_description }}" name="description">
        @endif
        @if ($model->meta_keywords)
            <meta content="{{ $model->meta_keywords }}" name="keywords">
        @endif
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="{{ mix('/css/lightbox.css') }}" rel="stylesheet" />
    @yield('styles')

    <link rel="preload" href="/fonts/lato/Lato-Light.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/fonts/lato/latoregular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/fonts/lato/Lato-Bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/fonts/lato/latolightitalic.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/fonts/lato/Lato-Italic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/fonts/lato/latobolditalic.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    {!! config('settings')->code_head !!}

    <link rel="alternate" hreflang="x-default" href="{{request()->secure() ? 'https' : 'http'}}://{{str_replace('//', '/', $_SERVER['ACTUAL_DOMAIN'] ?? "" .'/'. request()->path())}}" />
    <link rel="alternate" hreflang="ru" href="{{request()->secure() ? 'https' : 'http'}}://ru.{{str_replace('//', '/', $_SERVER['ACTUAL_DOMAIN'] ?? "" .'/'. request()->path())}}" />
    <link rel="alternate" hreflang="en-us" href="{{request()->secure() ? 'https' : 'http'}}://{{str_replace('//', '/', $_SERVER['ACTUAL_DOMAIN'] ?? "" .'/'. request()->path())}}" />
    @if (app()->isLocale('ru'))
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '386172115876777');
        fbq('track', 'PageView');
    </script>
    <noscript><img height=""1"" width=""1"" style=""display:none""
        src=""https://www.facebook.com/tr?id=386172115876777&ev=PageView&noscript=1""
        /></noscript>
    <!-- End Facebook Pixel Code -->
    @elseif(app()->isLocale('en'))
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2166463563378665');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2166463563378665&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    @endif
</head>
<body class="@yield('body-class')">
{{--ROISTAT CODE BEGIN--}}

@include('layouts.analytics')
    @if (env('APP_DEBUG') === false)
        @include('layouts.jivosite')
    @endif

<script>
    (function() {
        var pastCallback = typeof window.roistatVisitCallback === "function" ? window.roistatVisitCallback : null;
        window.roistatVisitCallback = function (visitId) {
            let timerId = setInterval(() => {
                if (typeof jivo_api != 'undefined' && jivo_api.hasOwnProperty('setUserToken') ) {
                    console.log('set user token: '+ visitId);
                    let r = jivo_api.setUserToken(visitId)
                    console.log( r);
                    clearTimeout(timerId);
                }
            }, 200)
        }
    })();
</script>
{{--ROISTAT CODE END --}}
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MG69MZ2"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="captcha-key-hidden" style="display: none;">@php {{ echo env('CAPTCHA_SITEKEY'); }} @endphp</div>
{!! config('settings')->code_body !!}

@include('blocks.header')

@include('blocks.content')

@include('blocks.footer')

<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/lightbox.js') }}"></script>

@yield('scripts')
<div id="mobile"></div>
</body>
</html>
