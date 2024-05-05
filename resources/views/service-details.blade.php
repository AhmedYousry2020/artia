@extends('layout.master')
@section('content')


<section data-bs-version="5.1" class="header1 cid-ubsYLpLlUC mbr-parallax-background" id="header1-23">




    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-4">

                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2"><br>  {{$service->{'name_'.getLocale()} }}: <br>ما تحتاج إلى معرفته
<div><br></div></h2>


            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-ubsZ8iiInp" dir="rtl" id="content4-26">




    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-12">

                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5">{{$service->{'name_'.getLocale()} }}: كل ما تحتاج إلى معرفته<br>
<div>
</div><div>{{$service->{'description_'.getLocale()} }}</div><br><div>
</div></h4>

            </div>
        </div>
    </div>
</section>

@endsection
