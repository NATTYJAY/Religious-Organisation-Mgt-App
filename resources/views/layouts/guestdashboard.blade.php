@include('includes.guestheader')

@include('includes.guestaside')
@include('includes.modal')
@yield('content')
<!-- az-content-body -->
    <div class="az-footer">
        <div class="container-fluid">
            <span>&copy; 2018 GHOR Service Feedback Form </span>
            <span> Designed by: ConcernComputing.ng</span>
        </div><!-- container -->
    </div><!-- az-footer -->
</div><!-- az-content -->

@include('includes.footerscript')
