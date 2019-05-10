@extends('layouts.backend.main')

@section('title','My Info') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Display All Pub
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
                      <a href="{{route('blog.pub')}}" class="btn btn-success">
                        Add New Pub
                      </a>
                    </div>
                  </div>
                  <div class="box-body ">

                       @if(!$pubs->count())
                    <div class="alert alert-danger">
                      <srong>No record found</srong>
                    </div>
                      @else
                       
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              
                              <th>Title</th>
                               <th>Date debut</th>
                                <th>Date de fin</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                            @foreach($pubs as $pub)
                          <tbody>
                          <tr>
                           

                            <td>{{$pub->title}}</td>
                            <td>
                            {{$pub->date_debut}}
                            

                            </td>
                            <td>{{$pub->date_fin}}</td>
                            <td>
                              <a href="{{route('blog.pub.delete',$pub->id)}}"><button onclick="return confirm('Are you sure to delete');" type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                            </button>
                            </a>

                            <a href="{{route('blog.pub.update',$pub->id)}}"><button onclick="return confirm('Are you sure to update');" type="submit" class="btn btn-xs btn-success">
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
                      {{$pubs->links()}}
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
