@extends('layouts.backend.main')

@section('title','My Info') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Display All Info
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
                      <a href="{{route('blog.info')}}" class="btn btn-success">
                        Add New Info
                      </a>
                    </div>
                  </div>
                  <div class="box-body ">

                       @if(!$infos->count())
                    <div class="alert alert-danger">
                      <srong>No record found</srong>
                    </div>
                      @else
                       
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              
                              <th>Info</th>
                               <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                            @foreach($infos as $info)
                          <tbody>
                          <tr>
                           

                            <td>{{$info->body}}</td>
                            <td>
                            {{$info->date}}
                            

                            </td>
                            <td>
                              <a href="{{route('info.delete',$info->id)}}"><button onclick="return confirm('Are you sure to delete');" type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                            </button>
                            </a>

                            <a href="{{route('info.update',$info->id)}}"><button onclick="return confirm('Are you sure to update');" type="submit" class="btn btn-xs btn-success">
                            <i class="fa fa-times"></i>
                            </button>
                            </a>
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
                      {{$infos->links()}}
                   </ul>
                   </div>
                   <div class="pull-right">
                      
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
