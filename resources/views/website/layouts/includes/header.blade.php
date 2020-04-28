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
    

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</head>
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
                    <a href="{{url('/Home/'.Config::get('app.locale'))}}"><img src="{{asset('img/jolleys travel final logo-02 (2).png')}}"  style="height:94px" alt=""></a>
                </div>

                <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>@lang("home.sign_in")</div>
                <div class="lang-wrap">
                    <div class="show-lang"> <span>Language</span><i class="fa fa-caret-down"></i></div>
                    <ul class="lang-tooltip green-bg">
                
                        <li><a href="de"><img src="{{asset('website/assets/images/lan/4.png')}}" alt=""> De</a></li>
                        <li><a href="it"><img src="{{asset('website/assets/images/lan/5.png')}}" alt=""> It</a></li>
                        <li><a href="fr"><img src="{{asset('website/assets/images/lan/2.png')}}" alt=""> Fr</a></li>
                        <li><a href="es"><img src="{{asset('website/assets/images/lan/3.png')}}" alt=""> Es</a></li>
                        <li><a href="en"><img src="{{asset('website/assets/images/lan/1.png')}}" alt=""> English</a></li>
                    </ul>
                </div>
                <div class="currency-wrap">
                    <div class="show-currency-tooltip"> <span>Currency <i class="fa fa-caret-down"></i> </span></div>
                    <ul class="currency-tooltip">
                          <li><a href="{{url("currency/usa")}}"><i class="far fa-dollar-sign"></i> USD</a></li>
                        <li><a href="{{url("currency/ure")}}"><i class="far fa-euro-sign"></i> EUR</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- header-top end-->
        <!-- header-inner-->
        <div class="header-inner fl-wrap">
            <div class="container">
                @if(Auth::guard('client')->check())
                <div class="show-search-button"><span>@lang("home.search")</span> <i class="fas fa-search"></i> </div>
                <div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div>

                <div class="header-user-menu">
                    <div class="header-user-name">
                        <span><img src="{{asset('website/assets/images/Kristine Bubble 14.03.2017.png')}}" alt=""></span>
                        My account
                    </div>
                    <ul>


                       <li><a href="{{url('/MyAccount/'.Config::get('app.locale'))}}"> @lang("home.dashboard") </a></li>
                        <li><a href="{{url('/Edit_profile/'.Config::get('app.locale'))}}"> @lang("home.edit_profile")</a></li>
                        <!--<li><a href="{{url('/MySaved')}}"> Saved</a></li>-->
                        <!--<li><a href="{{url('/MyAccount')}}">  Bookings  </a></li>-->
                        <!--<li><a href="{{url('/MyAccount')}}"> Reviews </a></li>-->
                        <li><a href="{{url('/User_Logout')}}"> @lang("home.log_out")</a></li>
                    </ul>
                </div>
                @else
                    @endif



                <div class="home-btn"><a href="{{url('/Home/'.Config::get('app.locale'))}}"><i class="fas fa-home"></i></a></div>
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
                                <a href="{{url('/Home/'.Config::get('app.locale'))}}" class="act-link">@lang("home.home") </a>
                                <!--second level -->

                                <!--second level end-->
                            </li>
                            <li>
                                
                                <a href="{{url('/History/'.Config::get('app.locale'))}}"> @lang("home.our_history") <!--<i class="fas fa-caret-down"></i>--></a>
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
                                <a href="{{url('/Selected_Tours/'.Config::get('app.locale'))}}"> @lang("home.selected_tours") <i class="fas fa-caret-down"></i></a>

                                <ul>
                                    @foreach($prog as $main)

                                    <li>

                                        <a href="{{url('/Our_Programs/'.str_replace(' ', '_',$main->name_en).'/'.Config::get('app.locale'))}}">
                                        @if(Config::get('app.locale') == 'en')
                                                                          {{$main->name_en}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                                {{$main->name_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$main->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                                {{$main->name_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                                {{$main->name_fr}}
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$main->name_it}}
                                                                                @else
                                                                                 {{$main->name_en}}
                                                                        @endif
                                        
                                        
                                        
                                        
                                        
                                        
                                        </a>
                                        @php(
                                       $sub=\App\sub_program::where('program_id',$main->id)->where('active',1)->get()

                                        )
                                        @if(count($sub)==0)

                                        @else
                                        <ul>

                                                @foreach($sub as $sun)
                                            <li><a href="{{url('/Program/'.str_replace(' ', '_',$sun->name_en).'/'.Config::get('app.locale'))}}">
                                                
                                                
                                                  @if(Config::get('app.locale') == 'en')
                                                                          {{$sun->name_en}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                                {{$sun->name_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$sun->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                                {{$sun->name_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                                {{$sun->name_fr}}
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$sun->name_it}}
                                                                                @else
                                                                                 {{$sun->name_en}}
                                                                        @endif
                                                
                                                
                                               </a>
                                               
                                               
                                               
                                                @php(
                                       $sub2=\App\sub_service::where('sub_program_id',$sun->id)->get()

                                        )
                                                @if(count($sub2)==0)

                                        @else
                                               
                                                 <ul>

                                                @foreach($sub2 as $sun2)
                                            <li><a href="{{url('/Service/'.str_replace(' ', '_',$sun2->name_en).'/'.Config::get('app.locale'))}}">
                                                
                                                
                                                  @if(Config::get('app.locale') == 'en')
                                                                          {{$sun2->name_en}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                                {{$sun2->name_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$sun2->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                                {{$sun2->name_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                                {{$sun2->name_fr}}
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$sun2->name_it}}
                                                                                @else
                                                                                 {{$sun2->name_en}}
                                                                        @endif
                                                
                                                
                                               </a></li>

                                                @endforeach


                                        </ul>
                                        @endif
                                   
                                   
                                   
                                   
                                               
                                               
                                               
                                               
                                               </li>

                                                @endforeach


                                        </ul>
                                        @endif


                                    </li>
                                        @endforeach


                                </ul>
                            </li>
                             <li>
                                <a href="{{url('/Hot_Offers/'.Config::get('app.locale'))}}" >@lang("home.hot_offers") </a>

                            </li>
                            <!--<li>-->
                            <!--    <a href="{{url('/News')}}" >News </a>-->

                            <!--</li>-->
                            <li>
                                <a href="{{url('/Gallery/'.Config::get('app.locale'))}}" >@lang("home.gallery") </a>

                            </li>
                             <li>
                                <a href="#">@lang("home.useful_to_know") <i class="fas fa-caret-down"></i></a>

                                <ul>
                                       <li>
                                <a href="{{url('/Place/'.Config::get('app.locale'))}}" >@lang("home.sightseeing_places") </a>

                            </li>
                               <li>
                                <a href="{{url('/Hotel/'.Config::get('app.locale'))}}" >@lang("home.hotel_selection") </a>

                            </li>
                               <li>
                                <a href="{{url('/Faq/'.Config::get('app.locale'))}}" > @lang("home.faq")</a>

                            </li>
                                  
                                   <li>
                                <a href="{{url('/AGB/'.Config::get('app.locale'))}}" >@lang("home.agb") </a>

                            </li>
                                 

                                </ul>
                            </li>
                           
                            <li>
                                <a href="{{url('/Contact/'.Config::get('app.locale'))}}">@lang("home.contact")  </a>

                            </li>


                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
                <!-- wishlist-wrap-->
                <!--
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
                    -->
                <!-- wishlist-wrap end-->
            </div>
        </div>
        <!-- header-inner end-->
        <!-- header-search -->
            <form action="{{url('/Main_Search/'.Config::get('app.locale'))}}" method="get">
                            {{csrf_field()}}
        
        <div class="header-search vis-search">
            <div class="container">
                <div class="row">
                    <!-- header-search-input-item -->
                 
                    <div class="col-sm-7">
                        <div class="header-search-input-item fl-wrap location autocomplete-container">
                            <label>Search</label>
                            <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                            <input type="text" placeholder="Program or City"  name="prog"   value=""/>
                            <a href="#"><i class="fal fa-dot-circle"></i></a>
                        </div>
                    </div>
                    
                    
                    <!-- header-search-input-item end -->
                    <!-- header-search-input-item -->
                    <!--
                    <div class="col-sm-3">
                        <div class="header-search-input-item fl-wrap date-parent">
                            <label>Date In-Out </label>
                            <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                            <input type="text" placeholder="When" name="header-search"   value=""/>
                        </div>
                    </div>-->
                    <!-- header-search-input-item end -->
                    <!-- header-search-input-item -->
                  <!--  <div class="col-sm-3">
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
                    </div> -->

                    <!-- header-search-input-item end -->
                    <!-- header-search-input-item -->
                    <div class="col-sm-2">
                        <div class="header-search-input-item fl-wrap">
                            <button class="header-search-button" onclick="window.location.href='listing.html'">@lang("home.search")  <i class="far fa-search"></i></button>
                        </div>
                    </div>
                    <!-- header-search-input-item end -->
                </div>
            </div>
            <div class="close-header-search"><i class="fal fa-angle-double-up"></i></div>
        </div>
        
        
          </form>
        <!-- header-search  end -->
    </header>
    <!--  header end -->
    <!--  wrapper  -->

