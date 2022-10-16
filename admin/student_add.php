<!-- ===============================================
	**** A COMPLETE VALIDATE FORM WITH PHP ****
================================================ -->

<!-- ==============  PHP begin  =================-->

<?php

$sname = "";
$fathername = "";
$mothername = "";
$contact = "";
$email = "";
$caste = "";
$religion = "";
$address = "";
$blgroup = "";
$school = "";
$schooladdress = "";
$equalification = "";
$courseopt = "";
$gender = "";

$esname = "";
$efathername = "";
$emothername = "";
$econtact = "";
$eemail = "";
$ecaste = "";
$ereligion = "";
$eaddress = "";
$eblgroup = "";
$eschool = "";
$eschooladdress = "";
$eequalification = "";
$ecourseopt = "";
$egender = "";


if (isset($_POST['submit'])) {
	$sname = $_POST['sname'];
	$fathername = $_POST['fathername'];
	$mothername = $_POST['mothername'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$caste = $_POST['caste'];
	$religion = $_POST['religion'];
	$address = $_POST['address'];
	$blgroup = $_POST['blgroup'];
	$school = $_POST['school'];
	$schooladdress = $_POST['schooladdress'];
	$equalification = $_POST['equalification'];
	$courseopt = $_POST['courseopt'];

	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
	}

	$er = 0;

	if ($sname == "") {
		$er++;
		$esname = "*Required";
	} else {
		$sname = test_input($sname);
		if (!preg_match("/^[a-zA-Z ]*$/", $sname)) {
			$er++;
			$esname = "*Only letters and white space allowed";
		}
	}

	if ($fathername == "") {
		$er++;
		$efathername = "*Required";
	} else {
		$fathername = test_input($fathername);
		if (!preg_match("/^[a-zA-Z ]*$/", $fathername)) {
			$er++;
			$efathername = "*Only letters and white space allowed";
		}
	}

	if ($mothername == "") {
		$er++;
		$emothername = "*Required";
	} else {
		$mothername = test_input($mothername);
		if (!preg_match("/^[a-zA-Z ]*$/", $mothername)) {
			$er++;
			$emothername = "*Only letters and white space allowed";
		}
	}

	if ($contact == "") {
		$er++;
		$econtact = "*Required";
	} else {
		$contact = test_input($contact);
		if (!preg_match("/^[+0-9]*$/", $contact)) {
			$er++;
			$econtact = "*Only numbers are allowed";
		}
	}

	if ($email == "") {
		$er++;
		$eemail = "*Required";
	} else {
		$email = test_input($email);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$er++;
			$eemail = "*Email format is invalid";
		}
	}

	if ($caste == "") {
		$er++;
		$ecaste = "*Required";
	} elseif (strlen($caste) < 2) {
		$er++;
		$ecaste = "*Atleast 2 Character";
	}

	if ($religion == "") {
		$er++;
		$ereligion = "*Required";
	}


	if ($address == "") {
		$er++;
		$eaddress = "*Required";
	}

	if ($blgroup == "") {
		$er++;
		$eblgroup = "*Required";
	} elseif (strlen($blgroup) > 3) {
		$er++;
		$eblgroup = "*Not more than 3 character";
	} else {
		$blgroup = test_input($blgroup);
		if (!preg_match("/^[a-zA-Z+-]*$/", $blgroup)) {
			$er++;
			$eblgroup = "*Blood group not valid";
		}
	}

	if ($school == "") {
		$er++;
		$eschool = "*Required";
	}


	if ($schooladdress == "") {
		$er++;
		$eschooladdress = "*Required";
	}

	if ($equalification == "") {
		$er++;
		$eequalification = "*Please enter qualification";
	}

	if ($courseopt == 0) {
		$er++;
		$ceourseopt = "*Please select Division";
	}

	if (empty($gender)) {
		$er++;
		$egender = "*Gender is required";
	} else {
		$gender = test_input($gender);
	}


	if ($er == 0) {
		$cn = mysqli_connect("localhost", "root", "", "db_admission");

		$sql = "INSERT INTO `student`( `sname`, `fathername`, `mothername`, `contact`, `email`, `caste`, `religion`, `address`, `blgroup`, `school`, `schooladdress`, `equalification`, `courseopt`, `gender`) 
		VALUES (

							'" . mysqli_real_escape_string($cn, strip_tags($sname)) . "',
							'" . mysqli_real_escape_string($cn, strip_tags($fathername)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($mothername)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($contact)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($email)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($caste)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($religion)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($address)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($blgroup)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($school)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($schooladdress)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($equalification)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($courseopt)) . "', 
							'" . mysqli_real_escape_string($cn, strip_tags($gender)) . "' 
				)";

		if (mysqli_query($cn, $sql)) {
			print '<span class = "successMessage">Data saved into system.</span>';
			$sname = "";
			$fathername = "";
			$mothername = "";
			$contact = "";
			$email = "";
			$caste = "";
			$religion = "";
			$address = "";
			$blgroup = "";
			$school = "";
			$schooladdress = "";
			$equalification = "";
			$courseopt = "";
			$gender = "";
		} else {
			print '<span class= "errorMessage">' . mysqli_error($cn) . '</span>';
		}
	} else {
		print '<span class = "errorMessage">Please fill all the required fields correctly.</span>';
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//================================ PHP End =============================	
?>

<div class="form-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h3>Admission form</h3>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">

										<h5><label for="sname">Student name</label>
											<span class="error"><?php print $esname; ?></span>
										</h5>
										<p><input type="text" name="sname" value="<?php print $sname; ?>"></p>



										<h5><label for="fathername">Father name</label><span class="error">
												<?php print $efathername; ?></span></h5>
										<p><input type="text" name="fathername" value="<?php print $fathername; ?>"></p>




										<h5><label for="mothername">Mother name</label><span class="error">
												<?php print $emothername; ?></span></h5>
										<p><input type="text" name="mothername" value="<?php print $mothername; ?>"></p>




										<h5><label for="contact">Contact</label><span class="error">
												<?php print $econtact; ?></span></h5>
										<p><input type="text" name="contact" value="<?php print $contact; ?>"></p>




										<h5><label for="email">Email</label><span class="error">
												<?php print $eemail; ?></span></h5>
										<p><input type="text" name="email" value="<?php print $email; ?>"></p>




										<h5><label for="caste">Caste</label><span class="error">
												<?php print $ecaste; ?></span></h5>
										<p><input type="text" name="caste" value="<?php print $caste; ?>"></p>



										<h5><label for="religion">Religion</label><span class="error">
												<?php print $ereligion; ?></span></h5>
										<p><input type="text" name="religion" value="<?php print $religion; ?>"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">

										<h5><label for="address">Address</label><span class="error">
												<?php print $eaddress; ?></span></h5>
										<p><textarea name="address"><?php print $address; ?></textarea></p>

										<h5><label for="blgroup">blood group</label><span class="error">
												<?php print $eblgroup; ?></span></h5>
										<p><input type="text" name="blgroup" value="<?php print $blgroup; ?>"></p>

										<h5><label for="school">Previous Educational Institute/School</label><span class="error">
												<?php print $eschool; ?></span></h5>
										<p><input type="text" name="school" value="<?php print $school; ?>"></p>

										<h5><label for="schooladdress">Previous Educational Institute/School Address</label><span class="error">
												<?php print $eschooladdress; ?></span></h5>
										<p><input type="text" name="schooladdress" value="<?php print $schooladdress; ?>"></p>


										<h5><label for="equalification">Educational Qualification</label><span class="error">
												<?php print $eequalification; ?></span></h5>
										<p><input type="text" name="equalification" value="<?php print $equalification; ?>"></p>

										<h5><label for="courseopt">Course want to opt</label></h5>
										<p><select name="courseopt" id="">
												<option value="0">select</option>
												<option value="B.Tech (CSE)">B.Tech (CSE)</option>
												<option value="B.Tech (IT)">B.Tech (IT)</option>
												<option value="B.Tech (EEE)">B.Tech (EEE)</option>
												<option value="B.Tech (ECE)">B.Tech (ECE)</option>
												<option value="BCA">BCA</option>
												<option value="MCA">MCA</option>
												<option value="MBA">MBA</option>
											</select><span class="error">
												<?php print $ecourseopt; ?></span></p>


										<h5><label for="gender">Gender</label></h5>
										<input type="radio" name="gender" value="male"><span>Male</span>
										<input type="radio" name="gender" value="female"><span>Female</span>
										<input type="radio" name="gender" value="other"><span>Others</span>
										<span class="error">
											<?php print $egender; ?></span>

										<p><input type="submit" name="submit" value="Submit"></p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>