<footer class="main-footer">
    <!--subscribe-wrap-->
    <div class="subscribe-wrap color-bg  fl-wrap">
        <div class="container">
            <div class="sp-bg"> </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="subscribe-header">
                        <h3>@lang('home.sub')</h3>

                        <p>@lang('home.sub_detail').</p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="footer-widget fl-wrap">
                        <div class="subscribe-widget fl-wrap">
                            <div class="subcribe-form">
                                <form id="subscribe">
                                    <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="@lang('home.enter')" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fas fa-rss-square"></i> @lang('home.sub')</button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bg"></div>
    </div>
    <!--subscribe-wrap end -->
    <!--footer-inner-->
    <div class="footer-inner">
        <div class="container">
            <!--footer-fw-widget-->
            <div class="footer-fw-widget fl-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-carousel-title">
                            Our partners
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!--footer-carousel-wrap-->
                        <div class="footer-carousel-wrap fl-wrap">
                            <div class="footer-carousel fl-wrap">
                                <!--footer-carousel-item-->
                                @foreach($part as $row)
                                <div class="footer-carousel-item">
                                    <a href="{{$row->link}}"><img src="{{asset('/img/'.$row->img)}}" alt=""></a>
                                </div>
                                @endforeach

                            </div>
                            <div class="fc-cont  fc-cont-prev"><i class="fal fa-angle-left"></i></div>
                            <div class="fc-cont  fc-cont-next"><i class="fal fa-angle-right"></i></div>
                        </div>
                        <!--footer-carousel-wrap end-->
                    </div>
                </div>
            </div>
            <!--footer-fw-widget end-->
            <div class="row">
                <!--footer-widget -->
                <div class="col-md-12">
                    <div class="footer-widget fl-wrap">
                        <h3>About Us</h3>
                        <div class="footer-contacts-widget fl-wrap">
                            <p>{{$about->s_des_en}} </p>
                            <ul  class="footer-contacts fl-wrap">
                                <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">{{$con->email}}</a></li>
                                <li> <span><i class="fal fa-map-marker-alt"></i> Adress :</span><a href="#" target="_blank">{{$con->address_en}}</a></li>
                                <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">{{$con->phone}}</a></li>
                            </ul>
                            <div class="footer-social">
                                <span>Find us : </span>
                                <ul>
                                    <li><a href="{{$con->fb}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$con->tw}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$con->insta}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <!--<li><a href="{{$con->vk}}" target="_blank"><i class="fab fa-vk"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--footer-widget end-->
                <!--footer-widget -->
                <!--<div class="col-md-4">-->
                <!--    <div class="footer-widget fl-wrap">-->
                <!--        <h3>Our Last News</h3>-->
                <!--        <div class="widget-posts fl-wrap">-->
                <!--            <ul>-->
                <!--                @foreach($news5 as $row)-->
                <!--                <li class="clearfix">-->

                <!--                    <a href="#"  class="widget-posts-img"><img src="{{asset('/img/'.$row->m_img)}}" class="respimg" alt=""></a>-->
                <!--                    <div class="widget-posts-descr">-->
                <!--                        <a href="#" title="">{{$row->name_en}}</a>-->
                <!--                        @php( $d=strtotime($row->created_at))-->
                <!--                        <span class="widget-posts-date"> {{ date("d M Y", $d)}} </span>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                @endforeach-->

                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-4">-->
                <!--    <div class="footer-widget fl-wrap">-->
                <!--        <h3>Our Instagram  </h3>-->
                <!--        <div id="footer-twiit" class="fl-wrap"></div>-->
                <!--        <a href="{{$con->insta}}" class="twitter-link" target="_blank">Follow</a>-->
                <!--    </div>-->
                <!--</div>-->
                <!--footer-widget end-->
                <!--footer-widget -->
            </div>
            <div class="clearfix"></div>
            <!--footer-widget -->
            <div class="footer-widget">
                <div class="row">
                    <div class="col-md-4"><a class="contact-btn color-bg" href="{{url('/Contact/'.Config::get('app.locale'))}}">Get In Touch<i class="fal fa-envelope"></i></a></div>
                    <div class="col-md-8">
                        <div class="customer-support-widget fl-wrap">
                            <h4>@lang('home.costum') </h4>
                            <a href="tel:{{$con->phone}}" class="cs-mumber">{{$con->phone}}</a>
                            <a href="tel:{{$con->phone}}" class="cs-mumber-button color2-bg">Call Now <i class="far fa-phone-volume"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer-widget end -->
        </div>
    </div>
    <!--footer-inner end -->
    <div class="footer-bg">
    </div>
    <!--sub-footer-->
    <div class="sub-footer">
        <div class="container">
            <div class="copyright"> &#169; Jolleys Travel World.  All rights reserved.</div>
            <br>
            
             <div class="copyright">  Powered By: PERFECT CODE - New Cairo - Egypt</div>
            
           
            <div class="subfooter-lang">
                <div class="subfooter-show-lang"><span>Eng</span><i class="fa fa-caret-up"></i></div>
                <ul class="subfooter-lang-tooltip">
                    <li><a href="de">Deutsch</a></li>
                    <li><a href="it">Italian</a></li>
                    <li><a href="fr">French</a></li>
                    <li><a href="es">Spanish</a></li>
                    <li><a href="en">English</a></li>
                </ul>
            </div>
            <div class="subfooter-nav">
                <ul>
                   <!-- <li><a href="#">Terms of use</a></li>-->
                    <!--<li><a href="{{url('/Polocy')}}">Privacy Policy</a></li>-->
                    <!--<li><a href="{{url('/News')}}">News</a></li>-->
                </ul>
            </div>
        </div>
    </div>
    <!--sub-footer end -->
</footer>
<!--footer end -->
<!--map-modal -->
<div class="map-modal-wrap">
    <div class="map-modal-wrap-overlay"></div>
    <div class="map-modal-item">
        <div class="map-modal-container fl-wrap">
            <div class="map-modal fl-wrap">
                <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
            </div>
            <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
            <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
            <div class="map-modal-close"><i class="fal fa-times"></i></div>
        </div>
    </div>
</div>
<!--map-modal end -->
<!--register form -->
<div class="main-register-wrap modal">
    <div class="reg-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
            <ul class="tabs-menu">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
            </ul>
            <!--tabs -->
            <div id="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content">
                        <h3>Sign In <span>Jolleys<strong>Travel</strong></span></h3>
                        <div class="custom-form">
                            <form method="post"  action="{{url('/User_Login')}}" name="registerform">
                                {{csrf_field()}}
                                <label>Username or Email Address <span>*</span> </label>
                                <input name="email" type="text"   onClick="this.select()" value="">
                                <label >Password <span>*</span> </label>
                                <input name="password" type="password"   onClick="this.select()" value="" >
                                <button type="submit"  class="log-submit-btn color-bg"><span>Log In</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <h3>Sign Up <span>Jolleys<strong>Travel</strong></span></h3>
                            <div class="custom-form">
                                   <form method="post" action="{{url('/Use_register')}}"   name="registerform" class="main-register-form" id="main-register-form2">
                                    {{csrf_field()}}
                                    <label >Full Name <span>*</span> </label>
                                    <input name="name" type="text"   onClick="this.select()" value="">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    <label>Email Address <span>*</span></label>
                                    <input name="email" type="text"  onClick="this.select()" value="">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <label >Password <span>*</span></label>
                                    <input name="password" type="password"   onClick="this.select()" value="" >
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <button type="submit"     class="log-submit-btn color-bg"  ><span>Register</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                </div>
                <!--tabs end -->
                <div class="log-separator fl-wrap"><span>or</span></div>
                <div class="soc-log fl-wrap">
                    <p>For faster login or register use your social account.</p>
                    <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->
<a class="to-top"><i class="fas fa-caret-up"></i></a>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{asset('website/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/assets/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('website/assets/js/scripts.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE&libraries=places&callback=initAutocomplete"></script>
<script type="text/javascript" src="{{asset('website/assets/js/map-single.js')}}"></script>
</body>
</html>