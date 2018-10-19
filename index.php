<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Flatty - Bootstrap App Landing Page Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
  <!-- Carrousel -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  </script>

  <!-- =======================================================
    Template Name: Flatty
    Template URL: https://templatemag.com/flatty-bootstrap-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#"><b>Toulouse Blagnac</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <img src="img/english.png" width="30" alt="">
		  <img src="img/france.png" width="30" alt="">
		  <img src="img/germany.png" width="30" alt="">
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Insert numero vol -->
  <div id="headerwrap">
    <div class="container">
      <div class="row mt centered">
        <div class="col-lg-6">
          <h1>Numero de vol :</h1>
          <form class="form-inline" role="form">
		    <button type="submit" class="btn btn-warning btn-lg">Valider</button>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Numero de vol">
            </div>
          </form>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->
  
  <!-- Carroussel -->
  <div id="headerwrap">
    <div class="container">
      <div class="row mt centered">
	  
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		  <li data-target="#myCarousel" data-slide-to="3"></li>
		  <li data-target="#myCarousel" data-slide-to="4"></li>
		  <li data-target="#myCarousel" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="margin:auto">
		  <div class="item active">
			<img src="img/map.png" alt="Los Angeles" style="width:30%;margin:0 34%;">
		  </div>

		  <div class="item">
			<img src="img/dinner.png" alt="Chicago" style="width:30%;margin:0 34%;">
		  </div>
		
		  <div class="item">
			<img src="img/bus.png" alt="New york" style="width:30%;margin:0 34%;">
		  </div>
		  
		  <div class="item">
			<img src="img/shopping-bag.png" alt="New york" style="width:30%;margin:0 34%;">
		  </div>
		  
		  <div class="item">
			<img src="img/carrent.png" alt="New york" style="width:30%;margin:0 34%;">
		  </div>
		  
		  <div class="item">
			<img src="img/parking.png" alt="New york" style="width:30%;margin:0 34%;">
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->

  <div id="headerwrap">
    <div class="container">
      <div class="row mt centered">
        <div class="col-lg-6">
          <div id="map" style="width:100%;height:600px"></div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Groupe FIVE</strong>. All Rights Reserved
      </p>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/airportBlagnac.js"></script>
  <script src="js/map.js"></script>

</body>
</html>
