<!DOCTYPE html>
<html lang="zxx">


<head>
<?php
    include("config.php");
 
    if(isset($_POST['but_upload'])){
       $maxsize = 5242880; // 5MB
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

              mysqli_query($con,$query);
              echo "Upload successfully.";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
   } 
     ?>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PTNPV7L');</script>
    <!-- End Google Tag Manager -->
    <title>SinhalaLanka.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/music_bbG_icon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNPV7L"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Main header start -->
<header class="main-header header-transparent sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="Homepage.php">
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="videopage.php" id="navbarDropdownMenuLink" >
                           Videos
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./music/music.php" id="navbarDropdownMenuLink2" >
                            mp3 
                        </a>
                       
                    </li>
                   
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="./pictures/index-2.html" id="dropdown01">Pictures</a>
                     
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./sadaham/sadaham.php" id="navbarDropdownMenuLink5" >
                            Sadaham Sisila
                        </a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./GreetingCards/index-4.html" id="navbarDropdownMenuLink7">
                            Greetings Cards
                        </a>
                      
                    </li>
                    
                    <form class="form-inline" action="#" method="GET" style="margin-left: 120px;">
                            <input type="text" class="form-control mb-sm-0" id="inlineFormInputName3" placeholder="Search">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Banner start -->
<div class="banner banner_video_bg" id="banner">
    <div class="pattern-overlay">
   <a id="bgndVideo" class="player" data-property="{videoURL:'https://m.youtube.com/watch?v=dmHguwpdjso',containment:'.banner_video_bg', quality:'large', autoPlay:false, mute:true, opacity:1}">bg</a>
    </div>
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <div class="carousel-caption banner-slider-inner banner-slider-inner-2 d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3 class="text-uppercase">Upload your Videos</h3>
                            <p>
                                
                            </p>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Vedios</h1>
            <p>Uploaded vedios section</p>
        </div>
        <div class="row">
    <?php
     $fetchVideos = mysqli_query($con, "SELECT location FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
     
       echo "<div>";
       echo "<video src='".$location."' controls width='320px' height='200px' >";
       echo "</div>";
     }
     ?>
        </div>
    </div>
</div>
<!-- Featured Properties end -->

<!-- Services start -->

<!-- Services end -->

<!-- Categories strat -->

<!-- Categories end -->

<!-- Counters strat -->

<!-- Counters end -->

<!-- Our team start -->

<!-- Our team end -->

<!-- Blog start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Vedio Upload Section</h1>
            <p>Upload your vedios here..</p>
        </div>
        <div class="row">
            <div class="submit-address dashboard-list">
                <form method="post" action="" enctype='multipart/form-data'>
      <input id="myDropZone" class="dropzone dropzone-design" type='file' name='file' />
      <input class="btn btn-theme btn-md" type='submit' value='Upload' name='but_upload'>
    </form>
        </div>
            </div>
        </div>
    </div>
<!-- Blog end -->

<!-- Intro info start -->

<!-- Intro section end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="img/logos/logo.png" alt="logo" class="f-logo">
                    <div class="text">
                        <p>sinhalalanka.com @ Sri Lanka Entertainment Web Service. free sinhala music Audio , Video, images , Buddhist Program</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <div class="f-border"></div>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>134/2 ගාලු පාර කෙලින් වීදිය කොළබ 09
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:sales@hotelempire.com">sinhalalanka@gmail.com</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-417-634-7071">+94 775 896 157</a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i>+094 112 729 729
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <div class="f-border"></div>
                    <ul class="links">
                        <li>
                            <a href="#">Home</a>
                        </li>
                         <li>
                            <a href="about.html">Free SMS</a>
                        </li>
                        <li>
                            <a href="services.html">Free MMS</a>
                        </li>
                        <li>
                            <a href="contact.html">Sri Lanka Radio</a>
                        </li>
                        <li>
                            <a href="dashboard.html">Sri Lanka Tv</a>
                        </li>
                        <li>
                            <a href="properties-details.html">Free email</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Calender</h4>
                    <div class="f-border"></div>
                    <div class="Subscribe-box">
                        
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
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://storage.googleapis.com/themevessel-products/neer/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/neer/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:02:03 GMT -->
</html>