<?php
require_once("config.php");

if (isset($_POST['submit'])) {

	//--------------------------------------table 10 
	if (isset($_POST['statistical_info'])) {

		$sam_info = array();

		foreach ($_POST['statistical_info'] as $th_statistical_info_id => $tb_statistical_info_id) {
			$sql_quality = "INSERT INTO th_tb_statistical_info (
			DokID,
			th_statistical_info_id,
			tb_statistical_info_id
		) VALUES (
			't10',
			" . $th_statistical_info_id . ",
			" . $tb_statistical_info_id . "
		)";

			$result = mysqli_query($con, $sql_quality);
			$sam_info[] = mysqli_insert_id($con);
		}
		$sam_info = implode(',', $sam_info);
	}

	// ------------------------------------- table 11
	if (isset($_POST['statistical_portal'])) {

		$sam_portal = array();

		foreach ($_POST['statistical_portal'] as $th_statistical_portal_id => $tb_statistical_portal_id) {
			$sql_quality = "INSERT INTO th_tb_statistical_portal (
			DokID,
			th_statistical_portal_id,
			tb_statistical_portal_id
		) VALUES (
			't11',
			" . $th_statistical_portal_id . ",
			" . $tb_statistical_portal_id . "
		)";

			$result = mysqli_query($con, $sql_quality);
			$sam_portal[] = mysqli_insert_id($con);
		}
		$sam_portal = implode(',', $sam_portal);
	}

	// ------------------------------------- table 12
	if (isset($_POST['satisfaction_level'])) {

		$sam_level = array();

		foreach ($_POST['satisfaction_level'] as $th_satisfaction_level_id => $tb_satisfaction_level_id) {
			$sql_quality = "INSERT INTO th_tb_satisfaction_level (
			DokID,
			th_satisfaction_level_id,
			tb_satisfaction_level_id
		) VALUES (
			't12',
			" . $th_satisfaction_level_id . ",
			" . $tb_satisfaction_level_id . "
		)";

			$result = mysqli_query($con, $sql_quality);
			$sam_level[] = mysqli_insert_id($con);
		}
		$sam_level = implode(',', $sam_level);
	}
	// ------------------------------------- table 13
	if (isset($_POST['geostat_according'])) {

		$sam_according = array();

		foreach ($_POST['geostat_according'] as $th_geostat_according_id => $tb_geostat_according_id) {
			$sql_quality = "INSERT INTO th_tb_geostat_according (
			DokID,
			th_geostat_according_id,
			tb_geostat_according_id
		) VALUES (
			't13',
			" . $th_geostat_according_id . ",
			" . $tb_geostat_according_id . "
		)";

			$result = mysqli_query($con, $sql_quality);
			$sam_according[] = mysqli_insert_id($con);
		}
		$sam_according = implode(',', $sam_according);
	}


	// ------------------------------------- table 19
	if (isset($_POST['products_offered'])) {

		$sam_offered = array();

		foreach ($_POST['products_offered'] as $th_products_offered_id => $tb_products_offered_id) {
			$sql_quality = "INSERT INTO th_tb_products_offered (
			DokID,
			th_products_offered_id,
			tb_products_offered_id
		) VALUES (
			't19',
			" . $th_products_offered_id . ",
			" . $tb_products_offered_id . "
		)";

			$result = mysqli_query($con, $sql_quality);
			$sam_offered[] = mysqli_insert_id($con);
		}
		$sam_offered = implode(',', $sam_offered);
	}

	// ------------------------------------- table 19.1
	if (isset($_POST['products_offered3'])) {

		$sam_offered1 = array();

		foreach ($_POST['products_offered3'] as $th_products_offered1_id => $tb_products_offered1_id) {
			$sql_quality = "INSERT INTO th_tb_products_offered1 (
			DokID,
			th_products_offered1_id,
			tb_products_offered1_id
		) VALUES (
			't19_1',
			" . $th_products_offered1_id . ",
			" . $tb_products_offered1_id . "
		)";

			$result = mysqli_query($con, $sql_quality);
			$sam_offered1[] = mysqli_insert_id($con);
		}
		$sam_offered1 = implode(',', $sam_offered1);
	}
	// ------------------------------------- table 20
	if (isset($_POST['different_fields1'])) {

		$sam_fields1 = array();

		foreach ($_POST['different_fields1'] as $th_different_fields_id => $tb_different_fields_id) {
			$sql_quality = "INSERT INTO th_tb_different_fields (
			DokID,
			th_different_fields_id,
			tb_different_fields_id
		) VALUES (
			't120',
			" . $th_different_fields_id . ",
			" . $tb_different_fields_id . "
		)";

			$result = mysqli_query($con, $sql_quality);
			$sam_fields1[] = mysqli_insert_id($con);
		}
		$sam_fields1 = implode(',', $sam_fields1);
	}

	// ------------------------------------- table 20.1
	if (isset($_POST['different_fields3'])) {

		$sam_fields2 = array();

		foreach ($_POST['different_fields3'] as $th_different_fields1_id => $tb_different_fields1_id) {
			$sql_quality = "INSERT INTO th_tb_different_fields1 (
				DokID,
				th_different_fields1_id,
				tb_different_fields1_id
			) VALUES (
				't20_1',
				" . $th_different_fields1_id . ",
				" . $tb_different_fields1_id . "
			)";

			$result = mysqli_query($con, $sql_quality);
			$sam_fields2[] = mysqli_insert_id($con);
		}
		$sam_fields2 = implode(',', $sam_fields2);
	}

	// ------------------------------------- table 21
	if (isset($_POST['overall1'])) {

		$sam_overall = array();
		foreach ($_POST['overall1'] as $th_overall_id => $tb_overall_id) {
			$sql_quality = "INSERT INTO th_tb_overall (
				DokID,
				th_overall_id,
				tb_overall_id
			) VALUES (
				't21',
				" . $th_overall_id . ",
				" . $tb_overall_id . "
			)";

			$result = mysqli_query($con, $sql_quality);
			$sam_overall[] = mysqli_insert_id($con);
		}
		$sam_overall = implode(',', $sam_overall);
	}

	// ------------------------------------- table 22
	if (isset($_POST['overall22'])) {

		$sam_overall22 = array();
		foreach ($_POST['overall22'] as $th_overall22_id => $tb_overall22_id) {
			$sql_quality = "INSERT INTO th_tb_overall22 (
					DokID,
					th_overall22_id,
					tb_overall22_id
				) VALUES (
					't22',
					" . $th_overall22_id . ",
					" . $tb_overall22_id . "
				)";

			$result = mysqli_query($con, $sql_quality);
			$sam_overall22[] = mysqli_insert_id($con);
		}
		$sam_overall22 = implode(',', $sam_overall22);
	}
	// ---------------------------------------------------------------------
	// print_r($_POST);
	$organisation = isset($_POST['organisation']) ? $_POST['organisation'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';

	$sqesi = isset($_POST['sqesi']) ? $_POST['sqesi'] : '';
	$asaki = isset($_POST['asaki']) ? $_POST['asaki'] : '';
	$activity = isset($_POST['activity']) ? $_POST['activity'] : '';
	$literacy = isset($_POST['literacy']) ? $_POST['literacy'] : '';
	// $proficiency = isset($_POST['proficiency']) ? $_POST['proficiency'] : '';

	$information_published = isset($_POST['information_published']) ? $_POST['information_published'] : '';
	$information = isset($_POST['information']) ? $_POST['information'] : '';
	$coment6_1 = isset($_POST['coment6_1']) ? $_POST['coment6_1'] : '';

	$did_you_use_gender = isset($_POST['did_you_use_gender']) ? $_POST['did_you_use_gender'] : '';
	$website = isset($_POST['website']) ? $_POST['website'] : '';
	// $visit = isset($_POST['visit']) ? $_POST['visit'] : '';
	$visit = isset($_POST['visit']) ? implode(',', $_POST['visit']) : '';

	// $activities = isset($_POST['activities']) ? $_POST['activities'] : '';
	$activities = isset($_POST['activities']) ? implode(',', $_POST['activities']) : '';
	$coment10 = isset($_POST['coment10']) ? $_POST['coment10'] : '';


	// $sam_info = isset($_POST['sam_info']) ? $_POST['sam_info'] : '';
	$comment_statistical_info = isset($_POST['comment_statistical_info']) ? $_POST['comment_statistical_info'] : '';

	// $sam_portal = isset($_POST['sam_portal']) ? $_POST['sam_portal'] : '';
	$comment_statistical_portal = isset($_POST['comment_statistical_portal']) ? $_POST['comment_statistical_portal'] : '';

	// $sam_level = isset($_POST['sam_level']) ? $_POST['sam_level'] : '';
	$comment_satisfaction_level = isset($_POST['comment_satisfaction_level']) ? $_POST['comment_satisfaction_level'] : '';

	// $sam_according = isset($_POST['sam_according']) ? $_POST['sam_according'] : '';
	$coment_geostat_according = isset($_POST['coment_geostat_according']) ? $_POST['coment_geostat_according'] : '';

	$performed = isset($_POST['performed']) ? $_POST['performed'] : '';
	$coment_performed = isset($_POST['coment_performed']) ? $_POST['coment_performed'] : '';

	$provided_by = isset($_POST['provided_by']) ? $_POST['provided_by'] : '';
	// $reason_for_not = isset($_POST['reason_for_not']) ? $_POST['reason_for_not'] : '';
	$reason_for_not = isset($_POST['reason_for_not']) ? implode(',', $_POST['reason_for_not']) : '';
	$coment16_1 = isset($_POST['coment16_1']) ? $_POST['coment16_1'] : '';

	$gender_statistics = isset($_POST['gender_statistics']) ? $_POST['gender_statistics'] : '';

	// $sam_offered = isset($_POST['sam_offered']) ? $_POST['sam_offered'] : '';
	$coment_products_offered = isset($_POST['coment_products_offered']) ? $_POST['coment_products_offered'] : '';

	// $sam_offered1 = isset($_POST['sam_offered1']) ? $_POST['sam_offered1'] : '';
	$coment_different_fields = isset($_POST['coment_different_fields']) ? $_POST['coment_different_fields'] : '';

	// $sam_fields1 = isset($_POST['sam_fields1']) ? $_POST['sam_fields1'] : '';
	// $sam_fields2 = isset($_POST['sam_fields2']) ? $_POST['sam_fields2'] : '';

	$fields18 = isset($_POST['fields18']) ? $_POST['fields18'] : '';

	// $sam_overall = isset($_POST['sam_overall']) ? $_POST['sam_overall'] : '';
	$coment_overall = isset($_POST['coment_overall']) ? $_POST['coment_overall'] : '';

	$provide21 = isset($_POST['provide21']) ? $_POST['provide21'] : '';
	$coment21_1 = isset($_POST['coment21_1']) ? $_POST['coment21_1'] : '';
	$coment22 = isset($_POST['coment22']) ? $_POST['coment22'] : '';

	$coment_overall22 = isset($_POST['coment_overall22']) ? $_POST['coment_overall22'] : '';
	$coment19 = isset($_POST['coment19']) ? $_POST['coment19'] : '';




	$sql = "INSERT INTO `am_kitxvari`(`DokID`,`organisation`, `email`, `sqesi`, `asaki`, `activity`,
			`literacy`,  `information_published`, `information`, `coment6_1`,
			`did_you_use_gender`, `website`, `visit`, `activities`, `coment10`, `sam_info`,
			`comment_statistical_info`, `sam_portal`, `comment_statistical_portal`,
			`sam_level`, `comment_satisfaction_level`, `sam_according`,
			`coment_geostat_according`, `performed`, `coment_performed`,
			`provided_by`, `reason_for_not`, `coment16_1`, `gender_statistics`, `sam_offered`,
			`coment_products_offered`, `sam_offered1`, `coment_different_fields`,
			`sam_fields1`, `coment19`, `sam_fields2`, `fields18`,  `sam_overall`, `coment_overall`, 
			`sam_overall22`, `coment_overall22`,
			`provide21`, `coment21_1`, `coment22`, `date`) VALUES (
		't10,t11,t12,t13,t19,t19_1,t20,t20_1,t21,t22',
		'" . $organisation . "',
		'" . $email . "',
		'" . $sqesi . "',
		'" . $asaki . "',
		'" . $activity . "',
		'" . $literacy . "',
		
		'" . $information_published . "',
		'" . $information . "',
		'" . $coment6_1 . "',
		'" . $did_you_use_gender . "',
		'" . $website . "',
		'" . $visit . "',

		'" . $activities . "',
		'" . $coment10 . "',

		'" . $sam_info . "',
		'" . $comment_statistical_info . "',
		
		'" . $sam_portal . "',
		'" . $comment_statistical_portal . "',

		'" . $sam_level . "',
		'" . $comment_satisfaction_level . "',

		'" . $sam_according . "',
		'" . $coment_geostat_according . "',

		'" . $performed . "',
		'" . $coment_performed . "',

		'" . $provided_by . "',
		'" . $reason_for_not . "',
		'" . $coment16_1 . "',
		'" . $gender_statistics . "',

		'" . $sam_offered . "',
		'" . $coment_products_offered . "',

		'" . $sam_offered1 . "',
		'" . $coment_different_fields . "',

		'" . $sam_fields1 . "',
		'" . $coment19 . "',
		'" . $sam_fields2 . "',

		'" . $fields18 . "',
		'" . $sam_overall . "',
		'" . $coment_overall . "',

		'" . $sam_overall22 . "',
		'" . $coment_overall22 . "',

		'" . $provide21 . "',
		'" . $coment21_1 . "',
		'" . $coment22 . "',
		'" . date('Y-m-d h:i:s') . "'
	)";

	$result1 = mysqli_query($con, $sql);

	if ($result1) {
		header('location:' . 'main.php?lang=' . $language . '&filled=true');
		exit();
	}

	// echo mysqli_error();
	exit();
}
