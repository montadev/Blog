@extends('layouts.backend.main')

@section('title','Add New Post') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
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

                  {!!Form::model($info, [

                   'method'=>'Post',

                   'route' => 'blog.info',

                   'files'=>TRUE,

                   ])


                    !!}

                    
                    

                    <div class="form-group {{$errors->has('body') ? 'has-error' :''}}">
                      
                      {!!Form::label('body') !!}

                     {!!Form::textarea('body', null,['class'=>'form-control','id'=>'MyID']) !!}

                     @if($errors->has('body'))

                      <span class="help-block">{{$errors->first('body')}}</span>

                      @endif
                    </div>

                    <div class="form-group {{$errors->has('date') ? 'has-error' :''}}">
                      
                      {!!Form::label('date','date') !!}

                

                         <div class='input-group date' id='published_at'>
                   {!!Form::text('date', null,['class'=>'form-control','placeholder'=>'Y-m-d H:i:m']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

                
                 @if($errors->has('date'))

                      <span class="help-block">{{$errors->first('date')}}</span>

                      @endif

                    </div>
                    

                    
                    

                    <hr>

                    {!! Form::submit('Create New Post',['class'=>'btn btn-primary']); !!}


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
