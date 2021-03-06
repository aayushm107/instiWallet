<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="InstiWallet">

    <title>InstiWallet</title>

	<link rel="shortcut icon" href="/~sports/images/newfavicon.png">

	<!-- <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/icomoon.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!-- <link rel="stylesheet" href="/~sports/css/bootstrap.min.css"> -->
	<!--<link rel="stylesheet" href="/~sports/css/font-awesome.min.css">-->

	<!-- Custom styles for our template -->
	<!-- <link rel="stylesheet" href="/~sports/css/bootstrap-themes.css" media="screen" > -->
	<!-- <link rel="stylesheet" href="/~sports/css/main.css"> -->
	<!-- <link rel="stylesheet" href="/~sports/css/jssor.css"> -->
	<!-- <link rel="stylesheet" href="/~sports/css/jssor-simplefade.css"> -->
	<!-- <link rel="stylesheet" href="/~sports/css/components3.css"> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/notify.js"></script>
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/quickpay.js"></script>
  
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85055175-1', 'auto');
  ga('send', 'pageview');
  function checkUser(str) {
      if (str.length == 0) { 
          document.getElementById("checkResult").innerHTML = "";
          return;
      } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("checkResult").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET", "checkUser.php?q=" + str, true);
          xmlhttp.send();
      }
}

</script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="/~sports/js/html5shiv.js"></script>
	<script src="/~sports/js/respond.min.js"></script>
	<![endif]-->
</head>

	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container" style="min-width:90%;">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
						class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a href="http://iitmandi.ac.in"><img src="images/logo_final.png" style="height:75px;width:100px;margin-left:-75px;"alt="IIT Mandi Logo"></a><!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="#" class="text-glow-hover">HOME</a></li>
								<li><a id="back-to-login" href="#login_form" class="text-glow-hover">LOGIN</a></li>
								<li><a id="back-to-signup" href="#signup_form" class="text-glow-hover">SIGNUP</a></li>
								<li><a href="index.php?r=archive/gallery" class="text-glow-hover">QUICK PAY</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

		</div>


<body>
<div class="fh5co-hero" style="height:100vh">
  <div class="fh5co-overlay" style = "height:100vh;background:url('images/background(2)(1).jpg') no-repeat center center fixed; background-size:cover"></div>
  <div class="fh5co-cover text-center" style="height:100vh" data-stellar-background-ratio="0.5">
    <div class="desc animate-box">
      <h2 id="home_text">IIT Mandi</h2><br>
      <h2 id="home_text">InstiWallet</h2><br>
            <span><a class="btn btn-primary" href="index.php?r=site/login">Create Wallet</a></span>
            <p id="already_login">Already have an account? <a href="#" id="login_link">Login</a></p>
    </div>
  </div>
</div>


