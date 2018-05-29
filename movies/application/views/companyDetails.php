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
						<!--	<li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>-->
								<ul class="dropdown-menu megamenu-content" role="menu">
									<li>
										<div class="row">
										    	
											<!--<div class="col-menu col-md-3">
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
											</div>--><!-- end col-3 -->
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
											</div>
										<!-- end col-3 -->
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
										<!--	<div class="col-menu col-md-3">
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
											</div>-->
										</div><!-- end row -->
									</li>
								</ul>
							</li>
							<!--<li><a href="blog.html">Blog</a></li>-->
							
              
                            	<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<img src="<?php echo base_url(); ?>assets/img/person.png" class="img-responsive img-circle" alt="user">
								</a>
								<ul class="dropdown-menu dropdown-user">
								
								<!--	<li><a href="<?php echo base_url(); ?>index.php/jobseekerprofile"><i class="fa fa-user fa-fw"></i>Edit Profile</a></li>-->
									
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
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Create Company</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			
			<!-- General Detail Start -->
			<div class="detail-desc section">
				<div class="container white-shadow">
					<div class="row">
						<div class="detail-pic js">
							<div class="box">
								<input type="file" name="upload-pic[]" id="upload-pic" class="inputfile"/>
								<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
							</div>
						</div>
					</div>
					
					<div class="row bottom-mrg">
						<form class="add-feild">
						
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Company Name">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Company Tagline">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="form-control input-lg">
										<option>All Categories</option>
										<option>Software</option>
										<option>Hardware</option>
										<option>Machanical</option>
										<option>HR/Manager</option>
									</select>
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Address">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="City">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="state">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="zip">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Country">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Company CEO Name">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Company Description"></textarea>
							</div>
						</form>
					</div>
					
					<div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-md-12 col-sm-12">
								<div class="detail-pannel-footer-btn pull-right">
									<a href="#" class="footer-btn choose-cover">Choose Cover Image</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- General Detail End -->
			
			<!-- Basic Full Detail Form Start -->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Work Experience</h2>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Email Address">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" placeholder="Phone Number">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Website Address">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" placeholder="Local E.g. It Park New">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users"></i></span>
									<input type="text" class="form-control" placeholder="Employee E.g. 100-2500">
								</div>	
							</div>
							
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Social Profile</h2>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">About Company</h2>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control textarea" placeholder="About Company"></textarea>
							</div>	
							<div class="col-md-12 col-sm-12">
								<button class="btn btn-success btn-primary small-btn">Submit your company</button>	
							</div>	
						</form>
					</div>
				</div>
			</section>
			<!-- Basic Full Detail Form End -->
			
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
										<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="email"  name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="login-btn" class="submit-btn"> Login </button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="register">
								<img src="assets/img/logo.png" class="img-responsive" alt="" />
									<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text"  name="email" class="form-control" placeholder="Your Name" required="">
													<input type="email"  name="email" class="form-control" placeholder="Your Email" required="">
													<input type="email"  name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
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
			<script type="<?php echo base_url(); ?>text/javascript" src="assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/bootsnav.js"></script>
			<script src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/js/viewportchecker.js"></script>
			<script src="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap-select.min.js"></script>
			
			<!-- wysihtml5 editor js -->
			<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/wysihtml5-0.3.0.js"></script>
			<script src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap-wysihtml5.js"></script>
			
			<!-- Owl carousel Js -->
			<script type="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>text/javascript" src="assets/plugins/owl-carousel/js/owl.carousel.min.js"></script>
			
			<!-- Date dropper js-->
			<script src="<?php echo base_url(); ?>assets/plugins/date-dropper/datedropper.js"></script>
			
			<!-- Custom Js -->
			<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
			
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
			
			
			<script>
				$('#company-dob').dateDropper();
			</script>
		</div>
	</body>
</html>