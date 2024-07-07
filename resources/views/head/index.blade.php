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

<link rel="stylesheet" href="{{asset('css/general.css')}}">