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
                        <img src="{{asset('/storage/uploads/'.$service->image)}}" alt="dental">
                    </div>
                    <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5"><strong> {{$service->{'name_'.getLocale()} }}</strong></h5>

                        <p class="card-text mbr-fonts-style align-center display-7">
                            {{$service->{'description_'.getLocale()} }}
                        </p>
                        <div class="mbr-section-btn card-btn align-center"><a class="btn btn-secondary display-4" href="dental.html"> {{__('general.View More')}}</a></div>
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
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">أطبــــــــائنا</h3>
            <p class="mbr-section-subtitle mbr-fonts-style align-center mb-5 display-4">
                نخبة من امهر الاطباء في مجالات التجميل و الجلدية و الاسنان نضع خبراتهم بين ايديكم</p>
        </div>
        <div class="embla" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container">
                <div class="embla__container">
                    <div class="embla__slide slider-image item active" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/istockphoto-1327592506-390x390.jpg" alt="Mobirise Website Builder">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">أسم الطبيب</h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    التخصص
                                </h6>
                                <p class="card-text mbr-fonts-style align-center display-4">
                                    نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب</p>

                                <div class="mbr-section-btn card-btn align-center"><a class="btn btn-secondary display-7" href="page1.html#header1-b">تعـــرف اكثر</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/istockphoto-1327592506-390x390.jpg" alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">أسم الطبيب</h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    التخصص
                                </h6>
                                <p class="card-text mbr-fonts-style align-center display-4">
                                    نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب
                                </p>

                                <div class="mbr-section-btn card-btn align-center"><a class="btn btn-secondary display-7" href="page1.html#header1-b">تعـــرف اكثر</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/istockphoto-1327592506-390x390.jpg" alt="Mobirise Website Builder" data-slide-to="2" data-bs-slide-to="2">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">أسم الطبيب</h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    التخصص
                                </h6>
                                <p class="card-text mbr-fonts-style align-center display-7">نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب</p>

                                <div class="mbr-section-btn card-btn align-center"><a class="btn btn-secondary display-7" href="page1.html#header1-b">تعـــرف اكثر</a></div>
                            </div>
                        </div>
                    </div><div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="card-wrap">
                            <div class="item-wrapper position-relative">
                                <div class="image-wrap">
                                    <img src="assets/images/istockphoto-1327592506-390x390.jpg" alt="Mobirise Website Builder" data-slide-to="3" data-bs-slide-to="3">
                                </div>
                            </div>
                            <div class="content-wrap">
                                <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">أسم الطبيب</h5>
                                <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                    التخصص</h6>
                                <p class="card-text mbr-fonts-style align-center display-4">
                                    نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب، نبذة مختصرة عن الطبيب
                                </p>

                                <div class="mbr-section-btn card-btn align-center"><a class="btn btn-secondary display-7" href="page1.html#header1-b">تعـــرف اكثر</a></div>
                            </div>
                        </div>
                    </div>
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
                    <h3 class="mbr-section-title mb-4 mbr-fonts-style display-5"><strong>إنظم الى اسرة ارتيه</strong></h3>
                    <p class="mbr-text mb-4 mbr-fonts-style display-4" dir="rtl">
                        تتشرّف مستشفى ارتيه بدعوتكم للانضمام إلى فريقنا المتميّز في خدمة الرعاية الصحية. نحن في مستشفى ارتيه نؤمن بأهمية بناء فريق قوي ومتحد، حيث يسعى كل فرد إلى تحقيق الرؤية والأهداف المشتركة. <br>إذا كنت تبحث عن فرصة للتطوّر والتقدم في مجال الطب والخدمات الصحية، فإننا نرحب بك لتكون جزءًا من عائلتنا في مستشفى ارتيه. انضم إلينا اليوم واستمتع ببيئة عمل محفّزة وفرص تطوير مهنيّة متميّزة.</p>
                    <div class="mbr-section-btn"><a class="btn btn-white display-4" href="hiring.html">إستعراض الوظائف</a></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                        <strong>رأيـــــــــــك يهمنا</strong></h3>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4" dir="rtl">
                        نحن في مستشفى ارتيه نولي أهمية كبيرة لرأي عملائنا الكرام، ونسعى دائمًا لتقديم أفضل خدمة ممكنة. ندعوكم للمشاركة في استبيان جودة الخدمة لتحسين تجربتكم معنا. آراؤكم تسهم في تطوير الخدمات بجودة أعلى، ونثق تمامًا في قدرتكم على تقديم المقترحات لتحقيق أهدافنا. <br><br>شكرًا على وقتكم وجهودكم، نعمل بجدية على تنفيذ توصياتكم لتجربة أفضل لمرضانا.</p>
                    <div class="mbr-section-btn"><a class="btn btn-white display-4" href="survey.html">الإستبيـــــــــــــان</a></div>
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
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="text" name="email" placeholder="{{__('general.Your email')}}" data-form-field="url" class="form-control @error('email') is-invalid @enderror" >
                            @error('email')
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
