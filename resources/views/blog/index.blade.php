
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title></title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ==== Favicons ==== -->
    <link rel="icon" href="{{asset('frontt/favicon.png')}}" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/font-awesome.min.css')}}">
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/bootstrap.min.css')}}">
    
    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/fontawesome-stars-o.min.css')}}">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/style.css')}}">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/responsive-style.css')}}">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/colors/theme-color-1.css')}}" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/custom.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

 <style>

body{
    
    /*background-image: url("{{asset('frontt/img/bg.jpeg')}}");
     background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  */
  background-color: #f4f4f4;
}
.wrapper{

    background-color: #fbc141;
}
 #test {
  overflow: hidden;
  width: 800px;
  
  margin: 0 auto;
  cursor: pointer;
 
}

#imgs {
  display: block;
  padding: 0;
  width: 200%;
}

#imgs li {
  padding-right: 10px;
  display: inline-block;
 *display:inline;
}

#imgs img {
  width: 160px;
  height: 120px;
}

.resize {
width: 562px;
height : auto;
}

.resize {
width: auto;
height : 389px;
}

.resize1 {
width: 273px;
height : auto;
}

.resize1 {
width: auto;
height : 187px;
}

.resize2 {
width: 273px;
height : auto;
}

.resize2 {
width: auto;
height : 187px;
}

.resize3 {
width: 562px;
height : auto;
}

.resize3 {
width: auto;
height : 186px;
}

