<!DOCTYPE html>
<html class="no-js">

<head>
<meta charset="utf-8">
<?php $a=basename($_SERVER['PHP_SELF']);
if($a=='index.php'){
	   $b='current';$c=$d=$e=$f=$g=$h=$i=$j=$k=$l=$m="";
	   $n='<meta name="keywords" content="Austin Website Design, Austin Mobile Apps Development, Web Development, Mobile App development Austin, Mobile Apps Development Company Austin, Internet Marketing, Enterprise Mobile App Development & Mobility Solutions."/>';
	   $o='<meta name="description" content="W2S Solutions, A  Leading Austin based website design, development company offering web design, web programming, Mobile application development, web 2.0 programming, business presentations, internet marketing services"/>';
	   $p='Mobile Apps Development Company Austin | Austin Mobile Apps Development | Web Development';
	   }
else if($a=='iphone-app-development.php'){
	   $c='current';$b=$d=$e=$f=$g=$h=$i=$j=$k=$l=$m="";
	   $n='<meta name="keywords" content="Austin iPhone app Developers, iPhone software development, iPhone apps development, iPhone developers, iphone programmers, iPhone App Developers, iPhone Programming."/>';
	   $o='<meta name="description" content="W2S Solutions, A Leading Austin based Company for Apple iPhone Mobile Application Development. W2S Solutions has worked with diversified range of startups and well-known enterprises to bring fresh idea to life."/>';
	   $p='Austin iPhone app Developers | iPhone developers | iPhone apps development';
	   }
else if($a=='ipad-app-development.php'){
		$d='current';$c=$b=$e=$f=$g=$h=$i=$j=$l=$k=$m="";
		$n='<meta name="keywords" content="iPad Application Development, iPad App Development Company, Mobile App Developers in Austin, App Developers Austin, Best iPad Apps"/>';
		$o='<meta name="description" content="W2S Solutions, A Leading Austin iPad application development & design company. Our iPad developers have good experience and knowledge in iPad custom application development using iPad-supported technologies, and capable of delivering apps using inbuilt features."/>';
		$p='iPad App Development Company | Mobile App Developers in Austin | App Developers Austin';
		}
else if($a=='android-app-development.php'){
		$e='current';$c=$d=$b=$f=$g=$h=$i=$j=$l=$k=$m="";
		$n='<meta name="keywords" content="Android Developers, Android Programming, Android Application Development in Austin, Android Programmers, Android App Development Companies, Android Apps Development."/>';
		$o='<meta name="description" content="W2S Solutions, A Leading Austin based company for android mobile application development.Our best practice enables rapid and scalable development and deployment of IT services by leveraging lean, agile and kanban principles."/>';
		$p='Android Application Development in Austin | Android Programming | Android Developers';
		}
else if($a=='enterprise-application-development.php'){
		$f='current';$c=$d=$e=$b=$g=$h=$i=$j=$l=$k=$m="";
		$n='<meta name="keywords" content="Enterprise Software Company, Software Companies in Austin Texas, Mobile App Developers in Austin, Mobile and Responsive Website Application Experts in Austin TX, Enterprise Application"/>';
		$o='<meta name="description" content="W2S Solutions delivers enterprise apps with rich set features designed to help you achieve operational efficiency and better business performance. Our apps are configurable, extensible, and integrate with any existing infrastructure and meet your unique business needs."/>';$p='Enterprise Software company | Mobile and Responsive Website Application Experts in Austin, TX';
		}
else if($a=='web-development.php'){
		$g='current';$c=$d=$e=$f=$b=$h=$i=$j=$l=$k=$m="";
		$n='<meta name="keywords" content="Austin Based Web Development, Website Programming, Austin Based Web Design, Enterprise Web Application Development"/>';
		$o='<meta name="description" content="W2S Solutions, A Leading Austin based company for web programming and Mobile Application development. World class mobile Application services, affordable web design web development solutions & services offered by Web  development company Austin."/>';
$p='Website Programming | Austin based Web Development | Austin Based Web Design';
}
else if($a=='Dot-Net-Microsoft-web-application-development.php'){
		$g='current';$c=$d=$e=$f=$b=$h=$i=$j=$l=$k=$m="";
		$n='<meta name="keywords" content="Austin .NET Development Company, Web Development Austin Texas, Web Application Development Austin, Microsoft Application Development, Mobile App Developers in Austin"/>';
		$o='<meta name="description" content="W2S Solutions, A Leading Austin based company developing Microsoft .NET Applications Development.Our Dot Net Developers are good in providing Innovative and differentiate web solution that maximizes your business growth."/>';
		$p='Austin .NET Development Company | Web Development Austin Texas';
		}
