<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Upload your Track</title>
	<meta charset="UTF-8">
	<meta name="description" content="Upload your Track">
	<meta name="keywords" content="radio, station, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->   
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	

	<link rel="stylesheet" href="css/bootstrap.min-charuka.css"/>
	<link rel="stylesheet" href="css/font-awesome.min-charuka.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min-charuka.css"/>
	<link rel="stylesheet" href="css/flaticon-charuka.css"/>
	<link rel="stylesheet" href="css/owl.carousel-charuka.css"/>
	<link rel="stylesheet" href="css/style-m.css"/>
	<link rel="stylesheet" href="css/animate-charuka.css"/>
	<link rel="stylesheet" href="css/style-music.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->
	<header class="header-section">
		<div class="header-warp">
			<!-- Site Logo -->
			<a href="../Homepage.php" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
					<li ><a href="../videopage.php">VIDEOS</a></li>
				<li class="active"><a href="music.php">MP3</a></li>
				<li><a href="../pictures/index-2.html">PICTURES</a></li>
				<li><a href="../sadaham/sadaham.php">SADAHAM SISILA</a></li>
				<li><a href="index.php">GREETINGS CARDS</a></li>
				
			</ul>
			<!-- Social Links -->
			<div class="header-social-links">
			<!--
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-soundcloud"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href=""><i class="fa fa-google-plus"></i></a>
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-youtube-play"></i></a>
				-->
				<form class="form-inline" action="#" method="GET" style="margin-left: 120px;">
                        <input type="text" class="form-control mb-sm-0" id="inlineFormInputName3" placeholder="Search">
                         <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </form>
			</div>
		</div>
	</header>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<!-- Site Logo -->
			
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
				
				<li ><a href="music.php">Latest Hits</a></li>
				<li><a href="#">Old Songs</a></li>
				<li><a href="#">Shows</a></li>
				<li><a href="#">DJ’s</a></li>
				
				<li class="active"><a href="upload.php">Upload</a></li>
			</ul>
			<!-- Social Links -->
			
		</div>
	</header>
	<!-- Header section end -->
<!-- Modal 5 -->
  <div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">


          <button type="button" class="close" data-dismiss="modal">&times;</button>
     
        </div>

        <div class="modal-body" align="center">
        	<div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
    </div>
  </div>
</div>
  </div>


	<!--  section -->
	<section class="page-info-section set-bg" data-setbg="img/page-info-bg.jpg">
		<div class="container">
			<div class="section-title text-center">
				<h2>Upload Your Track</h2>	
			</div>
		</div>
	</section>
	<!--  section end -->
	 <div class="col-md-6 offset-md-3 mt-5">
        
        
       
        <form accept-charset="UTF-8"  method="POST" action="#" onSubmit="alert('Thank you for your Support. We will update this content imidiatly.');">
          <div class="form-group">
            <label for="exampleInputName">Full Name</label>
            <input type="text" name="fullname" class="form-control" id="exampleInputName" placeholder="Enter your name and surname" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" required="required">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputDes">Description</label>
            <input type="text-area" name="description" class="form-control" id="exampleInputDes" placeholder="write a small description" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputArt">Artist</label>
            <input type="text-area" name="artist" class="form-control" id="exampleInputArt" placeholder="Enter the Artist name" required="required">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Categery</label>
            <select class="form-control" id="exampleFormControlSelect1" name="platform" required="required">
              <option>old songs</option>
              <option>DJ'S</option>
              <option>New</option>
            </select>
          </div>
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload your Track:</label>
            <input type="file" name="file">
          </div>
          <hr>
          <button type="submit" class="btn btn-primary site-btn alert alert-success alert-dismissible" data-target="#myModal12">Submit</button>

        </form>

    </div> 
    
    

	<!-- contact section -->
	
	<!--  contact section end -->



	<!-- Footer Top section -->
	
	<!-- Footer section end -->


