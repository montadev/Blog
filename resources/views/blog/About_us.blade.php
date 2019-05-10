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
   	
   	 <h2>Plateforme de Transformation Sociétale</h2>

   	</div>
   	 
	<div id="all" class="col-lg-12">
		<div id="inAll">
			<div id="triangle-1"></div>
			<div id="triangle-2"></div>
			<div id="contenu">
				<div class="carre"><p>On dit que les nouvelles générations seront difficiles
à gouverner. Je l'espère bien.</p></div><!--
				--><div class="carre"><p>On dit que les nouvelles générations seront difficiles
à gouverner. Je l'espère bien.</p></div><!--
				--><div class="carre"><p>On dit que les nouvelles générations seront difficiles
à gouverner. Je l'espère bien.</p></div><!--
				--><div class="carre"><p>On dit que les nouvelles générations seront difficiles
à gouverner. Je l'espère bien.</p></div>
			</div>
		</div>
	</div>

        <div class="row">
        	 <div class="col-lg-6 col-lg-offset-6 ">
       	<p class="citation">
       		« On dit que les nouvelles générations seront difficiles
à gouverner. Je l'espère bien. »
       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Alain</p>
       </div>
       </div>
     </div>

<!-- end section with image --> 
<!-- first section -->
   <div class="container para">

   <div class="row text-center">
   	
   	 <h2>Réunir des acteurs libres,optimistes et engagés</h2>

   	</div>
   	 
   <div class="col-lg-12">
     	<p>
   		Témoin d’une génération aux attentes sociétales fortes, Labenet est
				une association d’intérêt général, qui s’adresse aux acteurs de la société
				civile et à tous les citoyens, qui ont pris conscience de l’impact que
				chacun d’entre nous peut avoir sur la société. Labenet se veut, ainsi,
				être le reflet de ces générations libres, optimistes et engagés pour créer
				la Tunisie de demain et impulser le changement.
        </p>

        <p>
				Labenet est un accélérateur d’idées et de projets, permettant à chacun
				d’apporter sa contribution « sa pierre à l’édifice », pour la construction
				d’une Tunisie meilleure. C’est au travers de la promotion des valeurs de
				collaboration, de partage, et de confiance, que Labenet se propose de
				permettre à chacun d'accéder aux ressources et aux opportunités
				nécessaires à son émancipation et de contribuer à résoudre nombre de
				défis, se posant à notre société.

				</p>	
       
       </div>

        <div class="row">
        	 <div class="col-lg-6 col-lg-offset-6 ">
       	<p class="citation">
       		« On dit que les nouvelles générations seront difficiles
à gouverner. Je l'espère bien. »
       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Alain</p>
       </div>
       </div>
     </div>

<!-- end first section -->


<!-- start second section -->

     <div class="container para">

   <div class="row text-center">
   	
   	 <h2>Un collectif, Une communauté</h2>

   	</div>
   	 
   <div class="col-lg-12 text-center">

   	   <div class="row">
   	   	  <div class="col-lg-6 text-center">
     	<h3>La mission de Labenet se décline sur
         2 axes :</h3>

			         <p><img src="{{asset('frontt/logo/small.png')}}" class="img">
			         	Explorer des défis d’intérêt
			général en mobilisant le grand
			public et les acteurs concernés,
			pour identifier les leviers réels
			de progrès social.</p>

			    <p><img src="{{asset('frontt/logo/small.png')}}" class="img">
			    	Explorer des défis d’intérêt
			général en mobilisant le grand
			public et les acteurs concernés,
			pour identifier les leviers réels
			de progrès social.</p>
		</div>


		 <div class="col-lg-6 ">
     	<h3>Les activités de Labenet sont
structurées en 4 domaines :</h3>

			         <p><img src="{{asset('frontt/logo/small.png')}}" class="img">
			         animation de communauté.</p>

			    <p><img src="{{asset('frontt/logo/small.png')}}" class="img">
			    Réflexion et production d’idée.</p>

			     <p><img src="{{asset('frontt/logo/small.png')}}" class="img">
			     	incubation et accélération de
