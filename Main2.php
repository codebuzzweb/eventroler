<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eventroler</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
    <!-- <link href="login.css" rel="stylesheet"> -->
    <!-- <script type="text/javascript" src="login.js"></script> -->
    <style type="text/css">
        body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=email],textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

    </style>
</head>

<body>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">EVTR</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Main2.php.html">
                    <span class="glyphicon glyphicon-fire"></span> 
                    Eventroler
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="\Main2.php">Home</a>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="Events">
                            <li><a href="#upevents">Upcoming Event</a></li>
                            <li><a href="#revents">Recent Events</a></li>

                        </ul>
                    </li>
                    </li>
                    
                    <li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Department<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="\csefile.html">Computer Science</a></li>
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">For Everyone</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="aboutus.php">About Us</a>
                    </li>
                    
                </ul>

				<!-- Search -->	
					<!---Login-->
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;
                    background:linear-gradient(white,grey,white); color: black; font-size: 17px; border-radius: 5px; height: 25px; line-height: 2px;">ContactUs</button>
					<!-- <button ><a href="file:///C:/Users/Anupa/Desktop/LMS%20Website/Main%20Website/Admin.html">Admin Log In</a> </button> -->
					<!-- <button ><a href="file:///C:/Users/Anupa/Desktop/LMS%20Website/Main%20Website/login.html">User Log In</a> </button> -->
				

<!--####################################################################################################################  -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="Main.html" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    
    </div>

    <div class="container">
      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="uname" required>

      <label for="psw"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="psw" required>
      
       <label for="" name="Message"><b>Message</b></label>
       <textarea style="width: 100%;" placeholder="Enter Message"></textarea>

      <button type="submit" style="background-color: grey; ">Submit</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>

</div>



