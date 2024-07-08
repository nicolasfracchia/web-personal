<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>@include('head.title')</title>
<meta name="description" content="@include('head.description')">
<link rel="shortcut icon" href="{{asset('favicon.ico')}}" />

<meta property="og:title" content="@include('head.title')">
<meta property="og:description" content="@include('head.description')">
<meta property="og:url" content="{{ Request::url() }}"> 
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('profile.jpg')}}">

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="@include('head.title')">
<meta name="twitter:description" content="@include('head.description')">
<meta name="twitter:site" content="{{ Request::url() }}">
<meta name="twitter:image" content="{{asset('profile.jpg')}}">

@include('head.schema-markup')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/general.css')}}">