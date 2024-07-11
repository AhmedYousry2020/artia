@extends('layout.master')
@section('content')

<section data-bs-version="5.1" class="header1 cid-tZxs9zeKnR mbr-parallax-background" id="header1-b">




    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-4">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5"><br><br>تعرف على الخبراء</h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2">
                        أطبائنا هم فخرنا</h2>


            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery3 cid-tZxtrD5JMT" dir="rtl" id="gallery3-h">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>{{get_setting('doctors_'.getLocale())}}</strong></h4>

        </div>
        <div class="row mt-4">
            @foreach($doctors as $doctor)
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{asset('uploads/'.$doctor->image)}}" alt="doc">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong> {{$doctor->{'name_'.getLocale()} }}</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                            {{$doctor->{'speciality_'.getLocale()} }}</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">  {{$doctor->{'description_'.getLocale()} }} </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/doctor/{{$doctor->{'name_'.getLocale()} }}" class="btn item-btn btn-secondary display-7" target="_blank">تعرف على المزيد</a></div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


@endsection
