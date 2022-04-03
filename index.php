<?php
// printf("Session ID: '): %s\r\n", uniqid('STARTAPP_SESSION_ID_'));
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Startapp - Connect, Create, Cowork</title>
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
    opacity:0.9;
    size: 10px;
}
.hey:hover{
    opacity:1.0;
      /* background-color: rgba(167, 196, 76, 0.9); */
    background-color:#a7c44c;
    border-width: 100000px;
    border-radius: 20px;
    size: 1000px 10000px;
    background-position-x: 100px;
    position:relative;
    top:-10px;

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

        margin-right:10px;
      padding-left: 70%;
}
.wrongpw{
font-size: 12px;
color: red;

}


.rotate90 {
    border-radius:12px;
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
}
.teampics{
     border-radius:12px;
     opacity:0.9;
}

.teampics:hover{
    position:relative;
    top:-7px;
    opacity:1.0;
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
      
<style>

ul
{
    font-family: Arial, Verdana;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
}

ul li
{
    display: block;
    position: relative;
    float: left;
}

li ul
{
    display: none;
}

ul li a 
{
    display: block;
    text-decoration: none;
    color: #a7c44c;
    border-top: 1px solid #ffffff;
    padding: 10px 15px 5px 15px;
	/*background-color: #363636;*/
    margin-left: 1px;
    white-space: nowrap;
}

ul li a:hover 
{
    color: #ffffff;
}
li:hover ul 
{
    display: block;
    position: absolute;
}

li:hover li
{
    float: none;
    font-size: 11px;
}

.dropit{
    	background-color: #363636;
}

</style>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll"><b>About Us</b></a></li>
        <li><a href="#services" class="page-scroll"><b>Book Now</b></a></li>
        <li><a href="#portfolio" class="page-scroll"><b>Photos</b></a></li>
        <li><a href="#team" class="page-scroll"><b>Team</b></a></li>
        <li><a href="#contact" class="page-scroll"><b>Contact</b></a></li>
        <!-- <li><a href=""><b>My Websites</b></a>
        <ul>
        <li class="dropit"><a href="/espacedesign">Espace Design</a></li>
        <li class="dropit"><a href="/breeze">Breeze</a></li>
        <li class="dropit"><a href="/vp">Visual Programming</a></li>
        </ul>
      </li> -->
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
            <h1><strong>Startapp</strong> <span>/</span><font size="6"> Connect. Create. Cowork.</font></h1>
            <p>Lets Grow Together.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">OUR STORY</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Our Story</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 text-center"> <img src="img/site.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h3>stARTapp</h3>
          <p>The Support Team was founded in Indonesia based Hub, to help local start-ups sustain their business, providing information and training workshops to run their business properly, with the conviction that working should be as pleasant and fulfilling as possible.

We help our members succeed in their business by boosting their networks, providing support, a pleasant creative space and many opportunities to develop ideas and partnerships. Our international network supports our members with digital marketing and business consultation around Asia, Australia, Africa, Europe and Middle East affiliations.</p>
          <h3>Our Mission</h3>
          <p>Our main goal is to guarantee the best work environment for our members: fun, joy, good relationship, full of energy and well connected for your start-ups.
<br>
  A great working place and support can develop your business successfully!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Our Services</h2>
      <hr>
      <p>In Startapp coworking space, you can enjoy a refreshing break away from your desk while staying productive!</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 service">
        
          <div class="hey">
        <a href="https://ydawood.com/bookcoworking"><img src="img/coworking2.jpg" class="img-responsive" alt="Project Title"></a>
      </div>

        <h3>Co-working space</h3>
        <p>Co-working spaces help you in surrounding yourself with like-minded people for gaining experience.
<br/>
</p>
      </div>
      <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
        <a href="https://ydawood.com/bookprivate"><img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"></a>
      </div>
        <h3>Private Office</h3>
        <p>A private working space would provide you the silence and the conditions you need for a great outcome.</p>
      </div>
      <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
              <a href="https://ydawood.com/bookdedicated"><img src="img/dedicated.jpg" class="img-responsive" alt="Project Title"></a>
          </div>
              <h3>Dedicated Table</h3>
        <p>
Book your table and have it as your home for the period you choose.
Dedicated tables are the best choice for individual projects and work.
</p>
      </div>

      <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
        <a href="https://ydawood.com/bookmeeting"><img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"></a>
      </div>
        <h3>Meeting Room</h3>
        <p>Meetings are the variable that guarantees a good output.</p>
      </div>

      <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
              <a href="https://ydawood.com/bookevent"><img src="img/party.jpg" class="img-responsive" alt="Project Title"></a>
</div>
              <h3>Events</h3>
        <p>Celebrate your events here, the perfect venue is waiting for you.</p>
      </div>


      <div class="col-xs-12 col-sm-4 service">
          <div class="hey">
              <a href="https://ydawood.com/bookstartup"><img src="img/rania.jpg" class="img-responsive" alt="Project Title"></a>
</div>
              <h3>Start-Ups</h3>
        <p>Collaborate with other start-ups and let the growing begin.</p>
      </div>



    </div>
  </div>
</div>


<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Photos</h2>
      <hr>
      <p>Take a look at some picture of startapp people and places.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All Photos</a></li>
            <li><a href="#" data-filter=".residential">Co-working space</a></li>
            <li><a href="#" data-filter=".office">Offices</a></li>
            <li><a href="#" data-filter=".commercial">Cafe</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 commercial">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 commercial">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 office">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 office">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 commercial">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 office">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 office">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Team Section -->

<script type="text/javascript">

var images = [], x = -1;
        
        //aldhi
         images[0] = "img/team/realteam/aldhi/aldhifrontedited.jpg";
         images[1] = "img/team/realteam/aldhi/aldhirightedited.jpg";
         images[2] = "img/team/realteam/aldhi/aldhileftedited.jpg";
         images[3] = "img/team/realteam/aldhi/aldhiup.JPG";
         images[4] = "img/team/realteam/aldhi/aldhidownedited.jpg";
         images[5] = "img/team/realteam/aldhi/aldhirightupedited.jpg";
         images[6] = "img/team/realteam/aldhi/aldhirightdownedited.jpg";
         images[7] = "img/team/realteam/aldhi/aldhileftup.JPG";
         images[8] = "img/team/realteam/aldhi/aldhileftdownedited.jpg";
         
         //youssef
         
         images[9] = "img/team/realteam/youssef/yousseffrontedited.jpg";
         images[10] = "img/team/realteam/youssef/youssefrightedited.jpg";
         images[11] = "img/team/realteam/youssef/youssefleft.JPG";
         images[12] = "img/team/realteam/youssef/youssefupedited.jpg";
         images[13] = "img/team/realteam/youssef/youssefdown.JPG";
         images[14] = "img/team/realteam/youssef/youssefrightupedited.jpg";
         images[15] = "img/team/realteam/youssef/youssefrightdown.JPG";
         images[16] = "img/team/realteam/youssef/youssefleftup.JPG";
         images[17] = "img/team/realteam/youssef/youssefleftdown.JPG";
         
         
         
         //farah
                  images[18] = "img/team/realteam/farah/farahfrontedited.jpg";
                  images[19] = "img/team/realteam/farah/farahrightedited.jpg";
                  images[20] = "img/team/realteam/farah/farahleftedited.jpg";
                  images[21] = "img/team/realteam/farah/farahupedited.jpg";
                  images[22] = "img/team/realteam/farah/farahdown.JPG";
                  images[23] = "img/team/realteam/farah/farahrightupedited.jpg";
                  images[24] = "img/team/realteam/farah/farahrightdown.JPG";
                  images[25] = "img/team/realteam/farah/farahleftupedited.jpg";
                  images[26] = "img/team/realteam/farah/farahleftdown.JPG";
                  
          //bilal
                  images[27] = "img/team/realteam/bilal/bilalfrontedited.jpg";
                  images[28] = "img/team/realteam/bilal/bilalrightedited.jpg";
                  images[29] = "img/team/realteam/bilal/bilalleftedited.jpg";
                  images[30] = "img/team/realteam/bilal/bilalupedited.JPG";
                  images[31] = "img/team/realteam/bilal/bilaldownedited.jpg";
                  images[32] = "img/team/realteam/bilal/bilalrightupedited.jpg";
                  images[33] = "img/team/realteam/bilal/bilalrightdownedited.jpg";
                  images[34] = "img/team/realteam/bilal/bilalleftupedited.jpg";
                  images[35] = "img/team/realteam/bilal/bilalleftdownedited.jpg";


             //meliana
                  images[36] = "img/team/realteam/meliana/melianafrontedited.jpg";
                  images[37] = "img/team/realteam/meliana/melianarightedited.jpg";
                  images[38] = "img/team/realteam/meliana/melianaleft.JPG";
                  images[39] = "img/team/realteam/meliana/melianaup.JPG";
                  images[40] = "img/team/realteam/meliana/melianadownedited.jpg";
                  images[41] = "img/team/realteam/meliana/melianarightup.JPG";
                  images[42] = "img/team/realteam/meliana/melianarightdownedited.jpg";
                  images[43] = "img/team/realteam/meliana/melianaleftup.JPG";
                  images[44] = "img/team/realteam/meliana/melianaleftdown.JPG";


             //rizky
                  images[45] = "img/team/realteam/rizky/rizkyfrontedited.jpg";
                  images[46] = "img/team/realteam/rizky/rizkyrightedited.jpg";
                  images[47] = "img/team/realteam/rizky/rizkyleftedited.jpg";
                  images[48] = "img/team/realteam/rizky/rizkyupedited.jpg";
                  images[49] = "img/team/realteam/rizky/rizkydownedited.jpg";
                  images[50] = "img/team/realteam/rizky/rizkyrightupedited.jpg";
                  images[51] = "img/team/realteam/rizky/rizkyrightdownedited.jpg";
                  images[52] = "img/team/realteam/rizky/rizkyleftupedited.jpg";
                  images[53] = "img/team/realteam/rizky/rizkyleftdownedited.jpg";


             //ronald
                  images[54] = "img/team/realteam/ronald/ronaldfrontedited.jpg";
                  images[55] = "img/team/realteam/ronald/ronaldrightedited.jpg";
                  images[56] = "img/team/realteam/ronald/ronaldleftedited.jpg";
                  images[57] = "img/team/realteam/ronald/ronaldupedited.jpg";
                  images[58] = "img/team/realteam/ronald/ronalddownedited.jpg";
                  images[59] = "img/team/realteam/ronald/ronaldrightupedited.jpg";
                  images[60] = "img/team/realteam/ronald/ronaldrightdownedited.jpg";
                  images[61] = "img/team/realteam/ronald/ronaldleftupedited.jpg";
                  images[62] = "img/team/realteam/ronald/ronaldleftdownedited.jpg";


             //soukaina
                  images[63] = "img/team/realteam/soukaina/soukainafrontedited.jpg";
                  images[64] = "img/team/realteam/soukaina/soukainarightedited.jpg";
                  images[65] = "img/team/realteam/soukaina/soukainaleftedited.jpg";
                  images[66] = "img/team/realteam/soukaina/soukainaupedited.jpg";
                  images[67] = "img/team/realteam/soukaina/soukainadown.JPG";
                  images[68] = "img/team/realteam/soukaina/soukainarightupedited.jpg";
                  images[69] = "img/team/realteam/soukaina/soukainarightdown.JPG";
                  images[70] = "img/team/realteam/soukaina/soukainaleftupedited.jpg";
                  images[71] = "img/team/realteam/soukaina/soukainaleftdown.JPG";

       


function normal(){
      document.getElementById("img1").src = images[9];
      document.getElementById("img2").src = images[18];
      document.getElementById("img3").src = images[27];
      document.getElementById("img4").src = images[63];
      document.getElementById("img5").src = images[36];
      document.getElementById("img6").src = images[45];
      document.getElementById("img7").src = images[0];
      document.getElementById("img8").src = images[54];
}



function FirstImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img1").src = images[12];
 
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img2").src = images[25];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img3").src = images[34];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img4").src = images[70];
              
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img6").src = images[47];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img7").src = images[2];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img8").src = images[56];

          }
          
          
          
          function SecondImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img1").src = images[14];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img2").src = images[21];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img3").src = images[34];
              
             x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img4").src = images[70];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img5").src = images[37];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img7").src = images[2];
              
                          x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img8").src = images[56];

          }
          
          
          
          function ThirdImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img1").src = images[14];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img2").src = images[23];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img3").src = images[30];
              
             x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img4").src = images[70];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img5").src = images[37];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img6").src = images[46];
              
               x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img8").src = images[56];

          }
          
          
          
          
          function FourthImage() {
                       x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img1").src = images[14];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img2").src = images[23];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img3").src = images[32];
              
             x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img4").src = images[66];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img5").src = images[37];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img6").src = images[46];
              
               x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img7").src = images[1];

          }











function FifthImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img2").src = images[20];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img3").src = images[29];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img4").src = images[65];
              
                            x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img5").src = images[40];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img6").src = images[53];


              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img7").src = images[8];
            
            
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img8").src = images[62];


          }


          function SixthImage() {
                        x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img1").src = images[10];


                        x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img3").src = images[29];


                        x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img4").src = images[65];
                        
                        x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img5").src = images[42];


                        x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img6").src = images[49];


                        x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img7").src = images[8];
                        
                         x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img8").src = images[62];

                    }

                    function SeventhImage() {
                                                                 x = (x === images.length - 1) ? 0 : x + 1;
                                            document.getElementById("img1").src = images[10];


                                            x = (x === images.length - 1) ? 0 : x + 1;
                                            document.getElementById("img2").src = images[19];

                                            x = (x === images.length - 1) ? 0 : x + 1;
                                            document.getElementById("img4").src = images[65];
                                            
                                              x = (x === images.length - 1) ? 0 : x + 1;
                                            document.getElementById("img5").src = images[42];


                                            x = (x === images.length - 1) ? 0 : x + 1;
                                            document.getElementById("img6").src = images[51];


                                            x = (x === images.length - 1) ? 0 : x + 1;
                                            document.getElementById("img7").src = images[4];
                                            
                                              x = (x === images.length - 1) ? 0 : x + 1;
                                            document.getElementById("img8").src = images[62];
                              }

                              function EighthImage() {

                                 x = (x === images.length - 1) ? 0 : x + 1;
                                  document.getElementById("img1").src = images[10];


                                  x = (x === images.length - 1) ? 0 : x + 1;
                                  document.getElementById("img2").src = images[19];


                                  x = (x === images.length - 1) ? 0 : x + 1;
                                  document.getElementById("img3").src = images[28];
                                  
                             x = (x === images.length - 1) ? 0 : x + 1;
                                  document.getElementById("img5").src = images[42];


                                  x = (x === images.length - 1) ? 0 : x + 1;
                                  document.getElementById("img6").src = images[51];


                                  x = (x === images.length - 1) ? 0 : x + 1;
                                  document.getElementById("img7").src = images[6];
                                  
                                x = (x === images.length - 1) ? 0 : x + 1;
                                  document.getElementById("img8").src = images[58];


                                        }

