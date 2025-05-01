<?php
$sleep = $data['sleep'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Natural Remedies</title>
        <!-- Favicon-->
        <link href="<?php echo URLROOT; ?>/assets/css/styles.css" rel="stylesheet" />
    </head>




        

    <body class="b1">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Natural Remedies</a>
                <button class="navbar-toggler pull-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#!">&#169; 2022, All rights reserved.</a></li>
                        
                </div>
            </div>
        </nav>
        <!-- Page Content-->
      
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


*{
  font-family: 'Poppins', sans-serif;
}

@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}


.b1 {
	background-image: linear-gradient(45deg, #fff, #fff);
	font-family: 'Muli', sans-serif;
	display: block;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	min-height: 100vh;
	margin: 0;
}

.courses-container {
	
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 900px;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
}

[pointer-events="bounding-box"] {
    display: none
}

.course-preview {
	background-color: #fff;
	color: #333;
	padding: 30px;
	max-width: 450px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	background-color: #64902a;
	color: #fff;
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 350px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #64902a;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

.btn {
	background-color: #fff;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #64902a;
	font-size: 16px;
	padding: 12px 25px;
	
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}


.btn2 {
	background-color: #fff;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #64902a;
	font-size: 16px;
	padding: 12px 25px;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}

/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #001F61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 169px;	
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #97A5CE;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color: #001F61;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}

.social-panel h4 {
	margin: 20px 0;
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color: #001F61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}

.floating-btn {
	border-radius: 26.5px;
	background-color: #001F61;
	border: 1px solid #001F61;
	box-shadow: 0 16px 22px -17px #03153B;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}

.floating-btn:hover {
	background-color: #ffffff;
	color: #001F61;
}

.floating-btn:focus {
	outline: none;
}

.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: #FF7500;
	text-decoration: none;
}

@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}
.imageContainer {
    float: left;
	top:0px
}
</style>

<div id="conent">
<img id="logo1" class="ribbon" src="<?php echo URLROOT; ?>/assets/holixer_logo.png" alt="" width="200"style="padding:30px;float:left"> 
<img id="logo2" class="ribbon" src="<?php echo URLROOT; ?>/assets/natural_logo.png" alt="" width="130" style="padding:30px;float:right"> 
</div><br><br><br>


<center>
   <div class="courses-container" style="margin-top:100px">
	<div class="course">
		
	
		<div class="course-info">
			
			
		
			
            <div class="row">
                <div class="col-md-8" style="text-align:left !important">
                
                <h2>Welcome</h2>
                 <h2>Know your stress and sleep in a scientific way</h2>
                <br>
                <a href="<?php echo URLROOT; ?>/test/home"><button class="btn">Take Test</button></a>
                </div>
                <div class="col-md-4">
                <img src="<?php echo URLROOT; ?>/assets/mascot.png" alt="" width="150">
                </div>
            </div>
			

           
			
			
		</div>
	</div>

</center>     	

<script src="https://cdnjs.cloudflare.com/ajax/libs/fusioncharts/3.18.0/fusioncharts.js" integrity="sha512-p4vi19b+fN2PUtKw8/nrVNSnGZjW/uYxSMmD+uNezKRydFL3JTatJM3CJVn8x96uZJM2vTh79v/vj0M/AIHIEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>


