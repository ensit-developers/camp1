<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en-US"> 
    <!--<![endif]-->
    <head>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>أفضحهم </title>         
        <meta name="description" content="Insert Your Site Description" /> 
        <!-- Mobile Specifics -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="320" /> 
        <!-- Mobile Internet Explorer ClearType Technology -->
        <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->
        <!-- Bootstrap -->
        <link href="_include/css/bootstrap.min.css" rel="stylesheet">
        <!-- Main Style -->
        <link href="_include/css/main.css" rel="stylesheet">
        <!-- Supersized -->
        <link href="_include/css/supersized.css" rel="stylesheet">
        <link href="_include/css/supersized.shutter.css" rel="stylesheet">
        <!-- FancyBox -->
        <link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <!-- Font Icons -->
        <link href="_include/css/fonts.css" rel="stylesheet">
        <!-- Shortcodes -->
        <link href="_include/css/shortcodes.css" rel="stylesheet">
        <!-- Responsive -->
        <link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="_include/css/responsive.css" rel="stylesheet">
        <!-- Supersized -->
        <link href="_include/css/supersized.css" rel="stylesheet">
        <link href="_include/css/supersized.shutter.css" rel="stylesheet">
        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="#">
        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="144x144" href="#">
        <link rel="shortcut icon" href="imd.png" type="image/x-icon" sizes="1500x1000" />
        <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Pangolin" rel="stylesheet">
        <!-- Modernizr -->
        <script src="_include/js/modernizr.js"></script>
        <!-- Analytics -->
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        <!-- End Analytics -->
    </head>
    <body>
        <!-- This section is for Splash Screen -->
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
        <!-- End of Splash Screen -->
        <!-- Homepage Slider -->
        <!-- End Homepage Slider -->
        <!-- Header -->
        <header>
            <div class="sticky-nav">
                <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
                <div id="logo">
</div>
                <nav id="menu">
                    <ul id="menu-nav">
                        <li>
                            <img class="imd" src="imd.png" width="150" />
                        </li>

                        <li >
                            <a onclick="location.href='index.php';">Chkoun a7na</a>
                        </li>
                        <li>
                            <a onclick="location.href='index.php';">3adi Réclamation </a>
                        </li>
                        <li>
                            <a onclick="location.href='stat.php';" target="_blank">Chouf stats </a>
                        </li>
                        <li class="current">
                            <a onclick="location.href='chouflihal.php';" target="_blank">choufli 7al </a>
                        </li>
                        <li>
                            <a onclick="location.href='index.php';">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End Header -->
        <!-- Our Work Section -->
        <div id="work" class="page">
            <div class="container">
                <h2 style="text-align:center;">Proposi el 7all </h2>
                <BR>
                <div class="list-group">
                    <?php 



                    include 'config.php' ;


			
			
    
            						try
								{
									// On se connecte à MySQL
									$bdd = new PDO($conn,$nomUtilisateur,$motDePasse) ;
									
								}
								catch(Exception $e)
								{
									// En cas d'erreur, on affiche un message et on arrête tout
																die('Erreur : '.$e->getMessage());
								}



$sql2="TRUNCATE TABLE `TABLE 1`";

$one ="'";

$dbl='"';


$sql = "SELECT * FROM `reclamations` ORDER BY likes DESC;  LIMIT 100"; 

$reponse2 = $bdd->query($sql);



