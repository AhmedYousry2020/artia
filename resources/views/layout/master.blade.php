
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.svg" type="image/x-icon">
  <meta name="description" content="">


  <title>Home</title>
  @include('layout.styles')

</head>
<body>

  <section data-bs-version="5.1" class="menu menu3 cid-tZiHvcMIIa" once="menu" dir="rtl" id="menu3-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg" >
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="./">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="ArteWebsite" style="height: 3.8rem;">
                    </a>
                </span>

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{url('about-us')}}">{{get_setting('about_us_'.getLocale())}}</a></li>
                    <li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle show display-4" href="{{url('./')}}#team1-4" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">{{get_setting('services_'.getLocale())}}</a><div class="dropdown-menu show" aria-labelledby="dropdown-281" data-bs-popper="none">
                        @foreach($services as $service)
                        <a class="text-black text-primary dropdown-item display-4" href="{{url('service')}}/{{$service->{'name_'.getLocale()} }}">{{$service->{'name_'.getLocale()} }}</a>
                        @endforeach
                    </div></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{url('doctors')}}#slider3-7">{{get_setting('doctors_'.getLocale())}}</a>
                    </li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{url('consultations')}}">{{get_setting('consultation_'.getLocale())}}</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{url('blogs')}}"> {{get_setting('blogs_'.getLocale())}}</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="./#form5-r">{{get_setting('contact_us_'.getLocale())}}</a></li>
                    <li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle show display-4" href="" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">{{__('general.English')}}</a><div class="dropdown-menu show" aria-labelledby="dropdown-281" data-bs-popper="none"><a class="text-black text-primary dropdown-item display-4" href="/change-language/en"> {{__('general.English')}}</a><a class="text-black text-primary dropdown-item display-4" href="/change-language/ar">{{__('general.Arabic')}}<br></a></div></li>
                </ul>

                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-secondary display-4" href="{{url('reservation')}}">
                          {{get_setting('header_button_text_'.getLocale())}}</a></div>
            </div>
        </div>
    </nav>
</section>

@yield('content')


<section data-bs-version="5.1" class="footer4 cid-tZo7OW2OH6" once="footers" dir="rtl" id="footer4-8">




    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(210, 181, 144);"></div>
    <div class="container">
        <div class="row mbr-white">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-12 col-12">
                    <a href="./">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>{{get_setting('footer_title_'.getLocale())}}</strong></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">{{get_setting('footer_description_'.getLocale())}}</p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                    <strong>تابعونا على</strong></h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="{{get_setting('facebook_link')}}" target="_blank">
                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="{{get_setting('twitter_link')}}" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="{{get_setting('instgram_link')}}" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="./" target="_blank">
                            <span class="mbr-iconfont socicon-snapchat socicon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong> {{get_setting('help_central_title_'.getLocale())}}</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><a href="faqs.html" class="text-black">الأسئلة الشائعة</a></li><li class="mbr-text item-wrap"><a href="support.html" class="text-black">الدعـــــم الفني</a></li><li class="mbr-text item-wrap"><a href="survey.html" class="text-black">جـــودة الخدمة</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>زورونا في ارتيه</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">{{get_setting('address')}}</li><li class="mbr-text item-wrap"> {{get_setting('phone_number')}}</li><li class="mbr-text item-wrap">{{get_setting('email')}}</li>
                </ul>
            </div>

        </div>
    </div>
</section><section><a href="https://mobiri.se"></a><a href="https://mobiri.se"></a></section><script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>  <script src="{{asset('assets/parallax/jarallax.js')}}"></script>  <script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>  <script src="{{asset('assets/ytplayer/index.js')}}"></script>  <script src="{{asset('assets/dropdown/js/navbar-dropdown.js')}}"></script>  <script src="{{asset('assets/embla/embla.min.js')}}"></script>  <script src="{{asset('assets/embla/script.js')}}"></script>  <script src="{{asset('assets/theme/js/script.js')}}"></script>  <script src="{{asset('assets/formoid/formoid.min.js')}}"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
