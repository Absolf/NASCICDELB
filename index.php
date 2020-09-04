<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
	
?>

<!DOCTYPE html>
<html lang="en">

<head>


	<link rel="icon" href="data/Icon.png" type="image/png" sizes="32x32">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $lang['title'];  ?></title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	
  
  

</head>

<body>
<style>
body {
  background: url('data/imagem-fundo.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>

  

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
	    
		<style>	  
		.tocenter {
			margin:0 auto;
			display: inline;
			}
		</style>
		<br>
		<div class="text-align" style="text-align: center;  ">
			<img class="img-responsive" style="margin: auto; width:90px"  alt="" src="data/logo-digital.png">
		</div>
		<br><br><br><br><br><br><br><br>
		<style>	  
		.tocenter {
			margin:0 auto;
			display: inline;
			}
		</style>
		<div class="text-align" style="text-align: center;  ">
			<img class="img-responsive" style="margin: auto; width:150px;"  alt="" src="data/logo-olfa.png">
		</div>
		
		<script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                window.location = "app.php";
            }, 5000);
        });
    </script>

   
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
