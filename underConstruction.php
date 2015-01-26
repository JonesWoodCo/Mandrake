
<?php
	if(isset($_POST) && !empty($_POST) ){
		//an email must be sent
	
		$name=$_POST['name'];
		$sender=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
	
		$email="Name: " . $name . "\n". "\n" . "Email: " . $sender . "\n". "\n" . "Subject: " . $subject . "\n". "\n" . "Message: " . $message;
		mail("cjones@sycamoreleaf.com", $subject, $email);
	}
	?>

<!doctype html>
<html>
<head>
    
    <!--meta tags-->
    <meta charset="utf-8">
     
      <!--font-->
     <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
        
    <title>Mandrake Design</title>
    
    <!--css files-->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="mouseparallax.css" rel="stylesheet" type="text/css">
    <link href=main.css rel=stylesheet>
    <link href=message.css rel=stylesheet>
        
    <!--javascript files-->
    <script src="jquery.js"></script>
    <script type='text/javascript' src='jquery-scrollto.js'></script>
    <script src="jquery-ui.js"></script>
    <script src="jquery-scrollto.js"></script>
    <script src="messageJS.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="mouse.parallax.js"></script>
    
    <link rel="icon" type="image/png" href="img/mandrakeFavicon.png">
    
</head>

<body>
    <section id="top">
	
	<nav>
		<ul>
			<li class= "homeLink mainNav"><a href="http://www.mandrakedesign.com">HOME</a></li>
			<li class= "homeLink mainNav slash">\</li>
			<li class="aboutLink mainNav"><a class="aboutLink" href="underConstruction.php">ABOUT</a></li>
			<li class= "homeLink mainNav slash">\</li>
			<li class="workLink mainNav"><a href="underConstruction.php">WORK</a></li>
			<li class= "homeLink mainNav slash">\</li>
                        <li class="contactLink mainNav messageSocialButton"><a href="#">CONTACT</a></li>
			
			<li class="messageSocialButton buttonanimator mainNav"><a href="#"><img class="socialButtons" src="img\mail.png"></a></li>
			<li class="twitter buttonanimator mainNav"><a href="https://twitter.com/DesignMandrake"><img class="socialButtons" src="img\twitter.png"></a></li>
			<li class="linkedin buttonanimator mainNav"><a href="https://www.linkedin.com/profile/public-profile-settings?trk=prof-edit-edit-public_profile"><img class="socialButtons" src="img\linkedin.png"></a></li>
			<li class="instagram buttonanimator mainNav"><a href="http://instagram.com/topherjonesy/"><img class="socialButtons" src="img\instagram.png"></a></li>
			<li class="facebook buttonanimator mainNav"><a href="http://www.facebook.com/jonescommachris"><img class="socialButtons" src="img\facebook.png"></a></li>  
		</ul>
		
	</nav>
        
	    
	
	    <div class="messageBox">
		<div style="font-family: 'Arvo', serif; font-size: 1.5em; color: #f9ecd9; float: left;">Send me a message!</a>
		</div>
		<div class='message-x'><a href='#' style="font-family: 'Arvo', serif; font-size: 2.0em; color: #f9ecd9; float: right;">X</a>
		</div>
		<div class="container">						
		    <form method="post" action="index.php">
			<div class="row uniform">
			    <div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
			    <div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
			 </div>
			<div class="row uniform">
			    <div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
			</div>
			<div class="row uniform">
			    <div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
			</div>
			<div class="row uniform">
			    <div class="12u">
				<ul style=" list-style: none;" class="actions">
				    <li><input style="display: inline; width: 150px; border: 0px;" type="submit" class="sendMessage" value="Send Message" /></li>
				</ul>
			    </div>
			</div>
		    </form>
		</div>
            </div>
        </div>
</section>
    
    
    
    
    
    
    
    
    <div class='land-sky'>
	<img src="img\landsky.png">
    </div>
    
    
<section class="parallax-content">
    
    <!--TIE FIGHTER-->
    <div id="background" class="mouse-bg">
       
    </div>
    
    
    <!--HP AND C3P0-->
    <div id="foreground" class="mouse-bg">
        
    </div>
    
    
    <!--LOGO-->
    <div id="fore-foreground"  class="mouse-bg">
         <p style="text-shadow: 5px 5px #3b3b3a; font-family: 'Arvo', serif; font-size: 5.0em; color: #f9ecd9; margin: 200px;" > 404: This page has been petrified. Mandrake roots are being stewed for its revival.</p>
    </div>
    
    
    
    <!--DOTS-->
    <div id="fore-fore-foreground"  class="mouse-bg">
        
    </div>
    
    <!--about paragraph -->
    <div id="about-parallax"  class="mouse-bg">
    </div>
</section>



<script>
$(document).ready(function() {
				$('#background').mouseParallax({ moveFactor: 9 });
				$('#foreground').mouseParallax({ moveFactor: 5 });
				$('#fore-foreground').mouseParallax({ moveFactor: 5 });
				$('#fore-fore-foreground').mouseParallax({ moveFactor: 12 });
				$('#about-parallax').mouseParallax({ moveFactor: 5 });
				
				$('body').height(13500);
			});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
<!--mobile
http://matthew.wagerfield.com/parallax/
https://github.com/wagerfield/parallax
http://www.html5rocks.com/en/mobile/mobifying/
http://stackoverflow.com/questions/11895620/how-to-create-a-completely-device-compatible-website
-->
