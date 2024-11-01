@extends('front-end.layouts.app')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2 "
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('front-end/images/resources/machine.jpg') }})">
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

    <section class="slogan-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <h3 class="card-title text-center">Deposez une mission</h3>
                            @if ($errors->any())
                                <div class="text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('mission.create') }}">

                                <h4 style="margin: 30px 0px">Dans quel domaine d´expertise IT ?</h4>
                                <label for="exampleFormControlSelect1">Categorie</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="categorie_id" required>
                                    <option>choisir</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                    @endforeach

                                </select>
                                <h4 style="margin: 30px 0px">Décrivez-nous votre projet</h4>
                                <div class="form-group  ">

                                    <label for="debut">Type prestation </label>
                                    <input type="text" class="form-control" id="debut" placeholder="Type prestation"
                                        name="type_prestation">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Titre</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" required
                                        name="titre" placeholder="titre">
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputPassword1">Debut</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" required
                                        name="debut" placeholder="Debut">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Lieu</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" required
                                        name="lieu" placeholder="Lieu">
                                </div>


                                <label for="exampleInputPassword1">Description</label>
                                <div class="form-group">

                                    <textarea class="form-control" name="description" id="message" cols="30" rows="4"
                                        placeholder="Description"></textarea>
                                </div>
                                <h4 style="margin: 30px 0px">Vos informations</h4>

                                <div class="form-group">
                                    <label for="" class="col-form-label">Nom De l'entreprise</label>
                                    <input type="text" class="form-control" name="nom_entreprise" id="nom"
                                        placeholder="Nom entreprise">
                                </div>



                                <div class="form-group">
                                    <label for="email">Adresse email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Entrez votre adresse email" required name="email">
                                </div>


                                <div class="row">
                                    {{-- <div class="col-md-6 form-group mb-3">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Entrez votre mot de passe" name="password" required>
                                    </div> --}}
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Telephone</label>
                                        <input type="text" class="form-control" name="telephone" id="email"
                                            placeholder="Telephone">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Nom du responsable </label>
                                        <input type="text" class="form-control" name="nom" id="email"
                                            placeholder="e-mail">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Prenom responsable</label>
                                        <input type="text" class="form-control" name="prenom" id="email"
                                            placeholder="Prenom responsable">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Fonction</label>
                                        <input type="text" class="form-control" name="fonction" id="email"
                                            placeholder="Fonction">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="" class="col-form-label">Civilite</label>
                                        <input type="text" class="form-control" name="civilite" id="email"
                                            placeholder="Civilite">
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
