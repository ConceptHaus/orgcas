<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Proxima+Nova" rel="stylesheet" type="text/css">
    <!-- <script src="{{asset('js/myjs.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var allImagesOverflow=document.querySelectorAll(".img-parallax-overflow");
            new simpleParallax(allImagesOverflow,{delay:.8,transition:"cubic-bezier(0,0,0,0.5)",overflow:!0});

            var allImagesOverflowBackground=document.querySelectorAll(".img-parallax-overflow-background");
            new simpleParallax(allImagesOverflowBackground,{delay:.9,transition:"cubic-bezier(0,0,0,1)",overflow:!0,scale:.7});

            var allImagesInfoImages=document.querySelectorAll(".img-parallax-overflow-info");
            new simpleParallax(allImagesInfoImages,{delay:.9,transition:"cubic-bezier(0,0,0,1)",overflow:!0,scale:.8,orientation:"up"});

            var imageOverflow = document.querySelectorAll('.img-parallax-overflow-true');
            new simpleParallax(imageOverflow, {
                overflow: true
            });
            // Initiate the wowjs
            new WOW().init();
        })
    </script>

    @if (Request::is('quienes-somos') && session('success'))
        <script>
            $(document).ready(function(){
                const element = document.getElementById("contacto");
                element.scrollIntoView();
            })
        </script>   
    @endif
    <title>Orgcas</title>
</head>
<body class="">
    <!-- BOTTOM NAV -->
    @include('partials.nav')
    <div class="container-fluid p-0">
        @yield('content')
    </div>
    @if ( Route::current()->getName() != 'index' )
          @include('partials.footer')
    @endif
</body>
</html>