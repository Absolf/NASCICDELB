<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
	
	// create a new cURL resource
     $ch = curl_init ();

     // set URL and other appropriate options
     curl_setopt ($ch, CURLOPT_URL, "http://ipecho.net/plain");
     curl_setopt ($ch, CURLOPT_HEADER, 0);
     curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

     // grab URL and pass it to the browser

     $ip = curl_exec ($ch);
     echo "The public ip for this server is: $ip"."<br/>";
     // close cURL resource, and free up system resources
     curl_close ($ch);
	  
	 $host = gethostbyaddr($_SERVER["REMOTE_ADDR"])."<br/>";
	echo $host;
	
	
	
	
	//POST + AUX
	
	$lat = $_REQUEST['lat'];
	$_SESSION['AUX_lat'] = $lat;
	
	$long = $_REQUEST['long'];
	$_SESSION['AUX_long'] = $long;
	
	$basic_info_id = $_SESSION['AUX_basic_info_id'];
	
	
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
	
	$smell_assessment_test_01 = isset($_POST['smell_assessment_test_01']) ? $_POST['smell_assessment_test_01'] : "";
	$_SESSION['AUX_smell_assessment_test_01'] = $smell_assessment_test_01;
	
	$smell_assessment_test_02 = isset($_POST['smell_assessment_test_02']) ? $_POST['smell_assessment_test_02'] : "";
	$_SESSION['AUX_smell_assessment_test_02'] = $smell_assessment_test_02;
	
	$smell_assessment_test_03 = isset($_POST['smell_assessment_test_03']) ? $_POST['smell_assessment_test_03'] : "";
	$_SESSION['AUX_smell_assessment_test_03'] = $smell_assessment_test_03;
	
	$smell_assessment_test_04 = isset($_POST['smell_assessment_test_04']) ? $_POST['smell_assessment_test_04'] : "";
	$_SESSION['AUX_smell_assessment_test_04'] = $smell_assessment_test_04;
	
	$smell_assessment_test_05 = isset($_POST['smell_assessment_test_05']) ? $_POST['smell_assessment_test_05'] : "";
	
	$control_card = isset($_POST['control_card']) ? $_POST['control_card'] : "";
	
	
	
	//SMELL TEST THRUTH
	
	
	/* Cards algorithm */
		$k0 = 0.00;
		$k1 = -1.0;
		$k2 = 0.5;
		$k3 = 0.5;
		$k4 = 0.5;
		$k5 = 0.5;
		$x;
		$y;
		$t = 0.95;
		
		//Calculation X
		$x =        ($k1 * $smell_assessment_test_01) +  
					($k2 * $smell_assessment_test_02) +  
					($k3 * $smell_assessment_test_03) +  
					($k4 * $smell_assessment_test_04) +  
					($k5 * $smell_assessment_test_05) ;
		echo "Calculation X = " .$x."<br />";	

		//Calculation Y
		$y = exp($x) / (1+exp($x));
		echo "Calculation Y = " .$y."<br />";	
		
		//FAIL/PASS
		$meaning = null;
		if ($y < $t) {
			$meaning = '0';	//FAIL
		} else {
			$meaning= '1'; //PASS 
		}
		echo "meaning [ (FAIL, Hyposmia or Anosmia = 0); (PASS[Normosmia = 1) ] >> " .$meaning."<br />";
		
		//anosmic
		$anosmic = null;
		if ($x <= 2.5) {
			
			$anosmic = '1';
		} else {
			
			$anosmic = '0';
		}
		echo "anosmic [ (True anosmic = 1); (False anosmic = 0) ] >> " .$anosmic."<br />";
		
	//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\	
	
	//Calculation Age
	$basic_info_id = $_SESSION['AUX_basic_info_id'];
	function getAge($year, $month, $day){
    $date = "$year-$month-$day";
    if(version_compare(PHP_VERSION, '5.3.0') >= 0){
        $dob = new DateTime($date);
        $now = new DateTime();
        return $now->diff($dob)->y;
		}
    $difference = time() - strtotime($date);
    return floor($difference / 31556926);
	}
	getAge( $basic_info_id, '01', '01');
	$age = getAge( $basic_info_id, '01', '01');
	$_SESSION['AUX_age'] = $age;
	//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\

	//DEFENITIONS -> High Risk Patient, Correlated Symptoms, COVID Research Factors, Invalid Anosmia/Hyposmia Indications, Invalid Smell Test Indication
	$High_risk_patient = null;
	$correlated_symptoms = null;
	$covid_research_factors = null;
	$invalid_anosmia_hyposmia = null;
	$invalid_smell_test_indication = null;
	
	//High Risk Patient
	if (
		($age >= 65)
		OR ( $risk_factors > 0   )
	)
	{
		$High_risk_patient = '1';//TRUE
	} else{
		$High_risk_patient = '0';//FALSE
	}
	
	//correlated_symptoms
	if (
		($symptoms >= 3 && $symptoms <= 5) 		//body temperature elevated over 37.5 °C
		OR ($symptoms_2 > 1)					//cough
		OR ($symptoms_3 > 1)					//shortness of breath
		OR ($symptoms_4_muscle_pain > 0)		//muscle pain
		OR ($symptoms_5_chils > 0)				//chills
		OR ($symptoms_6_headache > 0)			//headache
		OR ($symptoms_7_diarrhea > 0)			//diarrhea
		OR ($symptoms_8_nauseous > 0)			//nausea
		OR ($symptoms_9_sore_throat > 0)		//sore throat
		OR ($symptoms_10_runny_nose > 0)		//runny nose
		OR ($symptoms_11_fatigued > 0)			//fatigue
		OR ($symptoms_13_lack_of_smell > 0)		//unusual lack of smell
		OR ($symptoms_14_lack_of_taste > 0)		//unusual lack of taste
		OR ($symptoms_15_lack_of_appetite > 0)	//unusual lack of appetite
		OR ($symptoms_16_eyes_hurt > 0)			//eye pain
		OR ($symptoms_17_inflammation_eyes > 0)	//conjunctivitis
		OR ($symptoms_18_vision_blurred > 0)	//blurred vision
	)
	{
		$correlated_symptoms = '1';//TRUE
	} else{
		$correlated_symptoms = '0'; //FALSE
	}
	
	//covid_research_factors
	if (
		($research_factor > 0) //use of corticosteroid medications, use of immunosuppressant medications, use of nicotine patch, regular smoking
		OR ($heart_rate != null) //Heart Rate 
		OR ($spo2 != null) //Oxygen Saturation (SpO2) 
	)
	{
		$covid_research_factors = '1'; //TRUE
	} else {
		$covid_research_factors = '0'; //FALSE
	}
	
	//invalid_anosmia_hyposmia
	if (
		($smell_test > 0 )  //smoking, GERD, head injury, seasonal allergies, nasal blockage (for different reasons), Parkinson’s/Alzheimer’s diagnosis 
	)
	{
		$invalid_anosmia_hyposmia = '1'; //TRUE
	} else {
		$invalid_anosmia_hyposmia = '0'; //FALSE
	}
	
	if (
		$smell_test > 0
		OR $control_card == 1
	){
		$invalid_smell_test_indication = '1'; //FALSE, FAILED
	} else {
		$invalid_smell_test_indication = '0'; //TRUE, PASSED
	}
	
	
	
	
	//echo,DEBUG
	echo "High_risk_patient = " .$High_risk_patient."<br />";
	echo "correlated_symptoms = " .$correlated_symptoms."<br />";
	echo "covid_research_factors = " .$covid_research_factors."<br />";
	echo "invalid_anosmia_hyposmia = " .$invalid_anosmia_hyposmia."<br />";
	echo "invalid_smell_test_indication = " .$invalid_smell_test_indication."<br />";
	
	
	//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\
	
	//Symptom-based Outcomes
	//AUX
	$AUX_emergency_outcome = null;
	$AUX_likely_infectious_outcome = null;
	$AUX_risk_factors_outcome = null;
	$AUX_stay_home_outcome = null;
	$AUX_quarantine_outcome = null;
	$AUX_other_outcome = null;
	$symptom_based_outcomes = null;	
	
		//Emergency Outcome -- (significant contact = Question Covid19Exposure = answer 1 ou 2 ou 3)		
		if (  
				 ($symptoms_2 == 5) 										//☐ Coughing up blood	
			 OR  ($symptoms_3 == 4) 										//☐ Hyperventilation / Panting 
			 OR  (  $symptoms == 5 && $symptoms_2 > 1  ) 					//☐ Fever over 40 °C and any type of cough
			 OR  (  ($symptoms >= 3 && $symptoms < 6) && ($symptoms_3 >=2 && $symptoms_3 <=3)  ) // ☐ Fever over 37.5 °C and any shortness of breath
			 OR  ( ($covid_19_exposure >= 1 && $covid_19_exposure <= 3) && ($symptoms_3 >=2 && $symptoms_3 <=3) && ($correlated_symptoms == 1 ) && ($age >= 65 OR $risk_factors > 0) ) 
			 //☐ Significant Contact and shortness of breath and correlated symptoms and you: ☐ are age 65 or older or ☐ have any risk factors
					

		)
		{
			$AUX_emergency_outcome= '1'; //TRUE
		}else{
			$AUX_emergency_outcome= '0'; //FALSE
		}


		//Likely Infectious Outcome
		if(
			($covid_19_exposure >= 1 && $covid_19_exposure <= 3) //☐ Significant Contact or High Risk Location) and one or more of the following:
			&& ( (($symptoms >=3 && $symptoms < 6 ) && $symptoms < 6) OR $symptoms_2 > 1 OR ($symptoms_3 >=2 && $symptoms_3 <=3) ) //☐ Fever over 37.5 °C ☐ Any type of cough ☐ Shortness of breath
		)
		{
			$AUX_likely_infectious_outcome= '1'; //TRUE
		} else {
			$AUX_likely_infectious_outcome= '0'; //FALSE
		}
		
		
		//Risk Factors Outcome
		if (
				($symptoms_3 >=2 && $symptoms_3 <=3) //☐ You are experiencing shortness of breath
				OR (($symptoms >=3 && $symptoms < 6 ) && $symptoms_2 > 1  ) && ($age >= 65 or $risk_factors > 0) //☐ You have a fever and a cough and one or more of the following: ☐ are age 65 or older or ☐ have any risk factors
				OR (($symptoms >=3 && $symptoms < 6 ) && $symptoms_2 > 1  ) && $correlated_symptoms == 1 && ( $symptoms == 5 OR $age >= 65 OR $risk_factors > 0 ) //☐ Fever and Correlated Symptoms and one or more of the following:  ☐ Fever over 40 °C ☐ Age 65 or older ☐ Risk Factors
				OR $symptoms_2 > 1 && $correlated_symptoms == 1 && ( $symptoms == 5 OR $age >= 65 OR $risk_factors > 0 ) // ☐ Cough and Correlated Symptoms and one or more of the following:  ☐ Fever over 40 °C ☐ Age 65 or older ☐ Risk Factors
		)
		{
			$AUX_risk_factors_outcome= '1'; //TRUE
		} else {
			$AUX_risk_factors_outcome= '0'; //FALSE
		}
		
		
		//Stay Home Outcome
		if (
			($symptoms >=3 && $symptoms < 6 ) && $symptoms_2 > 1 && ($age < 65 OR $risk_factors < 1 OR $symptoms < 5)  //☐ You have a fever and a cough and: ☐ you are not age 65 or older ☐ you do not have any risk factors ☐ your temperature is less than 40 °C 
			OR ($symptoms >=3 && $symptoms < 6 ) && $correlated_symptoms == 1 && ($age < 65 OR $risk_factors < 1 OR $symptoms < 5) // ☐ You have a fever and correlated symptoms and : ☐ you are not age 65 or older ☐ you do not have any risk factors ☐ your temperature is less than 40 °C
			OR $symptoms_2 > 1 && $correlated_symptoms == 1 && ($age < 65 OR $risk_factors < 1 OR $symptoms < 5) //☐ You have a cough and correlated symptoms and: ☐ you are not age 65 or older ☐ you do not have any risk factors ☐ your temperature is less than 40 °C
			OR ($symptoms >= 3 && $symptoms < 5) && $correlated_symptoms == 0 // ☐ You have a fever less than 40 °C and you have none of the correlated symptoms
			OR $symptoms_2 > 1 && $correlated_symptoms == 0 // ☐ You have a cough and you have none of the correlated symptoms
		)
		{
			$AUX_stay_home_outcome= '1'; //TRUE
		} else {
			$AUX_stay_home_outcome= '0'; //FALSE
		}
		
		
		//Quarantine Outcome
		if (
			$covid_19_exposure >= 1 && $covid_19_exposure <= 3
		)
		{
			$AUX_quarantine_outcome= '1'; //TRUE
		} else {
			$AUX_quarantine_outcome= '0'; //FALSE
		}
		
		
		//Other Outcome
		if (
			($AUX_emergency_outcome != 1) && ($AUX_likely_infectious_outcome != 1) && ($AUX_risk_factors_outcome != 1) && ($AUX_stay_home_outcome != 1) && ($AUX_quarantine_outcome != 1) 
		)
		{
			$AUX_other_outcome= '1'; //TRUE
		} else {
			$AUX_other_outcome= '0'; //FALSE
		}
		
		//echo,DEBUG
		echo "AUX_emergency_outcome = " .$AUX_emergency_outcome."<br />";
		echo "AUX_likely_infectious_outcome = " .$AUX_likely_infectious_outcome."<br />";
		echo "AUX_risk_factors_outcome = " .$AUX_risk_factors_outcome."<br />";
		echo "AUX_stay_home_outcome = " .$AUX_stay_home_outcome."<br />";
		echo "AUX_quarantine_outcome = " .$AUX_quarantine_outcome."<br />";
		echo "AUX_other_outcome = " .$AUX_other_outcome."<br />";
		
		 	
	//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\
	
	
	//FINAL Symptom-based Outcomes Alghoritm
	
	if (
		$AUX_emergency_outcome == 1
	)
	{
		$symptom_based_outcomes = $lang['emergency_outcome_message'];
	} 
	else if(
		$AUX_likely_infectious_outcome == 1
	)
	{
		$symptom_based_outcomes = $lang['likely_infectious_outcome'];
	} 
	else if (
		$AUX_risk_factors_outcome == 1
	)
	{
		$symptom_based_outcomes = $lang['risk_factors_outcome'];
	} 
	else if (
		$AUX_stay_home_outcome == 1
	)
	{
		$symptom_based_outcomes = $lang['stay_home_outcome'];
	} 
	else if (
		$AUX_quarantine_outcome == 1
	)
	{
		$symptom_based_outcomes = $lang['quarantine_outcome'];
	} 
	else if (
		$AUX_other_outcome == 1
	)
	{
		$symptom_based_outcomes = $lang['other_outcome'];
	}
	//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\
	
	
	
	
	//Smell Test Outcomes 
	//AUX
	$AUX_anosmia_with_correlated_symptoms_outcome = null;
	$AUX_anosmia_with_no_symptoms_outcome = null;
	$AUX_hyposmia_with_no_symptoms_outcome = null;
	$AUX_anosmia_hyposmia_possibly_chronic_outcome = null;   
	$AUX_clear_outcome = null;
	
	
	//Anosmia with Correlated Symptoms Outcome
	if (
		$invalid_anosmia_hyposmia == 1 && ($symptoms >= 3 && $symptoms <= 5) //☐ Hyposmia or Anosmia and any Fever (body temperature over 37.5 °C)  
		OR $invalid_anosmia_hyposmia == 1 && $correlated_symptoms == 1 && $invalid_smell_test_indication == 0
	)
	{
		$AUX_anosmia_with_correlated_symptoms_outcome = '1'; //TRUE
	} else {
		$AUX_anosmia_with_correlated_symptoms_outcome = '0'; //FALSE
	}
	
	
	//Anosmia with no symptoms outcome
	if (
		$anosmic == 1 && $correlated_symptoms == 1 && ($smell_test > 0 && $control_card != 1)
	)
	{
		$AUX_anosmia_with_no_symptoms_outcome = '1'; //TRUE
	} else {
		$AUX_anosmia_with_no_symptoms_outcome = '0'; //FALSE
	}
	
	
	//hyposmia with_no symptoms outcome
	if (
		$meaning == 0 && $correlated_symptoms == 0 && $invalid_smell_test_indication == 0
	)
	{
		$AUX_hyposmia_with_no_symptoms_outcome = '1'; //TRUE
	} else {
		$AUX_hyposmia_with_no_symptoms_outcome = '0'; //FALSE
	}
	
	
	//Anosmia/Hyposmia possibly chronic outcome
	if (
		$smell_test > 0 && $control_card == 1
	)
	{
		$AUX_anosmia_hyposmia_possibly_chronic_outcome = '1'; //TRUE
	} else {
		$AUX_anosmia_hyposmia_possibly_chronic_outcome = '0'; //FALSE
	}
	
	//Clear outcome
	if(
		$meaning == 1 OR $invalid_smell_test_indication == 0
	)
	{
		$AUX_clear_outcome = '1'; //TRUE
	} else {
		$AUX_clear_outcome = '0'; //FALSE
	}
	
	
	
	//echo,DEBUG
		echo "AUX_anosmia_with_correlated_symptoms_outcome = " .$AUX_anosmia_with_correlated_symptoms_outcome."<br />";
		echo "AUX_anosmia_with_no_symptoms_outcome = " .$AUX_anosmia_with_no_symptoms_outcome."<br />";
		echo "AUX_hyposmia_with_no_symptoms_outcome = " .$AUX_hyposmia_with_no_symptoms_outcome."<br />";
		echo "AUX_anosmia_hyposmia_possibly_chronic_outcome = " .$AUX_anosmia_hyposmia_possibly_chronic_outcome."<br />";
		echo "AUX_clear_outcome = " .$AUX_clear_outcome."<br />";
		
	//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\	
		
	//FINAL Smell Test Outcomes Alghoritm
	$Smell_test_outcomes = null;

	if (
		$AUX_anosmia_with_correlated_symptoms_outcome == 1
	)
	{
		$Smell_test_outcomes = $lang['anosmia_with_correlated_symptoms_outcome'];
	}
	else if (
			$AUX_anosmia_with_no_symptoms_outcome == 1
		)
	{
		$Smell_test_outcomes = $lang['with_no_symptoms_outcome'];
	}
	else if (
			$AUX_hyposmia_with_no_symptoms_outcome == 1
		)
	{
		$Smell_test_outcomes = $lang['hyposmia_with_no_symptoms_outcome'];
	}
	else if (
			$AUX_anosmia_hyposmia_possibly_chronic_outcome == 1
		)
	{
		$Smell_test_outcomes = $lang['anosmia_Hyposmia_possibly_chronic_outcome'];
	}
	else if (
			$AUX_clear_outcome == 1
		)
	{
		$Smell_test_outcomes = $lang['clear_outcome'];
	}
	//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\	
	
	//ON/OFF Show/Hide Second "Significant smell sense impairment,COVID-19 testing higly recommended"
	 // Start establishing connection...
		$dsn = 'mysql:host=victor-test-rds-app.c3xjvxkdhthn.us-east-1.rds.amazonaws.com;dbname=nasumtech';
		//DB username
		//$uname = $_SERVER['DB_USERNAME'];
		//DB password
		//$pass = $_SERVER['DB_PASSWORD'];
	    //$uname = "admin";
		//$pass = "^cU#r&2KWDdgQHxkS!mxfBtZp";
        $uname = getenv("DB_USERNAME");
        $pass = getenv("DB_PASSWORD");

		try
		 {

		 $db = new PDO($dsn, $uname, $pass);

		 $db->setAttribute(PDO::ERRMODE_SILENT, PDO::ATTR_EMULATE_PREPARES);
		 error_reporting(0);
		 } catch (PDOException $ex)
		 {
		 echo "Database error:" . $ex->getMessage();
		 }
		// END ESTABLISHING CONNECTION - CONNECTION IS MADE.


		 $aux_kit_id = $_SESSION['AUX_test_id'];  // or where-ever you get your input from.
		 $query = "SELECT * FROM control_2nd_result WHERE kit_id LIKE '%$aux_kit_id%'";
		 $statement = $db->prepare($query);

		 // The values you wish to put in.
		 $statementInputs = array("aux_kit_id" => $aux_kit_id);
		 $statement->execute($statementInputs);

		 //Returns results as an associative array.
		 $result = $statement->fetchAll(PDO::FETCH_ASSOC);
		 
		 $statement->closeCursor();

		 //Shows array of results.
		 print_r($result);
		 echo '<br/>';
		 echo "aux_kit_id = " .$_SESSION['AUX_test_id']."<br />";
		 
		 //aux
		 $aux_Smell_test_outcomes = null;
		 
		 //verify array is empty or full (empty = match false; full = match true)
		 if(!array_filter($result)) {
			 echo "Every fields are empty, null or equal to false";
			 $aux_Smell_test_outcomes = $Smell_test_outcomes;
		} else {
			
			echo "equal to true"."<br />";
		}
		//------------------------------------------------------------------------------------------END------------------------------------------------------------------------------\\	
		
		//STORE RESULTS IN TO DATABASE (TEST)
		//
		//AUX
		$kit_id = $_SESSION['AUX_test_id'];
		$lat = $_REQUEST['lat'];
		$long = $_REQUEST['long']; 
		$basic_info_id = $_SESSION['AUX_basic_info_id']; 
		$age = getAge( $basic_info_id, '01', '01');
		$sex = $_SESSION['AUX_sex'];
		$risk_factors= (!empty($_POST['risk_factors'])) ? $_POST['risk_factors'] : 0; 
		$research_factor= (!empty($_POST['research_factor'])) ? $_POST['research_factor'] : 0; 
		$heart_rate = isset($_POST['heart_rate']) ? $_POST['heart_rate'] : ""; 
		$spo2 = isset($_POST['spo2']) ? $_POST['spo2'] : ""; 
		$symptoms = isset($_POST['symptoms']) ? $_POST['symptoms'] : ""; 
		$symptoms_2= (!empty($_POST['symptoms_2'])) ? $_POST['symptoms_2'] : 0; 
		$symptoms_3= (!empty($_POST['symptoms_3'])) ? $_POST['symptoms_3'] : 0; 
		$symptoms_4_muscle_pain = isset($_POST['symptoms_4_muscle_pain']) ? $_POST['symptoms_4_muscle_pain'] : ""; 
		$symptoms_5_chils = isset($_POST['symptoms_5_chils']) ? $_POST['symptoms_5_chils'] : ""; 
		$symptoms_6_headache = isset($_POST['symptoms_6_headache']) ? $_POST['symptoms_6_headache'] : ""; 
		$symptoms_7_diarrhea = isset($_POST['symptoms_7_diarrhea']) ? $_POST['symptoms_7_diarrhea'] : ""; 
		$symptoms_8_nauseous = isset($_POST['symptoms_8_nauseous']) ? $_POST['symptoms_8_nauseous'] : ""; 
		$symptoms_9_sore_throat = isset($_POST['symptoms_9_sore_throat']) ? $_POST['symptoms_9_sore_throat'] : ""; 
		$symptoms_10_runny_nose = isset($_POST['symptoms_10_runny_nose']) ? $_POST['symptoms_10_runny_nose'] : ""; 
		$symptoms_11_fatigued = isset($_POST['symptoms_11_fatigued']) ? $_POST['symptoms_11_fatigued'] : ""; 
		$symptoms_12_feel_dizzy = isset($_POST['symptoms_12_feel_dizzy']) ? $_POST['symptoms_12_feel_dizzy'] : ""; 
		$symptoms_13_lack_of_smell = isset($_POST['symptoms_13_lack_of_smell']) ? $_POST['symptoms_13_lack_of_smell'] : ""; 
		$symptoms_14_lack_of_taste = isset($_POST['symptoms_14_lack_of_taste']) ? $_POST['symptoms_14_lack_of_taste'] : ""; 
		$symptoms_15_lack_of_appetite = isset($_POST['symptoms_15_lack_of_appetite']) ? $_POST['symptoms_15_lack_of_appetite'] : ""; 
		$symptoms_16_eyes_hurt = isset($_POST['symptoms_16_eyes_hurt']) ? $_POST['symptoms_16_eyes_hurt'] : ""; 
		$symptoms_17_inflammation_eyes = isset($_POST['symptoms_17_inflammation_eyes']) ? $_POST['symptoms_17_inflammation_eyes'] : ""; 
		$symptoms_18_vision_blurred = isset($_POST['symptoms_18_vision_blurred']) ? $_POST['symptoms_18_vision_blurred'] : ""; 
		$covid_19_region= (!empty($_POST['covid_19_region'])) ? $_POST['covid_19_region'] : 0; 
		$covid_19_exposure = isset($_POST['covid_19_exposure']) ? $_POST['covid_19_exposure'] : ""; 
		$smell_test= (!empty($_POST['smell_test'])) ? $_POST['smell_test'] : 0; 
		$smell_assessment_test_01 = isset($_POST['smell_assessment_test_01']) ? $_POST['smell_assessment_test_01'] : ""; 
		$smell_assessment_test_02 = isset($_POST['smell_assessment_test_02']) ? $_POST['smell_assessment_test_02'] : ""; 
		$smell_assessment_test_03 = isset($_POST['smell_assessment_test_03']) ? $_POST['smell_assessment_test_03'] : "";  
		$smell_assessment_test_04 = isset($_POST['smell_assessment_test_04']) ? $_POST['smell_assessment_test_04'] : ""; 
		$smell_assessment_test_05 = isset($_POST['smell_assessment_test_05']) ? $_POST['smell_assessment_test_05'] : ""; 
		$control_card = isset($_POST['control_card']) ? $_POST['control_card'] : ""; 
		$x; 
		$y;
		$meaning; 
		$anosmic; 
	
		$servername = getenv("DB_HOST");
        $database = getenv("DB_NAME");
        $username = getenv("DB_USERNAME");
        $password = getenv("DB_PASSWORD");
		//$servername = $_SERVER['DB_HOST'];
		//$database = $_SERVER['DB_NAME'];
		//$username = $_SERVER['DB_USERNAME'];
		//$password = $_SERVER['DB_PASSWORD'];
		//$servername = "nasum-prd-rds-app.ckokj4dipzqi.eu-west-1.rds.amazonaws.com";
		//$database = "nasumtech";
		//$username = "admin";
		//$password = "^cU#r&2KWDdgQHxkS!mxfBtZp";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
		if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
		}
		 
		echo "Connected successfully";
		 
		$sql = "INSERT INTO test 
		(kit_id, latitude, longitude, birth_age, age, sex, risk_factor, research_factor, heart_rate, spo2, symptoms_temperature, symptoms_2_cough, symptoms_3_shortness_of_breath,
		symptoms_4_muscle_pain, symptoms_5_chils, symptoms_6_headache, symptoms_7_diarrhea, symptoms_8_nauseous, symptoms_9_sore_throat, symptoms_10_runny_nose,
		symptoms_11_fatigued, symptoms_12_feel_dizzy, symptoms_13_lack_of_smell, symptoms_14_lack_of_taste, symptoms_15_lack_of_appetite, symptoms_16_eyes_hurt,
		symptoms_17_inflammation_eyes, symptoms_18_vision_blurred, covid_19_region, covid_19_exposure, smell_test, smell_assessment_test_01, smell_assessment_test_02,
		smell_assessment_test_03, smell_assessment_test_04, smell_assessment_test_05, control_card, calculation_x, calculation_y, meaning, anosmic, high_risk_patient, correlated_symptoms,
		covid_research_factors, invalid_anosmia_hyposmia, invalid_smell_test_indication, aux_emergency_outcome, aux_likely_infectious_outcome, aux_risk_factors_outcome,
		aux_stay_home_outcome, aux_quarantine_outcome, aux_other_outcome, anosmia_with_correlated_symptoms_outcome, anosmia_with_no_symptoms_outcome, 
		hyposmia_with_no_symptoms_outcome, anosmia_hyposmia_possibly_chronic_outcome, clear_outcome, symptom_based_outcomes, smell_test_outcomes) 
		VALUES 
		('$kit_id', '$lat', '$long', '$basic_info_id', '$age', '$sex', '$risk_factors', '$research_factor', '$heart_rate', '$spo2', '$symptoms', '$symptoms_2', '$symptoms_3',
		'$symptoms_4_muscle_pain', '$symptoms_5_chils', '$symptoms_6_headache', $symptoms_7_diarrhea, '$symptoms_8_nauseous', '$symptoms_9_sore_throat', $symptoms_10_runny_nose,
		'$symptoms_11_fatigued', '$symptoms_12_feel_dizzy', '$symptoms_13_lack_of_smell', '$symptoms_14_lack_of_taste', $symptoms_15_lack_of_appetite, '$symptoms_16_eyes_hurt',
		'$symptoms_17_inflammation_eyes', '$symptoms_18_vision_blurred', '$covid_19_region', '$covid_19_exposure', '$smell_test', $smell_assessment_test_01, '$smell_assessment_test_02',
		'$smell_assessment_test_03', '$smell_assessment_test_04', '$smell_assessment_test_05', '$control_card', '$x', '$y', '$meaning', '$anosmic', '$High_risk_patient', '$correlated_symptoms',
		'$covid_research_factors', '$invalid_anosmia_hyposmia', $invalid_smell_test_indication, '$AUX_emergency_outcome', '$AUX_likely_infectious_outcome', '$AUX_risk_factors_outcome',
		'$AUX_stay_home_outcome', '$AUX_quarantine_outcome', '$AUX_other_outcome', '$AUX_anosmia_with_correlated_symptoms_outcome', '$AUX_anosmia_with_no_symptoms_outcome',
		'$AUX_hyposmia_with_no_symptoms_outcome', '$AUX_anosmia_hyposmia_possibly_chronic_outcome', $AUX_clear_outcome, '$symptom_based_outcomes', '$Smell_test_outcomes')";
		if (mysqli_query($conn, $sql)) {
			  echo "New record created successfully";
		} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	
	
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
	
	<style>
      @font-face { font-family: Montserrat_Regular; src: url('data/fonts/montserrat/Montserrat-Regular.ttf'); } 
      h1 {
         font-family: Montserrat_Regular
      }
	  
    </style>
   

