    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Prixima</a> -->
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{ URL::to('/') }}/images/logo.png" alt="" style="width:49px; height:50px;">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-4" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('quienes-somos')}}"> @if(Route::current()->getName() == 'quienes-somos') <span class="dot">.</span> @endif ¿Quiénes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('que-hacemos')}}">@if(Route::current()->getName() == 'que-hacemos') <span class="dot">.</span> @endif ¿Qué hacemos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('nuestro-aliados')}}">@if(Route::current()->getName() == 'nuestro-aliados') <span class="dot">.</span> @endif Nuestros Aliados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('galeria')}}">@if(Route::current()->getName() == 'galeria') <span class="dot">.</span> @endif Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('quienes-somos')}}#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>