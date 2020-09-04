<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
	
	
	
	//AUX
	

	$lat = $_REQUEST['lat'];
	$long = $_REQUEST['long'];
	



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
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
		
   

</head>

<body>
<style>
body {background-color: #DCDCDC;}
</style>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  
  <a href="location.php">
  <form method="POST" action="location.php">
	<input type="hidden" value="<?php echo $lat = $_REQUEST['lat']; ?>"  id="lat" name="lat" >
	<input type="hidden" value="<?php echo $long = $_REQUEST['long']; ?>"  id="long" name="long" > 
	<input type="hidden" value="<?php echo $test_id = $_SESSION['AUX_test_id']; ?>"  id="test_id" name="test_id" >
	<button type="submit"> 
	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.104 2.396a.5.5 0 0 1 0 .708L3.457 5.75l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M2.75 5.75a.5.5 0 0 1 .5-.5h6.5a2.5 2.5 0 0 1 2.5 2.5v5.5a.5.5 0 0 1-1 0v-5.5a1.5 1.5 0 0 0-1.5-1.5h-6.5a.5.5 0 0 1-.5-.5z"/>
	</svg>
	</button>
</form>
  </a>
  
  
  
  
    <div class="container">
      <!-- <a class="navbar-brand" href="#">Start Bootstrap</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
   
        </ul>
		<!-- Select Language-->
		<form name="language" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<select onchange = "document.language.submit()" name="lang">
	
				<option selected="selected"><?php echo $lang['select-language']; ?></option>
					<option value="en"><?php echo $lang['en']; ?></option>
					<option value="pt"><?php echo $lang['pt']; ?></option>
     
			</select>
		</form>
		
      </div>
    </div>
  </nav>
  <!-- Progress Bar (100%/35pages = 2.8) -->
	<div class="w3-container">
		<div class="w3-border">
			<div class="w3-yellow" style="height:24px;width:11.4%"></div>
		</div>
	</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1><b><?php echo $lang['personal_info_form_title']."<br />"; ?></b></h1>
        <br><br><br>
		<p>IMAGE</p>
        <ul class="list-unstyled">
          <h2><b><?php echo $lang['personal_info_form_basic_information']."<br />"; ?></b></h2>
		  <li> <?php echo $lang['personal_info_form_1']."<br />"; ?>  </li>
        </ul>
		<br>
		
		<form action="risk_factors.php" method="POST">	
		
			<div class="input-group mb-3">
				<input type="number" min="1900" id="basic_info_id" name="basic_info_id"  class="form-control"  placeholder="<?php echo $lang['personal_info_form_basic_information_place_holder']; ?>" aria-label="Username" aria-describedby="basic-addon1" required>	
			</div> 
			
			<hr>
		
			
		<div class="checkbox">
			<label><input type="radio" class="tckt-tab" name="sex" id="watch-me" value="M"><?php echo $lang['personal_info_form_radio_buttom_1']; ?></label> <!--MALE-->
		</div>
		<div class="checkbox">
			<label><input type="radio"  class="tckt-tab" name="sex" id="watch-me" value="F"><?php echo $lang['personal_info_form_radio_buttom_2']; ?></label> <!--FEMALE-->
		</div>
		<div class="checkbox">
			<label><input type="radio"  class="tckt-tab" name="sex" id="watch-me" value="O"><?php echo $lang['personal_info_form_radio_buttom_3']; ?></label> <!--OTHERS-->
		</div>
		
		<!-- testing -->
		<input type="hidden" value="<?php echo $lat; ?>"  id="lat" name="lat" >	
		<input type="hidden" value="<?php echo $long; ?>"  id="long" name="long" >	
		
			<div id="show-me"><button type="submit" class="btn btn-warning" id="submit"  ><?php echo $lang['next']; ?></button></div>
			
			
		</form>
		
	<script>
			$(document).ready(function() {
		   $('input[type="radio"]').click(function() {
			   if($(this).attr('id') == 'watch-me') {
					$('#show-me').show();           
			   }
			   else {
					$('#show-me').hide();   
			   }
		   });
		});
	</script>
	
	<style>
	#show-me {
	display:none;
	}
	</style>
	
	
	
		
		
		  
		
		
		
		<br><br>
		<p>validações/DEBUG</p>
		Test ID <?php echo $_SESSION['AUX_test_id']; ?><br>
		Lat <?php echo $lat; ?><br>
		long <?php echo $long; ?><br>
		
   
      </div>
	  
    </div>
	
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
