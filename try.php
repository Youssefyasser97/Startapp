
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
$query_id=$_GET['query_id'];


echo "Deleting..";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}

$sql = "DELETE FROM Queries
where Query_ID = '$query_id'";

if (mysqli_query($conn, $sql)) {
    echo '<script>window.location.href = "seequeries.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>