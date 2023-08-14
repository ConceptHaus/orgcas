@extends('layouts.base')

@section('content')
	<link rel="stylesheet" href="{{asset('css/galeria.css')}}">

    <section class="galeria-portada p-0 m-0">
    	<img src="images/galeria_portada.png" alt="" class="img-fluid wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
    	<p class="text-center align-middle text-portada wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">El salto / Por: Johanna Doe Spencer / 2023</p>
    </section>
    <section class="press">
    	<p class="title-press wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Press</p>
    	<div class="container-figures position-relative">
    		<img src="images/galeria/figure_l.png" alt="" class="position-absolute" style="max-width: 90px; left: 0;">
    		<img src="images/galeria/figure_r.png" alt="" class="position-absolute" style="max-width: 90px; right: 0;">
    	</div>
		<div id="galeriaIndicators" class="carousel slide  container-lg" data-bs-ride="carousel">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#galeriaIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#galeriaIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#galeriaIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		    <button class="carousel-control-prev" type="button" data-bs-target="#galeriaIndicators" data-bs-slide="prev">
				<img src="images/galeria/left-arrow-icon.png" style="width: 58px; height:58px;">
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#galeriaIndicators" data-bs-slide="next">
				<img src="images/galeria/right-arrow-icon.png" style="width: 58px; height:58px;">
			</button>
		  </div>
		  <style>
		  	#galeria img{
		  		margin: 4px 2px;
		  	}
		  </style>
		  <div id="galeria" class="carousel-inner text-center">
		    <div class="carousel-item active">
				<img src="images/galeria/galeria_1.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_2.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_3.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_4.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_5.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_6.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_7.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_8.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_9.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_10.png" alt="" class="img-fluid">
		    </div>
		    <div class="carousel-item">
				<img src="images/galeria/galeria_11.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_12.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_13.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_14.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_15.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_16.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_17.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_18.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_19.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_20.png" alt="" class="img-fluid">
		    </div>
		    <div class="carousel-item">
				<img src="images/galeria/galeria_21.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_22.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_23.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_24.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_25.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_26.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_27.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_28.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_29.png" alt="" class="img-fluid">
				<img src="images/galeria/galeria_30.png" alt="" class="img-fluid">
		    </div>
		  </div>

		</div>
		<div class="text-galeria d-flex justify-content-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
			<p class="p-4">
				*Gracias a Maru Brito, Lissandra Amezcua, Porfiria Gómez, Alexa Sadem, Frida Lara, Paulina Castelio y Martina Cocquio por permitir el uso de su material y ayudarnos a ilustrar todo el trabajo que se hace en ORGCAS, dándole color, movimiento y vida.
			</p>
		</div>
    </section>

@endsection