$x = 0; 
while($data = $reponse2->fetch()) 
    { $x =$x+1 ;
    // on affiche les informations de l'enregistrement en cours 
	$dat =$data['id'];
	$one ="'";
$dbl='"';
 print '<a href="chouflihal2.php?id='.$dat.$dbl.' class="list-group-item active">';
 $link="'chouflihal2.php?id=".$dat.$one;
 print '<h4 style="font-size:x-large;"  class="list-group-item-heading">';
 print'<font color="#AE7FFF">';

 echo "$x" ;
 print '</font>';
 
  echo ' OBJET: ' .$data['objet']; 
 print'</h4>' ;
  print '<p  class="list-group-item-text">';
  echo '   Chnya la7keya : ' .$data['text'];
  echo "<BR>";
  echo '   Win saret: ' .$data['gov'];
  print'</p>';
    print '<iframe src='.'"'.$data['maps'].'"'. 'width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>';

  print'</a>' ;
  
  print'<button type="button" onclick=showUser('.$data['id'].',this) style="float: left;margin-right: 15px;width:150px" class="btn btn-success">Voti Pour&nbsp';
  print $data['likes']."</button>";

 print '<button type="button" onclick=showUser2('.$data['id'].',this) style="float: left;margin-right: 15px; width:150px" class="btn btn-danger">Voti Contre&nbsp';
 print $data['dislikes']."</button>";


   print '<div id="button5"  >';
  print'<input onclick="location.href ='.$link.';" type="submit" style="float: right;width:300px" value="Al9alha 7all" class="cform-submit">';
	      
	print      '</div>';
  
  
   print '<BR>';
  print '<BR>';
  print '<BR>';
  print '<BR>';
    } 





    // Et pour mettre fin à la connexion



?>


  
  
                </div>
                <!-- End Our Work Section -->
                <!-- About Section -->
                <!-- End About Section -->
                <!-- Contact Section -->
                <!-- End Contact Section -->
                <!-- Twitter Feed -->
                <!-- End Twitter Feed -->
                <!-- Socialize -->
                <div id="social-area" class="page">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <nav id="social">
                                    <ul>
                                        <li>
                                    <a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a>
                                </li>
                                
                                
                               
                                <li>
                                    <a href="https://www.facebook.com/Bluxart" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com/in/alessioatzeni" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a>
                                </li>
                                <li>
                                    <a href="http://themeforest.net/user/Bluxart" title="Follow Me on Youtube" target="_blank"><span class="font-icon-social-youtube"></span></a>
                                </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Socialize -->
                <!-- Footer -->
                <footer>
                    <p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
                </footer>
                <!-- End Footer -->
                <!-- Back To Top -->
                <a id="back-to-top" href="#"><i class="font-icon-arrow-simple-up"></i></a>
                <!-- End Back to Top -->
                <!-- Js -->
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>                 
                <!-- jQuery Core -->
                <script src="_include/js/bootstrap.min.js"></script>                 
                <!-- Bootstrap -->
                <script src="_include/js/supersized.3.2.7.min.js"></script>                 
                <!-- Slider -->
                <script src="_include/js/waypoints.js"></script>                 
                <!-- WayPoints -->
                <script src="_include/js/waypoints-sticky.js"></script>                 
                <!-- Waypoints for Header -->
                <script src="_include/js/jquery.isotope.js"></script>                 
                <!-- Isotope Filter -->
                <script src="_include/js/jquery.fancybox.pack.js"></script>                 
                <!-- Fancybox -->
                <script src="_include/js/jquery.fancybox-media.js"></script>                 
                <!-- Fancybox for Media -->
                <script src="_include/js/jquery.tweet.js"></script>                 
                <!-- Tweet -->
                <script src="_include/js/plugins.js"></script>                 
                <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
                <script src="_include/js/main.js"></script>                 
                <!-- Default JS -->
                <!-- End Js -->
    </body>
    <script type="text/javascript">
function showUser(str,bu)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {

    bu.innerHTML=xmlhttp.responseText;
    bu.disabled=true;
    }
  }
xmlhttp.open("GET","getlikes.php?q="+str,true);
xmlhttp.send();
}
function showUser2(str,bu)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {

    bu.innerHTML=xmlhttp.responseText;
    bu.disabled=true;
    }
  }
xmlhttp.open("GET","getdislikes.php?q="+str,true);
xmlhttp.send();
}
</script>
</html>