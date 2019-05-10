
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

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <!-- Header Mainbar End -->

            <!-- Header Navbar Start -->
            
            <!-- Header Navbar End -->
        </header>
        </div>
        <!-- Header Section End -->

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
        <!-- News Ticker End -->

        <!-- Main Breadcrumb Start -->
        <div class="main--breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('index')}}" class="btn-link"><i class="fa fm fa-home"></i>Acceuil</a></li>
                    <li class="active"><span style="color:black;">{{$post->slug}}</span></li>
                </ul>
            </div>
        </div>
        <!-- Main Breadcrumb End -->
        
        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Post Item Start -->
                            <div class="post--item post--single post--title-largest pd--30-0">
                            <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#">{{$post->user->name}}</a></li>
                                        <li><a href="#">{{$post->published_at->diffForHumans()}}</a></li>
                                        <li><span><i class="fa fm fa-eye"></i>{{$post->view_count}}</span></li>
                                        <li><a href="#"><i class="fa fm fa-comments-o"></i>{{count($post->comments)}} Commentaires</a></li>
                                        <li>
                                        <a href="#" >
                                        <i class="fa fa-thumbs-up" aria-hidden="true" id="countlike">
                                           {{count($post->likeusers)}} Likes 
                                        </i> 

                                        </a>

                                        </li>
                                    </ul>

                                    <div class="title">
                                          @if(Auth::check())
                                                  
                                                   <div id="togglelike">
                                                   @if($post->haslike($post->id,Auth::id()))
                                                     <li class="DisLike"><a href="#" id="DisLike"  data-id="{{$post->id}}"><i class="fa fa-thumbs-down" aria-hidden="true"></i>  DisLike</a></li>
                                                   @else

                                                    <li class="Like"><a href="#" id="Like" data-id="{{$post->id}}"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a></li>
                                                   @endif
                                                   </div>
                                          
                                          @else
                                          
                                            <li><a href="#" id="connect" data-id="{{$post->id}}"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a></li>
                                          
                                         @endif
                                    </div>
                                    <div class="title">
                                        <h2 class="h4">{{$post->title}}</h2>
                                    </div>
                                </div>
                                <div class="post--img">
                                    <a href="#" class="thumb"><img src="{{$post->image}}" alt=""></a>
                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                    
                                </div>

                                

                                

                                <div class="post--content">
                                    {!!Markdown::convertToHtml($post->body)!!}

                                    

                                    

                                    

                                    
                                </div>
                            </div>
                            <!-- Post Item End -->
                    
                            <!-- Advertisement Start -->
                            
                            <!-- Advertisement End -->

                            <!-- Post Tags Start -->
                           
                            <!-- Post Tags End -->

                            <!-- Post Social Start -->
                           
                            <!-- Post Social End -->

                           
                            <!-- Post Author Info End -->

                            <!-- Post Nav Start -->
                            
                            <!-- Post Nav End -->

                            <!-- Post Related Start -->
                            
                            <!-- Post Related End -->

                            <!-- Comment List Start -->
                              <div class="comment--list pd--30-0" id="change-comment">
                              @include('blog.comment')

                              </div>
                            <!-- Comment List End -->

                            <!-- Comment Form Start -->
                            <div class="comment--form pd--30-0">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title">
                                    <h2 class="h4">LAISSEZ UN COMMENTAIRE</h2>

                                    <i class="icon fa fa-pencil-square-o"></i>
                                </div>
                                <!-- Post Items Title End -->

                                <div class="comment-respond">





                                    <form  data-form="validate" >
                                        

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>
                                                    <span>Commentaire *</span>
                                                    <span style="color:red" id="body_error"></span>
                                                    <textarea name="body" id="body" class="form-control" required></textarea>
                                                    
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>
                                                    <span>Nom *</span>
                                                    <span style="color:red" id="name_error"></span>
                                                    <input type="text" name="name" id="name" class="form-control" required>
                                                    
                                                </label>                                               
                                             
                                              </div>

                                              <div class="col-sm-6">
                                                <label>
                                                   
                                                    <input type="hidden" name="id" value="{{$post->id}}" id="id" class="form-control" required>
                                                </label>                                               
                                             
                                              </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" id="comment">Poste un commentaire</button>
                                            </div>
                                        </div>
                                    </form>




                                </div>
                            </div>
                            <!-- Comment Form End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Widget Start -->
                            
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            
                            <!-- Widget End -->

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

                            <!-- Widget Start -->
                            
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            
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
    </div>
    <!-- Wrapper End -->

    <!-- Sticky Social Start -->

      
             
      
       

    <div id="stickySocial" class="sticky--right">
        <ul class="nav">
            <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{URL::current()}}">
                    <i class="fa fa-facebook"></i>
                    <span>Follow Us On Facebook</span>
                </a>
            </li>
            <li>
                <a ref="https://twitter.com/intent/tweet?text=my share text&amp;url={{URL::current()}}" class="social-button " id="">
                    <i class="fa fa-twitter"></i>
                    <span>Follow Us On Twitter</span>
                </a>
            </li>
            <li>
                <a href="https://plus.google.com/share?url={{URL::current()}}" class="social-button " id="">
                    <i class="fa fa-google-plus"></i>
                    <span>Follow Us On Google Plus</span>
                </a>
            </li>
                   
            <li>
                <a hhref="http://www.linkedin.com/shareArticle?mini=true&amp;url={{URL::current()}}&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button " id="">
                    <i class="fa fa-linkedin"></i>
                    <span>Follow Us On LinkedIn</span>
                </a>
            </li>
        </ul>
    </div>

      @include('blog.loginmodal')
      @include('blog.modalinscri')
    <!-- Sticky Social End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>

    <div class="row text-center" style="display:none">
      <h3>Basic Dialog</h3>
      <a href="#" id="simple-dialog-1" class="btn btn-lg btn-success">Launch</a>
  </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="{{asset('frontt/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontt/js/ImageScroll.js')}}"></script>

    <!-- ==== Bootstrap Framework ==== -->
    <script src="{{asset('frontt/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontt/js/simpleDialog.js')}}"></script>
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
    
    <script src="{{ asset('js/share.js') }}"></script>

    <script>
       $(document).ready(function(){


          $.ajaxSetup({
           headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
           });

        $('#comment').click(function(event){

              event.preventDefault(); 
                    var test=true;
                   
                   var name=$('#name').val();
                   var body=$('#body').val();
                   var id=$('#id').val();
                     
                      var error = new Object();
                      if(name==""){
                         
                         error.name='Veuillez remplir votre nom'; 
                         test=false;
                      }

                      if(body==""){
                         error.body='Veuillez remplir votre contenu';
                         test=false;
                      }

                       if(test){
                     $.ajax({
                                type    :"POST",
                                url     :"{{route('store.comment')}}",
                                data    :
                                        { 
                                          name: name,
                                          body: body,
                                          id:id,
                                         },
                                dataType:"html",
                                success :function(response){
                                   
                                    //console.log(response);

                                    $('#change-comment').html(response);

                                }
                          });

                    }else{

                                 if(error.hasOwnProperty('name')){
                                 
                                   $('#name_error').html(error.name);

                                   
                                 }

                                 if(error.hasOwnProperty('body')){
                                        $('#body_error').html(error.body);
                                 }
                    }

         });

     $('#togglelike').click(function(event){

         event.preventDefault(); 

          

          if($('#togglelike >li> a')[0].id=="Like")
              {
                 


            
              var id=$('#togglelike >li> a').data('id');

              

                                $.ajax({
                                type    :"POST",
                                url     :"{{route('add.like')}}",
                                data    :
                                         {                                         
                                          id:id,
                                         },
                                dataType:"html",
                                success :function(response){



                                   
                                        $('#countlike').html();
                                        $('#togglelike').html();
                                        $('#togglelike').html('<li><a href="#" id="DisLike" data-id="{{$post->id}}"><i class="fa fa-thumbs-down" aria-hidden="true"></i>  DisLike</a></li>');
                                        $('#countlike').html(response+' '+'Likes');
                                    
                                }
                          });

             
        
             }
             else
             {
                  
              var id=$('#togglelike >li> a').data('id');

                               $.ajax({
                                type    :"POST",
                                url     :"{{route('add.dislike')}}",
                                data    :
                                         {                                         
                                          id:id,
                                         },
                                dataType:"html",
                                success :function(response){
                                   
                                    //console.log(response);

                                    if(response=='test')
                                        {

                                        $("#logmodal").modal();
                                        }
                                    else
                                     {

                                        
                                        $('#countlike').html();
                                        $('#togglelike').html();
                                        $('#togglelike').html('<li><a href="#" id="Like" data-id="{{$post->id}}"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a></li>');
                                       $('#countlike').html(response+' '+'Likes');
                                    }

                                }
                          });


         
    }
});
        






 $('#hermi').click(function(event){
                                        
       event.preventDefault();

       $('#logmodal').modal('hide');
     
    });
  
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
                                               $('#error-email-inscri').html(response.responseJSON.errors.email.toString());
                                             }
                                             if(data.hasOwnProperty('password'))
                                             {
                                                  $('#inscription').html();
                                               $('#error-password-inscri').html(response.responseJSON.errors.password.toString());
                                             }
                                     }
                                   

                                }
                                     
                            
                          });


         });


    $('#liginmodal').click(function(event){

              event.preventDefault(); 

                          
                   var email=$('#email').val();
                   var password=$('#password').val();
                  


                     $.ajax({
                                type    :"POST",
                                url     :"{{route('login.abbonne')}}",
                                data:{
                                    email:email,
                                    password:password,

                                },
                                dataType:"json",                                 
                                success :function(response){
                                    
                                   
                                    $('#login-success').html();
                                    $('#login-success').attr('class', 'p-3 mb-2 bg-success text-white').html(response.status);

                                },
                                error :function(response,xhr, status){

                                     if(response.responseJSON.errors){

                                      data=response.responseJSON.errors;
                                      

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


      

      $('#connect').click(function(event){

            event.preventDefault();

                                $.ajax({
                                type    :"POST",
                                url     :"{{route('add.like')}}",
                                dataType:"html",
                                success :function(response){
                                   
                                    //console.log(response);

                                    if(response=='test')
                                        {

                                        $("#logmodal").modal();
                                        }
                                   

                                }
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

</body>
</html>
