
 
 <?php
$servername = "localhost";
$username = "startapp_admin";
$password = "Admin@123";
$dbname = "startapp_admin";

$checkedin ="Checked-in";
$typeofbooking="coworking space";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection : " . mysqli_connect_error());
}

$sql= "SELECT r.UID, u.email, COUNT(r.UID) AS visits
FROM Reservations r ,Users u
WHERE r.UID = u.UID AND r.typeofbooking = '$typeofbooking' AND r.checkedin='$checkedin'
GROUP BY r.UID
ORDER BY COUNT(r.UID) DESC";







$result = $conn->query($sql);




		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html>
<head>
    
    
    
    
    
    <!--favicons-->
<link rel="shortcut icon" href="../imgg/startapplogo.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../imgg/startapplogo.png">
<link rel="apple-touch-icon" sizes="72x72" hreff="../img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">




	<title>Most Active Users</title>
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
			background-color: #ecf2d9;
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

.dropbtn {
    margin:10px;
    background-color: #a7c44c;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #768d2e;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
            margin-left:25px;
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

div.ex1 {
    width:100%;
    margin: auto;
    border: 3px solid #73AD21;
}

.righty {
    margin:10px;
    background-color: #a7c44c;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    position:absolute;
    right:0.2%;
}
</style>
	
	
	
</head>
<body>
    
    
       <div>
    <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Choose a booking type</button>

  <div id="myDropdown" class="dropdown-content">
    <a href="https://www.ydawood.com/before.php">All Bookings</a>
    <a href="https://www.ydawood.com/bookdedicated/before.php">Dedicated Table</a>
              <a href="https://www.ydawood.com/bookmeeting/before.php">Meeting Room</a>
    <a href="https://www.ydawood.com/bookprivate/before.php">Private Office</a>
    <a href="https://www.ydawood.com/bookevent/before.php">Events</a>
  </div>
</div>



<a href="https://ydawood.com/index2.php#admin"><button class="righty">Admin Home</button></a>

</div>

    
	<h1>Co-Working Space Bookings</h1>
	<table id="myTable" class="data-table">
		<thead>
		  <tr>        
		            <th>UID</th>
                    <th>email</th>
                    <th>visits</th>
         </tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['UID'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['visits'].'</td>
				</tr>';
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>

			</tr>
		</tfoot>
	</table>
	
	
	
	
	
	
	
		
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
	
	
	
	
	
	
	
	
</body>
</html>