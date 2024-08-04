@extends('layout.master')
@section('content')


<section data-bs-version="5.1" class="header1 cid-ubsYLpLlUC mbr-parallax-background" id="header1-23">

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-4">

                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2"><br>  {{__('general.survey') }} <br>
<div><br></div></h2>


            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-ubsZ8iiInp" dir="rtl" id="content4-26">




    <div class="container service">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="/join-us" method="post" class="mbr-form form-with-styler" data-form-title="Form Name" enctype="multipart/form-data">
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
                        <div class="col-md-6 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="{{__('general.Your name')}}" data-form-field="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 form-group mb-3" data-for="email">
                            <input type="text" name="mobile" placeholder="{{__('general.Your mobile')}}" data-form-field="email" class="form-control @error('mobile') is-invalid @enderror">
                            @error('mobile')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                        </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="url">
                                <input type="text" name="email" placeholder="{{__('general.Your email')}}" data-form-field="url" class="form-control @error('email') is-invalid @enderror" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="url">
                                  <input type="file" class="form-control" name="cv" aria-describedby="inputGroupFileAddon01">

                            </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-secondary display-4">{{__('general.SEND MESSAGE')}}</button></div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>

@endsection
