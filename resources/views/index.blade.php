@extends('layouts.base')

@section('content')

    <style type="text/css">
        .item-gallery {
         padding: 0px;
         margin: 0px;
         display: contents;
        }

        .item-gallery img {
            max-width: calc(100% / 7); /*7, 5*/
            max-height: calc(100% / 5);
        }

        .container-gallery:after{
            position:fixed;
            content:"";
            top:0;
            left:0;
            right:0;
            bottom:0;
            background:#00000080;
            z-index:2;
        }
        .text-gallery{
            color: var(--white, #FFF);
            text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            font-family: Proxima Nova;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
            line-height: normal; 
            width: 425px;
            height: 251px;
        }

        .text-team-orgcas{
            font-size: 36px;
            padding: 20px 0;
            font-style: normal;
            font-weight: normal;
            line-height: normal; 
        }
        .btn-des-orgcas{
            color: #FFF;
            text-align: center;
            font-family: Proxima Nova;
            font-size: 20px;
            font-style: normal;
            font-weight: normal;
            line-height: 40px;
            border-radius: 40px;
            border: 1px solid #FFF;
            background: var(--dark-violet, #A58EA2);
            height: 58px;
            width: 276px;
        }

        .btn-des-orgcas:hover{
            color: #fff;
            border: 1px solid #FFF;
            background: var(--dark-violet, #A58EA2);
        }

        .container-text-bg{
            z-index:9;
        }

            .start-25{
                left: 25% !important;
            }

            .container-text-bg{
                top: 160px !important;
            }

            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                .text-gallery{
                    font-size: 30px;
                    width: 306px;
                    height: 251px;
                }

                .item-gallery img {
                    max-width: calc(100% / 5); /*7, 5*/
                    max-height: calc(100% / 5);
                }

                 .start-25{
                    left: 15% !important;
                }

                .container-text-bg{
                    top: 70px !important;
                }

                .btn-des-orgcas{
                    font-size: 14px;
                }
            }

            /* Small devices (portrait tablets and large phones, 600px and up) */
            @media only screen and (max-width: 900px) {
                .text-gallery{
                    font-size: 40px;
                    width: 306px;
                    height: 251px;
                }

                .item-gallery img {
                    max-width: calc(100% / 5); /*7, 5*/
                    max-height: calc(100% / 5);
                }
            }        
    </style>

    <section class="container-gallery p-0 position-relative">
        <div class="row p-0 m-0 position-absolute" style="z-index:1;">
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_1.png" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_2.png" class="img-fluid wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_3.png" class="img-fluid wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_4.png" class="img-fluid wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_5.png" class="img-fluid wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_6.png" class="img-fluid wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_7.png" class="img-fluid wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_8.png" class="img-fluid wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_9.png" class="img-fluid wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_10.png" class="img-fluid wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_11.png" class="img-fluid wow fadeInUp" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_12.png" class="img-fluid wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_13.png" class="img-fluid wow fadeInUp" data-wow-delay="1.3s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_14.png" class="img-fluid wow fadeInUp" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_15.png" class="img-fluid wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_16.png" class="img-fluid wow fadeInUp" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_17.png" class="img-fluid wow fadeInUp" data-wow-delay="1.7s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_18.png" class="img-fluid wow fadeInUp" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_19.png" class="img-fluid wow fadeInUp" data-wow-delay="1.9s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_20.png" class="img-fluid wow fadeInUp" data-wow-delay="2s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_21.png" class="img-fluid wow fadeInUp" data-wow-delay="2.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_22.png" class="img-fluid wow fadeInUp" data-wow-delay="2.2s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_23.png" class="img-fluid wow fadeInUp" data-wow-delay="2.3s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_24.png" class="img-fluid wow fadeInUp" data-wow-delay="2.4s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_25.png" class="img-fluid wow fadeInUp" data-wow-delay="2.5s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_26.png" class="img-fluid wow fadeInUp" data-wow-delay="2.6s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_27.png" class="img-fluid wow fadeInUp" data-wow-delay="2.7s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_28.png" class="img-fluid wow fadeInUp" data-wow-delay="2.8s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>

            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_2.png" class="img-fluid wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_7.png" class="img-fluid wow fadeInUp" data-wow-delay="0.91s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_11.png" class="img-fluid wow fadeInUp" data-wow-delay="0.91s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_14.png" class="img-fluid wow fadeInUp" data-wow-delay="0.91s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_17.png" class="img-fluid wow fadeInUp" data-wow-delay="0.91s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_21.png" class="img-fluid wow fadeInUp" data-wow-delay="0.91s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>
            <div class="item-gallery"><img src="{{ URL::to('/') }}/images/home/home_gallery_26.png" class="img-fluid wow fadeInUp" data-wow-delay="0.91s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"></div>

        </div>
        <div class="position-absolute start-25 wow fadeInLeft container-text-bg" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
            <div class="text-gallery">
                <p> Recordándonos que el mar es nuestro origen</p>
                <p class="text-team-orgcas">-Equipo Orgcas</p>
                <a href="{{route('quienes-somos')}}" class="btn btn-des-orgcas">Descubre Orgcas</a>
            </div>  
        </div>
    </section>
@endsection