<style>
    .nav-link{
        color: #FFF;
        text-align: center;
        font-family: Proxima Nova;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal; 
    }

    .navbar .navbar-nav .nav-link.active{
        color: #fff !important;
        font-weight: 600;
    }

    .navbar .navbar-nav .nav-link:hover{
         color: #fff !important;
    }
</style>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Prixima</a> -->
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{ URL::to('/') }}/images/logo.png" alt="" style="width:44px; height:45px;">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() ==  'quienes-somos' ? 'active' : ''  }}" href="{{route('quienes-somos')}}"> @if(Route::current()->getName() == 'quienes-somos') <span class="dot">.</span> @endif Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() ==  'que-hacemos' ? 'active' : ''  }}" href="{{route('que-hacemos')}}">@if(Route::current()->getName() == 'que-hacemos') <span class="dot">.</span> @endif ¿Qué hacemos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() ==  'nuestro-aliados' ? 'active' : ''  }}" href="{{route('nuestro-aliados')}}">@if(Route::current()->getName() == 'nuestro-aliados') <span class="dot">.</span> @endif Nuestros aliados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() ==  'galeria' ? 'active' : ''  }}" href="{{route('galeria')}}">@if(Route::current()->getName() == 'galeria') <span class="dot">.</span> @endif Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() ==  'quienes-somos' ? 'active' : ''  }}" href="{{route('quienes-somos')}}#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>