else if( $a=='php-mysql-web-application-development.php'){
		 $g='current';$c=$d=$e=$f=$b=$h=$i=$j=$l=$k=$m="";
		 $n='<meta name="keywords" content="Austin PHP, Open Source Programming, Website Development Company,  Austin PHP Open Source Development, PHP Website Development, Open Source Web Development Services."/>';
		 $o='<meta name="description" content="W2S Solutions, A Leading Austin based open source application development company.Our PHP Development team has the spirit of innovation, taking up the challenge, problem solving attitude helps clients to achieve their expected business outcome easily."/>';
		 $p='Austin PHP | Open Source Programming | Website Development Company';
}
else if($a=='jquery-ecommerce-web-application-development.php'){
		$g='current';$c=$d=$e=$f=$b=$h=$i=$j=$l=$k=$m="";
		$n='<meta name="keywords" content="Jquery Mobile App, Jquery Mobile Framework, HTML5 Apps Developers Austin TX, Jquery Mobile App Builder, Jquery Mobile Application, HTML5 Programming"/>';
		$o='<meta name="description" content="W2S Solutions, A Leading Austin based HTML5 Development & HTML5 programming solution.We offers ecommerce software solutions that increase your revenue and handle your online business transactions in the most credible manner."/>';
		$p='Jquery Mobile App | Jquery Mobile Framework | HTML5 Apps Developers Austin TX';
		}

else if($a=='contacts.php'){
		$l='current';$c=$d=$e=$f=$g=$h=$i=$j=$b=$k=$m="";
        $n='<meta name="keywords" content="Web Programming, Internet Marketing, Software Companies in Austin, Business Presentations"/>';
		$o='<meta name="description" content="Contact us at W2S Solutions for customized web, design & mobile app development services. Our team of  skilled employees will provide solutions to meet your business needs."/>';
		$p='Contact Us at W2S for Your Web | Mobile | Design & Software Needs';
		}

else if($a=='blog.php'){
		$k='current';$c=$d=$e=$f=$g=$h=$i=$j=$b=$l=$m="";
        $n='<meta name="keywords" content="Mobile Application Development, Web Application Development Blog, Business Presentation."/>';
		$o='<meta name="description" content="W2S Solutions, A Leading Austin based open sourceMobile application development company blogs about technology, web design, web Application development and mobile Application  development."/>';
		$p='Mobile Application Development | Web Application Development Blog | W2S Solutions';
		}

else if($a=='product-portfolio.php'){
		$m='current';$c=$d=$e=$f=$g=$h=$i=$j=$b=$l=$k="";
        $n='<meta name="keywords" content="Austin Mobile App Development, Web Development Company Austin, Web Development Austin Texas, Enterprise Web Application Development"/>';
		$o='<meta name="description" content="Take a look at the Creative Services Portfolio of  W2S Solutions for Mobile Apps development services, Web Development services, Web designing services &internet marketing services."/>';
		$p='Check Out Our Creative Services Portfolio | W2S Solutions, TX';} 

else if( $a == 'privacy-policy.php'){
		$o = '<meta name="keywords" content="Privacy Policy, mobile apps development, Web Development Company Austin, W2S Solutions"/>';		
		$n = '<meta name="description" content="W2S Solutions is committed to protect and respect your privacy with its legal policies. This Privacy Policy applies to all of the products, services and websites offered by the organization." />';		
		$p = 'Privacy Policy - W2S Solutions |Web Development Company Austin';
		} 
else if ( $a == 'terms-and-conditions.php'){
		 $o = '<meta name="keywords" content="terms of use, terms of use policy, W2S solutions terms of use, Austin, Texas, Terms & Conditions"/>';
		 $n ='<meta name="description" content="Read terms of use carefully before browsing W2S Solutions. Know more about our trademark usage guideline, use of materials limitations, advertisements, promotions and legal terms of use." />';
		 $p = 'Terms & Conditions - W2S Solution | Austin,Texas';
		 } 
		 echo "\n".$n."\n".$o."\n";?>
     
     
<title><?php echo $p;?>
</title>
     
     

<link rel="shortcut icon" href="_content/images/w2slogofave.png"/>

