<?php $__env->startSection('content'); ?>
<div class="az-content-header">
    <div class="az-content-header-top">
        <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
            <p class="mg-b-0">Service Feedback System.</p>
        </div>
        <div class="az-dashboard-date">
            <div class="date">
                <div>{{date('jS')}}</div>
                <div>
                    <span>{{date('F Y')}}</span>
                    <span>{{date('l h:i:s A')}}</span>
                </div>
            </div><!-- az-dashboard-date -->
            
        </div><!-- az-dashboard-date -->
    </div><!-- az-content-body-title -->
</div>
<div class="az-content-body">
    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
                <div class="media">
                    <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                    <div class="media-body">
                        <h6>{{(new \App\Http\Controllers\AdminController)->count_rejected()}} <small class="down">- Rejected</small></h6>
                        <span>Total Number of Rejected Request</span>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <div id="flotChart1" class="flot-chart"></div>
                </div><!-- chart-wrapper -->
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card card-dashboard-twentytwo">
                <div class="media">
                    <div class="media-icon bg-primary"><i class="typcn typcn-chart-line-outline"></i></div>
                    <div class="media-body">
                        <h6>{{(new \App\Http\Controllers\AdminController)->count_accepted()}} <small class="up">+ Accepted</small></h6>
                        <span>Total Number of Accepted Request</span>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <div id="flotChart2" class="flot-chart"></div>
                </div><!-- chart-wrapper -->
            </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
                <div class="media">
                    <div class="media-icon bg-pink"><i class="typcn typcn-chart-line-outline"></i></div>
                    <div class="media-body">
                        <h6>{{(new \App\Http\Controllers\AdminController)->count_admin()}}<small class="down">+ Administrator</small></h6>
                        <span>Total Administrator</span>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <div id="flotChart3" class="flot-chart"></div>
                </div><!-- chart-wrapper -->
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
                <div class="media">
                    <div class="media-icon bg-teal"><i class="typcn typcn-chart-line-outline"></i></div>
                    <div class="media-body">
                        <h6>{{(new \App\Http\Controllers\AdminController)->count_user()}}<small class="up">Users</small></h6>
                        <span>Total Number of Users</span>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <div id="flotChart4" class="flot-chart"></div>
                </div><!-- chart-wrapper -->
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-9 mg-t-20">
            <div class="card card-dashboard-twentyone">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="alert alert-outline-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Well done!</strong> You successfully read this important alert message.
                            </div>


                            <table id="datatable33" class=" responsive nowrap table-responsive-lg ">
                                <thead>
                                <tr>

                                    <th>Service Type</th>
                                    <th>Date</th>
                                    <th>Approval</th>
                                    <th>Date Created</th>
                                    <th>Date Updated</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                     @if($services)
                       @foreach($services as $service)
                                <tr>
                                    <td>{{$service->services_type}}</td>
                                    <td>{{$service->services_date}}</td>
                                    <td>
                                        @if($service->status == 0)
                                        <span class="btn btn-warning btn-xs"><b>Pending</b></span>
                                        @elseif($service->status == 1)
                                        <span class="btn btn-success btn-xs"><b>Approved</b></span>
                                        @elseif($service->status == 2)
                                        <span class="btn btn-danger btn-xs"><b>Rejected</b></span>
                                        @endif

                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-success btn-xs">{{$service->created_at }}</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info btn-xs">{{$service->updated_at }}</button>
                                    </td>
                                    <td></td>
                                </tr>

                                  @endforeach
                        @endif
                                </tbody>
                            </table>


                        </div>
                    </div>

                </div><!-- row -->
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-4 col-xl-3 az-content-calendar" >
            <div class="card card-dashboard-twentyone ">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div id="dateToday" class="az-content-label az-content-label-sm lh-1 mg-b-2"></div>
                            <div class="alert alert-outline-warning" role="alert">



                                <strong>CURRENT CALENDER</strong>
                            </div>
                            <div class="fc-datepicker az-datepicker mg-b-30"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
<!-- row -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>