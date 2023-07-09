<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Hotel Booking Website</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Rooms</a></li>
				<li><a href="#">Bookings</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<section>
			<h2>Welcome to Our Hotel</h2>
			<p>Enjoy a luxurious stay at our hotel. We offer a variety of rooms to fit your needs and budget.</p>
			<button>Book Now</button>
		</section>

		<section>
			<h2>Rooms</h2>
			<ul>
				<li>
					<h3>Standard Room</h3>
					<img src="images/room1.jpg" alt="Standard Room">
					<p>Starting at $100 per night</p>
					<button>Book Now</button>
				</li>
				<li>
					<h3>Deluxe Room</h3>
					<img src="images/room2.jpg" alt="Deluxe Room">
					<p>Starting at $150 per night</p>
					<button>Book Now</button>
				</li>
				<li>
					<h3>Executive Suite</h3>
					<img src="images/room3.jpg" alt="Executive Suite">
					<p>Starting at $200 per night</p>
					<button>Book Now</button>
				</li>
			</ul>
		</section>

		<section>
			<h2>Bookings</h2>
			<form>
				<label for="check-in">Check-in:</label>
				<input type="date" id="check-in" name="check-in">
				<label for="check-out">Check-out:</label>
				<input type="date" id="check-out" name="check-out">
				<label for="room-type">Room Type:</label>
				<select id="room-type" name="room-type">
					<option value="standard">Standard Room</option>
					<option value="deluxe">Deluxe Room</option>
					<option value="executive">Executive Suite</option>
				</select>
				<label for="guests">Number of Guests:</label>
				<input type="number" id="guests" name="guests">
				<button type="submit">Check Availability</button>
			</form>
		</section>

		<section>
			<h2>Contact Us</h2>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email">
				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea>
				<button type="submit">Send</button>
			</form>
		</section>
	</main>

	<footer>
		<p>Copyright © Hotel Booking Website
	
