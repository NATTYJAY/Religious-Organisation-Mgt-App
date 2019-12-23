@extends('layouts.dashboard')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card ">

                <div class="card-body">
                        @include('includes.error')
                        <!-- Edit table goes here -->
                         <table id="datatable1" class="display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">S/N</th>
                 <th class="wd-20p">Service Type</th>
                <th class="wd-15p">Date</th>
               
                <th class="wd-15p">Status</th>
                <th class="wd-10p">Actions</th>
              </tr>
            </thead>
            <tbody>
                 @if($service)
                    @foreach($service as $key => $services)
             <tr>
                <td>{{$key + 1}}</td>
                <td>{{strtoupper($services->services_type)}}</td>
                <td>{{strtoupper($services->services_date)}}</td> 
                <td>
                   @if($services->status == 0)
                    <span class="badge badge-warning"><b>Pending ...</b>
                   @elseif($services->status == 1)
                    <span class="badge badge-success"><b>Approved</b>
                        @elseif($services->status == 2)
                    <span class="badge badge-danger"><b>Rejected</b>
                   @endif
                </td>
                <td> 
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('services.show',$services->id)}}"><span class="badge"><button type="button" class="btn btn-outline-info btn-sm">View</button></span></a>
                            <a href="{{route('services.edit',$services->id)}}"><span class="badge"><button type="button" class="btn btn-outline-info btn-sm">Edit</button></span></a>
                       <span class="badge">
 {!! Form::open(['action' => ['AdminServiceController@destroy',$services->id],'method'=>'DELETE']) !!}
                                             {!! Form::submit('Del', ['class' => 'btn btn-outline-danger btn-sm']); !!}
                                        
                                          {!! Form::close() !!}
                                      </span>
                        </div>
                    </div>

                    
                   
                    
                </td>
                
              </tr>

                @endforeach
                    @endif
            </tbody>
          </table>

                              <!-- <table id="datatable12" class="display responsive nowrap table-responsive-lg">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Date Created</th>
                                    <th>Date Updated</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                   
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        
                                        <span class="badge badge-success"><b>Administrator</b>
                                    
                                        <span class="badge badge-danger"><b>User</b>
                                    

                                       </span>
                                    </td>
                                    <td>
                                        <a href=""><button type="button" class="btn btn-outline-info btn-sm">View</button></a>
                                            
                                    </td>
                                    <td>
                                        <span class="badge badge-info"></span>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">}</span>
                                    </td>
                                </tr>

                             
                                </tbody>
                            </table> -->

                        <!-- Edit user table ends here -->
                </div>
            </div>
        </div>
    </div>
    @stop