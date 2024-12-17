<!DOCTYPE html>
<html lang="en">
<head>
    <title>International Student Club</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
        <a href="web.html">
            <div class="icon">
                
                <img src="club.jpeg" alt="ISC Logo" class="isc-logo">
                <h1 class="logo">International Student Club CMRIT</h1>
               
            </div>
            </a>
            <div class="menu">
                <ul>
                    <li><a href="web.html">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">EVENTS</a></li>
                    <li><a href="members.php">MEMBERS</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <h1>Member Details</h1>
            <p class="par">
                Below is the list of all members who have registered with the International Student Club CMRIT. 
                Feel free to explore and connect with your peers!
            </p>
        </div>

        <!-- Table Container: Start of Box around Table -->
        <div class="members-table-box">
            <table class="members-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>USN</th>
                        <th>College Email</th>
                        <th>Department</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    $conn = new mysqli('localhost', 'root', '', 'isc_database');
                    if ($conn->connect_error) {
                        die('Connection failed: ' . $conn->connect_error);
                    }

                    // Fetch members from database
                    $sql = "SELECT name, usn, college_email, department, semester FROM members";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["usn"] . "</td>
                                    <td>" . $row["college_email"] . "</td>
                                    <td>" . $row["department"] . "</td>
                                    <td>" . $row["semester"] . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No members found</td></tr>";
                    }

                    // Close connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
        <!-- End of Table Box -->

    </div>

    <img src="cmr.png" alt="College Logo" class="college-logo">

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
