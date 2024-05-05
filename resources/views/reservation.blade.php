@extends('layout.master')
@section('content')

<section data-bs-version="5.1" class="header1 cid-tZiPZMdmjj mbr-parallax-background" id="header1-1">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5"><br><br>{{get_setting('header_title_'.getLocale())}}</h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2">
                    {{get_setting('header_title_2_'.getLocale())}}</h2>
                <p class="mbr-text mbr-fonts-style display-7">
                    {{get_setting('header_title_3_'.getLocale())}}</p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-7" href="/reservation"><span class="mobi-mbri mobi-mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>  {{get_setting('header_button_text_'.getLocale())}}</a></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-tZxDRGksLR" dir="rtl" id="form5-r">

    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"> احجز معنا</h3>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="/reserve" method="post" class="mbr-form form-with-styler" data-form-title="Form Name">
                    @csrf

                    <div class="row">
                        @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {!! Session::get('success') !!}
                                    </div>
                    @endif
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="{{__('general.Your name')}}" data-form-field="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="text" name="mobile" placeholder="{{__('general.Your mobile')}}" data-form-field="email" class="form-control @error('mobile') is-invalid @enderror">
                            @error('mobile')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-secondary display-4">{{__('general.SEND MESSAGE')}}</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
