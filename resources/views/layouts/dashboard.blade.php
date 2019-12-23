@include('includes.header')

@include('includes.aside')

@yield('content')
<!-- az-content-body -->
    <div class="az-footer">
        <div class="container-fluid">
            <span>&copy; 2019 GHOR Service Feedback Form </span>
            <span> Designed by: <a href="http://www.concerncomputing.com" target="_blank">concerncomputing.com</a></span>
        </div><!-- container -->
    </div><!-- az-footer -->
</div><!-- az-content -->

@include('includes.footerscript')
