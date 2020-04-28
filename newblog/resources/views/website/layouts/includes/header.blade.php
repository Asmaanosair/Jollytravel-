<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>ـJolleys travel World </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('website/assets/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('website/assets/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('website/assets/css/color.css')}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('website/assets/images/favicon.png')}}">
</head>
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="pin">
        <div class="pulse"></div>
    </div>
</div>
<!--loader end-->
<!-- Main  -->
<div id="main">
    <!-- header-->
    <header class="main-header">
        <!-- header-top-->
        <div class="header-top fl-wrap">
            <div class="container">
                <div class="logo-holder">
                    <a href="{{url('/Home')}}"><img src="{{asset('website/assets/images/Jolleys Travel logo_v copy 2.png')}}" alt=""></a>
                </div>

                <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div>
                <div class="lang-wrap">
                    <div class="show-lang"><img src="{{asset('website/assets/images/lan/1.png')}}" alt=""> <span>Eng</span><i class="fa fa-caret-down"></i></div>
                    <ul class="lang-tooltip green-bg">
                        <li><a href="#"><img src="{{asset('website/assets/images/lan/4.png')}}" alt=""> De</a></li>
                        <li><a href="#"><img src="{{asset('website/assets/images/lan/5.png')}}" alt=""> It</a></li>
                        <li><a href="#"><img src="{{asset('website/assets/images/lan/2.png')}}" alt=""> Fr</a></li>
                        <li><a href="#"><img src="{{asset('website/assets/images/lan/3.png')}}" alt=""> Es</a></li>
                    </ul>
                </div>
                <div class="currency-wrap">
                    <div class="show-currency-tooltip"><i class="fas fa-dollar-sign"></i> <span>USD <i class="fa fa-caret-down"></i> </span></div>
                    <ul class="currency-tooltip">
                        <li><a href="#"><i class="far fa-euro-sign"></i> EUR</a></li>
                        <li><a href="#"><i class="far fa-pound-sign"></i> GBP</a></li>
                        <li><a href="#"><i class="far fa-ruble-sign"></i>RUR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header-top end-->
        <!-- header-inner-->
        <div class="header-inner fl-wrap">
            <div class="container">
                <div class="show-search-button"><span>Search</span> <i class="fas fa-search"></i> </div>
                <div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>
                <div class="header-user-menu">
                    <div class="header-user-name">
                        <span><img src="{{asset('website/assets/images/avatar/1.jpg')}}" alt=""></span>
                        My account
                    </div>
                    <ul>

                       <li><a href="{{url('/MyAccount')}}"> Dashboard </a></li>
                        <li><a href="{{url('/Edit_profile')}}"> Edit profile</a></li>
                        <li><a href="{{url('/MySaved')}}"> Saved</a></li>
                        <li><a href="{{url('/MyAccount')}}">  Bookings  </a></li>
                        <li><a href="{{url('/MyAccount')}}"> Reviews </a></li>
                        <li><a href="{{url('/MyAccount')}}">Log Out</a></li>
                    </ul>
                </div>
                <div class="home-btn"><a href="index.html"><i class="fas fa-home"></i></a></div>
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{url('/Home')}}" class="act-link">Home </a>
                                <!--second level -->

                                <!--second level end-->
                            </li>
                            <li>
                                <a href="{{url('/History')}}">History <!--<i class="fas fa-caret-down"></i>--></a>
                                <!--second level -->
                               <!-- <ul>
                                    <li><a href="listing.html">Column map</a></li>
                                    <li><a href="listing6.html">Column map 2</a></li>
                                    <li><a href="listing2.html">Fullwidth Map</a></li>
                                    <li><a href="listing3.html">Fullwidth Map 2</a></li>
                                    <li><a href="listing4.html">Without Map</a></li>
                                    <li><a href="listing5.html">Without Map 2</a></li>
                                    <li>
                                        <a href="#">Single <i class="fas fa-caret-down"></i></a>

                                        <ul>
                                            <li><a href="listing-single.html">Style 1</a></li>
                                            <li><a href="listing-single2.html">Style 2</a></li>
                                            <li><a href="listing-single3.html">Style 3</a></li>
                                            <li><a href="listing-single4.html">Style 4</a></li>
                                        </ul>

                                    </li>
                                </ul>-->
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="{{url('/Our_Services')}}">Our Services <i class="fas fa-caret-down"></i></a>

                                <ul>

                                    <li>
                                        <a href="{{url('/Service')}}">Service 1 </a>



                                    </li>
                                    <li>
                                        <a href="{{url('/Service')}}">Service 2 </a>



                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{url('/Our_Programs')}}">Our Programs <i class="fas fa-caret-down"></i></a>

                                <ul>

                                    <li>
                                        <a href="#">Programs 1 <i class="fas fa-caret-down"></i> </a>


                                        <ul>
                                            <li><a href="{{url('/Program')}}">Programs 1</a></li>
                                            <li><a href="{{url('/Program')}}">Programs 1</a></li>
                                            <li><a href="{{url('/Program')}}">Programs 1</a></li>

                                        </ul>


                                    </li>


                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/News')}}" >News </a>

                            </li>
                            <li>
                                <a href="{{url('/Gallery')}}" >Gallery </a>

                            </li>
                            <li>
                                <a href="{{url('/Faq')}}" >FAQ </a>

                            </li>
                            <li>
                                <a href="{{url('/Contact')}}">Contact </a>

                            </li>


                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
                <!-- wishlist-wrap-->
                <div class="wishlist-wrap scrollbar-inner novis_wishlist">
                    <div class="box-widget-content">
                        <div class="widget-posts fl-wrap">
                            <ul>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="{{asset('website/assets/images/gal/1.jpg')}}" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Park Central</a>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>
                                        <span class="rooms-price">$80 <strong> /  Awg</strong></span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="{{asset('website/assets/images/gal/1.jpg')}}" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Holiday Home</a>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 PRINCE ST, NY, USA</a></div>
                                        <span class="rooms-price">$50 <strong> /   Awg</strong></span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="{{asset('website/assets/images/gal/1.jpg')}}" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Moonlight Hotel</a>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 BRIGHT ST NEW YORK, USA</a></div>
                                        <span class="rooms-price">$105 <strong> /  Awg</strong></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- wishlist-wrap end-->
            </div>
        </div>
        <!-- header-inner end-->
        <!-- header-search -->
        <div class="header-search vis-search">
            <div class="container">
                <div class="row">
                    <!-- header-search-input-item -->
                    <div class="col-sm-4">
                        <div class="header-search-input-item fl-wrap location autocomplete-container">
                            <label>Program</label>
                            <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                            <input type="text" placeholder="Location" class="autocomplete-input" id="autocompleteid" value=""/>
                            <a href="#"><i class="fal fa-dot-circle"></i></a>
                        </div>
                    </div>
                    <!-- header-search-input-item end -->
                    <!-- header-search-input-item -->
                    <div class="col-sm-3">
                        <div class="header-search-input-item fl-wrap date-parent">
                            <label>Date In-Out </label>
                            <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                            <input type="text" placeholder="When" name="header-search"   value=""/>
                        </div>
                    </div>
                    <!-- header-search-input-item end -->
                    <!-- header-search-input-item -->
                    <div class="col-sm-3">
                        <div class="header-search-input-item fl-wrap">

                            <div class="quantity-item">
                                <label>Adults</label>
                                <div class="quantity">
                                    <input type="number" min="1" max="3" step="1" value="1">
                                </div>
                            </div>
                            <div class="quantity-item">
                                <label>Children</label>
                                <div class="quantity">
                                    <input type="number" min="0" max="3" step="1" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- header-search-input-item end -->
                    <!-- header-search-input-item -->
                    <div class="col-sm-2">
                        <div class="header-search-input-item fl-wrap">
                            <button class="header-search-button" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                        </div>
                    </div>
                    <!-- header-search-input-item end -->
                </div>
            </div>
            <div class="close-header-search"><i class="fal fa-angle-double-up"></i></div>
        </div>
        <!-- header-search  end -->
    </header>
    <!--  header end -->
    <!--  wrapper  -->
