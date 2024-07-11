<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations - Delicious Bites</title>
    <link rel="stylesheet" href="css/style.css"> <!--link to the css stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- for proper response of bootsatrap code-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"><!--CDN links -->
</head>
<body class="backgroundcolor">
    
    <div class="navigation">   
        <nav class="bar">
            <ul>
               <li><a href="index.php">Home</a></li> 
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservations.php">Reservations</a></li>
                <li><a href="branches.php">Branches</a></li>
            </ul>
        </nav>  
        </div> 
    
    
    <div class="main-content">
        <h1>Reservations - Delicious Bites</h1>
        <p>Book your stay at Delicious Bites and experience luxury like never before.</p>
        <form action="Web-dev-assignment/reservations.php"method="POST">
            <!-- Reservation form -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required><br>
            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" required><br>
            <input type="submit" value="Submit Reservation"name="submit">
        </form>
    </div>
</body>
</html>