projets collaboratifs;.</p>
			      <p><img src="{{asset('frontt/logo/small.png')}}" class="img">
			      Coaching et accompagnement.</p>
		</div>

		</div>
       </div>

       <div class="row">
        	 <div class="col-lg-4 col-lg-offset-8">
       	<p class="citation">
       		« L'avenir n'est interdit
à personne »

       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Léon Gambetta</p>
       </div>
       </div>
     </div>
   
   <!-- end second section -->


   <!-- start third section -->
    <div class="container para">

   <div class="row text-center">
   	
   	 <h2>Les valeurs suivantes, guident les actions et les décisions

et assurent le lien au sein de la communauté Labenet</h2>

   	</div>
   	 
   <div class="col-lg-12 text-center">
     	

     	<table style="width: 60%;margin: auto;">
 
			  <tr>
			    <td>1</td>
			    <td>Indépendance</td>
			    <td>Travailler avec l’ensemble des acteurs de
			la société sans compromettre notre
			indépendance.</td>
			  </tr>
			  <tr>
			    <td>2</td>
			    <td>Transparence</td>
			    <td>Labenet est une organisation
			non-hiérarchique, chacun a la possibilité
			de s’investir et de contribuer.</td>
			  </tr>
			  <tr>
			    <td>3</td>
			    <td>Ecoute du
			terrain</td>
			    <td>Internet n'est qu'un outil, il ne peut
			remplacer l’interaction avec la réalité du
			terrain.</td>
			  </tr>
			  <tr>
			    <td>4</td>
			    <td>Inclusion</td>
			    <td>Associer le maximum d’acteur, c’est ce
			qui guide nos actions</td>
			  </tr>
 
 
</table>
       </div>

        <div class="row">
        	 <div class="col-lg-4 col-lg-offset-8">
       	<p class="citation">
       		« La seule personne que vous êtes destinée à

devenir est la personne que vous déciderez d'être. »

       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Pam Finger</p>
       </div>
       </div>
     </div>


     <!-- end third section -->
     
     <!-- start 4 section -->
      <div class="container para">

   <div class="row text-center">
   	
   	 <h2>Les objectifs</h2>

   	</div>
   	 
   <div class="col-lg-12">
     	<p>  <span class="glyphicon glyphicon-ok"></span>
   		mobiliser l’intelligence et la créativité collective pour inventer
ensemble des solutions nouvelles pour le développement de la
Tunisie.
        </p>

        <p><span class="glyphicon glyphicon-ok"></span>
   		favoriser la remontée des idées concrètes, leur approfondissement et
accompagner leur mise en œuvre.
        </p>

        <p><span class="glyphicon glyphicon-ok"></span>
   		Mettre en place un processus d’innovation sociale collaboratif,
indispensable pour s’adapter à un monde en forte évolution.
        </p>

        <p><span class="glyphicon glyphicon-ok"></span>
   		Reprendre confiance en l’avenir et en la capacité du Tunisien à imaginer et à faire ce saut culturel qui le fera acteur du changement.
        </p>
        <p><span class="glyphicon glyphicon-ok"></span>
   		lancer un webzine collaboratif donnant la parole aux jeunes
générations, en vue de partager leurs expériences, nourrir leurs
ambitions et susciter leurs contributions.
        </p>

        <p><span class="glyphicon glyphicon-ok"></span>
   		Permettre aux jeunes d’exprimer de manière directe leurs partis pris,
et leur volonté d’agir sur leur quotidien.
        </p>	
       
       </div>

           <div class="row">
        	 <div class="col-lg-4 col-lg-offset-8">
       	<p class="citation">
       		« L'avenir n'appartient à personne. Il n'y a pas de
précurseurs, il n'existe que des retardataires »

       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Jean Cocteau</p>
       </div>
       </div>
     </div>
     <!-- end 4 section -->

    <!-- start 5 section -->
     <div class="container para">

   <div class="row text-center">
   	
   	 <h2>Plateforme de Transformation Sociétale</h2>

   	</div>
   	 
   <div class="col-lg-12">
     	<p> 
   		<span style="font-weight: bold">Labenet </span>privilégiera les solutions locales, qui sont a concrétiser sur le terrain,
