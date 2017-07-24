<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alumni Association - Homepage</title>
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="parallax-demo" style="overflow-x:hidden;"><header>
  <nav style="height: 5em;position: fixed;z-index:99999999;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="./index.html" class="brand-logo" style="font-size: 2.5em;">&emsp;<img src="img/logo.jpg" style="height:1.5em;position: relative;top:8px;">&emsp;Alumni Association </a>
      <ul class="right hide-on-med-and-down">
      
        <li><a class="waves-effect waves-light btn">Log In<i class="material-icons right">perm_identity</i></a></li>
        <li><a class="waves-effect waves-light btn">Sign Up<i class="material-icons right">email</i></a></li>
        <li><a class="waves-effect waves-light btn" href="./index.html#about">About<i class="material-icons right">info_outline</i></a></li>
      </ul>

    </div>
  </nav>
</header>

  <!--  Parallax Section  -->

<main>
  <div class=" wow fadeInUp" style="z-index: 999999;">
      <div class="" style="padding-top:7vw;">
          <center><h3 style="font-family: 'Ubuntu';">Search Results</h3></center>
    <div class="row" style="padding:3vw;">

      @foreach($studs as $stu)
     <!--  <div class="col m1"></div> -->
      <div class="col s12 m9" style="margin-left: 10em;">
          <div class="card" style="background-color:#03a7a7;">
       <div class="card-content hoverable">
       <ul>
            <li  style="font-family: 'Ubuntu Mono', monospace; font-size: 1.5em;"><b>Name:{{$stu->name}} </b></li> 
            <li  style="font-family: 'Ubuntu Mono', monospace;">Roll Number:{{$stu->roll_no}} &emsp;
            </li>
        </ul>
        <a href="/details/{{$stu->roll_no}}" style="font-family: 'Ubuntu';color:white;" class="btn black"> View more details</a></li>
            </div>
  </div>
  </div>
  <!-- <div class="col m2"></div> -->
    @endforeach
     </div>
    </div>
  </div>
  
  <!-- <div class="parallax-container wow fadeInUp" style="margin-top: -1.3em;">
    <div class="parallax"><img src="/img/parallax2.JPG"></div>
  </div> -->
  </main>

    <footer class="page-footer wow fadeInUp" style="background-color: #03b7b7;">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Help Alumni Association Grow</h5>
            <p class="grey-text text-lighten-4">We are a team of volunteering students working on maintaining this website. Any amount would help support and continue development on this project and is greatly appreciated.</p>
            

          </div>
          <div class="col l4 s12">
            <h5 class="white-text">Join the Discussion</h5>
            <p class="grey-text text-lighten-4">We have a Discussion Forum set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
            
          </div>

          <div class="col l4 s12">
            <h5 class="white-text">Contact Us</h5>
            <p class="grey-text text-lighten-4">For any more information, you can contact us on:<br><b><em style="font-size: 1.2em;font-family: 'Ubuntu'">alumni@iiitdmj.ac.in</em></b></p>
            
          </div>
          
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2017 IIITDMJ Alumni Association, All rights reserved.
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
  // Initialize collapse button
  $(document).ready(function(){
        $(".button-collapse").sideNav();
    });
  
    </script>
    <script>
              new WOW().init();
              </script>

  </body>
</html>







 <!-- <ul>
            @foreach($studs as $stu)

             <div class="row" style="background-color: #009688;">
    <div class="col s12 m6 offset-m3">
      <div class="card " style="width:700px;">
       
        <div class="card-content hoverable">

            <li  style="font-family: 'Ubuntu Mono', monospace; font-size: 1.5em;"> <b>Name:{{$stu->name}} </b></li> <br>
            <li  style="font-family: 'Ubuntu Mono', monospace;">Roll Number:{{$stu->roll_no}} &emsp;
            </li><br> &emsp;
            <a href="/details/{{$stu->roll_no}}"> View more details</a></li>


            </div>
      </div>
    </div>

  </div>

            @endforeach
        </ul> -->