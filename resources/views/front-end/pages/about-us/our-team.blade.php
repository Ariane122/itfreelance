@extends('front-end.layouts.app')
@section('frontContent')

<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title">Our Team</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="#">Home</a></li>
                    <li class="active">Our Team</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="team-top space-sm-top">
        <div class="container">
            <h2 class="team-top-title">Meet the Teem of Innovators!</h2>
        </div>
        <div class="container-fluid text-center">
            <img src="{{asset('front/images/background/top-team.png')}}" alt="">
        </div>
    </section>
    <section class="team-our space-sm-bottom">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="img-Engitech">
                        <img src="{{asset('front/images/engtech.png')}}" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-xl-block space-150"></div>
        <div class="d-xl-none space-90"></div>
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
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member5.jpg')}}" alt="">
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
                            <h4>Marry Tonheim</h4>
                            <span>Chief Marketing Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member6.jpg')}}" alt="">
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
                            <h4>Anna Richmond</h4>
                            <span>President & CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member7.jpg')}}" alt="">
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
                            <h4>Andrew Kinzer</h4>
                            <span>Chief Information Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('front/images/member8.jpg')}}" alt="">
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
                            <h4>Katie Doyle</h4>
                            <span>Chief Strategy Officer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-testi space-sm-bottom">
        <div class="container">
            <div class="cta-h2">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mb-4 mb-md-0">
                        <div class="ot-heading">
                            <span>// We Carry more Than Just Good Coding Skills</span>
                            <h2 class="main-heading">Let's Build Your Website!</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 align-self-end">
                        <div class="ot-button text-center text-md-right">
                            <a href="contact.html" class="octf-btn octf-btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-heading text-center">
                        <span>// our clients</span>
                        <h2 class="main-heading">We are Trusted <br>15+ Countries Worldwide</h2>
                    </div>
                </div>
            </div>
            <div class="space-35"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ot-testimonials">
                        <div class="owl-carousel owl-theme testimonial-inner ot-testimonials-slider">
                            <div class="testi-item">
                                <div class="layer1"></div>
                                <div class="layer2">
                                    <div class="t-head flex-middle">
                                        <img src="{{asset('front/images/testi2.png')}}" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                            <div class="tinfo">
                                                <h6>SoftTech,</h6>
                                                <span>Manager of Company</span>
                                            </div>
                                    </div>
                                    <div class="ttext">
                                        "Patience. Infinite patience. No shortcuts. Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="layer1"></div>
                                <div class="layer2">
                                    <div class="t-head flex-middle">
                                        <img src="{{asset('front/images/testi1.png')}}" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                            <div class="tinfo">
                                                <h6>Moonkle LTD,</h6>
                                                <span>Client of Company</span>
                                            </div>
                                    </div>
                                    <div class="ttext">
                                        "Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="layer1"></div>
                                <div class="layer2">
                                    <div class="t-head flex-middle">
                                        <img src="{{asset('front/images/testi2.png')}}" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                            <div class="tinfo">
                                                <h6>SoftTech,</h6>
                                                <span>Manager of Company</span>
                                            </div>
                                    </div>
                                    <div class="ttext">
                                        "Patience. Infinite patience. No shortcuts. Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="layer1"></div>
                                <div class="layer2">
                                    <div class="t-head flex-middle">
                                        <img src="{{asset('front/images/testi1.png')}}" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                            <div class="tinfo">
                                                <h6>Moonkle LTD,</h6>
                                                <span>Client of Company</span>
                                            </div>
                                    </div>
                                    <div class="ttext">
                                        "Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
