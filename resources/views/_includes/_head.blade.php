<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="">
<meta name="description" content="">

<title>@yield('title')</title>

<!-- Social: Facebook / Open Graph -->
<meta property="og:title" content="">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<!-- Social: Twitter -->
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image:src" content="">
<!-- Social: Google+ / Schema.org  -->
<meta itemprop="name" content="">
<meta itemprop="description" content="">
<meta itemprop="image" content="">

<!-- favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">
<meta name="msapplication-config" content="{{ asset('assets/favicon/browserconfig.xml') }}">
<meta name="msapplication-TileColor" content="#f16649">
<meta name="theme-color" content="#ffffff">
<!-- END: favicons -->

<!-- stylesheets -->
<link rel="stylesheet" href="{{ asset(mix('assets/css/app.css')) }}">
<!-- END: stylesheets -->

<!-- outdated browser message -->
<script>function $buo_f(){var o=document.createElement("script");o.src="//browser-update.org/update.min.js",document.body.appendChild(o)}var $buoop=window.browsersupport?window.browsersupport:{notify:{i:10,f:47,o:47,s:9,c:54},url:"http://outdatedbrowser.com/",reminder:0,insecure:!0,unsupported:!1,api:5};;try{document.addEventListener("DOMContentLoaded",$buo_f,!1)}catch(o){window.attachEvent("onload",$buo_f)}</script>
<!-- END: outdated browser message -->