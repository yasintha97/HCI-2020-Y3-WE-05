
<?php
require('pusher_config.php');
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

	<style>
	
	</style>

	<title>Sinhala Lanka - Sahadam Sisila</title>
	<meta charset="UTF-8">
	<meta name="description" content="Music">
	<meta name="keywords" content="Music, station, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>
	
	 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


	

<script src="/path/to/bootstrap.min.js"></script>
<script src="js/carousel.js"></script>
  </head>

	<!-- Google Font -->   
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style-m.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style-music.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Hero section -->
	<!--?php include('HF/header.php'); ?-->
	
		<!-- Header section -->
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
				<li ><a href="../music/music.php">MP3</a></li>
				<li><a href="../pictures/index-2.html">PICTURES</a></li>
				<li class="active"><a href="sadaham.php">Sadaham Sisila</a></li>
				<li><a href="../GreetingCards/index-4.html">GREETINGS CARDS</a></li>
				
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
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="locations d-none d-sm-block">
			<!--
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-4 location">
						<img src="img/logo-small.png" alt="">
						<p>Berlin</p>
					</div>
					<div class="col-md-2 col-sm-4 location">
						<img src="img/logo-small.png" alt="">
						<p>Bucharest</p>
					</div>
					<div class="col-md-2 col-sm-4 location">
						<img src="img/logo-small.png" alt="">
						<p>London</p>
					</div>
					<div class="col-md-2 col-sm-4 location">
						<img src="img/logo-small.png" alt="">
						<p>Bucharest</p>
					</div>
					<div class="col-md-2 col-sm-4 location">
						<img src="img/logo-small.png" alt="">
						<p>Tel Aviv</p>
					</div>
					<div class="col-md-2 col-sm-4 location">
						<img src="img/logo-small.png" alt="">
						<p>Moscow</p>
					</div>
				</div>

			</div>
			-->
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
				<span>සඳහම් සිසිල</span>
					<h2>පිරිත්</h2>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
				<span>සඳහම් සිසිල</span>
					<h2>කවි බණ</h2>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
				<span>සඳහම් සිසිල</span>
					<h2>බණ කතා</h2>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
				<span>සඳහම් සිසිල</span>
					<h2>සෙත් කවි</h2>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<!-- Sub Header section -->
	<header class="header-section">
		<div class="header-warp">
			<!-- Site Logo -->
			<a href="home.html" class="site-logo">
				<img src="img1/logo.png" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
				
				<li class="active"><a href="sadaham.php">Sadaham Sisila</a></li>
				<li><a href="#">Pirith</a></li>
				<li><a href="#">Bana Katha</a></li>
				<li><a href="#">Seth Kavi</a></li>
				<li><a href="#">Kavi Bana</a></li>
				
				<li><a href="upload.php">Upload</a></li>
			</ul>
			<!-- Social Links -->
			<!--
			<div class="header-social-links">
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-soundcloud"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href=""><i class="fa fa-google-plus"></i></a>
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-youtube-play"></i></a>
				-->
			</div>
		</div>
	</header>
	<br>
	<br>
	<!--Sub  Header section end -->
	
	<div class="container">
			<div class="dj-intro">
				<p>Sadaham Sisila" is a religious event brought you by Sinhalalanka.com web site for all the buddhists and non buddhists in worldwide to familiar with Buddhism.People have no chance and no time to relax by giving up sad and sympathy in their life,because they're very busy in this complicated society.Because of that Sinhalalanka.com has been decided to begin a new religious event called "SADAHAM SISILA".By this "Sadaham Sisila" you have the chance to read and listen to " Pirith, Kavi bana, Bana katha, seth kavi and Religious articles.So, if you need to listen bana or read the articles about Buddhism, come and get together with "Sadaham Sisila" </p>
			</div>
		</div>

	

 
  <!-- Trigger the modal with a button -->
  

  <!-- Modal 1 -->





                                                


	<!-- promotion section -->
	<!--
	<section class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="promo-box set-bg" data-setbg="img/promo/1.jpg">
						<h2>Our DJ’s</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="promo-box set-bg" data-setbg="img/promo/2.jpg">
						<h2>Live Streans</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="promo-box set-bg" data-setbg="img/promo/3.jpg">
						<h2>Events</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- promotion section end -->


	<!-- Latest Podcast section -->
	<section class="latest-podcast-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Latest</h2>	
			</div>
			<div class="new-project-player">
				<div class="row">
					<div class="col-lg-4 albam-preview">
						<img src="img/albam.jpg" alt="">
					</div>
					<div class="col-lg-8">
						<div class="track-name">Asirimath Buddhathwaya - අසිරිමත් බුද්ධත්වය </div>
						<div class="audio-wave">
							<div id="audiowave"></div>
						</div>
						<div id="cliptime"></div>
						<button id="play" class="site-btn" onclick="wavesurfer.playPause();">Play/Pause</button>
						<a href="music-file/music-clip.mp3" download>
						<button id="download" class="site-btn" >DOWNLOAD</button>
						
				</div>
			</div>
		</div>
	</section>
	<!-- Latest Podcast section end -->


	<!-- Charts section -->

	<!--
	<section class="charts-section">
		<div class="container">
			<div class="section-title text-center">
				<h2>Charts</h2>	
			</div>
		</div>
		<div class="charts-warp set-bg" data-setbg="img/chart-bg.jpg">
			<div class="container">
				<!-- Categories  section -->

	<section class="categories-section">
		<div class="container">
			<div class="section-title text-center">
				<h2>Play Lists</h2>	
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="categorie">
						<img src="img/categories/4.png" alt="">
						<h4>සෙත් පිරිත්</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="categorie">
						<img src="img/categories/3.jpg" alt="">
						<h4>ජාතක කථා</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="categorie">
						<img src="img/categories/1.jpg" alt="">
						<h4>භාවනා</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="categorie">
						<img src="img/categories/2.jpg" alt="">
						<h4>බුදු ගුණ කවි</h4>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Categories section end -->
				<!-- put comments section here-->

			</div>
		</div>
	</section>
