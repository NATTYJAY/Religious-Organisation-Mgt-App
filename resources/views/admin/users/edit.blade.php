@extends('layouts.dashboard')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card ">

                <div class="card-body">

                        {!! Form::model($user,['action' => ['AdminUserController@update',$user->id],'method'=>'PATCH','files'=>true])  !!}
                        <div class="form-body">
                            <div class="card-header bg-teal">
                                <h3 class="m-b-0 text-white">Edit User Priviledge</h3>
                            </div>
                            <hr class="m-t-0 m-b-40">
                            @include('includes.error')
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {!! Form::label('name', 'Name', ['class' => 'control-label text-right col-md-3']); !!}
                                       <div class="col-md-9">
                                           {!! Form::text('name',null , ['class' => 'form-control']); !!}
                                           <span style="color:red">
                                                 @foreach($errors->get('name') as $message)
                                                   <li>{{$message}}</li>
                                               @endforeach
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {!! Form::label('phone', 'Phone Number', ['class' => 'control-label text-right col-md-3']); !!}
                                       <div class="col-md-9">
                                           {!! Form::text('phone',null , ['class' => 'form-control']); !!}
                                           <span style="color:red">
                                                 @foreach($errors->get('phone') as $message)
                                                   <li>{{$message}}</li>
                                               @endforeach
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {!! Form::label('email', 'Email', ['class' => 'control-label text-right col-md-3']); !!}
                                        <div class="col-md-9">
                                            {!! Form::text('email',null , ['class' => 'form-control']); !!}
                                            <span style="color:red">
                                                 @foreach($errors->get('email') as $message)
                                                    <li>{{$message}}</li>
                                                @endforeach
                                            </span>
                                        </div>
                                        {{--<span>--}}


                                        {{--</span>--}}
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Role</label>
                                        <div class="col-md-9">
                                            <select class="form-control select2" name = "role_id">
                                                <option selected="selected" disabled="disabled">Choose Role</option>

                                                @foreach($roless as $role)
                                                    <option value="{{$role->id}}">{{strtoupper($role->name)}}</option>
                                                @endforeach
                                            </select>
                                            <span style="color:red">
                                                 @foreach($errors->get('role_id') as $message)
                                                    <li>{{$message}}</li>
                                                @endforeach
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="col-md-9">
                                            {!! Form::submit('Edit User', ['class' => 'btn btn-info']); !!}

                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                        </div>
                        <hr>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @stop