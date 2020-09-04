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
	
	
	$risk_factors= (!empty($_POST['risk_factors'])) ? $_POST['risk_factors'] : 0;
	$_SESSION['AUX_risk_factors'] = $risk_factors;
	
	$research_factor= (!empty($_POST['research_factor'])) ? $_POST['research_factor'] : 0;
	$_SESSION['AUX_research_factor'] = $research_factor;
	
	$heart_rate = isset($_POST['heart_rate']) ? $_POST['heart_rate'] : "";
	$_SESSION['AUX_heart_rate'] = $heart_rate;
	
	$spo2 = isset($_POST['spo2']) ? $_POST['spo2'] : "";
	$_SESSION['AUX_spo2'] = $spo2;
	
	$symptoms = isset($_POST['symptoms']) ? $_POST['symptoms'] : "";
	$_SESSION['AUX_symptoms'] = $symptoms;
	
	$symptoms_2= (!empty($_POST['symptoms_2'])) ? $_POST['symptoms_2'] : 0;
	$_SESSION['AUX_symptoms_2'] = $symptoms_2;
	
	$symptoms_3= (!empty($_POST['symptoms_3'])) ? $_POST['symptoms_3'] : 0;
	$_SESSION['AUX_symptoms_3'] = $symptoms_3;
	
	$symptoms_4_muscle_pain = isset($_POST['symptoms_4_muscle_pain']) ? $_POST['symptoms_4_muscle_pain'] : "";
	$_SESSION['AUX_symptoms_4_muscle_pain'] = $symptoms_4_muscle_pain;
	
	$symptoms_5_chils = isset($_POST['symptoms_5_chils']) ? $_POST['symptoms_5_chils'] : "";
	$_SESSION['AUX_symptoms_5_chils'] = $symptoms_5_chils;
	
	$symptoms_6_headache = isset($_POST['symptoms_6_headache']) ? $_POST['symptoms_6_headache'] : "";
	$_SESSION['AUX_symptoms_6_headache'] = $symptoms_6_headache;
	
	$symptoms_7_diarrhea = isset($_POST['symptoms_7_diarrhea']) ? $_POST['symptoms_7_diarrhea'] : "";
	$_SESSION['AUX_symptoms_7_diarrhea'] = $symptoms_7_diarrhea;
	
	$symptoms_8_nauseous = isset($_POST['symptoms_8_nauseous']) ? $_POST['symptoms_8_nauseous'] : "";
	$_SESSION['AUX_symptoms_8_nauseous'] = $symptoms_8_nauseous;
	
	$symptoms_9_sore_throat = isset($_POST['symptoms_9_sore_throat']) ? $_POST['symptoms_9_sore_throat'] : "";
	$_SESSION['AUX_symptoms_9_sore_throat'] = $symptoms_9_sore_throat;
	
	$symptoms_10_runny_nose = isset($_POST['symptoms_10_runny_nose']) ? $_POST['symptoms_10_runny_nose'] : "";
	$_SESSION['AUX_symptoms_10_runny_nose'] = $symptoms_10_runny_nose;
	
	$symptoms_11_fatigued = isset($_POST['symptoms_11_fatigued']) ? $_POST['symptoms_11_fatigued'] : "";
	$_SESSION['AUX_symptoms_11_fatigued'] = $symptoms_11_fatigued;
	
	$symptoms_12_feel_dizzy = isset($_POST['symptoms_12_feel_dizzy']) ? $_POST['symptoms_12_feel_dizzy'] : "";
	$_SESSION['AUX_symptoms_12_feel_dizzy'] = $symptoms_12_feel_dizzy;
	
	$symptoms_13_lack_of_smell = isset($_POST['symptoms_13_lack_of_smell']) ? $_POST['symptoms_13_lack_of_smell'] : "";
	$_SESSION['AUX_symptoms_13_lack_of_smell'] = $symptoms_13_lack_of_smell;
	
	$symptoms_14_lack_of_taste = isset($_POST['symptoms_14_lack_of_taste']) ? $_POST['symptoms_14_lack_of_taste'] : "";
	$_SESSION['AUX_symptoms_14_lack_of_taste'] = $symptoms_14_lack_of_taste;
	
	$symptoms_15_lack_of_appetite = isset($_POST['symptoms_15_lack_of_appetite']) ? $_POST['symptoms_15_lack_of_appetite'] : "";
	$_SESSION['AUX_symptoms_15_lack_of_appetite'] = $symptoms_15_lack_of_appetite;
	
	$symptoms_16_eyes_hurt = isset($_POST['symptoms_16_eyes_hurt']) ? $_POST['symptoms_16_eyes_hurt'] : "";
	$_SESSION['AUX_symptoms_16_eyes_hurt'] = $symptoms_16_eyes_hurt;
	
	$symptoms_17_inflammation_eyes = isset($_POST['symptoms_17_inflammation_eyes']) ? $_POST['symptoms_17_inflammation_eyes'] : "";
	$_SESSION['AUX_symptoms_17_inflammation_eyes'] = $symptoms_17_inflammation_eyes;
	
	$symptoms_18_vision_blurred = isset($_POST['symptoms_18_vision_blurred']) ? $_POST['symptoms_18_vision_blurred'] : "";
	$_SESSION['AUX_symptoms_18_vision_blurred'] = $symptoms_18_vision_blurred;
	
	$covid_19_region= (!empty($_POST['covid_19_region'])) ? $_POST['covid_19_region'] : 0;
	$_SESSION['AUX_covid_19_region'] = $covid_19_region;
	
	$covid_19_exposure = isset($_POST['covid_19_exposure']) ? $_POST['covid_19_exposure'] : "";
	$_SESSION['AUX_covid_19_exposure'] = $covid_19_exposure;
	
	$smell_test= (!empty($_POST['smell_test'])) ? $_POST['smell_test'] : 0;
	$_SESSION['AUX_smell_test'] = $smell_test;
	
	
	
	
	
	
	
	
	

	

	
	



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
  
	<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   

