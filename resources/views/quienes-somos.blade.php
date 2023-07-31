@extends('layouts.base')

@section('content')
<style type="text/css">

    .init{
        padding: 25px 0 120px;
    }

@media only screen and (max-width: 600px) {

    .qs-map {
      top: 15px;
    }

    .init{
        padding: 25px 0 110px;
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
    }

    .text-palpito{
        font-size: 15px;
        padding: 0 39px 30px;
    }

    .qs-img-delfines{
        width: 341px !important;
        height: 284px !important;
    }

    .qs-content-figures-1{
        display: none;
    }
}
@media only screen and (max-width: 900px) {
}

.qs-img-ww-2{
    display: none;
}
</style>
    <section class="init container-fluid text-center" style="background-attachment: fixed;">
        <div class="hero-content theme-scroll-reveal visible">
            <h1 class="mobile-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" style="color: #000;">Es importante saber que...</h1>
          </div>
          <div class="hero-section-background-container">
            <img src="{{ URL::to('/') }}/images/backgraound-map.png" alt="rocks_16" style="max-width: 100%;height: auto;position: absolute;left: 0px;">
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
                <div class="col-10 col-sm-10 col-lg-8 p-2">
                    <p class="text-center title-history p-2">
                        Nuestra Historia
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

    <section class="where-work init">
        <svg class="section-background-container-map-desc" width="635" height="1169" viewBox="0 0 635 1169" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M559.826 37.9729C410.225 -77.9566 17.7125 84.1107 -116.567 370.934C-277.714 713.131 -41.1282 1165.55 169.532 1168.05C380.191 1170.55 594.921 728.208 626.607 389.426C637.138 276.933 652.964 110.156 559.826 37.9729Z" fill="#F0F5F5"/>
        </svg>
        <div class="row lp-form-container" style="z-index:10 ;">
            <div class="col-12 col-sm-12 col-md-6 order-2 order-md-1 order-lg-1">
                <img src="{{ URL::to('/') }}/images/map-desc.png" class="img-parallax-overflow" alt="" style="max-height: 638px; max-width: 604px;">
                <p class="p-5 text-map-desc">
                    Queremos compartir con otras personas el amor que sentimos por el mar y así crear colectivamente un estilo de vida que nos dé herramientas para salvaguardar la biodiversidad tanto aquí como en otros lugares del planeta.
                </p>
                <img src="{{ URL::to('/') }}/images/labaja1.png" alt="" class="qs-img-ww-2 img-fluid img-parallax-overflow-true" style="max-width:493px; max-height:481px;">

            </div>
            <div class="col-12 col-sm-12 col-md-6 order-1 order-md-2 order-lg-2">
                <p class="title-where-work">
                    ¿Dónde trabajamos?
                </p>
                <p class="text-where-work">
                    Baja California Sur, México, es donde habitamos y sin duda nuestra gran fuente de inspiración. Este lugar tiene una importancia biológica y ecosistémica por la abundancia de vida que coexiste: Aquí llega desde el animal más grande del mundo como la ballena azul, hasta millones de organismos invisibles en el agua que alimentan a muchas otras especies. La magia de este paisaje es única y nos recuerda cada día que una sana coexistencia es posible.
                </p>

                <img src="{{ URL::to('/') }}/images/labaja1.png" alt="" class="qs-img-ww-1 img-fluid img-parallax-overflow-true" style="max-width:493px; max-height:481px;">
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-md-6 d-flex justify-content-center order-2 order-md-1" style="position: relative; z-index: 100;">
                <img src="{{ URL::to('/') }}/images/delfines1.png" class="qs-img-delfines img-fluid img-parallax-overflow-true" alt="" style="max-width: 495px;max-height: 719px;">
            </div>
            <div class="col col-12 col-md-6 order-1 order-md-2">
                <div class="text-see-delfin">
                    <p class="text-asks">
                       <span style="color:#003B4D;"> ¿Alguna vez has visto un delfín en su hábitat natural? </span>
                        <span style="color: #CA6D4F;"> ¿Has nadado con miles de peces? </span>
                        <span style="color:#007078;"> ¿Has visto a una ballena saltar desde una panga? </span>
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
            <img src="{{ URL::to('/') }}/images/ramitas.png" class="img-fluid img-parallax-overflow-true" alt="" style="max-width:203px; max-height:350px; position: absolute; right: 0px;">
        </div>
    </div>
    <section class="the-orgcas">
        <div class="container-lg">
            <p class="d-block title-orgcas">Las Orgcas...</p>
            <div id="carouselTheOrgcas" class="row justify-content-center pt-5">
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Porfiria Gómez</h6>
                                <span class="title-item-orgcas">Directora de Orgcas</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Porfiria.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Ciudad de México, creció rodeada de la riqueza natural de su país, ella dice que nació y creció en conservación, siendo este el legado de su familia.
                            Estudió Arte y Diseño en Londres, y una licenciatura en Fotografía.
                            Mientras pasaba su tiempo en campo como fotógrafa, se dio cuenta de la necesidad y la oportunidad de trabajar para la conservación con las comunidades a través de la comunicación. Junto con otras mujeres del equipo tuvo la visión de crear ORGCAS conectando todas las ideas para materializarlas.
                            Siempre le apasionó la fotografía de naturaleza, es soñadora y trabajadora.
                            A Porfi le encantan los ctenóforos.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6 wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Elena Herrán</h6>
                                <span class="title-item-orgcas">Coordinadora de proyectos</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Elena.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Guadalajara y ha estado obsesionada con el agua desde antes de hablar.
                            Estudió comunicación y se especializa en la construcción de equipos, procesos de flujo de trabajo y logística.
                            Después de hacer su primer curso de buceo en 2017, supo que tenía que ser parte de la preservación de todas las maravillas que encontró debajo de la superficie. Por eso hace unos años decidió mudarse a La Paz, BCS.
                            Es organizada, conciliadora, determinada y le encanta trabajar en equipo.
                            A Ele siente una conexión con los peces cuando van en cardumen.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Gabriela Gómez</h6>
                                <span class="title-item-orgcas">Fund Raising and Public Relation</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Gabriela.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Ciudad de México y creció con una relación cercana al mar y a la naturaleza en general, influenciada por su familia de exploradores ambientalistas.
                            Abogada de carrera. Desde los 18 años empezó a trabajar en temas ambientales en Beta Diversidad, organización dedicada a la conservación de ecosistemas marinos y terrestres. 
                            Ha publicado artículos en algunos medios, entre ellos la revista Equilibrio.
                            Todo su trabajo se enfoca en hacer esfuerzos y alianzas para la conservación de la naturaleza.
                            Le encanta escalar, subir volcanes y hacer caminatas. 
                            Es metódica y tiene el don de ser una excelente mediadora.
                            A Gaby le fascinan las ballenas azules, las jorobadas y los cachalotes.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div> 
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Sofía Martínez</h6>
                                <span class="title-item-orgcas">Strategy</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Sofia-Martinez.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Ciudad de México pero creció cerca del campo y en contacto constante con la naturaleza.
                            Estudió Relaciones Internacionales y después de trabajar en una organización sin fines de lucro dedicada a la conservación y desarrollo comunitario, entró a un máster en Gestión Ambiental y Auditoría de Empresa. También estudió un segundo máster en Gestión Sostenible.
                            Su interés en contribuir a la conservación la llevó a trabajar en el sector público en el área de finanzas de carbono. También participó en proyectos de desarrollo comunitario en varias regiones del país, para promover soluciones e impactos positivos a largo plazo.
                            Aunque viva en la ciudad, siempre busca la manera de ir al mar a snorkelear o bucear.
                            Es emprendedora y dirige su empresa.
                            A Sofi le encantan las tortugas.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Frida Lara</h6>
                                <span class="title-item-orgcas">Coordinadora de ciencia</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Frida-Lara.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Xalapa, Veracruz y desde niña se acuerda de estar en el mar.
                                Ya le ha alcanzado la vida para estudiar Biología marina, hacer un máster en Ecología Marina por el Instituto Queen Mary de Londres y un doctorado en Ciencias Marinas en el CICIMAR - La Paz.
                                Además es guía de buceo certificada y miembro de Migramar, una red de investigación especializada en especies migratorias del Pacífico oeste tropical.
                                En su trabajo siempre ha tenido un interés especial en temáticas relacionadas con migraciones y conectividad de tiburones y cómo esta información puede ser utilizada en políticas públicas.
                                Es muy apasionada, positiva y tiene la capacidad de participar en muchos proyectos al mismo tiempo.
                                A Frida le apasionan los tiburones desde que tiene memoria.
                                </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Mariana Vélez</h6>
                                <span class="title-item-orgcas">Coordinadora de turismo</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Mariana-Velez.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Colombia, donde cultivó su espíritu aventurero, viajando y descubriendo lugares en la naturaleza.
                            Estudió comunicación con estudios complementarios en antropología, trabajó en varias producciones de eventos culturales y proyectos sociales.
                            Hace 3 años llegó a México con el propósito de aprender acerca del mar y certificarse como guía.
                            Es curiosa, le motiva siempre estar aprendiendo y descubriendo.
                            A Mariana le emocionan los delfines comunes.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Martina Cocquio</h6>
                                <span class="title-item-orgcas">Coordinadora comunicación</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Martina-Cocquio.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Como, Italia, y viajar siempre fue su amor más grande.
                            Estudió Gestión Empresarial por la Universidad de Greenwich y se especializó en Gestión de Riesgos por la misma universidad. Ha vivido lugares remotos, explorado selvas y ha tenido todo tipo de aventuras. Hace cinco años recibió una oferta de trabajo en un centro de buceo en el Caribe mexicano y desde entonces, todas sus decisiones se han centrado en lograr vivir una vida sostenible junto al océano.
                            Es carismática y tiene un espíritu aventurero indiscutible. 
                            Marti siente una conexión especial con las ballenas jorobadas.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Sofía Salinas</h6>
                                <span class="title-item-orgcas">Coordinadora de educación</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Sofia-Salinas.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Tepatitlán de Morelos, Jalisco, cada paso de su vida lo ha dado para estar cerquita de la naturaleza.
                            Estudió biología en la Universidad Autónoma de Guadalajara, se especializó en gestión de ambientes costeros por el CICIMAR y actualmente está formándose en ciencias sociales.
                            Le hace muy feliz explorar bosques y selvas. Está convencida de que la transformación comienza entendiendo a las personas en su relación con el mar y la tierra.
                            Es sensible, consciente y entregada al aprendizaje.
                            Sofi ama a los tiburones martillo.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Lizandra Amezcua</h6>
                                <span class="title-item-orgcas">Gestora de proyectos de educación, fotógrafa y videógrafa.</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Lizandra-Amezcua.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Colima y ama el mar por encima de todo.
                                Es una apasionada de la Biología Marina, actualmente está formándose en esa carrera. Se dedica a la ciencia, a la fotografía terrestre y subacuática, al buceo, a la apnea y también al yoga como instructora.
                                Está totalmente convencida de que en el mundo todavía hay soluciones para preservar los ecosistemas marinos.
                                Su alegría y positivismo la definen.
                                Lissa siente una conexión única con las mantas.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Maru Brito</h6>
                                <span class="title-item-orgcas">Videografa y droner</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Maru-Brito.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                            <p class="h6">Nació en Ciudad de México, pero creció cerca al Océano Pacífico.
                            Es psicóloga e instructora de buceo. Pero en 2018 compró su primera cámara y desde entonces ejerce su pasión de ser videógrafa de vida marina. Ha colaborado con grandes compañías de documentales de naturaleza.
                            Es la mejor piloto de dron y de avionetas. Es soñadora, leal, y su sentir y filosofía está plasmado en su trabajo.
                            Maru dice que su animal espiritual es la ballena jorobada.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-item col-12 col-sm-12 col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card p-5 mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 name-item-orgcas">Gador</h6>
                                <span class="title-item-orgcas">Guía y líder de expediciones</span>
                            </div>
                            <img src="{{ URL::to('/') }}/images/orgcas/Gador.png" alt="" style="border-radius: 50%;max-width: 157px;">
                        </div>
                        <div class="mt-3 desc-item-orgcas">
                                <p class="h6">Nació en España, la primera vez que se puso un equipo de snorkel tenía 3 años y desde entonces no ha salido del agua.
                                Es oceanógrafa graduada en la Universidad de Las Palmas de Gran Canaria con una licenciatura en Ciencias del Mar. Se mudó a México para cursar un Máster en Manejo de Recursos marinos.
                                Viaja alrededor del mundo con muchísima gente que la acompañan en sus inmersiones, todo el tiempo trata de compartir su amor por el mar y concientizar que los recursos que nos ofrece son limitados.
                                Es aventurera y divertida.
                                A Gador le apasionan todos los tiburones.
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="mt-3" style="text-align: right;"> <span class="text1"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="qs-content-figures-1" style="position: relative; top: -650px;">
        <div class="col-md-12">
            <img src="{{ URL::to('/') }}/images/ramitas-l.png" alt="" class="img-fluid img-parallax-overflow" style="max-width:353px; max-height:608px; position: absolute; left: 0px;">
            <img src="{{ URL::to('/') }}/images/figure-r2.png" alt="" class="img-fluid img-parallax-overflow" style="max-width:203px; max-height:350px; position: absolute; right: 0px;">
        </div>
    </section>
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
                                  <option selected>¿Cómo Podemos Ayudarte ?</option>
                                  <option value="1">Quiero Información</option>
                                  <option value="2">Quiero ser colaborador</option>
                                  <option value="3">Quiero donar</option>
                                </select>
                                <div class="row g-3 mb-3">
                                  <div class="col-12 col-md-6">
                                    <input type="text" name="email" class="form-control" placeholder="Correo:" aria-label="Correo">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                  </div>
                                  <div class="col-12 col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Telefono:" aria-label="Telefono:">
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="5" placeholder="Escribe un Mensaje"></textarea>
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="check-tc">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Acepto los términos y condiciones
                                  </label>
                                  <span class="text-danger">{{ $errors->first('check-tc') }}</span>
                                </div>
                                <button type="submit" class="btn btn-lg contact-submit mt-4">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection