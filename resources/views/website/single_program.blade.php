@extends('website.layouts.website')

@section('content')
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--  section  -->
            <section class="list-single-hero" data-scrollax-parent="true" id="sec1">
                @if($service->m_img==null)
                <div class="bg par-elem "  data-bg="{{asset('website/assets/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                @else
                  <div class="bg par-elem "  data-bg="{{asset('img/'.$service->m_img)}}" data-scrollax="properties: { translateY: '30%' }"></div>
                @endif
                <div class="list-single-hero-title fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="listing-rating-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                </div>
                                <h2><span>{{$service->name_en}}</span></h2>
                                <div class="list-single-header-contacts fl-wrap">
                                    <ul>
                                        <li><i class="far fa-phone"></i><a  href="#">{{$con->phone}}</a></li>
                                        <li><i class="far fa-map-marker-alt"></i><a  href="#">{{$con->address_en}}</a></li>
                                        <li><i class="far fa-envelope"></i><a  href="#">{{$con->email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--<div class="col-md-5">-->
                                <!--  list-single-hero-details-->
                            <!--    <div class="list-single-hero-details fl-wrap">-->
                                    <!--  list-single-hero-rating-->
                            <!--        <div class="list-single-hero-rating">-->
                            <!--            <div class="rate-class-name">-->
                            <!--                <div class="score"><strong>Very Good</strong>2 Reviews </div>-->
                            <!--                <span>4.5</span>-->
                            <!--            </div>-->
                                        <!-- list-single-hero-rating-list-->
                            <!--            <div class="list-single-hero-rating-list">-->
                                            <!-- rate item-->
                            <!--                <div class="rate-item fl-wrap">-->
                            <!--                    <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>-->
                            <!--                    <div class="rate-item-bg" data-percent="100%">-->
                            <!--                        <div class="rate-item-line color-bg"></div>-->
                            <!--                    </div>-->
                            <!--                    <div class="rate-item-percent">5.0</div>-->
                            <!--                </div>-->
                                            <!-- rate item end-->
                                            <!-- rate item-->
                            <!--                <div class="rate-item fl-wrap">-->
                            <!--                    <div class="rate-item-title fl-wrap"><span>Comfort</span></div>-->
                            <!--                    <div class="rate-item-bg" data-percent="90%">-->
                            <!--                        <div class="rate-item-line color-bg"></div>-->
                            <!--                    </div>-->
                            <!--                    <div class="rate-item-percent">5.0</div>-->
                            <!--                </div>-->
                                            <!-- rate item end-->
                                            <!-- rate item-->
                            <!--                <div class="rate-item fl-wrap">-->
                            <!--                    <div class="rate-item-title fl-wrap"><span>Staf</span></div>-->
                            <!--                    <div class="rate-item-bg" data-percent="80%">-->
                            <!--                        <div class="rate-item-line color-bg"></div>-->
                            <!--                    </div>-->
                            <!--                    <div class="rate-item-percent">4.0</div>-->
                            <!--                </div>-->
                                            <!-- rate item end-->
                                            <!-- rate item-->
                            <!--                <div class="rate-item fl-wrap">-->
                            <!--                    <div class="rate-item-title fl-wrap"><span>Facilities</span></div>-->
                            <!--                    <div class="rate-item-bg" data-percent="90%">-->
                            <!--                        <div class="rate-item-line color-bg"></div>-->
                            <!--                    </div>-->
                            <!--                    <div class="rate-item-percent">4.5</div>-->
                            <!--                </div>-->
                                            <!-- rate item end-->
                            <!--            </div>-->
                                        <!-- list-single-hero-rating-list end-->
                            <!--        </div>-->
                                    <!--  list-single-hero-rating  end-->
                            <!--        <div class="clearfix"></div>-->
                                    <!-- list-single-hero-links-->
                                    <!--<div class="list-single-hero-links">-->
                                    <!--    @if(Auth::guard('client')->check())-->
                                    <!--    <a class="lisd-link " href="{{url('Custom/'.$service->id.'/'.Config::get('app.locale'))}}"><i class="fal fa-bookmark"></i> Book Now</a>-->
                                    <!--    @else-->
                                       
                                    <!--     <a class="lisd-link  modal-open " href="#"><i class="fal fa-bookmark"></i> Book Now</a>-->
                                    <!--        @endif-->
                                    <!--    <a class="custom-scroll-link lisd-link" href="#sec6"><i class="fal fa-comment-alt-check"></i> Add review</a>-->
                                    <!--</div>-->
                                    <!--  list-single-hero-links end-->
                            <!--    </div>-->
                                <!--  list-single-hero-details  end-->
                            <!--</div>-->
                        </div>
                        <div class="breadcrumbs-hero-buttom fl-wrap">
                            <!--<div class="breadcrumbs"><a href="#">Home-->
                            <!--</a><a href="#">Listings</a><a href="#">New York</a><span>Listing Single</span></div>-->
                            <!--<div class="list-single-hero-price">AWG/NIGHT<span>$ 320</span></div>-->
                        </div>
                    </div>
                </div>
            </section>
            <!--  section  end-->
            <!--  section  -->
            <section class="grey-blue-bg small-padding scroll-nav-container" id="sec2">
                <!--  scroll-nav-wrapper  -->
                <div class="scroll-nav-wrapper fl-wrap">
                    <!--<div class="hidden-map-container fl-wrap">
                        <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                        <div class="map-container">
                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                        </div>
                    </div>-->
                    <div class="clearfix"></div>
                    <div class="container">
                        <nav class="scroll-nav scroll-init">
                            <ul>
                                <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                <li><a href="#sec2">Details</a></li>
                                <li><a href="#sec4">Programs</a></li>
                                <li><a href="#sec5">Reviews</a></li>
                            </ul>
                        </nav>
                        <!--  <a href="#" class="show-hidden-map">  <span>On The Map</span> <i class="fal fa-map-marked-alt"></i></a>-->
                    </div>
                </div>
                <!--  scroll-nav-wrapper end  -->
                <!--   container  -->
                <div class="container">
                    <!--   row  -->
                    <div class="row">
                        <!--   datails -->
                        <div class="col-md-8">
                            <div class="list-single-main-container ">
                                <!-- fixed-scroll-column  -->
                                <!--<div class="fixed-scroll-column">-->
                                <!--    <div class="fixed-scroll-column-item fl-wrap">-->
                                <!--        <div class="showshare sfcs fc-button"><i class="far fa-share-alt"></i><span>Share </span></div>-->
                                <!--        <div class="share-holder fixed-scroll-column-share-container">-->
                                <!--            <div class="share-container  isShare"></div>-->
                                <!--        </div>-->
                                <!--        <a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Add review </span></a>-->
                                <!--        <a class="fc-button" href="#"><i class="far fa-heart"></i> <span>Save</span></a>-->
                                <!--        @if(Auth::guard('client')->check())-->
                                      
                                <!--         <a class="fc-button" href="{{url('Custom/'.$service->id.'/'.Config::get('app.locale'))}}"><i class="far fa-bookmark"></i> <span> Book Now </span></a>-->
                                <!--        @else-->
                                       
                                     
                                <!--           <a class="fc-button modal-open" href="#"><i class="far fa-bookmark"></i> <span> Book Now </span></a>-->
                                <!--            @endif-->
                                       
                                <!--    </div>-->
                                <!--</div>-->
                                <!-- fixed-scroll-column end   -->
                                
                                <div class="list-single-main-media fl-wrap" id="sec1">
                                            <div class="single-slider-wrapper fl-wrap">
                                                <div class="slider-for fl-wrap"  >
                                                    <div class="slick-slide-item"><img src="{{asset('img/'.$service->m_img)}}" alt=""></div>
                                                      @php(
                                        $img=\App\program_img::where('sub_program_id',$service->id)->get()
                                        )
                                        @if(count($img)==0)
                                          @else
                                        
                                        @foreach($img as $image)
                                                    <div class="slick-slide-item"><img src="{{asset('img/'.$image->img)}}" alt=""></div>
                                                      @endforeach
                                        @endif
                                                  
                                                </div>
                                                <div class="swiper-button-prev sw-btn"><i class="fal fa-long-arrow-left"></i></div>
                                                <div class="swiper-button-next sw-btn"><i class="fal fa-long-arrow-right"></i></div>
                                            </div>
                                            <div class="single-slider-wrapper fl-wrap">
                                                <div class="slider-nav fl-wrap">
                                                      @php(
                                        $img2=\App\program_img::where('sub_program_id',$service->id)->get()
                                        )
                                        @if(count($img2)==0)
                                          @else
                                        
                                        @foreach($img2 as $image2)
                                                <div class="slick-slide-item"><img src="{{asset('img/'.$image2->img)}}" alt=""></div>
                                                            @endforeach
                                        @endif
                                                   
                                                </div>
                                            </div>
                                        </div>
                       

                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>About {{$service->name_en}} </h3>
                                    </div>{!! $service->des_en !!} .</p>
                                    @if($service->video==null)
                                    @else
                                        <a href="{{$service->video}}" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a>
                                    @endif
                                </div>

                                <!--  <div class="accordion mar-top">
                                      <a class="toggle act-accordion" href="#"> Details option   <span></span></a>
                                      <div class="accordion-inner visible">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                      </div>
                                      <a class="toggle" href="#"> Details option 2  <span></span></a>
                                      <div class="accordion-inner">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                      </div>
                                      <a class="toggle" href="#"> Details option 3  <span></span></a>
                                      <div class="accordion-inner">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                      </div>
                                  </div>-->
                                <!-- accordion end -->
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec4">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>your favorite tour program
</h3>
                                    </div>
                                    <!--   rooms-container -->
                                    <div class="rooms-container fl-wrap">
                                        <!--  rooms-item -->
                                        
                                          @php(
                                        $avilable1=\App\sub_service::where('sub_program_id',$service->id)->paginate(3)
                                        )
                                        @foreach($avilable1 as $row)
                                            <div class="rooms-item fl-wrap">
                                                <div class="rooms-media">
                                                    <img src="{{asset('img/'.$row->m_img)}}" alt="">
                                                    <!--<div class="dynamic-gal more-photos-button" data-dynamicPath="[{'src': '{{asset("website/assets/images/gal/1.jpg")}}'}, {'src': '{{asset("website/assets/images/gal/1.jpg")}}'},{'src': '{{asset("website/assets/images/gal/1.jpg")}}'}]">  View Gallery <span>3 photos</span> <i class="far fa-long-arrow-right"></i></div>-->
                                                </div>
                                                <div class="rooms-details">
                                                    <div class="rooms-details-header fl-wrap">
                                                        <!--<span class="rooms-price">${{$row->price}} <strong> / person</strong></span>-->
                                                        <h3>{{$row->name_en}}  </h3>

                                                    </div>
                                                    <p>{{$row->s_des_en}}.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <!-- <ul>
                                                             <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                             <li><i class="fal fa-bath"></i><span>1 Bathroom</span></li>
                                                             <li><i class="fal fa-snowflake"></i><span>Air conditioner</span></li>
                                                             <li><i class="fal fa-tv"></i><span> Tv Inside</span></li>
                                                             <li><i class="fas fa-concierge-bell"></i><span>Breakfast</span></li>
                                                         </ul>-->
                                                        <a href="{{url('/Service/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}" class="btn color-bg ">Details<i class="fas fa-caret-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                    <!--  rooms-item end -->

                                    </div>
                                    <!--   rooms-container end -->
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec5">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Item Reviews -  <span> 2 </span></h3>
                                    </div>
                                    <!--reviews-score-wrap-->
                                    <div class="reviews-score-wrap fl-wrap">
                                        <div class="review-score-total">
                                                    <span>
                                                    4.5
                                                    <strong>Very Good</strong>
                                                    </span>
                                            <a href="#" class="color2-bg">Add Review</a>
                                        </div>
                                        <div class="review-score-detail">
                                            <!-- review-score-detail-list-->
                                            <div class="review-score-detail-list">
                                                <!-- rate item-->
                                                <div class="rate-item fl-wrap">
                                                    <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>
                                                    <div class="rate-item-bg" data-percent="100%">
                                                        <div class="rate-item-line color-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">5.0</div>
                                                </div>
                                                <!-- rate item end-->
                                                <!-- rate item-->
                                                <div class="rate-item fl-wrap">
                                                    <div class="rate-item-title fl-wrap"><span>Comfort</span></div>
                                                    <div class="rate-item-bg" data-percent="90%">
                                                        <div class="rate-item-line color-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">5.0</div>
                                                </div>
                                                <!-- rate item end-->
                                                <!-- rate item-->
                                                <div class="rate-item fl-wrap">
                                                    <div class="rate-item-title fl-wrap"><span>Staf</span></div>
                                                    <div class="rate-item-bg" data-percent="80%">
                                                        <div class="rate-item-line color-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">4.0</div>
                                                </div>
                                                <!-- rate item end-->
                                                <!-- rate item-->
                                                <div class="rate-item fl-wrap">
                                                    <div class="rate-item-title fl-wrap"><span>Facilities</span></div>
                                                    <div class="rate-item-bg" data-percent="90%">
                                                        <div class="rate-item-line color-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">4.5</div>
                                                </div>
                                                <!-- rate item end-->
                                            </div>
                                            <!-- review-score-detail-list end-->
                                        </div>
                                    </div>
                                    <!-- reviews-score-wrap end -->
                                    <!--<div class="reviews-comments-wrap">-->
                                        <!-- reviews-comments-item -->
                                    <!--    <div class="reviews-comments-item">-->
                                    <!--        <div class="review-comments-avatar">-->
                                    <!--            <img src="{{asset('website/assets/images/gal/1.jpg')}}" alt="">-->
                                    <!--        </div>-->
                                    <!--        <div class="reviews-comments-item-text">-->
                                    <!--            <h4><a href="#">Liza Rose</a></h4>-->
                                    <!--            <div class="review-score-user">-->
                                    <!--                <span>4.4</span>-->
                                    <!--                <strong>Good</strong>-->
                                    <!--            </div>-->
                                    <!--            <div class="clearfix"></div>-->
                                    <!--            <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>-->
                                    <!--            <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 April 2018</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                        <!--reviews-comments-item end-->
                                        <!-- reviews-comments-item -->
                                    <!--    <div class="reviews-comments-item">-->
                                    <!--        <div class="review-comments-avatar">-->
                                    <!--            <img src="{{asset('website/assets/images/avatar/1.jpg')}}" alt="">-->
                                    <!--        </div>-->
                                    <!--        <div class="reviews-comments-item-text">-->
                                    <!--            <h4><a href="#">Adam Koncy</a></h4>-->
                                    <!--            <div class="review-score-user">-->
                                    <!--                <span>4.7</span>-->
                                    <!--                <strong>Very Good</strong>-->
                                    <!--            </div>-->
                                    <!--            <div class="clearfix"></div>-->
                                    <!--            <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>-->
                                    <!--            <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                        <!--reviews-comments-item end-->
                                    <!--</div>-->
                                             <!-- agile-comments -->
                                    <div class="fb-comments" data-href="{{url('Program/'.$service->name_en)}}"
                                         data-numposts="5"></div>
                                            <!-- //agile-comments -->
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec6">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Add Review</h3>
                                    </div>
                                    <!-- Add Review Box -->
                                    <div id="add-review" class="add-review-box">
                                        <!-- Review Comment -->
                                        <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
                                            <fieldset>
                                                <div class="review-score-form fl-wrap">
                                                    <div class="review-range-container">
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Cleanliness</div>
                                                            <div class="range-slider-wrap ">
                                                                <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="4">
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Comfort</div>
                                                            <div class="range-slider-wrap ">
                                                                <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1"  value="1">
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Staf</div>
                                                            <div class="range-slider-wrap ">
                                                                <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="5" >
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Facilities</div>
                                                            <div class="range-slider-wrap">
                                                                <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="3">
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                    </div>
                                                    <div class="review-total">
                                                        <span><input type="text" name="rg_total"  data-form="AVG({rgcl})" value="0"></span>
                                                        <strong>Your Score</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><i class="fal fa-user"></i></label>
                                                        <input type="text" placeholder="Your Name *" value=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><i class="fal fa-envelope"></i>  </label>
                                                        <input type="text" placeholder="Email Address*" value=""/>
                                                    </div>
                                                </div>
                                                <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                            </fieldset>
                                            <button class="btn  big-btn flat-btn float-btn color2-bg" style="margin-top:30px">Submit Review <i class="fal fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                    <!-- Add Review Box / End -->
                                </div>
                                <!-- list-single-main-item end -->
                            </div>
                        </div>
                        <!--   datails end  -->
                        <!--   sidebar  -->
                        <div class="col-md-4">
                            <!--box-widget-wrap -->
                            <div class="box-widget-wrap">
                                <!--box-widget-item -->
                           
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <!--<div class="box-widget-item fl-wrap">-->
                                <!--    <div class="box-widget counter-widget" data-countDate="09/12/2019">-->
                                <!--        <div class="banner-wdget fl-wrap">-->
                                <!--            <div class="overlay"></div>-->
                                <!--            <div class="bg"  data-bg="{{asset('website/assets/images/bg/1.jpg')}}"></div>-->
                                <!--            <div class="banner-wdget-content fl-wrap">-->
                                <!--                <h4>Get a discount <span>20%</span> when ordering a room from three days.</h4>-->
                                <!--                <div class="countdown fl-wrap">-->
                                <!--                    <div class="countdown-item">-->
                                <!--                        <span class="days rot">10</span>-->
                                <!--                        <p>days</p>-->
                                <!--                    </div>-->
                                <!--                    <div class="countdown-item">-->
                                <!--                        <span class="hours rot">20</span>-->
                                <!--                        <p>hours </p>-->
                                <!--                    </div>-->
                                <!--                    <div class="countdown-item">-->
                                <!--                        <span class="minutes rot">4</span>-->
                                <!--                        <p>minutes </p>-->
                                <!--                    </div>-->
                                <!--                    <div class="countdown-item">-->
                                <!--                        <span class="seconds rot">5</span>-->
                                <!--                        <p>seconds</p>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--                <a href="#">Book Now</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div class="box-widget">
                                        <div class="box-widget-content">
                                            <div class="box-widget-item-header">
                                                <h3> Contact Information</h3>
                                            </div>
                                            <div class="box-widget-list">
                                                <ul>
                                                    <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">{{$con->address_en}}</a></li>
                                                    <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">{{$con->phone}}</a></li>
                                                    <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">{{$con->email}}</a></li>
                                                    <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">{{$con->web}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="list-widget-social">
                                                <ul>
                                                    <li><a href="{{$con->fb}}" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="{{$con->tw}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <!--<li><a href="#" target="_blank" ><i class="fab fa-vk"></i></a></li>-->
                                                    <li><a href="{{$con->insta}}" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <!--<div class="box-widget-item fl-wrap">-->
                                <!--    <div class="box-widget">-->
                                <!--        <div class="box-widget-content">-->
                                <!--            <div class="box-widget-item-header">-->
                                <!--                <h3> Price Range </h3>-->
                                <!--            </div>-->
                                <!--            <div class="claim-price-wdget fl-wrap">-->
                                <!--                <div class="claim-price-wdget-content fl-wrap">-->
                                <!--                    <div class="pricerange fl-wrap"><span>Price : </span> 81$ - 320$ </div>-->
                                <!--                    <div class="claim-widget-link fl-wrap"><span>Own or work here?</span><a href="#">Claim Now!</a></div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div id="weather-widget" class="gradient-bg" data-city="New York" data-country="USA"></div>
                                </div>

                                <!--<div class="box-widget-item fl-wrap">-->
                                <!--    <div class="box-widget">-->
                                <!--        <div class="box-widget-content">-->
                                <!--            <div class="box-widget-item-header">-->
                                <!--                <h3>Hosted By</h3>-->
                                <!--            </div>-->
                                <!--            <div class="box-widget-author fl-wrap">-->
                                <!--                <div class="box-widget-author-title fl-wrap">-->
                                <!--                    <div class="box-widget-author-title-img">-->

                                <!--                        <img src="{{asset('website/assets/images/avatar/1.jpg')}}" alt="">-->
                                <!--                    </div>-->
                                <!--                    <a href="user-single.html">Jessie Manrty</a>-->
                                <!--                    <span>4 Places Hosted</span>-->
                                <!--                </div>-->
                                                <!--  <a href="author-single.html" class="btn flat-btn color-bg   float-btn image-popup">View Profile<i class="fal fa-user-alt"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div class="box-widget">
                                        <div class="box-widget-content">
                                            <div class="box-widget-item-header">
                                                <h3>Available Programs</h3>
                                            </div>
                                            <div class="widget-posts fl-wrap">
                                                <ul>
                                                    
                                          @php(
                                        $avilable=\App\sub_program::where('program_id',$service->program_id)->paginate(3)
                                        )
                                        @foreach($avilable as $row)
                                                    <li class="clearfix">
                                                        <a href="{{url('/Program/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}"  class="widget-posts-img"><img src="{{asset('img/'.$row->m_img)}}" class="respimg" alt=""></a>
                                                        <div class="widget-posts-descr">
                                                            <a href="#" title="">{{$row->name_en}}</a>
                                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                            <div class="geodir-category-location fl-wrap"><a href="{{url('/Program/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}"><i class="fas fa-map-marker-alt"></i>{{$row->city}}</a></div>
                                                            <!--<span class="rooms-price">$80 <strong> /  Awg</strong></span>-->
                                                        </div>
                                                    </li>
                                                   @endforeach 
                                                    
                                                    <!--<li class="clearfix">-->
                                                    <!--    <a href="#"  class="widget-posts-img"><img src="{{asset('website/assets/images/gal/1.jpg')}}" class="respimg" alt=""></a>-->
                                                    <!--    <div class="widget-posts-descr">-->
                                                    <!--        <a href="#" title="">Holiday Home</a>-->
                                                    <!--        <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>-->
                                                    <!--        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 PRINCE ST, NY, USA</a></div>-->
                                                    <!--        <span class="rooms-price">$50 <strong> /   Awg</strong></span>-->
                                                    <!--    </div>-->
                                                    <!--</li>-->
                                                    <!--<li class="clearfix">-->
                                                    <!--    <a href="#"  class="widget-posts-img"><img src="{{asset('website/assets/images/gal/1.jpg')}}" class="respimg" alt=""></a>-->
                                                    <!--    <div class="widget-posts-descr">-->
                                                    <!--        <a href="#" title="">Moonlight Hotel</a>-->
                                                    <!--        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>-->
                                                    <!--        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 BRIGHT ST NEW YORK, USA</a></div>-->
                                                    <!--        <span class="rooms-price">$105 <strong> /  Awg</strong></span>-->
                                                    <!--    </div>-->
                                                    <!--</li>-->
                                                </ul>
                                                <!--<a class="widget-posts-link" href="#">See All Listing <i class="fal fa-long-arrow-right"></i> </a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->
                            </div>
                            <!--box-widget-wrap end -->
                        </div>
                        <!--   sidebar end  -->
                    </div>
                    <!--   row end  -->
                </div>
                <!--   container  end  -->
            </section>
            <!--  section  end-->
        </div>
        <!-- content end-->
        <div class="limit-box fl-wrap"></div>
    </div>




@stop
