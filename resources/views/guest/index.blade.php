@extends('layouts.guestdashboard')
@section('content')

<div class="az-content-body">
    <div class="row row-sm">
     
        <div class="col-xl-3 mg-t-20">
            <div class="row">
                <div class="col-sm-12 col-xl-12">
                    <div class="card card-dashboard-twentytwo">
                        <div class="media">
                            <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                            <div class="media-body">
                                <h6>{{(new \App\Http\Controllers\GuestController)->count_rejected()}}<small class="down">- Rejected Request</small></h6>
                                <span>Total Number of Rejected Request</span>
                            </div> 
                        </div>
                        <div class="chart-wrapper">
                            <div id="flotChart1" class="flot-chart"></div>
                        </div><!-- chart-wrapper -->
                    </div><!-- card -->
                </div>
            </div><br/>
            <div class="row">
                <div class="col-sm-12 col-xl-12 mg-t-20 mg-xl-t-0">
                    <div class="card card-dashboard-twentytwo">
                        <div class="media">
                            <div class="media-icon bg-teal"><i class="typcn typcn-chart-line-outline"></i></div>
                            <div class="media-body">
                                <h6>{{(new \App\Http\Controllers\GuestController)->count_accepted()}}<small class="up">+ Accepted Request</small></h6>
                                <span>Total Number of Rejected Request</span>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <div id="flotChart4" class="flot-chart"></div>
                        </div><!-- chart-wrapper -->
                    </div><!-- card -->
                </div>
            </div>
<br/>
            <div class="row">
                <div class="col-sm-12 col-xl-12 mg-t-20 mg-xl-t-0">
                    <div class="card card-dashboard-twentytwo">
                        <div class="media">
                            <div class="media-icon bg-warning"><i class="typcn typcn-chart-line-outline"></i></div>
                            <div class="media-body">
                                <h6>{{(new \App\Http\Controllers\GuestController)->count_pending()}}<small class="bg-warning">o Pending Request</small></h6>
                                <span>Total Number of Pending Request</span>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <div id="flotChart4" class="flot-chart"></div>
                        </div><!-- chart-wrapper -->
                    </div><!-- card -->
                </div>
            </div>
            <!-- card -->
        </div><!-- col -->
        <div class="col-md-9 col-xl-9 az-content-calendar" >
            <!-- <div class="card card-dashboard-twentyone ">
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
            </div> -->
            <div class="card card-dashboard-twentyone">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>All Servcies Details </strong>
                            </div>

                             <table id="datatable1" class="display responsive nowrap table-responsive">
            <thead>
              <tr>
                <th class="wd-15p">S/N</th>
                <th class="wd-15p">Service Type</th>
                <th class="wd-15p">Date</th>
                <th class="wd-20p">Approval</th>
                <th class="wd-15p">Action</th>
                <th class="wd-10p"></th>
              </tr>
            </thead>
            <tbody>
                 @if($services)
                       @foreach($services as $key => $service)
              <tr>
                <td>{{$key + 1}}</td>
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
                <td> <a href="{{route('guest.show',$service->id)}}"><button type="button" class="btn btn-outline-danger btn-sm">View</button></a></td>
                <td></td>
              </tr>

               @endforeach
                        @endif
             
              
            </tbody>
          </table>


                            


                        </div>
                    </div>

                </div><!-- row -->
            </div>

        </div>

    </div>
</div>
<!-- row -->

 @stop