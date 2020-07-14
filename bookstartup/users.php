
<html>
<body>
 
 
<?php
$servername = "localhost";
$username = "indocowo_youssef";
$password = "Youssef@123";
$dbname = "indocowo_startapp";
$companyname=$_POST['company_name'];
$name=$_POST['name'];
$phonenumber=$_POST['input_17_phone'];
$email=$_POST['input_18'];
$country=$_POST['country'];
$city=$_POST['city'];
$street=$_POST['street'];
$description=$_POST['comments'];
$typeofbooking="startup meeting";
$meeting_date=$_POST['meeting_date'];
$dateto=$_POST['dateto'];
$a = "Hello ";
$b = $a . $name;

$all = $name . " from " . $companyname . " requested a meeting on " . $meeting_date . " ------------ \n " . $description;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}



$sql = "INSERT INTO Startups (
 name,phonenumber, email, country, city, address, description)
 VALUES('$companyname','$phonenumber','$email','$country','$city', '$street', '$description') 
ON DUPLICATE KEY UPDATE email = '$email';";


$sql .= "INSERT INTO StartupsReservations (SUID, meeting_date, sr_date, comments, name)
VALUES ((SELECT SUID FROM Startups WHERE email = '$email'),
'$meeting_date', NOW() ,'$description','$name');";


 mail ( $email , $b ,  'your request was succesfully sent, wait for response within 24 hours. Thank you for using Startapp');
 mail ( 'youssefyasser276@gmail.com' , $typeofbooking ,  $all);



 $sql4 ="SELECT *
  FROM StartupsReservations
   WHERE meeting_date = '$meeting_date';";


 $result=mysqli_query($conn, $sql4);
 $count = mysqli_num_rows($result);
 



 if($count >=1){ //0 is going to be replaced by the number of available tables
    echo "Sorry, there is no available places. It is " .  $count . "    booking(s) on these dates already" . "<br>" . "Try booking another dates." 
    ."<br/><br/> <a href='javascript:history.back()'><button>Book on another dates</button></a>" ;
    }
    else{

if (mysqli_multi_query($conn,$sql))
{    echo '<script>window.location.href = "thankyou";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }

mysqli_close($conn);
?>
</body>
</html>