</head>

<body>

<style>
body {background-color: #DCDCDC;}
</style>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <a href="control_card.php">
  <form method="POST" action="control_card.php">
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
	<input type="hidden" value="<?php echo $smell_assessment_test_01 = $_REQUEST['smell_assessment_test_01']; ?>"  id="smell_assessment_test_01" name="smell_assessment_test_01" >
	<input type="hidden" value="<?php echo $smell_assessment_test_02 = $_REQUEST['smell_assessment_test_02']; ?>"  id="smell_assessment_test_02" name="smell_assessment_test_02" >
	<input type="hidden" value="<?php echo $smell_assessment_test_03 = $_REQUEST['smell_assessment_test_03']; ?>"  id="smell_assessment_test_03" name="smell_assessment_test_03" >
	<input type="hidden" value="<?php echo $smell_assessment_test_04 = $_REQUEST['smell_assessment_test_04']; ?>"  id="smell_assessment_test_04" name="smell_assessment_test_04" >
	<input type="hidden" value="<?php echo $smell_assessment_test_05 = $_REQUEST['smell_assessment_test_05']; ?>"  id="smell_assessment_test_05" name="smell_assessment_test_05" >
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
			<div class="w3-yellow" style="height:24px;width:100%"></div>
		</div>
	</div>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1><b><?php echo $lang['results_title']."<br />"; ?></b></h1>
        <br><br><br>
		<p>IMAGE</p>
        <ul class="list-unstyled">
          
		  <br>
		  <h4><?php echo $lang['results_subtitle_1']; ?></h4>
		  <p>IMAGE</p>
		  <?php echo $symptom_based_outcomes; ?>
        </ul>
		<br>
		<hr>
		<h4><?php echo $lang['results_subtitle_2_part1']."<br />" ?> <?php echo $lang['results_subtitle_2_part2'] ?></h4>
		<br>
		<?php echo $aux_Smell_test_outcomes; ?>
		<br>


		
		
		
		<br><br>
		<p>validações/DEBUG</p>
		Test ID = <?php echo $_SESSION['AUX_test_id']; ?><br>
		Lat = <?php echo $lat = $_REQUEST['lat']; ?><br>
		long = <?php echo $long = $_REQUEST['long']; ?><br>
		ano = <?php echo $basic_info_id = $_SESSION['AUX_basic_info_id']; ?><br>
		Idade = <?php echo $age = getAge( $basic_info_id, '01', '01'); ?><br>
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
		smell_assessment_test_01 = <?php echo $smell_assessment_test_01 = isset($_POST['smell_assessment_test_01']) ? $_POST['smell_assessment_test_01'] : ""; ?><br>
		smell_assessment_test_02 = <?php echo $smell_assessment_test_02 = isset($_POST['smell_assessment_test_02']) ? $_POST['smell_assessment_test_02'] : ""; ?><br>
		smell_assessment_test_03 = <?php echo $smell_assessment_test_03 = isset($_POST['smell_assessment_test_03']) ? $_POST['smell_assessment_test_03'] : "";  ?><br>
		smell_assessment_test_04 = <?php echo $smell_assessment_test_04 = isset($_POST['smell_assessment_test_04']) ? $_POST['smell_assessment_test_04'] : ""; ?><br>
		smell_assessment_test_05 = <?php echo $smell_assessment_test_05 = isset($_POST['smell_assessment_test_05']) ? $_POST['smell_assessment_test_05'] : ""; ?><br>
		control_card = <?php echo $control_card = isset($_POST['control_card']) ? $_POST['control_card'] : ""; ?><br>
		Calculation x = <?php echo $x; ?><br>
		Calculation y = <?php echo $y; ?><br>
		meaning [ (FAIL, Hyposmia or Anosmia = 0); (PASS[Normosmia = 1) ] = <?php echo $meaning; ?><br>
		anosmic [ (True anosmic = 1); (False anosmic = 0) ] = <?php echo $anosmic; ?><br>

		
		
		
			
   
      </div>
	  
    </div>
	
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
