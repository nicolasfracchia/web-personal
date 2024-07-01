<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NICOLAS FRACCHIA | Full-Stack Software Developer</title>
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
    
    @include('components.section-container', [
      'title' => 'About Me',
      'content' => view('components.about')->render()
    ])

    @include('components.section-container', [
      'title' => 'Work Experience',
      'content' => view('components.experience')->render()
    ])

    <section>
        <h3>@include('icons/caret-svg') Education</h3>
        <div>
            <h4>Course in React - Hooks, Router, Redux, NextJS</h4>
            <label>Udemy - Distance learning</label>
            <label>January 2022 - March 2022</label>
        </div>
    </section>







    <script src="{{asset('js/general.js')}}"></script>

</body>
</html>