/* header */
header{
    background-image: linear-gradient(to bottom, #bc7000, #ee816e, #faa8bd, #f3d6ee, #ffffff);
}
.top-menu li a{
    color: black !important;
}
.header--logo > *{
    vertical-align: middle;
}
.logo{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.logo > img{
    width: 100px;
}
.e{
    width: 30px;
    margin: 0 5px;
}
.titre-logo{
    text-align: center;
    padding: 0 20px;
}
.logo2{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.logo2 img{
    width: 100px;
}

/* end header */
</style>

</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section header--style-1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-2">
                <div class="container">
                    

                    <div class="float--right float--xs-none text-xs-center">

                    




                        <!-- Header Topbar Action Start -->
                        
                        <!-- Header Topbar Action End -->
                        
                        <!-- Header Topbar Language Start -->
                       
                        <!-- Header Topbar Language End -->

                        <!-- Header Topbar Social Start -->
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">

                             @if((Auth::check()))
                                 @if(Auth::user()->test==0)
                            <li><a href="{{route('login.logout')}}"><i class="fa fa-home"></i> Logout</a></li>
                                 @endif
                             @endif
                             <li><a href="{{route('Gouvernance')}}"><i class="fa fa-home"></i> Gouvernance </a></li>
                             <li><a href="{{route('Membres')}}"><i class="fa fa-home"></i> Membres</a></li>
                             <li><a href="{{route('About_us')}}"><i class="fa fa-home"></i> Qui Sommes nous ?</a></li>
                             
                            <li><a href="{{route('index')}}"><i class="fa fa-home"></i> Acceuil</a></li>

                           
                           
                        </ul>
                        <!-- Header Topbar Social End -->
                    </div>
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Mainbar Start -->
            <div class="header--mainbar">
                <div class="container-fluid">
                    <!-- Header Logo Start -->
                    <div class="header--logo row">
                        <div class="col-lg-3 logo">
                            <img src="{{asset('frontt/logo/big.png')}}">
                            <h1><span>Lab</span><img class="e" src="{{asset('frontt/logo/e.png')}}"><span>enet</span></h1>
                        </div>
                        <div class="col-lg-6 titre-logo">
                            <h1>Ecosystème collaboratif d’innovation et de transformation sociétale</h1>
                        </div>
                        <div class="col-lg-3 logo2">
                            <img src="{{asset('frontt/logo/logo2.png')}}">
                        </div>
                    </div>
                   
                    <!-- Header Logo End -->

                    <!-- Header Ad Start -->
                    <!-- <img src="{{asset('frontt/img/ads-img/ad-728x90-01.jpg')}}" alt="Advertisement"> -->
                    
                    <!-- Header Ad End -->
                </div>
            </div>
            <!-- Header Mainbar End -->


        </header>
        <!-- Header Section End -->
    </div>
        <!-- Posts Filter Bar Start -->
        
        <!-- Posts Filter Bar End -->

        <!-- News Ticker Start -->
        <div class="news--ticker">
            <div class="container">
                <div class="title">
                    <h2>Info De Jour</h2>
                    
                </div>

                <div class="news-updates--list" data-marquee="true">
                    <ul class="nav">

                       @if(count($events))

                       @foreach($events as $event)
                        <li>
                            <h3 class="h3"><a href="#">{{$event->body}}</a></h3>
                        </li>
                        @endforeach
                        @endif
                        

                        


                        

                    </ul>
                </div>
            </div>
        </div>

            @if(isset($smart))
        <div class="main-content--section pbottom--30">
            <div class="container">
                <!-- Main Content Start -->
                <div class="main--content">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-1 pd--30-0">
                        <div class="row gutter--15">


                           @if(isset($smart[0]))
                            <div class="col-md-6">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-larger">
                                    <div class="post--img">
                                        <a href="{{route('showpost',$smart[0]->slug)}}" class="thumb "><img src="{{$smart[0]->image}}" class="resize" alt=""></a>
                                        <a href="#" class="cat">{{$smart[0]->category->title}}</a>
                                      

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">{{$smart[0]->user->name}}</a></li>
                                                <li><a href="#">{{$smart[0]->created_at->diffForHumans()}}</a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="" class="btn-link">{{$smart[0]->title}}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </div>

                            @endif

                            <div class="col-md-6">
                                <div class="row gutter--15">
                                @if(isset($smart[1]))
                                    <div class="col-xs-6 col-xss-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="{{route('showpost',$smart[1]->slug)}}" class="thumb"><img src="{{$smart[1]->image}}" class="resize1" alt=""></a>
                                                <a href="#" class="cat">{{$smart[1]->category->title}}</a>
                                              

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">{{$smart[1]->user->name}}</a></li>
                                                        <li><a href="#">{{$smart[1]->created_at->diffForHumans()}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="" class="btn-link">{{$smart[1]->title}}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>
                                    @endif
                                    
                                    @if(isset($smart[2]))
                                    <div class="col-xs-6 hidden-xss">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="{{route('showpost',$smart[2]->slug)}}" class="thumb"><img src="{{$smart[2]->image}}" class="resize2" alt=""></a>
                                                <a href="#" class="cat">{{$smart[2]->category->title}}</a>
                                               

                                                

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">{{$smart[2]->user->name}}</a></li>
                                                        <li><a href="#">{{$smart[2]->created_at->diffForHumans()}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="" class="btn-link">{{$smart[2]->title}}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>
                                    @endif
                                    @if(isset($smart[3]))

                                    <div class="col-sm-12 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-larger">
                                            <div class="post--img">
                                                <a href="{{route('showpost',$smart[3]->slug)}}" class="thumb"><img src="{{$smart[3]->image}}" class="resize3" alt=""></a>
                                                <a href="#" class="cat">Politics</a>
                                               

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">{{$smart[3]->user->name}}</a></li>
                                                        <li><a href="#">{{$smart[3]->created_at->diffForHumans()}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="" class="btn-link">{{$smart[2]->title}}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    @endif
                    <!-- Post Items End -->
                
        <!-- News Ticker End -->

        <!-- Main Breadcrumb Start -->
        
        <!-- Main Breadcrumb End -->

        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Post Items Start -->
                            <div class="post--items post--items-5 pd--30-0">
                                <ul class="nav">



                                        @if(count($posts))
                  

                                        @foreach($posts as $post)
                                    <li style="background-color:white;padding:18px;margin-bottom: -24px;box-shadow: 3px 3px 0 rgba(0,0,0,0.05);">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--title-larger">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                                    <div class="post--img">
                                                        <a href="{{route('showpost',$post->slug)}}" class="thumb"><img src="{{$post->image}}" alt=""></a>
                                    <a href="{{route('category',$post->category->slug)}}" class="cat">{{$post->category->title}}</a>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{$post->user->name}}</a></li>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i><time> {{$post->published_at->diffForHumans()}}</time></a></li>
                                                            <li><a href="#"><i class="fa fa-eye" > {{$post->view_count}}</i></a></li>
                                                            <li><a href="#"><i class="fa fa-comments"> {{count($post->comments)}} Commentaires</i></a></li>
                                                            <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> {{count($post->likeusers)}} Likes</a></li>
                                                            <!--
                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> {{count($post->comments)}} Likes</a></li>
                                                            -->

                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('showpost',$post->slug)}}" class="btn-link">{{$post->title}}</a></h3>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p>{!!Markdown::convertToHtml(substr($post->body,0,400))!!}
                                                        <a href="{{route('showpost',$post->slug)}}" style="color:#edb352;">Afficher la suite...</a>
                                                        </p>
                                                        
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                         @endforeach
                                         @else
                                            
                                            <h2>No record found</h2>

                                         @endif

                                    
                                </ul>
                            </div>
                            <!-- Post Items End -->

                            <!-- Advertisement Start -->
                            
                            <!-- Advertisement End -->

                            <!-- Post Items Start -->
                            
                            <!-- Post Items End -->

                            <!-- Advertisement Start -->
                            
                            <!-- Advertisement End -->

                            <!-- Post Items Start -->
                           
                            <!-- Post Items End -->

                            <!-- Pagination Start -->
                            <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                                

                                {{$posts->links()}}
                            </div>
                            <!-- Pagination End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Widget Start -->
                            <div class="widget">
                                <!-- Search Widget Start -->
                                <div class="search--widget" style="background-color:white;padding:18px;margin-bottom: -24px;box-shadow: 3px 3px 0 rgba(0,0,0,0.05);">
                                    <form  data-form="validate"  action="{{route('index')}}" action="post">
                                        <div class="input-group">
                                            <input type="search" name="term" placeholder="Search..." class="form-control" required>

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Search Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->


                                         <div class="widget">
                                <div class="widget--title text-center" >
                                    <h2 class="h4" style="color:white">Inscrivez-vous Et Devenir Menbre</h2>
                                    
                                </div>

                                <!-- Nav Widget Start -->
                                <div class="nav--widget" style="background-color:white;padding:18px;box-shadow: 3px 3px 0 rgba(0,0,0,0.05);">
                                    <div class="login-box-body">
                                            @if(Session::get('status'))

                                                <span style="color:red;">{{Session::get('status')}}</span>
                                           @endif

                                            <form method="POST" action="{{route('login.abbonne') }}">
                                                     @csrf

                                                      @if ($errors->has('email'))

                                                        <span class="invalid-feedback " role="alert">
                                                            <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif


                                              <div class="form-group has-feedback" >

                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                <span class="fa fa-envelope form-control-feedback"></span>
                                                              
                                              </div>


                                              <div class="form-group has-feedback">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                <span class="fa fa-lock form-control-feedback"></span>
                                                @if ($errors->has('password'))
                                                         <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                             @endif
                                              </div>


                                              <div class="row">
                                                <div class="col-xs-8">
                                                  <div class="checkbox icheck">
                                                    <label>
                                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                  </div>
                                                </div>
                                                <!-- /.col -->
                                                
                                                <!-- /.col -->
                                              </div>

                                              <div class="row">

                                                  <div class="col-xs-4">
                                                  <button style="background-color:#fbc141; border:#fbc141;" type="submit" class="btn btn-primary btn-block btn-flat">login</button>
                                                </div>

                                                <div class="col-xs-4">
                                                <button style="background-color:#fbc141; border:#fbc141;" type="button" class="btn btn-primary btn-block btn-flat" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Inscription</button>
                                                </div>



                                              </div>
                                            </form>

                                          
                                            <a href="{{ route('password.request') }}" style="color:#fbc141;font-family:italic">I forgot my password</a>
                                </div>
                                <!-- Nav Widget End -->
                            </div>
                            </div>
                              
                              

                            <div class="widget">
                                <div class="widget--title text-center">
                                    <h2 class="h4" style="color:white;">CATÉGORIE</h2>
                                    <i class="icon fa fa-folder-open-o"></i>
                                </div>

                                <!-- Nav Widget Start -->
                                <div class="nav--widget" style="background-color:white;padding:18px;margin-bottom: -24px;box-shadow: 3px 3px 0 rgba(0,0,0,0.05);">
                                    <ul class="nav">
                                           @foreach($categories as $category)
                                        <li><a href="{{route('category',$category->slug)}}"><span>{{$category->title}}</span><span>{{$category->posts->count()}}</span></a></li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                <!-- Nav Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            
                            <!-- Widget End -->

                            <!-- Widget Start -->
                           
                            <!-- Widget End -->

                            <!-- Widget Start -->
                           
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title text-center" >
                                    <h2 class="h4" style="color:white;">Article populaire</h2>
                                    <i class="icon fa fa-newspaper-o"></i>
                                </div>

                                <!-- List Widgets Start -->
                                <div class="list--widget list--widget-1">
                                    

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner" style="background-color:white;padding:18px;margin-bottom: -24px;box-shadow: 3px 3px 0 rgba(0,0,0,0.05);">

                                         @foreach($populars as $polular)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="{{route('showpost',$polular->slug)}}" class="thumb"><img src="{{$polular->image}}" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">{{$polular->user->name}}</a></li>
                                                                <li><a href="#">{{$polular->published_at->diffForHumans()}}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{route('showpost',$polular->slug)}}" class="btn-link">{{substr($polular->title,0,50)}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            
                                            @endforeach
                                            
                                        </ul>

                                        <!-- Preloader Start -->
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                        <!-- Preloader End -->
                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- List Widgets End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                           
                            <!-- Widget End -->

                            <!-- Widget Start -->
                           
                            <!-- Widget End -->
                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->

        <!-- Footer Section Start -->
        <footer class="footer--section">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pd--30-0 bg--color-2">
                <div class="container">
                    <div class="row AdjustRow">
                        

                       

                        

                        
                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Copyright Start -->
            
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Section End -->
     <!-- Modal -->

                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">

                                              <div id="inscription">
                                                  
                                              </div>

                                       <form method="POST" action="{{route('inscription.abbonne') }}">
                                                     @csrf

                                                      
                                             <div class="form-group has-feedback">

                                                <input  id="name-r" type="name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus placeholder="Nom">
                                                <span class="fa fa-user form-control-feedback"></span>

                                                

                                                        <span class="invalid-feedback " role="alert">
                                                            <strong style="color:#f2595c;" id="error-name"></strong>
                                                        </span>
                                                    
                                                              
                                              </div>

                                              <div class="form-group has-feedback">

                                                <input id="email-r" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus placeholder="Email">
                                                <span class="fa fa-envelope form-control-feedback"></span>

                                                

                                                        <span class="invalid-feedback " role="alert">
                                                            <strong style="color:#f2595c;" id="error-email"></strong>
                                                        </span>
                                                    
                                                              
                                              </div>


                                              <div class="form-group has-feedback">
                                                <input id="password-r" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mot de Passe" >
                                                <span class="fa fa-lock form-control-feedback"></span>

                                                
                                                         <span class="invalid-feedback" role="alert">
                                                             <strong style="color:#f2595c;" id="error-password"></strong>
                                                        </span>
                                                           
                                              </div>


                                             <div class="form-group has-feedback">
                                                <input  id="password-r-c" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirmation-Mot-de-Passe">
                                                <span class="fa fa-lock form-control-feedback"></span>
                                                
                                              </div>



                                          

                                              

                                             
                                            </form>     



                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-primary " id="register">Inscription</button>
                                          </div>
                                        </div>
                                      </div>
                                   </div>

                              <!-- end -->
    <!-- Wrapper End -->

    <!-- Sticky Social Start -->
    
    <!-- Sticky Social End -->

    <!-- Back To Top Button Start -->
   
    <!-- Back To Top Button End -->
    <script src="{{asset('frontt/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontt/js/ImageScroll.js')}}"></script>
    <!-- ==== jQuery Library ==== -->
  

    <!-- ==== Bootstrap Framework ==== -->
    <script src="{{asset('frontt/js/bootstrap.min.js')}}"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="{{asset('frontt/js/jquery.sticky.min.js')}}"></script>

    <!-- ==== HoverIntent Plugin ==== -->
    <script src="{{asset('frontt/js/jquery.hoverIntent.min.js')}}"></script>

    <!-- ==== Marquee Plugin ==== -->
    <script src="{{asset('frontt/js/jquery.marquee.min.js')}}"></script>

    <!-- ==== Validation Plugin ==== -->
    <script src="{{asset('frontt/js/jquery.validate.min.js')}}"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="{{asset('frontt/js/isotope.min.js')}}"></script>

    <!-- ==== Resize Sensor Plugin ==== -->
    <script src="{{asset('frontt/js/resizesensor.min.js')}}"></script>

    <!-- ==== Sticky Sidebar Plugin ==== -->
    <script src="{{asset('frontt/js/theia-sticky-sidebar.min.js')}}"></script>

    <!-- ==== Zoom Plugin ==== -->
    <script src="{{asset('frontt/js/jquery.zoom.min.js')}}"></script>

    <!-- ==== Bar Rating Plugin ==== -->
    <script src="{{asset('frontt/js/jquery.barrating.min.js')}}"></script>

    <!-- ==== Countdown Plugin ==== -->
    <script src="{{asset('frontt/js/jquery.countdown.min.js')}}"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="{{asset('frontt/js/retina.min.js')}}"></script>

    <!-- ==== Google Map API ==== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="{{asset('frontt/js/main.js')}}"></script>

    <script type="text/javascript">
        
        $(document).ready(function(){


          $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

        $('#register').click(function(event){

              event.preventDefault(); 

                          
                   var name=$('#name-r').val();
                   var email=$('#email-r').val();
                   var password=$('#password-r').val();
                   var password_confirmation=$('#password-r-c').val();


                     $.ajax({
                                type    :"POST",
                                url     :"{{route('inscription.abbonne')}}",
                                data:{
                                    name:name,
                                    email:email,
                                    password:password,
                                    password_confirmation:password_confirmation,
                                },
                                dataType:"json",                                 
                                success :function(response){
                                    
                                    $('#inscription').html();
                                    $('#inscription').attr('class', 'p-3 mb-2 bg-success text-white').html(response);

                                },
                                error :function(response,xhr, status){



                                   if(response.responseJSON.errors){

                                      data=response.responseJSON.errors;
                                     

                                           if(data.hasOwnProperty('name'))
                                             {
                                                  $('#inscription').html();
                                               $('#error-name').html(response.responseJSON.errors.name.toString());
                                             }
                                             if(data.hasOwnProperty('email'))
                                             {
                                                  $('#inscription').html(); 
                                               $('#error-email').html(response.responseJSON.errors.email.toString());
                                             }
                                             if(data.hasOwnProperty('password'))
                                             {
                                                  $('#inscription').html();
                                               $('#error-password').html(response.responseJSON.errors.password.toString());
                                             }
                                     }
                                   

                                }
                                     
                            
                          });


         });


  
}); 


$('#imgs').imageScroll({
 
        // top,right,bottom,left optional

          orientation:"top",
         
          // animation speed

          speed:1500,

          // animation interval

          interval:1500,

          // pause on hover

          hoverPause:true,

         
         // callback function after every scroll motion

          callback:function(){ return false;}

});



    </script>

    @include('sweetalert::alert')

</body>
</html>
