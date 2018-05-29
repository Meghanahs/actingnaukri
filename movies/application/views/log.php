<?php

        if(!isset($_SESSION['login']))
        {
            header("Location: " .base_url()."home.php");
        }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Best Responsive job portal template build on Latest Bootstrap.">
	<meta name="keywords" content="job, nob board, job portal, job listing">
	<meta name="robots" content="index,follow">

    <title>filmy.com</title>

    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-theme.min.css">
	<!-- Bootstrap Select Option css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-select.min.css">
	<!-- Bootstrap wysihtml5 ditor-->
	<link rel="stylesheet" type="<?php echo base_url(); ?>text/css" href="assets/plugins/bootstrap/css/bootstrap-wysihtml5.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
	
    <!--owl Carousel-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/owl-carousel/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/owl-carousel/css/owl.theme.css">
	
    <!-- Icons -->
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/plugins/line-font/line-font.css" rel="stylesheet">
    
    <!-- Animate -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate/animate.css" rel="stylesheet">
    
    <!-- Bootsnav -->
    <link href="<?php echo base_url(); ?>assets/css/bootsnav.css" rel="stylesheet">
    
    <!-- Custom style -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/responsiveness.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
	</head>
	<body>
		<div class="wrapper">  
			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

				<div class="container">            
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" class="logo logo-display" alt="">
							<img src="<?php echo base_url(); ?>assets/img/logo-white.png" class="logo logo-scrolled" alt="">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="active"><input type="text" class="form-control" placeholder="Find Freelancer"></li>
							<li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
								<ul class="dropdown-menu megamenu-content" role="menu">
									<li>
										<div class="row">
											<div class="col-menu col-md-3">
												<h6 class="title">Main Pages</h6>
												<div class="content">
													<ul class="menu-col">
														<li><a href="<?php echo base_url(); ?>index.php/load/job1">Home Page 1</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job2">Home Page 2</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job3">Home Page 3</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job4">Home Page 4</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job5">Home Page 5</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job6">Sign In / Sign Up</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job7">Search Job</a></li>
													</ul>
												</div>
											</div><!-- end col-3 -->
											<div class="col-menu col-md-3">
												<h6 class="title">For Candidate</h6>
												<div class="content">
													<ul class="menu-col">
														<li><a href="<?php echo base_url(); ?>index.php/load/job8">Browse Jobs</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job9">Browse Companies</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job10">Create Resume</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job11">Resume Detail</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job12">Manage Jobs</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job13">Job Detail</a></li>
														<li><a href="<?php echo base_url(); ?>index.php/load/job14">Job In Grid</a></li>
                                                        <li><a href="<?php echo base_url(); ?>index.php/load/job9">Candidate Profile</a></li>															
													</ul>
												</div>
											</div><!-- end col-3 -->
											<div class="col-menu col-md-3">
												<h6 class="title">For Employee</h6>
												<div class="content">
													<ul class="menu-col">
														<li><a href="create-job.html">Create Job</a></li>
														<li><a href="create-company.html">Create Company</a></li>
														<li><a href="manage-company.html">Manage Company</a></li>
														<li><a href="manage-candidate.html">Manage Candidate</a></li>
														<li><a href="manage-employee.html">Manage Employee</a></li>
														<li><a href="browse-resume.html">Browse Resume</a></li>
														<li><a href="search-new.html">New Search Job</a></li>
														<li><a href="employer-profile.html">Employer Profile</a></li>
													</ul>
												</div>
											</div>    
											<div class="col-menu col-md-3">
												<h6 class="title">Extra Pages</h6>
												<div class="content">
													<ul class="menu-col">
														<li><a href="manage-resume-2.html">Manage Resume 2</a></li>
														<li><a href="manage-resume.html">Manage Resume</a></li>
														<li><a href="company-detail.html">Company Detail</a></li>
														<li><a href="blog-detail.html">Blog detail</a></li>
														<li><a href="accordion.html">Accordion</a></li>
														<li><a href="tab.html">Tab Style</a></li>
														<li><a href="new-job-detail.html">New Job Detail</a></li>
													</ul>
												</div>
											</div><!-- end col-3 -->
										</div><!-- end row -->
									</li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
							
              
                            	<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<img src="<?php echo base_url(); ?>assets/img/person.png" class="img-responsive img-circle" alt="user">
								</a>
								<ul class="dropdown-menu dropdown-user">
								
									<li><a href="<?php echo base_url(); ?>index.php/jobseekerprofile"><i class="fa fa-user fa-fw"></i>Edit Profile</a></li>
									
									<li><a href="<?php echo base_url(); ?>index.php/User/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
									
								</ul>
							</li>
							
							<li>
							<div>Hello <?php echo($_SESSION['username'])?></div>
                            </li>
						</ul>
		
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Main Banner Section Start -->
			<div class="banner" style="background-image:url(http://via.placeholder.com/1920x850);">  
				<div class="container">
					<div class="banner-caption">
						<div class="col-md-12 col-sm-12 banner-text">
							<h1>7,000+ Browse Jobs</h1>
							<form class="form-horizontal">
								<div class="col-md-4 no-padd">
									 <div class="input-group">
										 <input type="text" class="form-control right-bor" placeholder="Skills, Designations, Companies">
									 </div>
								</div>
								<div class="col-md-3 no-padd">
									 <div class="input-group">
										 <input type="text" class="form-control right-bor" placeholder="Search By Location..">
									 </div>
								</div>
								
								<div class="col-md-3 no-padd">
									 <div class="input-group">
										<select class="form-control">
										  <option>Select City</option>
										  <option>New York</option>
										  <option>San Joes</option>
										</select>
									 </div>
								</div>
								
								<div class="col-md-2 no-padd">
									<div class="input-group">
										<button type="submit" class="btn btn-primary">Search Job</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="company-brand">
					<div class="container">
						<div id="company-brands" class="owl-carousel">
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/microsoft-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/img-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/mothercare-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/paypal-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/serv-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/xerox-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/yahoo-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="<?php echo base_url(); ?>assets/img/mothercare-home.png" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="clearfix"></div>
			<!-- Main Banner Section End -->
			
			<!-- Top Features Section Start-->
			<section class="first-feature" >
				<div class="container">
					<div class="all-features">
					
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-desktop"></i>
								</div>
								<div class="feature-caption">
									<h5>Web Developer</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-mobile"></i>
								</div>
								<div class="feature-caption">
									<h5>Mobile Developer</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-lightbulb-o"></i>
								</div>
								<div class="feature-caption">
									<h5>Creative Designer</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-file-text"></i>
								</div>
								<div class="feature-caption">
									<h5>Content Writer</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-hdd-o"></i>
								</div>
								<div class="feature-caption">
									<h5>Manager</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-bullhorn"></i>
								</div>
								<div class="feature-caption">
									<h5>Sales & Marketing</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-credit-card"></i>
								</div>
								<div class="feature-caption">
									<h5>Accountant</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 small-padding">
							<div class="job-feature">
								<div class="feature-icon">
									<i class="fa fa-user"></i>
								</div>
								<div class="feature-caption">
									<h5>Management / HR</h5>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Top Features Section End-->
			
			<!-- video section Start -->
			<section class="video-sec dark" id="video" style="background-image:url(http://via.placeholder.com/1920x850);">
				<div class="container">
					<div class="row">
						<div class="main-heading">
							<p>Best For Your Projects</p>
							<h2>Watch Our <span>video</span></h2>
						</div>
					</div>
					<!--/row-->
					<div class="video-part">
						<a href="#" data-toggle="modal" data-target="#my-video" class="video-btn"><i class="fa fa-play"></i></a>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- video section Start -->

			<!-- Work Process Counter Section Start -->
			<section class="wp-process">
				<div class="container">
					<div class="row">
						<div class="main-heading">
							<p>How We Work</p>
							<h2>Our Work <span>Process</span></h2>
						</div>
					</div>
					<!--/row-->
					
					<div class="col-md-4 col-sm-6">
						<div class="work-process">
							<div class="work-process-icon">
								<span class="icon-search"></span>
							</div>
							<div class="work-process-caption">
								<h4>Search Job</h4>
								<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="work-process">
							<div class="work-process-icon">
								<span class="icon-mobile"></span>
							</div>
							<div class="work-process-caption">
								<h4>Find Job</h4>
								<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="work-process">
							<div class="work-process-icon">
								<span class="icon-profile-male"></span>
							</div>
							<div class="work-process-caption">
								<h4>Hire Employee</h4>
								<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="work-process">
							<div class="work-process-icon">
								<span class="icon-layers"></span>
							</div>
							<div class="work-process-caption">
								<h4>Start Work</h4>
								<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="work-process">
							<div class="work-process-icon">
								<span class="icon-wallet"></span>
							</div>
							<div class="work-process-caption">
								<h4>Pay Money</h4>
								<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6">
						<div class="work-process">
							<div class="work-process-icon">
								<span class="icon-happy"></span>
							</div>
							<div class="work-process-caption">
								<h4>Happy</h4>
								<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Work Process Counter Section End -->
			
			<!-- testimonial section Start -->
			<section class="testimonial" id="testimonial">
				<div class="container">
					<div class="row">
						<div class="main-heading">
							<p>What Say Our Client</p>
							<h2>Our Success <span>Stories</span></h2>
						</div>
					</div>
					<!--/row-->
					<div class="row">
						<div id="client-testimonial-slider" class="owl-carousel">
							<div class="client-testimonial">
								<div class="pic">
									<img src="http://via.placeholder.com/150x150" alt="">
								</div>
								<p class="client-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
								</p>
								<h3 class="client-testimonial-title">Lacky Mole</h3>
								<ul class="client-testimonial-rating">
									<li class="fa fa-star-o"></li>
									<li class="fa fa-star-o"></li>
									<li class="fa fa-star"></li>
								</ul>
							</div>

							<div class="client-testimonial">
								<div class="pic">
									<img src="http://via.placeholder.com/150x150" alt="">
								</div>
								<p class="client-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
								</p>
								<h3 class="client-testimonial-title">Karan Wessi</h3>
								<ul class="client-testimonial-rating">
									<li class="fa fa-star-o"></li>
									<li class="fa fa-star"></li>
									<li class="fa fa-star"></li>
								</ul>
							</div>
							
							<div class="client-testimonial">
								<div class="pic">
									<img src="http://via.placeholder.com/150x150" alt="">
								</div>
								<p class="client-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
								</p>
								<h3 class="client-testimonial-title">Roul Pinchai</h3>
								<ul class="client-testimonial-rating">
									<li class="fa fa-star-o"></li>
									<li class="fa fa-star-o"></li>
									<li class="fa fa-star"></li>
								</ul>
							</div>
							
							<div class="client-testimonial">
								<div class="pic">
									<img src="http://via.placeholder.com/150x150" alt="">
								</div>
								<p class="client-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
								</p>
								<h3 class="client-testimonial-title">Adam Jinna</h3>
								<ul class="client-testimonial-rating">
									<li class="fa fa-star-o"></li>
									<li class="fa fa-star-o"></li>
									<li class="fa fa-star"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- testimonial section End -->
			
			<!-- pricing Section Start -->
			<section class="pricing">
				<div class="container">
					<div class="row">
						<div class="main-heading">
							<p>Check Our Packages</p>
							<h2>Our Best <span>Offers</span></h2>
						</div>
					</div>
					<!--/row-->
					
					<div class="col-md-4 col-sm-4">
						<div class="pr-table">
							<div class="pr-plan">
								<h4>Basic</h4>
							</div>
							<div class="pr-price">
								<h3><sup>$</sup>29<sub>/Mon</sub></h3>
							</div>
							<div class="pr-features">
								<ul>
									<li>1 GB Ram</li>
									<li>2 GB Memory</li>
									<li>1 Core Processor</li>
									<li>32 GB SSD Disk</li>
									<li>1 TB Transfer</li>
								</ul>
							</div>
							<div class="pr-buy-button">
								<a href="#" class="pr-btn" title="Price Button">Get Started</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="pr-table">
							<div class="pr-plan">
								<h4>Premium</h4>
							</div>
							<div class="pr-price">
								<h3><sup>$</sup>40<sub>/Mon</sub></h3>
							</div>
							<div class="pr-features">
								<ul>
									<li>1 GB Ram</li>
									<li>2 GB Memory</li>
									<li>1 Core Processor</li>
									<li>32 GB SSD Disk</li>
									<li>1 TB Transfer</li>
								</ul>
							</div>
							<div class="pr-buy-button">
								<a href="#" class="pr-btn active" title="Price Button">Get Started</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="pr-table">
							<div class="pr-plan">
								<h4>Ultimate</h4>
							</div>
							<div class="pr-price">
								<h3><sup>$</sup>120<sub>/Mon</sub></h3>
							</div>
							<div class="pr-features">
								<ul>
									<li>1 GB Ram</li>
									<li>2 GB Memory</li>
									<li>1 Core Processor</li>
									<li>32 GB SSD Disk</li>
									<li>1 TB Transfer</li>
								</ul>
							</div>
							<div class="pr-buy-button">
								<a href="#" class="pr-btn" title="Price Button">Get Started</a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- End Pricing Section -->
			
			<!-- Download app Section Start -->
			<section class="download-app" style="background-image:url(http://via.placeholder.com/1920x850);">
				<div class="container">
					<div class="col-md-5 col-sm-5 hidden-xs">
						<img src="assets/img/iphone.png" alt="iphone" class="img-responsive" />
					</div>
					<div class="col-md-7 col-sm-7">
						<div class="app-content">
							<h2>Download Our Best Apps</h2>
							<h4>Best oppertunity in your hand</h4>
							<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>
							<a href="#" class="btn call-btn"><i class="fa fa-apple"></i>Download</a>
							<a href="#" class="btn call-btn"><i class="fa fa-android"></i>Download</a>
						</div>
					</div>
					<!--/row-->
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Download app Section End -->
			
			
			<!-- Footer Section Start -->
			<footer class="footer">
				<div class="row lg-menu">
					<div class="container">
						<div class="col-md-4 col-sm-4">
							<img src="assets/img/footer-logo.png" class="img-responsive" alt="" /> 
						</div>
						<div class="col-md-8 co-sm-8 pull-right">
							<ul>
								<li><a href="index.html" title="">Home</a></li>
								<li><a href="blog.html" title="">Blog</a></li>
								<li><a href="404.html" title="">404</a></li>
								<li><a href="faq.html" title="">FAQ</a></li>
								<li><a href="contact.html" title="">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row no-padding">
					<div class="container">
						<div class="col-md-3 col-sm-12">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">About Job Stock</h3>
							<div class="textwidget">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
							<p>7860 North Park Place<br>
							San Francisco, CA 94120</p>
							<p><strong>Email:</strong> Support@careerdesk</p>
							<p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">All Navigation</h3>
							<div class="textwidget">
								<div class="textwidget">
								<ul class="footer-navigation">
									<li><a href="manage-company.html" title="">Front-end Design</a></li>
									<li><a href="manage-company.html" title="">Android Developer</a></li>
									<li><a href="manage-company.html" title="">CMS Development</a></li>
									<li><a href="manage-company.html" title="">PHP Development</a></li>
									<li><a href="manage-company.html" title="">IOS Developer</a></li>
									<li><a href="manage-company.html" title="">Iphone Developer</a></li>
								</ul>
							</div>
							</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">All Categories</h3>
							<div class="textwidget">
								<ul class="footer-navigation">
									<li><a href="manage-company.html" title="">Front-end Design</a></li>
									<li><a href="manage-company.html" title="">Android Developer</a></li>
									<li><a href="manage-company.html" title="">CMS Development</a></li>
									<li><a href="manage-company.html" title="">PHP Development</a></li>
									<li><a href="manage-company.html" title="">IOS Developer</a></li>
									<li><a href="manage-company.html" title="">Iphone Developer</a></li>
								</ul>
							</div>
							</div>
						</div>
							
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
							<h3 class="widgettitle widget-title">Connect Us</h3>
							<div class="textwidget">
							<form class="footer-form">
								<input type="text" class="form-control" placeholder="Your Name"> 
								<input type="text" class="form-control" placeholder="Email">
								<textarea class="form-control" placeholder="Message"></textarea>
								<button type="submit" class="btn btn-primary">Login</button>
							</form>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row copyright">
					<div class="container">
						<p>Copyright Job Stock © 2017. All Rights Reserved </p>
					</div>
				</div>
			</footer>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="tab" role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
								<li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content" id="myModalLabel2">
								<div role="tabpanel" class="tab-pane fade in active" id="login">
									<img src="assets/img/logo.png" class="img-responsive" alt="" />
									<div class="subscribe wow fadeInUp">
										<form class="form-inline" method="post" action="http://movies.siddhrans.com/index.php/User/logging">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="email"  name="email" class="form-control" placeholder="email" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="login-btn" class="submit-btn"> Login </button>
												<span><a href="lost-password.php"> Forget Password</a></span>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="register">
								<img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-responsive" alt="" />
								
						
									<form class="form-inline" method="post" action="http://movies.siddhrans.com/index.php/User/userRegistration">
											<div class="col-sm-12">
												<div class="form-group">
												    
												<label>Name :</label><input type="text"  name="name" class="form-control" placeholder="Your name" >
												<label>Email :</label><input type="email"  name="email" class="form-control" placeholder="Your Email">
												<label>Contact No :</label><input type="text"  name="number" class="form-control" placeholder="Phone Number">
												<label>Gender :</label>	</br>
													<input type="radio" name="gender" value="male"> Male
                                                    <input type="radio" name="gender" value="female"> Female<br>
                                                <label> Password :</label> 
													<input type="password" name="password" class="form-control"  placeholder="enter Password">
												<label>User Type :</label>	
													<select name="userType">
                                                    <option value="Job Seeker">Job Seeker</option>
                                                    <option value="Recruiter">Recruiter</option>
                                                    </select>
    													<div class="center">
													<button type="submit" name="submit" id="subscribe" class="submit-btn"> Create Account </button>
													</div>
												</div>
											</div>
										</form>
								</div>
							</div>
							</div>
						</div>
						</div>
				</div>
			</div>   
			<!-- End Sign Up Window -->
			
			<!-- START JAVASCRIPT -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script type="text/javascript" src="assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/bootsnav.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/viewportchecker.js"></script>
			<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap-select.min.js"></script>
			
			<!-- wysihtml5 editor js -->
			<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/wysihtml5-0.3.0.js"></script>
			<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap-wysihtml5.js"></script>
			
			<!-- Owl carousel Js -->
			<script type="text/javascript" src="assets/plugins/owl-carousel/js/owl.carousel.min.js"></script>
			
			<!-- Custom Js -->
			<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
			
			
		</div>
	</body>
</html>