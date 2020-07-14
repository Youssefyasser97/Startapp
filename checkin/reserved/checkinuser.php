
<?php
$servername = "localhost";
$username = "indocowo_youssef";
$password = "Youssef@123";
$dbname = "indocowo_startapp";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject = "Contact Us";
$all = "A message from the email : " . $email . "  message: ". $message;
$RID=$_GET['RID'];


echo "Checking user in..";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}

$sql = "UPDATE Reservations SET checkedin='Checked-in' WHERE RID = $RID ";

if (mysqli_query($conn, $sql)) {
    echo '<script>window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>