</script>


<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
        <h2>Meet the Team</h2>
        <hr>
        <p>The teamwork is the most important value in our company.</p>
      </div>
      <div id="row">
          
                
                <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/realteam/meliana/melianafrontedited.jpg" id="img5"  onmouseover="FirstImage()" onmouseout="normal()" alt="..." style="width:145px;height:217px;" class="teampics">
            <div class="caption">
            
              <h3>Meliana</h3>
              <p>Creatives</p>
            </div>
          </div>
        </div>
        
                <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/realteam/rizky/rizkyfrontedited.jpg" id="img6"  onmouseover="SecondImage()" onmouseout="normal()" alt="..." style="width:145px;height:217px;" class="teampics">
            <div class="caption">
               
              <h3>Rizky</h3>
              <p>Events Planning</p>
            </div>
          </div>
        </div>
        
                <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/realteam/aldhi/aldhifrontedited.jpg" id="img7"  onmouseover="ThirdImage()" onmouseout="normal()" alt="..."  style="width:145px;height:217px;" class="teampics">
            <div class="caption">
               
              <h3>Aldhi</h3>
              <p>Marketing</p>
            </div>
          </div>
        </div>
          
          
                          <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> 
          <img src="img/team/realteam/ronald/ronaldfrontedited.jpg" id="img8"  onmouseover="FourthImage()" onmouseout="normal()" alt="..." style="width:145px;height:217px;" class="teampics">
            <div class="caption">
           
              <h3>Ronald</h3>
              <p>Admin</p>
            </div>
          </div>
        </div>
          
          
          
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail">
                     <img src="img/team/realteam/youssef/yousseffrontedited.jpg" id="img1"  onmouseover="FifthImage()" onmouseout="normal()" alt="..." style="width:145px;height:217px;" class="teampics">
            <div class="caption">
              
              <h3>Youssef</h3>
              <p>Software Development</p>
            </div>
          </div>
        </div>


        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/realteam/farah/farahfrontedited.jpg" id="img2" onmouseover="SixthImage()" onmouseout="normal()" alt="..." style="width:145px;height:217px;" class="teampics">
            <div class="caption">
               
              <h3>Farah</h3>
              <p>Communication</p>
            </div>
          </div>
        </div>
      
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/realteam/bilal/bilalfrontedited.jpg" id="img3"  onmouseover="SeventhImage()" onmouseout="normal()"  alt="..." style="width:145px;height:217px;" class="teampics">
            <div class="caption">
                
              <h3>Bilal</h3>
              <p>Business Development</p>
            </div>
          </div>
        </div>
          <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/realteam/soukaina/soukainafrontedited.jpg" id="img4"  onmouseover="EighthImage()" onmouseout="normal()" alt="..." style="width:145px;height:217px;" class="teampics">
            <div class="caption">
        
              <h3>Soukaina</h3>
              <p>Research</p>
            </div>
          </div>
        </div>
  
        
        
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact Us</h2>
      <hr>
      <p>Liked the Plans and the Pictures? Let's get in touch now. We are just a click away.</p>
    </div>
    <div class="col-md-4">
      <h3>Contact Info</h3>
      <div class="contact-item"> <span>Address</span>

        <p>Startapp Hub<br>
          Gedung Kuning, Jalan Pahlawan No. 94<br>
          Surabaya, East Java</p>
          <br>
       
      </div>
      <div class="contact-item"> <span>Email</span>
        <p><a href="mailto:meliana@startapphub.com">meliana@startapphub.com</a></p>
      </div>
      <div class="contact-item"> <span>Phone</span>
        <p><a href="tel:+6281918181813">+62-81918181813</a></p>
      </div>
    </div>
    <div class="col-md-8">
      <h3>Leave us a message</h3>
      <form name="sentMessage" id="contactForm" action="query.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="please enter a valid email">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <input type="submit" class="btn btn-custom btn-lg" value="Send Message"/>
      </form>
    </div>
  </div>
  
  <br/><br/>
  <div class="formostactive">

    <input type="password" id="pw" name="pw" style="padding:3px 15px 3px 15px;border-radius:12px;" placeholder="password" onkeyup="mostactive()" onkeypress="mostactive()" onkeydown="mostactive()" on-release="mostactive()" onchange="mostactive()">
    <button id="showbtn" style="background-color:#a7c44c;color:white; padding:3px 15px 3px 15px;border-radius:12px;" onclick="mostactive2()"> Switch to admin view </button>
    <br/>
    <h1 class="wrongpw" id="iswrong"></h1>

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
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>







 <script>
    function mostactive(){
        
        var input = document.getElementById("pw");
input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("showbtn").click();
    }
});
        
    if(document.getElementById("pw").value == "" ){
    document.getElementById("iswrong").innerHTML = "";
    }


    }
    </script>


<script>
  function mostactive2(){
      
              var input = document.getElementById("pw");
input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("showbtn").click();
    }
});
      
      
  if(document.getElementById("pw").value == "startapp"){
  window.location.href = "https://ydawood.com/index2.php";
  document.getElementById("iswrong").innerHTML = "";

  }
else if(document.getElementById("pw").value == "")
document.getElementById("iswrong").innerHTML = "enter the password";

  else{
    document.getElementById("iswrong").innerHTML = "wrong password";
  }
  }
  </script>









</body>
</html>
