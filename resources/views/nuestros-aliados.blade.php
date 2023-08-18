@extends('layouts.base')

@section('content')

<style type="text/css">
	.carousel-item{
		width: 819px;
		height: 496px; 
	}

	#carouselAliados .al-card-dec{
		max-width: 439px;
		max-height: 215px; 
	}

	.carousel-item .card{
		border-radius: 50px;
		background: var(--ultra-light-gray, #F6F6F6);
		box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.25);
	}
	.al-card-dec{
		color: var(--orgcas-baja-blue, #003B4D);
		text-align: center;
		font-family: Proxima Nova;
		font-size: 30px;
		font-style: normal;
		font-weight: 600;
		line-height: 150%; /* 45px */ 
	}

	.carousel-inner{
		overflow: initial !important;
	}
.carousel-indicators .carousel-control-prev, .carousel-indicators .carousel-control-next {
  height: 0px;
}

@media only screen and (max-width: 600px) {
	.carousel-item{
		width: 323px !important;
		height: 434px !important; 
	}

	.carousel-indicators [data-bs-target]{
		background: #FFF0 !important;
	}
}

@media only screen and (max-width: 950px) {

	.carousel-item{
		width: 100%;
		height: 496px; 
	}

	.container-lg.nav-aliados img {
	  max-width: 100% !important;
	  height: auto !important;
	}
}

</style>

    <section class="container-fluid text-center" style="padding-top: 0;">
      <div class="row">
        <div class="col p-12 container-top" style="padding: 0;">
            <img src="images/Frida lara the begining of life.png" alt="Frida lara the begining of life" class="section-img wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; width: 100%; position: relative;">
        </div>
      </div>
    </section>

	<section id="about" class="img-parallax-overflow-info" style="padding-top: 2rem;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-1 col-sm-2 col-lg-2 p-0 cont-imgL">
					<img src="images/roca-verde.png" class="img-parallax-overflow-info img-rocaL">
				</div>
				<div class="col-10 col-sm-8 col-lg-8 p-2">
					<div class="col-md-12 p-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
						<h1 class="qb-title" style="color: var(--orgcas-baja-beach, #007078);">Aliados</h1>
					</div>
					<p class="qb-text text-center wow fadeInLeft" data-wow-delay="0.1s" >Todo el trabajo no lo podemos hacer solas y  <span style="color: var(--orgcas-terracota, #CA6D4F); ">hemos contado con el apoyo de muchas personas y organizaciones a las cuales admiramos</span>  y estaremos trabajando con ellos a lo largo del tiempo para fortalecer las redes de quienes trabajamos por las mismas causas.</p>
					<div class="col-md-12 p-4">
						<h1 class="qb-title p-4" style="color: var(--orgcas-terracota, #CA6D4F); line-height: 1;">Navegando juntos</h1>
					</div>						
				</div>
				<div class="col-1 col-sm-2 col-lg-2 p-0 cont-imgR">
					<img src="images/roca-terracota.png" class="img-parallax-overflow-info img-rocaR" alt="">
				</div>
			</div>
			<div class="col-12 row cont-carousel">
				<div class="col-xs-0 col-sm-1 col-lg-2 p-0"></div>
				<div class="col-xs-12 col-sm-10 col-lg-8 p-2 d-flex justify-content-center">
					<!-- Carousel -->
					<div id="carouselAliados" class="carousel" data-bs-ride="false">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselAliados" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselAliados" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselAliados" data-bs-slide-to="2" aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#carouselAliados" data-bs-slide-to="3" aria-label="Slide 4"></button>
							<button type="button" data-bs-target="#carouselAliados" data-bs-slide-to="4" aria-label="Slide 5"></button>
							<button type="button" data-bs-target="#carouselAliados" data-bs-slide-to="5" aria-label="Slide 6"></button>
							<button type="button" data-bs-target="#carouselAliados" data-bs-slide-to="6" aria-label="Slide 7"></button>


						<button class="carousel-control-prev" type="button" data-bs-target="#carouselAliados" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselAliados" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
						</div>
						<div class="carousel-inner">
							<!-- blue -->
							<div class="carousel-item active">
								<div class="card text-center p-4 align-items-center w-100 h-100">
									<img src="images/aliados-blueMarine.png" class="qb-card-img-sec my-3" alt="Aliados">
									<div class="card-body">
										<p class="card-text al-card-dec">
											Blue Marine Foundation: Nos dio la patadita de inicio y continua apoyándonos hasta ahora
										</p>
										<a href="https://www.bluemarinefoundation.com/" target="_blank" class="card-btn">Conocer más</a>
									</div>
								</div>
							</div>
							<!-- Jafra -->
							<div class="carousel-item">
								<div class="card text-center p-4 align-items-center w-100 h-100">
									<img src="images/aliados-jafra.png" class="qb-card-img-sec my-3" alt="Aliados" style="max-height: 126px; max-width: 143px; ">
									<div class="card-body">
										<p class="card-text al-card-dec">
											Jafra: Nos donará parte de sus ganancias para operaciones vitales para ORGCAS
										</p>
										<a href="https://www.jafra.com.mx/" target="_blank" class="card-btn">Conocer más</a>
									</div>
								</div>
							</div>
							<!-- NEXXUS -->
							<div class="carousel-item">
								<div class="card text-center p-4 align-items-center w-100 h-100">
									<img src="images/aliados-nexxus.png" class="qb-card-img-sec my-5" alt="Aliados">
									<div class="card-body">
										<p class="card-text al-card-dec">
											Nexxus: Nos apoyó con un motor para la segunda embarcación de nuestro proyecto
										</p>
										<a href="https://www.nexxuscapital.com/es/" target="_blank" class="card-btn">Conocer más</a>
									</div>
								</div>
							</div>
							<!-- Bonassi -->
							<div class="carousel-item">
								<div class="card text-center p-4 align-items-center w-100 h-100">
									<img src="images/aliados-bonassi.png" class="qb-card-img-sec my-5" alt="Aliados">
									<div class="card-body">
										<p class="card-text al-card-dec">
											Bonassi: Nos donaron mucho de su increíble equipo para poder avanzar en el proyecto
										</p>
										<a href="https://bonassi.mx/" target="_blank" class="card-btn">Conocer más</a>
									</div>
								</div>
							</div>
							<!-- Intercam -->
							<div class="carousel-item">
								<div class="card text-center p-4 align-items-center w-100 h-100">
									<img src="images/aliados-intercam.png" class="qb-card-img-sec my-5" alt="Aliados">
									<div class="card-body">
										<p class="card-text al-card-dec">
											Intercam: Creyeron en nuestro proyecto y nos donaron nuestra primera panga la "Tintorera"
										</p>
										<a href="https://www.intercam.com.mx/" target="_blank" class="card-btn">Conocer más</a>
									</div>
								</div>
							</div>
							<!-- Beta -->
							<div class="carousel-item">
								<div class="card text-center p-4 align-items-center w-100 h-100">
									<img src="images/aliados-beta.png" class="qb-card-img-sec my-5" alt="Aliados">
									<div class="card-body">
										<p class="card-text al-card-dec">
											Beta Diversidad: Nuestra ONG hermana con la que trabajamos mano a mano
										</p>
										<a href="https://betadiversidad.org/" target="_blank" class="card-btn">Conocer más</a>
									</div>
								</div>
							</div>
							<!-- New-->
							<div class="carousel-item">
								<div class="card text-center p-4 align-items-center w-100 h-100">
									<img src="images/aliados-newAtlantis.png" class="qb-card-img-sec my-5" alt="Aliados">
									<div class="card-body">
										<p class="card-text al-card-dec">
											New Atlantis: Nos ayuda con partes vitales de la operación del día a día de ORGCAS
										</p>
										<a href="https://newatlantis.io/" target="_blank" class="card-btn">Conocer más</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-xs-0 col-sm-1 col-lg-2 p-0">
				</div>
			</div>
		</div>
	</section>

    <style type="text/css">

		.qb-title{
			text-align: center;
			font-family: "Bw Aleta No 20";
			font-size: 3.75rem;
			font-style: normal;
			font-weight: 700;
			line-height: 33.5%; /* 1.25625rem */
			letter-spacing: -0.0375rem;

		}
		.qb-text{
			color: #323232;
			text-align: center;
			font-family: Proxima Nova;
			font-size: 1.875rem;
			font-style: normal;
			font-weight: 600;
			line-height: 150%; /* 2.8125rem */
		}
		.container-top{
			padding: 0;
		}

		.card-btn{
			border-radius: 2.5rem;
			border: 1px solid #FFF;
			background: var(--dark-violet, #A58EA2);
			color: #FFF;
			text-align: center;
			font-family: Roboto;
			font-size: 1.25rem;
			font-style: normal;
			font-weight: 600;
			line-height: normal;
			text-decoration: none;
			padding: .5rem 2rem;

		}
		.cont-imgR{
			display: flex;
			justify-content: flex-end;
		}
		.img-rocaR{
			max-height: 277px;max-width: 150px;
		}
		.cont-imgL{
			display: flex;
			justify-content: flex-start;
			align-items: flex-end;
		}
		.img-rocaL{
			max-height: 277px;max-width: 150px;
		}
		.carousel-inner{
			height: 100%;
		}
		.carousel-indicators [data-bs-target] {
			background-color: #CA6D4F;
		}

		@media only screen and (max-width: 600px) {
			.qb-title{
				color: var(--orgcas-terracota, #CA6D4F);
				text-align: center;
				font-family: "Bw Aleta No 20";
				font-size: 2rem;
				font-style: normal;
				font-weight: 700;
				line-height: 114%; /* 2.28rem */
				letter-spacing: -0.02rem;
			}
			.qb-text {
				color: #323232;
				text-align: center;
				font-family: Proxima Nova;
				font-size: 1rem;
				font-style: normal;
				font-weight: 600;
				line-height: 150%; /* 1.5rem */
			}
			.qb-card-sec{
				margin: 0.5rem;
				max-width: 95%;
				border-radius: 2rem;
				background: var(--ultra-light-gray, #F6F6F6);
				box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.25);
			}
			.cont-imgR{
			justify-content: flex-start;
			}
			.img-rocaR{
				max-height: 120px; max-width: 110px;
			}
			.cont-imgL{
				display: flex;
				justify-content: flex-start;
				align-items: flex-end;
			}
			.img-rocaL{
				max-height: 120px; max-width: 100px;
			}
			.cont-carousel{
				width: 100%;
				margin: 0 auto;
			}
			.carousel{
				padding: 4rem 0;
			}
			.card-text{
				color: var(--orgcas-baja-blue, #003B4D);
				text-align: center;
				font-family: Proxima Nova;
				font-size: 1.125rem;
				font-style: normal;
				font-weight: 600;
				line-height: 150%; /* 1.6875rem */
			}

		}
    </style>

    @if($agent->isMobile())

    <style type="text/css">

    	.nav-aliados .aliado-item {
    		margin-top: auto;
				margin-bottom: auto;
				padding-bottom: 15px;
    	}
    	.img-v-center{
    	}
    </style>

	    <section class="container-lg nav-aliados">
			  <div class="row justify-content-center mb-4">
	        <div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
	        	<a href="https://betadiversidad.org/" target="_blank" class="img-v-center">
	            	<img src="images/aliados-beta.png" class="img-parallax-overflow qb-icon-aliados" style="width: 163px; height:47px;">
	        	</a>
	        </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://www.bluemarinefoundation.com/" target="_blank" class="img-v-center">
							<img src="images/aliados-blueMarine.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 183px; height:183px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://www.sealegacy.org/" target="_blank" class="img-v-center">
							<img src="images/aliados-seaLegacy.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 175px; height:66px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://www.jafra.com.mx/" target="_blank" class="img-v-center">
							<img src="images/aliados-jafra.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 66px; height:57px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://www.nexxuscapital.com/es/" target="_blank" class="img-v-center">
							<img src="images/aliados-nexxus.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 117px; height:32px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://bonassi.mx/" target="_blank" class="img-v-center">
							<img src="images/aliados-bonassi.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 141px; height:36px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://www.intercam.com.mx/" target="_blank" class="img-v-center">
							<img src="images/aliados-intercam.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 155px; height:29px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://www.sharkresearchmexico.com/" target="_blank" class="img-v-center">
							<img src="images/aliados-shark.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 106px; height:73px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://www.deepseaguardians.org/" target="_blank" class="img-v-center">
							<img src="images/aliados-deep.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 178px; height:126px;">
						</a>
			    </div>

					<div class="col-6 col-sm-6 col-md-3 text-center aliado-item">
						<a href="https://newatlantis.io/" target="_blank" class="img-v-center">
							<img src="images/aliados-newAtlantis.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 130px; height:41px;">
						</a>
			    </div>
			  </div>
	    </section>

	  @else
	    <section class="container-lg nav-aliados">
			  <div class="row justify-content-center mb-4">
	        <div class="col-6 col-sm-6 col-md-3 text-center">
	        	<a href="https://betadiversidad.org/" target="_blank">
	            	<img src="images/aliados-beta.png" class="img-parallax-overflow qb-icon-aliados" style="width: 230px; height:100px;">
	        	</a>
	        </div>
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://www.bluemarinefoundation.com/" target="_blank">
							<img src="images/aliados-blueMarine.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 348px; height:196px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://www.sealegacy.org/" target="_blank">
							<img src="images/aliados-seaLegacy.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 314px; height:118px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://www.jafra.com.mx/" target="_blank">
							<img src="images/aliados-jafra.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 161px; height:142px;">
						</a>
			    </div>
			  </div>
			  <div class="row justify-content-center mt-2 mb-4">
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://www.nexxuscapital.com/es/" target="_blank">
							<img src="images/aliados-nexxus.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 216px; height:71px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://www.intercam.com.mx/" target="_blank">
							<img src="images/aliados-intercam.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 303px; height:57px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://bonassi.mx/" target="_blank">
							<img src="images/aliados-bonassi.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 287px; height:73px;">
						</a>
			    </div>
			  </div>
			  <div class="row justify-content-center mt-2 mb-4">
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://www.deepseaguardians.org/" target="_blank">
							<img src="images/aliados-deep.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 178px; height:126px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://www.sharkresearchmexico.com/" target="_blank">
							<img src="images/aliados-shark.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 267px; height:129px;">
						</a>
			    </div>
					<div class="col-6 col-sm-6 col-md-3 text-center">
						<a href="https://newatlantis.io/" target="_blank">
							<img src="images/aliados-newAtlantis.png" class="img-fluid img-parallax-overflow qb-icon-aliados" style="width: 324px; height:102px;">
						</a>
			    </div>
			  </div>
	    </section>
    @endif
    	
@endsection