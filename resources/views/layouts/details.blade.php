<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni Association</title>
    <!-- CSS-->
    <link href=".././css/prism.css" rel="stylesheet">
    <link href=".././css/animate.css" rel="stylesheet">
    <link href=".././css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
    <link href=".././css/style1.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      html, body, .block {
        height: 100%;
      }
      nav ul li a:hover, nav ul li a.active {
        background-color: rgba(0,0,0,.1);
      }
      footer {
        padding-left: 0;
      }
    </style>
  </head>



<body>


  <nav style="height: 5em;position:;z-index:99999999;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href=".././index.html" class="brand-logo" style="font-size: 2.5em;">&emsp;<img src=".././img/logo.jpg" style="height:1.5em;position: relative;top:8px;">&emsp;Alumni Association </a>
      <ul class="right hide-on-med-and-down">
      
        <li><a class="waves-effect waves-light btn">Log In<i class="material-icons right">perm_identity</i></a></li>
        <li><a class="waves-effect waves-light btn">Sign Up<i class="material-icons right">email</i></a></li>
        <li><a class="waves-effect waves-light btn" href=".././index.html#about">About<i class="material-icons right">info_outline</i></a></li>
      </ul>

    </div>
  </nav>




            @foreach($stu_del as $studel)



             <nav class="pushpin-demo-nav wow fadeInUp" data-target="teal3" style="z-index: 99999; height:5em;" id="engg">
    <div class="nav-wrapper teal">
      <div class="container">
        <a href="#" class="brand-logo center" style="font-size:4em;">{{$studel->name}}</a>
        
      </div>
    </div>
  </nav>


    <div id="teal1" class="block teal darken-3 container-fluid wow fadeInUp" style="height:35em;" >
      <nav class="pushpin-demo-nav" data-target="teal1" style="z-index: 99999;" id="engg">
        <div class="nav-wrapper teal darken-4">
          <div class="container">
            <a href="#" class="brand-logo center">Basic Information</a>
            
          </div>
        </div>
      </nav>

      <div class="center-align">
        <img src=".././images/{{$studel->name}}.jpg" style="height: 100px; width: auto; border: 2px solid black;">

        <form action="upload" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
          <input type="hidden" name="imagename" value="{{$studel->name}}">
          <input type="file" name="image" value="Change Photo">
          <input type="submit" value="Change Photo">
        </form>
      </div>


        <div class="row" style="position: relative;top:9em;">
      <div class="col s6 m3 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
        <div class="card-panel card small teal lighten-2" style="height:18em;">
            <div class="center-align"><i class="medium material-icons white-text">person_pin</i></div>
            <h4 class="white-text center-align">Roll Number</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$studel->roll_no}}</h5>
          </span>
      
    </div>
        </div>




         <div class="col s6 m3 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
        <div class="card-panel card small teal lighten-2" style="height:18em;">
            <div class="center-align"><i class="medium material-icons white-text">info</i></div>
            <h4 class="white-text center-align">Gender</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$studel->gender}}</h5>
          </span>
      
    </div>
        </div>


         <div class="col s6 m3 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
        <div class="card-panel card small teal lighten-2" style="height:18em;">
            <div class="center-align"><i class="medium material-icons white-text">star</i></div>
            <h4 class="white-text center-align">Specialization</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$studel->specialisation}}</h5>
          </span>
      
    </div>
        </div>


        @foreach($club_del as $clubdel)

         <div class="col s6 m3 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
        <div class="card-panel card small teal lighten-2" style="height:18em;">
            <div class="center-align"><i class="medium material-icons white-text">star</i></div>
            <h4 class="white-text center-align">Donates To</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$clubdel->club_name}}</h5>
          </span>
      
    </div>
        </div>

        @endforeach
</div>

</div>



  
    <div id="teal2" class="block teal lighten-1 wow fadeInUp" style="position: relative;top:0em;">
  <nav class="pushpin-demo-nav" data-target="teal2" style="z-index: 99999;" id="med">
    <div class="nav-wrapper teal">
      <div class="container">
        <a href="#" class="brand-logo center">Professional Information</a>
        
      </div>
    </div>
  </nav>



  <div class="row" style="position: relative;top:9em;">
      <div class="col s6 m4 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        

        @foreach($pro_del as $prodel)
        <div class="card-panel card small teal lighten-2" style="height:30em;">
            <div class="center-align"><i class="medium material-icons white-text">assignment</i></div>
            <h4 class="white-text center-align">Projects</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$prodel->project_name}}</h5>
          </span>


           <span class="white-text center-align"><h5 class="white-text">{{$prodel->project_desc}}</h5>
          </span>

     </div>

     @endforeach




        </div>





         <div class="col s6 m4 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
          @foreach($ach_del as $achdel)
        <div class="card-panel card small teal lighten-2" style="height:30em;">
            <div class="center-align"><i class="medium material-icons white-text">new_releases</i></div>
            <h4 class="white-text center-align">Achievements</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$achdel->achievements}}</h5>
          </span>
      
    </div>

         @endforeach
        </div>




       

  
              <!--  
               <div class="card-panel card small teal lighten-2" style="height:30em;">
            <div class="center-align"><i class="medium material-icons white-text">store</i></div>
            <h4 class="white-text center-align">Current Company</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text"></h5>
          </span> 
      
    

     
        </div> -->

  </div>
</div>



  <div id="teal3" class="block teal darken-3 wow fadeInUp" style="height:35em;">
  <nav class="pushpin-demo-nav" data-target="teal3" style="z-index: 99999;" id="law">
    <div class="nav-wrapper teal darken-4">
      <div class="container">
        <a href="#" class="brand-logo center">Contact Information</a>
        
      </div>
    </div>
  </nav>

  <div class="row" style="position: relative;top:9em;">
      <div class="col s6 m4 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
        <div class="card-panel card small teal lighten-2" style="height:18em;">
            <div class="center-align"><i class="fa fa-linkedin-square" style="font-size:4em;color:white;"></i></div>
            <h4 class="white-text center-align">LinkedIn</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$studel->linkedIn}}</h5>
          </span>
      
    </div>
        </div>


        <div class="col s6 m4 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
        <div class="card-panel card small teal lighten-2" style="height:18em;">
            <div class="center-align"><i class="fa fa-facebook-square" style="font-size:4em;color:white;"></i></div>
            <h4 class="white-text center-align">Facebook</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$studel->fb}}</h5>
          </span>
      
    </div>
        </div>

       <div class="col s6 m4 wow fadeInUp" style="background color:#00e0e0;padding-left:3em;padding-right:3em;">
        
        <div class="card-panel card small teal lighten-2" style="height:18em;">
            <div class="center-align"><i class="fa fa-phone-square" style="font-size:4em;color:white;"></i></div>
            <h4 class="white-text center-align">Phone</h4>
            <hr>
          <span class="white-text center-align"><h5 class="white-text">{{$studel->roll_no}}</h5>
          </span>
      
    </div>
        </div>

  </div>
  </div>

     @endforeach









 

        </body>

</html>



       