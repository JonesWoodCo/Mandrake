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
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">

  
    <!--font-->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
        
    <title>Mandrake Design</title>

  <!-- Behavioral Meta Data -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Styles -->
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/styles.css"/>
  <link href="message.css" rel="stylesheet">
    
    <!--mobile and tablet styling 
    <link rel="stylesheet" media="handheld, only screen and (max-device-width: 320px)" href="">
    <link rel="stylesheet" media="only screen and (min-width: 641px) and (max-width: 800px)" href="">-->
    
  <!-- JAVASCRIPT -->
  
    <script src="jquery.js"></script>
    <script type='text/javascript' src='jquery-scrollto.js'></script>
    <script src="jquery-ui.js"></script>
    <script src="jquery-scrollto.js"></script>
    <script src="messageJS.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    <!--favicon-->
    <link rel="icon" type="image/png" href="img/mandrakeFavicon.png">

</head>
<body>
  
  
  <section id="top">
	
	<nav>
		<ul>
			<li class= "homeLink mainNav"><a href="http://www.mandrakedesign.com">HOME</a></li>
			<li class="aboutLink mainNav"><a class="aboutLink" href="underConstruction.php">ABOUT</a></li>
			<li class="workLink mainNav"><a href="underConstruction.php">WORK</a></li>
                        <li class="contactLink mainNav messageSocialButton"><a href="#">CONTACT</a></li>
			
			<li class="messageSocialButton buttonanimator mainNav"><a href="#"><img class="socialButtons" src="img/mail.png"></a></li>
			<li class="twitter buttonanimator mainNav"><a href="https://twitter.com/DesignMandrake"><img class="socialButtons" src="img/twitter.png"></a></li>
			<li class="linkedin buttonanimator mainNav"><a href="https://www.linkedin.com/profile/public-profile-settings?trk=prof-edit-edit-public_profile"><img class="socialButtons" src="img/linkedin.png"></a></li>
			<li class="instagram buttonanimator mainNav"><a href="http://instagram.com/topherjonesy/"><img class="socialButtons" src="img/instagram.png"></a></li>
			<li class="facebook buttonanimator mainNav"><a href="http://www.facebook.com/jonescommachris"><img class="socialButtons" src="img/facebook.png"></a></li>  
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
        
	
</section>
  


  <div id="container" class="container">
    
    <ul id="scene" class="scene border fill">
      <li class="layer expand-width" data-depth="1.00"><img class="backStars" src="img/testParallaxLayer.png"></li>
      <li class="layer expand-width" data-depth="0.80"><img class="hpotter" src="img/harryMe3.png"></li>
      <li class="layer expand-width" data-depth="0.60"></li>
      <li class="layer expand-width" data-depth="0.40"><img class="tie-fighter" src="img/tieFighter.png"></li>
      <li class="layer expand-width" data-depth="0.20"><img class="logo" src='img/mandrakeLogo2.png'></li>
      <li class="layer expand-width" data-depth="0.00"><p class="aboutPara" style="text-align: center; text-shadow: 5px 5px #3b3b3a; font-family: 'Arvo', serif; font-size: 2.5em; color: #f9ecd9;">Hi! I'm Chris. Mandrake is an educational venture that I am embarking upon to learn web design and developement. Here you can find some of the projects that I've worked on. If you want to give me another project to work on, send me a message! </p></li>
      
      
      
    </ul>
  </div>
  
  

  <!-- Scripts -->
  
  <script src="parallax.js"></script>
  <script>

  // Nothing new here...it's all in the CSS!
  var scene = document.getElementById('scene');
  var parallax = new Parallax(scene);

  </script>

</body>
</html>
<!--mobile
http://matthew.wagerfield.com/parallax/
https://github.com/wagerfield/parallax
http://www.html5rocks.com/en/mobile/mobifying/
http://stackoverflow.com/questions/11895620/how-to-create-a-completely-device-compatible-website
-->