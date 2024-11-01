@extends('front-end.layouts.app')
@section('frontContent')
    <div id="page" class="site">
        <div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Prestataire</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Entreprise</a></li>
                            <li class="active">Prestataire</li>
                        </ul>    
                    </div>
                </div>
            </div>
            <section class="shop-single">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0 text-center align-self-center">
                            <div class="product-slide">
                                <div class="zoom"></div>
                                <div class="single-product owl-carousel owl-theme">
                                    <div class="item" data-hash="zero">
                                        <a href="images/product/single-product-1.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                        <img src="images/product/single-product-1.jpg" alt="" data-zoom="images/product/single-product-1.jpg">
                                    </div>
                                    <div class="item" data-hash="one">
                                        <a href="images/product/single-product-2.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                        <img src="images/product/single-product-2.jpg" alt="" data-zoom="images/product/single-product-2.jpg">
                                    </div>
                                    <div class="item" data-hash="two">
                                        <a href="images/product/single-product-3.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                        <img src="images/product/single-product-3.jpg" alt="" data-zoom="images/product/single-product-3.jpg">
                                    </div>
                                    <div class="item" data-hash="three">
                                        <a href="images/product/single-product-4.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                        <img src="images/product/single-product-4.jpg" alt="" data-zoom="images/product/single-product-4.jpg">
                                    </div>
                                </div>
                                <div class="nav-img">
                                    <div class="item">
                                        <div>
                                            <a class="" href="#zero">
                                                <img src="images/product/single-product-1.jpg" alt="">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <a class="" href="#one">
                                                <img src="images/product/single-product-2.jpg" alt="">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <a class="" href="#two">
                                                <img src="images/product/single-product-3.jpg" alt="">
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <a class="" href="#three">
                                                <img src="images/product/single-product-4.jpg" alt="">
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="summary entry-summary">
                                <h3 class="single-product-title">Nous vous offrons un travail vous permettant :</h3>
                                <div class="single-product-rating">
                                    {{-- <div class="star-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                                    </div> --}}
                                </div>
                                {{-- <span class="single-price price-product"><span class="amount"><span>$</span>29.99</span></span> --}}
                                <p>necéssitant pas de voyages et de long séjours à l’étranger </p>
                                <p>de passer plus de temps avec la famille et avec vos proches </p>
                                <p>d’améliorer votre santé mentale et physique </p>
                                <p>d’avoir la liberté de déménager et de vivre là où vous voulez vivre </p>
                                <p>Capacité à avoir un horaire flexible et un équilibre travail-vie personnelle </p>
                                <p>La perspective d'un monde du travail sans frontières </p>
                                
                                <a  class="octf-btn single_add_to_cart_button button alt" href="{{ url('/je_suis_freelance') }}">Inscription</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-70"></div>
                </div>
            </section>
            
        </div>
   
</div><!-- #page -->
@endsection
