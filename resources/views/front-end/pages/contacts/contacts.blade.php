@extends('front-end.layouts.app')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2 "
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('front-end/images/resources/bigdata.jpg') }})">
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
                        <h3>VOUS SOUHAITEZ REJOINDRE NOTRE RESEAU DE FREELANCER ?</h3>
                    </div>
                    <div class="button float-right">
                        <a class="btn-one" href="{{url('/je_suis_freelance')}}"> Inscrivez-vous <span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->
    <!--Section: Contact v.2-->
    <section class="slogan-area">

        <div class="content">
            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-12">
                        <div class="form h-100">
                            <h2 style="text-align: center">Contactez-nous</h2>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="text-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="mb-5" method="post" id="contactForm" name="contactForm"
                                    action="{{ route('contact.create') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="" class="col-form-label">Nom</label>
                                            <input type="text" class="form-control" name="nom" id="name"
                                                placeholder="Nom">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="" class="col-form-label">Prenom</label>
                                            <input type="text" class="form-control" name="prenom" id="email"
                                                placeholder="Prenom">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="" class="col-form-label">E-mail</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="e-mail">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="" class="col-form-label">Telephone</label>
                                            <input type="text" class="form-control" name="telephone" id="email"
                                                placeholder="Telephone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="message" class="col-form-label">Message</label>
                                            <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="  message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input type="submit" value="Envoyer"
                                                class="btn btn-primary rounded-0 py-2 px-4">
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

    </section>
    <!--Section: Contact v.2-->
@endsection
