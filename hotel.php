<?php
include('db.php');
// Output messages
$responses = [];
if(isset($_POST['submit'])){
	$arrival = $_POST['arrival'];
	$departure = $_POST['departure'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$adults = $_POST['adults'];
	$room_pref = $_POST['room_pref'];
 //mail function is here
   
   

	$insert = "INSERT INTO `booking` (`arrival`, `departure`, `first_name`, `last_name`, `email`, `phone`, `adults`, `room_pref`) VALUES ('$arrival', '$departure', '$first_name', '$last_name', '$email', '$phone', '$adults', '$room_pref');";
	$query = mysqli_query($conn, $insert);
	if($query){
	
		$responses[] = 'Dear '.$first_name.' your room booked successfully and registerd email is '.$email;
	}else{
		$responses[] = 'Not insert';
	}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1">
	<title>PGLife</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<form class="hotel-reservation-form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
		<h1><i class="far fa-calendar-alt"></i> PGBooking Room </h1>
		<div class="fields">
			<!-- Input Elements -->
			<div class="wrapper">
				<div>
					<label for="arrival">Arrival</label>
					<div class="field">
						<input id="arrival" type="date" name="arrival" required>
					</div>
				</div>
				<div class="gap"></div>
				<div>
					<label for="departure">Departure</label>
					<div class="field">
						<input id="departure" type="date" name="departure" required>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div>
				<label for="first_name">First Name</label>
				<div class="field">
					<i class="fas fa-user"></i>
					<input id="first_name" type="text" name="first_name" placeholder="First Name" required>
				</div>
			</div>
			<div class="gap"></div>
			<div>
				<label for="last_name">Last Name</label>
				<div class="field">
					<i class="fas fa-user"></i>
					<input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
				</div>
			</div>
		</div>
		<label for="email">Email</label>
		<div class="field">
			<i class="fas fa-envelope"></i>
			<input id="email" type="email" name="email" placeholder="Your Email" required>
		</div>
		<label for="phone">Phone</label>
		<div class="field">
			<i class="fas fa-phone"></i>
			<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
		</div>
		<div class="wrapper">
			<div>
				<label for="adults">Adults</label>
				<div class="field">
					<select id="adults" name="adults" required>
						<option disabled selected value="">--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
			</div>
		</div>
		<label for="room_pref">Room Preference</label>
		<div class="field">
			<select id="room_pref" name="room_pref" required>
				<option disabled selected value="">--</option>
				<option value="Standard">standard</option>
				<option value="Deluxe">deluxe</option>
				<option value="Suite">suite</option>
			</select>
		</div>
		<?php if ($responses) : ?>
			<p class="responses"><?php echo implode('<br>', $responses); ?></p>
		<?php endif; ?>
		<input type="submit" name="submit" value="Reserve">
	</form>
</body>

</html>