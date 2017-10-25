<!DOCTYPE html>
<?php  // This must be the FIRST line in a PHP webpage file
ob_start();		// Enable output buffering
?>

<?php	// Specify no-caching header controls for page
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");   			// Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");	// always modified
header("Cache-Control: no-store, no-cache, must-revalidate");	// HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");   // HTTP/1.0
?>

<html lang="en">
<head>
  <title>Dibs | The Free Crap Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
  <script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
	
    <style>
        body { margin:0; padding:0; }
        
		#footer {width:100%; height:100px;}
		#main {width: 100%; height: 100%; padding-right: 3%; padding-left: 3%;}
	
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Dibs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="DibsHome.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Search <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="TestDibs.php">My Area</a></li>
            <li><a href="SearchArea.php">Search Area</a></li>
          </ul>
        </li>
        <li><a href="#">Post</a></li>
		<li><a href="TestMapBox.php"style="color:white">Test Page</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container" id='main'>
<div class="jumbotron">
  <center><h1>Welcome To Dibs</h1></center>      
  <center><p>Dibs is the most popular site on the web for off loading your stuff for no profit whatsoever!</p></center>
</div>

<div class="container">
  <h4>If you would like to see what is for free in your area, search My Area.</h3>      
  <h4>If you would like to see what is for free in another area, create a custom search.</h3>      
</div>

</div>
<div  class="container" id='footer'></div>
</body>
</html>