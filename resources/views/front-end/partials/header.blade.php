<header id="site-header" class="site-header sticky-header header-static">
            <!-- Main Header start -->
            <div class="header-topbar style-2">
                <div class="octf-area-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="social-list">
                                    <li><a href="" target="_self"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="" target="_self"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <ul class="topbar-info align-self-end clearfix">
                                    <li><a href=""><i class="fas fa-phone-alt"></i> +1-800-456-478-23</a></li>
                                    <li><a href=""><i class="fas fa-envelope"></i> contact@mail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col">
                                    <div id="site-logo" class="site-logo">
                                        <a href="{{ url('/') }}">
                                            <img src="{{asset('front/images/logo.svg')}}" alt="Engitech" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                                <a href="{{ url('/') }}">Accueil</a>
                                                <!-- <ul class="sub-menu">
                                                    <li class="current-menu-item"><a href="index.html">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="index-4.html">Home 4</a></li>
                                                    <li><a href="index-5.html">Home 5</a></li>
                                                    <li><a href="index-6.html">Home 6</a></li>
                                                    <li><a href="index-7.html">Home 7</a></li>
                                                    <li><a href="index-8.html">Home 8</a></li>
                                                    <li><a href="index-9.html">Home 9</a></li>
                                                    <li><a href="index-10.html">Home 10</a></li>
                                                    <li><a href="index-11.html">Home 11</a></li>
                                                    <li><a href="index-12.html">Home 12</a></li>
                                                    <li><a href="index-13.html">Home 13</a></li>
                                                    <li><a href="index-14.html">Home 14</a></li>
                                                    <li><a href="index-15.html">Home 15</a></li>
                                                    <li><a href="index-16.html">Home 16</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Entreprise</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ url('/about-us') }}">Apropos de nous</a></li>
                                                    {{-- <li><a href="why-choose-us.html">Why Choose Us</a></li> --}}
                                                    <li><a href="{{ url('/equipes') }}">Notre équipes</a></li>
                                                    <li><a href="{{ url('/faqs') }}">FAQS</a></li> 
                                                    <li><a href="{{ url('/prestataire') }}">Prestataire</a></li> 
                                                    <li><a href="{{ url('/politique') }}">Politique</a></li> 



                                                    {{-- <li><a href="single-team.html">Single team</a></li> --}}
                                                    <!-- <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="single-product.html">Single Product</a></li>
                                                            <li><a href="checkout-page.html">Checkout Page</a></li>
                                                            <li><a href="cart-page.html">Cart Page</a></li>
                                                        </ul>
                                                    </li> -->
                                                    {{-- <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <!-- <li><a href="404-error.html">404 Error</a></li>
                                                    <li><a href="cooming-soon.html">Coming Soon</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ url('/services') }}">Services informatiques</a></li>
                                                    {{-- <li><a href="web-development.html">Web Development</a></li>
                                                    <li><a href="mobile-development.html">Mobile Development</a></li> --}}
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Projects</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Portfolio Masonry</a></li>
                                                    <li><a href="#">Portfolio Carousel</a></li>
                                                    <!-- <li class="menu-item-has-children"><a href="portfolio-grid.html">Portfolio Grid</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="portfolio-grid.html">Portfolio 3 Columns</a></li>
                                                            <li><a href="portfolio-4-column.html">Portfolio 4 Columns</a></li>
                                                            <li><a href="portfolio-no-gap.html">Portfolio No Gap</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <li class="menu-item-has-children"><a href="portfolio-details-1.html">Portfolio Details</a>
                                                        <!-- <ul class="sub-menu">
                                                            <li><a href="portfolio-details-1.html">Single Layout 1</a></li>
                                                            <li><a href="portfolio-details-2.html">Single Layout 2</a></li>
                                                            <li><a href="portfolio-details-3.html">Single Layout 3</a></li>
                                                        </ul> -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="{{ url('/blog') }}">Blog</a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Listing</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="post.html">Blog Single</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="{{ url('/contact') }}">Contacts</a></li>
                                            <li class="menu-item-has-children">
                                                <a style="color: #1508D1;">
                                                    Je Suis Prestataires
                                                </a>
                                                 <ul class="sub-menu">
                                                    <li><a href="{{ url('/connexion') }}">Conexion</a></li>
                                                    <li><a href="{{ url('/je_suis_freelance') }}">Inscription</a></li>

                                                </ul>
                                        </li>
                                        {{-- <li class="menu-item-has-children">
                                            <a style="color: #1508D1;">Je Suis une Entreprise</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Connexion</a></li>
                                                <li>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Launch demo modal
                                                    </button>
                                                </li>
                                                <li><a href="{{ url('/missions') }}">Inscription</a></li>

                                            </ul>
                                        </li> --}}
                                        </ul>
                                    </nav>
                                </div>
                                <!-- <div class="octf-col cta-col text-right">

                                    <div class="octf-btn-cta">

                                        <div class="octf-header-module cart-btn-hover">
                                            <div class="h-cart-btn octf-cta-icons">
                                                <a class="cart-icon" href="cart-page.html"><i class="flaticon-shopper"></i><span class="count">0</span></a>
                                            </div>
                                            <div class="site-header-cart">
                                                <div class="widget woocommerce widget_shopping_cart">
                                                    <div class="widget_shopping_cart_content">
                                                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="octf-header-module">
                                            <div class="toggle_search octf-cta-icons">
                                                <i class="flaticon-search"></i>
                                            </div>

                                            <div class="h-search-form-field collapse">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" id="hsearch-form" class="search-form">
                                                        <label><span class="screen-reader-text">Search for:</span>
                                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s"></label>
                                                        <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="index.html">
                                <img src="{{asset('front/images/logo.svg')}}" alt="Engitech">
                            </a>
                        </div>
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                    </div>
                    <div class="mmenu_wrapper">
                        <div class="mobile_nav collapse">
                            <ul id="menu-main-menu" class="mobile_mainmenu">
                                <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                    <a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                        <li><a href="index-8.html">Home 8</a></li>
                                        <li><a href="index-9.html">Home 9</a></li>
                                        <li><a href="index-10.html">Home 10</a></li>
                                        <li><a href="index-11.html">Home 11</a></li>
                                        <li><a href="index-12.html">Home 12</a></li>
                                        <li><a href="index-13.html">Home 13</a></li>
                                        <li><a href="index-14.html">Home 14</a></li>
                                        <li><a href="index-15.html">Home 15</a></li>
                                        <li><a href="index-16.html">Home 16</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Company</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                        <li><a href="our-team.html">Our team</a></li>
                                        <li><a href="single-team.html">Single team</a></li>
                                        <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="checkout-page.html">Checkout Page</a></li>
                                                <li><a href="cart-page.html">Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="faq.html">FAQS</a></li>
                                        <li><a href="404-error.html">404 Error</a></li>
                                        <li><a href="cooming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="it-services.html">It Services</a></li>
                                        <li><a href="web-development.html">Web Development</a></li>
                                        <li><a href="mobile-development.html">Mobile Development</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                        <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                        <li class="menu-item-has-children"><a href="portfolio-grid.html">Portfolio Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-grid.html">Portfolio 3 Columns</a></li>
                                                <li><a href="portfolio-4-column.html">Portfolio 4 Columns</a></li>
                                                <li><a href="portfolio-no-gap.html">Portfolio No Gap</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="portfolio-details-1.html">Portfolio Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-details-1.html">Single Layout 1</a></li>
                                                <li><a href="portfolio-details-2.html">Single Layout 2</a></li>
                                                <li><a href="portfolio-details-3.html">Single Layout 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog Listing</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="post.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/contact') }}">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
