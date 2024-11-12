
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hotel Booking System</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="booking_updated.php">Book Room</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Book a Room</h2>
        <form action="process_booking.php" method="POST">
            <label for="room_id">Room ID:</label>
            <input type="text" id="room_id" name="room_id" required><br>
            <label for="check_in">Check-In Date:</label>
            <input type="date" id="check_in" name="check_in_date" required><br>
            <label for="check_out">Check-Out Date:</label>
            <input type="date" id="check_out" name="check_out_date" required><br>
            <button type="submit">Book Now</button>
        </form>
    </main>
</body>
</html>
