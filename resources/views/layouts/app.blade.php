<!DOCTYPE html>
<html lang="en">
<head>
    {{ wp_head() }}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! App\Assets::style('app') !!}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/media/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/media/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/media/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('dist/media/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('dist/media/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Genics - Securing global food production through smart pathogen detection and breeding selection.">

    <meta property="og:title" content="Genics">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:image" content="https://genics.staging.weareflip.com/dist/media/logos/genics-logo.png">

    <title>{{ (isset($title) ? $title . ' - ' : '') . 'Genics' }}</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TCWCMZ6');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
  @include('layouts.partials.header')
  <div class="site-content">
    @yield('content')
  </div>
  @include('layouts.partials.footer')

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCWCMZ6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  {!! App\Assets::script('polyfills') !!}
  {!! App\Assets::script('app') !!}
  @stack('scripts')
  {{ wp_footer() }}
</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-25971803-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'UA-25971803-13');
</script>
</html>
