<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="utility.css">
        <title>Gurutech</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/gtech.jpg">
    </head>

    <body>
        <!--Navigation bar-->
        <div class="navbar">
            <div class="container flex">
                <h1 class="logo" >Gurutech Solutions</h1>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="service.html">Services and IT Career</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        
                        
                    </ul>
                </nav>
            </div>
        </div>

        <?php
$servername = "localhost";
$username = "id16081888_gurutech_db";
$password = "Benard@dmin60";
$dbname = "id16081888_gurutech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, enquiry FROM enquiries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["id"]. " &nbsp;Name : ". $row["name"]. "<br>&nbsp;&nbsp;&nbsp;&nbsp;Email : " . $row["email"] ."<br>&nbsp;&nbsp;&nbsp;&nbsp;Enquiry : " . $row["enquiry"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
        <footer class="footer bg-dark py-5">
            <div class="container grid grid-3">
                <div>
                    <h1>Gurutech</h1>
                    <p>Copyright &copy; 2021</p>
                    <p>Developed by: <b><a href="http://otombenah.000webhostapp.com/" style="color:orange">Benard Otom</a></b></p>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="service.html">Services and IT Career</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="about.html">About Us</a></li>
                     </ul>
                </nav>
                <div class="social">
                    <a href="https://github.com/otomBuddy"><i class="fab fa-github fa-2x"></i></a>
                    <a href="https://www.facebook.com/benardotom26/"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/benardotom/"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="https://twitter.com/benard_otom"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </div>
        </footer>
    </body>


</html>