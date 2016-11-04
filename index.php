<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width , initial-scale=1">

	<title>Bootstrap Template 101</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="html5shiv/html5shiv.min.js"></script>
      <script src="respond/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/main.css" />
 
</head>
<body>
	<header id="top">
		<div class="header">
			<div class="container">
				<div class="page_header">
					<a href="#"><h1>Programmers' Den</h1></a>
					<span>College Of Computer Studies | </span>
					<span>Tarlac State University</span>
				</div>
				<div class="page_search">
					<input type="text" class="" name="search_query" placeholder="Search">
					<button type="submit" id="btnSearch" class="btn-warning">Search</button>
				</div>
				<div class="clear"></div>
				<div class="page_nav">
					<nav>
						<ul>
							<a href="#our_events"><li>EVENTS</li></a>
							<a href="#our_articles"><li>ARTICLES</li></a>
							<a href="#our_tutorials"><li>TUTORIALS</li></a>
							<a href="#about_us_contact_our_admin"><li>ABOUT US</li></a>
							<a href="#about_us_contact_our_admin"><li>CONTACT US</li></a>
							<a href="#our_login"><li class='login'>LOG-IN</li></a>
							<a href="#our_sign_up"><li class='sign-up'>SIGN-UP</li></a>
						</ul>
						<div class="handle">Menu</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<section>
		<!-- Slider -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="imgs-my-carousel">
						<div class="carousel slide" id="myCarousel" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="img/1.jpg" alt="Programmers' Den Tutorial Repository" class="img-responsive img-carousel">
								</div>
								<div class="item">
									<img src="img/2.png" alt="Programming" class="img-responsive img-carousel">
								</div>
								<div class="item">
									<img src="img/3.jpg" alt="Programming" class="img-responsive img-carousel">
								</div>
								<div class="item">
									<img src="img/4.jpg" alt="Programming" class="img-responsive img-carousel">
								</div>
							</div>

							<!-- Left and Right controller -->
							<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="our_login">
		<div class="page_login">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="login">
							<div class="login_header">
								<h3>Login</h3>
							</div>
							<div class="login_body">
								<form>
									<div class="form-group">
								      <input type="text" class="form-control" id="stdNum" name="student_number" placeholder="Student Number" required />
								    </div>

								    <div class="form-group">
								      <input type="password" class="form-control" id="stdPswd" name="student_password" placeholder="Password" required />
								    </div>

								    <input type="submit" name="send_this_message" Value="Login" class="btn btn-warning btn-block">
								</form>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<a href="#">
				          <span class="glyphicon glyphicon-remove"></span>
				        </a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="our_sign_up">
		<div class="page_sign_up">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="sign_up">
							<div class="sign_up_header">
								<h3>Sign Up</h3>
							</div>
							<div class="sign_up_body">
								<form>
									<div class="form-group">
								      <input type="text" class="form-control" id="stdNum" name="student_number" placeholder="Student Number" required />
								    </div>

								    <div class="form-group">
								      <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" required />
								    </div>

								    <div class="form-group">
								      <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required />
								    </div>

								    <div class="form-group">
								      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required />
								    </div>

								    <div class="form-group">
								      <input type="password" class="form-control" id="confmPswd" name="confirm_password" placeholder="Confirm Password" required />
								    </div>

								    <input type="submit" name="sign_up" Value="Sign Up" class="btn btn-warning btn-block">
								</form>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<a href="#">
				          <span class="glyphicon glyphicon-remove"></span>
				        </a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Events -->
	<section id='our_events'>
		<div class="page_events">
			<div class="container">
				<div class="row">
					<div class="events">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<header>
								<div class="events-header">
									<h3>Events</h3>
								</div>
							</header>
							<hr/>
						</div>

						<!-- Event panels -->
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<article>
								<div class="panel panel-default">
									<div class="panel-heading">
										<header>IT Olympic 2016 UMak</header>
									</div>
									<div class="panel-body">
										<p>
											bla bla bla bla bla
										</p>
										<img src="img/ITOlympic2016/1.jpg" class='event_pic img-thumbnail'>
									</div>
								</div>
							</article>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<article>
								<div class="panel panel-default">
									<div class="panel-heading">
										<header>IT Olympic 2016 UMak</header>
									</div>
									<div class="panel-body">
										<p>
											bla bla bla bla bla
										</p>
										<img src="img/ITOlympic2016/1.jpg" class='event_pic img-thumbnail'>
									</div>
								</div>
							</article>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<article>
								<div class="panel panel-default">
									<div class="panel-heading">
										<header>IT Olympic 2016 UMak</header>
									</div>
									<div class="panel-body">
										<p>
											bla bla bla bla bla
										</p>
										<img src="img/ITOlympic2016/1.jpg" class='event_pic img-thumbnail'>
									</div>
								</div>
							</article>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<article>
								<div class="panel panel-default">
									<div class="panel-heading">
										<header>IT Olympic 2016 UMak</header>
									</div>
									<div class="panel-body">
										<p>
											bla bla bla bla bla
										</p>
										<img src="img/ITOlympic2016/1.jpg" class='event_pic img-thumbnail'>
									</div>
								</div>
							</article>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<header>
								<div class="events-footer">
									<a href=""><p>More...</p></a>
								</div>
							</header>
						</div>
					</div><!-- end events -->
				</div><!-- end row -->
			</div><!-- end container -->

			<!-- Go Top button -->
			<div class="go_top">
				<button type="button" class="btn btn-default btn-sm go_top_btn">
		          <span class="glyphicon glyphicon-chevron-up"></span> Go Back
		        </button>
			</div>
		</div>
	</section>
	<!-- End Events -->

	<!-- Articles -->
	<section id="our_articles">
		<div class="page_post_article">
			<article>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<div class="page_articles">
								<div class="page_article_header">
									<h3>Post Articles</h3>
								</div>
								<div class="articles">
									<div class="row">

										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<header>
												<div class="article_header">
													
													<img src="img/ITOlympic2016/1.jpg" class='article_img'>
													<p>Category<span> September 24, 2016</span></p>

													<a href="#" class="article_link"><h3>This is IT Olympic 2016</h3></a>
												</div>
											</header>
											<p>
												<?php
													$text = "Breaking India: Western Interventions in Dravidian and Dalit Faultlines is a book written by Rajiv Malhotra and Aravindan Neelakandan which argues that India's integrity is being undermined.";
													$article_len = strlen($text);

													$max_text = 120;
													$char = 0;
													while($char <= $max_text){

														echo $text[$char];
														$char++;
													}
													echo ".....";

												?>
											</p>
											<hr/>
										</div><!-- End New Article -->

										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<header>
												<div class="article_header">
													
													<img src="img/ITOlympic2016/1.jpg" class='article_img'>
													<p>Category<span> September 24, 2016</span></p>

													<a href="#" class="article_link"><h3>This is IT Olympic 2016</h3></a>
												</div>
											</header>
											<p>
												<?php
													$text = "Breaking India: Western Interventions in Dravidian and Dalit Faultlines is a book written by Rajiv Malhotra and Aravindan Neelakandan which argues that India's integrity is being undermined.";
													$article_len = strlen($text);

													$max_text = 100;
													$char = 0;
													while($char <= $max_text){

														echo $text[$char];
														$char++;
													}
													echo ".....";

												?>
											</p>
										</div>

										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<header>
												<div class="article_header">
													
													<img src="img/ITOlympic2016/1.jpg" class='article_img'>
													<p>Category<span> September 24, 2016</span></p>

													<a href="#" class="article_link"><h3>This is IT Olympic 2016</h3></a>
												</div>
											</header>
											<p>
												<?php
													$text = "Breaking India: Western Interventions in Dravidian and Dalit Faultlines is a book written by Rajiv Malhotra and Aravindan Neelakandan which argues that India's integrity is being undermined.";
													$article_len = strlen($text);

													$max_text = 100;
													$char = 0;
													while($char <= $max_text){

														echo $text[$char];
														$char++;
													}
													echo ".....";

												?>
											</p>
										</div>
										<hr/>
									</div><!-- end row -->
								</div>
							</div>
						</div>
						<!-- Related Articles -->
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<div class="page_related_article">
								<div class="page_related_article_header">
									<h3>Related Post</h3>
								</div>
								<div class="related_articles">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 related_art">
											<div class="row">
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12">
													<header>
														<div class="article_header">
															
															<img src="img/ITOlympic2016/1.jpg" class='article_img'>
															<p>Category<span> September 24, 2016</span></p>

															<a href="#" class="article_link"><h3>This is IT Olympic 2016</h3></a>
														</div>
													</header>
													<p>
														<?php
															$text = "Breaking India: Western Interventions in Dravidian and Dalit Faultlines is a book written by Rajiv Malhotra and Aravindan Neelakandan which argues that India's integrity is being undermined.";
															$article_len = strlen($text);

															$max_text = 100;
															$char = 0;
															while($char <= $max_text){

																echo $text[$char];
																$char++;
															}
															echo ".....";

														?>
													</p>
													<hr class='arti_separator'>
												</div>
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12">
													<header>
														<div class="article_header">
															
															<img src="img/ITOlympic2016/1.jpg" class='article_img'>
															<p>Category<span> September 24, 2016</span></p>

															<a href="#" class="article_link"><h3>This is IT Olympic 2016</h3></a>
														</div>
													</header>
													<p>
														<?php
															$text = "Breaking India: Western Interventions in Dravidian and Dalit Faultlines is a book written by Rajiv Malhotra and Aravindan Neelakandan which argues that India's integrity is being undermined.";
															$article_len = strlen($text);

															$max_text = 100;
															$char = 0;
															while($char <= $max_text){

																echo $text[$char];
																$char++;
															}
															echo ".....";

														?>
													</p>
												</div>
											</div>
										</div>

										<!-- Old Post articles -->
										<div class="old_post_articles">
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<a href="#" class='old_articles'><p>Old Articles links</p></a>
														<p class="old_arti_date">May 25 2016</p>
														<hr/>

														<a href="#" class='old_articles'><p>Old Articles links</p></a>
														<p class="old_arti_date">May 25 2016</p>
														<hr/>

														<a href="#" class='old_articles'><p>Old Articles links</p></a>
														<p class="old_arti_date">May 25 2016</p>
														<hr/>

														<a href="#" class='old_articles'><p>Old Articles links</p></a>
														<p class="old_arti_date">May 25 2016</p>
														<hr/>

														<a href="#" class='old_articles'><p>Old Articles links</p></a>
														<p class="old_arti_date">May 25 2016</p>
														<hr/>

														<a href="#" class='old_articles'><p>Old Articles links</p></a>
														<p class="old_arti_date">May 25 2016</p>
														<hr/>
													</div>
												</div>
											</div><!-- End Old Post articles -->	
										</div>
									</div>
								</div><!-- end related_articles -->
							</div><!-- end page_related_article -->
						</div>
					</div>
				</div>
			</article>
			<!-- Go Top button -->
			<div class="go_top">
				<button type="button" class="btn btn-default btn-sm go_top_btn">
		          <span class="glyphicon glyphicon-chevron-up"></span> Go Back
		        </button>
			</div>
		</div><!-- page_post_article -->
	</section>
	<!--End Articles -->

	<section id="our_tutorials">
		<div class="page_tutorials">
			<article>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="page_tutorials_header">
								<h3>Tutorials</h3>
							</div>
							<hr/>
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
									<h4 class="tutorial_category">Web Development</h4>
									<div class="tutorial_sub_category">
										<a href=""><p>HTML</p></a>
										<a href=""><p>CSS</p></a>
										<a href=""><p>JavaScript</p></a>
										<a href=""><p>PHP</p></a>
										<a href=""><p>ASP.Net</p></a>
										<a href=""><p>MySQL</p></a>
									</div>
										
								</div>
								<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
									<h4 class="tutorial_category">Web Development</h4>
									<div class="tutorial_sub_category">
										<a href=""><p>HTML</p></a>
										<a href=""><p>CSS</p></a>
										<a href=""><p>JavaScript</p></a>
										<a href=""><p>PHP</p></a>
										<a href=""><p>ASP.Net</p></a>
										<a href=""><p>MySQL</p></a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
									<h4 class="tutorial_category">Web Development</h4>
									<div class="tutorial_sub_category">
										<a href=""><p>HTML</p></a>
										<a href=""><p>CSS</p></a>
										<a href=""><p>JavaScript</p></a>
										<a href=""><p>PHP</p></a>
										<a href=""><p>ASP.Net</p></a>
										<a href=""><p>MySQL</p></a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
									<h4 class="tutorial_category">Web Development</h4>
									<div class="tutorial_sub_category">
										<a href=""><p>HTML</p></a>
										<a href=""><p>CSS</p></a>
										<a href=""><p>JavaScript</p></a>
										<a href=""><p>PHP</p></a>
										<a href=""><p>ASP.Net</p></a>
										<a href=""><p>MySQL</p></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</article>
			<!-- Go Top button -->
			<div class="go_top">
				<button type="button" class="btn btn-default btn-sm go_top_btn">
		          <span class="glyphicon glyphicon-chevron-up"></span> Go Back
		        </button>
			</div>
		</div>
	</section>

	<section id="about_us_contact_our_admin">
		<div class="about_us_n_contact_us">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 -col-lg-6">
						<div class="about_us_header">
							<h3>About Us</h3>
						</div>
						<div class="about_us">
							<p>
								The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just 
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 -col-lg-6">
						<div class="contact_us_header">
							<h3>Contact Us</h3>
						</div>
						<div class="contact_us">
							<form>
								<div class="form-group">
							      <input type="text" class="form-control" id="name" name="user_name" placeholder="Name" required />
							    </div>
							    <div class="form-group">
							      <input type="text" class="form-control" id="email" name="user_email" placeholder="Email" required />
							    </div>
							    <div class="form-group">
							      <input type="text" class="form-control" id="phone_no" name="user_phone_no" placeholder="Phone Number" />
							    </div>
							     <div class="form-group">
								  <textarea class="form-control" rows="5" id="message" placeholder="Message"></textarea>
								</div>
								<input type="submit" name="send_this_message" Value="Send" class="btn btn-warning btn-block">

							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Go Top button -->
			<div class="go_top">
				<button type="button" class="btn btn-default btn-sm go_top_btn">
		          <span class="glyphicon glyphicon-chevron-up"></span> Go Back
		        </button>
			</div>
		</div>
	</section>
	<div class="gotoTop">
		<a href="#top" class="goTop"><p>Go Top</p></a>
	</div>
	<footer>
		<div class="container">
	  		<div class="row">
	  			<div class="page_footer">
	  				<span class="text-muted">
						<p class="footer-text">Raniel Garcia &copy 2016 Programmers' Den</p>
			       	</span>
	  			</div>
	  		</div>
	    </div>
	</footer>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>