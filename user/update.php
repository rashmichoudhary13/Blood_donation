<?php 
	
	include 'include/header.php';

   if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))

	

	$sql = "SELECT * FROM donor WHERE id=" .$_SESSION['user_id'];

      $result = mysqli_query($connection,$sql);

      if(mysqli_num_rows($result)>0){

		while($row = mysqli_fetch_assoc($result)){
		
			$name = $row['name'];
			$blood_group = $row['blood_group'];
			$gender = $row['gender'];
			$email = $row['email'];
			$contact = $row['contact_no'];
			$city = $row['city'];

			$dob = $row['dob'];

			$date = explode("-", $dob);
		
		}
	  }

	  if (isset($_POST['submit'])) {
		
	
			// Check for name
			if (isset($_POST['name']) && !empty($_POST['name'])) {
				if (preg_match('/^[A-Za-z\s]+$/', $_POST['name'])) {
					$name = $_POST['name'];
				} else {
					$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Only lower and upper case and space characters are allowed.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
				}
			} else {
				$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please fill the name field.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
	
			// Check for gender
			if (isset($_POST['gender']) && !empty($_POST['gender'])) {
				$gender = $_POST['gender'];
			} else {
				$genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please select gender input.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
	
			// Check for date of birth
			if (isset($_POST['day']) && !empty($_POST['day'])) {
				$day = $_POST['day'];
			} else {
				$dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please select date input.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
			if (isset($_POST['month']) && !empty($_POST['month'])) {
				$month = $_POST['month'];
			} else {
				$monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please select month input.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
			if (isset($_POST['year']) && !empty($_POST['year'])) {
				$year = $_POST['year'];
			} else {
				$yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please select year input.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
	
			// Check for blood group 
			if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
				$blood_group = $_POST['blood_group'];
			} else {
				$bloodError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please select blood_Group input.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
	
			// Check for City
			if (isset($_POST['city']) && !empty($_POST['city'])) {
				if (preg_match('/^[A-Za-z\s]+$/', $_POST['city'])) {
					$city = $_POST['city'];
				} else {
					$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Only lower and upper case and space characters are allowed.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
				}
			} else {
				$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please fill the city field.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
	
			// Check for contact_no
			if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
				if (preg_match('/^\d{10}$/', $_POST['contact_no'])) {
					$contact = $_POST['contact_no'];
				} else {
					$contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Contact must consist 10 digit.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
				}
			} else {
				$contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please fill the Contact field.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
	
			// Check for Email
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
				if (preg_match($pattern, $_POST['email'])) {
					$check_email = $_POST['email'];
					$sql = "SELECT email FROM donor WHERE email ='$check_email'";
					$result = mysqli_query($connection, $sql);
	
					if (mysqli_num_rows($result) > 0) {
						$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
						<strong>Sorry, This email already exist.</strong> 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
					} else {
						$email = $_POST['email'];
					}
				} else {
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please enter valid email address.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
				}
			} else {
				$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
		   <strong>Please fill the email field.</strong> 
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		   <span aria-hidden="true">&times;</span>
		   </button>
		   </div>';
			}
	
			
	
			// Insert data into database
	
			if (isset($name) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($blood_group) && isset($city) && isset($contact) && isset($email)) {
				$DonorDOB = $year . "-" . $month . "-" . $day;
	
				
	
				$sql = "UPDATE donor SET name='$name',gender='$gender',email='$email',city='$city',dob='$DonorDOB',contact_no='$contact',blood_group='$blood_group' WHERE id=".$_SESSION['user_id']; 
				
				
	
				if (mysqli_query($connection, $sql)) {
					
					?>

					<script>
                         function myFunction() {
							location.reload();
							
						 }


					</script>





                 <?php

				} else {
					$updateError = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
				<strong>Data Not Updated Try again.</strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
				}
			}
			
	}

	include 'include/sidebar.php';


?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
                <?php if(isset($updateError)) echo $updateError ;?>


					<form class="form-group" action="" method="post" novalidate="">
				<div class="form-group">
					<label for="fullname">Full Name</label>
					<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if (isset($name)) echo $name; ?>">

					<?php if (isset($nameError)) echo $nameError; ?>

				</div><!--full name-->

				<div class="form-group">
					<label for="name">Blood Group</label><br>
					<select class="form-control demo-default" id="blood_group" name="blood_group" required>
						<option value="">---Select Your Blood Group---</option>
						<?php if (isset($blood_group))  echo '<option selected=""value="' . $blood_group . '">' . $blood_group . '</option>'; ?>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
				</div><!--End form-group-->
				<?php if (isset($bloodError)) echo $bloodError; ?>

				<div class="form-group">
					<label for="gender">Gender</label><br>
					Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>

					Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" <?php if (isset($gender)) {
																														if ($gender == "Female") echo "checked";
																													} ?>>

				</div><!--gender-->
				<div class="form-inline">
					<label for="name">Date of Birth</label><br>
					<select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
						<option value="">---Date---</option>
						<?php if (isset($date['2']))  echo '<option selected=""value="' . $date['2'] . '">' . $date['2']. '</option>'; ?>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
						<option value="">---Month---</option>
						<?php if (isset($date['1']))  echo '<option selected=""value="' . $date['1'] . '">' . $date['1']. '</option>'; ?>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
					<select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
						<option value="">---Year---</option>
						<?php if (isset($date['0']))  echo '<option selected=""value="' . $date['0']. '">' . $date['0'] . '</option>'; ?>
						<option value="1957">1957</option>
						<option value="1958">1958</option>
						<option value="1959">1959</option>
						<option value="1960">1960</option>
						<option value="1961">1961</option>
						<option value="1962">1962</option>
						<option value="1963">1963</option>
						<option value="1964">1964</option>
						<option value="1965">1965</option>
						<option value="1966">1966</option>
						<option value="1967">1967</option>
						<option value="1968">1968</option>
						<option value="1969">1969</option>
						<option value="1970">1970</option>
						<option value="1971">1971</option>
						<option value="1972">1972</option>
						<option value="1973">1973</option>
						<option value="1974">1974</option>
						<option value="1975">1975</option>
						<option value="1976">1976</option>
						<option value="1977">1977</option>
						<option value="1978">1978</option>
						<option value="1979">1979</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
					</select>
				</div><!--End form-group-->
				<?php if (isset($dayError)) echo $dayError; ?>
				<?php if (isset($monthError)) echo $monthError; ?>
				<?php if (isset($yearError)) echo $yearError; ?>

				<div class="form-group">
					<label for="fullname">Email</label>
					<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if (isset($email)) echo $email; ?>">
				</div>
				<?php if (isset($emailError)) echo $emailError; ?>

				<div class="form-group">
					<label for="contact_no">Contact No</label>
					<input type="text" name="contact_no" placeholder="+91**********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10" value="<?php if (isset($contact)) echo $contact; ?>">
				</div><!--End form-group-->
				<?php if (isset($contact_noError)) echo $contact_noError; ?>

				<div class="form-group">
					<label for="city">City</label>
					<select name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						<?php if (isset($city))  echo '<option selected=""value="' . $city . '">' . $city . '</option>'; ?>
						<optgroup title="Maharashtra" label="&raquo; Maharashtra"></optgroup>
						<option value="Mumbai">Mumbai</option>
						<option value="Pune">Pune</option>
						<option value="Nagpur">Nagpur</option>
						<option value="Thane">Thane</option>
						<option value="Nashik">Nashik</option>
						<option value="Aurangabad">Aurangabad</option>
						<option value="Solapur">Solapur</option>
						<option value="Kolhapur">Kolhapur</option>
						<option value="Satara">Satara</option>
						<option value="Ratnagiri">Ratnagiri</option>
						<optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
						<option value="Patna">Patna</option>
						<option value="Patliputra">Patliputra</option>
						<option value="Gaya">Gaya</option>
						<option value="Muzaffarpur">Muzaffarpur</option>
						<option value="Bhagalpur">Bhagalpur</option>
						<option value="Darbhanga">Darbhanga</option>
						<option value="Nalanda">Nalanda</option>
						<option value="Ara">Ara</option>
						<option value="Chapra">Chapra</option>
						<optgroup title="Gujarat" label="&raquo; Gujarat"></optgroup>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Surat">Surat</option>
						<option value="Vadodara">Vadodara</option>
						<option value="Rajkot">Rajkot</option>
						<option value="Gandhinagar">Gandhinagar</option>
						<option value="Jamnagar">Jamnagar</option>
						<option value="Bhavnagar">Bhavnagar</option>
						<option value="Mehsana">Mehsana</option>
						<optgroup title="Punjab" label="&raquo; Punjab"></optgroup>
						<option value="Amritsar">Amritsar</option>
						<option value="Ludhiana">Ludhiana</option>
						<option value="Jalandhar">Jalandhar</option>
						<option value="Patiala">Patiala</option>
						<option value="Bathinda">Bathinda</option>
						<option value="Firozpur">Firozpur</option>
						<option value="Mohali">Mohali</option>
						<option value="Pathankot">Pathankot</option>
						<optgroup title="TamilNadu" label="&raquo; TamilNadu"></optgroup>
						<option value="Chennai">Chennai</option>
						<option value="Coimbatore">Coimbatore</option>
						<option value="Madurai">Madurai</option>
						<option value="Tiruchirappalli">Tiruchirappalli</option>
						<option value="Salem">Salem</option>
						<option value="Tirunelveli">Tirunelveli</option>
						<option value="Vellore">Vellore</option>
						<option value="Thanjavur">Thanjavur</option>
					</select>
				</div><!--city end-->
				<?php if (isset($cityError)) echo $cityError; ?>

				


				<div class="form-group">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
				</div>
			</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">

				<!-- Messages -->	

				<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>
					

				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>


			</div>
		</div>
																												
	
<?php
include 'include/footer.php'; 
 ?>
 