
<?php
$servername = "localhost";
$username = "indocowo_youssef";
$password = "Youssef@123";
$dbname = "indocowo_startapp";
$email=$_GET['email'];
$subject=$_GET['subject'];
$message=$_GET['message'];


echo "Sending..";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}


$sql = "SELECT * FROM Users";

 mail($email, $subject ,$message);
if (mysqli_query($conn, $sql)) {
        echo '<script>window.location.href = "seequeries.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>