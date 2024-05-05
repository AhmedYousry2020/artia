<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <style>
    body{margin-top:20px;}
.mail-seccess {
    text-align: center;
	background: #fff;
	border-top: 1px solid #eee;
}
img{
    width: 50%
}
.mail-seccess .success-inner {
	display: inline-block;
}
.link{

justify-content:start;
}
.mail-seccess .success-inner h1 {
	font-size: 100px;
	text-shadow: 3px 5px 2px #3333;
	color: #006DFE;
	font-weight: 700;
}
.mail-seccess .success-inner h1 span {
	display: block;
	font-size: 25px;
	color: #333;
	font-weight: 600;
	text-shadow: none;
	margin-top: 20px;
}
.mail-seccess .success-inner p {
	padding: 20px 15px;
}
.mail-seccess .success-inner .btn{
	color:#fff;
}
   </style>

</head>
<body class="bg-light">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <section class="mail-seccess section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <!-- Error Inner -->
                    <div class="success-inner">
                        <h1><img src="{{app()->getLocale() == 'en' ? asset('assets/img/logo en blue.png') : asset('assets/img/logo ar blue.png')}}"></h1>

                    </div>

                    <!--/ End Error Inner -->
                </div>
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__('general.name')}}</th>
                            <th scope="col">{{__('general.email')}}</th>
                            <th scope="col">{{__('general.phone')}}</th>
                            <th scope="col">{{__('general.subject')}}</th>
                            <th scope="col">{{__('general.message')}} </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>{{$details['name']}}</td>
                            <td>{{$details['email']}}</td>
                            <td>{{$details['mobile']}}</td>
                            <td>{{$details['subject']}}</td>
                            <td>{{$details['message']}}</td>
                          </tr>

                        </tbody>
                      </table>

                </div>
                <div class="row link">
                    <a href="{{URL('/')}}"><h3>raus.com</h3></a>

                </div>
            </div>
        </div>
    </section>
  </body>
</html>
