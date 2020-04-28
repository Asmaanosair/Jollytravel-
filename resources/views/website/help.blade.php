
@extends('website.layouts.website')

@section('content')

   
    
     <div id="wrapper">
        <!-- content-->
        <div class="content">

            <section id="sec2">
                <div class="container">
                    <div class="section-title">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2>FAQ </h2>
                        <span class="listing-rating card-popup-rainingvis" data-starrating2="5"></span>
                        
                        {!!$faq->des_en!!}

                    </div>
                                      

                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad home-grid">



                </div>
                <!-- portfolio end -->

            </section>
            <!-- section end -->

        </div>
        <!-- content end-->
    </div>



@stop
