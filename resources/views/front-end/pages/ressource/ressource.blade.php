@extends('front-end.layouts.app')
@section('frontContent')

        <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Ressource</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">ressource</li>
                        </ul>    
                    </div>
                </div>
            </div>
            
        </div>

        <section class="about-home6">
            <div class="about-overlay-6 overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-5 mb-lg-0 align-self-center">
                        <div class="about-img-6">
                            <img  src="{{asset('front/images/image2-home6.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="about-desc-6">
                            <div class="ot-heading s2">
                                {{-- <span>Introduce</span> --}}
                                <h3 class="main-heading">Conseils sur le télétravail, gestion du temps, productivité.</h3>
                            </div>
                            Pour améliorer le télétravail, la gestion du temps et la productivité, voici quelques idées d’articles et de guides que vous pourriez explorer :

                            Télétravail efficace :

                            Créer un environnement de travail optimal à domicile : conseils sur l’ergonomie, l’éclairage, la réduction des distractions et l’utilisation d’outils pour collaborer efficacement en ligne.
                            Trouver l'équilibre travail-vie personnelle en télétravail : comment établir des frontières, structurer les pauses et gérer le temps avec des rituels pour déconnecter.
                            Gestion du temps :

                            Les meilleures techniques de gestion du temps pour les télétravailleurs : introduction à la méthode Pomodoro, à la matrice d’Eisenhower, et aux techniques de priorisation des tâches.
                            Les outils de gestion de temps pour télétravailler avec efficacité : présentation d’applications comme Trello, Notion, ou RescueTime.
                            Productivité personnelle :

                            Comment maintenir la motivation en télétravail : techniques de motivation intrinsèque, les récompenses, et les objectifs clairs.
                            Les habitudes des personnes productives en télétravail : habitudes matinales, routines pour commencer et terminer la journée, et révisions hebdomadaires des objectifs.
                            Ces ressources pourraient vous aider à structurer et formaliser des pratiques qui boostent l'efficacité au quotidien.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-v3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ot-heading">
                            <span>// Webinaires ou vidéos : Formations et conseils.</span>
                            <h2 class="main-heading">Pour des webinaires et vidéos de formation, voici quelques recommandations sur des thèmes utiles :</h2>
                        </div>
                        <div class="space-15"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="serv-box s1">
                            <div class="icon-main"><span class="flaticon-tablet"></span></div>
                            <div class="content-box">
                                <h5>Télétravail et productivité:</h5>
                                <div>Webinaires sur l’équilibre travail-vie personnelle : séries sur les techniques pour gérer les distractions, structurer son espace de travail, et organiser son emploi du temps.
                                <div>Vidéos de formation sur les outils de collaboration en ligne : tutoriels sur les fonctionnalités avancées de Zoom, Slack, Microsoft Teams, et Google Workspace.</div>
                                </div>         
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="serv-box s1">
                            <div class="icon-main"><span class="flaticon-report"></span></div>
                            <div class="content-box">
                                <h5>Gestion du temps:</h5>
                                <div>Séances de formation sur les méthodes de gestion du temps : vidéos expliquant la méthode Pomodoro, GTD (Getting Things Done), et les techniques de priorisation.
                                <div>Conférences en ligne avec experts en productivité : présentations par des spécialistes qui partagent leurs conseils sur l’efficacité et la gestion des priorités.</div>
                                </div>         
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="serv-box s1">
                            <div class="icon-main"><span class="flaticon-ui"></span></div>
                            <div class="content-box">
                                <h5>Formations pour le développement personnel:</h5>
                                <div>Webinaires sur la gestion du stress et le bien-être en télétravail : comment se déconnecter, gérer la charge mentale, et développer des routines saines.
                                <div>Sessions pratiques sur les compétences en communication : améliorer l’efficacité des échanges virtuels avec des astuces pour les réunions et la communication écrite.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   
@endsection
   