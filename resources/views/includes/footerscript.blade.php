
<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/lib/ionicons/ionicons.js')}}"></script>
<script src="{{asset('assets/lib/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/lib/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/lib/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<script src="{{asset('assets/js/azia.js')}}"></script>
<script src="{{asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{asset('assets/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>

<script src="{{asset('assets/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>
<script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/lib/fullcalendar/fullcalendar.min.js')}}"></script>

<script src="{{asset('assets/js/app-calendar-events.js')}}"></script>
<script src="{{asset('assets/js/app-calendar.js')}}"></script>
<script src="{{asset('assets/lib/jquery-steps/jquery.steps.min.js')}}"></script>

<script src="{{asset('assets/js/azia.js')}}"></script>
<script src="{{asset('assets/js/application.js')}}"></script>
<!-- <script>
    $(function(){
        'use strict'

        $('#wizard3').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            transitionEffect: "fade",
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            stepsOrientation: 1,
            labels: {
                finish: "Submit"
            },
            onFinished: function (event, currentIndex) {
            alert("Form Submitted!");

        }
        });
    });
</script> -->

<script>
    $(function(){
        'use strict'

        $('.select2-modal').select2({
            minimumResultsForSearch: Infinity,
            dropdownCssClass: 'az-select2-dropdown-modal',
        });

        $('#dateToday').text(moment().format('ddd, MMMM DD YYYY'));

    });
</script>
<script>
    $(document).ready(function(){
        'use strict';

        $('.datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

         $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
          $('#datatable12').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

          $('#datatable33').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('.datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>
<script>
    $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
            e.preventDefault();
            $(this).parent().toggleClass('show');
            $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
            e.stopPropagation();

            // closing of sidebar menu when clicking outside of it
            if(!$(e.target).closest('.az-header-menu-icon').length) {
                var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                if(!sidebarTarg) {
                    $('body').removeClass('az-sidebar-show');
                }
            }
        });


        $('#azSidebarToggle').on('click', function(e){
            e.preventDefault();

            if(window.matchMedia('(min-width: 992px)').matches) {
                $('body').toggleClass('az-sidebar-hide');
            } else {
                $('body').toggleClass('az-sidebar-show');
            }
        });

        new PerfectScrollbar('.az-sidebar-body', {
            suppressScrollX: true
        });

        /* ----------------------------------- */
        /* Dashboard content */


        $.plot('#flotChart1', [{
            data: dashData1,
            color: '#6f42c1'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 100
            },
            xaxis: { show: false }
        });

        $.plot('#flotChart2', [{
            data: dashData2,
            color: '#007bff'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 100
            },
            xaxis: { show: false }
        });

        $.plot('#flotChart3', [{
            data: dashData3,
            color: '#f10075'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 100
            },
            xaxis: { show: false }
        });

        $.plot('#flotChart4', [{
            data: dashData4,
            color: '#00cccc'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 100
            },
            xaxis: { show: false }
        });

        $.plot('#flotChart5', [{
            data: dashData2,
            color: '#00cccc'
        },{
            data: dashData3,
            color: '#007bff'
        },{
            data: dashData4,
            color: '#f10075'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: false,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 20
            },
            yaxis: {
                show: false,
                min: 0,
                max: 100
            },
            xaxis: {
                show: true,
                color: 'rgba(0,0,0,.16)',
                ticks: [
                    [0, ''],
                    [10, '<span>Nov</span><span>05</span>'],
                    [20, '<span>Nov</span><span>10</span>'],
                    [30, '<span>Nov</span><span>15</span>'],
                    [40, '<span>Nov</span><span>18</span>'],
                    [50, '<span>Nov</span><span>22</span>'],
                    [60, '<span>Nov</span><span>26</span>'],
                    [70, '<span>Nov</span><span>30</span>'],
                ]
            }
        });

        $.plot('#flotChart6', [{
            data: dashData2,
            color: '#6f42c1'
        },{
            data: dashData3,
            color: '#007bff'
        },{
            data: dashData4,
            color: '#00cccc'
        }], {
            series: {
                shadowSize: 0,
                stack: true,
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: 0.85
                    //fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 20
            },
            yaxis: {
                show: false,
                min: 0,
                max: 100
            },
            xaxis: {
                show: true,
                color: 'rgba(0,0,0,.16)',
                ticks: [
                    [0, ''],
                    [10, '<span>Nov</span><span>05</span>'],
                    [20, '<span>Nov</span><span>10</span>'],
                    [30, '<span>Nov</span><span>15</span>'],
                    [40, '<span>Nov</span><span>18</span>'],
                    [50, '<span>Nov</span><span>22</span>'],
                    [60, '<span>Nov</span><span>26</span>'],
                    [70, '<span>Nov</span><span>30</span>'],
                ]
            }
        });

        $('#vmap').vectorMap({
            map: 'world_en',
            showTooltip: true,
            backgroundColor: '#f8f9fa',
            color: '#ced4da',
            colors: {
                us: '#6610f2',
                gb: '#8b4bf3',
                ru: '#aa7df3',
                cn: '#c8aef4',
                au: '#dfd3f2'
            },
            hoverColor: '#222',
            enableZoom: false,
            borderOpacity: .3,
            borderWidth: 3,
            borderColor: '#fff',
            hoverOpacity: .85
        });

    });
</script>
</body>

<!-- Mirrored from themepixels.me/azia/template/dashboard-nine.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 07:34:29 GMT -->
</html>