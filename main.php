<?php
include 'insertphp.php';

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo $lang["mintitle"]; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<script src="script1.js"></script>

	<style type="text/css">
		#shws,
		#gender_statistics_show,
		/* #tabl11,
		#tabl12,
		#tabl13,
		#tabl14,
		#tabl20,
		#tabl21,
		#tabl22, */
		#information,
		#visit,
		/* #activities, */
		#coment10,
		#coment6_1,
		#comment11_1,
		#comment12_1,
		#comment13_1,
		#comment14_1,
		#comment15_1,
		#reason_for_not16_1,
		#coment16_1,
		#votegeostat18_1,
		#comment18_2,
		#coment19,
		#votegeostat19_1,
		#comment19_2,
		#comment20_1,
		#comment21_1,
		#comment22,
		#comment22_1,
		#buton {
			display: none;
		}

		#b {
			color: #000000;
			font-size: 13px;
		}

		/* body{
			color: #4d4d4d;
		} */

		/* #scr1 {
			position: fixed;
			bottom: 560px;
			right: 20px;
			background-color: DodgerBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
		}

		#scr1:hover {
			background-color: RoyalBlue;
		} */
	</style>
	<!-- 
	<script>
		function scrol() {
			// horizont, vertikal
			window.scrollTo(0, 100000);
		}
	</script> -->
</head>

