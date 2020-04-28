@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
        <!-- content-->
        <div class="content">

            <section id="sec2">
                <div class="container">
                    <div class="section-title">
                        <div class="section-title-separator"><span></span></div>
                        <h2>Our Gallery </h2>
                        <span class="section-separator"></span>

                    </div>
                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad home-grid">
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                                <img  src="{{asset('website/assets/images/city/1.jpg')}}"   alt="">
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">title 1</a></h3>
                                    <div class="weather-grid"   data-grcity="Rome"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->

                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                                <img  src="{{asset('website/assets/images/city/1.jpg')}}"   alt="">
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">title 3</a></h3>
                                    <div class="weather-grid"   data-grcity="London"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                                <img  src="{{asset('website/assets/images/city/1.jpg')}}"   alt="">
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">title 4</a></h3>
                                    <div class="weather-grid"   data-grcity="Dubai"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                                <img  src="{{asset('website/assets/images/city/1.jpg')}}"   alt="">
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">title 4</a></h3>
                                    <div class="weather-grid"   data-grcity="Dubai"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                                <img  src="{{asset('website/assets/images/city/1.jpg')}}"   alt="">
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">title 4</a></h3>
                                    <div class="weather-grid"   data-grcity="Dubai"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                                <img  src="{{asset('website/assets/images/city/1.jpg')}}"   alt="">
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">title 5 </a></h3>
                                    <div class="weather-grid"   data-grcity="New York"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                </div>
                <!-- portfolio end -->

            </section>
            <!-- section end -->

        </div>
        <!-- content end-->
    </div>



@stop
