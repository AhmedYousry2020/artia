@extends('layout.master')
@section('content')
<section id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('http://127.0.0.1:8000/assets/images/doctor-checking-patient-before-rhinoplasty-side-view.jpg'); background-size: cover; background-position: center; height: 100vh;">
        <div class="carousel-caption d-flex justify-content-center align-items-center">
          <div>
            <h1 class="display-5 animate__animated animate__delay-1s animate__fadeInUp">{{get_setting('header_title_'.getLocale())}}</h1>
            <h2 class="display-2 animate__animated animate__delay-1s animate__fadeInUp"> {{get_setting('header_title_2_'.getLocale())}}</h2>
            <p class="display-7 animate__animated animate__delay-1s animate__fadeInUp">{{get_setting('header_title_3_'.getLocale())}}</p>
            <a class="btn btn-secondary display-7 animate__animated animate__delay-1s animate__fadeInUp" href="/reservation">
              <span class="mobi-mbri mobi-mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span> {{get_setting('header_button_text_'.getLocale())}}
            </a>
          </div>
        </div>
      </div>
      <!-- Add more carousel items here -->
      <div class="carousel-item" style="background-image: url('http://127.0.0.1:8000/assets/images/img-staff-photo-cropped-10082020-scaled-e1615341302352-2000x970.jpg'); background-size: cover; background-position: center; height: 100vh;">
        <div class="carousel-caption d-flex justify-content-center align-items-center">
          <div>

          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('http://127.0.0.1:8000/assets/images/doctor-checking-patient-before-rhinoplasty-side-view.jpg'); background-size: cover; background-position: center; height: 100vh;">
        <div class="carousel-caption d-flex justify-content-center align-items-center">
          <div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </section>


<section data-bs-version="5.1" class="info3 cid-tZj04vorYy" id="info3-2">




    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(255, 255, 255);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style align-center mb-4 display-2">
                             {{get_setting('about_us_title_'.getLocale())}}</h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">
                            {{get_setting('about_us_body_'.getLocale())}}
                        </p>
                            <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="page3.html">{{__('general.View More')}}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="team1 cid-tZj0Pk7gKn" dir="rtl" id="team1-4">



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    {{get_setting('services_'.getLocale())}}<br><br></h3>

            </div>
            @foreach($services as $service)
            <div class="col-sm-6 col-lg-4">
                <div class="card-wrap">
                    <div class="image-wrap">
                        <img src="{{asset('uploads/'.$service->image)}}" alt="dental">
                    </div>
                    <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5"><strong> {{$service->{'name_'.getLocale()} }}</strong></h5>

                        <p class="card-text mbr-fonts-style align-center display-7">
                            {{$service->{'description_'.getLocale()} }}
                        </p>
                        <div class="mbr-section-btn card-btn align-center"><a class="btn btn-secondary display-4" href="/service/{{$service->{'name_'.getLocale()} }}"> {{__('general.View More')}}</a></div>
                    </div>
                </div>
            </div>

            @endforeach



        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider3 mbr-embla cid-tZo5hBrDOO mbr-parallax-background" dir="rtl
" id="slider3-7">



    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(250, 250, 250);">
    </div>
    <div class="position-relative text-center">
        <div class="col-12">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">{{get_setting('doctors_'.getLocale())}}</h3>
            <p class="mbr-section-subtitle mbr-fonts-style align-center mb-5 display-4">
                {{__('general.doctors_title')}}</p>
        </div>
        <div class="embla" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container">
                <div class="embla__container">
                    @foreach($doctors as $doctor)
                    <div class="embla__slide slider-image item active" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="{{asset('uploads/'.$doctor->image)}}" alt="Mobirise Website Builder">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">{{$doctor->{'name_'.getLocale()} }}</h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    {{$doctor->{'speciality_'.getLocale()} }}
                                </h6>
                                <p class="card-text mbr-fonts-style align-center display-4">
                                    {{$doctor->{'description_'.getLocale()} }}


                                </p>

                                <div class="mbr-section-btn card-btn align-center"><a class="btn btn-secondary display-7" href="/doctor/{{$doctor->{'name_'.getLocale()} }}">تعـــرف اكثر</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="info2 cid-u7zPhqX4uq" id="info2-18">




    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-6">
                <div class="wrapper">
                    <h3 class="mbr-section-title mb-4 mbr-fonts-style display-5"><strong>{{__('general.Join the Arteh family')}}</strong></h3>
                    <p class="mbr-text mb-4 mbr-fonts-style display-4" dir="rtl">{{__('general.join us body')}}</p>
                    <div class="mbr-section-btn"><a class="btn btn-white display-4" href="/join-us">{{__('general.join')}}</a></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                        <strong>{{__('general.Your opinion matters to us')}}</strong></h3>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4" dir="rtl">
                        {{__('general.survey body')}}
                    </p>
                    <div class="mbr-section-btn"><a class="btn btn-white display-4" href="/survey">{{__('general.survey')}}</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-tZxDRGksLR" dir="rtl" id="form5-r">

    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">{{get_setting('contact_us_'.getLocale())}}</h3>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="/contact-us" method="post" class="mbr-form form-with-styler" data-form-title="Form Name">
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
                            <div class="col-md-6 col-sm-12 form-group mb-3" data-for="url">
                                <input type="text" name="email" placeholder="{{__('general.Your email')}}" data-form-field="url" class="form-control @error('email') is-invalid @enderror" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-6 col-sm-12 form-group mb-3" data-for="url">
                                <select name="section" class="form-control custom-select @error('section') is-invalid @enderror" >
                                    <option value="">{{__('general.select')}}</option>
                                    <option value="{{__('general.suggestion')}}">{{__('general.suggestion')}}</option>
                                    <option value="{{__('general.enquiries')}}">{{__('general.enquiries')}}</option>
                                    <option value="{{__('general.sales')}}">{{__('general.sales')}}</option>


                                </select>
                                @error('section')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="message" placeholder="{{__('general.Your message')}}" data-form-field="textarea" class="form-control @error('message') is-invalid @enderror"></textarea>
                            @error('message')
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
