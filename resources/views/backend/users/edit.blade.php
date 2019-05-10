
@extends('layouts.backend.main')

@section('title','Add New Post') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @if($user->exists)
             
             update Category
            @else

            Add New Category

            @endif
            
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
                           
                  
                  <div class="box-body ">

                  {!!Form::model($user, [

                   'method'=>'PUT',

                   'route' => ['users.update',$user->id],

                   'files'=>TRUE,

                   ])


                    !!}

                    <div class="form-group {{$errors->has('name') ? 'has-error' :''}}">
                      
                      {!!Form::label('name') !!}

                     {!!Form::text('name', null,['class'=>'form-control']) !!}

                      @if($errors->has('name'))

                      <span class="help-block">{{$errors->first('name')}}</span>

                      @endif
                    </div>

                     <div class="form-group {{$errors->has('email') ? 'has-error' :''}}">
                      
                      {!!Form::label('email') !!}

                     {!!Form::text('email', null,['class'=>'form-control']) !!}

                      @if($errors->has('email'))

                      <span class="help-block">{{$errors->first('email')}}</span>

                      @endif
                    </div>

                     <div class="form-group {{$errors->has('password') ? 'has-error' :''}}">
                      
                      {!!Form::label('password') !!}
                         <br>
                     {!!Form::password('password', null,['class'=>'form-control']) !!}
                        
                      @if($errors->has('password'))

                      <span class="help-block">{{$errors->first('password')}}</span>

                      @endif
                    </div>

                     <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' :''}}">
                      
                      {!!Form::label('password_confirmation') !!}
                          <br>
                     {!!Form::password('password_confirmation', null,['class'=>'form-control']) !!}

                      @if($errors->has('password_confirmation'))

                      <span class="help-block">{{$errors->first('password_confirmation')}}</span>

                      @endif
                    </div>

                    

                    
                    
                    <div class="form-group">
                      
                      {!!Form::label('role_id','Role') !!}

                       {!!Form::select('role_id',App\Role::pluck('title','id'), null,['class'=>'form-control']) !!}
                            </div>
                    

                    

                    <hr>

                    {!! Form::submit('Update User',['class'=>'btn btn-primary']); !!}


                    {!! Form::close() !!}
                        
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