</head>

<body>
<style>
body {background-color: #DCDCDC;}
</style>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <a href="smell_test.php">
  <form method="POST" action="smell_test.php">
    <input type="hidden" value="<?php echo $basic_info_id = $_REQUEST['basic_info_id']; ?>"  id="basic_info_id" name="basic_info_id" >
	<input type="hidden" value="<?php echo $lat = $_REQUEST['lat']; ?>"  id="lat" name="lat" >
	<input type="hidden" value="<?php echo $long = $_REQUEST['long']; ?>"  id="long" name="long" >
	<input type="hidden" value="<?php echo $sex = $_REQUEST['sex']; ?>"  id="sex" name="sex" > 
	<input type="hidden" value="<?php echo $risk_factors = $_REQUEST['risk_factors']; ?>"  id="risk_factors" name="risk_factors" >
	<input type="hidden" value="<?php echo $research_factor = $_REQUEST['research_factor']; ?>"  id="research_factor" name="research_factor" >
	<input type="hidden" value="<?php echo $heart_rate = $_REQUEST['heart_rate']; ?>"  id="heart_rate" name="heart_rate" >
	<input type="hidden" value="<?php echo $spo2 = $_REQUEST['spo2']; ?>"  id="spo2" name="spo2" >
	<input type="hidden" value="<?php echo $symptoms = $_REQUEST['symptoms']; ?>"  id="symptoms" name="symptoms" >
	<input type="hidden" value="<?php echo $symptoms_2 = $_REQUEST['symptoms_2']; ?>"  id="symptoms_2" name="symptoms_2" >
	<input type="hidden" value="<?php echo $symptoms_3 = $_REQUEST['symptoms_3']; ?>"  id="symptoms_3" name="symptoms_3" >
	<input type="hidden" value="<?php echo $symptoms_4_muscle_pain = $_REQUEST['symptoms_4_muscle_pain']; ?>"  id="symptoms_4_muscle_pain" name="symptoms_4_muscle_pain" >
	<input type="hidden" value="<?php echo $symptoms_5_chils = $_REQUEST['symptoms_5_chils']; ?>"  id="symptoms_5_chils" name="symptoms_5_chils" >
	<input type="hidden" value="<?php echo $symptoms_6_headache = $_REQUEST['symptoms_6_headache']; ?>"  id="symptoms_6_headache" name="symptoms_6_headache" >
	<input type="hidden" value="<?php echo $symptoms_7_diarrhea = $_REQUEST['symptoms_7_diarrhea']; ?>"  id="symptoms_7_diarrhea" name="symptoms_7_diarrhea" >
	<input type="hidden" value="<?php echo $symptoms_8_nauseous = $_REQUEST['symptoms_8_nauseous']; ?>"  id="symptoms_8_nauseous" name="symptoms_8_nauseous" >
	<input type="hidden" value="<?php echo $symptoms_9_sore_throat = $_REQUEST['symptoms_9_sore_throat']; ?>"  id="symptoms_9_sore_throat" name="symptoms_9_sore_throat" >
	<input type="hidden" value="<?php echo $symptoms_10_runny_nose = $_REQUEST['symptoms_10_runny_nose']; ?>"  id="symptoms_10_runny_nose" name="symptoms_10_runny_nose" >
	<input type="hidden" value="<?php echo $symptoms_11_fatigued = $_REQUEST['symptoms_11_fatigued'];?>"  id="symptoms_11_fatigued" name="symptoms_11_fatigued" >
	<input type="hidden" value="<?php echo $symptoms_12_feel_dizzy = $_REQUEST['symptoms_12_feel_dizzy']; ?>"  id="symptoms_12_feel_dizzy" name="symptoms_12_feel_dizzy" >
	<input type="hidden" value="<?php echo $symptoms_13_lack_of_smell = $_REQUEST['symptoms_13_lack_of_smell']; ?>"  id="symptoms_13_lack_of_smell" name="symptoms_13_lack_of_smell" >
	<input type="hidden" value="<?php echo $symptoms_14_lack_of_taste = $_REQUEST['symptoms_14_lack_of_taste']; ?>"  id="symptoms_14_lack_of_taste" name="symptoms_14_lack_of_taste" >
	<input type="hidden" value="<?php echo $symptoms_15_lack_of_appetite = $_REQUEST['symptoms_15_lack_of_appetite']; ?>"  id="symptoms_15_lack_of_appetite" name="symptoms_15_lack_of_appetite" >
	<input type="hidden" value="<?php echo $symptoms_16_eyes_hurt = $_REQUEST['symptoms_16_eyes_hurt']; ?>"  id="symptoms_16_eyes_hurt" name="symptoms_16_eyes_hurt" >
	<input type="hidden" value="<?php echo $symptoms_17_inflammation_eyes = $_REQUEST['symptoms_17_inflammation_eyes']; ?>"  id="symptoms_17_inflammation_eyes" name="symptoms_17_inflammation_eyes" >
	<input type="hidden" value="<?php echo $symptoms_18_vision_blurred = $_REQUEST['symptoms_18_vision_blurred']; ?>"  id="symptoms_18_vision_blurred" name="symptoms_18_vision_blurred" >
	<input type="hidden" value="<?php echo $covid_19_region = $_REQUEST['covid_19_region']; ?>"  id="covid_19_region" name="covid_19_region" >
	<input type="hidden" value="<?php echo $covid_19_exposure = $_REQUEST['covid_19_exposure']; ?>"  id="covid_19_exposure" name="covid_19_exposure" >
	<input type="hidden" value="<?php echo $smell_test = $_REQUEST['smell_test']; ?>"  id="smell_test" name="smell_test" >
	
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
			<div class="w3-yellow" style="height:24px;width:82.65%"></div>
		</div>
	</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1><b><?php echo $lang['smell_assessment_test_01_title']."<br />"; ?></b></h1>
        <br><br><br>
		<p>IMAGE</p>
        <ul class="list-unstyled">
          <h2><b><?php echo $lang['smell_assessment_test_01_subtitle']."<br />"; ?></b></h2>
		  <br>
		  <h4><?php echo $lang['smell_assessment_test_01_question_1']."<br/>"; ?> <?php echo $lang['smell_assessment_test_01_question_2']; ?></h4>
        </ul>
		<br>
		<h4><?php echo $lang['smell_assessment_test_01_subtitle_answers']; ?></h4>
		<form action="smell_assessment_test_02.php" method="POST">	
		<div class="checkbox">
			<label><input type="radio" name="smell_assessment_test_01" value="<?php echo $lang['easly_smell']; ?>"><?php echo $lang['smell_assessment_test_01_question_Number_1']; ?></label>
		</div>
		<div class="checkbox">
			<label><input type="radio" name="smell_assessment_test_01" value="<?php echo $lang['faint_smell']; ?>"><?php echo $lang['smell_assessment_test_01_question_Number_2']; ?></label>
		</div>
		<div class="checkbox">
			<label><input type="radio" name="smell_assessment_test_01" value="<?php echo $lang['no_smell']; ?>"><?php echo $lang['smell_assessment_test_01_question_Number_3']; ?></label>
		</div>
		
		
		
			
		
		
		
		<br><br>
		
		
		
		<!-- testing -->
		<input type="hidden" value="<?php echo $lat = $_REQUEST['lat']; ?>"  id="lat" name="lat" >	
		<input type="hidden" value="<?php echo $long = $_REQUEST['long']; ?>"  id="long" name="long" >
		<input type="hidden" value="<?php echo $basic_info_id = $_REQUEST['basic_info_id']; ?>"  id="basic_info_id" name="basic_info_id" >
		<input type="hidden" value="<?php echo $sex = $_REQUEST['sex']; ?>"  id="sex" name="sex" > 
		<input type="hidden" value="<?php echo $risk_factors = $_REQUEST['risk_factors']; ?>"  id="risk_factors" name="risk_factors" >
		<input type="hidden" value="<?php echo $research_factor = $_REQUEST['research_factor']; ?>"  id="research_factor" name="research_factor" >
		<input type="hidden" value="<?php echo $heart_rate = $_REQUEST['heart_rate']; ?>"  id="heart_rate" name="heart_rate" >
		<input type="hidden" value="<?php echo $spo2 = $_REQUEST['spo2']; ?>"  id="spo2" name="spo2" >
		<input type="hidden" value="<?php echo $symptoms = $_REQUEST['symptoms']; ?>"  id="symptoms" name="symptoms" >
		<input type="hidden" value="<?php echo $symptoms_2 = $_REQUEST['symptoms_2']; ?>"  id="symptoms_2" name="symptoms_2" >
		<input type="hidden" value="<?php echo $symptoms_3 = $_REQUEST['symptoms_3']; ?>"  id="symptoms_3" name="symptoms_3" >
		<input type="hidden" value="<?php echo $symptoms_4_muscle_pain = $_REQUEST['symptoms_4_muscle_pain']; ?>"  id="symptoms_4_muscle_pain" name="symptoms_4_muscle_pain" >
		<input type="hidden" value="<?php echo $symptoms_5_chils = $_REQUEST['symptoms_5_chils']; ?>"  id="symptoms_5_chils" name="symptoms_5_chils" >
		<input type="hidden" value="<?php echo $symptoms_6_headache = $_REQUEST['symptoms_6_headache']; ?>"  id="symptoms_6_headache" name="symptoms_6_headache" >
		<input type="hidden" value="<?php echo $symptoms_7_diarrhea = $_REQUEST['symptoms_7_diarrhea']; ?>"  id="symptoms_7_diarrhea" name="symptoms_7_diarrhea" >
		<input type="hidden" value="<?php echo $symptoms_8_nauseous = $_REQUEST['symptoms_8_nauseous']; ?>"  id="symptoms_8_nauseous" name="symptoms_8_nauseous" >
		<input type="hidden" value="<?php echo $symptoms_9_sore_throat = $_REQUEST['symptoms_9_sore_throat']; ?>"  id="symptoms_9_sore_throat" name="symptoms_9_sore_throat" >
		<input type="hidden" value="<?php echo $symptoms_10_runny_nose = $_REQUEST['symptoms_10_runny_nose']; ?>"  id="symptoms_10_runny_nose" name="symptoms_10_runny_nose" >
		<input type="hidden" value="<?php echo $symptoms_11_fatigued = $_REQUEST['symptoms_11_fatigued'];?>"  id="symptoms_11_fatigued" name="symptoms_11_fatigued" >
		<input type="hidden" value="<?php echo $symptoms_12_feel_dizzy = $_REQUEST['symptoms_12_feel_dizzy']; ?>"  id="symptoms_12_feel_dizzy" name="symptoms_12_feel_dizzy" >
		<input type="hidden" value="<?php echo $symptoms_13_lack_of_smell = $_REQUEST['symptoms_13_lack_of_smell']; ?>"  id="symptoms_13_lack_of_smell" name="symptoms_13_lack_of_smell" >
		<input type="hidden" value="<?php echo $symptoms_14_lack_of_taste = $_REQUEST['symptoms_14_lack_of_taste']; ?>"  id="symptoms_14_lack_of_taste" name="symptoms_14_lack_of_taste" >
		<input type="hidden" value="<?php echo $symptoms_15_lack_of_appetite = $_REQUEST['symptoms_15_lack_of_appetite']; ?>"  id="symptoms_15_lack_of_appetite" name="symptoms_15_lack_of_appetite" >
		<input type="hidden" value="<?php echo $symptoms_16_eyes_hurt = $_REQUEST['symptoms_16_eyes_hurt']; ?>"  id="symptoms_16_eyes_hurt" name="symptoms_16_eyes_hurt" >
		<input type="hidden" value="<?php echo $symptoms_17_inflammation_eyes = $_REQUEST['symptoms_17_inflammation_eyes']; ?>"  id="symptoms_17_inflammation_eyes" name="symptoms_17_inflammation_eyes" >
		<input type="hidden" value="<?php echo $symptoms_18_vision_blurred = $_REQUEST['symptoms_18_vision_blurred']; ?>"  id="symptoms_18_vision_blurred" name="symptoms_18_vision_blurred" >
		<input type="hidden" value="<?php echo $covid_19_region = $_REQUEST['covid_19_region']; ?>"  id="covid_19_region" name="covid_19_region" >
		<input type="hidden" value="<?php echo $covid_19_exposure = $_REQUEST['covid_19_exposure']; ?>"  id="covid_19_exposure" name="covid_19_exposure" >
		<input type="hidden" value="<?php echo $smell_test = $_SESSION['AUX_smell_test']; ?>"  id="smell_test" name="smell_test" >
			
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
		symptoms = <?php echo $symptoms = isset($_POST['symptoms']) ? $_POST['symptoms'] : ""; ?><br>
		symptoms_2 = <?php echo $symptoms_2= (!empty($_POST['symptoms_2'])) ? $_POST['symptoms_2'] : 0; ?><br>
		symptoms_3 = <?php echo $symptoms_3= (!empty($_POST['symptoms_3'])) ? $_POST['symptoms_3'] : 0; ?><br>
		symptoms_4_Muscle Pain = <?php echo $symptoms_4_muscle_pain = isset($_POST['symptoms_4_muscle_pain']) ? $_POST['symptoms_4_muscle_pain'] : ""; ?><br>
		symptoms_5_chils = <?php echo $symptoms_5_chils = isset($_POST['symptoms_5_chils']) ? $_POST['symptoms_5_chils'] : ""; ?><br>
		symptoms_6_headache = <?php echo $symptoms_6_headache = isset($_POST['symptoms_6_headache']) ? $_POST['symptoms_6_headache'] : ""; ?><br>
		symptoms_7_diarrhea = <?php echo $symptoms_7_diarrhea = isset($_POST['symptoms_7_diarrhea']) ? $_POST['symptoms_7_diarrhea'] : ""; ?><br>
		symptoms_8_nauseous = <?php echo $symptoms_8_nauseous = isset($_POST['symptoms_8_nauseous']) ? $_POST['symptoms_8_nauseous'] : ""; ?><br>
		symptoms_9_sore_throat = <?php echo $symptoms_9_sore_throat = isset($_POST['symptoms_9_sore_throat']) ? $_POST['symptoms_9_sore_throat'] : ""; ?><br>
		symptoms_10_runny_nose = <?php echo $symptoms_10_runny_nose = isset($_POST['symptoms_10_runny_nose']) ? $_POST['symptoms_10_runny_nose'] : ""; ?><br>
		symptoms_11_fatigued = <?php echo $symptoms_11_fatigued = isset($_POST['symptoms_11_fatigued']) ? $_POST['symptoms_11_fatigued'] : ""; ?><br>
		symptoms_12_feel_dizzy = <?php echo $symptoms_12_feel_dizzy = isset($_POST['symptoms_12_feel_dizzy']) ? $_POST['symptoms_12_feel_dizzy'] : ""; ?><br>
		symptoms_13_lack_of_smell = <?php echo $symptoms_13_lack_of_smell = isset($_POST['symptoms_13_lack_of_smell']) ? $_POST['symptoms_13_lack_of_smell'] : ""; ?><br>
		symptoms_14_lack_of_taste = <?php echo $symptoms_14_lack_of_taste = isset($_POST['symptoms_14_lack_of_taste']) ? $_POST['symptoms_14_lack_of_taste'] : ""; ?><br>
		symptoms_15_lack_of_appetite = <?php echo $symptoms_15_lack_of_appetite = isset($_POST['symptoms_15_lack_of_appetite']) ? $_POST['symptoms_15_lack_of_appetite'] : ""; ?><br>
		symptoms_16_eyes_hurt = <?php echo $symptoms_16_eyes_hurt = isset($_POST['symptoms_16_eyes_hurt']) ? $_POST['symptoms_16_eyes_hurt'] : ""; ?><br>
		symptoms_17_inflammation_eyes = <?php echo $symptoms_17_inflammation_eyes = isset($_POST['symptoms_17_inflammation_eyes']) ? $_POST['symptoms_17_inflammation_eyes'] : ""; ?><br>
		symptoms_18_vision_blurred = <?php echo $symptoms_18_vision_blurred = isset($_POST['symptoms_18_vision_blurred']) ? $_POST['symptoms_18_vision_blurred'] : ""; ?><br>
		covid_19_region = <?php echo $covid_19_region= (!empty($_POST['covid_19_region'])) ? $_POST['covid_19_region'] : 0; ?><br>
		covid_19_exposure = <?php echo $covid_19_exposure = isset($_POST['covid_19_exposure']) ? $_POST['covid_19_exposure'] : ""; ?><br>
		smell_test = <?php echo $smell_test= (!empty($_POST['smell_test'])) ? $_POST['smell_test'] : 0; ?><br>
		
		
		
   
      </div>
	  
    </div>
	
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
