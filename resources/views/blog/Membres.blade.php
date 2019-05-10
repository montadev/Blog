<html>
<head>
<title>Page Title</title>

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

	<!-- ==== fontawesome icons ==== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/style.css')}}">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/responsive-style.css')}}">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/colors/theme-color-1.css')}}" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('frontt/css/custom.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<!--  style pour about us css  -->
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
 <link rel="stylesheet" href="{{asset('frontt/about_us.css')}}">


</head>




<body>


    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section header--style-1">
            <!-- Header Topbar Start -->
            <div class="header--topbar">
                <div class="container">
                    

                    <div class="float--right float--xs-none text-xs-center">

                    




                        <!-- Header Topbar Action Start -->
                        
                        <!-- Header Topbar Action End -->
                        
                        <!-- Header Topbar Language Start -->
                       
                        <!-- Header Topbar Language End -->

                        <!-- Header Topbar Social Start -->
                        <ul class="top-menu nav hidden-sm hidden-xxs">

                             @if((Auth::check()))
                                 @if(Auth::user()->test==0)
                            <li><a href="{{route('login.logout')}}"><i class="fa fa-home"></i> Logout</a></li>
                                 @endif
                             @endif
                             <li><a href="{{route('Gouvernance')}}"><i class="fa fa-home"></i> Gouvernance </a></li>
                             <li><a href="{{route('Membres')}}"><i class="fa fa-home"></i> Membres</a></li>
                             <li><a href="{{route('About_us')}}"><i class="fas fa-users"></i> Qui Sommes nous ?</a></li>
                             
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


   <div class="row para">
   	   <div class="col-lg-12 text-center">
   	   	<h1>Qui Sommes nous ?</h1>
   	   </div>
   </div>
 <!-- section with image -->  

<!-- first section -->
   <div class="container para">

   <div class="row text-center">
   	
   	 <h2>Créer la Tunisie de demain</h2>

   	</div>
   	 
   <div class="col-lg-12">
     	<p style="font-weight: bold">
   		Gouvernance
        </p>

        <p>				
            Il existe trois niveaux d’implication au sein de LabeNet :
        </p>
        <p>
            • Les membres sont les personnes qui partagent les valeurs, la culture, et
            qui participent aux activités de Labenet.
        </p>
        <p>
            • Les Animateurs sont les membres qui animent ou qui sont porteurs de
            projet. Ils font le lien entre les acteurs, les idées et les partenaires.

        </p>
        <p>
            • Les Référents sont les Animateurs qui déploient, au quotidien, la
            stratégie co-construite de LabeNet et prennent part aux processus de
            décisions.
		</p>	
       
       </div>

        <div class="row">
        	 <div class="col-lg-6 col-lg-offset-6 ">
       	<p class="citation">
       		« L'avenir c'est ce qui dépasse la main tendue »
       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Louis Aragon</p>
       </div>
       </div>
     </div>

<!-- end first section -->





   
     
     

    


</body>
</html>