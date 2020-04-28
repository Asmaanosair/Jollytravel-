@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Translation</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!"> Table</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!"> Table</a>
                            </li>
                        </ul>
                    </div>


                    <div class="page-body">





                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Translation</h5>

                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>ENG</th>
                                            <th>ES</th>
                                            <th>FR</th>
                                            <th>IT</th>
                                            <th>DE</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            <form  method="post" action="{{url('/gs_admin/up_home_tran')}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <tr>
                                                    <td>
                                                        Home

                                                    </td>
                                                    @php(
                                                    $h=explode(',',$home->home)
                                                    )

                                                    @foreach($h as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="home[]" data-a-sign="Name">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                     @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        ourhistory

                                                    </td>
                                                    @php(
                                                    $h2=explode(',',$home->ourhistory)
                                                    )

                                                    @foreach($h2 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="ourhistory[]" data-a-sign="Name">
                                                            @if ($errors->has('ourhistory'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('ourhistory') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        our program

                                                    </td>
                                                    @php(
                                                    $h3=explode(',',$home->ourprogram)
                                                    )

                                                    @foreach($h3 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="ourprogram[]" data-a-sign="Name">
                                                            @if ($errors->has('ourprogram'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('ourprogram') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        gallery

                                                    </td>
                                                    @php(
                                                    $h4=explode(',',$home->gallery)
                                                    )

                                                    @foreach($h4 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="gallery[]" data-a-sign="Name">
                                                            @if ($errors->has('gallery'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('gallery') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        currency

                                                    </td>
                                                    @php(
                                                    $h5=explode(',',$home->currency)
                                                    )

                                                    @foreach($h5 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="currency[]" data-a-sign="Name">
                                                            @if ($errors->has('currency'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('currency') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        language

                                                    </td>
                                                    @php(
                                                    $h6=explode(',',$home->language)
                                                    )

                                                    @foreach($h6 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="language[]" data-a-sign="Name">
                                                            @if ($errors->has('language'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('language') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        hot offer

                                                    </td>
                                                    @php(
                                                    $h7=explode(',',$home->hotoffer)
                                                    )

                                                    @foreach($h7 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="hotoffer[]" data-a-sign="Name">
                                                            @if ($errors->has('hotoffer'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('hotoffer') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        usefull to know

                                                    </td>
                                                    @php(
                                                    $h8=explode(',',$home->usefulltoknow)
                                                    )

                                                    @foreach($h8 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="usefulltoknow[]" data-a-sign="Name">
                                                            @if ($errors->has('usefulltoknow'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('usefulltoknow') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>

                                                <tr>
                                                    <td>
                                                        contact

                                                    </td>
                                                    @php(
                                                    $h9=explode(',',$home->contact)
                                                    )

                                                    @foreach($h9 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="contact[]" data-a-sign="Name">
                                                            @if ($errors->has('contact'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        news

                                                    </td>
                                                    @php(
                                                    $h10=explode(',',$home->news)
                                                    )

                                                    @foreach($h10 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="news[]" data-a-sign="Name">
                                                            @if ($errors->has('news'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('news') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        Sightseeing Places

                                                    </td>
                                                    @php(
                                                    $h11=explode(',',$home->sight)
                                                    )

                                                    @foreach($h11 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="sight[]" data-a-sign="Name">
                                                            @if ($errors->has('sight'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('sight') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        Hotel

                                                    </td>
                                                    @php(
                                                    $h12=explode(',',$home->hotel)
                                                    )

                                                    @foreach($h12 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="hotel[]" data-a-sign="Name">
                                                            @if ($errors->has('hotel'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('hotel') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        faq

                                                    </td>
                                                    @php(
                                                    $h13=explode(',',$home->faq)
                                                    )

                                                    @foreach($h13 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="faq[]" data-a-sign="Name">
                                                            @if ($errors->has('faq'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('faq') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        agb

                                                    </td>
                                                    @php(
                                                    $h14=explode(',',$home->agb)
                                                    )

                                                    @foreach($h14 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="agb[]" data-a-sign="Name">
                                                            @if ($errors->has('agb'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('agb') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        search
                                                    </td>
                                                    @php(
                                                    $h15=explode(',',$home->search)
                                                    )

                                                    @foreach($h15 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="search[]" data-a-sign="Name">
                                                            @if ($errors->has('search'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('search') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        persons

                                                    </td>
                                                    @php(
                                                    $h16=explode(',',$home->persons)
                                                    )

                                                    @foreach($h16 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="persons[]" data-a-sign="Name">
                                                            @if ($errors->has('persons'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('persons') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        child

                                                    </td>
                                                    @php(
                                                    $h17=explode(',',$home->child)
                                                    )

                                                    @foreach($h17 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="child[]" data-a-sign="Name">
                                                            @if ($errors->has('child'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('child') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        adult

                                                    </td>
                                                    @php(
                                                    $h18=explode(',',$home->adult)
                                                    )

                                                    @foreach($h18 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="adult[]" data-a-sign="Name">
                                                            @if ($errors->has('adult'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('adult') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        finestprogram

                                                    </td>
                                                    @php(
                                                    $h19=explode(',',$home->finestprogram)
                                                    )

                                                    @foreach($h19 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="finestprogram[]" data-a-sign="Name">
                                                            @if ($errors->has('finestprogram'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('finestprogram') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        selected tours

                                                    </td>
                                                    @php(
                                                    $h20=explode(',',$home->selectedtours)
                                                    )

                                                    @foreach($h20 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="selectedtours[]" data-a-sign="Name">
                                                            @if ($errors->has('selectedtours'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('selectedtours') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        all programs

                                                    </td>
                                                    @php(
                                                    $h21=explode(',',$home->allprograms)
                                                    )

                                                    @foreach($h21 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="allprograms[]" data-a-sign="Name">
                                                            @if ($errors->has('allprograms'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('allprograms') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        view hot offer

                                                    </td>
                                                    @php(
                                                    $h22=explode(',',$home->showhot)
                                                    )

                                                    @foreach($h22 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="showhot[]" data-a-sign="Name">
                                                            @if ($errors->has('showhot'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('showhot') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        choose us

                                                    </td>
                                                    @php(
                                                    $h23=explode(',',$home->chooseus)
                                                    )

                                                    @foreach($h23 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="chooseus[]" data-a-sign="Name">
                                                            @if ($errors->has('chooseus'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('chooseus') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        app

                                                    </td>
                                                    @php(
                                                    $h24=explode(',',$home->app)
                                                    )

                                                    @foreach($h24 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="app[]" data-a-sign="Name">
                                                            @if ($errors->has('app'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('app') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        des1_app

                                                    </td>
                                                    @php(
                                                    $h25=explode(',',$home->des1_app)
                                                    )

                                                    @foreach($h25 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="des1_app[]" data-a-sign="Name">
                                                            @if ($errors->has('des1_app'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('des1_app') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        des2_app

                                                    </td>
                                                    @php(
                                                    $h26=explode(',',$home->des2_app)
                                                    )

                                                    @foreach($h26 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="des2_app[]" data-a-sign="Name">
                                                            @if ($errors->has('des2_app'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('des2_app') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        android

                                                    </td>
                                                    @php(
                                                    $h27=explode(',',$home->android)
                                                    )

                                                    @foreach($h27 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="android[]" data-a-sign="Name">
                                                            @if ($errors->has('android'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('android') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        iphone

                                                    </td>
                                                    @php(
                                                    $h28=explode(',',$home->iphone)
                                                    )

                                                    @foreach($h28 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="iphone[]" data-a-sign="Name">
                                                            @if ($errors->has('iphone'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('iphone') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        Testimonail

                                                    </td>
                                                    @php(
                                                    $h29=explode(',',$home->testimonail)
                                                    )

                                                    @foreach($h29 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="testimonail[]" data-a-sign="Name">
                                                            @if ($errors->has('testimonail'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('testimonail') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        Subscrib

                                                    </td>
                                                    @php(
                                                    $h30=explode(',',$home->subscrib)
                                                    )

                                                    @foreach($h30 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="subscrib[]" data-a-sign="Name">
                                                            @if ($errors->has('subscrib'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('subscrib') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        des_sub

                                                    </td>
                                                    @php(
                                                    $h31=explode(',',$home->des_sub)
                                                    )

                                                    @foreach($h31 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="des_sub[]" data-a-sign="Name">
                                                            @if ($errors->has('des_sub'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_sub') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        email_sub

                                                    </td>
                                                    @php(
                                                    $h32=explode(',',$home->email_sub)
                                                    )

                                                    @foreach($h32 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="email_sub[]" data-a-sign="Name">
                                                            @if ($errors->has('email_sub'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('email_sub') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        partners

                                                    </td>
                                                    @php(
                                                    $h33=explode(',',$home->partners)
                                                    )

                                                    @foreach($h33 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="partners[]" data-a-sign="Name">
                                                            @if ($errors->has('partners'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('partners') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        findus

                                                    </td>
                                                    @php(
                                                    $h34=explode(',',$home->findus)
                                                    )

                                                    @foreach($h34 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="findus[]" data-a-sign="Name">
                                                            @if ($errors->has('findus'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('findus') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        about

                                                    </td>
                                                    @php(
                                                    $h35=explode(',',$home->about)
                                                    )

                                                    @foreach($h35 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="about[]" data-a-sign="Name">
                                                            @if ($errors->has('about'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('about') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        email

                                                    </td>
                                                    @php(
                                                    $h36=explode(',',$home->email)
                                                    )

                                                    @foreach($h36 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="email[]" data-a-sign="Name">
                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        phone

                                                    </td>
                                                    @php(
                                                    $h37=explode(',',$home->phone)
                                                    )

                                                    @foreach($h37 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="phone[]" data-a-sign="Name">
                                                            @if ($errors->has('phone'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        address

                                                    </td>
                                                    @php(
                                                    $h38=explode(',',$home->address)
                                                    )

                                                    @foreach($h38 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="address[]" data-a-sign="Name">
                                                            @if ($errors->has('address'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        callnow

                                                    </td>
                                                    @php(
                                                    $h39=explode(',',$home->callnow)
                                                    )

                                                    @foreach($h39 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="callnow[]" data-a-sign="Name">
                                                            @if ($errors->has('callnow'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('callnow') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>

                                                <tr>
                                                    <td>
                                                        getin

                                                    </td>
                                                    @php(
                                                    $h40=explode(',',$home->getin)
                                                    )

                                                    @foreach($h40 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="getin[]" data-a-sign="Name">
                                                            @if ($errors->has('getin'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('getin') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>
                                                        indvidual request

                                                    </td>
                                                    @php(
                                                    $h41=explode(',',$home->indvidualrequest)
                                                    )

                                                    @foreach($h41 as $row)
                                                        <td>
                                                            <input type="text" class="form-control autonumber" value="{{$row}}"  name="indvidualrequest[]" data-a-sign="Name">
                                                            @if ($errors->has('indvidualrequest'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('indvidualrequest') }}</strong>
                                        </span>
                                                            @endif

                                                        </td>
                                                    @endforeach

                                                </tr>



                                                <tr>
                                                    <td>
                                                        <button type="submit" class="btn btn-success form-control"> Save</button>

                                                    </td>


                                                </tr>

                                            </form>


                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>


            <div id="styleSelector"></div>
        </div>


    </div>
    </div>




@stop