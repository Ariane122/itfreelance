@extends('front-end.layouts.app')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2 "
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('front-end/images/resources/mobile.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>À la recherche de consultants pour votre projet informatique ?</span>
                            <h3 style="color: white ">
                                Nous pouvons vous mettre en relation avec les meilleurs consultants indépendants en
                                informatique, basés en Afrique.
                            </h3>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->
    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content flex-box-two fix">
                        <div class="title float-left">
                            <h3>Voulez-vous travailler avec nos freelance ?</h3>
                        </div>
                        <div class="button float-right">
                            <a class="btn-one" href="{{ url('/missions') }}">Deposer une mission<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->


    <!--Start services style2 Service Page-->
    <section class="services-style2-service-page">
        <div class="container">
            <div class="sec-title text-center">
                <p>IT-Freelancer</p>
                <div class="title">NOS DERNIERS CONSULTANTS FREELANCES INFORMATIQUES INSCRITS</div>
            </div>
        </div>
        <div class="row">

            @foreach ($prestataires as $prestataire)
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-service-style2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                        <div class="card text-center ">
                            <div class="card-header bg-dark text-white ">
                                Freelance
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $prestataire->user->nom . ' ' . $prestataire->user->prenom }}</h5>
                                <p class="card-text">{{ $prestataire->metier }}
                                </p>
                                {{-- <a href="{{ url('/connexion') }}" class="btn btn-primary">Voir plus</a> --}}
                            </div>
                            <div class="card-footer bg-secondary text-white">
                                {{ $prestataire->user->created_at }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
        </div>
    </section>
    <!--End services style2 Service Page-->
@endsection
