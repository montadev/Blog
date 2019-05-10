
@extends('layouts.backend.main')

@section('title','Add New Post') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @if($category->exists)
             
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

                  {!!Form::model($category, [

                   'method'=>'Post',

                   'route' => 'categories.store',

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

                    

                    

                    
                    

                    

                    

                    <hr>

                    {!! Form::submit('Create New Category',['class'=>'btn btn-primary']); !!}


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



