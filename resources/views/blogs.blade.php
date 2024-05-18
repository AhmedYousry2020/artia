@extends('layout.master')
@section('content')

<section data-bs-version="5.1" class="header1 cid-ubsFdvXeQL mbr-parallax-background" id="header1-1y">




    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-4">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5"><br><br>الثقافة الطبية</h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2">
                        مقالات طبية من اجل وعي اكبر</h2>


            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="clients2 cid-ubsFiWsDau" dir="rtl" id="clients2-21">





    <div class="container">
        <div class="row justify-content-center">
           @foreach($blogs as $blog)
            <div class="card col-12 col-md-6 col-lg-4 blog" >
                <div class="card-wrapper">
                    <div class="img-wrapper">
                        <img src="{{asset('storage/uploads/'.$blog->image)}}" alt="q">
                    </div>
                    <div class="card-box align-center">

                        <h5 class="card-title mbr-fonts-style mb-3 display-5">  {{$blog->{'title_'.getLocale()} }}</h5>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            {{$blog->{'body_'.getLocale()} }} </p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-primary-outline display-4" href="/blog/{{$blog->{'title_'.getLocale()} }}">اقراء المزيد</a></div>
                    </div>
                </div>
            </div>
           @endforeach

        </div>
    </div>
</section>

@endsection
