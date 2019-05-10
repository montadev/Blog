
@extends('layouts.backend.main')

@section('title','Add New Post') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @if($post->exists)
             
             update post
            @else

            Add New Post

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

                  {!!Form::model($post, [

                   'method'=>'Put',

                  'route' => ['blog.update',$post->id],

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

                    

                    <div class="form-group {{$errors->has('body') ? 'has-error' :''}}">
                      
                      {!!Form::label('body') !!}

                     {!!Form::textarea('body', null,['class'=>'form-control','id'=>'MyID']) !!}

                     @if($errors->has('body'))

                      <span class="help-block">{{$errors->first('body')}}</span>

                      @endif
                    </div>

                    <div class="form-group {{$errors->has('published_at') ? 'has-error' :''}}">
                      
                      {!!Form::label('published_at','published date') !!}

                

                         <div class='input-group date' id='published_at'>
                   {!!Form::text('published_at', null,['class'=>'form-control','placeholder'=>'Y-m-d H:i:m','id'=>'published_at']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                 @if($errors->has('published_at'))

                      <span class="help-block">{{$errors->first('published_at')}}</span>

                      @endif

                    </div>
                    

                    <div class="form-group">
                      
                      {!!Form::label('category_id','Category') !!}

              {!!Form::select('category_id',App\Category::pluck('title','id'), null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                      
                      {!!Form::label('type_id','Type') !!}

              {!!Form::select('type_id',App\PostType::pluck('type','id'), null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group {{$errors->has('image') ? 'has-error' :''}}">
                      
                    

                      <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img src="{{($post->image) ? $post->image : 'https://placehold.it/200x150&text=No+Image'}}"  alt="..." style="width: 200px; height: 150px;">
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

                    {!! Form::submit('Update Post',['class'=>'btn btn-primary']); !!}


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



