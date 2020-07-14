
<?php
$servername = "localhost";
$username = "indocowo_youssef";
$password = "Youssef@123";
$dbname = "indocowo_startapp";
$name=$_POST['name'];
$email=$_POST['email'];

$RID=$_GET['RID'];


echo "Deleting user..";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}

$sql = "DELETE FROM Reservations WHERE RID = $RID";

if (mysqli_query($conn, $sql)) {
    echo '<script>window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>