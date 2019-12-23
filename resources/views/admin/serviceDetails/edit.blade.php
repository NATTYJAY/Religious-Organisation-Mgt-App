@extends('layouts.dashboard')
@section('content')
    <div class="row row-sm">
        <div class="col-xl-12 mg-t-10">
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
                            {{--Table Goes Here--}}
                             <form  class="form-horizontal" method="POST" id="formedited">
                            <div id="wizard5">
                                <h3>
                                    <div class="card-header bg-info">
                                        <h4 class="m-b-0 text-white">Service Type</h4>
                                    </div>
                                </h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                   
                                                        <div class="form-body">
                                                            <h3 class="box-title">Service Component</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Service Type</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control" id="services_type" name="services_type">
                                                                                @if($service->services_type == 'First(1st)Service')
                                                                                <option value="{{$service->services_type}}">{{$service->services_type}}</option>
                                                                                <option value="Second(2nd)Service">Second(2nd) Service</option>
                                                                                <option value="Third(3rd)Service">Third(3rd) Service</option>
                                                                                <option value="Fourth(4th)Service">Fourth(4th) Service</option>
                                                                                @elseif($service->services_type == 'Second(2nd)Service')
                                                                                 <option value="{{$service->services_type}}">{{$service->services_type}}</option>
                                                                                  <option value="First(1st)Service">First(1st) Service</option>
                                                                                <option value="Third(3rd)Service">Third(3rd) Service</option>
                                                                                <option value="Fourth(4th)Service">Fourth(4th) Service</option>
                                                                                @elseif($service->services_type == 'Third(3rd)Service')
                                                                                
                                                                                 <option value="{{$service->services_type}}">{{$service->services_type}}</option>
                                                                                  <option value="First(1st)Service">First(1st) Service</option>
                                                                                <option value="Second(2nd)Service">Second(2nd) Service</option>
                                                                                <option value="Fourth(4th)Service">Fourth(4th) Service</option>
                                                                                 @elseif($service->services_type == 'Fourth(4th)Service')
                                                                                  <option value="{{$service->services_type}}">{{$service->services_type}}</option>
                                                                                  <option value="First(1st)Service">First(1st) Service</option>
                                                                                <option value="Second(2nd)Service">Second(2nd) Service</option>
                                                                                <option value="Third(3rd)Service">Third(3rd) Service</option>
                                                                                @else
                                                                                 <option value="First(1st)Service">First(1st) Service</option>
                                                                                <option value="Second(2nd)Service">Second(2nd) Service</option>
                                                                                <option value="Third(3rd)Service">Third(3rd) Service</option>
                                                                                  <option value="Fourth(4th)Service">Fourth(4th) Service</option>
                                                                                @endif
                                                                            </select>
                                                                             </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Date</label>
                                                                        <div class="col-md-9">
                                                                            <input type="date" class="form-control" name="services_date" placeholder="dd/mm/yyyy" value="{{$service->services_date}}">
                                                                            <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                                                                            <input type="hidden" class="form-control" id="idrpp" name="id" value="{{$service->id}}">
                                                                             <input type="hidden" class="form-control" id="ff" name="_method" value="PUT">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->

                                                            <h3 class="box-title">Opening Prayer</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">From</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" name="services_time_from" value="{{$service->services_time_from}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">To</label>
                                                                        <div class="col-md-9">
 <input type="text" class="form-control" name="services_time_to" value="{{$service->services_time_to}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">OverShot Time</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2" name="service_overshoot_time">
                                                                                @if($service->service_overshoot_time == '1 - 5 Mins')
                                                                                 <option value="{{$service->service_overshoot_time}}">{{$service->service_overshoot_time}}</option>
                                                                                 <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                <option value="10 Mins">10 Mins</option>
                                                                                 @elseif($service->service_overshoot_time == '5 - 10 Mins')
                                                                                  <option value="{{$service->service_overshoot_time}}">{{$service->service_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="10 Mins">10 Mins</option>
                                                                                     @elseif($service->service_overshoot_time == '10 Mins')
                                                                                  <option value="{{$service->service_overshoot_time}}">{{$service->service_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                 @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Quality</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2" name="service_opening_quality">
                                                                                @if($service->service_opening_quality == 'Fair')
                                                                                 <option value="{{$service->service_opening_quality}}">{{$service->service_opening_quality}}</option>
                                                                                  <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                @elseif($service->service_opening_quality == 'Satisfactory')
                                                                                <option value="{{$service->service_opening_quality}}">{{$service->service_opening_quality}}</option>
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                 @elseif($service->service_opening_quality == 'Excellent')
                                                                                 <option value="{{$service->service_opening_quality}}">{{$service->service_opening_quality}}</option>
                                                                                 <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                @else
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                 <option value="Excellent">Excellent</option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <!--/row-->
                                                        </div>
                                                        <hr>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>
                                    <div class="card-header bg-primary">
                                        <h4 class="m-b-0 text-white">Testimonies</h4>
                                    </div>
                                </h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                    
                                                        <div class="form-body">
                                                            <h3 class="box-title">Testimonies Feedback</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Officer Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Officer Name" name="testimony_officer" value="{{$service->testimony_officer}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Number Of Testifiers</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Number Of Testifiers" name="testimony_number" value="{{$service->testimony_number}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Healing Type</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2" name="testimony_healing_type">
                                                                                 @if($service->testimony_healing_type == 'Quality Type')
                                                                                  <option value="{{$service->testimony_healing_type}}">{{$service->testimony_healing_type}}</option>
                                                                                   <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Miracle">Miracle</option>
                                                                                <option value="Others">Others</option>
                                                                                 @elseif($service->testimony_healing_type == 'Satisfactory')
                                                                                  <option value="{{$service->testimony_healing_type}}">{{$service->testimony_healing_type}}</option>
                                                                                   <option value="Quality Type">Quality Type</option>
                                                                                    <option value="Miracle">Miracle</option>
                                                                                <option value="Others">Others</option>


                                                                                 @elseif($service->testimony_healing_type == 'Miracle')
                                                                                  <option value="{{$service->testimony_healing_type}}">{{$service->testimony_healing_type}}</option>
                                                                                    <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Miracle">Miracle</option>
                                                                                <option value="Others">Others</option>
                                                                                 @elseif($service->testimony_healing_type == 'Others')
                                                                                  <option value="{{$service->testimony_healing_type}}">{{$service->testimony_healing_type}}</option>
                                                                                   <option value="Quality Type">Quality Type</option>
                                                                                   <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Miracle">Miracle</option>
                                                                                    @else
                                                                                    <option value="Quality Type">Quality Type</option>
                                                                                   <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Miracle">Miracle</option>
                                                                                <option value="Others">Others</option>
                                                                                 @endif


                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>
                                    <div class="card-header bg-purple-dark">
                                        <h4 class="m-b-0 text-white">Devotional</h4>
                                    </div>
                                </h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                    
                                                        <div class="form-body">
                                                            <h3 class="box-title">Devotional Feedback</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Officer Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Officer Name" name="devotional_officer" value="{{$service->devotional_officer}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Keep To Time</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2" name="devotional_time">
                                                                                 @if($service->devotional_time == 'Yes')
                                                                                 <option value="{{$service->devotional_time}}">{{$service->devotional_time}}</option>
                                                                                <option value="No">No</option>
                                                                                @elseif($service->devotional_time == 'No')
                                                                                <option value="{{$service->devotional_time}}">{{$service->devotional_time}}</option>
                                                                                <option value="Yes">Yes</option>
                                                                                @else
                                                                                <option value="No">No</option>
                                                                                 <option value="Yes">Yes</option>
                                                                                 @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <!--/row-->

                                                        </div>
                                                        <hr>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>
                                    <div class="card-header bg-dark">
                                        <h4 class="m-b-0 text-white">Prasie & Worship</h4>
                                    </div>
                                </h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                    
                                                        <div class="form-body">
                                                            <h3 class="box-title">Prasie & Worship Session Feedback</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Minister Overshoot Time</label>
                                                                        <div class="col-md-9">
                                                                            <!-- <select class="form-control select2" name="praise_overshoot_time">
                                                                                <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                <option value="10 Mins">10 Mins</option>
                                                                            </select> -->


                                                                            <select class="form-control select2" name="praise_overshoot_time">
                                                                                @if($service->praise_overshoot_time == '1 - 5 Mins')
                                                                                 <option value="{{$service->praise_overshoot_time}}">{{$service->praise_overshoot_time}}</option>
                                                                                 <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                <option value="10 Mins">10 Mins</option>
                                                                                 @elseif($service->praise_overshoot_time == '5 - 10 Mins')
                                                                                  <option value="{{$service->praise_overshoot_time}}">{{$service->praise_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="10 Mins">10 Mins</option>
                                                                                     @elseif($service->praise_overshoot_time == '10 Mins')
                                                                                  <option value="{{$service->praise_overshoot_time}}">{{$service->praise_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                   @else
                                                                                   <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                    <option value="10 Mins">10 Mins</option>
                                                                                 @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Time Quality</label>
                                                                        <div class="col-md-9">
                                                                            <!-- <select class="form-control select2" name="praise_quality_time">
                                                                                <option selected="selected" disabled="disabled">[Choose Time Quality]</option>
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                            </select> -->


                                                                            <select class="form-control select2" name="praise_quality_time">
                                                                                @if($service->praise_quality_time == 'Fair')
                                                                                 <option value="{{$service->praise_quality_time}}">{{$service->praise_quality_time}}</option>
                                                                                  <option value="Satisfactory">Satisfactory</option>
                                                                              
                                                                                @elseif($service->praise_quality_time == 'Satisfactory')
                                                                                <option value="{{$service->praise_quality_time}}">{{$service->praise_quality_time}}</option>
                                                                                <option value="Fair">Fair</option>
                                                                                @else
                                                                                 <option value="Satisfactory">Satisfactory</option>
                                                                                 <option value="Fair">Fair</option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <!--/row-->

                                                        </div>
                                                        <hr>

                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>
                                    <div class="card-header bg-primary-dark">
                                        <h4 class="m-b-0 text-white">Choir Ministration</h4>
                                    </div>
                                </h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                    
                                                        <div class="form-body">
                                                            <h3 class="box-title">Choir Ministration Feedback</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Choir</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2" name="choir">
                                                                                @if($service->choir == 'House Of Judah')
                                                                                <option value="{{$service->choir}}">{{$service->choir}}</option>
                                                                              <!--   <option value="House Of Judah">House Of Judah</option> -->
                                                                                <option value="House Of Praise">House Of Praise</option>
                                                                                <option value="Youth">Youth</option>
                                                                                @elseif($service->choir == 'House Of Praise')
                                                                                 <option value="{{$service->choir}}">{{$service->choir}}</option>
                                                                                 <option value="House Of Judah">House Of Judah</option>
                                                                                  <option value="Youth">Youth</option>
                                                                                  @elseif($service->choir == 'Youth')
                                                                                   <option value="{{$service->choir}}">{{$service->choir}}</option>
                                                                                    <option value="House Of Judah">House Of Judah</option>
                                                                                     <option value="House Of Judah">House Of Judah</option>
                                                                                     @else
                                                                                      <option value="House Of Judah">House Of Judah</option>
                                                                                   <option value="House Of Praise">House Of Praise</option>
                                                                                     <option value="Youth">Youth</option>
                                                                                     @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">OverShot Time</label>
                                                                        <div class="col-md-9">
                                                                            <!-- <select class="form-control select2" name="choir_overshoot_time">
                                                                                <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                <option value="10 Mins">10 Mins</option>
                                                                            </select> -->

                                                                            <select class="form-control select2" name="choir_overshoot_time">
                                                                                @if($service->choir_overshoot_time == '1 - 5 Mins')
                                                                                 <option value="{{$service->choir_overshoot_time}}">{{$service->choir_overshoot_time}}</option>
                                                                                 <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                <option value="10 Mins">10 Mins</option>
                                                                                 @elseif($service->choir_overshoot_time == '5 - 10 Mins')
                                                                                  <option value="{{$service->choir_overshoot_time}}">{{$service->choir_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="10 Mins">10 Mins</option>
                                                                                     @elseif($service->choir_overshoot_time == '10 Mins')
                                                                                  <option value="{{$service->choir_overshoot_time}}">{{$service->choir_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                   @else
                                                                                   <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                    <option value="10 Mins">10 Mins</option>
                                                                                 @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Quality Dressing</label>
                                                                        <div class="col-md-9">
                                                                           <!--  <select class="form-control select2" name="choir_quality_dressing"> -->
                                                                                <select class="form-control select2" name="choir_quality_dressing">
                                                                                @if($service->choir_quality_dressing == 'Fair')
                                                                                 <option value="{{$service->choir_quality_dressing}}">{{$service->choir_quality_dressing}}</option>
                                                                                  <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                @elseif($service->choir_quality_dressing == 'Satisfactory')
                                                                                <option value="{{$service->choir_quality_dressing}}">{{$service->choir_quality_dressing}}</option>
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                 @elseif($service->choir_quality_dressing == 'Excellent')
                                                                                 <option value="{{$service->choir_quality_dressing}}">{{$service->choir_quality_dressing}}</option>
                                                                                 <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                @else
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                 <option value="Excellent">Excellent</option>
                                                                                @endif
                                                                            </select>
                                                                               <!--  <option selected="selected" disabled="disabled">Choose Choir</option>
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Excellent">Excellent</option> -->
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">General Look</label>
                                                                        <div class="col-md-9">
                                                                            
                                                                               <select class="form-control select2" name="choir_general_look">
                                                                                @if($service->choir_general_look == 'Fair')
                                                                                 <option value="{{$service->choir_general_look}}">{{$service->choir_general_look}}</option>
                                                                                  <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                @elseif($service->choir_general_look == 'Satisfactory')
                                                                                <option value="{{$service->choir_general_look}}">{{$service->choir_general_look}}</option>
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                 @elseif($service->choir_general_look == 'Excellent')
                                                                                 <option value="{{$service->choir_general_look}}">{{$service->choir_general_look}}</option>
                                                                                 <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                @else
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                 <option value="Excellent">Excellent</option>
                                                                                @endif
                                                                            </select>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                        </div>
                                                        <hr>

                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>
                                    <div class="card-header bg-indigo">
                                        <h4 class="m-b-0 text-white">Word</h4>
                                    </div>
                                </h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                    
                                                        <div class="form-body">
                                                            <h3 class="box-title">Word</h3>
                                                            <hr class="m-t-0 m-b-40">

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Pastor</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="Pastor" class="form-control" name="word_pastor" value="{{strtoupper($service->word_pastor)}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">OverShot Time</label>
                                                                        <div class="col-md-9">
                                                                           
                                                                               <select class="form-control select2" name="word_overshoot_time">
                                                                                @if($service->word_overshoot_time == '1 - 5 Mins')
                                                                                 <option value="{{$service->word_overshoot_time}}">{{$service->word_overshoot_time}}</option>
                                                                                 <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                <option value="10 Mins">10 Mins</option>
                                                                                 @elseif($service->word_overshoot_time == '5 - 10 Mins')
                                                                                  <option value="{{$service->word_overshoot_time}}">{{$service->word_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="10 Mins">10 Mins</option>
                                                                                     @elseif($service->word_overshoot_time == '10 Mins')
                                                                                  <option value="{{$service->word_overshoot_time}}">{{$service->word_overshoot_time}}</option>
                                                                                  <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                   @else
                                                                                   <option value="1 - 5 Mins">1 - 5 Mins</option>
                                                                                   <option value="5 - 10 Mins">5 - 10 Mins</option>
                                                                                    <option value="10 Mins">10 Mins</option>
                                                                                 @endif
                                                                            </select>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->

                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Soul Won</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="Soul Won" class="form-control" name="soul_word" value="{{strtoupper($service->soul_word)}}">
                                                                             <input type="hidden" class="form-control" name="status" value="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                        </div>
                                                        <hr>

                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3> <div class="card-header bg-teal">
                                        <h4 class="m-b-0 text-white">First Timers</h4>
                                    </div></h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                    
                                                        <div class="form-body">
                                                            <h3 class="box-title">First Timers Feedback</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Number Of First Timers</label>
                                                                        <div class="col-md-9">
                                                                            <input type="number" class="form-control" placeholder="Number Of First Timers" name="first_timer" value="{{$service->first_timer}}">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <h3 class="box-title">Gender</h3>
                                                            <hr class="m-t-0 m-b-40">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group row">
                                                                        <label>Male</label>
                                                                        <div class="col-md-9">
                                                                            <input type="number" placeholder="male" class="form-control" name="first_gender_male" value="{{strtoupper($service->first_gender_male)}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group row">
                                                                        <label>Female</label>
                                                                        <div class="col-md-9">
                                                                            <input type="number" placeholder="Female" class="form-control" name="first_gender_female" value="{{strtoupper($service->first_gender_female)}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group row">
                                                                        <label>Children</label>
                                                                        <div class="col-md-9">
                                                                            <input type="number" placeholder="Female" class="form-control" name="first_gender_children" value="{{strtoupper($service->first_gender_children)}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Age</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2" name="first_timer_age">
                                                                                 @if($service->first_timer_age == '0 - 20 Years')
                                                                                 <option value="{{$service->first_timer_age}}">{{$service->first_timer_age}}</option>
                                                                                  <option value="20 - 30 Years">20 - 30 Years</option>
                                                                                <option value="30 - 40 Years">30 - 40 Years</option>
                                                                                <option value="50 Years Above">50 Above</option>
                                                                                @elseif($service->first_timer_age == '20 - 30 Years')
                                                                                 <option value="{{$service->first_timer_age}}">{{$service->first_timer_age}}</option>
                                                                                  <option value="0 - 20 Years">0 - 20 Years</option>
                                                                                   <option value="30 - 40 Years">30 - 40 Years</option>
                                                                                <option value="50 Years Above">50 Above</option>
                                                                                 @elseif($service->first_timer_age == '30 - 40 Years')
                                                                                 <option value="{{$service->first_timer_age}}">{{$service->first_timer_age}}</option>
                                                                                  <option value="0 - 20 Years">0 - 20 Years</option>
                                                                                    <option value="20 - 30 Years">20 - 30 Years</option>
                                                                                <option value="50 Years Above">50 Above</option>
                                                                                @elseif($service->first_timer_age == '50 Years Above')
                                                                                 <option value="{{$service->first_timer_age}}">{{$service->first_timer_age}}</option>
                                                                                 <option value="0 - 20 Years">0 - 20 Years</option>
                                                                                <option value="20 - 30 Years">20 - 30 Years</option>
                                                                                <option value="30 - 40 Years">30 - 40 Years</option>
                                                                                 @else
                                                                                 <option value="0 - 20 Years">0 - 20 Years</option>
                                                                                <option value="20 - 30 Years">20 - 30 Years</option>
                                                                                <option value="30 - 40 Years">30 - 40 Years</option>
                                                                                <option value="50 Years Above">50 Above</option>
                                                                                 @endif
                                                                                
                                                                                
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Quality Of Reception</label>
                                                                        <div class="col-md-9">
                                                                            
                                                                               <select class="form-control select2" name="quality_reception">
                                                                                @if($service->quality_reception == 'Fair')
                                                                                 <option value="{{$service->quality_reception}}">{{$service->quality_reception}}</option>
                                                                                  <option value="Satisfactory">Satisfactory</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                @elseif($service->quality_reception == 'Satisfactory')
                                                                                <option value="{{$service->quality_reception}}">{{$service->quality_reception}}</option>
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Excellent">Excellent</option>
                                                                                 @elseif($service->quality_reception == 'Excellent')
                                                                                 <option value="{{$service->quality_reception}}">{{$service->quality_reception}}</option>
                                                                                 <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                @else
                                                                                <option value="Fair">Fair</option>
                                                                                <option value="Satisfactory">Satisfactory</option>
                                                                                 <option value="Excellent">Excellent</option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>

                                                        </div>
                                                        <hr>
                                                        <!-- <div class="row">
                                                            <div class="col-md-12">
                                                                <p>jjjjjjjjjjj</p>
                                                            </div>
                                                        </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>



                                <br>

                            <div  role="alert" id="msg2">
                                
                            </div>

                            {{--Table Ends Here Please--}}
                        </div>
                    </form>
                    </div>

                </div><!-- row -->
            </div><!-- card -->
        </div>
    </div>
    @stop