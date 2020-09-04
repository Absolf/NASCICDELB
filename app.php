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
	
	<!-- Fonts-->
	<style>
      @font-face { font-family: Montserrat_Regular; src: url('data/fonts/montserrat/Montserrat-Regular.ttf'); } 
      #regular {
         font-family: Montserrat_Regular
      }
	  
	  @font-face { font-family: Montserrat_Medium; src: url('data/fonts/montserrat/Montserrat-Medium.ttf'); } 
      #Medium {
         font-family: Montserrat-Medium
      }
	  
	  @font-face { font-family: Montserrat_Light; src: url('data/fonts/montserrat/Montserrat-Light.ttf'); } 
      #Light {
         font-family: Montserrat-Light
      }
	  
	  @font-face { font-family: Montserrat_Thin; src: url('data/fonts/montserrat/Montserrat-Thin.ttf'); } 
      #Thin {
         font-family: Montserrat-Thin
      }
	  
    </style>
	

  

</head>

<body>
<style>
body {background-color: #ffffff;}
</style>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
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
			<select onchange = "document.language.submit()" name="lang" class="selectpicker">
	
				<option selected="selected"><?php echo $lang['select-language']; ?></option>
					<option value="en"><?php echo $lang['en']; ?></option>
					<option value="pt"><?php echo $lang['pt']; ?></option>
			
			</select>
			
			
			
		</form>
		
		
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
	
		
		
      <div class="col-lg-12 text-left">
	  <div class="text-align">
			<img class="img-responsive" style= "width:100px;"  alt="" src="data/logo-olfa.png">
		</div>
	  <br>
	  
	  
	 <style>
		h1.start { display: inline; }
		h3.start { display: inline; }
		h6.start { display: inline; }
		
		</style>
		
		<h1 id = "Medium" class="start"><b><?php echo $lang['welcome_word_1']; ?></b></h4>
		<h1 id = "Light" class="start"><?php echo $lang['welcome_word_2']; ?></h4>
		<br>
		<h1 id = "regular" class="start"><?php echo $lang['welcome_word_3']; ?></h4>
		<h1 id = "Light" class="start"><?php echo $lang['welcome_word_4']; ?></h4>
		<h1 id = "Medium" class="start"><b><?php echo $lang['welcome_word_6']; ?></b></h4>
		<h1 id = "Light" class="start"><?php echo $lang['welcome_word_5']; ?></h1>
		<br>
		<h3 id = "Light" class="start"><?php echo $lang['welcome_word_7']; ?></h3>
		<br><br><br><br>
		
		<h6 id = "Medium" class="start"><b><?php echo $lang['intro2']; ?></b></h6>
		<br>
		<h6 style="font-size:13px" id = "Light" class="start"><?php echo $lang['intro3']; ?></h6>
		<br>
		 <a href="privacy_policy.php" >
         <style>
		.image_test_covid19 {
		position: relative;
		}

		.text_test_covid19 {
		   position: absolute;
		   top: 13px;
		   left: 54px;
		   width: 100%;
		   margin: 0 auto;
		   color: #FFFFFF;
		   
		}
		</style>
		<div class="image_test_covid19">
			<img src="data/big_buttom.png" style= "width:200px;"/>
		<div class="text">
		   <h2 style="font-size:16px" class="text_test_covid19" id = "Medium"><b><?php echo $lang['start_test']."<br />"; ?></b></h2> 
		</div>
		</div>
        </a>
		<br><br>
		<h6 style="font-size:13px" id = "Light" class="start"><b><?php echo $lang['intro6']; ?></b></h6>
		<br>
		<h6 style="font-size:13px" id = "Light" class="start"><?php echo $lang['intro7']; ?></h6>
		<br>
		<a href="report_index.php" >
         <style>
		.image_report_covid19 {
		position: relative;
		}

		.text_report_covid19 {
		   position: absolute;
		   top: 11px;
		   left: 40px;
		   width: 100%;
		   margin: 0 auto;
		   color: #FFFFFF;
		   
		}
		</style>
		<div class="image_report_covid19">
			<img src="data/big_buttom.png" style= "width:150px;"/>
		<div class="text">
		   <h2 style="font-size:11px" class="text_report_covid19" id = "Medium"><b><?php echo $lang['report_diagnosis']."<br />"; ?></b></h2> 
		</div>
		</div>
        </a>
		<br>
		
		
		

   
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