<body>

	<!-- <button id="scr1" onclick="scrol()" type="button" class="btn btn-primary">scrol finish</button> -->


	<div class="container-fluid">
		<div class="container">
			<div class="row px-3 bg-white pt-3 pb-1">
				<div class="col-md-4 text-left">
					<a class="navbar-brand" href="main.php?lang=<?php echo $language; ?>">
						<img src="img/<?php echo $language; ?>.svg" alt="geostat" class="logo">
					</a>
				</div>
				<div class="col-md-5 text-center title mt-3">
					<h6 style="font-family: <?php echo $lang["fonts"]; ?>"><?php echo $lang["maintitle"]; ?></h6>
				</div>
				<div class="col-md-3 text-right pt-3">
					<?php
					if ($language == "en") {
					?>
						<a id="lang_ka" href="main.php?lang=ka"><button type="button" class="btn btn-outline-light btn-sm"><img src="img/ka.png"></button></a>
					<?php
					} else {
					?>
						<a id="lang_en" href="main.php?lang=en"><button type="button" class="btn btn-outline-light btn-sm"><img src="img/en.png"></button></a>
					<?php
					}
					?>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-12" style="text-align: justify;">
					<?php
					if (isset($_GET['filled'])) {
					?>
						<div class="alert alert-success text-center my-5" role="alert" style="font-family: <?php echo $lang["fonts"]; ?>">
							<?php echo $lang["thanks"]; ?>
						</div>
					<?php
					} else {
					?>

						<p style="font-size: 14px; text-indent: 50px; font-family: <?php echo $lang["fonts"]; ?>"> <?php echo $lang["Dear"]; ?></p>
						<p style="font-size: 14px; text-indent: 50px; font-family: <?php echo $lang["fonts"]; ?>"> <?php echo $lang["secondtitle"]; ?></p>
						<p style="font-size: 14px; text-indent: 50px; font-family: <?php echo $lang["fonts"]; ?>"> <?php echo $lang["thirdtitle"]; ?></p>
						<p style="font-size: 14px; text-indent: 50px; font-family: <?php echo $lang["fonts"]; ?>"> <?php echo $lang["fourthtitle"]; ?></p>
						<p style="font-size: 14px; font-family: <?php echo $lang["fonts"]; ?>"> <i><?php echo $lang["Please_note"]; ?></i></p>

						<h6 style="text-align: center; font-family: <?php echo $lang["fonts"]; ?>;"> <b><?php echo $lang["General_informaton"]; ?></b></h6>

					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>


	<!-- --------------------------------------body -->
	<?php
	if (!isset($_GET['filled'])) {
	?>
		<div class="container bg-white">
			<form action="" method="post" class="py-4">
				<!-- ----------- -->
				<div class="row my-4" id="Organisation ">
					<div class="col-md-3 collstyle">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>"> <?php echo $lang["Organisation"]; ?></h5>
					</div>
					<div class="col-md-4 d-flex" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
						<input id="organisation" type="text" class="form-control" name="organisation" placeholder="<?php echo $lang["Enter_Organisation"]; ?>">
					</div>
				</div>


				<div class="row my-4" id="Email ">
					<div class="col-md-3 collstyle">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>"> <?php echo $lang["Email"]; ?></h5>
					</div>
					<div class="col-md-4 d-flex" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
						<input type="email" class="form-control" name="email" placeholder="<?php echo $lang["Enter_Email"]; ?>">
					</div>
				</div>

				<!-- ------------- -->
				<div class="row my-4" id="sqesi">
					<div class="col-md-3 collstyle">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>">1. <?php echo $lang["gender"]; ?></h5>
					</div>
					<div class="col-md-2 d-flex" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
						<?php
						$sql = "SELECT * FROM sqesi";
						$sqesi = mysqli_query($con, $sql);

						while ($sqesiArr = mysqli_fetch_array($sqesi)) {
						?>
							<div class="custom-control custom-radio mr-5">
								<input type="radio" class="custom-control-input" id="sqesi-<?php echo $sqesiArr["ID"]; ?>" name="sqesi" value="<?php echo $sqesiArr["ID"]; ?>">
								<label class="custom-control-label" for="sqesi-<?php echo $sqesiArr["ID"]; ?>">
									<?php echo $sqesiArr["name_" . $language]; ?></label>
							</div>
						<?php
						}
						?>
					</div>
				</div>


				<div class="row my-4" id="asaki">
					<div class="col-md-3 collstyle">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>">2. <?php echo $lang["Age"]; ?></h5>
					</div>
					<div class="col-md-4">
						<select class="browser-default custom-select" name="asaki" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
							<option value="" disabled selected><?php echo $lang["select"]; ?></option>
							<?php
							$sql = "SELECT * FROM asaki";
							$asaki = mysqli_query($con, $sql);

							while ($asakiArr = mysqli_fetch_array($asaki)) {
							?>
								<option value="<?php echo $asakiArr["ID"]; ?>"><?php echo $asakiArr["name_" . $language]; ?></option>
							<?php
							}
							?>
						</select>
					</div>
				</div>


				<div class="row my-4" id="activity">
					<div class="col-md-3 collstyle">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>">3. <?php echo $lang["Fieldofactivity"]; ?></h5>
					</div>
					<div class="col-md-4">
						<select class="browser-default custom-select" name="activity" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
							<option value="" disabled selected><?php echo $lang["select"]; ?></option>
							<?php
							$sql = "SELECT * FROM field_of_activity";
							$activity = mysqli_query($con, $sql);

							while ($activityArr = mysqli_fetch_array($activity)) {
							?>
								<option value="<?php echo $activityArr["ID"]; ?>"><?php echo $activityArr["name_" . $language]; ?></option>
							<?php
							}
							?>
						</select>
					</div>
				</div>
				<!-- ---------------------------------------------------- -->

				<div class="row my-4" id="literacy" style="display: none;">
					<div class="col-md-3 collstyle">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>">4. <?php echo $lang["question4"]; ?> </h5>
					</div>

					<div class="col-md-4">
						<select class="browser-default custom-select" name="literacy" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
							<option value="" disabled selected><?php echo $lang["select"]; ?></option>
							<?php
							$sql = "SELECT * FROM evaluate_your"; // თეიბლი წაშლილია
							$literacy = mysqli_query($con, $sql);

							while ($literacyArr = mysqli_fetch_array($literacy)) {
							?>
								<option value="<?php echo $literacyArr["ID"]; ?>"><?php echo $literacyArr["name_" . $language]; ?></option>
							<?php
							}
							?>
						</select>
					</div>

				</div>


				<div class="row my-4" id="information_published">
					<div class="col-md-3 collstyle">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>">4. <?php echo $lang["question4"]; ?> </h5>
					</div>

					<div class="col-md-2 d-flex" data-toggle="tooltip" data-placement="	right" title="<?php echo $lang["required"]; ?>">
						<?php
						$sql = "SELECT * FROM yes_no";
						$information_published = mysqli_query($con, $sql);

						while ($information_published_Arr = mysqli_fetch_array($information_published)) {
						?>
							<div class="custom-control custom-radio mr-5">
								<input type="radio" class="custom-control-input information_published" id="information_published-<?php echo $information_published_Arr["ID"]; ?>" name="information_published" value="<?php echo $information_published_Arr["ID"]; ?>">
								<label class="custom-control-label" for="information_published-<?php echo $information_published_Arr["ID"]; ?>"><?php echo $information_published_Arr["name_" . $language]; ?></label>
							</div>
						<?php
						}
						?>
					</div>

				</div>


				<div class="row my-4" id="information">
					<div class="col-md-9">
						<h5 style="font-family: <?php echo $lang["fonts"]; ?>">4.1. <?php echo $lang["question4_1"]; ?> </h5>
					</div>

					<div class="col-md-9">
						<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
						<table class="table table-bordered table-hover custom-radio">
							<?php
							$sql = "SELECT * FROM chapter5_1";
							$information = mysqli_query($con, $sql);

							while ($informationArr = mysqli_fetch_array($information)) {
							?>
								<tr class="other6_1">
									<th><?php echo $informationArr["name_" . $language]; ?> </th>
									<td><input type="radio" name="information" id="<?php echo $informationArr["ID"]; ?>" value="<?php echo $informationArr["ID"]; ?>"></td>
								</tr>
							<?php
							}
							?>
						</table>
					</div>
				</div>

				<div class="row my-4" id="coment6_1">
					<div class="col-md-9">
						<textarea class="form-control text6_1" rows="4" name="coment6_1" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
					</div>
				</div>


				<div id="shws">

					<div class="row my-4" id="use_gender" style="display: none;">
						<div class="col-md-3 collstyle">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">5. <?php echo $lang["question5"]; ?> </h5>
						</div>

						<div class="col-md-4">
							<select class="browser-default custom-select" name="did_you_use_gender" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
								<option value="" disabled selected><?php echo $lang["select"]; ?></option>
								<?php
								$sql = "SELECT * FROM did_you_use_gender"; // თეიბლი წაშლილია 
								$use_gender = mysqli_query($con, $sql);

								while ($use_genderArr = mysqli_fetch_array($use_gender)) {
								?>
									<option value="<?php echo $use_genderArr["ID"]; ?>"><?php echo $use_genderArr["name_" . $language]; ?></option>
								<?php
								}
								?>
							</select>
						</div>

					</div>


					<div class="row my-4" id="website">
						<div class="col-md-3 collstyle">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">5. <?php echo $lang["question5"]; ?> </h5>
						</div>

						<div class="col-md-4">
							<select class="browser-default custom-select" name="website" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
								<option value="" disabled selected><?php echo $lang["select"]; ?></option>
								<?php
								$sql = "SELECT * FROM website_during";
								$website = mysqli_query($con, $sql);

								while ($websiteArr = mysqli_fetch_array($website)) {
								?>
									<option value="<?php echo $websiteArr["ID"]; ?>"><?php echo $websiteArr["name_" . $language]; ?></option>
								<?php
								}
								?>
							</select>
						</div>

					</div>


					<div class="row my-4" id="visit" style="display: none;">
						<div class="col-md-9 collstyle">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">8. <?php echo $lang["question8"]; ?> </h5>
						</div>

						<div class="col-md-9 ">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover ">
								<?php
								$sql = "SELECT * FROM visit_geostat"; // თეიბლი წაშლილია
								$visit = mysqli_query($con, $sql);

								while ($visitArr = mysqli_fetch_array($visit)) {
								?>
									<tr>
										<th><?php echo $visitArr["name_" . $language]; ?></th>
										<td><input type="checkbox" name="visit[]" value="<?php echo $visitArr["ID"]; ?>"></td>
									</tr>
								<?php
								}
								?>
							</table>
						</div>

					</div>


					<div class="row my-4" id="activities">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">6. <?php echo $lang["question6"]; ?> </h5>
						</div>

						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<?php
								$sql = "SELECT * FROM form_activities";
								$activities = mysqli_query($con, $sql);

								while ($activitiesArr = mysqli_fetch_array($activities)) {
								?>
									<tr class="other10" id="nin<?php echo $activitiesArr["ID"]; ?>">
										<th><?php echo $activitiesArr["name_" . $language]; ?></th>
										<td><input type="checkbox" name="activities[]" id="<?php echo $activitiesArr["ID"]; ?>" value="<?php echo $activitiesArr["ID"]; ?>"></td>
									</tr>
								<?php
								}
								?>
							</table>
						</div>
					</div>

					<div class="row my-4" id="coment10">
						<div class="col-md-9">
							<textarea class="form-control text10" rows="4" name="coment10" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>


					<!-- --------------------- -->

					<div class="row my-4" id="tabl10">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">7. <?php echo $lang["question7"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover" id="table11">
								<thead>
									<tr>
										<th scope="col"><?php echo $lang["Fieldofstatical"]; ?></th>
										<?php
										$sql = "SELECT * FROM th_statistical_info";
										$statistical_info1 = mysqli_query($con, $sql);

										while ($statistical_infoArr1 = mysqli_fetch_array($statistical_info1)) {
										?>
											<th scope="col"><?php echo $statistical_infoArr1["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_statistical_info";
									$statistical_info = mysqli_query($con, $sql);

									while ($statistical_infoArr = mysqli_fetch_array($statistical_info)) {
									?>
										<tr class="table11">
											<th><?php echo $statistical_infoArr["name_" . $language]; ?></th>
											<td><input id="a1" type="radio" name="statistical_info[<?php echo $statistical_infoArr["ID"]; ?>]" value="1"></td>
											<td><input id="a2" type="radio" name="statistical_info[<?php echo $statistical_infoArr["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="statistical_info[<?php echo $statistical_infoArr["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="statistical_info[<?php echo $statistical_infoArr["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="statistical_info[<?php echo $statistical_infoArr["ID"]; ?>]" value="5"></td>
											<td><input type="radio" name="statistical_info[<?php echo $statistical_infoArr["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<!-- <div class="row my-4" id="comment11_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">10.1. <?php echo $lang["question10_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text11_1" rows="4" name="comment_statistical_info" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>


					<div class="row my-4" id="comment12_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">11.1. <?php echo $lang["question11_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text12_1" rows="4" name="comment_statistical_portal" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div> -->


					<div class="row my-4" id="tabl8">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">8. <?php echo $lang["question8"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_satisfaction_level";
										$satisfaction_level1 = mysqli_query($con, $sql);

										while ($satisfaction_levelArr1 = mysqli_fetch_array($satisfaction_level1)) {
										?>
											<th scope="col"><?php echo $satisfaction_levelArr1["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_satisfaction_level";
									$satisfaction_level = mysqli_query($con, $sql);

									while ($satisfaction_levelArr = mysqli_fetch_array($satisfaction_level)) {
									?>
										<tr class="table13">
											<th><?php echo $satisfaction_levelArr["name_" . $language]; ?></th>
											<td><input id="c1" type="radio" name="satisfaction_level[<?php echo $satisfaction_levelArr["ID"]; ?>]" value="1"></td>
											<td><input id="c2" type="radio" name="satisfaction_level[<?php echo $satisfaction_levelArr["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="satisfaction_level[<?php echo $satisfaction_levelArr["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="satisfaction_level[<?php echo $satisfaction_levelArr["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="satisfaction_level[<?php echo $satisfaction_levelArr["ID"]; ?>]" value="5"></td>
											<td><input type="radio" name="satisfaction_level[<?php echo $satisfaction_levelArr["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row my-4" id="comment13_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">12.1. <?php echo $lang["question12_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text13_1" rows="4" name="comment_satisfaction_level" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>

					<div class="row my-4" id="tabl9">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">9. <?php echo $lang["question9"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th scope="col"><?php echo $lang["Portal"]; ?></th>
										<?php
										$sql = "SELECT * FROM th_statistical_portal";
										$statistical_portal1 = mysqli_query($con, $sql);

										while ($statistical_portalArr1 = mysqli_fetch_array($statistical_portal1)) {
										?>
											<th scope="col"><?php echo $statistical_portalArr1["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_statistical_portal";
									$statistical_portal = mysqli_query($con, $sql);

									while ($statistical_portalArr = mysqli_fetch_array($statistical_portal)) {
									?>
										<tr class="table12">
											<th><?php echo $statistical_portalArr["name_" . $language]; ?></th>
											<td><input id="b1" type="radio" name="statistical_portal[<?php echo $statistical_portalArr["ID"]; ?>]" value="1"></td>
											<td><input id="b2" type="radio" name="statistical_portal[<?php echo $statistical_portalArr["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="statistical_portal[<?php echo $statistical_portalArr["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="statistical_portal[<?php echo $statistical_portalArr["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="statistical_portal[<?php echo $statistical_portalArr["ID"]; ?>]" value="5"></td>
											<td><input type="radio" name="statistical_portal[<?php echo $statistical_portalArr["ID"]; ?>]" value="6"></td>
											<td><input type="radio" name="statistical_portal[<?php echo $statistical_portalArr["ID"]; ?>]" value="7"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>


					<div class="row my-4" id="tabl13">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">10. <?php echo $lang["question10"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_geostat_according";
										$geostat_according1 = mysqli_query($con, $sql);

										while ($geostat_accordingArr1 = mysqli_fetch_array($geostat_according1)) {
										?>
											<th scope="col"><?php echo $geostat_accordingArr1["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_geostat_according";
									$geostat_according = mysqli_query($con, $sql);

									while ($geostat_accordingArr = mysqli_fetch_array($geostat_according)) {
									?>
										<tr class="table14">
											<th><?php echo $geostat_accordingArr["name_" . $language]; ?></th>
											<td><input id="d1" type="radio" name="geostat_according[<?php echo $geostat_accordingArr["ID"]; ?>]" value="1"></td>
											<td><input id="d2" type="radio" name="geostat_according[<?php echo $geostat_accordingArr["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="geostat_according[<?php echo $geostat_accordingArr["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="geostat_according[<?php echo $geostat_accordingArr["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="geostat_according[<?php echo $geostat_accordingArr["ID"]; ?>]" value="5"></td>
											<td><input type="radio" name="geostat_according[<?php echo $geostat_accordingArr["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<!-- <div class="row my-4" id="comment14_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">13.1. <?php echo $lang["question13_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text14_1" rows="4" name="coment_geostat_according" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div> -->

					<!-- ------------------------------------------------------ -->
					<div class="row my-4" id="tabl11">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">11. <?php echo $lang["question11"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<?php
										$sql = "SELECT * FROM th_performed";
										$performed1 = mysqli_query($con, $sql);

										while ($performedArr1 = mysqli_fetch_array($performed1)) {
										?>
											<th scope="col"><?php echo $performedArr1["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<tr class="table15">
										<?php
										$sql = "SELECT * FROM th_performed";
										$performed = mysqli_query($con, $sql);

										while ($performedArr = mysqli_fetch_array($performed)) {
										?>
											<td>
												<input type="radio" class="year_geostat_quality" name="performed" id="<?php echo $performedArr["ID"]; ?>" value="<?php echo $performedArr["ID"]; ?>">
											</td>
										<?php
										}
										?>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row my-4" id="comment12">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">12. <?php echo $lang["comment"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text15_1" rows="4" name="coment_performed" placeholder="<?php echo $lang['comment']; ?>"></textarea>
						</div>
					</div>

					<!-- <div class="row my-4" id="comment15_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">14.1. <?php echo $lang["question14_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text15_1" rows="4" name="coment_performed" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div> -->

					<!-- -------------------- --------------------->
					<div class="row my-4" style="display: none;" >
						<div class="col-md-9">
							<h6 style="text-align: center; font-family: <?php echo $lang["fonts"]; ?>"> <b><?php echo $lang["Specific_questions"]; ?></b></h6>
						</div>
					</div>


					<div class="row my-4" id="gender_statistics" style="display: none;" >
						<div class="col-md-3 collstyle">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">15. <?php echo $lang["question15"]; ?> </h5>
						</div>

						<div class="col-md-4">
							<select class="browser-default custom-select" name="gender_statistics" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
								<option value="" disabled selected><?php echo $lang["select"]; ?></option>
								<?php
								$sql = "SELECT * FROM did_you_use_gender15";
								$gender_statistics = mysqli_query($con, $sql);

								while ($gender_statisticsArr = mysqli_fetch_array($gender_statistics)) {
								?>
									<option value="<?php echo $gender_statisticsArr["ID"]; ?>"><?php echo $gender_statisticsArr["name_" . $language]; ?></option>
								<?php
								}
								?>
							</select>
						</div>

					</div>


					<!-- <div class="row my-4" id="provided_by">  // კითხვები აღარ გრძელდება, ERROR არის სავარაუდოდ თეიბლის წაშლის გამო
						<div class="col-md-3 collstyle">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">16. <?php echo $lang["question16"]; ?> </h5>
						</div>
						<div class="col-md-2 d-flex">
							<?php
							$sql = "SELECT * FROM yes_no";
							$provided_by = mysqli_query($con, $sql);

							while ($provided_byArr = mysqli_fetch_array($provided_by)) {
							?>
								<div class="custom-control custom-radio mr-5 ">
									<input type="radio" class="custom-control-input provided_by" id="provided_by-<?php echo $provided_byArr["ID"]; ?>" name="provided_by" value="<?php echo $provided_byArr["ID"]; ?>">

									<label class="custom-control-label" for="provided_by-<?php echo $provided_byArr["ID"]; ?>"><?php echo $provided_byArr["name_" . $language]; ?>
									</label>
								</div>
							<?php
							}
							?>
						</div>
					</div> -->

					<div class="row my-4" id="reason_for_not16_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">17. <?php echo $lang["question17"]; ?> </h5>
						</div>

						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover custom-radio">
								<?php
								$sql = "SELECT * FROM reason_for_not";
								$reason_for_not = mysqli_query($con, $sql);

								while ($reason_for_notArr = mysqli_fetch_array($reason_for_not)) {
								?>
									<tr class="other16_1" id="seven<?php echo $reason_for_notArr["ID"]; ?>">
										<th><?php echo $reason_for_notArr["name_" . $language]; ?></th>
										<td><input type="checkbox" name="reason_for_not[]" id="<?php echo $reason_for_notArr["ID"]; ?>" value="<?php echo $reason_for_notArr["ID"]; ?>"></td>
									</tr>
								<?php
								}
								?>
							</table>
						</div>
					</div>

					<div class="row my-4" id="coment16_1">
						<div class="col-md-9">
							<textarea class="form-control text16_1" rows="4" name="coment16_1" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>


					<!-- ----------------------------------16 -->
				</div>
				<div id="gender_statistics_show">
					<div class="row my-4" id="gender_statistics18">
						<div class="col-md-3 collstyle">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">18. <?php echo $lang["question18"]; ?> </h5>
						</div>

						<div class="col-md-4">
							<select class="browser-default custom-select" name="fields18" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
								<option value="" disabled selected><?php echo $lang["select"]; ?></option>
								<?php
								$sql = "SELECT * FROM did_you_use_gender";
								$gender_statistics18 = mysqli_query($con, $sql);

								while ($gender_statisticsArr18 = mysqli_fetch_array($gender_statistics18)) {
								?>
									<option value="<?php echo $gender_statisticsArr18["ID"]; ?>"><?php echo $gender_statisticsArr18["name_" . $language]; ?></option>
								<?php
								}
								?>
							</select>
						</div>

					</div>

					<!-- ------------------------------------------------------- -->

					<div class="row my-4" id="tabl19">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">19. <?php echo $lang["question19"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_products_offered";
										$products_offered1 = mysqli_query($con, $sql);

										while ($products_offeredArr1 = mysqli_fetch_array($products_offered1)) {
										?>
											<th scope="col"><?php echo $products_offeredArr1["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_products_offered";
									$products_offered = mysqli_query($con, $sql);

									while ($products_offeredArr = mysqli_fetch_array($products_offered)) {
									?>
										<tr class="table18" id="ge<?php echo $products_offeredArr["ID"]; ?>">

											<th><?php echo $products_offeredArr["name_" . $language]; ?></th>
											<td><input type="radio" name="products_offered[<?php echo $products_offeredArr["ID"]; ?>]" value="1"></td>
											<td><input type="radio" name="products_offered[<?php echo $products_offeredArr["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="products_offered[<?php echo $products_offeredArr["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="products_offered[<?php echo $products_offeredArr["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="products_offered[<?php echo $products_offeredArr["ID"]; ?>]" value="5"></td>
											<td><input id="6" type="radio" name="products_offered[<?php echo $products_offeredArr["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row my-4" id="coment19">
						<div class="col-md-9">
							<textarea class="form-control text19" rows="4" name="coment19" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>


					<div class="row my-4" id="votegeostat18_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">19.1. <?php echo $lang["question19_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_products_offered1";
										$products_offered2 = mysqli_query($con, $sql);

										while ($products_offeredArr2 = mysqli_fetch_array($products_offered2)) {
										?>
											<th scope="col"><?php echo $products_offeredArr2["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_products_offered1";
									$products_offered3 = mysqli_query($con, $sql);

									while ($products_offeredArr3 = mysqli_fetch_array($products_offered3)) {
									?>
										<tr class="table18_1" id="ni<?php echo $products_offeredArr3["ID"]; ?>">

											<th><?php echo $products_offeredArr3["name_" . $language]; ?></th>
											<td><input id="e1" type="radio" name="products_offered3[<?php echo $products_offeredArr3["ID"]; ?>]" value="1"></td>
											<td><input id="e2" type="radio" name="products_offered3[<?php echo $products_offeredArr3["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="products_offered3[<?php echo $products_offeredArr3["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="products_offered3[<?php echo $products_offeredArr3["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="products_offered3[<?php echo $products_offeredArr3["ID"]; ?>]" value="5"></td>
											<td><input type="radio" name="products_offered3[<?php echo $products_offeredArr3["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>


					<div class="row my-4" id="comment18_2">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">19.2. <?php echo $lang["question19_2"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text18_2" rows="4" name="coment_products_offered" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>



					<div class="row my-4" id="tabl20">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">20. <?php echo $lang["question20"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_different_fields";
										$different_fields = mysqli_query($con, $sql);

										while ($different_fieldsArr = mysqli_fetch_array($different_fields)) {
										?>
											<th scope="col"><?php echo $different_fieldsArr["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_different_fields";
									$different_fields1 = mysqli_query($con, $sql);

									while ($different_fieldsArr1 = mysqli_fetch_array($different_fields1)) {
									?>
										<tr class="table19" id="go<?php echo $different_fieldsArr1["ID"]; ?>">
											<th><?php echo $different_fieldsArr1["name_" . $language]; ?></th>

											<td><input id="1" type="radio" name="different_fields1[<?php echo $different_fieldsArr1["ID"]; ?>]" value="1"></td>
											<td><input id="2" type="radio" name="different_fields1[<?php echo $different_fieldsArr1["ID"]; ?>]" value="2"></td>
											<td><input id="3" type="radio" name="different_fields1[<?php echo $different_fieldsArr1["ID"]; ?>]" value="3"></td>
											<td><input id="4" type="radio" name="different_fields1[<?php echo $different_fieldsArr1["ID"]; ?>]" value="4"></td>
											<td><input id="5" type="radio" name="different_fields1[<?php echo $different_fieldsArr1["ID"]; ?>]" value="5"></td>
											<td><input id="6" type="radio" name="different_fields1[<?php echo $different_fieldsArr1["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row my-4" id="votegeostat19_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">20.1. <?php echo $lang["question20_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_different_fields1";
										$different_fields2 = mysqli_query($con, $sql);

										while ($different_fieldsArr2 = mysqli_fetch_array($different_fields2)) {
										?>
											<th scope="col"><?php echo $different_fieldsArr2["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_different_fields1";
									$different_fields3 = mysqli_query($con, $sql);

									while ($different_fieldsArr4 = mysqli_fetch_array($different_fields3)) {
									?>
										<tr class="table19_1" id="ri<?php echo $different_fieldsArr4["ID"]; ?>">
											<th><?php echo $different_fieldsArr4["name_" . $language]; ?></th>

											<td><input id="f1" type="radio" name="different_fields3[<?php echo $different_fieldsArr4["ID"]; ?>]" value="1"></td>
											<td><input id="f2" type="radio" name="different_fields3[<?php echo $different_fieldsArr4["ID"]; ?>]" value="2"></td>
											<td><input id="3" type="radio" name="different_fields3[<?php echo $different_fieldsArr4["ID"]; ?>]" value="3"></td>
											<td><input id="4" type="radio" name="different_fields3[<?php echo $different_fieldsArr4["ID"]; ?>]" value="4"></td>
											<td><input id="5" type="radio" name="different_fields3[<?php echo $different_fieldsArr4["ID"]; ?>]" value="5"></td>
											<td><input id="6" type="radio" name="different_fields3[<?php echo $different_fieldsArr4["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row my-4" id="comment19_2">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">20.2. <?php echo $lang["question20_2"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text19_2" rows="4" name="coment_different_fields" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>


					<!-- ----------------- -->
					<div class="row my-4" id="tabl21">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">21. <?php echo $lang["question21"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_overall";
										$overall = mysqli_query($con, $sql);

										while ($overallArr = mysqli_fetch_array($overall)) {
										?>
											<th scope="col"><?php echo $overallArr["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_overall";
									$overall1 = mysqli_query($con, $sql);

									while ($overall1Arr = mysqli_fetch_array($overall1)) {
									?>
										<tr class="table20">
											<th><?php echo $overall1Arr["name_" . $language]; ?></th>
											<td><input id="g1" type="radio" name="overall1[<?php echo $overall1Arr["ID"]; ?>]" value="1"></td>
											<td><input id="g2" type="radio" name="overall1[<?php echo $overall1Arr["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="overall1[<?php echo $overall1Arr["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="overall1[<?php echo $overall1Arr["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="overall1[<?php echo $overall1Arr["ID"]; ?>]" value="5"></td>
											<td><input type="radio" name="overall1[<?php echo $overall1Arr["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row my-4" id="comment20_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">21.1. <?php echo $lang["question21_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text20_1" rows="4" name="coment_overall" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>

					<div class="row my-4" id="tabl22">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">22. <?php echo $lang["question22"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<div class="error invalid-feedback alert alert-danger p-1 text-center mt-1"><?php echo $lang["required"]; ?></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<!-- <th scope="col"></th> -->
										<?php
										$sql = "SELECT * FROM th_overall22";
										$overall = mysqli_query($con, $sql);

										while ($overallArr = mysqli_fetch_array($overall)) {
										?>
											<th scope="col"><?php echo $overallArr["name_" . $language]; ?></th>
										<?php
										}
										?>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM tb_overall22";
									$overall22 = mysqli_query($con, $sql);

									while ($overall1Arr22 = mysqli_fetch_array($overall22)) {
									?>
										<tr class="table22">
											<th><?php echo $overall1Arr22["name_" . $language]; ?></th>
											<td><input id="h1" type="radio" name="overall22[<?php echo $overall1Arr22["ID"]; ?>]" value="1"></td>
											<td><input id="h2" type="radio" name="overall22[<?php echo $overall1Arr22["ID"]; ?>]" value="2"></td>
											<td><input type="radio" name="overall22[<?php echo $overall1Arr22["ID"]; ?>]" value="3"></td>
											<td><input type="radio" name="overall22[<?php echo $overall1Arr22["ID"]; ?>]" value="4"></td>
											<td><input type="radio" name="overall22[<?php echo $overall1Arr22["ID"]; ?>]" value="5"></td>
											<td><input type="radio" name="overall22[<?php echo $overall1Arr22["ID"]; ?>]" value="6"></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row my-4" id="comment22_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">22.1. <?php echo $lang["question22_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text22_1" rows="4" name="coment_overall22" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>


					<div class="row my-4" id="during">
						<div class="col-md-3 collstyle">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">23. <?php echo $lang["question23"]; ?> </h5>
						</div>

						<div class="col-md-4">
							<select class="browser-default custom-select" name="provide21" data-toggle="tooltip" data-placement="right" title="<?php echo $lang["required"]; ?>">
								<option value="" disabled selected><?php echo $lang["select"]; ?></option>
								<?php
								$sql = "SELECT * FROM provide21";
								$provide = mysqli_query($con, $sql);

								while ($provideArr = mysqli_fetch_array($provide)) {
								?>
									<option value="<?php echo $provideArr["ID"]; ?>"><?php echo $provideArr["name_" . $language]; ?></option>
								<?php
								}
								?>
							</select>
						</div>

					</div>


					<div class="row my-4" id="comment21_1">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">23.1. <?php echo $lang["question23_1"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text21_1" rows="4" name="coment21_1" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>


					<div class="row my-4" id="comment22">
						<div class="col-md-9">
							<h5 style="font-family: <?php echo $lang["fonts"]; ?>">24. <?php echo $lang["question24"]; ?> </h5>
						</div>
						<div class="col-md-9">
							<textarea class="form-control text22" rows="4" name="coment22" placeholder="<?php echo $lang['Please_specify']; ?>"></textarea>
						</div>
					</div>
				</div>
				<!-- -------------------- -->
				<div class="container submit-form" id="buton">
					<div class="row my-4">
						<div class="col-md-9">
							<p> <?php echo $lang["Thank_you"]; ?> </p>
						</div>
						<div class="col-md-4 offset-md-5">
							<button id="bot" disabled="disabled" type="submit" name="submit" class="btn btn-success" style="font-family: <?php echo $lang["fonts"]; ?>"><?php echo $lang["send"]; ?></button>
						</div>
					</div>
				</div>

			</form>
		</div>
	<?php
	}
	?>

</body>

</html>