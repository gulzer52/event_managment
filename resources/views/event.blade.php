<!DOCTYPE html>
<html lang="en">
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

    <!-- Custom Theme Style -->
    <!---<link href="{{asset('theme/build/css/custom.min.css')}}" rel="stylesheet">--->
    <title>Event</title>
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
		<section id="slider" style="margin-top: -20px;">
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
    <section id="sheduleSection">
		<div class="container">
			<div class="row">
			<h2 class="sheduleHeader">All Shedule</h2>
				<table class="table table-striped">
					<thead class="thead-primary tableSection">
						<th>Speaker Name</th>
						<th>Event Name</th>
						<th>Date</th>
						<th>Start Time</th>
						<th>End Time</th>
					</thead>
					<tbody>
						@foreach($shedules as $shedule)
							<tr>
								<td class="dataSection">{{$shedule->sname}}</td>
								<td class="dataSection">{{$shedule->name}}</td>
								<td class="dataSection">{{date('d-m-Y',strtotime($shedule->date))}}</td>
								<td class="dataSection">{{date('h:i:sa',strtotime($shedule->startt))}}</td>
								<td class="dataSection">{{date('h:i:sa',strtotime($shedule->endt))}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>  
			</div>
		</div>
    </section>
		<!-----------Speakers---------->
		<section id="team">
			<div class="container">
				<h1>Our Speakers</h1>
				<div class="row">
				@foreach($speakers as $speaker)
					<div class="col-md-3 profile-pic tex-center">
						<div class="img-box">
							<img src="{{asset('images/'.$speaker->image)}}" class="img-responsive" style="max-width:110px; margin-top:20px;">
							<ul>
								<a href="#"><li><i class="fa fa-facebook"></i></li></a>
								<a href="#"><li><i class="fa fa-twitter"></i></li></a>
								<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
							</ul>
						</div>
                        <h2>{{$speaker->sname}}</h2>
						<h3>{{$speaker->title}}</h3>
						<h3>{{$speaker->email}}</h3>
						<h3>{{$speaker->phone}}</h3>
					</div>
				@endforeach	
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
		<section id="countDown">
			<div class="container">
				<table class="conutdownContainer">
					<tr class="info">
						<td colspan="4">Event Conutdown</td>
					</tr>
					<tr class="info">
						<td id="days"></td>
						<td id="hours">2</td>
						<td id="minutes">12</td>
						<td id="seconds">20</td>
					</tr>
					<tr>
						<td>Days</td>
						<td>Hours</td>
						<td>Minutes</td>
						<td>Seconds</td>
					</tr>
				</table>
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
    
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    
    <script>
        function countdown(){
            var now = new Date();
            var eventDate = new Date('2020, 12, 22');

            var currentTime = now.getTime();
            var eventTime = eventDate.getTime();

            var remTime = eventTime - currentTime;

            var s = Math.floor(remTime / 1000);
            var m = Math.floor(s / 60);
            var h = Math.floor(m / 60);
            var d = Math.floor(h / 24);

            h %= 24;
            m %= 60;
            s %= 60;

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            document.getElementById("days").textContent = d;
            document.getElementById("days").innerText = d;

            document.getElementById("hours").textContent = h;
            document.getElementById("minutes").textContent = m;
            document.getElementById("seconds").textContent = s;

            setTimeout(countdown, 1000);
        }
        countdown();
    </script>
</body>
</html>