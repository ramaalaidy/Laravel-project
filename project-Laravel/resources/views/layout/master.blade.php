<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="About Us, ​The World Is a Big Place. We&amp;apos;ll Help You Explore It., ​Outdoor Recreation, Get in touch">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/About.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 7.5.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "{{ asset('images/default-logo.png') }}"
    }</script>
    <meta name="theme-color" content="#f58d54">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <!-- تضمين الهيدر -->
    {{-- @include('partials.header') --}}

    <!-- المحتوى الرئيسي -->
    @yield('content')

    <!-- تضمين الفوتر -->
    {{-- @include('partials.footer') --}}

</body>
</html>