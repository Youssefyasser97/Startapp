
 
 
 <?php
$servername = "localhost";
$username = "indocowo_youssef";
$password = "Youssef@123";
$dbname = "indocowo_startapp";

$typeofbooking="dedicated table";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}



$sql= "SELECT * FROM Reservations";

		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html>
<head>

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="../../imgg/startapplogopng.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../../imgg/startapplogopng.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114.png">





<script>

function myFunction(obj) {
    
    // var row = obj.parentNode.rowIndex;
    var RID = document.getElementById("myTable").rows[obj].cells[1].innerHTML;
    
    if (confirm('Are you sure you want to change this user as checked in??')) {
//  document.getElementById("myTable").rows[obj].cells[13].innerHTML = "checked";
    window.location.href = "checkinuser.php?RID="+RID; 

}
}

</script>

<script>
   function deletethis(obj) {
        var RID = document.getElementById("myTable").rows[obj].cells[1].innerHTML;
    
    if (confirm('Are you sure you want to permenantly delete this user?')) {
    window.location.href = "deleteuser.php?RID="+RID; 
}
}


function checkadmin(obj) {
    var txt;
    var password = prompt("Please enter the password", "");
   if(password=="startapp123"){
        deletethis(obj);
    }
    else if(password==null || password == ""){
    }
    else{
                alert("Wrong Password");
    }
}

</script>





	<title>Reserved</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #a7c44c;
			color: #FFFFFF;
			border-color: #e0eabf !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #e0eabf;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.middle{
		    text-align: center;
            position: relative;
            left:40%;
		}
.righty {
    margin:10px;
    background-color: #a7c44c;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
	</style>
</head>
<body>
    
    <div><a href="https://ydawood.com/index2.php#admin"><button class="righty">BACK TO ADMIN PAGE</button></a>
</div>
    
	<h1>Reservations Table</h1>
	<table id="myTable" class="data-table">
		<h class="middle">All information about our services' bookings</h>
		<thead>
		  <tr>        
		        <th>Row no.</th>
                <th>RID</th>
                <th>UID</th>
                <th>SID</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>r_date</th>
                <th>Paymentmethod</th>
                <th>Paymentamount</th>
                <th>Numberofpeople</th>
                <th>Paymentstatus</th>
                <th>Typeofbooking</th>
                <th>Comments</th>
                <th>Checked-in</th>
                <th>  Action  </th>

         </tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
		    
echo "<tr>";
echo "<td>" .$no. "</td>";
echo "<td>" . $row['RID'] . "</td>";
echo "<td>" . $row['UID'] . "</td>";
echo "<td>" . $row['SID'] . "</td>";
echo "<td>" . date('F d, Y', strtotime($row['start_date'])) . "</td>";
echo "<td>" . date('F d, Y', strtotime($row['end_date'])) . "</td>";
echo "<td>" .date('F d, Y', strtotime($row['r_date'])) . "</td>";
echo "<td>" . $row['paymentmethod'] . "</td>";
echo "<td>" . $row['paymentamount'] . "</td>";
echo "<td>" . $row['numberofpeople'] . "</td>";
echo "<td>" . $row['paymentstatus'] . "</td>";
echo "<td>" . $row['typeofbooking'] . "</td>";
echo "<td>" . $row['comments'] . "</td>";
echo "<td>" . $row['checkedin'] . "</td>";

echo "<td><button id='".$no."' style='background-color:#a7c44c;color:white;border-radius:5px;' onclick='myFunction(this.id)'>Check-in</button>
<button id='".$no."' style='background-color:red;color:white;border-radius:5px;' onclick='checkadmin(this.id)' >Delete</button></td>";
echo "</tr>";

$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>

			</tr>
		</tfoot>
	</table>
</body>
</html>