<!-- Footer Top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 ft-widget">
					<div class="ft-contact-widget">
						<img src="img/logo.png" class="footer-logo" alt="">
						<ul class="order-list">
					
						<li><a href=""></span>sinhalalanka.com @ Sri Lanka Entertainment Web Service. free sinhala music Audio , Video, images , Buddhist Program</a></li>
						
					</ul>
					</div>
					
				</div>
				<div class="col-lg-3 col-md-6 ft-widget">
					<div class="ft-title">
						<h4>Contact Us</h4>
						
					</div>
					<ul class="order-list">
					
						<li><a href=""></span>134/2 ගාලු පාර කෙලින් වීදිය කොළබ 09</a></li>
						<li><a href=""></span>sinhalalanka@gmail.com</a></li>
						<li><a href=""></span>+94 775 896 157</a></li>
						<li><a href=""></span>+094 112 729 729</a></li>
						<li><a href=""></span>Electronic Worriors</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 ft-widget">
					<div class="ft-title">
						<h4>Useful Links</h4>
					</div>
					<ul class="order-list">
					
						<li><a href=""></span>Home</a></li>
						<li><a href=""></span>Free SMS</a></li>
						<li><a href=""></span>Free MMS</a></li>
						<li><a href=""></span>Sri Lanka Radio</a></li>
						<li><a href=""></span>Sri Lanka Tv</a></li>
						<li><a href=""></span>Free email</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 ft-widget">
					<div class="ft-title">
						<h4>Calender</h4>
					</div>
					<div class="ft-contact-widget">
						
						<!------ Include the above in your HEAD tag ---------->

	<div class="row">
        <div class="span12">
    		<table class="table-condensed table-bordered table-striped">
                <thead>
                    <tr>
                      <th colspan="7">
                        <span class="btn-group">
                            <a class="btn" style="color:white;"><i class="icon-chevron-left"></i></a>
                        	<a class="btn active" style="color:white;" >October 2020</a>
                        	<a class="btn"style="color:white;"><i class="icon-chevron-right"></i></a>
                        </span>
                      </th>
                    </tr>
                    <tr>
                        <th style="color:white;">Su</th>
                        <th style="color:white;">Mo</th>
                        <th style="color:white;">Tu</th>
                        <th style="color:white;">We</th>
                        <th style="color:white;">Th</th>
                        <th style="color:white;">Fr</th>
                        <th style="color:white;">Sa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="muted">29</td>
                        <td class="muted">30</td>
                        <td class="muted">31</td>
                        <td style="color:azure;">1</td>
                        <td style="color:azure;">2</td>
                        <td style="color:azure;">3</td>
                        <td style="color:azure;">4</td>
                    </tr>
                    <tr>
                        <td style="color:azure;">5</td>
                        <td style="color:azure;">6</td>
                        <td style="color:azure;">7</td>
                        <td style="color:azure;">8</td>
                        <td style="color:azure;">9</td>
                        <td style="color:azure;">10</td>
                        <td style="color:azure;">11</td>
                    </tr>
                    <tr>
                        <td style="color:azure;">12</td>
                        <td style="color:azure;">13</td>
                        <td style="color:azure;">14</td>
                        <td style="color:azure;">15</td>
                        <td style="color:azure;">16</td>
                        <td style="color:azure;">17</td>
                        <td style="color:azure;">18</td>
                    </tr>
                    <tr>
                        <td style="color:azure;">19</td>
                        <td class="btn-primary"><strong>20</strong></td>
                        <td style="color:azure;">21</td>
                        <td style="color:azure;">22</td>
                        <td style="color:azure;">23</td>
                        <td style="color:azure;">24</td>
                        <td style="color:azure;">25</td>
                    </tr>
                    <tr>
                        <td style="color:azure;">26</td>
                        <td style="color:azure;">27</td>
                        <td style="color:azure;">28</td>
                        <td>29</td>
                        <td class="muted">1</td>
                        <td class="muted">2</td>
                        <td class="muted">3</td>
                    </tr>
                </tbody>
            </table>
        </div>
	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div><div class="container">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <p class="copy">Copyright 1999-2020 by Refsnes Data. <a href="#">SinhlaLanka.com</a> All Rights Reserved.</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="social-list clearfix">
                        <li><a href="https://www.facebook.com/sinhalalankacom" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
	<!-- Footer Top section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	

    </body>
</html>