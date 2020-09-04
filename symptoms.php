<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
	
	
	
	//POST + AUX
	$lat = $_REQUEST['lat'];
	$_SESSION['AUX_lat'] = $lat;
	
	$long = $_REQUEST['long'];
	$_SESSION['AUX_long'] = $long;
	
	$test_id = isset($_POST['test_id']) ? $_POST['test_id'] : "";
	
	$basic_info_id = isset($_POST['basic_info_id']) ? $_POST['basic_info_id'] : "";
	$_SESSION['AUX_basic_info_id'] = $basic_info_id;
	
	$sex = isset($_POST['sex']) ? $_POST['sex'] : "";
	$_SESSION['AUX_sex'] = $sex;
	
	
	$risk_factors = isset($_POST['risk_factors'])? $_POST['risk_factors']:0;
	$_SESSION['AUX_risk_factors'] = $risk_factors;
	
	$research_factor = isset($_POST['research_factor'])? $_POST['research_factor']:0;
	$_SESSION['AUX_research_factor'] = $research_factor;
	
	
	$heart_rate = isset($_POST['heart_rate'])? $_POST['heart_rate']:0;
	$_SESSION['AUX_heart_rate'] = $heart_rate;
	
	$spo2 = isset($_POST['spo2'])? $_POST['spo2']:0;
	$_SESSION['AUX_spo2'] = $spo2;
	
	
	
	//Values from Questions
	$symptoms_question_n1 = 1;
	$symptoms_question_n2 = 2;
	$symptoms_question_n3 = 3;
	$symptoms_question_n4 = 4;
	$symptoms_question_n5 = 5;
	$symptoms_question_n6 = 6;
	
	
	
	



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
  <a href="research_factors_2.php">
  <form method="POST" action="research_factors_2.php">
    <input type="hidden" value="<?php echo $basic_info_id = $_REQUEST['basic_info_id']; ?>"  id="basic_info_id" name="basic_info_id" >
	<input type="hidden" value="<?php echo $lat = $_REQUEST['lat']; ?>"  id="lat" name="lat" >
	<input type="hidden" value="<?php echo $long = $_REQUEST['long']; ?>"  id="long" name="long" >
	<input type="hidden" value="<?php echo $sex = $_REQUEST['sex']; ?>"  id="sex" name="sex" > 
	<input type="hidden" value="<?php echo $risk_factors = $_REQUEST['risk_factors']; ?>"  id="risk_factors" name="risk_factors" >
	<input type="hidden" value="<?php echo $research_factor = $_REQUEST['research_factor']; ?>"  id="research_factor" name="research_factor" >
	<input type="hidden" value="<?php echo $heart_rate = $_REQUEST['heart_rate']; ?>"  id="heart_rate" name="heart_rate" >
	<input type="hidden" value="<?php echo $spo2 = $_REQUEST['spo2']; ?>"  id="spo2" name="spo2" >
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
			<div class="w3-yellow" style="height:24px;width:22.8%"></div>
		</div>
	</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1><b><?php echo $lang['symsptoms_title']."<br />"; ?></b></h1>
        <br><br><br>
		<p>IMAGE</p>
        <ul class="list-unstyled">
          <h2><b><?php echo $lang['symptoms_question_1']."<br />"; ?> <?php echo $lang['symptoms_question_2']."<br />"; ?> <?php echo $lang['symptoms_question_3']; ?> </b></h2>
		  
        </ul>
		<br>
		<form action="symptoms_2.php" method="POST">	
			
			
		<div class="checkbox">
			<label><input type="radio" name="symptoms" value="<?php echo $symptoms_question_n1; ?>"><?php echo $lang['symptoms_question_number_1']; ?></label>
		</div>
		<div class="checkbox">
			<label><input type="radio" name="symptoms" value="<?php echo $symptoms_question_n2; ?>"><?php echo $lang['symptoms_question_number_2']; ?></label>
		</div>
		<div class="checkbox">
			<label><input type="radio" name="symptoms" value="<?php echo $symptoms_question_n3; ?>"><?php echo $lang['symptoms_question_number_3']; ?></label>
		</div>
		<div class="checkbox">
			<label><input type="radio" name="symptoms" value="<?php echo $symptoms_question_n4; ?>"><?php echo $lang['symptoms_question_number_4']; ?></label>
		</div>
		<div class="checkbox">
			<label><input type="radio" name="symptoms" value="<?php echo $symptoms_question_n5; ?>"><?php echo $lang['symptoms_question_number_5']; ?></label>
		</div>
		<div class="checkbox">
			<label><input type="radio" name="symptoms" value="<?php echo $symptoms_question_n6; ?>"><?php echo $lang['symptoms_question_number_6']; ?></label>
		</div>
		
		<!-- testing -->
		<input type="hidden" value="<?php echo $lat = $_REQUEST['lat']; ?>"  id="lat" name="lat" >	
		<input type="hidden" value="<?php echo $long = $_REQUEST['long']; ?>"  id="long" name="long" >
		<input type="hidden" value="<?php echo $basic_info_id = $_REQUEST['basic_info_id']; ?>"  id="basic_info_id" name="basic_info_id" >
		<input type="hidden" value="<?php echo $sex = $_REQUEST['sex']; ?>"  id="sex" name="sex" > 
		<input type="hidden" value="<?php echo $risk_factors = $_REQUEST['risk_factors']; ?>"  id="risk_factors" name="risk_factors" >
		<input type="hidden" value="<?php echo $research_factor = $_REQUEST['research_factor']; ?>"  id="research_factor" name="research_factor" >
		<input type="hidden" value="<?php echo $heart_rate = $_REQUEST['heart_rate']; ?>"  id="heart_rate" name="heart_rate" >
		<input type="hidden" value="<?php echo $spo2 = $_REQUEST['spo2']; ?>"  id="spo2" name="spo2" >
			
			<div id="text" style="display:none">
			<button type="submit" class="btn btn-warning" id="submit"  ><?php echo $lang['next']; ?></button>
			</div>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>	
		<script>
			$(document).ready(function() {
			var boxes = $(' input[type=radio]').on('change', function() {
			var flag = boxes.filter(':checked').length > 0;
			$('#text').toggle(flag);
			});
			});
		</script>	
		
		</form>
		
		
		  
		
		
		
		<br><br>
		<p>validações/DEBUG</p>
		Test ID = <?php echo $_SESSION['AUX_test_id']; ?><br>
		Lat = <?php echo $lat = $_REQUEST['lat']; ?><br>
		long = <?php echo $long = $_REQUEST['long']; ?><br>
		ano = <?php echo $basic_info_id = $_SESSION['AUX_basic_info_id']; ?><br>
		sex = <?php echo $sex = $_SESSION['AUX_sex']; ?><br>
		risk_Factor = <?php echo $risk_factors= (!empty($_POST['risk_factors'])) ? $_POST['risk_factors'] : 0; ?><br>
		research_factor = <?php echo $research_factor= (!empty($_POST['research_factor'])) ? $_POST['research_factor'] : 0; ?><br>
		heart_rate = <?php echo $heart_rate = isset($_POST['heart_rate']) ? $_POST['heart_rate'] : ""; ?><br>
		spo2 = <?php echo $spo2 = isset($_POST['spo2']) ? $_POST['spo2'] : ""; ?><br>
		
		
   
      </div>
	  
    </div>
	
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
