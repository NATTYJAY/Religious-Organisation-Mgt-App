<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/azia/template/dashboard-nine.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 07:34:29 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130582519-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130582519-1');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <meta id="token" name="_token" content="{{csrf_token()}}">
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">
   <!--  -->


    <title>GHOR FEEDBACK</title>

    <!-- vendor css -->
    <link href="{{asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.cs')}}s" rel="stylesheet">
    <link href="{{asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/lib/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/azia.css')}}">

</head>
<body class="az-body az-body-sidebar az-body-dashboard-nine">

<div class="az-sidebar az-sidebar-sticky az-sidebar-indigo-dark">
    <div class="az-sidebar-header">
        <a href="/admin" class="az-logo">G<span>HO</span>R</a>
    </div><!-- az-sidebar-header -->
    <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="{{asset('assets/img/img12.jpg')}}" alt=""></div>
        <div class="media-body">
            <h6>Administrator</h6>
            {{--<span>Premium Member</span>--}}
        </div><!-- media-body -->
    </div><!-- az-sidebar-loggedin -->