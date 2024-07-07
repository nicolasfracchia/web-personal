<!DOCTYPE html>
<html lang="en">
<head>
    @include('head.index')
</head>
<body>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FRDQ3ST8BH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FRDQ3ST8BH');
    </script>
    
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


