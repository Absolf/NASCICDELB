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
body {background-color: #DCDCDC;}
</style>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
 <a href="privacy_policy.php">
  <form method="get" action="privacy_policy.php">
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
			<div class="w3-yellow" style="height:24px;width:2.85%"></div>
		</div>
	</div>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
       <h1><b><?php echo $lang['terms_and_conditions_title']."<br />"; ?></b></h1>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_first_text_1_bold1']; ?></b><?php echo $lang['terms_and_conditions_first_text_2']; ?><b><?php echo $lang['terms_and_conditions_first_text_3_bold2']; ?></b><?php echo $lang['terms_and_conditions_first_text_4']; ?></H6>
	   <br>
	   <H6><?php echo $lang['terms_and_conditions_second_text']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_1']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_1_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_1_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_1_3']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_1_4']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_1_5']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_2']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_2_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_2_2']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_3']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_3']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_4']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_5']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_6']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_7']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_8']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_3_9']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_4']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_4_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_4_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_4_3']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_5']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_5_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_5_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_5_3']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_6']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_3']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_4']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_4_a']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_4_b']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_4_c']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_5']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_6']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_7']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_8']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_6_9']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_7']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_7_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_7_2']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_8']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_8_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_8_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_8_3']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_8_4']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_8_5']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_9']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_a']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_b']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_c']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_d']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_e']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_f']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_g']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_1_h']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_3']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_4']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_5']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_5_a']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_5_b']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_5_c']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_9_6']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_10']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_10_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_10_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_10_2_a']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_10_2_b']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_10_2_c']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_10_2_d']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_11']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_11_1']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_12']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_12_1']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_12_2']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_12_3']; ?></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_12_4']; ?></H6>
	   <br>
	   <H6><b><?php echo $lang['terms_and_conditions_tag_13']; ?></b></H6>
	   <H6><?php echo $lang['terms_and_conditions_tag_13_1']; ?></H6>
	   <br>
	   <H6><?php echo $lang['terms_and_conditions_read_and_understand']; ?></H6>
	   <br>
	   <H6><?php echo $lang['terms_and_conditions_last_review']; ?></H6>
	   
	   
		
		<br>
		<p id="text" style="display:none">
		 <a href="test_id.php" class="btn btn-warning btn-lg">
          <span></span> <?php echo $lang['next']."<br />"; ?>
        </a>
		</p>
		<input type="checkbox" id="myCheck" onclick="myFunction()">
		

			<script>
				function myFunction() {
				  var checkBox = document.getElementById("myCheck");
				  var text = document.getElementById("text");
				  if (checkBox.checked == true){
					text.style.display = "block";
				  } else {
					 text.style.display = "none";
				  }
				}
			</script>
		
		
		
		
   
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