<link rel="stylesheet" href="_layout/css/combine.css">

<link rel="stylesheet" href="_layout/js/layerslider/css/layerslider.css" type="text/css">

<link rel="stylesheet" href="_layout/js/bxslider/jquery.bxslider.css">

<link rel="stylesheet" href="_layout/js/magnificpopup/magnific-popup.css">

<link rel="stylesheet" href="_layout/js/revolutionslider/css/settings.css">

<link rel="stylesheet" href="_layout/js/revolutionslider/css/custom.css">


<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">


<link rel="stylesheet" href="_layout/css/fontawesome/font-awesome.min.css">


<link rel="stylesheet" href="_layout/css/iconfontcustom/icon-font-custom.css">


<link rel="stylesheet" href="_layout/css/animate/animate.min.css">


<script>
<!--Latest google analytics code dated on 12/08/2014 2:49pm-->
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52933376-1', 'w2ssolutions.com');
  ga('require', 'linkid', 'linkid.js');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');


</script>


<!-- Yandex.Metrika counter -->

<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25599248 = new Ya.Metrika({id:25599248,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");

</script>

<noscript>

<div><img src="//mc.yandex.ru/watch/25599248" style="position:absolute; left:-9999px;" alt="Mobile Apps Development Company Austin, Web Development, W2SSolutions" />
</div>
</noscript>

<!-- /Yandex.Metrika counter -->

</head>


<body class="zoom">

<noscript>

<p class="javascript-required"> You seem to have Javascript disabled. This website needs javascript in order to function properly.</p>
</noscript>

<!--[if lte IE 8]>

<p class="browser-update">You are using an <strong>outdated</strong> browser. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade your browser</a> to improve your experience.</p><![endif]-->


<div id="wrap">


<div id="header-top">


<div class="row">


<div class="span6" id="header-top-widget-area-1">


<div class="widget widget_text">


<div class="textwidget">


<p class="last">&nbsp;</p>

</div>
</div>
</div>





<div class="span6" id="header-top-widget-area-2">




<div class="widget widget_text">




<div class="textwidget">





<div class="text-right">
<a href="https://www.facebook.com/way2smileSolutionspvtltd" target="_blank" class="facebook-icon social-icon"><i class="ifc-facebook"></i></a>
<a href="https://twitter.com/w2ssolutions" target="_blank" class="twitter-icon social-icon"><i class="ifc-twitter"></i></a>
<a href="http://www.pinterest.com/way2smile/" target="_blank" class="pinterest-icon social-icon"><i class="ifc-pinterest"></i></a>
<a href="https://plus.google.com/100513502934104525715/posts" target="_blank" class="googleplus-icon social-icon"><i class="ifc-google_plus"></i></a>
<a href="http://www.linkedin.com/company/w2s-solutions" target="_blank" class="linkedin-icon social-icon"><i class="ifc-linkedin"></i></a>


</div>

</div>

</div>

</div>

</div>

</div>




<div id="header">



<div class="row">



<div class="span3"><a href="http://w2ssolutions.com/" id="logo"><img class="responsive-img" src="_content/images/logo.png" alt="w2ssolutions, Mobile Apps Development Company Austin"></a>

</div>



<div class="span9 nav-container"><nav><a href="#" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>

<ul class="sf-menu" id="menu">

<li class=" <?php echo $b;?>"><a href="http://w2ssolutions.com/">Home</a></li>

<li class="<?php echo $c;?>"><a href="iphone-app-development">Iphone</a></li>

<li class="<?php echo $d;?>"><a href="ipad-app-development">Ipad</a></li>

<li class="<?php echo $e;?>"><a href="android-app-development">Android</a></li>

<li class="<?php echo $f;?>"><a href="enterprise-application-development">Enterprise</a></li>

<li class="<?php echo $g;?>"><a href="web-development">Web Development</a>

<ul class="<?php echo $h;?>">

<li ><a href="Dot-Net-Microsoft-web-application-development">Microsoft Development</a></li>

<li><a href="php-mysql-web-application-development">PHP Development</a></li>

<li><a href="jquery-ecommerce-web-application-development">Ecommerce & Jquery Development</a></li>

</ul></li>

<li class="<?php echo $m;?>"><a href="product-portfolio">Portfolio</a></li>

<li class="<?php echo $l;?>"><a href="contacts">Contact</a></li>

</ul></nav>

</div>

</div>

</div>