et qui favorisent la coopération entre les personnes, tels que:
        </p>

         <p><span style="font-weight: bold">La Fabrique Labenet</span></p>
         <p>
         	C’est une plateforme d’entraide citoyenne où chacun peut offrir son temps, son
talent au service de projets inspirants et qui participent à l’émergence d’une
société plus solidaire
         </p>

        <p><span style="font-weight: bold">Le Grand Prix Créateur d’avenir</span></p>
         <p>
         	Récompenser les initiatives de développement, locales, originales, inspirantes,
réussies et duplicables. Ce grand prix contribue à donner confiance en soi
et facilite l'expression des talents que chacun possède. Les initiatives devront :
         </p>

         <ul>
         	<li>Contribuer à l'intérêt général.</li>
         	<li>Etre Innovantes.</li>
         	<li>Etre Reproductibles ou inspirantes.</li>
         	<li>Avoir Réussi .</li>
         </ul>
        	
       
       </div>
        <div class="row">
        	 <div class="col-lg-4 col-lg-offset-8">
       	<p class="citation">
       		« Les fleurs de demain sont dans les
semences d'aujourd'hui »

       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Albert Camus</p>
       </div>
       </div>
     </div>
     <!-- end 5 section -->

     <!-- start 6 section -->
     <div class="container para">

   <div class="row text-center">
   	
   	 <h2>Créer la Tunisie de demain</h2>

   	</div>
   	 
   <div class="sec6">
     	<div class="row inSec6">
     		<div class="col-lg-2">
     			<span><i class="fas fa-atom fa-4x"></i></span>
     		</div>
     		<div style="background-image: linear-gradient(to right, #ffffff, #f5f5f5, #ececec, #e2e2e2, #d9d9d9);" class="col-lg-10">
     			<h3>Ecosystème</h3>
     			<p>Fédérer les initiatives citoyennes pour la construction d’une nouvelle Tunisie</p>
     		</div>
     	</div>
     	<div class="row inSec6">
     		<div style="background-image: linear-gradient(to left, #ffffff, #f5f5f5, #ececec, #e2e2e2, #d9d9d9);" class="col-lg-10">
     			<h3>Lieu de Dialogue</h3>
     			<p>Co-construire et participer à la mise en œuvre de nouveaux projets</p>
     		</div>
     		<div class="col-lg-2">
     			<span><i class="far fa-comments fa-4x"></i></span>
     		</div>
     	</div>
     	<div class="row inSec6">
     		<div class="col-lg-2">
     			<span><i class="fas fa-hand-holding-heart fa-4x"></i></span>
     		</div>
     		<div style="background-image: linear-gradient(to right, #ffffff, #f5f5f5, #ececec, #e2e2e2, #d9d9d9);" class="col-lg-10">
     			<h3>Espace inter-génération</h3>
     			<p>Accompagner et favoriser l’apport des différentes générations.</p>
     		</div>
     	</div>
     	<div class="row inSec6">
     		<div style="background-image: linear-gradient(to left, #ffffff, #f5f5f5, #ececec, #e2e2e2, #d9d9d9);" class="col-lg-10">
     			<h3>Vecteur de développement</h3>
     			<p>Imaginer des solutions contribuant à augmenter le bien-être des citoyens</p>
     		</div>
     		<div class="col-lg-2">
     			<span><i class="fas fa-chart-line fa-4x"></i></span>
     		</div>
     	</div>
    </div>
        <div class="row">
        	 <div class="col-lg-4 col-lg-offset-8">
       	<p class="citation">
       		« La vraie générosité envers l'avenir
consiste à tout donner au présent »

       	</p>
       </div>
        <div class="col-lg-2 col-lg-offset-10">
       	<p class="citation">Albert Camus</p>
       </div>
       </div>
     </div>
     <!-- end 6 section -->


</body>
</html>