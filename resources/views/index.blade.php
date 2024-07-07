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
    
    <main>
        <header>
            <figure>
                <img src="{{asset('profile.jpg')}}" alt="Nicolas Fracchia - profile photo" />
            </figure>
            <h1>NICOLAS FRACCHIA</h1>
            <h2>Full-Stack Software Developer</h2>
        </header>
        <address>
            <h3> @include('icons/caret-svg') Contact information</h3>
            <a href='https://maps.app.goo.gl/rHaMfQvnjFhhTt11A' target="_blank">
                @include('icons/location-svg') 
                Calgary, Alberta, canada.
            </a>
            <a href='tel:+15874372920'>
                @include('icons/call-svg') 
                +1 (587) 437 - 2920
            </a>
            <a href='mailto:dev.nfracchia@gmail.com' target="_blank">
                @include('icons/mail-svg') 
                dev.nfracchia@gmail.com
            </a>
            <a href='https://www.linkedin.com/in/nicolasfracchia/' target="_blank">
                @include('icons/linkedin-svg') 
                /nicolasfracchia
            </a>
        </address>
    </main>

    
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


