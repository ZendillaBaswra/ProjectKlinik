<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kontak me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	
	<header>
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#">
			  <img src="images/logo.JPEG" width="300px" height="" alt="" alt="">
			</a>
			<br>
			<br>
			<h1 class="display-2" style="text-align:Center; margin-right:250px;">SELAMAT DATANG DI KLINIK MITRA HUSADA</h1>
		  </nav>
	</header> <!-- End of /Header -->

	
	
	


	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
					<li  ><a href="index.html">PROFILE</a></li>
		        	<li><a href="info.html">INFO</a></li>
					<li class="active"><a href="kontak.html">KONTAK</a></li>
					<li><a href="antrian/view/index.php">ANTRIAN</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->

				<div class="leave-comment">
					<h5>HUBUNGI KAMI</h5>
                    <div class="alert alert-success alert-dismissible" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Berhasil</strong> Pesan anda telah dikirim
      </div>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputname" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputname" placeholder="Masukkan nama" class="nam">
							</div>
						  </div>	<!-- End of /.form-group -->
						  <div class="form-group">
							<label for="inputEmail" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
							</div>
						  </div>	<!-- End of /.form-group -->
						  <div class="form-group">
							<label for="inputwebsite" class="col-sm-2 control-label">Subject</label>
							<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputwebsite" placeholder="Subject">
							</div>
						  </div>	<!-- End of /.form-group -->
						  <div class="form-group">
							<label for="inputmessage" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								  <textarea class="form-control" id="inputmessage"  rows="3"></textarea>
							</div>
						  </div>	<!-- End of /.form-group -->
							  
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								  
        <a id="myWish" href="javascript:;" class="btn btn-primary">Kirim Pesan </a>
							</div>
						  </div>	<!-- End of /.form-group -->
					</form>	<!-- End of /.form-horizontal -->
				</div>	<!-- End of /.leave comments -->
			</div>	<!-- End of /.col-md-9 -->
				
            <div class="container">
	<div class="row">
 <div class="col-md-12">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(-7.760369060663504, 112.19465905460791),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-7.760369060663504, 112.19465905460791)});infowindow = new google.maps.InfoWindow({content:"<b>Kediri Jawa timur</b><br/>Klinik Mitra husada<br/> " });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
</head>
<body>
<script>
    $(document).ready(function() {
      $("#success-alert").hide();
      $("#myWish").click(function showAlert() {
        $("#success-alert").fadeTo(1000, 500).slideUp(500, function() {
          $("#success-alert").slideUp(500);
        });
      });
    });
  </script>