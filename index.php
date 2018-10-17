<!doctype html>
<html lang="en" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <title>Dexterix-2018</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.css" />
      <link rel="stylesheet" href="css/home.css" />
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,100,700%7Dosis:400,500" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script type='text/javascript' src='js/jquery.particleground.js'></script>
      <script type='text/javascript' src='js/demo.js'></script>
      <style>
         body{
         font-family: 'Raleway', sans-serif;
         background-image: url("images/stars.jpg");
         }
         .nav-link{
         color:white!important;
         }
         /* make keyframes that tell the start state and the end state of our object */
         @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
         @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
         @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
         .fade-in {
         opacity:0;  /* make things invisible upon start */
         -webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
         -moz-animation:fadeIn ease-in 1;
         animation:fadeIn ease-in 1;
         -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
         -moz-animation-fill-mode:forwards;
         animation-fill-mode:forwards;
         -webkit-animation-duration:1s;
         -moz-animation-duration:1s;
         animation-duration:1s;
         }
         .fade-in.one {
         -webkit-animation-delay: 0.7s;
         -moz-animation-delay: 0.7s;
         animation-delay: 0.7s;
         }
      </style>
   </head>
   <body>
      <nav style="opacity:50%!important;  font-weight: 250; color:white!important; font-family: 'Raleway', sans-serif; min-height:55px !important; font-size: 13.5px;  background:rgba(0,0,0,0.5); " class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">DEXTERIX'18</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item px-2">
                  <a style="color:white!important;" class="nav-link" href="#">HOME</a>
               </li>
               <li class="nav-item px-2">
                  <a style="color:white;" class="nav-link" href="about.php">ABOUT</a>
               </li>
               <li class="nav-item px-2">
                  <a style="color:white;"  class="nav-link" href="comingsoon.php">MAKEATHON</a>
               </li>
               <li class="nav-item px-2">
                  <a  style="color:white;" class="nav-link" href="events.php">EVENTS</a>
               </li>
              
          <li class="nav-item dropdown px-2">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SCHEDULE
        </a>
        <div class="dropdown-menu" style="background-color: black;"  aria-labelledby="navbarDropdown">
          <a style="color:white; font-weight:300;  font-family: 'Raleway', sans-serif;" class="dropdown-item" href="day1.php">DAY 1</a>
          <a style="color:white; font-weight:300;   font-family: 'Raleway', sans-serif;" class="dropdown-item" href="day2.php">DAY 2</a>
         
      </li>
               <li class="nav-item px-2">
                  <a style="color:white;"  class="nav-link" href="comingsoon.php">SPONSORS</a>
               </li>
                <li class="nav-item px-2">
                    <a style="color:white;"  class="nav-link" href="dexterix2017.php">DEXTERIX 2017</a>
                </li>
               <li class="nav-item px-2">
                  <a style="color:white;"  class="nav-link" href="contact-us.php">CONTACT US</a>
               </li>
            </ul>
         </div>
      </nav>
      <div  id="particles">
         <div  id="intro">
            <div class="fade-in one"  >
               <h1 style="font-weight:500!important; color:#f5f5f5">DEXTERIX'18</h1>
               <p>November 2nd | November 3rd</p>
            </div>
         </div>
      </div>
   </body>
</html>