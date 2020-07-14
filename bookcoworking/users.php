
<html>
<body>
 
 
<?php
// $servername = "localhost";
// $username = "startapp_admin";
// $password = "Admin@123";
// $dbname = "startapp_admin";

$servername = "localhost";
$username = "indocowo_youssef";
$password = "Youssef@123";
$dbname = "indocowo_startapp";
$firstname=$_POST['first_19'];
$lastname=$_POST['last_19'];
$email=$_POST['input_18'];
$phonenumber=$_POST['input_17_phone'];
$typeofbooking="coworking space";
$datefrom=$_POST['datefrom'];
$dateto=$_POST['dateto'];
$r_date= $_POST['datefrom'];
$paymentmethod=$_POST['method'];
$numberofpeople=$_POST['numberofpeople'];
$paymentstatus="unpaid";
$comments=$_POST['comments'];
$paymentamount = $_POST['amount2'];
// $checkedin = "No";
$a = "Hello ";
$b = $a . $firstname;



$all = $firstname . " booked coworking space for " . $numberofpeople .  " person(s) from " . $datefrom  . " to " . $dateto . " with amount : " . $paymentamount . " Rp." ;
$touser = "your booking for the " . $typeofbooking .  " was done succesfully with amount : " . $paymentamount . " Rp.  for "
. $numberofpeople .   " person(s).  Waiting for you in Startapp";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}


$sql = "INSERT INTO Users (
 phonenumber, email, firstname, lastname
) VALUES('$phonenumber','$email','$firstname','$lastname') 
ON DUPLICATE KEY UPDATE email = '$email';";

$sql .= "INSERT INTO Reservations (UID, SID, start_date, end_date, r_date, paymentmethod, paymentamount, numberofpeople, paymentstatus, comments, typeofbooking)
VALUES ((SELECT MAX(UID) FROM Users WHERE email = '$email'),
(SELECT SID FROM Spaces WHERE type = '$typeofbooking'),
'$datefrom','$dateto',NOW() ,'$paymentmethod','$paymentamount','$numberofpeople','$paymentstatus','$comments', '$typeofbooking');";









$sql4 ="SELECT RID, COUNT(RID) as no_of_reservations 
FROM Reservations
WHERE
(start_date >= '$datefrom'  AND start_date <= '$dateto' AND typeofbooking = '$typeofbooking') OR 
( end_date >= '$datefrom'  AND  end_date <= '$dateto' AND typeofbooking = '$typeofbooking') OR
(start_date <= '$datefrom'  AND  end_date >= '$dateto' AND typeofbooking = '$typeofbooking') OR
(start_date >=  '$datefrom'  AND end_date <=  '$dateto' AND typeofbooking = '$typeofbooking') 
GROUP BY RID";




$result=mysqli_query($conn, $sql4);
$count = mysqli_num_rows($result);



if($count >=6){ //0 is going to be replaced by the number of available tables
echo "Sorry, there is no available places. It is " .  $count . "    booking(s) on these dates already" . "<br>" . "Try booking another dates." 
."<br/><br/> <a href='javascript:history.back()'><button>Book on another dates</button></a>" ;
}
else{

if (mysqli_multi_query($conn,$sql))
{   
    
 mail ( $email , $b ,   $touser );
 mail ( 'youssefyasser276@gmail.com' , $typeofbooking ,  $all);
 
    echo '<script>window.location.href = "../thankyou";</script>';

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
</body>
</html>