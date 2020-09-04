<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
	
	
	
	//GET AUX
	$date_report = isset($_POST['date_report']) ? $_POST['date_report'] : "";
	$_SESSION['AUX_date_report'] = $date_report;
	
	$report_test_id = isset($_POST['report_test_id']) ? $_POST['report_test_id'] : "";
	$_SESSION['AUX_report_test_id'] = $report_test_id;
	
	$report_covid19_type = isset($_POST['report_covid19_type']) ? $_POST['report_covid19_type'] : "";
	$_SESSION['AUX_report_covid19_type'] = $report_covid19_type;
	
	
	
	
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
   <a href="report_covid19.php">
  <form method="POST" action="report_covid19.php">
  <input type="hidden" value="<?php echo $report_test_id = $_REQUEST['report_test_id']; ?>"  id="report_test_id" name="report_test_id" >
  <input type="hidden" value="<?php echo $date_report = $_REQUEST['date_report']; ?>"  id="date_report" name="date_report" >
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
  <!-- Progress Bar (100%/5pages = 20) -->
	<div class="w3-container">
		<div class="w3-border">
			<div class="w3-yellow" style="height:24px;width:80%"></div>
		</div>
	</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1><b><?php echo $lang['report_covid19_title']."<br />"; ?></b></h1>
        <br><br><br>
		<p>IMAGE</p>
		<br><br><br>
		
		
		<form id="form1" action="report_covid19_results.php" method="POST">
		
			<div class="checkbox">
				<label><input type="radio" id="report_covid19_diagnosis"  name="report_covid19_diagnosis" value="<?php echo $lang['report_covid19_question_n5_positive_value']; ?>"><?php echo $lang['report_covid19_question_n5']; ?></label>
			</div>
			
			<div class="checkbox">
				<label><input type="radio" id="report_covid19_diagnosis"  name="report_covid19_diagnosis" value="<?php echo $lang['report_covid19_question_n6_negative_value']; ?>"><?php echo $lang['report_covid19_question_n6']; ?></label>
			</div>
		
			
				
			<div id="text" style="display:none">
			<button type="submit" class="btn btn-warning" id="submit"  ><?php echo $lang['next']; ?></button>
			</div>
			
			<!-- testing -->
			<input type="hidden" value="<?php echo $date_report = $_REQUEST['date_report']; ?>"  id="date_report" name="date_report" >	
			<input type="hidden" value="<?php echo $report_test_id = $_REQUEST['report_test_id']; ?>"  id="report_test_id" name="report_test_id" >	
			<input type="hidden" value="<?php echo $report_covid19_type = $_REQUEST['report_covid19_type']; ?>"  id="report_covid19_type" name="report_covid19_type" >	
			
			<br><br>
			<b><p><?php echo $lang['report_covid19_sub_title'];?><p></b>
			
			
				
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
		<h5><?php echo $lang['report_index_placeholder_stuff'];?></h5>
		
		
		
		
		<br><br>
		<p>validações/DEBUG</p>
		date_report = <?php echo $date_report; ?><br>
		report_test_id = <?php echo $report_test_id; ?><br>
		report_covid19_type = <?php echo $report_covid19_type = isset($_POST['report_covid19_type']) ? $_POST['report_covid19_type'] : ""; ?><br>
   
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
