<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Bootstrap -->
		<link href="{{asset('theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="{{asset('theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
		<!-- NProgress -->
		<link href="{{asset('theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
		<!-- iCheck -->
		<link href="{{asset('theme/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
		<!-- bootstrap-progressbar -->
		<link href="{{asset('theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
		<!-- PNotify -->
		<link href="{{asset('theme/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
		<link href="{{asset('theme/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
		<link href="{{asset('theme/vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
		<!-----New----->
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<title>Event System</title>
		
	</head>
	<body>
		<!--------Navbar Start-------->
		<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand" href="#"><h2>GULZER</h2></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="#">HOME</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#team">SPEAKERS</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#price">TICKETS</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#contact">CONTACT</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</section>
		<!--------Slider-------->
		<section id="slider">
			<div class="bd-example">
			  <div id="headerSlider" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			      <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
			      <li data-target="#headerSlider" data-slide-to="1"></li>
			      <li data-target="#headerSlider" data-slide-to="2"></li>
			    </ol>
			    <div class="carousel-inner">
			      <div class="carousel-item active">
			        <img src="{{asset('images/slider (1).jpg')}}" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h5>First slide label</h5>
			          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			        </div>
			      </div>
			      <div class="carousel-item">
			        <img src="{{asset('images/slider (1).jpg')}}" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h5>Second slide label</h5>
			          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			        </div>
			      </div>
			      <div class="carousel-item">
			        <img src="{{asset('images/slider (1).jpg')}}" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h5>Third slide label</h5>
			          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			        </div>
			      </div>
			    </div>
			    <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>
		</section>
		<!-----------Speakers---------->
		<section id="team">
			<div class="container">
				<h1>Our Speakers</h1>
				<div class="row">
					<div class="col-md-3 profile-pic tex-center">
						<div class="img-box">
							<img src="{{asset('images/4.JPG')}}" class="img-responsive" width="150px" height="200px">
							<ul>
								<a href="#"><li><i class="fa fa-facebook"></i></li></a>
								<a href="#"><li><i class="fa fa-twitter"></i></li></a>
								<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>{{$shedules->name}}</h2>
						<h3>Founder / CEO</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					</div>
					<div class="col-md-3 profile-pic tex-center">
						<div class="img-box">
							<img src="{{asset('images/300-3000px.jpg')}}" class="img-responsive" width="150px" height="200px">
							<ul>
								<a href="#"><li><i class="fa fa-facebook"></i></li></a>
								<a href="#"><li><i class="fa fa-twitter"></i></li></a>
								<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>Golam Shariar</h2>
						<h3>Founder / CEO</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					</div>
					<div class="col-md-3 profile-pic tex-center">
						<div class="img-box">
							<img src="{{asset('images/4.JPG')}}" class="img-responsive" width="150px" height="200px">
							<ul>
								<a href="#"><li><i class="fa fa-facebook"></i></li></a>
								<a href="#"><li><i class="fa fa-twitter"></i></li></a>
								<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>Protap Roy</h2>
						<h3>Founder / CEO</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					</div>
					<div class="col-md-3 profile-pic tex-center">
						<div class="img-box">
							<img src="{{asset('images/Amdadu.JPG')}}" class="img-responsive" width="150px" height="200px">
							<ul>
								<a href="#"><li><i class="fa fa-facebook"></i></li></a>
								<a href="#"><li><i class="fa fa-twitter"></i></li></a>
								<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>Amdadul Haque</h2>
						<h3>Founder / CEO</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					</div>
				</div>
			</div>
		</section>
		<!-----------Tickets-------------->
		<section id="price">
			<div class="container">
				<h1>Tickets</h1>
				<div class="row">
					<div class="col-md-3">
						<div class="single-price">
							<div class="price-head">
								<h2>Normal</h2>
								<p>200/- &nbsp;<span>1 day</span></p>
							</div>
							<div class="price-content">
								<ul>
									<li><i class="fa fa-check-circle"></i>Normal Seat</li>
									<li><i class="fa fa-check-circle"></i>Normal Tea</li>
									<li><i class="fa fa-times-circle"></i>Other Benifit</li>
									<li><i class="fa fa-times-circle"></i>Comlains</li>
									<li><i class="fa fa-times-circle"></i>Unlimited Suport</li>
								</ul>
							</div>
							<div class="price-button">
								<a class="buy-btn" href="#">Buy Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-price">
							<div class="price-head">
								<h2>Start up</h2>
								<p>250/- &nbsp;<span>2 days</span></p>
							</div>
							<div class="price-content">
								<ul>
									<li><i class="fa fa-check-circle"></i>Medium Seat</li>
									<li><i class="fa fa-check-circle"></i>Normal Cofi</li>
									<li><i class="fa fa-check-circle"></i>Other Benifit</li>
									<li><i class="fa fa-times-circle"></i>Comlains</li>
									<li><i class="fa fa-times-circle"></i>Unlimited Suport</li>
								</ul>
							</div>
							<div class="price-button">
								<a class="buy-btn" href="#">Buy Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-price">
							<div class="price-head">
								<h2>Gold Pack</h2>
								<p>350/- &nbsp;<span>3 days</span></p>
							</div>
							<div class="price-content">
								<ul>
									<li><i class="fa fa-check-circle"></i>Spacial Seat</li>
									<li><i class="fa fa-check-circle"></i>Spacial Cofi</li>
									<li><i class="fa fa-check-circle"></i>Other Benifit</li>
									<li><i class="fa fa-check-circle"></i>Comlains</li>
									<li><i class="fa fa-times-circle"></i>Unlimited Suport</li>
								</ul>
							</div>
							<div class="price-button">
								<a class="buy-btn" href="#">Buy Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-price">
							<div class="price-head">
								<h2>Silver Pack</h2>
								<p>500/- &nbsp;<span>4 Days</span></p>
							</div>
							<div class="price-content">
								<ul>
									<li><i class="fa fa-check-circle"></i>Spacial Seat</li>
									<li><i class="fa fa-check-circle"></i>Spacial Cofi</li>
									<li><i class="fa fa-check-circle"></i>Other Benifit</li>
									<li><i class="fa fa-check-circle"></i>Comlains</li>
									<li><i class="fa fa-check-circle"></i>Unlimited Suport</li>
								</ul>
							</div>
							<div class="price-button">
								<a class="buy-btn" href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--------------Contact------------->
		<section id="contact">
			<div class="container">
				<h1>Contact</h1>
				<div class="row">
					<div class="col-md-6">
						<form class="contact-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name">
							</div>
							<div class="form-group">
								<input type="number" class="form-control" placeholder="Phone Number">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Your Email Id">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="4" placeholder="Message"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
						</form>
					</div>
					<div class="col-md-6 contact-info">
						<div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i>XXX Road, Dhaka, Bangladesh</div>
						<div class="follow"><b>Phone:</b><i class="fa fa-phone"></i> 8801xxxxxxx</div>
						<div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>www.example@gmail.com</div>
						<div class="follow"><label><b>Get Social:</b></label>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--------------------------Footer---------------------->
		<section id="footer">
			<div class="container">
				<p>Made With <i class="fa fa-heartbeat"></i> by Gulzer Hossain</p>
			</div>
		</section>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
		<script>
			var scroll = new SmoothScroll('a[href*="#"]');
		</script>
	</body>
</html>