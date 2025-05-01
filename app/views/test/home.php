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
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!" style="color:#555">Natural Remedies</a>
                <button class="navbar-toggler pull-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a style="color:#555" class="nav-link" href="#!">&#169; 2022, All rights reserved.</a></li>
                        
                </div>
            </div>
        </nav>
        <!-- Page Content-->
      
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


*{
  font-family: 'Poppins', sans-serif;
}

body{

  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #fff;
}

.container{
  position: relative;
}

.container .card{
  margin-top:20px;
  position: relative;
  width: 520px;
  height: 450px;
  background: #b0d235;
  border-radius: 20px;
  overflow: hidden;
}

.container .card:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #a6906c;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card:hover:before{
  clip-path: circle(300px at 80% -20%);
}

.container .card:after{
  content: '';
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(255,255,25,0.05)
}

.container .card .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card .imgBx img{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-25deg);
  width: 270px;
}

.container .card .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card:hover .contentBx{
  height: 210px;
}

.container .card .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
}

.container .card .contentBx .size, .container .card .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .card:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .card:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .card .contentBx .size h3, .container .card .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}

.container .card .contentBx .size span{
  width: 56px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
}

.container .card .contentBx .size span:hover{
  background: #9bdc28;
}

.container .card .contentBx .color span{
  width: 20px;
  height: 20px;
  background: #ff0;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}

.container .card .contentBx .color span:nth-child(2){
  background: #9bdc28;
}

.container .card .contentBx .color span:nth-child(3){
  background: #03a9f4;
}

.container .card .contentBx .color span:nth-child(4){
  background: #e91e63;
}

.container .card .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  margin-top: 10px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 0;
}

.container .card:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;
  
}



        </style>
         <img id="logo" src="<?php echo URLROOT; ?>/assets/holixer_logo.png" alt="" width="200" style="padding:30px"> 
         <img id="logo" src="<?php echo URLROOT; ?>/assets/natural_logo.png" alt="" width="130" style="padding:30px;float:right"> <br><br><br>
        <div class="container">
      
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="imgBx">
                          <img src="<?php echo URLROOT; ?>/assets/sleep.gif">
                        </div>
                        <div class="contentBx">
                            <h2>Sleep Test</h2><br><br>
                            <div class="size">
                              <!-- <h3>Size :</h3>
                              <span>7</span>
                              <span>8</span>
                              <span>9</span>
                              <span>10</span> -->
                            </div>
                            <div class="color">
                              <!-- <h3>Color :</h3>
                              <span></span>
                              <span></span>
                              <span></span> -->
                              <p>The athens sleep test will assess the severity of sleep disorder and quality of sleep</p>
                            </div>

                            <a style="border-radius:30px;" href="<?php echo URLROOT; ?>/test/sleep/1">Start Test</a>
                           
                          </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="imgBx">
                          <img src="<?php echo URLROOT; ?>/assets/stress.gif" style="width:220px">
                        </div>
                        <div class="contentBx">
                          <h2>Stress Test</h2><br><br>
                          <div class="size">
                            <!-- <h3>Size :</h3>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span> -->
                          </div>
                          <div class="color">
                            <!-- <h3>Color :</h3>
                            <span></span>
                            <span></span>
                            <span></span> -->
                            <p>The perceived stress test will measure and evaluate the stress levels</p>
                          </div>
                          <a style="border-radius:30px;" href="<?php echo URLROOT; ?>/test/stress/1">Start Test</a>
                        </div>
                      </div>
                </div>
            </div>
           
          </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

