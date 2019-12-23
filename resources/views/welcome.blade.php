<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Page Title -->
      <title>GHOR Feedback System</title>
      <!-- Favicon -->
      <link rel="icon" href="favicon.ico" />
      <!---IcoFont Icon font-->
      <link rel="stylesheet" href="{{asset('assetshome/css/icofont.min.css')}}">
      <!-- Bootsrap CSS -->
      <link rel="stylesheet" href="{{asset('assetshome/css/bootstrap.min.css')}}">
      <!-- Animate CSS -->
      <link href="{{asset('assetshome/css/animate.min.css')}}" rel="stylesheet">
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="{{asset('assetshome/css/swiper.min.css')}}">
      <!-- Theme Style -->
      <link rel="stylesheet" href="{{asset('assetshome/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('assetshome/css/gredients/purple.css')}}" id="color-switch"> <!-- Default color version -->
      <link rel="stylesheet" href="{{asset('assetshome/css/typography/poppins-quciksland.css')}}" id="font-switch"> <!-- Default typography version -->
     
      <link rel="stylesheet" href="{{asset('assetshome/demo/demo.css')}}">

<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('6h5tuhy2swrh');
</script>

   </head>
   <body data-spy="scroll" data-target="#navbarCodeply" data-offset="70">
      <!-- ========== Preloader Start ========== -->
      <!-- <div class="loader-wrapper">
         <div class="loader"></div>
      </div> -->
      <!-- ========== Preloader End ========== -->
      <!-- ========== Header Nav Start ========== -->
      <header id="home">
         <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
            <div class="container">
               <a class="navbar-brand" href="index-2.html">
                  <img src="{{asset('assetshome/imgs/logo.png')}}" alt="GHOR F-System"> <!-- Add your logo here -->
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
               <i class="icofont-navigation-menu"></i>
               </button>
                @if (Route::has('login'))
                    @auth
                    <div class="collapse navbar-collapse" id="navbarCodeply">
                      <ul class="nav navbar-nav ml-auto">
                         <li>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                         </li>
                      </ul>
                    </div>
                    
                 @else
                    <div class="collapse navbar-collapse" id="navbarCodeply">
                      <ul class="nav navbar-nav ml-auto">
                         <li><a class="nav-link" href="{{ route('login') }}">Login</a> </li>
                      </ul>
                    </div>
                    @endauth
                @endif

               
            </div>
         </nav>
      </header>

      <!-- ========== Header Nav End ========== -->
      <!-- ========== Hero Start ========== -->
      <section class="hero-area circle-wrap">
         <div class="circle x1"></div>
         <div class="circle x2"></div>
         <div class="circle x3"></div>
         <div class="circle x4"></div>
         <div class="circle x5"></div>
         <div class="circle x6"></div>
         <div class="circle x7"></div>
         <div class="circle x8"></div>
         <div class="circle x9"></div>
         <div class="circle x10"></div>
         <!-- End circle -->
         <br>
         <div class="container">
            <div class="row full-height align-items-center">
               <div class="col-md-6 p-100px-t p-50px-b md-p-10px-b">
                     @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <!-- <a href="{{ url('/guest') }}">Visit Dashboard</a> -->
                <h2 class="text-capitalize m-25px-b">Welcome {{ strtoupper(Auth::user()->name) }}.</h2>
                <p class="m-25px-b">God's House Of Refuge (GHOR) Feedback System is design to enhance the growth and development of the church by providing a simple reliable method to keep and track activities for each services.
                </p>
                 <div class="hero-btn-wrapper">
                <a href="{{ url('/guest') }}" class="btn btn-default animated-btn">Visit Dashboard</a>
                     <a class="btn btn-default btn-default-outline animated-btn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                  </div>
                    @else
                  <h2 class="text-capitalize m-25px-b">GHOR Feedback<br> System.</h2>
                  <p class="m-25px-b">God's House Of Refuge (GHOR) Feedback System is design to enhance the growth and development of the church by providing a simple reliable method to keep and track activities for each services.
                  </p>
                    @endauth
                </div>
            @endif
                  @if (Route::has('login'))
                    @auth
                 @else
                 <div class="hero-btn-wrapper">
                     <a href="{{ route('login') }}" class="btn btn-default animated-btn">Login Here</a>
                     <a class="btn btn-default btn-default-outline animated-btn" href="#how-it-works">How It Works</a>
                  </div>
                 

                    @endauth
                     @endif
                  
               </div>
               <div class="col-md-6 p-100px-t p-50px-b md-p-10px-t">
                  <img class="hero-mock" src="{{asset('assetshome/img/hero-mock.png')}}" alt="Hero mockup"/>
               </div>
            </div>
         </div>
      </section>
      <!-- ========== Hero End ========== -->
      <!-- ========== Services Start ========== -->
    
      <!-- ========== Preface End ========== -->
      <!-- ==========  How it works Start ========== -->
       @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    @else
                <section id="how-it-works" class="p-80px-tb gray-bg">
                 <div class="container">
                    <div class="row">
                       <div class="col-sm-8 offset-sm-2">
                          <div class="section-title text-center m-50px-b">
                             <h2>WORKING PRINCIPLES</h2>
                          </div>
                       </div>
                    </div>
                    <div class="row align-items-center">
                       <div class="col-lg-3">
                          <div class="how-it-box text-center p-15px-lr p-50px-tb m-10px-t m-10px-b">
                             <i class="icofont-iphone"></i>
                             <h4>Login</h4>
                             <p>Login as either an Administrator Or as a user</p>
                          </div>
                       </div>
                       <!-- End single how it works -->
                       <div class="col">
                          <div class="how_works_arrow text-center">
                             <i class="icofont-long-arrow-right"></i>
                          </div>
                       </div>
                       <div class="col-lg-3">
                          <div class="how-it-box text-center p-15px-lr p-50px-tb m-10px-t m-10px-b">
                             <i class="icofont-refresh"></i>
                             <h4>Preview</h4>
                             <p>Get yourself familiar with your dashboard</p>
                          </div>
                       </div>
                       <!-- End single how it works -->
                       <div class="col">
                          <div class="how_works_arrow text-center">
                             <i class="icofont-long-arrow-right"></i>
                          </div>
                       </div>
                       <div class="col-lg-3">
                          <div class="how-it-box text-center p-15px-lr p-50px-tb m-10px-t m-10px-b">
                             <i class="icofont-hand-drag1"></i>
                             <h4>Start Using App</h4>
                             <p>Explore the nitty gritty of the App</p>
                          </div>
                       </div>
                       <!-- End single how it works -->
                    </div>
                 </div>
                </section>
                <footer id="footer" class=" footer">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  
                  <div class="footer-copyright text-center">
                     <p>Copyright &copy; GHOR FeedBack  2019. All Rights Reserved. Powered By <a href="https://www.concerncomputing.com"  target="_blank">Concern Computing</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
                    @endauth
                </div>
            @endif
      
     
      <!-- ==========  Contact End ========== -->
      <!-- ==========  Footer Start ========== -->
      

      <!-- ==========  Footer End ========== -->
     <!-- jQuery -->
     <script src="{{asset('assetshome/js/jquery-3.2.1.min.js')}}"></script>
     <script src="{{asset('assetshome/js/jquery-migrate-3.0.0.min.js')}}"></script>
     <!-- Bootstrap JS -->
     <script src="{{asset('assetshome/js/bootstrap.min.js')}}"></script>
     <!-- Animated text -->
     <script src="{{asset('assetshome/js/jquery.textillate.js')}}"></script>
     <script src="{{asset('assetshome/js/jquery.lettering.js')}}"></script>
     <script src="{{asset('assetshome/js/jquery.fittext.js')}}"></script>
     <!-- AjaxChimp js -->
     <script src="{{asset('assetshome/js/jquery.ajaxchimp.min.js')}}"></script>
     <!-- Swiper JS -->
     <script src="{{asset('assetshome/js/swiper.min.js')}}"></script>
     <!-- Custom -->
     <script src="{{asset('assetshome/js/custom.js')}}"></script>
  
  
  </body>

</html>
