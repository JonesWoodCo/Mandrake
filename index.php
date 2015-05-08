<?php
	if(isset($_POST) && !empty($_POST) ){
		//an email must be sent
	
		$name=$_POST['name'];
		$sender=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
	
		$email="FROM MANDRAKE DESIGN"."\n"."\n"."Name: " . $name . "\n". "\n" . "Email: " . $sender . "\n". "\n" . "Subject: " . $subject . "\n". "\n" . "Message: " . $message;
		mail("cjones.wingsofgold@gmail.com", $subject, $email);
	}
?>
<!DOCTYPE html>
<html>
	<head><!--this is from mandrakeServer-->
	
	  <meta charset="utf-8">
	
	  
	    <!--font-->
	    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
		
	    <title>Mandrake Design</title>
	
	  <!-- Behavioral Meta Data -->
	  <meta name="apple-mobile-web-app-capable" content="yes">
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	  <!-- Styles -->
	  <link href="message.css" rel="stylesheet">
	  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" type="text/css" href="styles/styles.css"/>
	  
	    
	     <!--mobile and tablet styling -->
	  <link rel="stylesheet" media="handheld, only screen and (max-device-width: 600px)" href="styles/mobile.css">
	  <link rel="stylesheet" media="only screen and (min-width: 601px) and (max-width: 800px)" href="styles/tablet.css">
	    
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
			      <img class="cornerEM" style="height: 30px; float: left; margin-left: 10px; margin-top: 3px;" src="img/cornerEM.png">
			      <ul>
				      <li class= "homeLink mainNav wordLink"><a href="http://www.mandrakedesign.com">HOME</a></li>
				      <li class="aboutLink mainNav wordLink"><a class="aboutLink" href="about.php">ABOUT</a></li>
				      <li class="workLink mainNav wordLink"><a href="work.php">WORK</a></li>
				      <li class="contactLink mainNav wordLink toggle-contact-modal"><a href="#">CONTACT</a></li>
			      </ul>
		      </nav>
		      
		        <!--CONTACT MODAL-->
			<script>
				$(document).ready(function(){
				
				   $('.toggle-contact-modal').click(function() {  
				       $('.contact-modal').toggle();
				   });
				});
			</script>
			<DIV class="modal contact-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true" style='display: none;'>
			  <DIV class="modal-dialog">
			    <DIV class="modal-content">
			      <DIV class="modal-header">
				<P class="modal-title jl-large" id="newModalLabel">CONTACT MANDRAKE</P>
			      </DIV>
			      <FORM method=POST action='index.php'> <!--change based on what page this is nested -->
				
				<DIV class="modal-body">
				    <TABLE class='modal-contact-table' style='width: 90%; margin: 0 5% 0 5%;'>
				       
					<TR>
					    <!--SENDER'S NAME-->
					    <TD style='width: 75%;' class='jl-left'><INPUT type="text" name="name" id="name" placeholder="Your Name:" style='width: 100%; height: 25px; font-size: medium;'></TD>
					</TR>
					<TR>
					    <!--SENDER'S EMAIL-->
					    <TD class='jl-left'><INPUT name="email" id="email" placeholder="Email:" style='width: 100%; height: 25px; font-size: medium;'></TD>
					</TR>
					<TR>
					    <!--SUBJECT-->
					    <TD class='jl-left'><INPUT type="text" name="subject" id="subject" placeholder="Subject:" style='width: 100%; height: 25px; font-size: medium;'></TD>
					</TR>
					<TR>
					    <!--MESSAGE-->
					    <TD class='jl-left'><textarea name="message" id="message" placeholder="Message:" style='width: 100%; height: 150px; font-size: medium; font-family: Arial;'></textarea></TD>
					</TR>
					
				    </TABLE>
				
				  <BUTTON type="button" class="btn btn-default toggle-contact-modal" style='padding: 3px;'>Cancel</BUTTON>
				  <BUTTON type="submit" class="sendMessage btn btn-primary" style='padding: 3px;'>Send</BUTTON>
				  
				</DIV>
				</FORM>
			    </DIV>
			  </DIV>
			</DIV>
		</section>
  
		<div id="container" class="container">
		      <ul id="scene" class="scene border fill">
			      <li class="layer expand-width backStars" data-depth="1.00"><img class="backStars" src="img/transparent.png"></li>
			      <li class="layer expand-width" data-depth="1.00"><!--possibly add another layer here later--></li>
			      <li class="layer expand-width" data-depth="0.80"><img class="hpotter" src="img/harryMe3.png"></li>
			      <li class="layer expand-width" data-depth="0.40"><img class="tie-fighter" src="img/tieFighter.png"></li>
			      <li class="layer expand-width" data-depth="0.20"><img class="logo" src='img/mandrakeLogo2.png'></li>
		      </ul>
		</div>
		<div class="socialFooterLinks">
			<a href="http://www.facebook.com/jonescommachris"><img class="bottomButtons" src="img/facebookBottom.png"></a>
                        <a href="https://dribbble.com/topherJonesy"><img class="bottomButtons" src="img/dribbble.png"></a>
			<a href="https://www.linkedin.com/profile/public-profile-settings?trk=prof-edit-edit-public_profile"><img class="bottomButtons" src="img/linkedInBottom.png"></a>
                        <a href="https://twitter.com/DesignMandrake"><img class="bottomButtons" src="img/twitterBottom.png"></a>
		</div>
  

		<!-- Scripts -->
  
		<script src="parallax.js"></script>
		<script>
			// Nothing new here...it's all in the CSS!
			var scene = document.getElementById('scene');
			var parallax = new Parallax(scene);
	
		</script>
				<!-- Start of StatCounter Code -->
		<script type="text/javascript">
			var sc_project=10312296; 
			var sc_invisible=1; 
			var sc_security="0b0e0010"; 
			var scJsHost = (("https:" == document.location.protocol) ?
			"https://secure." : "http://www.");
			document.write("<sc"+"ript type='text/javascript' src='" +
			scJsHost+
			"statcounter.com/counter/counter.js'></"+"script>");
		</script>
		<noscript><div class="statcounter"><a title="web analytics"
		href="http://statcounter.com/" target="_blank"><img
		class="statcounter"
		src="http://c.statcounter.com/10312296/0/0b0e0010/1/"
		alt="web analytics"></a></div></noscript>
		<!-- End of StatCounter Code -->
	</body>
</html>
<!--mobile
http://matthew.wagerfield.com/parallax/
https://github.com/wagerfield/parallax
http://www.html5rocks.com/en/mobile/mobifying/
http://stackoverflow.com/questions/11895620/how-to-create-a-completely-device-compatible-website
-->
