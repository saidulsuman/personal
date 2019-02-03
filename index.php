<?php
$servername="localhost";
$username="root";
$password="";
$dbname="protfolio";
$con=mysqli_connect($servername,$username,$password,$dbname);

if ($con){
echo "connect ok";
}
else {
  echo "conect faild";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal View</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0,1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
      <!--lightbox -->
      <link rel="stylesheet" href="css/lightbox.css">
      <!-- lightbox -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//web font-->

</head>

<body>
<header>	
<div class="container">
<!-- nav -->
		<nav class="navbar navbar-expand-lg navbar-light py-4">
			<!-- logo -->
			<div class="social mb-4">
					<ul>
						<li><a href="index.php"><img src="images/s.jpg" title="facebook" alt=""></<a></li>
						<a class="navbar-brand" href="#gallery">
					<span>View</span>
				</a>
					</ul>
				</div>
<!-- 			<h1>
				<a class="navbar-brand" href="index.php">
					Personal <span>View</span>
				</a>
			</h1> -->
			<!-- //logo -->
			<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- main nav -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-auto text-center">
					<li class="nav-item active mr-lg-4">
						<a class="nav-link" href="index.php">HOME 
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-lg-4">
						<a class="nav-link scroll" href="#about">ABOUT</a>
					</li>
					<li class="nav-item mr-lg-4">
						<a class="nav-link scroll" href="#services">SERVICES</a>
					</li>
					<li class="nav-item mr-lg-4">
						<a class="nav-link scroll" href="#experience">EXPERIENCE</a>
					</li>
					
		            <li class="nav-item mr-lg-4">
						<a class="nav-link scroll" href="#gallery">GALLERY</a>
					</li>

					<li class="nav-item">
						<a class="nav-link scroll" href="#contact">CONTACT</a>
						<div class="agileinfo-grids">
			<div class="agile-grid-left agile-grid-right text-center">
				<div class="social mb-4">
					<ul>
						<li><a href="https://www.facebook.com/"><img src="images/fb.png" title="facebook" alt=""></<a></li>
						<li><a href="#"><img src="images/t.png" title="tweter" alt=""></a></li>
						<li><a href="https://github.com/saidulsuman"><img src="images/gt.png" title="github" alt=""></</a></li>
						<li><a href="https://www.google.com/"><img src="images/g.png" title="google" alt=""></ </a></li>
						<li><a href="https://www.linkedin.com/feed/"><img src="images/in.jpg" title="linkdin" alt=""></</i></a></li>
						<li><a href="https://www.messenger.com"><img src="images/ma.jpg" title="messenger" alt=""></</i></a></li>
					</ul>
				</div>
			</div>
		</div>
					</li>
				</ul>
			</div>
			<!-- //main nav -->
		</nav>
		<!-- //nav -->
</div>
</header>
		
<!-- banner -->
<section class="banner">
	<div class="banner-layer">
		<div class="container">
			<div class="row agile_banner_info">
				<div class="col-md-7 agile_banner_margin">
					<h5>Hi</h5>
					<h2>I am <span>Md.Saidul Islam Suman</span></h2>
					<h4 style="color:red">WEB/SOFTWARE DEVELOPER(FRESHER)WITH A GOOD TEACHER</h4>
					<p style="font-family:thoma">I have completed my BSC in computer science.I have a basic knowledge in HTML,CSS,BASIC PHP,BASIC LARAVEL,BASIC JAVASCRIPT,BOOTSTRAP and DATABASE.Already,I have done some project.But I have a no experience in job sector.I am fresher.</p>
					<!-- <a href="#"> Read More </a> -->
					<a href="https://drive.google.com/drive/folders/1KNmwxgD60LNhlLTf6Kal-rJ-cEElF1pq"> Download CV <span class="fa ml-2 fa-download"></span> </a><br><br><br><br><br><br>
				</div>
				<div class="col-md-5 image_margin">
					<img src="images/on.jpg" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //banner -->	

<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-3">
		<h3 class="heading">ME</h3>
		<div class="row about-grids">
			<div class="col-lg-4">
				<h4>MY HOBBIES</h4>
				<p style="font-family:thoma">Hey, this is my homepage, so I have to say something about myself.

 I am a person who is positive about every aspect of life. There are many things I like to 

do, to see, and to experience. I like to read, I like to write; I like to think, I like to 

dream; I like to talk, I like to listen. I like to see the sunrise in the morning, I like 

to see the moonlight at night; I like to feel the music flowing on my face, I like to 

smell the wind coming from the ocean. I like to look at the clouds in the sky with a blank 

mind, I like to do thought experiment when I cannot sleep in the middle of the night. I 

like flowers in spring, rain in summer, leaves in autumn, and snow in winter. I like to 

sleep early, I like to get up late; I like to be alone, I like to be surrounded by people. 

I like country’s peace, I like metropolis’ noise; I like the beautiful west lake in 

Hangzhou, I like to play cricket. I like delicious food and comfortable shoes; I like good 

books , action and romantic movies. I like the land and the nature, I like people. And, I 

like to laugh.

 I always wanted to be a Honest man , a good Teacher and Software Developer.My dream is 

still alive.

</p>
				<!-- a href="#"> Download CV <span class="fa ml-2 fa-download"></span> </a>	 -->
			</div>
			<div class="col-lg-4 col-md-6 my-lg-0 my-5">
				<img src="images/gg.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-4 bar-grids">
			
			<div class="contact-right">
			<h3>MY LOCATION</h3>
			<div class="map">
				<iframe width="100%" height="300" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7297.414637307511!2d90.40654899734497!3d23.864524672116094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1548609441952"></iframe><br><small><a href="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7297.414637307511!2d90.40654899734497!3d23.864524672116094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1548609441952" style="color:#999;text-align:left"></a></small>
			</div>
			</div>
			
				<!-- <div class="wthree_skills">
					<h6>Designing<span> 95% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 95%">
						</div>
					</div>
					<h6>Developing<span> 85% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 85%">
						</div>
					</div>
					<h6>Photoshop<span>90% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 90%">
						</div>
					</div>
					<h6>Marketing<span>75% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 75%">
						</div>
					</div>
					<h6>Branding<span>45% </span></h6>
					<div class="progress prgs-w3agile-last">
						<div class="progress-bar progress-bar-striped active" style="width: 45%">
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<a href="index.php"> TOP </a>
</section>
<!-- about -->
<!-- gallery -->
	<div class="gallery py-5" id="gallery">
		<div class="container py-3">
		<h3 class="heading">AWARD</h3>
		<div class="row gallery_grid-more project-grids w3ls">
		   <div class="col-md-3 p-0 pr-2 col-sm-3 col-6 agileits_w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/b.jpg" data-lightbox="example-set" data-title="Dean's Honor 2018">
					<figure>
					   <img src="images/b.jpg"height="400px" width="400px"  alt=" " class="img-responsive" />
					   <a href="images/b.jpg" download="My Logo">Download</a> 
					</figure>
				 </a>
			  </div>
		   </div>
		   <div class="col-md-3 p-0 pr-2 col-sm-3 col-6 agileits_w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/a.jpg" data-lightbox="example-set" data-title="GOOD LOOKING">
					<figure>
					<img src="images/a.jpg" height="400px" width="400px"  alt="thumbnail" class="img-responsive" />
					  <a href="images/a.jpg" download="My Logo">Download</a>
					</figure>
				 </a>
			  </div>
			  <div class="clearfix"> </div>
		   </div>
		   
					</figure>
				 </a>
			  </div>
		   </div>
		   <div class="clearfix"> </div>
		</div>
	 </div>
	 <a href="index.php"> TOP </a>
  </div>
  <!-- //gallery --> 

<!-- services -->
<!-- <section class="services py-5" id="services">
	<div class="container py-3">
		<h3 class="heading">Services</h3>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 agile w3-icon-grid1">
				<h3><i class="fas mr-2 fa-cogs" aria-hidden="true"></i> UI/UX Design</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam. placerat placerat dolor. Vestibulum</p>
			</div>
			<div class="col-lg-4 col-md-6 agile mt-md-0 mt-sm-5 mt-4 w3-icon-grid1">
				<h3><i class="fa mr-2 fa-mobile" aria-hidden="true"></i>Mobile Apps</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam. placerat placerat dolor. Vestibulum</p>
			</div>
			<div class="col-lg-4 col-md-6 agile mt-lg-0 mt-sm-5 mt-4 w3-icon-grid1">
				<h3><i class="fa mr-2 fa-laptop" aria-hidden="true"></i>Web Developer</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam. placerat placerat dolor. Vestibulum</p>
			</div>
			<div class="col-lg-4 col-md-6 agile mt-sm-5 mt-4 w3-icon-grid1">
				<h3><i class="fas mr-2 fa-camera" aria-hidden="true"></i> Photoshop</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam. placerat placerat dolor. Vestibulum</p>
			</div>
			<div class="col-lg-4 col-md-6 agile mt-sm-5 mt-4 w3-icon-grid1">
				<h3><i class="fab mr-2 fa-accusoft" aria-hidden="true"></i>Software</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam. placerat placerat dolor. Vestibulum</p>
			</div>
			<div class="col-lg-4 col-md-6 agile mt-sm-5 mt-4 w3-icon-grid1">
				<h3><i class="fas mr-2 fa-chart-pie" aria-hidden="true"></i>Graphic Design</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam. placerat placerat dolor. Vestibulum</p>
			</div>
		</div>
	</div>
</section> -->
<!-- //services -->

<!-- experience -->
<section class="experience py-5" id="experience">
	<div class="container py-3">
		<h3 class="heading">EXPERIENCE</h3>
		<div class="row exp-grids">
			<div class="col-md-3 exp wthree">
				<h4>UI DESIGNER</h4>
				<h5>Fresher</h5>
			</div>
			<div class="col-md-9 mt-md-0 mt-4 wthree">
				<p style="color:lightblue;">No job working experience</p>
			</div>
		</div>
		<div class="row exp-grid1 mt-5 wthree">
			<div class="col-md-9 mb-md-0 mb-4">
				<p></p>
			</div>
			<div class="col-md-3 exp1 wthree">
				<h4>WEB DEVELOPER</h4>
				<h5>Fresher</h5>
			</div>
			<div class="col-md-9 mt-md-0 mt-4 wthree">
				<p style="color:cyan;">There are rough ideas.No job working experience.If you give me a chance I will try my level best.</p>
			
		</div>
		<div class="row exp-grids mt-5 wthree">
			<div class="col-md-3 exp">
				<h4>MOBILE APP</h4>
				<h5>Fresher</h5>
			</div>
			<div class="col-md-9 mt-md-0 mt-4 wthree">
				<p style="color:blue;">There are rough ideas.No job working experience.If you give me a chance I will try my level best.</p>
			</div>
		</div>
		<div class="row exp-grid1 mt-5 wthree">
			<div class="col-md-9 mb-md-0 mb-4">
				<p></p>
			</div>
			<div class="col-md-3 exp1 wthree">
				<h4>SOFTWARE</h4>
				<h5>Fresher</h5>
			</div>
			<div class="col-md-9 mt-md-0 mt-4 wthree">
				<p style="color:black;">There are rough ideas.No job working experience.If you give me a chance I will try my level best.</p>
			</div
		</div>
	</div>
	<a href="index.php"> TOP </a>
</section>
<!-- //experience -->

<!-- blog -->
<section class="blog py-5" id="blog">
	<div class="container py-3">
		<h3 class="heading">MY FAVOURITE</h3>
		<div class="row blog-grids">
			<div" class="col-lg-7">
			
			
			<!-- <img src="images/mm.jpg" alt="" class="img-fluid" /> -->
				<h4 class="left-grid-blog"></h4>
				<p class="left-grid-blog"></p>
				<div class="row">
 
			<!--video embeded-->
			<a href="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" download="My video">Download video</a>
			<div class="embed-responsive embed-responsive-16by9">
			
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
			 
                 </div>
				 <a href="https://www.youtube.com/embed/watch?v=9thM5gLs2tg&list=RD9thM5gLs2tg&start_radio=1"  download="My video">Download video</a>
				 <div class="embed-responsive embed-responsive-16by9">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/watch?v=9thM5gLs2tg&list=RD9thM5gLs2tg&start_radio=1" allowfullscreen></iframe>
                 </div>
				 
				 <!--video embeded-->
				</div>
			</div>
			
		</div>
		
	</div>
	<a href="index.php"> TOP </a>
</section> 
<!-- //blog -->


<!-- gallery -->
	<div class="gallery py-5" id="gallery">
		<div class="container py-3">
		<h3 class="heading">GALLERY</h3>
		<div class="row gallery_grid-more project-grids w3ls">
		   <div class="col-md-3 p-0 pr-2 col-sm-3 col-6 agileits_w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/g1.jpg" data-lightbox="example-set" data-title="GOOD LOOKING">
					<figure>
					   <img src="images/7th.jpg"height="400px" width="400px"  alt=" " class="img-responsive" />
					   <a href="images/7th.jpg" download="My Logo">Download</a> 
					</figure>
				 </a>
			  </div>
		   </div>
		   <div class="col-md-3 p-0 pr-2 col-sm-3 col-6 agileits_w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/1st.jpg" data-lightbox="example-set" data-title="GOOD LOOKING">
					<figure>
					<img src="images/1st.jpg" height="400px" width="400px"  alt="thumbnail" class="img-responsive" />
					  <a href="images/1st.jpg" download="My Logo">Download</a>
					</figure>
				 </a>
			  </div>
			  <div class="clearfix"> </div>
		   </div>
		   <div class="col-md-6 p-0 col-sm-6 col-12 pt-sm-0 pt-2 agileits_w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/3rd.jpg" data-lightbox="example-set" data-title="GOOD LOOKING">
					<figure>
					   <img src="images/3rd.jpg"  height="400px" width="400px" alt=" " class="img-responsive" />
					   <a href="images/3rd.jpg" download="My Logo">Download</a>
					</figure>
				 </a>
			  </div>
		   </div>
		</div>
		<div class="row gallery_grid-more">
		   <div class="col-md-6 p-0 col-sm-6 col-12 pt-sm-0 pt-2 agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/2nd.jpg" data-lightbox="example-set" data-title="GOOD LOOKING">
					<figure>
					   <img src="images/2nd.jpg" height="400px" width="400px" alt=" " class="img-responsive" />
					   <a href="images/2nd.jpg" download="My Logo">Download</a>
					</figure>
				 </a>
			  </div>
		   </div>
		   <div class="col-md-3 pt-2 pl-2 p-0 col-sm-3 col-6 agileits_w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/4th.jpg" data-lightbox="example-set" data-title="GOOD LOOKING">
					<figure>
					   <img src="images/4th.jpg" height="400px" width="400px" alt=" " class="img-responsive" />
					   <a href="images/4th.jpg" download="My Logo">Download</a>
					</figure>
				 </a>
			  </div>
		   </div>
		   <div class="col-md-3 pt-2 pl-2 p-0 col-sm-3 col-6 agileits_w3layouts_gallery_grid1 hover14 column">
			  <div class="w3_agile_gallery_effect">
				 <a href="images/5th.jpg" data-lightbox="example-set" data-title="GOOD LOOKING">
					<figure>
					   <img src="images/5th.jpg" height="400px" width="400px" alt=" " class="img-responsive" />
					   <a href="images/5th.jpg" download="My Logo">Download</a>
					</figure>
				 </a>
			  </div>
		   </div>
		   <div class="clearfix"> </div>
		</div>
	 </div>
	 <a href="index.php"> TOP </a>
  </div>
  <!-- //gallery --> 

<!-- Testimonials -->
<!-- <section class="testimonials py-5" id="testimonials">
	<div class="container py-3">
		<h3 class="heading">Testimonials</h3>
		<div class="test-grids">
			<!-- testimonials --
			<div class=" clients">
				<div class="sreen-gallery-cursual">
					<div id="owl-demo" class="owl-carousel">
						 <div class="item-owl">
							<div class="test-image">
								<img src="images/test1.jpg" alt=" " class="img-fluid">
							</div>
							<div class="test-review">
							  <h5>Henry mark</h5>
							   <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore etdolorema gnaaliquya merat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenimad minimveniam, quis nostrud exercitation ullamco sed do eiusmod tempor incididunt<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
							  <p class="date">2 days ago</p>
							</div>
						</div>
						<div class="item-owl">
							<div class="test-image">
								<img src="images/test1.jpg" alt=" " class="img-fluid">
							</div>
							<div class="test-review">
								 <h5>Smith joe</h5>
							 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenimad minimveniam, quis nostrud exercitation ullamco sed do eiusmod tempor incididunt<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
								  <p class="date">4 days ago</p>
							</div>
						</div>
						 <div class="item-owl">
							<div class="test-image">
								<img src="images/test1.jpg" alt=" " class="img-fluid">
							</div>
							<div class="test-review">
								 <h5>Steave john</h5>
								 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenimad minimveniam, quis nostrud exercitation ullamco sed do eiusmod tempor incididunt<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
								  <p class="date">1 day ago</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //testimonials -->
		</div>
	</div>
</section> 
<!-- Testimonials -->

<!-- contact -->
<section class="contact py-5" id="contact">
	<div class="container py-3">
		<h3 class="heading">CONTACT</h3>
		<div class="row contact-grids">
			<div class="col-lg-5 contact-left">
				<h4 class="mb-4">ADDRESS INFORMATION</h4>
				<div class="row">
					<div class="col-1 pr-0 icon">
						<i class="fa fa-envelope-open" aria-hidden="true"></i>
					</div>
					<div class="col-11">
						<h5>EMAIL</h5>
						<p><a href="mailto:example@email.com"> saidulsuman42@gmail.com</a></p>
						
					</div>
					<div class="col-1 pr-0 icon mt-4">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="col-11 mt-4">
						<h5>PHONE</h5>
						<p> +8801675843972</p>
						<p> +8801873843972</p>
					</div>
					<div class="col-1 pr-0 icon mt-4">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-11 mt-4">
						<h5>ADDRESS</h5>
						<p>House 158, Road 2E,Sector 4, Uttara , Dhaka-1230</p>
						<p>Bangladesh</p>
					</div>
				</div>
			</div>
			<div class="col-lg-7 mt-lg-0 mt-5 contact-right">
				<h4 class="mb-4">Get In Touch</h4>
				
				
				<form action="" method="post">
				    <label><i class="fa mr-2 fa-user" aria-hidden="true"></i> Id</label>
					
					<input type="text" name="id" value="" required="">
					<div class="clearfix"></div>
					<label><i class="fa mr-2 fa-user" aria-hidden="true"></i> Name</label>
					<input type="text" name="name" value="""required="">
					<div class="clearfix"></div>
					<label><i class="fas mr-2 fa-envelope-open" aria-hidden="true"></i>Email</label>
					<input type="email" name="email" value="" required="">
					<div class="clearfix"></div>
					<label><i class="fas mr-2 fa-phone" aria-hidden="true"></i>Phone</label>
					<input type="text" name="phone" value="" required="">
					<div class="clearfix"></div>
					<label><i class="fas mr-2 fa-edit" aria-hidden="true"></i>Massage</label>
					<textarea type="text" name="massage" value =""required=""></textarea>
					<div class="clearfix"></div>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
			
			
			
			<?php
if(isset($_POST['submit'])) {
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $massage=$_POST['massage'];

  //echo $folder; output :student/1745.jpg
  //move_uploaded_file() this function use to move file laptop to web folder




  if ($id!="" && $name!="" && $email!="" && $phone!="" && $massage!="")
   {
    $query = "INSERT INTO personal VALUES('$id','$name','$email','$phone','$massage')";
    $data = mysqli_query($con,$query);
    if ($data) {
      echo "insert data <a href = 'view.php'>check</a>";
    }
  }
      else {
        echo "all field are required";
      }
  }

//$rn=$_GET['rollno'];
//$sn=$_GET['sname'];
//$cl=$_GET['class'];

//$query = "INSERT INTO student VALUES('$rn','$sn','$cl')";
//$data = mysqli_query($con,$query);
//if ($data) {
  //echo "insert data";


 ?>

			
		</div>
	</div>
	<a href="index.php"> TOP </a>
</section>
<!-- //contact -->

<!-- footer -->
<footer class="py-5">
	<div class="container">
		
		<div class="copyright text-center">
			<p>© 2018 Personal View. All Rights Reserved | Design by Suman</a> </p>
		</div>
	</div>
	<a href="index.php"> TOP </a>
</footer>
<!-- //footer -->


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!--  light box js -->
	<script src="js/lightbox-plus-jquery.min.js"> </script> 
	<!-- //light box js-->
	<!-- for-Testimonials -->
	<!-- required-js-files-->
	<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
		$(document).ready(function() {
		  $("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		  });
		});
		</script>
	<!--//required-js-files-->
	<!-- //for-Testimonials -->


	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>