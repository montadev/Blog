@extends('layouts.backend.main')

@section('title','My Blog') 
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Display All Posts
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
                      <a href="{{route('blog.create')}}" class="btn btn-success">
                        Add New Post
                      </a>
                    </div>
                  </div>
                  <div class="box-body ">

                       @if(!$posts->count())
                    <div class="alert alert-danger">
                      <srong>No record found</srong>
                    </div>
                      @else
                       
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Action</th>
                              <th>Title</th>
                              <th>Author</th>
                              <th>type</th>
                              <th>Category</th>
                              <th>Date</th>
                              <th>status</th>

                               @if(Auth::user()->role->title=='admin')
                              <th>action</th>
                               @endif
                            </tr>
                          </thead>
                            @foreach($posts as $post)
                          <tbody>

                            @if(Auth::user()->role->title=='admin'|| Auth::user()->role->title=='editor')
                          <tr>
                            <td>

                            <a href="{{route('blog.edit',$post->id)}}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                       {!! Form::open(['method' => 'DELETE','route' =>['blog.destroy',$post->id] ]) !!}

                            <button type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                            </button>
                            {!!Form::close() !!}
                            </td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->type->type}}</td>
                            <td>{{$post->category->title}}</td>
                            <td><abbr title="{{$post->dateFormatted(true)}}">{{$post->dateFormatted()}}</abbr>

                            {!!$post->publicationLabel()!!}

                            </td>
                            <td>
                              
                              @if($post->validate)

                                 <span class="label label-success">Validé</span>
                                
                                  
                              @else
                               <span class="label label-danger">Encours de validation</span>

                              @endif


                            </td>
                                
                                 @if(Auth::user()->role->title=='admin')
                                  <td>
                                  <a href="{{route('valide',$post->id)}}"><span class="label label-success">Validé</span></a>
                                  <a href="{{route('rejete',$post->id)}}"><span class="label label-danger">Rejeté</span></a>
                                  </td>
                                 @endif
                            
                          </tr>
                             @else

                                     @if($post->user->email==Auth::user()->email)
                                          
                                           <tr>
                                                  <td>

                                                  <a href="{{route('blog.edit',$post->id)}}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                             {!! Form::open(['method' => 'DELETE','route' =>['blog.destroy',$post->id] ]) !!}

                                                  <button type="submit" class="btn btn-xs btn-danger">
                                                  <i class="fa fa-times"></i>
                                                  </button>
                                                  {!!Form::close() !!}
                                                  </td>
                                                  <td>{{$post->title}}</td>
                                                  <td>{{$post->user->name}}</td>
                                                  <td>{{$post->type->type}}</td>
                                                  <td>{{$post->category->title}}</td>
                                                  <td><abbr title="{{$post->dateFormatted(true)}}">{{$post->dateFormatted()}}</abbr>

                                                  {!!$post->publicationLabel()!!}

                                                  </td>

                                                  <td>
                              
                                                @if($post->validate)

                                                   <span class="label label-success">Validé</span>
                                                  
                                                    
                                                @else
                                                 <span class="label label-danger">Encours de validation</span>

                                                @endif


                                                    </td>

                                                     @if(Auth::user()->role->title=='admin')
                                                     <td>
                                                     <a href="{{route('valide',$post->id)}}"><span class="label label-success">Validé</span></a>
                                                     <a href="{{route('rejete',$post->id)}}"><span class="label label-success">Rejeté</span></a>
                                                     </td>
                                                     @endif


                                                  </tr>

                                     @endif  
                              

                             @endif
                          </tbody>

                          @endforeach
   
                    </table>
                    @endif  
                        
                  </div>
                  
                  <div class="box-footer clearfix">
                    <div class="pull-left">
                    <ul class="pagination no-margin">
                      {{$posts->links()}}
                   </ul>
                   </div>
                   <div class="pull-right">
                      <small>{{$postcount}} items</small>
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
