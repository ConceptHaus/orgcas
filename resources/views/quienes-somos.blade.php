@extends('layouts.base')

@section('content')
<style type="text/css">

    .init{
        padding: 25px 0 120px;
    }

@media only screen and (max-width: 600px) {

    .img-ramitas{
        max-width: 138px !important;
        max-height: 216px !important;
        position: absolute !important;
        right: 0px !important;
        top: 44px !important;
    }

    .text-see-delfin{
        max-width: 100% !important;
        justify-content: normal !important;
        display: contents !important;
    }

    .text-where-work{
        padding: 0px;
    }

    .qs-map {
      top: 15px;
    }

    .init{
        padding: 25px 0 50px;
    }

    .title-history, .title-where-work, .title-orgcas{
        font-size: 32px; 
    }

    .title-orgcas{
        text-align: center;
    }

    .desc-history, .text-map-desc, .text-where-work{
        font-size: 15px; 
    }

    .qs-img-ww-1{
        display: none !important;
    }

    .qs-img-ww-2{
        display: block !important; 
        margin: auto;
    }

    .qs-img-ww-1, .qs-img-ww-2{
        width: 346px !important;
        height: 284px !important; 
    }

    .text-asks{
        font-size: 24px; 
        padding: 35px 34px;
        width: 100% !important;
    }

    .text-palpito{
        font-size: 15px;
        padding: 0 39px 30px;
    }

    .qs-img-delfines{
        width: 341px !important;
        height: 348px !important;
    }

    .qs-content-figures-1{
        display: none;
    }

    .qs-text-title{
        font-size: 32px !important; 
    }

    .desc-item-orgcas{
        text-align: center;
    }

    .form-check{
        text-align: center;
    }

    .form-check .form-check-input {
        float: initial !important;
    }

    .contact-submit-center{
        text-align: center;
    }
}
@media only screen and (max-width: 950px) {
    .qs-text-title{
        font-size: 32px !important; 
    }

    .text-where-work{
        padding: 0px !important;
    }

    .qs-img-ww-1{
        display: none !important;
    }

    .qs-content-figures-1{
        display: none;
    }
}