<div class="container"">
	<div class="col-md-12 text-center animate-box" style="height:100vh; background-image: url('images/background(2)(1).jpg') no-repeat center center fixed; ">
		<div class="jumbotron" id="login_form">
			<div class="button button-primary">
				<form class="form-signin" action="user_home.php" method="post">
					<div class="form-group">
						<label for="user_name" class="sr-only">UserName</label>
						<input type="text" name="user_name" id="login_user_name" class="form-control" placeholder="UserName" required> 
						<label for="user_pass" class="sr-only">Password</label>
						<input type="password" name="user_pass" id="login_user_pass" class="form-control" placeholder="Password" required>
						<center><button id="login_button" class="btn btn-primary" type="submit">Login</button></center>
					</div>
				</form>
        </div>
			</div>
		
	</div>
	 <div class="col-md-12 text-center animate-box" style="height:100vh">
    <div class="jumbotron" id="signup_form">
      <div class="button button-primary">
        <form class="form-signup" action="templates/insert.php" method="post" id="signup_form">
          <div class="form-group">
            <!-- <span id="checkResult"></span> -->
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id="signup_name" class="form-control" placeholder="Name" required> 
            <label for="signup_email" class="sr-only">Email</label>
            <input type="email" name="signup_email" id="signup_user_pass" class="form-control" placeholder="xyz@iitmandi.ac.in" required>
            <label for="mobile" class="sr-only">Mobile</label>
            <input type="tel" name="mobile" id="signup_name" class="form-control" placeholder="Mobile" required> 
            <label for="signup_username" class="sr-only">UserName</label>
            <input type="text" name="signup_username" id="signup_name" class="form-control" placeholder="UserName" onkeyup="checkUser(this.value)" required> 
            <label for="signup_password" class="sr-only">Password</label>
            <input type="password" name="signup_password" id="signup_name" class="form-control" placeholder="Password" required> 
            <br><div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                  <input type="radio" name="signup_gender" id="male" value="M" autocomplete="on"> Male
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="signup_gender" id="female" value="F" autocomplete="off"> Female
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="signup_gender" id="other" value="O" autocomplete="off"> Other
                </label>
              </div><br><br>
            <center><button id="signup_button" class="btn btn-primary" type="submit">Signup</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-12 text-center animate-box" style="height:100vh">
    <div class="jumbotron" id="quickpay_form">
      <div class="button button-primary">
            <p><span id="checkResult"></span></p>
        <form class="form-quickpay" id="form_quickpay" method="GET">
          <div class="form-group">
            <label for="quickpay_name" class="sr-only">Username</label>
            <input type="text" name="quickpay_name" id="quickpay_name" class="form-control" placeholder="Your UserName" required onkeyup="checkUser(this.value)"> 
            <label for="quickpay_user_password" class="sr-only">Password</label>
            <input type="password" name="quickpay_user_password" id="quickpay_user_password" class="form-control" placeholder="Password" required>
            <label for="quickpay_receiver_name" class="sr-only" >Reciever Username</label>
            <input type="text" name="quickpay_receiver_name" id="quickpay_receiver_name" class="form-control" placeholder="Receiver's UserName" required> 
            <label for="quickpay_amount" class="sr-only">Amount</label>
            <input type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="quickpay_amount" id="quickpay_amount" class="form-control" placeholder="Amount" required> 
            <label for="quickpay_comment" class="sr-only">Comment</label>
            <input type="text" name="quickpay_comment" id="quickpay_comment" class="form-control" placeholder="A comment on the transaction for future reference."> 
            <br><div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                  <input type="radio" name="quickpay_type" id="transfer" value="t" autocomplete="on"> Transfer
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="quickpay_type" id="loan" value="l" autocomplete="off"> Loan
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="quickpay_type" id="purchase" value="p" autocomplete="off"> Purchase
                </label>
              </div><br><br>
            <center><button id="quickpay_button" class="btn btn-primary" type="submit">Quick Pay</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

            <div id="fh5co-blog-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3 style="color:inherit">Why do you need InstiWallet?</h3>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                 
                  <div class="col-md-6 col-md-6" >
                    <div class="fh5co-blog animate-box">
                    <h3 style="font-size:18px;margin-bottom:10px">Ever felt like you need money when you don't have your wallet with you?</h3>                 
                    </div>
                  </div>

                 <div class="col-md-6 col-md-6" >
                    <div class="fh5co-blog animate-box">
                    <h3 style="font-size:18px;margin-bottom:10px">Wanted to grab a cup of coffee after class but didn't have your wallet with you?</h3>       
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 col-md-6" >
                    <div class="fh5co-blog animate-box">
                    <h3 style="font-size:18px;margin-bottom:10px">Ever lost money in campus?</h3>       
                    </div>
                  </div>

                 <div class="col-md-6 col-md-6" >
                    <div class="fh5co-blog animate-box">
                    <h3 style="font-size:18px;margin-bottom:10px">Lost track where did you spent money last month?</h3>       
                 </div>
                </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="fh5co-hero" style="height:400px">
            <div class="fh5co-overlay" style = "background:url(images/wallet.jpg) no-repeat center center fixed; background-size:cover;height:100%">
            </div>
          </div>

        <div id="fh5co-blog-section">
              <div class="container" style="height:80%">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3 class="text-center top-space" style="margin-top:30px;"><a href="index.php?r=events/calendar" style="color:inherit">Upcoming Events </a></h3>
                  </div>
                </div>
              </div>


              <div class="container">
                <div class="row text-center">
                                       <div class="col-md-4 col-md-4" >
                        <div class="fh5co-blog animate-box">
                           <h3 style="font-size:45px;color:#FCC72C;margin-bottom:5px">25</h3>
                           <h4>Oct</h4>
                          <h3 style ="text-align:center;font-size:18px;display:inline;margin-bottom:10px;"><b>Hockey Beginners Camp + Inter IIT trials</b></h3>                          <span style="font-size:20px;display:inline;color:green">     &#10004</span>                          <h4 style="font-size:16px;line-height:1.7;margin-bottom:10px;">
                          <b>Time: </b>17:30:00<br></h4>
                            <p id="event" style ="font-size:15px;">"Every Champion was once a beginner who refused to give up"  The Hockey Beginners Camp is here!  All those who are interested to learn the game as well as who have played before can join as this will also be the trials for Inter IIT.  Register: https://goo.gl/forms/LlsCjf1WQdqBAn0d2 On spot registerations allowed.  Venue: Hockey Field Date: 25th (Tuesday) - 27th (Thursday)  Time: 5:30-6:30 PM  Kindly wear shoes and shorts. Sticks and Balls will be provided.  Let's Hockey!!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4" >
                        <div class="fh5co-blog animate-box">
                           <h3 style="font-size:45px;color:#FCC72C;margin-bottom:5px">22</h3>
                           <h4>Oct</h4>
                          <h3 style ="text-align:center;font-size:18px;display:inline;margin-bottom:10px;"><b>PG Hockey Weekend </b></h3>                          <span style="font-size:20px;display:inline;color:green">     &#10004</span>                          <h4 style="font-size:16px;line-height:1.7;margin-bottom:10px;">
                          <b>Time: </b>17:00:00<br></h4>
                            <p id="event" style ="font-size:15px;">The IIT Bombay Hockey Club brings to your the First ever PG Hockey Weekend  It's time to bring out the passion for Hockey in you and make use of this opportunity to learn the game. Sticks and Balls will be provided.  Register: https://goo.gl/forms/3VALz4neYoCIyHSK2 On spot registrations open  Venue: Hockey Field  Time: 5-6:30 PM | 22nd and 23rd October.</p>
                        </div>
                    </div>
                                        <div class="col-md-4 col-md-4" >
                        <div class="fh5co-blog animate-box">
                           <h3 style="font-size:45px;color:#FCC72C;margin-bottom:5px">22</h3>
                           <h4>Oct</h4>
                          <h3 style ="text-align:center;font-size:18px;display:inline;margin-bottom:10px;"><b>Kabaddi World Cup Final SCreening</b></h3>                          <span style="font-size:20px;display:inline;color:green">     &#10004</span>                          <h4 style="font-size:16px;line-height:1.7;margin-bottom:10px;">
                          <b>Time: </b>19:45:00<br></h4>
                            <p id="event" style ="font-size:15px;">IIT Bombay Sports welcomes you all to the live screening of the Kabaddi World Cup 2016 Finals. India has won all five Kabaddi world cups played till now. In all the five world cups, India remained unbeaten throughout the tournament. This time, India is in the finals again, so witness India VS Iran battle for World Champion live. Date: Saturday, 22nd October Time: 7:45 PM Venue: Screening Hall, 3rd floor, New Gymkhana Building (Opposite H11)</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>

              <!-- <div id="fh5co-content-section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                      <h3>From the General Secretary's Desk</h3>
                    </div>
                  </div>
                </div>
                <br>
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="fh5co-testimonial text-center animate-box">
                        <figure>
                          <img src="images/council/gsec.jpg" alt="user">
                        </figure>
                        <blockquote>
        								<p align="left">"What does Sports actually stand for in IIT Bombay? This can be summarized in just 4 words – it's learning, recreation, fitness, and most importantly, interaction. Along with learning new skills and taking part in numerous activities, sports inculcate within you a sense of camaraderie and a sense of unity.</p>

                        <p align="left">Do you know what my favourite part of the game is? It’s the opportunity to play. Talking about opportunities, the IITB gymkhana is a home to a wide range of sports, both indoor and outdoor. IIT Bombay provides a plethora of sports activities that include all major team sports as well as individual sports. With great pride, I can say that the Gymkhana is one of institute’s greatest assets.</p>

                        <p align="left">The facilities provided to the students match international standards and are one of the best in the country, and the students who have been associated with them for a long time grow a strange connection to it, even after they are no longer students here"</p>
        							</blockquote>
        							<span>Sahil Dhingra, General Secretary, IITB Sports</span>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div> -->
</body>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>
<script type="text/javascript" src="js/timer.js"></script>

		<!-- fh5co-services-section -->

		<!-- fh5co-content-section -->
				<!-- fh5co-blog-section -->
		<footer>
			<div id="footer" style="padding-top:10px;padding-bottom:2px;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<h4>STAY CONNECTED!</h4>
							<p class="fh5co-social-icons">
								<a href="https://twitter.com/iitb_sports"  target="_blank"><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/iitbsports/?fref=ts" target="_blank"><i class="icon-facebook2"></i></a>
								<a href="https://www.youtube.com/channel/UCePHRfik23CJydGv6_JvQOQ" target="_blank"><i class="icon-youtube"></i></a>
							</p>
						<p><a href="index.php?r=about/contact">Contact us</a></p>
						<p><a href="assets/view/map.jpg" target="_blank">Map</p>
						</div>
					</div>
        </div>
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	</body>
</html>