-->
	<!-- Charts section end -->
	  <div class="mySlides">
    <div class="numbertext"></div>
      <imgq src="mage/img-1.jpg" style="width:100%">
  </div>



  <!-- Next and previous buttons -->
  <!--
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
-->
  <!-- Image text -->

  <div class="caption-container">
    <p id="caption"></p>
  </div>
<!--
<div id="vertical"> 
  <div class="wrapper">
     <h1>Divcover Your World </br>
	 &nbsp;&nbsp; | Be Hurry </h>
  </div>      
</div>
-->
<div class="section-title text-center">
				<h2>Popular</h2>	
			</div>

  <!-- Thumbnail images -->

  <div class="row1">
  	
    <div class="column">
      <imgw class="demo cursor" src="image/img1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Sri Lanka Blue Magpie">
    </div>
    <div class="column">
      <imgw class="demo cursor" src="image/img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Auvkana Budhha Statu">
    </div>
    <div class="column">
      <imgw class="demo cursor" src="image/img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Sigiriya Rock">
    </div>
    <div class="column">
      <imgw class="demo cursor" src="image/img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Mask">
    </div>
    <div class="column">
      <imgw class="demo cursor" src="image/img5.jpg" style="width:100%" onclick="currentSlide(5)" alt="The sigiri Ladies">
    </div>
    <div class="column">
      <imgw class="demo cursor" src="image/img6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Sri Lankan Foods">
    </div>

	</div>

	<br/><br/>


    <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
<img src="image/GaligamuweThero.jpg" alt=""></div>
<div class="content" >
          <div class="title">
<h4 style="color: black " align="center">Ven Galigamuwe Gnanadeepa Thero </h4></div>
<div class="sub-title">
</div>

</div>
</div>






<div class="card">
        <div class="img1">
        	<a href="Baddiyathero.php">
<img src="image/baddiyatero.jpg" alt=""></div>

<div class="content">
          <div class="title">
<h4 style="color: black " align="center">Ven Mavaralle Baddiya Tero</h4></div>
<div class="sub-title"></a>
 </div>


</div>


</div>
<div class="card">
        <div class="img">
<img src="image/Nawagththegama1.png" alt=""></div>
<div class="content">
          <div class="title">
<h4 style="color: black " align="center">Ven Nawagththegama Siri Sugatha Thero </h4></div>
<div class="sub-title">
</div>

</div>
</div>
</div>
<br>
<br>
<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

<section id="comments" class="body">

		
	  <div id=comall>
	  <header>
			<h2 style="color: black">Comments</h2>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      
      <?php
        foreach ($comments as &$comment) {
          ?>

          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info" >
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p style="color: black" ><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		</div>
		<div id="respond">

      <h3 style="color: black">Leave a Comment</h3>

      <form action="post_comment.php" method="post" id="commentform">

        <label style="color: black" for="comment_author" class="required">Your name</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required"></br>
        
        <label style="color: black" for="email" class="required">Your email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required"></br>

        <label style="color: black" for="comment" class="required">Your message</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea></br>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input style="color: black" name="submit" type="submit" value="Submit comment" />
        
      </form>
      
    </div>
			
	</section>


			<!-- Social Links -->
			<!--
			<div class="header-social-links">
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-soundcloud"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href=""><i class="fa fa-google-plus"></i></a>
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-youtube-play"></i></a>
				-->
			</div>
		</div>
	</header>
	<!-- Header section end -->
	</br>
 
  <!-- Full-width images with number text -->
<!--
  <div class="mySlides1">
    <div class="numbertext">1 / 6</div>
      <img src="mage/img-1.jpg" style="width:100%">
  </div>

  <div class="mySlides2">
    <div class="numbertext">2 / 6</div>
      <img src="mage/img-2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="mage/img-3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="mage/img-2.jpg" style="width:100%">
  </div>


  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="mage/img-2.jpg" style="width:100%">
  </div>
-->



	<!-- Footer Top section -->
	
	<!-- Footer section -->
	
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
	
	<script src="js/wavesurfer.min.js"></script>
	<script src="js/audio.js"></script>

	<script src="js/app.js"></script>

<script>
var APP_KEY = '<?php echo(APP_KEY); ?>';
</script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://js.pusher.com/1.11/pusher.min.js"></script>

<script>
function myFunction1() {
  var x = document.createElement("AUDIO");

  if (x.canPlayType("audio/mpeg")) {
    x.setAttribute("src","horse.mp3");
  } else {
    x.setAttribute("src","horse.ogg");
  }

  x.setAttribute("controls", "controls");
  document.body.appendChild(x);
}
</script>



    </body>
</html>
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


	<!-- Footer section -->

	<!-- Footer section end -->
	<!--?php include('HF/footer.php'); ?>