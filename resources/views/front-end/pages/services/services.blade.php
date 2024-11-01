@extends('front-end.layouts.app')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2 "
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('front-end/images/resources/img1.jpg') }})">
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
                            <div class="read-more text-center">

                            </div>
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
                            <a class="btn-one" href="#">Deposer une mission<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->
    <!--Start Working Process Area-->
    <section class="working-process-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>IT-Freelancer</p>
                <div class="title">Comment Nous<span> Travaillons</span></div>
            </div>
        </div>
        <div class="row">
            <!--Start Single Working Process-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="single-working-process text-center">
                    <div class="top-box"><span>01</span></div>
                    <div class="inner">
                        <h3>Vous vous inscrivez gratuitement</h3>
                        <p>Et devenez visible sur Notre plateforme de consultants freelances informatiques
                            en Afrique.</p>
                        <div class="icon-holder">
                            <span class="icon-document"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Process-->
            <!--Start Single Working Process-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="single-working-process text-center">
                    <div class="top-box"><span>02</span></div>
                    <div class="inner">
                        <h3>Nous vous proposons des missions informatiques en remote</h3>
                        <p>Auprès de nos partenaires, des sociétés de services informatiques (ESN / SSII)
                            qui recherchent vos expertises en remote.</p>
                        <div class="icon-holder">
                            <span class="icon-productive"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Process-->
            <!--Start Single Working Process-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                <div class="single-working-process text-center">
                    <div class="top-box"><span>03</span></div>
                    <div class="inner">
                        <h3>Vous choisissez votre mission</h3>
                        <p>Et votre tarif journalier (TJM). Vous contractez avec nous et commencez votre
                            mission. Nous nous occupons des aspects administratifs.</p>
                        <div class="icon-holder">
                            <span class="icon-kitchen"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Process-->
        </div>
        </div>
    </section>
    <!--End Working Process Area-->

    <!--Start services style2 Service Page-->
    <section class="services-style2-service-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec-title">
                        <p>Categories</p>
                        <div class="title"> secteurs d'activité</div>
                    </div>
                </div>

            </div>
            <div class="row">
                @foreach ($categories as $categorie)
                    <!--Start single service style2-->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ asset(Storage::url($categorie->image_path)) }}" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <div class="inner">
                                    <h3>{{ $categorie->libelle }}</h3>
                                    <div class="text">
                                        {{--    <p>{{ $categorie->description }}</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style2-->
                @endforeach
            </div>
        </div>
    </section>

    <!--End services style2 Service Page-->

    <!--Start services style1 service page-->
@endsection
