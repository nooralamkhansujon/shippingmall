<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ecomerce shop,T-shirts,shoes,shirt,women,men,girs,boys">
    <meta name="author" content="Noor alam khan ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home | E-Shopper</title>
    <link href="{{asset('css/frontend_css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/frontend_css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/frontend_css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/frontend_css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/frontend_css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/frontend_css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/frontend_css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('css/frontend_css/easyzoom.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	@include('layouts.frontLayout.front_header')

    @yield('content')

	@include('layouts.frontLayout.front_footer')


    <script src="{{asset('js/frontend_js/axios.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/jquery.js')}}"></script>
    <script src="{{asset("js/frontend_js/easyzoom.js")}}"></script>
	<script src="{{asset('js/frontend_js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/frontend_js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/frontend_js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/frontend_js/main.js')}}"></script>
</body>
</html>
