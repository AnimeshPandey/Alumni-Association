



                 <!--  <form class="col s12 center" action="/searchresults" method="get">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input placeholder="Search name" name="name"  type="text" class="validate " style="background-color:black;color:white;">

                                            </div>

                                            <div class="input-field col s6">
                                                <input name="roll_no"  type="text" class="validate" style="background-color:black; color:white;" placeholder="Search roll_no">

                                            </div>

                                            <div class="input-field col s2 offset-m5">
                                                <button class="btn waves-effect waves-light right" type="submit" name="action" >Submit
    <i class="material-icons right">send</i>
  </button>
                                            </div>
                                        </div>
                                    </form>
        </div> -->
    




<!DOCTYPE html>
<html lang="en">
  <head>
  <html lang="{{ config('app.locale') }}">
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

        <li>
        <form id="demo-2"  class="col s12 center" action="/searchresults" method="get">
           <input style="padding:0px 10px  0px 10px; background-color:#fff; border-radius:1em; margin:1em;" type="search" name="roll_no" placeholder="Search">&emsp;
           <input type="submit" value="" hidden>&emsp;
           <div class="input-field col s6" style="padding:5px;">&emsp;
                                            </div>
        </form>
          </li>


       @if (Route::has('login'))

           @if (Auth::check())
           @endif
        <li><a class="waves-effect waves-light btn" href="{{ url('/login') }}"> Log In<i class="material-icons right">perm_identity</i></a></li>

        <li><a class="waves-effect waves-light btn" href="{{ url('/register') }}">Sign Up<i class="material-icons right">email</i></a></li>

          
        <li><a class="waves-effect waves-light btn" href="./index.html#about">About<i class="material-icons right">info_outline</i></a></li>
        

        @endif

      <!--   @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        
                
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
      </ul> -->

    </div>
  </nav>
</header>


        <!--  @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->

<!--  Parallax Section  -->

<main>
  <div class="parallax-container wow fadeInUp" style="z-index: 999999;">
    <div class="parallax"><img src="img/office2.jpg"></div>
  </div>
<!--     -->
<!--     <div class="row container" style="font-family: 'Ubuntu';"">
      <h2 class="text-darken-3 center-align">About Tvaran</h2> -->
<div id="teal2" class="block teal lighten-1 container-fluid wow fadeInUp" >
  <nav class="pushpin-demo-nav wow fadeInUp" data-target="teal2" style="z-index: 99999;height:4em;" id="about">
    <div class="nav-wrapper teal">
      <div class="container">
        <a href="#" class="brand-logo center" style="font-size: 3em;">About Alumni Association&emsp;</a>
      </div>
    </div>
  </nav>
          <div class="col s12 m12 center-align" style="height: 48em; margin-top: 5em;">
          <div class="">
            <hr>
            <div class="" style="font-family: 'Ubuntu'; font-size: 4em; color: white; padding-left: 1.2em;padding-right: 1.2em;">
              <h5>Alumni Association IIITDM Jabalpur, is an institute body run by the students of IIITDMJ under the guidance of Dean of Alumni. It is committed towards the enhancement of relations between alumni and students of IIITDM Jabalpur. 
 
</h5>
      <h5>
It provides a medium for students to effectively utilize the vast experiences and wisdom of Alumni. It ensures that the college always stays a home for our alumni and is ever welcoming. We realize the immense benefits that both the students and alumni stand to gain by contact with the other. </h5><hr>
<center><h3>Our Purpose</h3></center>
      <h5>
Our alumni are one of the major reasons for the fame of our college. They are spread over myriad fields and professions. They are indeed a veritable source of guidance to students since they are able to give unbiased, candid and pragmatic advice. It is undoubtedly a great help that alumni choose to come forward on their own and they have ceaselessly helped over the years. At the same time, Alumni also stand to benefit since the current students are the future professionals, researchers, officers and teachers. The alumni realize that if this wealth of talent is given the right impetus, they will be of crucial help to themselves and to humanity as a whole. Apart from that, we wish to launch many initiatives which will act as a common platform for interaction and networking between students and alumni. </h5>

      <h5>
Alumni association ensures that alumni are kept perfectly updated about the various student activities, new faculty and current research going on in the Institute via the Newsletters. 


      </h5><hr>
            </div>
          </div>
        </div>
<!--        -->
    </div>  
     <div id="teal1" class="block blue lighten-1 container-fluid wow fadeInUp" style="margin-top: -0.7em;">
  <nav class="pushpin-demo-nav" data-target="teal1" style="z-index: 99999;">
    <div class="nav-wrapper teal">
      <div class="container">
        <a href="#" class="brand-logo center" style="font-size: 3em;">News &amp; Events</a>
        
      </div>
    </div>
  </nav>
    <div class="row" style="position: relative;top:0em;">
      <div class="col s6 m3 wow fadeInUp">
          <div class="card large">
            <div class="card-image">
              <img src="img/alumni.jpg">
              <span class="card-title" style="color:black;"></span>
            </div>
            <div class="card-content">
              <p>This year's version of the alumni gathering will be held in May 2017.</p>
            </div>
            <div class="card-action">
              <a href="category.html#engg"><b>View More</b></a>
            </div>
          </div>
        </div>


        <div class="col s6 m3 wow fadeInUp">
          <div class="card large">
            <div class="card-image">
              <img src="img/achi.gif">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>Discover the latest achievements of our alumni in different sectors.</p>
            </div>
            <div class="card-action">
              <a href="category.html#med"><b>View More</b></a>
            </div>
          </div>
        </div>

        <div class="col s6 m3 wow fadeInUp">
          <div class="card large">
            <div class="card-image">
              <img src="img/abhi.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>Take a peek into the ongoing preparations for Abhikalpan 2017, the technical fest of IIITDMJ.</p>
            </div>
            <div class="card-action">
              <a href="category.html#law"><b>View More</b></a>
            </div>
          </div>
        </div>

        <div class="col s6 m3 wow fadeInUp">
          <div class="card large">
            <div class="card-image">
              <img src="img/logo.jpg">
              
            </div>
            <div class="card-content">
              <p>The clubs of IIITDMJ are up and ready for several ventures, they need your support.</p>
            </div>
            <div class="card-action">
              <a href="category.html#manage"><b>View More</b></a>
            </div>
          </div>
        </div>
  </div>
</div>
  
  <div class="parallax-container wow fadeInUp" style="margin-top: -1.3em;">
    <div class="parallax"><img src="img/parallax2.JPG"></div>
  </div>
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
            <p class="grey-text text-lighten-4">For any more information, you can contact us on:<br><b><em style="font-size: 1.2em;font-family: 'Ubuntu'">alumni@iiitdmj.ac.in</em><br><br><img src="img/alu.png" style="height:5em;"></b></p>
            
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