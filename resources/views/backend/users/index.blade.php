@extends('layouts.backend.main')

@section('title','My User') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Display All User
          </h1>
          <ol class="breadcrumb">
            <li>
            <a href="{{route('home')}}">
            <i class="fa fa-dashboard"></i> Dashboard
            </a>
            </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <!-- /.box-header -->

                  <div class="box-header">
                    
                    <div class="pull-left">
                      <a href="{{route('users.create')}}" class="btn btn-success">
                        Add New User
                      </a>
                    </div>
                  </div>
                  <div class="box-body ">

                       @if(!$users->count())
                    <div class="alert alert-danger">
                      <srong>No record found</srong>
                    </div>
                      @else
                       
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Action</th>
                              <th>Name</th>
                              <th>Email</th>
                              
                              <th>Role</th>
                            </tr>
                          </thead>
                            @foreach($users as $user)
                          <tbody>
                          <tr>
                            <td>

                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
    {!! Form::open(['method' => 'DELETE','route' =>['users.destroy',$user->id] ]) !!}

                            <button onclick="return confirm('Are You sure to delete this users');" type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                            </button>
                            {!!Form::close() !!}
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            
                            <td>{{$user->role->title}}</td>
                            

                            

                            </td>
                          </tr>
                          </tbody>

                          @endforeach
   
                    </table>
                    @endif  
                        
                  </div>
                  
                  <div class="box-footer clearfix">
                    <div class="pull-left">
                    <ul class="pagination no-margin">
                      {{$users->links()}}
                   </ul>
                   </div>
                   <div class="pull-right">
                      <small>{{$userscount}} items</small>
                   </div>
                  </div>
                </div>
                <!-- /.box -->
              </div>
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>
@endsection
