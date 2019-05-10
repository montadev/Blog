
@extends('layouts.backend.main')

@section('title','Add New Post') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @if($pub->exists)
             
             update Pub
            @else

            Add New Pub

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

                  {!!Form::model($pub, [

                   'method'=>'Post',

                   'route' => 'blog.pub',

                   'files'=>TRUE,

                   ])


                    !!}

                    <div class="form-group {{$errors->has('title') ? 'has-error' :''}}">
                      
                      {!!Form::label('title') !!}

                     {!!Form::text('title', null,['class'=>'form-control']) !!}

                      @if($errors->has('title'))

                      <span class="help-block">{{$errors->first('title')}}</span>

                      @endif
                    </div>
                                    
                    <div class="form-group {{$errors->has('date_debut') ? 'has-error' :''}}">
                      
                      {!!Form::label('date_debut','date_debut') !!}               

                         <div class='input-group date' id='date_debut'>
                   {!!Form::text('date_debut', null,['class'=>'form-control','placeholder'=>'Y-m-d','id'=>'date_debut']) !!}
                             <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                        </div>               
                      @if($errors->has('date_debut'))

                      <span class="help-block">{{$errors->first('date_debut')}}</span>

                      @endif

                    </div>


                    <div class="form-group {{$errors->has('date_fin') ? 'has-error' :''}}">
                      
                      {!!Form::label('date_fin','date_fin') !!}               

                         <div class='input-group date' id='date_fin'>
                   {!!Form::text('date_fin', null,['class'=>'form-control','placeholder'=>'Y-m-d','id'=>'date_fin']) !!}
                             <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                        </div>               
                      @if($errors->has('date_fin'))

                      <span class="help-block">{{$errors->first('date_fin')}}</span>

                      @endif

                    </div>


                    
                    <div class="form-group {{$errors->has('image') ? 'has-error' :''}}">
                                         
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img src="https://placehold.it/200x150&text=No+Image"  alt="...">
                          </div>

                          <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
                            
                          </div>

                          <div>
                            <span class="btn btn-outline-secondary btn-file" style="border:1px solid grey;margin-top:10px"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>

                        </div>

                      

                       @if($errors->has('image'))

                      <span class="help-block">{{$errors->first('image')}}</span>

                      @endif

                    </div>

                    <hr>

                    {!! Form::submit('Create New Pub',['class'=>'btn btn-primary']); !!}


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



