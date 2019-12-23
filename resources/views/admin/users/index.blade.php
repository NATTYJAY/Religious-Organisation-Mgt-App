@extends('layouts.dashboard')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card ">

                <div class="card-body">
                        @include('includes.error')
                        
                        @include('includes.messageModal')
                        <!-- Edit table goes here -->

                             <table id="datatable12" class="display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">S/N</th>
                 <th class="wd-20p">Name</th>
                <th class="wd-15p">Email</th>
                <th class="wd-15p">Role</th>
                <th class="wd-10p">Status</th>
                 <th class="wd-15p">Date Created</th>
                <th class="wd-15p">Date Updated</th>
                <th class="wd-15p">Send Message</th>
              </tr>
            </thead>
            <tbody>
                 @if($users)
                    @foreach($users as $key => $user)
             <tr>
                <td>{{$key + 1}}</td>
                <td>{{strtoupper($user->name)}}</td>
                <td>{{$user->email}}</td>
                <td>
                     @if($user->role->name == 'administrator')
                                        <span class="badge badge-success"><b>Administrator</b></span>
                                       @elseif($user->role->name == 'user')
                                        <span class="badge badge-danger"><b>User</b></span>
                                       @endif
                </td>
                <td>
                   <a href="{{route('user.edit',$user->id)}}"><span class="badge"><button type="button" class="btn btn-outline-info btn-sm">View</button></span></a>
                   <span class="badge">{!! Form::open(['action' => ['AdminUserController@destroy',$user->id],'method'=>'DELETE']) !!}
                                             {!! Form::submit('Del', ['class' => 'btn btn-outline-danger btn-sm']); !!}
                                        
                                          {!! Form::close() !!}</span>

                                             

<!-- 
                                          <span class="badge" style="width:50px; height: 20px; text-align: center;">View</span></a> <span class="badge">{!! Form::open(['action' => ['AdminUserController@destroy',$user->id],'method'=>'DELETE']) !!}
                                             {!! Form::submit('Del', ['class' => 'btn btn-outline-danger btn-sm']); !!}
                                        
                                          {!! Form::close() !!}</span> -->
                </td>
                <td>
                     <span class="badge badge-info">{{$user->created_at->diffForHumans() }}</span>
                </td>
                <td>
                    <span class="badge badge-warning">{{$user->updated_at->diffForHumans() }}</span>
                </td>
                <td>

                   <a href="#" class="messaage" id="{{$user->id}}" ><span class="badge badge-success"><b>Send Message</b></span></a>
                </td>
              </tr>

                @endforeach
                    @endif
            </tbody>
          </table>

                        <!-- Edit user table ends here -->
                </div>
            </div>
        </div>
    </div>
    @stop