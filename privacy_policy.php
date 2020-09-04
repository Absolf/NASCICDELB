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
	<!-- Parameters Tables-->
	<style>
			table, th, td {
			  border: 1px solid black;
			}
			table.center {
			margin-left: auto;
			margin-right: auto;
			}
			table {border-collapse: collapse;}
			td    {padding: 6px;}
			th    {padding: 6px;}
			
			.list-unstyled {
			  background-color: #b3b3b3;
			  color: white;
			  
   
			 
			  
			}
			
			#topBlackBar {
			position: relative;
			top: 5px;
            border-top: 20px solid #000;
			}
			
			.list-inline-item {
			margin-left: 120px;
			display: flex;
			}
			
			#endgraybar {
			position: relative;
            border-top: 2px solid #b3b3b3;
			

		</style>
		
		<!-- Fonts-->
		<style>
		@font-face { font-family: Montserrat_SemiBold; src: url('data/fonts/montserrat/Montserrat-SemiBold.ttf'); } 
			  #semibold {
				 font-family: Montserrat_SemiBold
			}
			  
		 @font-face { font-family: Montserrat_Light; src: url('data/fonts/montserrat/Montserrat-Light.ttf'); } 
			#Light {
				font-family: Montserrat-Light
			}
			 
		</style>

</head>

<body>

<style>
body {background-color: #ffffff;}
</style>

  
  <!-- Progress Bar (100%/35pages = 2.8) -->
	<div class="w3-container">
		<div class="w3-border">
			<div class="w3-grey" style="height:24px;width:2.85%"></div>
		</div>
	</div>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
		<br>
		<img src="data/icons/privacypolicy_and_termsconditions.png"  style="width:50px;">
		<br>
		<img src="data/linha.png"  style="width:250px">
        <h2 id = "semibold"><b><?php echo $lang['privacy_policy_title']."<br />"; ?></b></h2>
        <br>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_first_text_1']; ?> <?php echo $lang['privacy_policy_first_text_2']; ?><?php echo $lang['privacy_policy_first_text_3']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_second_text']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_1']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_1_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_1_2']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_2']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_2_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_2_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_2_3']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_3']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_a']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_b']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_c']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_d']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_e']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_f']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_g']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_h']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_i']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_1_j']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_3_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"> <?php echo $lang['privacy_policy_tag_3_3']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_4']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_4_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_4_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><table class="center">
		  <tr>
			<th bgcolor='#c1c1c1' style="text-align: center; vertical-align: middle;"><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_1']; ?></th>
			<th bgcolor='#c1c1c1' style="text-align: center; vertical-align: middle;"><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_1']; ?></th>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_2']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_2']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_3']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_3']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_4']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_4']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_5']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_5']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_6']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_6']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_7']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_7']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_8']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_8']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_9']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_9']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_10']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_10']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_left_11']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_4_2_TABLE_right_11']; ?></td>
		  </tr>
		</table></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_5']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_5_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_5_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><table class="center">
		  <tr>
			<th bgcolor='#c1c1c1' style="text-align: center; vertical-align: middle;"><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_1']; ?></th>
			<th bgcolor='#c1c1c1' style="text-align: center; vertical-align: middle;"><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_1']; ?></th>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_2']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_2']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_3']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_3']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_4']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_4']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_5']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_5']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_6']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_6']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_7']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_7']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_8']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_8']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_9']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_9']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_10']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_10']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_left_11']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_5_2_TABLE_right_11']; ?></td>
		  </tr>
		</table></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_6']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_2_a']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_2_b']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_2_c']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_2_d']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_3']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_4']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_6_5']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_7']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_7_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_7_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_7_3']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_7_4']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_7_5']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_8']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_8_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><table class="center">
		  <tr>
			<th bgcolor='#c1c1c1' style="text-align: center; vertical-align: middle;"><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_1']; ?></th>
			<th bgcolor='#c1c1c1' style="text-align: center; vertical-align: middle;"><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_1']; ?></th>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_2']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_2']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_3']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_3']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_4']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_4']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_5']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_5']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_6']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_6']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_7']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_7']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_8']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_8']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_9']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_9']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_10']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_10']; ?></td>
		  </tr>
		  <tr>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_left_11']; ?></td>
			<td><?php echo $lang['privacy_policy_tag_8_1_TABLE_right_11']; ?></td>
		  </tr>
		</table></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_8_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_8_3']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_9']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_1_a']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_1_b']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_1_c']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_1_d']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_1_e']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_1_f']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_3']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_9_4']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_10']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_10_1']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_10_2']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_10_3']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_10_4']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_10_4_a']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_10_4_b']; ?></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_10_5']; ?></H6>
		
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_11']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_11_1']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_12']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_12_1']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_13']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_13_1']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_14']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_14_1']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_15']; ?></u></b></H6>
		<H6><?php echo $lang['privacy_policy_tag_15_1']; ?></H6>
		<br>
		<H6 style="font-size:13px" id = "Light"><b><u><?php echo $lang['privacy_policy_tag_16']; ?></u></b></H6>
		<H6 style="font-size:13px" id = "Light"><?php echo $lang['privacy_policy_tag_16_1']; ?></H6>
		
		<!--  <div id="endgraybar"/> -->
		<br>
		<br>

      </div>
    </div>
	
	
	<!-- Footer -->
	
<footer class=" navbar-toggler" style="height: 10px;">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item"><!--LEFT-->
        <h5 class="mb-1"></h5>
      </li>
      <li class="list-inline-item"><!--RIGHT-->
        <a href="app.php">
		<img src="data/eng_back.png" style="width:60px;height:15px;">
		</a>
		<img src="data/linha_branca.png" style="width:3px;">
		<a href="terms_and_conditions.php">
		<img src="data/eng_next.png" style="width:60px;height:15px;">
		</a>
      </li>
	<div id="topBlackBar"/>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  
  </style>

</footer>

<!-- Footer -->
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
