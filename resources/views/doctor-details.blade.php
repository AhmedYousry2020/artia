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
<section data-bs-version="5.1" class="team1 cid-tZxTQ8iipN" id="team1-x">




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>قسم جراحة التجميل</strong></h3>

            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card-wrap">
                    <div class="image-wrap">
                        <img src="{{asset('storage/uploads/'.$doctor->image)}}" alt="profile">
                    </div>
                    <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                            <strong> {{$doctor->{'name_'.getLocale()} }}</strong></h5>
                        <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-7">
                            <strong>{{$doctor->{'speciality_'.getLocale()} }}</strong></h6>



                    </div>
                </div>
            </div>






        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content13 cid-tZxO7iWuuH" dir="rtl" id="content13-t">




    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <ul class="list mbr-fonts-style display-7">
                            <li><strong>نبذة عن الطبيب:
</strong></li>
<li>{{$doctor->{'description_'.getLocale()} }}</li>
<li>
</li><li><strong>المؤهلات التعليمية:
</strong></li>
<li>
    {{$doctor->{'educational_qualifications_'.getLocale()} }}
</li>
<li><strong>الخبرة المهنية:
</strong></li>
<li>
    {{$doctor->{'professional_experience_'.getLocale()} }}
</li>

                        </ul>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="list mbr-fonts-style display-7">
                            <li><strong>لشهادات والاعتمادات:
</strong></li>
<li>    {{$doctor->{'certificate_'.getLocale()} }}

</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="video3 cid-tZxRoJXZfg" dir="rtl" id="video3-u">



    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>فيديوهات الطبيب</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-0 mt-2 display-7">شاهد اكثر للتعرف اكثر على الطبيب و على توصياتة و مقترحاتة</h5>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-12 col-md-6 video-block">
                <div class="video-wrapper">
                {!! $video !!}
                </div>
                <p class="mbr-text pt-2 mbr-fonts-style display-4">
                    شرح مبسط عن محتوى الفيديو</p>
            </div>

        </div>


    </div>
</section>

<section data-bs-version="5.1" class="info2 cid-tZxTdvBinC" id="info2-w">




    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-6">
                <div class="wrapper">


                    <div class="mbr-section-btn"><a class="btn btn-white display-4" href="index.html">إتصــــــــال هاتفي</a></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="wrapper">


                    <div class="mbr-section-btn"><a class="btn btn-white display-4" href="booking.html">احجز استشارتك الان </a></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
