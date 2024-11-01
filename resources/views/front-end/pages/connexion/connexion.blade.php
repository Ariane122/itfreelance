@extends('front-end.layouts.app')
@section('frontContent')
    <!--Start breadcrumb area-->

    <!--End breadcrumb area-->
    <section class="slogan-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">Connexion</h3>
                            <form method="POST" action="{{ route('signiner') }}">
                                @csrf <!-- Protection contre les attaques CSRF -->
                                <div class="form-group">
                                    <label for="email">Adresse email</label>
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Entrez votre adresse email" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="password"
                                           placeholder="Entrez votre mot de passe" name="password" required>
                                </div>

                                @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection


