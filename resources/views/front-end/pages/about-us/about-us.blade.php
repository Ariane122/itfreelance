@extends('front-end.layouts.app')
@section('frontContent')

<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title">About Us</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="#">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="about-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-30 mb-lg-0">
                    <div class="ot-heading">
                        {{-- <span>// what we offer</span> --}}
                        <h3 class="main-heading">Bienvenue sur Work4Connect</h3>
                    </div>
                    <div class="space-5"></div>
                    <p>Le travail à distance est une organisation du travail dans laquelle les salariés effectuent leurs tâches de travail en tout ou en partie à l'extérieur des locaux ou locaux commerciaux de l'employeur, principalement par le biais des télécommunications.Depuis la pandémie de Corona, les entreprises ont constate qu’ aussi bien localement , qu’au niveau international , qu’il était possible  de continuer les activités avec des employés et des équipes travaillant à distance. Ce phénomème s’ acccentue de plus en plus.L’Afrique dispose d’une main-d’oeuvre jeune et abondante., Elle doit fournir chaque année à peu près 20 millions d'emplois pour lui  permettre de faire face à la dynamique démographique.Devant cette réalité Work4Connect s’est fixée comme but la promotion du travail à distance dAfrique en direction des autres continents.Nous sommes une plateforme dédiée à faciliter le travail à distance, connectant des professionnels talentueux du Continent Africain avec des employeurs qui recherchent des compétences variées.Nous connectons les entreprises à travers le monde avec des experts vivant sur le continent Africain ayant l’expertise technologiques requises </p>
                    <p><em class="text-dark"><strong>•	Notre mission est de rendre le travail à distance accessible et agréable pour tous.</strong></em></p>
                    <div class="space-20"></div>
                    {{-- <div class="video-popup style-2">
                        <div class="btn-inner">
                            <a class="btn-play" href="https://www.youtube.com/watch?v=lfDZJqSrIuk">
                                <i class="flaticon-play"></i>
                                <span class="circle-1"></span>
                                <span class="circle-2"></span>
                            </a>
                        </div>
                        <span>video showcase</span>
                    </div> --}}
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st1" href="">
                                <div class="overlay">
                                    <h4>Our Mission</h4>
                                </div>
                                <img src="{{asset('front/images/image-box1.jpg')}}" alt="Our Mission">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st2" href="">
                                <div class="overlay">
                                    <h4>Our Vision</h4>
                                </div>
                                <img src="{{asset('front/images/image-box2.jpg')}}" alt="Our Vision">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st3" href="">
                                <div class="overlay">
                                    <h4>Our Philosophy</h4>
                                </div>
                                <img src="{{asset('front/images/image-box3.jpg')}}" alt="Our Philosophy">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st4 mb-0" href="">
                                <div class="overlay">
                                    <h4>Our Strategy</h4>
                                </div>
                                <img src="{{asset('front/images/image-box4.jpg')}}" alt="Our Strategy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="padding-half bg-light-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="owl-carousel owl-theme home-client-carousel">
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client1.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client2.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client3.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client4.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client5.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client6.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client1.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client2.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client3.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client4.png')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client5.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{asset('front/images/client-logos/client6.svg')}}" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-v5">
        <div class="overlay overlay-image-about5"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="pabout-left">
                        <img src="images/image1-about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pabout-right">
                        <div class="ot-heading">
                            <span>// Experience. Execution. Excellence.</span>
                            <h2 class="main-heading">Avantages du Télétravail</h2>
                        </div>
                        <div class="tech-wrap">
                            <a class="tech-box" href="it-services.html">
                                <div class="icon-main"><span class="flaticon-php"></span></div>
                            </a>
                            <a class="tech-box" href="it-services.html">
                                <div class="icon-main"><span class="flaticon-electron"></span></div>
                            </a>
                            <a class="tech-box" href="it.html">
                                <div class="icon-main"><span class="flaticon-java"></span></div>
                            </a>
                            <a class="tech-box" href="it-services.html">
                                <div class="icon-main"><span class="flaticon-css"></span></div>
                            </a>
                        </div>
                        <h5>PHP Website Development Services</h5>
                        <p>Flexibilité : Travaillez selon vos horaires et choisissez votre environnement. Que ce soit chez vous, dans un café ou en voyage, vous avez la liberté de travailler où vous le souhaitez.
                           Équilibre vie professionnelle/vie personnelle : Le télétravail permet de mieux gérer vos responsabilités personnelles tout en restant productif, ce qui contribue à un meilleur bien-être général.
                           Économies : Réduisez les coûts liés aux transports, aux repas à l'extérieur et aux vêtements de bureau. Le télétravail peut également vous faire gagner du temps, que vous pouvez réinvestir dans d'autres activités.
                           Opportunités mondiales : Accédez à des offres d'emploi provenant d'entreprises du monde entier. Cela vous permet de trouver des projets qui correspondent parfaitement à vos compétences et intérêts.
                            Développement de compétences : Travailler à distance vous encourage à développer votre autonomie, vos compétences en gestion du temps et votre adaptabilité, des qualités de plus en plus recherchées sur le marché du travail.
                            Rejoignez-nous sur Work4Connect.com pour découvrir une multitude d'opportunités de télétravail et transformez votre manière de travailler

                            </p>
                        <div class="ot-button">
                            <a href="it-services.html" class="btn-details"><i class="flaticon-right-arrow-1"></i> LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading">
                        <span>// our team</span>
                        <h2 class="main-heading">Our Leadership Team</h2>
                    </div>
                    <div class="space-5"></div>
                    <p>We help businesses elevate their value through custom software development,<br> product design, QA and consultancy services.</p>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row no-margin">
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member1.jpg')}}" alt="">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="twitter.com" class="twitter"><i class="fab fa-twitter"></i></a>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="pinterest.com" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>David Ferry</h4>
                            <span>Co-Founder of company</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member2.jpg')}}" alt="">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="twitter.com" class="twitter"><i class="fab fa-twitter"></i></a>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="pinterest.com" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>Christina Torres</h4>
                            <span>Co-Founder of company</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member3.jpg')}}" alt="">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="twitter.com" class="twitter"><i class="fab fa-twitter"></i></a>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="pinterest.com" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>Amalia Bruno</h4>
                            <span>CTO OF COMPANY</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member4.jpg')}}" alt="">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="twitter.com" class="twitter"><i class="fab fa-twitter"></i></a>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="pinterest.com" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>David Ferry</h4>
                            <span>Co-Founder of company</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="s-counter4">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="330" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">active Clients</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="850" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">projects done</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-sm-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="25" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">team advisors</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="10" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Glorious Years</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-105"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="technology-v3-left">
                        <div class="ot-heading">
                            <span>// technology index</span>
                            <h2 class="main-heading">Improve and Innovate with the Tech Trends</h2>
                        </div>
                        <div class="space-5"></div>
                        <p>We hire and build your own remote dedicated development teams tailored to your specific needs.</p>
                        <div class="space-10"></div>
                        <div class="et-progress">
                            <div class="ot-progress">
                                <div class="overflow">
                                    <span class="pname f-left">mobile development</span>
                                    <span class="ppercent f-right">70%</span>
                                </div>
                                <div class="iprogress">
                                    <div class="progress-bar" data-percent="70%"></div>
                                </div>
                            </div>
                            <div class="ot-progress">
                                <div class="overflow">
                                    <span class="pname f-left">web development</span>
                                    <span class="ppercent f-right">90%</span>
                                </div>
                                <div class="iprogress">
                                    <div class="progress-bar" data-percent="90%"></div>
                                </div>
                            </div>
                            <div class="ot-progress">
                                <div class="overflow">
                                    <span class="pname f-left">ui/ux design</span>
                                    <span class="ppercent f-right">60%</span>
                                </div>
                                <div class="iprogress">
                                    <div class="progress-bar" data-percent="60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/image2-about.png" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
