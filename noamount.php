<html>
<head>
    
    
    <!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="../../imgg/startapplogopng.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../../imgg/startapplogopng.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114.png">


    
    
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #a7c44c;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #a7cF4c;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    left:-10px;
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

.middle{
    
    
    text-align:center;
    
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
<a href="https://startapphub.com/index2.php#admin"><button class="righty">Admin Home</button></a>
</div>

<div class="middle">
<br/><br/>
<h2>FINANCIAL SYSTEM</h2>
<p>Choose the filter</p>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Click to choose</button>
  <div id="myDropdown" class="dropdown-content">
      
    <a href="#" onclick="checkadmin();">Amount/Day</a>

  </div>
</div>



<button id="pay-button">Pay!</button>
<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-S9dORT6tJtL1xy3V"></script>
<script type="text/javascript">
  document.getElementById('pay-button').onclick = function(){
    // This is minimal request body as example.
    // Please refer to docs for all available options: https://snap-docs.midtrans.com/#json-parameter-request-body
    // TODO: you should change this gross_amount and order_id to your desire. 
    var requestBody = 
    {
      transaction_details: {
        gross_amount: 1240000,
        // as example we use timestamp as order ID
        order_id: 2
      }
    }
    
    getSnapToken(requestBody, function(response){
      var response = JSON.parse(response);
      console.log("new token response", response);
      // Open SNAP payment popup, please refer to docs for all available options: https://snap-docs.midtrans.com/#snap-js
      snap.pay(response.token);
    })
  };
  /**
  * Send AJAX POST request to checkout.php, then call callback with the API response
  * @param {object} requestBody: request body to be sent to SNAP API
  * @param {function} callback: callback function to pass the response
  */
  function getSnapToken(requestBody, callback) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
      if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        callback(xmlHttp.responseText);
      }
    }
    xmlHttp.open("post", "https://www.startapphub.com/checkout.php");
    xmlHttp.send(JSON.stringify(requestBody));
  }
</script>



</div>
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





function checkadmin() {
    var txt;
    var password = prompt("Please enter the password", "");
   if(password=="startapp"){
     window.location.href = "https://startapphub.com/amounts.php";

    }
    else if(password==null || password == ""){
    }
    else{
                alert("Wrong Password");
    }
}



</script>

</body>
</html>