.qs-img-ww-2{
    display: none;
}
.qs-text-title{
    color: var(--orgcas-deep-blue, #000E27);
    text-align: center;
    font-family: "Bw Aleta No 20";
    font-size: 60px;
    font-style: normal;
    font-weight: 700;
    letter-spacing: -0.6px; 
}
</style>
    <section class="init container-fluid text-center" style="background-attachment: fixed;">
        <div class="hero-content theme-scroll-reveal visible">
            <h1 class="qs-text-title mobile-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" style="color: #000;">Es importante saber que...</h1>
          </div>
          <div class="hero-section-background-container">
            <img src="{{ URL::to('/') }}/images/backgraound-map.png" alt="rocks_16" style="max-width: 100%;height: auto;position: absolute;left: 0px;max-height: 980px;">
          </div>
          <div class="row text-center">
            <div class="col p-0">
                <img src="{{ URL::to('/') }}/images/map.png" alt="orgcas" class="qs-map section-img hero-section-jobbies-3 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            </div>
          </div>
          <div class="row">
            <div class="col p-0">
                <img src="{{ URL::to('/') }}/images/logo-map.png" alt="orgcas" class="section-img hero-section-jobbies-4 img-parallax-overflow img-fluid" style="max-width:117px;">
            </div>
          </div>
          <div class="hero-section-divider-angle-2"></div>
    </section>
    <!-- ABOUT -->
    <section id="about" class="img-parallax-overflow-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 col-sm-1 col-lg-2 p-0">
                    <img src="{{ URL::to('/') }}/images/figure-l.png" class="img-parallax-overflow-info" alt="" style="max-height: 277px;max-width: 150px;">
                </div>
                <div class="col-10 col-sm-10 col-lg-8 p-2" style="position: relative; z-index: 100;">
                    <p class="text-center title-history p-2">
                        Nuestra historia
                    </p>
                    <p class="justify-content-center desc-history">Somos un grupo de mujeres de diferentes partes del mundo y con distintas profesiones: fotógrafas, biólogas, comunicadoras, abogadas, guías y más. Un día, compartiendo nuestras anécdotas marinas, nos dimos cuenta de que en medio de tanta diversidad teníamos una pasión en común: trabajar por la conservación y protección de los mares y sus costas.</p>
                    <p class="justify-content-center desc-history pt-4">
                        Decidimos unirnos y crear ORGCAS para construir perspectivas de cuidado que nos den océanos más saludables y nos ayuden a restaurar nuestra relación con la naturaleza.
                    </p>
                </div>
                <div class="col-1 col-sm-1 col-lg-2 p-0">
                    <!-- <img src="{{ URL::to('/') }}/images/figure-r.png" class="img-parallax-overflow-true align-top img-fluid" alt="" style="max-height: 277px;max-width: 150px;"> -->
                    <svg class="scene" width="181" height="291" viewBox="0 0 181 291" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.419227 171.987C2.97897 239.003 125.826 311.33 225.485 284.709C344.582 253.209 407.559 87.4931 363.916 28.8107C320.273 -29.8718 164.971 9.07611 73.9277 75.5402C43.6947 97.6072 -1.17215 130.264 0.419227 171.987Z" fill="#A58EA2"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="todas p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <img src="{{ URL::to('/') }}/images/todas.png" alt="Orgcas Todas" class="img-fluid img-parallax-overflow">
                </div>
            </div>
        </div>
    </section>

    <section class="where-work init mt-5">
        <svg class="section-background-container-map-desc" width="635" height="1169" viewBox="0 0 635 1169" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M559.826 37.9729C410.225 -77.9566 17.7125 84.1107 -116.567 370.934C-277.714 713.131 -41.1282 1165.55 169.532 1168.05C380.191 1170.55 594.921 728.208 626.607 389.426C637.138 276.933 652.964 110.156 559.826 37.9729Z" fill="#F0F5F5"/>
        </svg>
        <div class="row lp-form-container" style="z-index:10 ;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2 order-md-1 order-lg-1">
                <img src="{{ URL::to('/') }}/images/map-desc.png" class="img-parallax-overflow" alt="" style="max-height: 638px; max-width: 604px;">
                <p class="pt-5 text-map-desc mx-4">
                    Queremos compartir con otras personas el amor que sentimos por el mar y así crear colectivamente un estilo de vida que nos dé herramientas para salvaguardar la biodiversidad tanto aquí como en otros lugares del planeta.
                </p>
                <img src="{{ URL::to('/') }}/images/labaja1.png" alt="" class="qs-img-ww-2 img-fluid img-parallax-overflow-true" style="max-width:493px; max-height:481px;">

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1 order-md-2 order-lg-2">
                <p class="title-where-work mx-4">
                    ¿Dónde trabajamos?
                </p>
                <p class="text-where-work mx-4">
                    Baja California Sur, México, es donde habitamos y sin duda nuestra gran fuente de inspiración. Este lugar tiene una importancia biológica y ecosistémica por la abundancia de vida que coexiste: Aquí llega desde el animal más grande del mundo como la ballena azul, hasta millones de organismos invisibles en el agua que alimentan a muchas otras especies. La magia de este paisaje es única y nos recuerda cada día que una sana coexistencia es posible.
                </p>

                <img src="{{ URL::to('/') }}/images/labaja1.png" alt="" class="qs-img-ww-1 img-fluid img-parallax-overflow-true" style="max-width:493px; max-height:481px;">
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-md-5 col-lg-5 d-flex justify-content-center order-2 order-md-1" style="position: relative; z-index: 100;">
                <img src="{{ URL::to('/') }}/images/delfines1.png" class="qs-img-delfines img-fluid img-parallax-overflow-true" alt="" style="max-width: 495px;max-height: 719px;">
            </div>
            <div class="col col-12 col-md-7 col-lg-7 order-1 order-md-2">
                <div class="text-see-delfin mt-5" style="max-width: 686px;">
                    <p class="text-asks">
                       <span style="color:#003B4D;display: block;"> ¿Alguna vez has visto un delfín en su hábitat natural? </span>
                        <span style="color: #CA6D4F;display: block;"> ¿Has nadado con miles de peces? </span>
                        <span style="color:#007078;display: block;"> ¿Has visto a una ballena saltar desde una panga? </span>
                    </p>
                    <p class="text-palpito">
                        Cuando esto sucede hay un pálpito que se despierta por dentro: <span style="color:#CA6D4F;">el latido de la vida recordándonos su fuerza</span>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="" style="position: relative; top: -160px;">
        <div class="">
            <img src="{{ URL::to('/') }}/images/ramitas.png" class="img-fluid img-parallax-overflow-true img-ramitas" alt="" style="max-width:203px; max-height:350px; position: absolute; right: 0px;">
        </div>
    </div>

        @if($agent->isMobile())
          @include('partials.view-carousel-orgcas')
        @else
          @include('partials.view-list-orgcas')  
        @endif

    <section id="contacto" style="background: var(--ultra-light-blue, #F0F5F5); ">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ URL::to('/') }}/images/img_contact.png" alt="" class="img-fluid contact-pez img-parallax-overflow-true">
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="tab-content mt-5" id="nav-tabContent">
                        <p class="contanct-title-form mb-5">Contacto</p>
                        <div class="tab-pane fade active show" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                            @if(session('success'))
                                <div class="alert alert-success">
                                  {{ session('success') }}
                                </div>
                            @endif
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="{{route('contactoPost')}}#contacto" method="post" role="form">
                            	@csrf
                                <div class="mb-3 mt-3">
                                  <input type="name" name="name" class="form-control" id="inputName" placeholder="Nombre completo:">
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <select class="form-select mb-3" name="help" aria-label="Default select example">
                                  <option selected>¿Cómo podemos ayudar?</option>
                                  <option value="Quiero información">Quiero información</option>
                                  <option value="Quiero ser colaborador">Quiero ser colaborador</option>
                                  <option value="Quiero donar">Quiero donar</option>
                                </select>
                                <div class="row g-3 mb-3">
                                  <div class="col-12 col-md-6">
                                    <input type="text" name="email" class="form-control" placeholder="Correo:" aria-label="Correo">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                  </div>
                                  <div class="col-12 col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Teléfono:" aria-label="Teléfono:">
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="5" placeholder="Escribe un mensaje:"></textarea>
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="check-tc">
                                  <label class="form-check-label term-conditions" for="flexCheckDefault">
                                    Acepto los términos y condiciones
                                  </label>
                                  <span class="text-danger">{{ $errors->first('check-tc') }}</span>
                                </div>
                                <div class="row contact-submit-center">
                                    <div class="col">
                                        <button type="submit" class="btn btn-lg contact-submit mt-4">Enviar</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection