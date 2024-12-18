<!DOCTYPE html>
<html lang="en">
<head>
    <title>International Student Club</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img src="club.jpeg" alt="ISC Logo" class="isc-logo">
                <h1 class="logo">International Student Club CMRIT</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="old_index.html">ABOUT US</a></li>
                    <li><a href="#">EVENTS</a></li>
                    <li><a href="members.php">MEMBERS</a></li>
                </ul>
            </div>
        </div> 

        <div class="content">
            <h1>Welcome to the<br><span>International Student Club</span><br>Join Us Today!</h1>
            <p class="par">
                Connect, celebrate, and grow with a vibrant community of global students.<br>
                Participate in exciting events, workshops, and activities designed to enrich your academic journey and cultural experience.<br>
                Embrace diversity and make memories for a lifetime!
            </p>
            <button class="cn"><a href="#hello">Join Now</a></button>
        </div>
    </div>

    <div class="form-container" id="register">
        <div class="form">
            <h2>Register Here</h2>
            <form action="submit_registration.php" method="POST">
                <input type="text" id="hello" name="name" placeholder="Full Name" required>
                <input type="text" name="usn" placeholder="University Student Number (USN)" required>
                <input type="email" name="college_email" placeholder="College Email ID" required>
                <input type="text" name="Department" placeholder="Department" required>
                <input type="text" name="Sem" placeholder="Semester" required>
                <button class="btnn" type="submit">Register</button>
            </form>
            <?php
    // Check if the success query parameter is set
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
        echo '<p style="color: green; font-weight: bold;">Registration Successful!</p>';
    }
    ?>
  </div>
            <p class="liw">Connect with us:</p>
            <div class="icons">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="https://www.instagram.com/isc_cmrit/"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
            </div>
        </div>
    </div>
    <img src="cmr.png" alt="College logo" class="college-logo">

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
</body>
</html>
