<?php

//include header file
include('include/header.php');

?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate the blood, save the life</h1>
				<p class="text-center">Donate the blood to help the others.</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 43px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						<option value="All">All</option>
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
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center para-text">
				Blood donation is a selfless and humanitarian act that plays a vital role in saving lives and maintaining the well-being of individuals in need. When someone donates blood, they are providing a lifeline for patients undergoing surgeries, facing critical illnesses, or experiencing trauma. It is a gesture of compassion, where a single donation can impact multiple lives.
			</p>
			<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end doante section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vission</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					WeCare envisions a world where every drop of blood counts. With our blood donation website, we aim to create a seamless platform connecting donors with recipients, saving lives one donation at a time. Our vision is to foster a community of compassionate individuals, ensuring a stable and timely supply of blood, and promoting a healthier, safer society.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					WeCare is dedicated to achieving several unique goals: to enhance blood donation awareness, making it a societal norm; to streamline the donation process, ensuring efficiency and accessibility for all; to build a diverse, active donor base; to leverage technology for real-time matching of donors and recipients; and to foster a culture of empathy, unity, and continuous support in the global community.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					WeCare's mission is to save lives by connecting donors with those in need through our user-friendly blood donation platform. We are committed to ensuring a safe, reliable, and convenient donation experience for both donors and recipients. Through innovative technology and community engagement, we strive to bridge the gap between blood supply and demand, promoting a healthier future for all.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include('include/footer.php');
?>