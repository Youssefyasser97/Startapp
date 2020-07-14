<?php
// printf("Session ID: '): %s\r\n", uniqid('STARTAPP_SESSION_ID_'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Startapp -Admin System</title>
<meta name="description" content="Startapp coworking space is a creative, innovative and collaborative workspace that provides entrepreneurs, creatives, independent professionals and students a flexible work space where people can meet, work together and network with like-minded and professional community, we guarantee you a safe and supportive environment that  will help you to work better.">
<meta name="author" content="Startapp Hub">


<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="imgg/startapplogo.png" type="image/x-icon">
<link rel="apple-touch-icon" href="imgg/startapplogo.png">
<link rel="apple-touch-icon" sizes="72x72" hreff="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<style>

.hey{

  size: 10px;
}
.hey:hover{

  /* background-color: rgba(167, 196, 76, 0.9); */
background-color:lightgrey;
border-width: 100000px;
border-radius: 20px;
size: 1000px 10000px;
background-position-x: 100px;

}


.hey:after{

      background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.hey:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
.formostactive{

        margin-left:10px;
      padding-left: 1%;
}
.wrongpw{
font-size: 12px;
color: red;

}

</style>



<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="imgg/startapplogo.png"></img></a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
       
                <li><a href="#admin" class="page-scroll">Control</a></li>
        <li><a href="https://ydawood.com" class="page-scroll">User View</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><strong>Startapp</strong> <span>/</span><font size="6"> Admin System </font></h1>
            <p></p>
        </div>
      </div>
    </div>
  </div>
</header>




<!-- Admin Section -->
<div id="admin">
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center"><br/><br/><br/><br/>
      <h2>Admin System</h2>
      <hr>
      <p>In Startapp coworking space, you can enjoy a refreshing break away from your desk while staying productive!</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 service">
        
          <div class="hey">
        <a href="https://ydawood.com/checkin/reserved/index.php"><img src="img/reserved.jpg" class="img-responsive" alt="Project Title"></a>
      </div>

        <h3>Already Reserved</h3>
        <p>For website reservations.
<br/>
</p>
      </div>
      <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
        <a href="https://ydawood.com/checkin/notreserved/index.html"><img src="img/notreserved2.jpg" class="img-responsive" alt="Project Title"></a>
      </div>
        <h3>Hasn't Reserved Yet</h3>
        <p>For on arrival reservations.<br/></p>
      </div>
      
            <div id="queries" class="col-xs-12 col-sm-4 service">
          <div class="hey">
        <a href="https://ydawood.com/seequeries.php"><img src="img/question3fix.jpg" class="img-responsive" alt="Project Title"></a>
      </div>
        <h3>Queries</h3>
        <p>Check queries and reply to their emails.</p>
      </div>
      
              <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
        <a href="https://ydawood.com/before.php"><img src="img/active2.jpg" class="img-responsive" alt="Project Title"></a>
      </div>
        <h3>Most Active Users</h3>
        <p>Check users with most visits for bookings.</p>
      </div>
      
             <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
              <!--<input src="img/finance4.jpg" type="image" class="img-responsive" /> -->
            <a href="#queries" onclick="checkadmin();"><img src="img/finance5.jpg" class="img-responsive" alt="Project Title"></a>
      </div>
        <h3>Finance</h3>
        <p>Check users with most visits for bookings.</p>
      </div>
     



    </div>
  </div>
</div>
</div>









<div id="footer">
  <div class="container text-center">
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com/Startapp-Hub-2209130115988204/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/StartappH/" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://plus.google.com/109992523727507240507" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" target="_blank"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCrFPPjfqLshecR4lfetjfKQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
    <div>
      <p>All Rights Reserved.  Startapp Hub &copy;</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/main.js"></script>






<script>
    
    function checkadmin() {
    var txt;
    var password = prompt("Please enter the password", "");
   if(password=="startapp"){
     window.location.href = "https://ydawood.com/amounts.php";

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