<!--####################################################################################################################  -->



         
            </div>
        </div>
        <!-- /.container -->
    </nav>

	   <div  style=" margin-top: 45px;>
        <div class="container" style="background-color:; width: 60%;">
        
        <div id="feature-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#feature-carousel" data-slide-to="1"></li>
              <li data-target="#feature-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#">
                        <div style="background-color:;">
                        <img class="img-responsive" src="\image\1.jpg">
                        </div>
                    </a>

                    <div class="carousel-caption">
                        <h3>Why Hackathon</h3>
                        <p style="width: 70%; margin-left: 15%; font-size: 20px; color: white;">Hackathon is a 24-hour coding marathon where you'll have to choose a real-life problem statement and implement a solution for the same.</p>
                    </div>
                </div>
                <div class="item">
                    <a href="#">
                        <img class="img-responsive" src="\image\2.jpg" alt="">
                    </a>
                    <div class="carousel-caption">
                        <h3>Why Events/Workshops</h3>
                        <p>The Events are  the most Imprtant of a Computer Science/any Students.</p>
                    </div>
                </div>
                <div class="item">
                    <a href="#">
                        <img class="img-responsive" src="\image\3.jpg" alt="">
                    </a>
                    <div class="carousel-caption">
                    <h3>Internet Of Things</h3>
                    <p style="width: 70%; margin-left: 15%; font-size: 20px; color: white;">The Internet of things is the network of physical devices, vehicles, home appliances, and other items embedded with electronics, software, sensors, actuators, and connectivity which enables these things to connect, collect and exchange data.</p>
                    
                    </div>
                </div>            
            </div>
            <a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
    </div>


    <!-- Content -->
    <div class="container">

        <!-- Page Intro -->
          <div class="row page-intro">
            <div class="col-lg-12" id="revents">
                <h1>Recent Events and Workshops
                    <small>Events/Workshops</small>
                </h1>
                <p>We have provide all the events and workshops for students, Where they can showcase their talent as well as learn something to improve skills to prepare for future events.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
            <article class="col-md-4 article-intro">
                <a href="#">
                    <img class="img-responsive img-rounded" src="\image\srm.jpg" alt="">
                </a>
                <h3>
                    <a href="#">HAKATHON- SRM</a>
                </h3>
                <p>Hackathon Was 36-hour coding marathon where students to choose a real-life problem statement and implement a solution for the same. Technology is not a barrier. You may choose any of the available or trending technology to implement your solution. You may develop an android app, or a web app whatever you think is most appropriate regarding the problem.</p>
            </article>
            <article class="col-md-4 article-intro">
                <a href="#">
                    <img class="img-responsive img-rounded" src="\image\delhi.jpg" alt="">
                </a>
                <h3>
                    <a href="#">General Awareness Campaign- New Delhi  </a>
                </h3>
                <p>'PAHAL' is a NGO who is organising a General awareness campaign in different regions of New Delhi for one month on every saturday and sunday, where students can easily register themselves to spread awareness among different people.</p>
            </article>

            <article class="col-md-4 article-intro">
                <a href="#">
                    <img class="img-responsive img-rounded" src="\image\kanpur.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Tree Plantation Drive at PSIT Kanpur </a>
                </h3>
                <p>
                    PSIT Kanpur is organising a one day tree plantation drive in kanpur city, lots of students are already participating in this event, so if you are also willing to plant trees in kanpur city, you are free to join us
            </article>
            

        </div>
        <!-- /.row -->

    </div>



  <div class="row page-intro">
            <div class="col-lg-12" id="upevents">
                <h1>Upcoming Events and Workshops
                    <small>Events/Workshops</small>
                </h1>
                <p>There are Some Upcoming Events you can Apply [ Clcik]</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
            <article class="col-md-4 article-intro">
                <a href="regform.php">
                    <img class="img-responsive img-rounded" src="\image\cse1.jpg" alt="">
                </a>
                <h3>
                    <a href="regform.php">HAKATHON- NIT Kurukshetra</a>
                </h3>
                <p>Hackathon is a 24-hour coding marathon where you'll have to choose a real-life problem statement and implement a solution for the same. Technology is not a barrier. You may choose any of the available or trending technology to implement your solution. You may develop an android app, or a web app whatever you think is most appropriate regarding the problem.</p>
            </article>
            <article class="col-md-4 article-intro">
                <a href="regform.php">
                    <img class="img-responsive img-rounded" src="\image\blood.jpg" alt="">
                </a>
                <h3>
                    <a href="regform.php">BLOOD DONATION - Amritsar </a>
                </h3>
                <p> Lovely professional university, jalandhar, Punjab is organising a Blood Donatoion camp for the survivors of the recent train accident happened in Amritsar. So those who are willing to help the needy can easily register themselves to the links provided. </p>
            </article>

            <article class="col-md-4 article-intro">
                <a href="regform.php">
                    <img class="img-responsive img-rounded" src="\image\cse2.jpg" alt="">
                </a>
                <h3>
                    <a href="regform.php">BLOGATHON- DIT DEHRADUN, UK</a>
                </h3>
                <p>
                    Dehradun Intitute of technology is organising a Blogathon under their annual fest from 01 JAN to 03 JAN, all the blogging ,programming and web development enthusiats can register themselves and win exciting prizes.
                </p>
            </article>
            

        </div>
        <!-- /.row -->

    </div>



	
	<footer>
	
		<div class="footer-blurb">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 footer-blurb-item">
						<img class="img-circle" src="\image\hack.png" alt="" width="90" height="90">
						<h3>
                    <a href="regform.php">Hacathon</a>
                </h3>
					</div>
					<div class="col-sm-4 footer-blurb-item">
						<img class="img-circle" src="image\blog.png" alt="" width="90" height="90">
						<h3>
                    <a href="regform.php">Blogathon</a>
                </h3>
					</div>
					<div class="col-sm-4 footer-blurb-item">
						<img class="img-circle" src="\image\iot.png" alt="" width="90" height="90">
						<h3>
                    <a href="regform.php">Internet of Things</a>
                </h3>
					</div>

				</div>
				<!-- /.row -->	
			</div>
        </div>
        
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; Eventroler 2018 | All rights Reserved| </p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>
	
</body>

</html>
<?php  
     if(isset($_GET['submit']))
     {
         $con = mysqli_connect('localhost','root','','eventroler') or die('Error in connection');
         $name = $_GET['uname'];  
         $email = $_GET['email'];
         $Message = $_GET['Message'];
      
   
   $q = "INSERT INTO contact(Name,Email,Message) VALUES('$name','$email','$Message')";
    $run = mysqli_query($con,$q);   
    if(!$run)
    {
        echo "Error in run".mysqli_error($con);
    }
    else
    {
        echo "Susssss";
    }
  mysqli_close($con);
     }  
   
  ?>


