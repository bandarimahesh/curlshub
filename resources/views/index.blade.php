<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>CurlsHub</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{ asset('frontend/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/apple-touch-icon-114x114.png')}}">
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="{{ asset('frontend/css/et-line-icons.css')}}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}" />
        <!-- themify icon -->
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css')}}">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css')}}">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="{{ asset('frontend/css/justified-gallery.min.css')}}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/settings.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/navigation.css')}}">
        <!-- bootsnav -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootsnav.css')}}">
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent nav-box-width white-link navbar-expand-lg">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="index.html" title="Pofo" class="logo"><img src="{{ asset('frontend/images/logo.png')}}" data-rjs="images/logo@2x.png" class="logo-dark" alt="Pofo"><img src="{{ asset('frontend/images/logo-white.png')}}" data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col-auto col-lg accordion-menu pr-lg-0">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav alt-font font-weight-700">
                                <li><a href="#home" title="Home" class="inner-link">Home</a></li>
                                <li><a href="#about" title="About" class="inner-link">About</a></li>
                                <li><a href="#services" title="Services" class="inner-link">Services</a></li>
                                <li><a href="#work" title="Work" class="inner-link">Work</a></li>
                                <li><a href="#team" title="Team" class="inner-link">Team</a></li>
                                <li><a href="#blog" title="Blog" class="inner-link">Blog</a></li>
                                <li><a href="#clients" title="Clients" class="inner-link">Clients</a></li>
                                <li><a href="#contact" title="Contact" class="inner-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->  
        </header>
        <!-- end header -->
        <!-- start hero section -->
        <section id="home" class="p-0 parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1200');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main sm-padding-15px-lr">
                        <div class="slider-text-middle">
                            <img src="{{ asset('frontend/images/text.png')}}" alt=""/>
                            <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
        <!-- start feature box section -->
        <section id="about" class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-8 col-md-10 text-center margin-eight-bottom sm-margin-30px-bottom">
                        <span class="alt-font text-deep-pink text-medium margin-5px-bottom d-block">We are delivering beautiful digital products</span>
                        <h5 class="font-weight-300 text-extra-dark-gray mb-0">We provide high quality and cost effective offshore web and software development services</h5>
                    </div>
                    <!-- end feature box item -->
                </div>
                <div class="row">
                    <!-- start features box item -->
                    <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right d-flex justify-content-center d-md-block">
                                <i class="icon-lightbulb icon-extra-medium text-medium-gray float-left sm-margin-10px-bottom position-relative top-minus3"></i>
                                <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                <span class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Digital Branding</span>
                                <p class="width-90 lg-width-100">We can help you find the precise message to clearly speak to who you are as a company.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right d-flex justify-content-center d-md-block">
                                <i class="icon-globe icon-extra-medium text-medium-gray float-left sm-margin-10px-bottom position-relative top-minus3"></i>
                                <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                <h5 class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Web Interactive</h5>
                                <p class="width-90 lg-width-100">Our websites look great, but each page has a clearly defined conversion goal.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-md-4 text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right d-flex justify-content-center d-md-block">
                                <i class="icon-paintbrush icon-extra-medium text-medium-gray float-left sm-margin-10px-bottom position-relative top-minus3"></i>
                                <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                <h5 class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Graphic Design</h5>
                                <p class="width-90 lg-width-100">We interlace our creative with solid marketing and branding principles. A strong brand.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end feature box section -->
        <!-- start parallax section -->
        <section class="parallax wow fadeIn" data-stellar-background-ratio="0.3" style="background-image:url('http://placehold.it/1920x1200');">
            <div class="opacity-extra-medium bg-black"></div>
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-10 text-center last-paragraph-no-margin">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><img src="{{ asset('frontend/images/icon-play.png')}}" class="width-130px" alt=""/></a>
                        <h4 class="alt-font text-white-2 margin-15px-bottom sm-margin-20px-bottom">Unique. Powerful. Creative.</h4>
                        <p class="text-extra-large font-weight-300 text-light-gray width-85 sm-width-100 d-inline-block margin-25px-bottom">We provide high quality and cost effective offshore web and software development services.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end parallax section -->
        <!-- start services section -->
        <section id="services" class="bg-light-gray wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">Our Services</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since.</p>
                    </div>  
                </div>
                <div class="row">
                    <!-- start services item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom sm-margin-10px-bottom"><i class="icon-desktop text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Sales Promotion</div>
                            <p class="width-75 lg-width-90 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom sm-margin-10px-bottom"><i class="icon-tools text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">SEO Marketing</div>
                            <p class="width-75 lg-width-90 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col-12 col-lg-3 col-md-6 sm-margin-eight-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom sm-margin-10px-bottom"><i class="icon-scissors text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Strategic Planning</div>
                            <p class="width-75 lg-width-90 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col-12 col-lg-3 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-laptop text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Product Branding </div>
                            <p class="width-75 lg-width-90 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end services item -->
                </div>
            </div>
        </section>
        <!-- end services section -->
        <!-- start counter section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left md-margin-ten-bottom sm-margin-50px-bottom sm-padding-15px-left wow fadeInRight">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-desktop text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font mb-0 timer" data-speed="2000" data-to="350">350</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left md-margin-ten-bottom sm-margin-50px-bottom sm-padding-15px-left wow fadeInRight" data-wow-delay="0.2s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-camera text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font mb-0 timer" data-speed="2000" data-to="780">780</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Photo Capture</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left sm-margin-50px-bottom sm-padding-15px-left wow fadeInRight" data-wow-delay="0.4s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-laptop text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font mb-0 timer" data-speed="2000" data-to="850">850</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Work Completed</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left sm-padding-15px-left wow fadeInRight" data-wow-delay="0.6s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-chat text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font mb-0 timer" data-speed="2000" data-to="650">650</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Telephonic Talk</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                </div>
            </div>
        </section>
        <!-- end counter section -->
        <!-- start accordion section -->
        <section class="bg-light-gray border-none p-0 wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 padding-seven-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr wow fadeInLeft">
                        <h5 class="alt-font text-extra-dark-gray text-center text-lg-left margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom font-weight-600"><span class="font-weight-300 d-block sm-margin-15px-bottom">We're small but impressive.</span> Hand crafted pixel perfect designs.</h5>
                        <!-- start accordion -->
                        <div class="panel-group accordion-style2" id="accordion-main">
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseOne">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 text-deep-pink tab-tag">01</span>
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block">Unique and bold website design</span>
                                            <i class="fas fa-angle-up float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show" data-parent="#accordion-main">
                                    <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseTwo">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 text-deep-pink tab-tag">02</span>
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block">We're ready to start now</span>
                                            <i class="indicator fas fa-angle-down float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" data-parent="#accordion-main">
                                    <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseThree">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 text-deep-pink tab-tag">03</span>
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block">We Deliver the highest quality</span>
                                            <i class="indicator fas fa-angle-down float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion-main">
                                    <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end accordion -->
                    </div>
                    <div class="col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeInRight" style="background:url('http://placehold.it/1200x854')"></div>
                </div>
            </div>
        </section>
        <!-- end accordion section -->
        <!-- start masonry portfolio section -->
        <section id="work" class="pb-0 wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom text-center last-paragraph-no-margin md-margin-40px-bottom sm-margin-30px-bottom">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">Recent Portfolio</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since.</p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter nav nav-tabs border-none portfolio-filter-tab-1 alt-font text-uppercase text-center text-small font-weight-600 margin-80px-bottom md-margin-40px-bottom sm-margin-20px-bottom">
                            <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="sm-display-inline light-gray-text-link text-very-small">All</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".web" class="sm-display-inline light-gray-text-link text-very-small">Web</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".advertising" class="sm-display-inline light-gray-text-link text-very-small">Advertising</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".branding" class="sm-display-inline light-gray-text-link text-very-small">Branding</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".design" class="sm-display-inline light-gray-text-link text-very-small">Design</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".photography" class="sm-display-inline light-gray-text-link text-very-small">Photography</a></li>
                        </ul>                                                                           
                        <!-- end filter navigation -->
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="filter-content overflow-hidden padding-15px-lr w-100">
                        <ul class="portfolio-grid work-4col gutter-small hover-option7">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp">
                                <a href="single-project-page-03.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Herbal Beauty Salon</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp" data-wow-delay="0.2s">
                                <a href="single-project-page-04.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Tailoring Interior</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item advertising branding photography wow fadeInUp" data-wow-delay="0.4s">
                                <a href="single-project-page-05.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Pixflow Studio</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising design wow fadeInUp" data-wow-delay="0.6s">
                                <a href="single-project-page-01.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Designblast Inc</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp">
                                <a href="single-project-page-02.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">HardDot Stone</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.2s">
                                <a href="single-project-page-03.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Educamp School</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.4s">
                                <a href="single-project-page-04.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Third Eye Glasses</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Branding and Brochure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.6s">
                                <a href="single-project-page-05.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative">
                                                        <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Violator Series</span>
                                                        <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end masonry portfolio section -->
        <!-- start progress bar section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-6 col-md-10 padding-nine-right text-center text-lg-left md-padding-10px-right md-padding-30px-bottom wow fadeIn last-paragraph-no-margin">
                        <h6 class="text-extra-dark-gray font-weight-600 width-90 alt-font md-width-100">We provide high quality and cost effective services.</h6>
                        <p class="width-90 margin-30px-bottom md-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-10 wow fadeIn">
                        <div class="skillbar-bar-main skillbar-bar-style1">
                            <!-- start  progress bar item -->
                            <div class="skillbar margin-45px-bottom" data-percent="92%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">Jquery - 4 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                            <!-- start  progress bar item -->
                            <div class="skillbar margin-45px-bottom" data-percent="97%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">Wordpress - 6 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                            <!-- start  progress bar item -->
                            <div class="skillbar margin-45px-bottom" data-percent="98%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">HTML5 - 5 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                            <!-- start  progress bar item -->
                            <div class="skillbar" data-percent="92%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">Photography - 6 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end progress bar section -->
        <!-- start section -->
        <section class="p-0 wow fadeIn bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center md-height-500px sm-height-350px cover-background wow fadeInLeft" style="background-image: url('http://placehold.it/960x850');">
                        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                        <div class="position-relative bg-deep-pink w-50 text-center text-white-2 padding-ten-all z-index-5 lg-width-70 sm-width-85 sm-padding-twelve-tb sm-padding-five-lr">
                            <span class="special-char-medium text-white-2 absolute-middle-center top-0 fas fa-quote-left"></span>
                            <h6 class="font-weight-300 mb-0">We design brand, digital experience & marketing campaigns that engage the right customers.</h6>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center text-center text-lg-left wow fadeInRight last-paragraph-no-margin">
                        <div class="padding-fifteen-all lg-padding-ten-all md-padding-90px-all sm-no-padding-lr sm-padding-40px-tb width-100">
                            <span class="text-medium margin-10px-bottom d-block alt-font">We create premium designs and technology</span>
                            <h4 class="alt-font text-light-gray">A digital studio crafting beautiful experiences.</h4>
                            <p class="text-extra-large width-85 lg-width-100">We always stay on the cutting edge of digital, so that our clients maintain their competitive advantage online.</p>
                            <p class="width-85 lg-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text.</p>
                            <a href="home-creative-small-business.html" class="btn btn-small margin-35px-top btn-white">Start Your Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start full width feature box section -->
        <section class="p-0 wow fadeIn">
            <div class="container-fluid">
                <div class="row feature-box-14 border-top border-color-light-gray">
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center d-flex align-items-center last-paragraph-no-margin wow fadeInRight p-0">
                        <div class="padding-fifteen-all md-padding-50px-all width-100">
                            <h2 class="text-light-gray alt-font letter-spacing-minus-3 mb-0">01</h2>
                            <span class="d-block alt-font text-medium text-extra-dark-gray margin-15px-top margin-10px-bottom sm-margin-5px-bottom md-margin-5px-top">Discussion of the Idea</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center d-flex align-items-center last-paragraph-no-margin wow fadeInRight p-0" data-wow-delay="0.2s">
                        <div class="padding-fifteen-all md-padding-50px-all width-100">
                            <h2 class="text-light-gray alt-font letter-spacing-minus-3 mb-0">02</h2>
                            <span class="d-block alt-font text-medium text-extra-dark-gray margin-15px-top margin-10px-bottom sm-margin-5px-bottom md-margin-5px-top">Elaboration of the Core</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center d-flex align-items-center last-paragraph-no-margin wow fadeInRight p-0" data-wow-delay="0.4s">
                        <div class="padding-fifteen-all md-padding-50px-all width-100">
                            <h2 class="text-light-gray alt-font letter-spacing-minus-3 mb-0">03</h2>
                            <span class="d-block alt-font text-medium text-extra-dark-gray margin-15px-top margin-10px-bottom sm-margin-5px-bottom md-margin-5px-top">Handcrafted Templates</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center d-flex align-items-center last-paragraph-no-margin wow fadeInRight p-0" data-wow-delay="0.6s">
                        <div class="padding-fifteen-all md-padding-50px-all width-100">
                            <h2 class="text-light-gray alt-font letter-spacing-minus-3 mb-0">04</h2>
                            <span class="d-block alt-font text-medium text-extra-dark-gray margin-15px-top margin-10px-bottom sm-margin-5px-bottom md-margin-5px-top">Testing for Perfection</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                        </div>
                    </div>
                    <!-- start feature box item -->
                </div>
            </div>
        </section>
        <!-- end full width feature box section -->
        <!-- start parallax section -->
        <section class="parallax wow fadeIn " data-stellar-background-ratio="0.6" style="background-image:url('http://placehold.it/1920x1200');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container position-relative z-index-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-md-10 text-center margin-seven-bottom sm-margin-40px-bottom">
                        <h4 class="alt-font text-light-gray width-90 mx-auto">Powerful Website Builder</h4>
                        <p class="text-large width-85 md-width-100 font-weight-300 mx-auto mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    </div>
                </div>
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-6 col-md-3 text-center feature-box-9 sm-height-200px wow zoomIn">
                        <i class="icon-edit icon-large margin-20px-bottom text-deep-pink"></i>
                        <p class="alt-font text-medium text-light-gray">Creative Elements</p>
                        <div class="text-bottom-line border-color-deep-pink"></div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-6 col-md-3 text-center feature-box-9 sm-height-200px wow zoomIn" data-wow-delay="0.2s">
                        <i class="icon-tools-2 icon-large margin-20px-bottom text-deep-pink"></i>
                        <p class="alt-font text-medium text-light-gray">Smart Shortcodes</p>
                        <div class="text-bottom-line border-color-deep-pink"></div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-6 col-md-3 text-center feature-box-9 sm-height-200px wow zoomIn" data-wow-delay="0.4s">
                        <i class="icon-expand icon-large margin-20px-bottom text-deep-pink"></i>
                        <p class="alt-font text-medium text-light-gray">Unlimited Layouts</p>
                        <div class="text-bottom-line border-color-deep-pink"></div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-6 col-md-3 text-center feature-box-9 sm-height-200px wow zoomIn" data-wow-delay="0.6s">
                        <i class="icon-scissors icon-large margin-20px-bottom text-deep-pink"></i>
                        <p class="alt-font text-medium text-light-gray">Shortcode Panel</p>
                        <div class="text-bottom-line border-color-deep-pink"></div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end parallax section -->
        <!-- start team section -->
        <section id="team" class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom text-center last-paragraph-no-margin md-margin-40px-bottom sm-margin-30px-bottom">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">Creative People</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since.</p>
                    </div>  
                </div>
                <div class="row">
                    <!-- start team item -->
                    <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow slideInUp">
                        <figure>
                            <div class="team-image sm-width-100">
                                <img src="http://placehold.it/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Herman Miller</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow slideInUp" data-wow-delay="0.2s">
                        <figure>
                            <div class="team-image sm-width-100">
                                <img src="http://placehold.it/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Jeremy Dupont</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Creative Director</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow slideInUp" data-wow-delay="0.4s">
                        <figure>
                            <div class="team-image sm-width-100">
                                <img src="http://placehold.it/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Sara Smith</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Creative Studio Head</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 wow slideInUp"  data-wow-delay="0.6s">
                        <figure>
                            <div class="team-image sm-width-100">
                                <img src="http://placehold.it/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Bill Gardner</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                </div>
            </div>
        </section>
        <!-- end team section -->
        <!-- start blog section -->
        <section id="blog" class="bg-light-gray wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom text-center last-paragraph-no-margin md-margin-40px-bottom sm-margin-30px-bottom">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">Recent Blog</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since.</p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-12 p-0 sm-padding-15px-lr">
                        <ul class="blog-grid blog-3col gutter-large blog-post-style5">
                            <li class="grid-sizer"></li>
                            <!-- start blog post item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <div class="blog-post bg-white">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-01.html">
                                            <img src="http://placehold.it/900x650" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-masonry.html">Graphic Design</a></div>
                                    </div>
                                    <div class="post-details padding-40px-all md-padding-20px-all sm-padding-30px-tb">
                                        <div class="blog-hover-color"></div>
                                        <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray d-block lg-width-100 margin-5px-bottom">I like the body. I like to design everything to do with the body.</a>
                                        <div class="author">
                                            <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                                        </div>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog post item -->
                            <!-- start blog post item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <div class="blog-post bg-white">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-02.html">
                                            <img src="http://placehold.it/900x650" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-masonry.html">Graphic Design</a></div>
                                    </div>
                                    <div class="post-details padding-40px-all md-padding-20px-all sm-padding-30px-tb">
                                        <div class="blog-hover-color"></div>
                                        <a href="blog-post-layout-02.html" class="alt-font post-title text-medium text-extra-dark-gray d-block md-width-100 margin-5px-bottom">Recognizing the need is the primary condition for design.</a>
                                        <div class="author">
                                            <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                                        </div>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog post item -->
                            <!-- start blog post item -->
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <div class="blog-post bg-white">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-03.html">
                                            <img src="http://placehold.it/900x650" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-masonry.html">Web Design</a></div>
                                    </div>
                                    <div class="post-details padding-40px-all md-padding-20px-all sm-padding-30px-tb">
                                        <div class="blog-hover-color"></div>
                                        <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray d-block md-width-100 margin-5px-bottom">Styles come and go. Design is a language, not a style.</a>
                                        <div class="author">
                                            <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                                        </div>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog post item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog section -->
        <!-- start clients slider section  -->
        <section id="clients" class="parallax wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('http://placehold.it/1920x1200');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container text-center">
                <div class="row">    
                    <div class="swiper-slider-clients swiper-container white-move">
                        <div class="swiper-wrapper">
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo1.png')}}" alt=""></div><!-- end slider item -->
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo2.png')}}" alt=""></div><!-- end slider item -->
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo3.png')}}" alt=""></div><!-- end slider item -->
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo4.png')}}" alt=""></div><!-- end slider item -->
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo1.png')}}" alt=""></div><!-- end slider item -->
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo2.png')}}" alt=""></div><!-- end slider item -->
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo3.png')}}" alt=""></div><!-- end slider item -->
                            <!-- start slider item --><div class="swiper-slide text-center"><img src="{{ asset('frontend/images/clients-logo4.png')}}" alt=""></div><!-- end slider item -->
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- end clients slider section -->
        <!-- start review section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom text-center last-paragraph-no-margin md-margin-40px-bottom sm-margin-30px-bottom">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">What People Say</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since.</p>
                    </div>  
                </div>
                <div class="row">
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom sm-margin-30px-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin">
                        <img src="http://placehold.it/149x149" class="rounded-circle width-30 sm-width-100px sm-margin-15px-bottom margin-30px-bottom" alt=""/>
                        <p class="width-90 sm-width-100 mx-auto">Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work.</p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top sm-margin-15px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Shoko Mugikura</span>
                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Design Manager</span>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom sm-margin-30px-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                        <img src="http://placehold.it/149x149" class="rounded-circle width-30 sm-width-100px sm-margin-15px-bottom margin-30px-bottom" alt=""/>
                        <p class="width-90 sm-width-100 mx-auto">Trust us we looked for a very long time and wasted thousands of dollars testing other teams, freelancers, and outsource companies.</p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top sm-margin-15px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Alexander Smith</span>
                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Co Founder / CEO</span>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom sm-margin-30px-bottom text-center wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s">
                        <img src="http://placehold.it/149x149" class="rounded-circle width-30 sm-width-100px sm-margin-15px-bottom margin-30px-bottom" alt=""/>
                        <p class="width-90 sm-width-100 mx-auto">This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top sm-margin-15px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Lindsay Swanson</span>
                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creative Director</span>
                    </div>
                    <!-- start testimonial item -->
                </div>
            </div>
        </section>
        <!-- end review section -->
        <!-- start contact section -->
        <section id="contact" class="wow fadeIn p-0 bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 cover-background md-height-550px sm-height-350px wow fadeIn" style="background: url(http://placehold.it/1200x854)"></div>
                    <div class="col-12 col-lg-6 padding-five-tb padding-six-lr md-padding-eleven-all text-center sm-padding-15px-lr wow fadeIn">
                        <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">Fill out the form and we'll be in touch soon!</div>
                        <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-600 text-uppercase md-margin-30px-bottom sm-margin-15px-bottom">Ready to request a quote?</h5>
                        <div>
                            <form id="contact-form-2" action="javascript:void(0)" method="post">
                                <div id="success-contact-form-2" class="mx-0"></div>
                                <input type="text" name="name" id="name" placeholder="Name*" class="input-border-bottom">
                                <input type="text" name="email" id="email" placeholder="E-mail*" class="input-border-bottom">
                                <input type="text" id="subject" name="subject" placeholder="Subject" class="input-border-bottom">
                                <textarea name="comment" id="comment" placeholder="Your Message" class="input-border-bottom"></textarea>
                                <button id="contact-us-button-2" type="submit" class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact section -->
        <!-- start features section -->
        <section class="wow fadeIn border-bottom border-color-extra-light-gray">
            <div class="container">
                <div class="row">
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <i class="icon-map-pin icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Our Office</div>
                        <p class="width-70 lg-width-85 md-width-50 sm-width-60 sm-margin-10px-bottom mx-auto">401 Broadway, 24th Floor New York, NY 10013.</p>
                        <a href="contact-us-classic-02.html" class="margin-15px-top text-decoration-line-through-deep-pink d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">GET DIRECTION</a>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <i class="icon-chat icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
                        <p class="width-70 lg-width-85 md-width-50 sm-width-60 sm-margin-10px-bottom mx-auto">Phone: 1-800-222-000<br>Fax: 1-800-222-002</p>
                        <a href="contact-us-classic.html" class="margin-15px-top text-decoration-line-through-deep-pink d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">call us</a>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <i class="icon-envelope icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
                        <p class="width-70 lg-width-85 md-width-50 sm-width-60 sm-margin-10px-bottom mx-auto"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a><br><a href="mailto:hr@yourdomain.com">hr@yourdomain.com</a></p>
                        <a href="contact-us-classic-02.html" class="margin-15px-top text-decoration-line-through-deep-pink d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">send e-mail</a>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <i class="icon-megaphone icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Customer Services</div>
                        <p class="width-70 lg-width-85 md-width-50 sm-width-60 sm-margin-10px-bottom mx-auto">Lorem Ipsum is simply dummy text of the printing.</p>
                        <a href="contact-us-classic-02.html" class="margin-15px-top text-decoration-line-through-deep-pink d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">open ticket</a>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end features section -->
        <!-- start footer --> 
        <footer class="footer-strip bg-light-gray padding-50px-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start logo -->
                    <div class="col-md-3 text-center text-lg-left sm-margin-20px-bottom">
                        <a href="index.html"><img class="footer-logo" src="{{ asset('frontend/images/logo.png')}}" data-rjs="images/logo@2x.png" alt="Pofo"></a>
                    </div> 
                    <!-- end logo -->
                    <!-- start copyright -->
                    <div class="col-md-6 text-center text-small alt-font sm-margin-10px-bottom">
                        &copy; 2019 POFO is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" title="ThemeZaa">ThemeZaa</a>.
                    </div>
                    <!-- end copyright -->
                    <!-- start social media -->
                    <div class="col-md-3 text-center text-lg-right">
                        <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                            <ul class="small-icon mb-0">
                                <li><a class="facebook text-black" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter text-black" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="google text-black" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a class="dribbble text-black" href="https://dribbble.com/" target="_blank"><i class="fab fa-dribbble mr-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.bundle.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>

        <script type="text/javascript" src="{{ asset('frontend/js/smooth-scroll.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.appear.js')}}"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="{{ asset('frontend/js/bootsnav.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.nav.js')}}"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{ asset('frontend/js/wow.min.js')}}"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{ asset('frontend/js/page-scroll.js')}}"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="{{ asset('frontend/js/swiper.min.js')}}"></script>
        <!-- counter -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.count-to.js')}}"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.stellar.js')}}"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="{{ asset('frontend/js/classie.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/hamburger-menu.js')}}"></script>
        <!-- counter  -->
        <script type="text/javascript" src="{{ asset('frontend/js/counter.js')}}"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.fitvids.js')}}"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="{{ asset('frontend/js/skill.bars.jquery.js')}}"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="{{ asset('frontend/js/justified-gallery.min.js')}}"></script>
        <!--pie chart-->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.easypiechart.min.js')}}"></script>
        <!-- retina -->
        <script type="text/javascript" src="{{ asset('frontend/js/retina.min.js')}}"></script>
        <!-- revolution -->
        <script type="text/javascript" src="{{ asset('frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/main.js')}}"></script>
    </body>
</html>