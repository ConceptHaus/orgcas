@extends('layouts.base')

@section('content')
<style type="text/css">

#qb-nav .nav-item{
	margin: 0 !important;
}

@media only screen and (max-width: 600px) {
	#qb-nav{
		padding: 0px !important;
		margin: 0 !important;
	}

  .nav-que-buscamos .qb-title-nav{
  	font-size: 24px !important;
  }

  .container-text-shark, .container-text-cerralvo{
  	padding: 0 !important;
  }

  .content-img-1 img {
  	max-width: 50px !important;
		top: -95px !important;
  }

  .container-text-shark p, .container-text-cerralvo p {
  	margin: 30px;
  }

}

@media only screen and (max-width: 950px) {
	.img-bote1{
		max-width: 310px !important;
	}
	.modal-dialog{
		max-width: 100%;
	}

}
</style>
    <section id="qh-container-map" class="init container-fluid text-center" style="padding: 0 !important;">
      <div class="hero-section-background-container">
        <img src="{{ URL::to('/') }}/images/backgraound-map.png" alt="rocks_16" style="max-width: 100%;height: auto;position: absolute;left: 0px;">
      </div>
      <div class="row text-center">
        <div class="col p-0">
            <img src="{{ URL::to('/') }}/images/que-hacemos-map.png" alt="orgcas" class="img-map section-img hero-section-jobbies-3 img-parallax-overflow wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp; top: -60px;">
        </div>
      </div>
      <div class="hero-section-divider-angle-2"></div>
    </section>
	<section id="container-our-focus">
		<div class="position-relative container-figure-lr" style="top: -220px;">
			<div class="position-absolute top-0 start-0 figure-our-focus-l">
				<svg width="113" height="291" viewBox="0 0 113 291" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-fluid">
				  <path d="M-264.581 171.987C-262.021 239.003 -139.174 311.33 -39.5151 284.709C79.5825 253.209 142.559 87.4931 98.9164 28.8107C55.2734 -29.8718 -100.029 9.07611 -191.072 75.5402C-221.305 97.6072 -266.172 130.264 -264.581 171.987Z" fill="#BECCD5"/>
				</svg>
			</div>
			<div class="position-absolute top-0 end-0 figure-our-focus-r">
				<svg width="113" height="222" viewBox="0 0 113 222" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-fluid">
				  <path d="M288.971 92.6374C287.615 41.5026 194.564 -14.7538 118.318 4.66389C27.2026 27.6297 -22.3031 153.46 10.4613 198.605C43.2257 243.75 162.02 215.425 232.049 165.543C255.304 148.982 289.814 124.474 288.971 92.6374Z" fill="#562745"/>
				</svg>
			</div>
		</div>
		<div class="position-relative d-none d-sm-none d-md-block container-figure-bg" style="top: -220px;">
			<div class="position-absolute top-0 start-0">
				<svg width="1193" height="1014" viewBox="0 0 1193 1014" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-fluid">
				  <path d="M1191.09 344.439C1167.8 120.41 705.596 -83.9715 348.433 36.3842C-78.4606 179.163 -273.099 754.734 -102.015 938.011C69.0696 1121.29 626.18 942.243 943.673 690.904C1049.11 607.455 1205.59 483.92 1191.09 344.439Z" fill="#F0F5F5"/>
				</svg>
			</div>
		</div>

		<div class="container container-text-our-focus" style="transform: translate3d(0px, 0px, 0px);">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6">
					<p class="title-our-focus mb-3">
						Nuestro enfoque
					</p>
					<p class="text-our-focus">
						Dicen que el mar lo cura todo y seguramente cualquier persona que haya estado en sus aguas lo puede garantizar.<span class="text-our-focus-color"> Pero un océano sobreexplotado afecta el bienestar de todo ser vivo en la Tierra.</span> No es un secreto que hoy los océanos están en riesgo y con él nuestra existencia también.
					</p>
					<p class="text-our-focus-2">
						En <span class="text-our-focus-bold">ORGCAS</span> queremos mirar de frente las amenazas que afectan la salud de los mares y reconocernos en esas heridas para así crear programas de cambio que den solución a problemáticas ambientales.
					</p>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 text-center">
					<img src="{{ URL::to('/') }}/images/ne_bote1.png" alt="Nuestro Enfoque" class="img-bote1 img-parallax-overflow img-fluid" style="max-width: 496px; max-height: 709px; ">
				</div>
			</div>
		</div>
	</section>


    <section id="what-looking" class="container-lg">
    	<div class="row pb-5" style="transform: translate3d(0px, 0px, 0px);">
    		<div class="col-md-12 text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
    			<h1 class="qb-title">¿Qué buscamos?</h1>
    		</div>
    	</div>
    	<div class="row container-cards-wl">
    		<div class="col-12 col-sm-12 col-md-4 wow fadeInUp " data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;height: auto;">
				<div class="card text-center p-4 qb-card h-100 mx-auto">
				  <img src="{{ URL::to('/') }}/images/qb-img1-desc.png" class="card-img-top qb-card-img mx-auto" alt="Fomentamos la participación social">
				  <div class="card-body">
				    <p class="card-text qb-card-dec"> <span style="color: var(--orgcas-terracota, #CA6D4F); ">Fomentamos la participación social</span> trabajando de la mano con comunidades locales y estableciendo alianzas con instituciones, universidades, colectivos y otras organizaciones.</p>
				  </div>
				</div>
    		</div>
    		<div class="col-12 col-sm-12 col-md-4 wow fadeInUp " data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;height: auto;">
				<div class="card text-center p-4 qb-card h-100 mx-auto">
				  <img src="{{ URL::to('/') }}/images/qb-img2-desc.png" class="card-img-top qb-card-img mx-auto" alt="...">
				  <div class="card-body">
				    <p class="card-text qb-card-dec"><span style="color: var(--orgcas-terracota, #CA6D4F); ">Apoyamos iniciativas y políticas de conservación </span> para preservar costas y océanos en lugares de importancia biológica.</p>
				    
				  </div>
				</div>
    		</div>
    		<div class="col-12 col-sm-12 col-md-4 wow fadeInUp " data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;height: auto;">
				<div class="card text-center p-4 qb-card h-100 mx-auto">
				  <img src="{{ URL::to('/') }}/images/qb-img3-desc.png" class="card-img-top qb-card-img mx-auto" alt="...">
				  <div class="card-body">
				    <p class="card-text qb-card-dec"><span style="color: var(--orgcas-terracota, #CA6D4F); ">Desarrollamos estrategias de preservación</span> para mitigar aquello que pone en riesgo la salud de la vida en el planeta.</p>
				  </div>
				</div>
    		</div>
    	</div>

			<div id="carouselExampleIndicators" class="carousel slide container-carousel-wl" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner" style="height: auto;">
			    <div class="carousel-item h-100 active">
					<div class="card text-center p-4 qb-card h-100 mx-auto">
						<img src="{{ URL::to('/') }}/images/qb-img1-desc.png" class="card-img-top qb-card-img mx-auto" alt="Fomentamos la participación social">
						<div class="card-body">
							<p class="card-text qb-card-dec"> <span style="color: var(--orgcas-terracota, #CA6D4F); ">Fomentamos la participación social</span> trabajando de la mano con comunidades locales y estableciendo alianzas con instituciones, universidades, colectivos y otras organizaciones.</p>
						</div>
					</div>
			    </div>
			    <div class="carousel-item h-100">
					<div class="card text-center p-4 qb-card h-100 mx-auto">
						<img src="{{ URL::to('/') }}/images/qb-img2-desc.png" class="card-img-top qb-card-img mx-auto" alt="...">
						<div class="card-body">
							<p class="card-text qb-card-dec"><span style="color: var(--orgcas-terracota, #CA6D4F); ">Apoyamos iniciativas y políticas de conservación </span> para preservar costas y océanos en lugares de importancia biológica.</p>
						</div>
					</div>
			    </div>
			    <div class="carousel-item h-100">
					<div class="card text-center p-4 qb-card h-100 mx-auto">
						<img src="{{ URL::to('/') }}/images/qb-img3-desc.png" class="card-img-top qb-card-img mx-auto" alt="...">
						<div class="card-body">
							<p class="card-text qb-card-dec"><span style="color: var(--orgcas-terracota, #CA6D4F); ">Desarrollamos estrategias de preservación</span> para mitigar aquello que pone en riesgo la salud de la vida en el planeta.</p>
						</div>
					</div>
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>
    </section>

    <section id="qh-our-components">
    	<div class="position-relative">
    		<img src="{{ URL::to('/') }}/images/qh_figure_l.png" style="max-width: 190px; max-height:272px; left: 0;" class="position-absolute qh_figure_l">
    		<img src="{{ URL::to('/') }}/images/qh_figure_r.png" style="max-width: 116px; max-height:211px; right: 0;" class="position-absolute qh_figure_r">
    	</div>
    	<div class="container-lg" style="transform: translate3d(0px, 0px, 0px);">
    		<div class="row justify-content-center text-center">
    				<p class="qh-components-title" style="max-width:729px;">
    					Nuestros componentes
    				</p>
    				<p class="qh-components-desc" style="max-width:841px;">
    					Estos componentes son la base que dibujan las líneas de acción de nuestro trabajo. De ahí surgen nuevas ideas que nos apasionan. Son pilares donde encontramos estructura para cumplir los objetivos que nos vamos trazando en el camino. Cada uno tiene su esencia y todos están interconectados.
    				</p>
    		</div>
    	</div>

    </section>

    <section class="container-lg nav-que-buscamos">
    	<div class="row">
    		<div class="col-md-12">
				<div class="m-0 m-md-4">
				    <div class="nav justify-content-between row mb-5" id="qb-nav">
				        <div class="col-6 col-md-6 col-lg-3 text-center nav-item">
				            <a href="#ciencia" class="nav-link qb-link-nav active" data-bs-toggle="tab">
				            	<img src="{{ URL::to('/') }}/images/ciencia.png" class="img-parallax-overflow qb-icon-nav">
				            	<br>
				            	<span class="qb-title-nav">Ciencia</span>
				            </a>
				        </div>
				        <div class="col-6 col-md-6 col-lg-3 text-center nav-item">
				            <a href="#educacion" class="nav-link qb-link-nav" data-bs-toggle="tab">
				            	<img src="{{ URL::to('/') }}/images/educacion.png" class="img-parallax-overflow qb-icon-nav">
				            	<br>
				            	<span class="qb-title-nav">Educación</span>
				            </a>
				        </div>
				        <div class="col-6 col-md-6 col-lg-3 text-center nav-item">
				            <a href="#turismo" class="nav-link qb-link-nav" data-bs-toggle="tab">
				            	<img src="{{ URL::to('/') }}/images/turismo.png" class="img-parallax-overflow qb-icon-nav">
				            	<br>
				            	<span class="qb-title-nav">Turismo</span>
				            </a>
				        </div>
				        <div class="col-6 col-md-6 col-lg-3 text-center nav-item">
				            <a href="#comunicacion" class="nav-link qb-link-nav justify-content-center" data-bs-toggle="tab">
				            	<img src="{{ URL::to('/') }}/images/comunicacion.png" class="img-parallax-overflow qb-icon-nav">
				            	<br>
				            	<span class="qb-title-nav">Comunicación</span>
				            </a>
				        </div>
				    </div>
				    <div class="tab-content">
				        <div class="tab-pane fade show active" id="ciencia">
				        	<div class="row">
				        		<div class="col">
				        			<div class="content-science p-4 p-sm-5">
				        				<div class="row">
				        					<div class="col-12 col-sm-12 col-md-6">
				        						<h3 class="title-science">Ciencia</h3>
				        						<p class="text-science">
				        							La ciencia nos ayuda a través de datos a conocer mejor el mar, sus necesidades y amenazas. Ayuda a crear evidencia a través de la investigación para proveer soluciones para la conservación de sus ecosistemas.<br>
				        							<span class="subtext-science">Buscamos que la ciencia sea de todos y para todos.</span>
				        						</p>
				        						<h3 class="title-science-2">
				        							Objetivos
				        						</h3>
				        						<p class="text-science-2">
				        							<ul class="text-science-2">
				        								<li>Elaborar programas de monitoreo que contengan indicadores ambientales y biológicos que permitan evaluar las acciones de manejo.</li>
				        								<li>Fomentar la elaboración de programas de investigación científica a partir de la colaboración con instituciones académicas, centros de investigación y ciudadanos.</li>
				        								<li>Promover la ciencia ciudadana.</li>
				        							</ul>
				        						</p>
				        					</div>
				        					<div class="col-12 col-sm-12 col-md-6">
				        						<div id="carouselScience" class="carousel slide" data-bs-ride="carousel">
													  <div class="carousel-indicators">
													    <button type="button" data-bs-target="#carouselScience" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
													    <button type="button" data-bs-target="#carouselScience" data-bs-slide-to="1" aria-label="Slide 2"></button>
													    <button type="button" data-bs-target="#carouselScience" data-bs-slide-to="2" aria-label="Slide 3"></button>
													    <button type="button" data-bs-target="#carouselScience" data-bs-slide-to="3" aria-label="Slide 4"></button>
													    <button type="button" data-bs-target="#carouselScience" data-bs-slide-to="4" aria-label="Slide 5"></button>
													    <button type="button" data-bs-target="#carouselScience" data-bs-slide-to="5" aria-label="Slide 6"></button>
													    <button type="button" data-bs-target="#carouselScience" data-bs-slide-to="6" aria-label="Slide 7"></button>
													  </div>
													  <div class="carousel-inner">
													    <div class="carousel-item active">
													      <img src="{{ URL::to('/') }}/images/slide-science-1.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-science-2.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-science-3.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-science-4.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-science-5.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-science-6.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-science-7.png" class="d-block w-100" alt="...">
													    </div>
													  </div>
													  <button class="carousel-control-prev" type="button" data-bs-target="#carouselScience" data-bs-slide="prev">
													    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
													    <span class="visually-hidden">Previous</span>
													  </button>
													  <button class="carousel-control-next" type="button" data-bs-target="#carouselScience" data-bs-slide="next">
													    <span class="carousel-control-next-icon" aria-hidden="true"></span>
													    <span class="visually-hidden">Next</span>
													  </button>
													</div>
				        					</div>
				        				</div>
				        			</div>
				        		</div>
				        	</div>
				        </div>
				        <div class="tab-pane fade" id="educacion">
				        	<div class="row">
				        		<div class="col">
				        			<div class="content-education p-5">
				        				<div class="row">
				        					<div class="col-12 col-sm-12 col-md-6">
				        						<h3 class="title-education">Educación</h3>
				        						<p class="text-education">
				        							Reconocemos el poder del intercambio del conocimiento, y a la educación ambiental como herramientas para la recuperación de saberes y un proceso continuo de aprendizaje para transformar los modos en los que habitamos el mundo. <br>
				        							<span class="subtext-education">El mar necesita gente capacitada para combatir sus amenazas de la manera más eficaz.</span>
				        						</p>
				        						<h3 class="title-education-2">
				        							Objetivos
				        						</h3>
				        						<p class="text-education-2">
				        							<ul class="text-education-2">
				        								<li>Establecer una relación, entre la sensibilización por el ambiente y la adquisición de conocimientos a través del método activo, dialogal y participante.</li>
				        								<li>Promover la valoración de la organización social en pro del ambiente, el rescate de valores socio ambientales y la autoestima social.</li>
				        								<li>Construir a través de la experiencia y otros saberes la complejidad de los problemas ambientales, desarrollando el sentido crítico y las aptitudes de las personas para resolver estos problemas.</li>
				        							</ul>
				        						</p>
				        					</div>
				        					<div class="col-12 col-sm-12 col-md-6">
				        						<div id="carouselEducation" class="carousel slide" data-bs-ride="carousel">
													  <div class="carousel-indicators">
													    <button type="button" data-bs-target="#carouselEducation" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
													    <button type="button" data-bs-target="#carouselEducation" data-bs-slide-to="1" aria-label="Slide 2"></button>
													    <button type="button" data-bs-target="#carouselEducation" data-bs-slide-to="2" aria-label="Slide 3"></button>
													    <button type="button" data-bs-target="#carouselEducation" data-bs-slide-to="3" aria-label="Slide 4"></button>
													    <button type="button" data-bs-target="#carouselEducation" data-bs-slide-to="4" aria-label="Slide 5"></button>
													    <button type="button" data-bs-target="#carouselEducation" data-bs-slide-to="5" aria-label="Slide 6"></button>
													    <button type="button" data-bs-target="#carouselEducation" data-bs-slide-to="6" aria-label="Slide 7"></button>
													  </div>
													  <div class="carousel-inner">
													    <div class="carousel-item active">
													      <img src="{{ URL::to('/') }}/images/slide-education-1.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-education-2.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-education-3.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-education-4.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-education-5.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-education-6.png" class="d-block w-100" alt="...">
													    </div>
													    <div class="carousel-item">
													      <img src="{{ URL::to('/') }}/images/slide-education-7.png" class="d-block w-100" alt="...">
													    </div>
													  </div>
													  <button class="carousel-control-prev" type="button" data-bs-target="#carouselEducation" data-bs-slide="prev">
													    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
													    <span class="visually-hidden">Previous</span>
													  </button>
													  <button class="carousel-control-next" type="button" data-bs-target="#carouselEducation" data-bs-slide="next">
													    <span class="carousel-control-next-icon" aria-hidden="true"></span>
													    <span class="visually-hidden">Next</span>
													  </button>
													</div>
					        					</div>
					        				</div>
					        			</div>
					        		</div>
					        	</div>
					        </div>				        	
					        <div class="tab-pane fade" id="turismo">
					        	<div class="row">
					        		<div class="col">
					        			<div class="content-tourism p-5">
					        				<div class="row">
					        					<div class="col-12 col-sm-12 col-md-6">
					        						<h3 class="title-tourism">Turismo</h3>
					        						<p class="text-tourism">
					        							Promovemos el turismo como herramienta para acercar a más gente a la naturaleza, y así poder replantear nuestra relación y fomentar una sana coexistencia con ella. Diseñamos experiencias en la naturaleza que enseñan a cuidar el ambiente, respetando la cultura y biodiversidad del área.<br>
					        							<span class="subtext-tourism">Impulsamos el turismo como una actividad económica alterna a la pesca de especies colapsadas.</span>
					        						</p>
					        						<h3 class="title-tourism-2">
					        							Objetivos
					        						</h3>
					        						<p class="text-tourism-2">
					        							<ul class="text-tourism-2">
					        								<li>Construir un turismo con propósito que acerque a más personas a valorar y cuidar los ecosistemas de los que hacemos parte y restaurar la relación con la naturaleza.</li>
					        								<li>Aportar a la regularización de las áreas naturales protegidas, junto a las comunidades locales, para mitigar el impacto del turismo masivo.</li>
					        								<li>Incentivar procesos de cambio en las comunidades para que fortalezcan su autonomía económica y territorial.</li>
					        								<li>Implementar un modelo de turismo que incluya  procesos pedagógicos y científicos para impulsar la participación ciudadana.</li>
					        							</ul>
					        						</p>
					        					</div>
					        					<div class="col-12 col-sm-12 col-md-6">
					        						<div id="carouselTourism" class="carousel slide" data-bs-ride="carousel">
														  <div class="carousel-indicators">
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="1" aria-label="Slide 2"></button>
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="2" aria-label="Slide 3"></button>
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="3" aria-label="Slide 4"></button>
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="4" aria-label="Slide 5"></button>
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="5" aria-label="Slide 6"></button>
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="6" aria-label="Slide 7"></button>
														    <button type="button" data-bs-target="#carouselTourism" data-bs-slide-to="7" aria-label="Slide 8"></button>
														  </div>
														  <div class="carousel-inner">
														    <div class="carousel-item active">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_1.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_2.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_3.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_4.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_5.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_6.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_7.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_tourism_8.png" class="d-block w-100" alt="...">
														    </div>
														  </div>
														  <button class="carousel-control-prev" type="button" data-bs-target="#carouselTourism" data-bs-slide="prev">
														    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
														    <span class="visually-hidden">Previous</span>
														  </button>
														  <button class="carousel-control-next" type="button" data-bs-target="#carouselTourism" data-bs-slide="next">
														    <span class="carousel-control-next-icon" aria-hidden="true"></span>
														    <span class="visually-hidden">Next</span>
														  </button>
														</div>
					        					</div>
					        				</div>
					        			</div>
					        		</div>
					        	</div>
					        </div>
					        <div class="tab-pane fade" id="comunicacion">
					        	<div class="row">
					        		<div class="col">
					        			<div class="content-comunication p-5">
					        				<div class="row">
					        					<div class="col-12 col-sm-12 col-md-6">
					        						<h3 class="title-comunication">Comunicación</h3>
					        						<p class="text-comunication">
					        							La comunicación es transversal a todos nuestros componentes. Con ella compartimos, promovemos y transmitimos la importancia de nuestros mares y que su cuidado 
					        							<span class="subtext-comunication">es un estilo de vida al alcance de todos, fundamental para la subsistencia de todos los seres del planeta, humanos y no humanos.</span>
					        						</p>
					        						<h3 class="title-comunication-2">
					        							Objetivos
					        						</h3>
					        						<p class="text-comunication-2">
					        							<ul class="text-comunication-2">
					        								<li>Crear y compartir contenido de escritura, audio, video y fotografía  para resaltar la belleza natural y promover su protección y respeto.</li>
					        								<li>Construir colectivamente nuevas narrativas del cuidado del planeta que incluya saberes locales, experiencias personales e investigación científica.</li>
					        								<li>Acercar a más personas a entender las necesidades y los beneficios de hacer cambios estructurales en el estilo de vida para fomentar la preservación de los mares.</li>
					        							</ul>
					        						</p>
					        					</div>
					        					<div class="col-12 col-sm-12 col-md-6">
					        						<div id="carouselComunication" class="carousel slide" data-bs-ride="carousel">
														<div class="carousel-indicators">
														    <button type="button" data-bs-target="#carouselComunication" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
														    <button type="button" data-bs-target="#carouselComunication" data-bs-slide-to="1" aria-label="Slide 2"></button>
														    <button type="button" data-bs-target="#carouselComunication" data-bs-slide-to="2" aria-label="Slide 3"></button>
														</div>
														<div class="carousel-inner">
														    <div class="carousel-item active">
														      <img src="{{ URL::to('/') }}/images/slide_comunication_1.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_comunication_2.png" class="d-block w-100" alt="...">
														    </div>
														    <div class="carousel-item">
														      <img src="{{ URL::to('/') }}/images/slide_comunication_3.png" class="d-block w-100" alt="...">
														    </div>
														</div>
														  <button class="carousel-control-prev" type="button" data-bs-target="#carouselComunication" data-bs-slide="prev">
														    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
														    <span class="visually-hidden">Previous</span>
														  </button>
														  <button class="carousel-control-next" type="button" data-bs-target="#carouselComunication" data-bs-slide="next">
														    <span class="carousel-control-next-icon" aria-hidden="true"></span>
														    <span class="visually-hidden">Next</span>
														  </button>
													</div>
					        					</div>
					        				</div>
					        			</div>
					        		</div>
					        	</div>
					        </div>
				        </div>
				    </div>
				</div>
    		</div>
    	</div>
    </section>
    <section id="our-projects">
    	<img src="{{ URL::to('/') }}/images/figure_our_project.png" alt="" style="max-width: 800px ; position: absolute;" class="img-parallax-overflow">
    	<div class="container-lg">
	    	<div class="row">
	    		<div class="col-12 col-sm-12 col-md-6 align-items-center wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
	    			<h3 class="title-ours-projects">
	    				Nuestros proyectos
	    			</h3>
	    			<p class="text-ours-projects py-4">
	    				Nuestra principal área de trabajo es la Isla Cerralvo y sus alrededores. Ahí hacemos las salidas al mar para investigar y conocer toda la biodiversidad de la zona.  Trabajamos de la mano de las comunidades locales, que con su experiencia y saberes tradicionales nos apoyan a descubrir el lugar y a entender las necesidades de todo el ecosistema.
	    			</p>
	    			<p class="text-ours-projects py-4">
	    				Buscamos que nuestros proyectos de conservación tengan metodologías de trabajo que sean replicables y puedan adaptarse a otras regiones de Baja California Sur y del mundo.
	    			</p>
	    		</div>
	    		<div class="col-12 col-sm-12 col-md-6 container-img-isla text-center">
	    			<img src="{{ URL::to('/') }}/images/isla_cerralvo.png" alt="Isla Cerralvo" class="img-parallax-overflow img-fluid" style="max-width:579px; max-height:688px;">
	    		</div>
	    	</div>    		
    	</div>
    </section>
    <style type="text/css">
    	#qh-bottom .container-lg{
    		padding-top: 10px;
    	}
    </style>
    <section id="qh-bottom">
    	<img src="{{ URL::to('/') }}/images/qh_figure_last.png" class="img-fluid" style="position: absolute; max-height:934px;">
    	<div class="container-lg">
	    	<div class="row">
	    		<div class="col-12 col-sm-12 col-md-6 justify-content-center">
	    			<div class="container-image-shark img-parallax-overflow img-fluid mx-auto wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;" style="z-index: 9;">
	    				<div class="wrap-project-shark text-center">
		    				<p class="title-project-shark">
		    					Proyecto Tiburón
		    				</p>
		    				<a href="#" class="btn btn-project-shark" data-bs-toggle="modal" data-bs-target="#modalShark">Conoce más</a>
	    				</div>
	    			</div>
	    			<!-- <img src="{{ URL::to('/') }}/images/proyecto_tiburon.png" alt="Proyecto Tiburón" class="img-parallax-overflow img-fluid" style="max-width: 483px; z-index:10;"> -->
	    		</div>
	    		<div class="col-12 col-sm-12 col-md-6 text-center">
	    			<div class="container-image-cerralvo img-parallax-overflow img-fluid mx-auto wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;" style="z-index: 9;">
	    				<div class="wrap-project-shark text-center">
	    					
		    				<p class="title-project-cerralvo">
		    					Proyecto Cerralvo
		    				</p>
		    				<a href="#" class="btn btn-project-cerralvo" data-bs-toggle="modal" data-bs-target="#modalCerralvo">Conoce más</a>
	    				</div>
	    			</div>
	    			<!-- <img src="{{ URL::to('/') }}/images/proyecto_cerralvo.png" alt="Proyecto Cerralvo" class="img-parallax-overflow img-fluid" style="max-width: 431px; z-index:10;"> -->
	    		</div>
	    	</div>
    	</div>

		<div class="modal fade" id="modalShark" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSharkLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		   <div class="modal-content">
		      <div class="modal-header p-2 border-0">
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body p-0">
		      	<h2 class="modal-title text-center modal-title-shark" id="modalSharkLabel">Proyecto Tiburón</h5>
		      	<div class="row container-lg justify-content-center mb-4" style="text-align: center;">
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_1.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_2.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_3.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_4.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_5.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_6.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_7.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_8.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pt_gallery_9.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
		      	</div>
		  		<div class="content-img-1 position-relative">
		  			<img src="{{ URL::to('/') }}/images/ps_figure1.png" class="position-absolute" style="max-width: 90px;">
		      		<img src="{{ URL::to('/') }}/images/ps_figure2.png" class="position-absolute" style="max-width: 90px; right: 0px;">
		  		</div>
		      	<div class="container-lg container-text-shark mt-2">
		      		<p>
		      			La comunidad de Agua Amarga está localizada a 50 km al sur de La Paz entre la bahía de la Ventana y de Ensenada de Muertos. <span class="text-shark-color"> Los locales han aprendido de generación en generación la pesca artesanal de escama y de tiburón, siendo su principal fuente de sustento económico por años. </span> Conocen estas aguas como la palma de su mano y sus ojos han visto la infinidad de especies que habitan aquí, incluso algunas que ni la ciencia ha registrado.
		      		</p>
		      		<p class="text-shark-color">
		      			 Durante su vida en estas tierras, han presenciado transformaciones, como la pérdida de biodiversidad de algunas especies y cómo el turismo no regulado llega cada vez más a la zona.
		      		</p>
		      		<p>
		      			En 2021 hicimos alianza con 9 pescadores de tiburón, para crear con ellos expediciones al mar con el objetivo de reemplazar la pesca de tiburón por estas nuevas alternativas de sustento económico.
		      		</p>
		      		<p>
		      			La primera fase es brindarle a los pescadores la infraestructura necesaria como el material, equipamiento, planificación y capacitaciones necesarias para hacer un turismo de conservación  que pongan en valor sus conocimientos locales y disminuya la presión en los ecosistemas y sus especies.
		      		</p>
		      	</div>
		      </div>
		    </div>
		  </div>
		</div>

	<div class="modal fade" id="modalCerralvo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCerralvoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		   <div class="modal-content">
		      <div class="modal-header p-2 border-0">
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body p-0">
		      	<h2 class="modal-title text-center modal-title-shark" id="modalSharkLabel">Proyecto Cerralvo</h5>
		      	<div class="row container-lg justify-content-center mb-4" style="text-align: center;">
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_1.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_2.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_3.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_4.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_5.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_6.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_7.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_8.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_9.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_10.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_11.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_12.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_13.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_14.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_15.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
					<div class="col-6 col-md-3 mb-4">
						<img src="{{ URL::to('/') }}/images/pc_gallery_16.png" alt="" class="img-parallax-overflow img-fluid" style="max-width:250px;">
					</div>
		      	</div>
		  		<div class="content-img-1 position-relative">
		  			<img src="{{ URL::to('/') }}/images/ps_figure1.png" class="position-absolute" style="max-width: 90px;">
		      		<img src="{{ URL::to('/') }}/images/ps_figure2.png" class="position-absolute" style="max-width: 90px; right: 0px;">
		  		</div>
		      	<div class="container-lg container-text-cerralvo mt-4">
		      		<p>
		      			El área de la isla Cerralvo es altamente biodiversa y poco estudiada. <span class="text-cerralvo-color"> Aunque no está declarada oficialmente como área natural protegida, es un santuario natural para muchas especies marinas que llegan a lo largo del año para alimentarse y reproducirse. </span> También es un lugar que ha dado sustento a comunidades ribereñas que durante décadas han vivido de lo que les da este mar.
		      		</p>
		      		<p class="text-cerralvo-color">
		      			Cada vez más investigadores y habitantes locales han puesto la mira sobre esta zona para enfrentar las amenaza de la pesca industrial y una presión turística elevada sin regulación.
		      		</p>
		      		<p>
		      			Con este proyecto se busca proteger la zona a través de los componentes de conservación, tener planes de manejos para el turismo y estrategias de investigación científica para saber con certeza las necesidades y estado de los ecosistemas. Buscamos fortalecer la red de comunicación entre comunidades locales y socializar la información generada con los visitantes al lugar.
		      		</p>
		      	</div>
		      </div>
		    </div>
		  </div>
		</div>
    </section>
@endsection