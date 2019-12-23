@extends('layouts.guestdashboard')
@section('content')
    <div class="row row-sm">
        <div class="col-xl-12 mg-t-10">
            <div class="card card-dashboard-twentyone">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">
                            <!-- <div class="alert alert-outline-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Well done!</strong> You successfully read this important alert message.
                            </div> -->
                            {{--Table Goes Here--}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-dark">
                                            <h4 class="m-b-0 text-white">Service Profile for <span class="badge badge-success"><b>{{strtoupper($service->services_type)}}</b></span> On: <span class="badge badge-info"><b>{{strtoupper($service->services_date)}}</b></span></h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <h3 class="box-title">Service Type</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Service Type:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->services_type)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Date:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->services_date)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Opening Prayer From:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->services_time_from)}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Opening Prayer To:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->services_time_to)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>OverShot Time:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->service_overshoot_time)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Quality:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static">  {{strtoupper($service->service_opening_quality)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <h3 class="box-title">Testimonies</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Officer Name :</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->testimony_officer)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Number Of Testifiers:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->testimony_number)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Healing Type:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->testimony_healing_type)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <h3 class="box-title">Devotional</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Officer Name:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->devotional_officer)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Keep To Time:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->devotional_time)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <h3 class="box-title">Praise & Worship</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Minister Over Shoot Time:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->praise_overshoot_time)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Time Quality:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->praise_quality_time)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                    <h3 class="box-title">Choir Ministration</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Choir:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->choir)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Overshoot Time:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->choir_overshoot_time)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Quality Dressing:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->choir_quality_dressing)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>General Look:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->choir_general_look)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                    <h3 class="box-title">Word</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Word By:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->word_pastor)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Over Shoot Time:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->word_overshoot_time)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-4">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Soul Won:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->soul_word)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <h3 class="box-title">First Timer</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Number of First Timers:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->first_timer)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->

                                                        <!--/span-->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Male:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->first_gender_male)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-4">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Female:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->first_gender_female)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Children:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->first_gender_children)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Age:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->first_timer_age)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-3"><b>Quality Reception:</b></label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static"> {{strtoupper($service->quality_reception)}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                    @if($service->status == 0)
                                                    @include('includes.modal')
                                        <span class="btn btn-info btn-xs" data-toggle="modal" data-target="#modaldemo8" data-effect="effect-newspaper"><b>Respond</b></span>
                                        @elseif($service->status == 1)
                                        <span class="btn btn-success btn-xs"><b>Approved</b></span>
                                        @elseif($service->status == 2)
                                        <span class="btn btn-danger btn-xs"><b>Rejected</b></span>
                                        @endif
                                                         <!-- <a href="{{route('user.show',$service->id)}}"><button type="button" class="btn btn-primary btn-sm">Respond</button></a> -->
                                                </div>
                                               
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--Table Ends Here Please--}}
                        </div>
                    </div>

                </div><!-- row -->
            </div><!-- card -->
        </div>
    </div>



@stop
