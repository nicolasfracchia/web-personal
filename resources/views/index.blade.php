<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NICOLAS FRACCHIA | Full-Stack Software Developer | Calgary</title>
    <meta name="description" content="Full-Stack Developer with 10+ years of experience | Custom E-commerce & Reports Developer | JavaScript, PHP, MySQL, Back-End Optimization.">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
    
    @include('components.main-header')
    
    @if (isset($about) && !empty($about))
        @include('components.section-container', ['title' => 'About Me','content' => $about])
    @endif
    
    @if (isset($experience) && !empty($experience))
        @include('components.section-container', ['title' => 'Experience','content' => $experience])
    @endif
    
    @if (isset($education) && !empty($education))
        @include('components.section-container', ['title' => 'Education','content' => $education])
    @endif
    
    @if (isset($skills) && !empty($skills))
        @include('components.section-container', ['title' => 'Skills','content' => $skills])
    @endif



    <script src="{{asset('js/general.js')}}"></script>

</body>
</html>


