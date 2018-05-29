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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-theme.min.css">
	<!-- Bootstrap Select Option css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-select.min.css">
	<!-- Bootstrap wysihtml5 ditor-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-wysihtml5.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--  nav panel -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui.css">
    <script href"<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
    <script href="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
	 
	
    <!--owl Carousel-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/owl-carousel/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/owl-carousel/css/owl.theme.css">
	
	<!-- Dropzone -->
    <link href="<?php echo base_url();?>assets/plugins/dropzone/css/dropzone.css" rel="stylesheet">
	
    <!-- Icons -->
    <link href="<?php echo base_url();?>assets/plugins/font-awesome/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/plugins/line-font/line-font.css" rel="stylesheet">
    
    <!-- Animate -->
    <link href="<?php echo base_url();?>assets/plugins/animate/animate.css" rel="stylesheet">
    
    <!-- Bootsnav -->
    <link href="<?php echo base_url();?>assets/css/bootsnav.css" rel="stylesheet">
    
    <!-- Custom style -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsiveness.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #07b107;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
    
    
    
    <script type="text/javascript">
        function uploadFunction(){
            document.getElementById("uploadForm").action="http://movies.siddhrans.com/jobseekerProfileImages.php";
            document.getElementById("uploadForm").submit();
        }
    </script>
    
    <style>
        .custom-file-upload {
            display: inline-block;
            position: absolute;
            left: 44%;
            bottom: -12px;
            cursor: pointer;
            width: 30px;
            height: 30px;
            background: #07b107;
            border-radius: 50%;
            line-height: 30px;
            text-align: center;
            color: #ffffff;
        }
        
    </style>
    
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
 
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
							<img src="<?php echo base_url();?>assets/img/logo.png" class="logo logo-display" alt="">
							<img src="<?php echo base_url();?>assets/img/logo-white.png" class="logo logo-scrolled" alt="">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
				
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
			
			<!-- Title Header Start -->
			<section class="inner-header-title">
				<div class="container">
					<h1>Candidate Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
		
		<!-- Candidate Profile Start -->
        <section class="detail-desc advance-detail-pr gray-bg" style="background-image:url(http://via.placeholder.com/1920x850);">
            <div class="container white-shadow">
			
                <div class="row">
                    
                
                <?php echo form_open_multipart('Jobseekerprofile/jobseekerimage');?>
           
                   <div class="detail-pic"><img src="assets/img/can-1.png" class="img" alt="">
                    
                   
                    <!--<div class="detail-pic"><img src="<?php base_url().'assets/uploads/'.$pic->pic_file;?>"  class="img-responsive">-->
                    
                    <label for="image" class="custom-file-upload">
                        <i class="fa fa-pencil"></i>
                    </label>
                
                       <input type="file" style = "display:none" name="pic_file" id="image" class="detail-edit">
                            
                        </input>
                     <div style="padding-top: 104%;text-align: center;"><input type='submit' value='Upload' name='upload'></div>
                    </div>
                    
                      <div class="form-group">
               
                </form>
                
            </div>
            
                    <div class="detail-status"><span>Active Now</span></div>
                </div>
                <div style="color:red;text-align:center;">
                   	<?php echo validation_errors(); ?>
                     <?php if(isset($error)){print $error;}?>
                     </div>
				
                <div class="row bottom-mrg">
                    <div class="col-md-12 col-sm-12">
                        <div class="advance-detail detail-desc-caption">
                            	<div><h4><?php echo($_SESSION['username'])?></h4></div><span class="designation">Web Developer</span>
                            <ul>
                                <li><strong class="j-view">85</strong>Suggestion</li>
                                <li><strong class="j-applied">110</strong>View</li>
                                <li><strong class="j-shared">120</strong>Invitation</li>
                            </ul>
                        </div>
                    </div>
                </div>
				
                <div class="row no-padd">
                    <div class="detail pannel-footer">
                        <div class="col-md-5 col-sm-5">
                            <ul class="detail-footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="detail-pannel-footer-btn pull-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="footer-btn grn-btn" title="">Edit Now</a><a href="#" class="footer-btn blu-btn" title="">Save Draft</a></div>
                        </div>
                    </div>
                </div>
				
            </div>
        </section>
        
        
        
        <section class="full-detail-description full-detail gray-bg">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="full-card">
                       <div class="deatil-tab-employ tool-tab">
		                 <div class="tab">
                          <button class="tablinks" onclick="openCity(event, 'about')">About</button>
                         <!--  <button class="tablinks" onclick="openCity(event, 'address')">Address</button>-->
                           
                           <button class="tablinks" onclick="openCity(event, 'uploads')">Uploads</button>
                           <button class="tablinks" onclick="openCity(event, 'matches-jobs')">Matches Job</button>
                           <button class="tablinks" onclick="openCity(event, 'friends')">Friends</button>
                           <button class="tablinks" onclick="openCity(event, 'messages')">Messages</button>
                           <button class="tablinks" onclick="openCity(event, 'settings')">Settings</button>
                          
                         </div>
                             
                             <div id="about" class="tabcontent">
                                 
                                 <div class="row no-mrg">
							     	<div class="edit-pro">
										<div class="row">
										   
										        
                               
                               <?php $loggedInUser = $_SESSION['userDetails']?>
                                <div class="col-md-4 col-sm-6">
                                 <tr>Name :<td><?php echo $loggedInUser->username; ?></td></tr> </br>
                                <tr>Middle Name :<td><?php echo $loggedInUser->middlename; ?></td></tr></br>
                                 <tr>Last Name :<td><?php echo $loggedInUser->lastname; ?></td></tr></br>
                                 <tr>Gender :<td><?php echo $loggedInUser->gender; ?></td></tr></br>
                                 <tr>Mail ID :<td><?php echo $loggedInUser->mail; ?></td></tr></br>
                                 <tr>Contact Number :<td><?php echo $loggedInUser->contact_no; ?></td></tr> </br>
                                 <tr>Address :<td><?php echo $loggedInUser->address; ?></td></tr></br>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                 <tr>City :<td><?php echo $loggedInUser->city; ?></td></tr></br>
                                 <tr>State :<td><?php echo $loggedInUser->state; ?></td></tr></br>
                                 <tr>Zip :<td><?php echo $loggedInUser->zip; ?></td></tr></br>
                                 <tr>Country :<td><?php echo $loggedInUser->country; ?></td></tr></br>
                                 <tr>Educational Qualification :<td><?php echo $loggedInUser->education; ?></td></tr></br>
                                 <tr>Certificate :<td><?php echo $loggedInUser->certification; ?></td></tr></br>
                                 <tr>Institute :<td><?php echo $loggedInUser->instituet; ?></td></tr></br>
                                 </div>
                                 
                                 <?php  ?>
                              
                             </div>
                             </div>
                             </div>
                             </div>
                 
								
							<div id="uploads" class="tabcontent">
							    <div class="row no-mrg">
							        	<p>maximum 3 images and 2 videos </p>
							    	<div class="edit-pro">
							    		<div class="col-md-4 col-sm-6">
												<label>Upload Pictures</label>
												<form action="/upload-target" class="dropzone dz-clickable profile-pic">
													<div class="dz-default dz-message">
														<i class="fa fa-cloud-upload"></i>
														<span>Drop files here to upload</span>
													</div>
												</form>
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Upload Videos</label>
												<form action="/upload-target" class="dropzone dz-clickable profile-cover">
													<div class="dz-default dz-message">
														<i class="fa fa-cloud-upload"></i>
														<span>Drop files here to upload</span>
													</div>
												</form>
											</div>
											  </div>
											  </div>
							    
							</div>    
                             
                        <!-- <div id="address" class="tabcontent">
                            <h3>Address Info</h3>
									<ul class="job-detail-des">
										<li><span>Address:</span>SCO 210, Neez Plaza</li>
										<li><span>City:</span>Mohali</li>
										<li><span>State:</span>Punjab</li>
										<li><span>Country:</span>India</li>
										<li><span>Zip:</span>520 548</li>
										<li><span>Telephone:</span>+91 123 456 7854</li>
										<li><span>Fax:</span>(622) 123 456</li>
										<li><span>Email:</span>youremail@gmail.com</li>
									</ul>
							
                        </div>-->

                        <div id="matches-jobs" class="tabcontent">
                          <h3>Matches-job 122 new job</h3>
									<div class="row">
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-2.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Google Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
											<span class="tg-themetag tg-featuretag">Premium</span>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-6.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Project Manager</h4></a><span>Vertue Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-7.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Database Designer</h4></a><span>Twitter Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
											</div>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-2.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Google Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
											<span class="tg-themetag tg-featuretag">Premium</span>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-5.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Human Resource</h4></a><span>Skype Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
											</div>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-6.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Project Manager</h4></a><span>Vertue Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="applied">Apply</a></div>
											</div>
											<span class="tg-themetag tg-featuretag">Premium</span>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-7.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>CEO &amp; Manager</h4></a><span>Twitter</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-4.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Microsoft Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
											</div>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-3.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>PHP Developer</h4></a><span>Honda Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
											<span class="tg-themetag tg-featuretag">Premium</span>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="assets/img/com-1.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Web Designer</h4></a><span>Autodesk Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
											</div>
										</article>
										
									</div>
									
									<div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
                        </div>
                        
                        <div id="friends" class="tabcontent">
                           <div class="row">
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status pending">Pending</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-1.png" class="img-responsive" alt=""></div>
													<h4>Charles Hopman</h4><span>Web designer</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status available">Available</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-2.png" class="img-responsive" alt=""></div>
													<h4>Ethan Marion</h4><span>IOS designer</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status pending">Pending</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-3.png" class="img-responsive" alt=""></div>
													<h4>Zara Clow</h4><span>UI/UX designer</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status pending">Pending</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-4.png" class="img-responsive" alt=""></div>
													<h4>Henry Crooks</h4><span>PHP Developer</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status available">Available</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-2.png" class="img-responsive" alt=""></div>
													<h4>Joseph Macfarlan</h4><span>App Developer</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status pending">Pending</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-1.png" class="img-responsive" alt=""></div>
													<h4>Zane Joyner</h4><span>Html Expert</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status pending">Pending</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-3.png" class="img-responsive" alt=""></div>
													<h4>Anna Hoysted</h4><span>UI/UX Designer</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status available">Available</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-4.png" class="img-responsive" alt=""></div>
													<h4>Spencer Birdseye</h4><span>SEO Expert</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
										
										<div class="col-md-4 col-sm-4">
											<div class="manage-cndt">
												<div class="cndt-status pending">Pending</div>
												<div class="cndt-caption">
													<div class="cndt-pic"><img src="assets/img/can-1.png" class="img-responsive" alt=""></div>
													<h4>Eden Macaulay</h4><span>Web designer</span>
													<p>Our analysis team at Megriosft use end to end innovation proces</p>
												</div><a href="#" title="" class="cndt-profile-btn">View Profile</a></div>
										</div>
									</div>
									<div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
                        </div>
                        
                        <div id="messages" class="tabcontent">
                          <div class="inbox-body inbox-widget">
										<div class="mail-card">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#full-message" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets/img/can-1.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="full-message" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card unread">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#meaages-2" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets/img/can-2.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view1" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view1" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-2" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#meaages-3" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets/img/can-1.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view2" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view2" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-3" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#meaages-4" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets/img/can-3.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view3" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view3" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-4" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card unread">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="meaages-5" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets/img/can-4.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view4" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view4" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-5" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card">
											<header class="card-header cursor-pointer">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets/img/can-4.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view-6" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view-6" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="" id="meaages-6">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
												  <hr>
												  <h5 class="text-lighter">
													<i class="fa fa-paperclip"></i>
													<small>Attchments (3)</small>
												  </h5>
													<div class="attachment-block">
														<div class="thumb">
															<img src="assets/img/gallery1.jpg" alt="img" class="img-responsive">
														</div>
														<div class="attachment-info">
															<h6>Profile Pic  <span>( 1.69 mb )</span></h6>
															<ul>
																<li><a href="javascript:void(0)">Download</a></li>
																<li><a href="javascript:void(0)">View</a></li>
															</ul>
														</div>
													</div>
													<div class="attachment-block">
														<div class="thumb">
															<img src="assets/img/gallery2.jpg" alt="img" class="img-responsive">
														</div>
														<div class="attachment-info">
															<h6>Profile Pic  <span>( 1.69 mb )</span></h6>
															<ul>
																<li><a href="javascript:void(0)">Download</a></li>
																<li><a href="javascript:void(0)">View</a></li>
															</ul>
														</div>
													</div>
													<div class="attachment-block">
														<div class="thumb">
															<img src="assets/img/gallery3.jpg" alt="img" class="img-responsive">
														</div>
														<div class="attachment-info">
															<h6>Profile Pic  <span>( 1.69 mb )</span></h6>
															<ul>
																<li><a href="javascript:void(0)">Download</a></li>
																<li><a href="javascript:void(0)">View</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
                        </div>
                                   <div id="settings" class="tabcontent">
                         <!-- Start Settings -->
									<div class="row no-mrg">
								
										<div class="edit-pro">
										    
										    <form action="<?php echo base_url();?>index.php/Jobseekerprofile/editDetails" method="POST">
										         <?php $loggedInUser = $_SESSION['userDetails']?>
										        <div class="row">
										        <h3 style="text-align:center;">Personal Information</h3>
										       
										         <input type="hidden" name="uid" value="<?php echo $loggedInUser->uid;?>">
											<div class="col-md-4 col-sm-6">
												<label>First Name</label>
												<input type="text" name="name" id="name" class="form-control"value=" <?php echo $loggedInUser->username; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Middle Name</label>
												<input type="text" name="middlename" id="middlename" class="form-control" value="<?php echo $loggedInUser->middlename; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Last Name</label>
												<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $loggedInUser->lastname; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Email</label>
												<input type="email" name="email" class="form-control" value="<?php echo $loggedInUser->mail; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Phone</label>
												<input type="text" name="number" class="form-control" value="<?php echo $loggedInUser->contact_no; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Address</label>
												<input type="text" name="address" class="form-control" value="<?php echo $loggedInUser->address; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Zip / Postal</label>
												<input type="text" name="zip" class="form-control" value="<?php echo $loggedInUser->zip; ?>">
											</div>
											
											<!--<div class="col-md-4 col-sm-6">
												<label>Organization</label>
												<input type="text" class="form-control" value="">
											</div>-->
											<div class="col-md-4 col-sm-6">
												<label>City</label>
												<input type="text" name="city" class="form-control" value="<?php echo $loggedInUser->city; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>State</label>
												<input type="text" name="state" class="form-control" value="<?php echo $loggedInUser->state; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Country</label>
												<input type="text" name="country" class="form-control" value="<?php echo $loggedInUser->country; ?>">
											</div>
											
								<!--		<div class="col-md-4 col-sm-6">
											<label>About you</label>
												<textarea class="form-control" placeholder="Write Something"></textarea>
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Upload Images</label>
											<form action="/upload-target" class="dropzone dz-clickable profile-cover">
											  
													<div class="dz-default dz-message">
														<i class="fa fa-cloud-upload"></i>
														<span>Drop files here to upload</span>
													</div>
												</form>
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Upload Videos</label>
												<form action="/upload-target" class="dropzone dz-clickable profile-cover">
													<div class="dz-default dz-message">
														<i class="fa fa-cloud-upload"></i>
														<span>Drop files here to upload</span>
													</div>
												</form>
											</div>-->
											</div>
											<div class="row">
											 <div class="col-md-4 col-sm-6">
											     </div>
											<h3 style="text-align:center;">Educational Qualification</h3>
											<div class="col-md-4 col-sm-6">
											  <label>Education Specialization</label>
												<input type="text" name="qualification" class="form-control" value="<?php echo $loggedInUser->education; ?>">  
											</div>
											
											<div class="col-md-4 col-sm-6">
											 <label>Certification</label>
											 <input type="text" name="certification" class="form-control" value="<?php echo $loggedInUser->certification; ?>">     
											</div>
											<div class="col-md-4 col-sm-6">
											 <label>Institute</label>
											 <input type="text" name="instituet" class="form-control" value="<?php echo $loggedInUser->instituet; ?>">     
											</div>
									
										<!--	 <div class="col-md-4 col-sm-6">
												<label>Upload Certificate Image</label>
											<form action="/upload-target" class="dropzone dz-clickable profile-cover">
											  <div class="dz-default dz-message">
												<i class="fa fa-cloud-upload"></i>
												<span>Drop files here to upload</span>
												</div>
												</form>
											</div> -->
											</div>
										<div class="col-sm-12">
												<button type="submit" class="update-btn">Update Now</button>
											</div>
											</form>
										</div>
									</div>
								</div>
                        
                      
                        </div>
		
		               </div>
		            </div>
		        </div>
			
		  <div> <?php $message ?></div>
		 </section>

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
			
			<script type="text/javascript">
                    $(document).ready(function (e) {
                    	$("#uploadForm").on('submit',(function(e) {
                    		e.preventDefault();
                    		$.ajax({
                            	url: "jobseekerProfileImages.php",
                    			type: "POST",
                    			data:  new FormData(this),
                    			contentType: false,
                        	    cache: false,
                    			processData:false,
                    			success: function(data)
                    		    {
                    			$("#profilesuccess").html("Updated Successfully");
                    		    },
                    		  	error: function() 
                    	    	{
                    	    	    $("#profilesuccess").html("Failed to Upload Image.");
                    	    	} 	        
                    	   });
                    	}));
                    });

			
			<!-- START JAVASCRIPT -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/bootsnav.js"></script>
			<script src="<?php echo base_url();?>assets/js/viewportchecker.js"></script>
			<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap-select.min.js"></script>
			
			<!-- wysihtml5 editor js -->
			<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/wysihtml5-0.3.0.js"></script>
			<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap-wysihtml5.js"></script>
			
			<!-- dropzone js -->
			<script src="<?php echo base_url();?>assets/plugins/dropzone/js/dropzone.js"></script>
			
			<!-- Owl carousel Js -->
			<script type="<?php echo base_url();?>text/javascript" src="assets/plugins/owl-carousel/js/owl.carousel.min.js"></script>
			
			<!-- Custom Js -->
			<script src="<?php echo base_url();?>assets/js/custom.js"></script>
		</div>
	</body>
</html>