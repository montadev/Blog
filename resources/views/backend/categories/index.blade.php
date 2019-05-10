@extends('layouts.backend.main')

@section('title','My Categories') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Display All Categories
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
                      <a href="{{route('categories.create')}}" class="btn btn-success">
                        Add New Categories
                      </a>
                    </div>
                  </div>
                  <div class="box-body ">

                       @if(!$categories->count())
                    <div class="alert alert-danger">
                      <srong>No record found</srong>
                    </div>
                      @else
                       
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Action</th>
                              <th>Title</th>
                               <th>Creation Date</th>
                              <th>post count</th>
                            </tr>
                          </thead>
                            @foreach($categories as $category)
                          <tbody>
                          <tr>
                            <td>

                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>

    {!! Form::open(['method' => 'DELETE','route' =>['categories.destroy',$category->id] ]) !!}

                            <button onclick="return confirm('Are you sure to delete');" type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                            </button>

                            {!!Form::close() !!}
                            </td>

                            <td>{{$category->title}}</td>
                            <td><abbr title="{{$category->dateFormatted(true)}}">{{$category->dateFormatted()}}</abbr>
                            <td>{{count($category->posts)}}</td>
                           

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
                      {{$categories->links()}}
                   </ul>
                   </div>
                   <div class="pull-right">
                      <small>{{$categorycount}} items</small>
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
