
<html>
<body>
 
 
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

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}

$sql = "INSERT INTO Queries (Name, Email, Message)
VALUES ('$name','$email','$message')";

if (mysqli_query($conn, $sql)) {

    mail ( 'youssefyasser276@gmail.com' ,$subject ,  $all);
    echo '<script>window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>