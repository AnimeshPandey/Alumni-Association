  <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width ,initial-scale=1.0">
        <title>Find Fake</title>
      <!-- Latest compiled and minified CSS -->
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
     <!--  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
    
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <!--   <link rel="stylesheet" href="startcss.css">
        <link rel="stylesheet" href="./css/default.css">
        <link rel="stylesheet" href="./css/component.css">
        <script src="js/modernizr.custom.js"></script> -->

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>           
              <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
            <!--   <script src="startjs.js"></script> -->
    
    
      
    </head>
    <body class="black">
        
     <div class="navbar-fixed" style="z-index:1000">
    <nav style="height: 5em;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="/" class="brand-logo" style="font-size: 3.5em;color:white;">&emsp;ALUMNI PORTAL</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" href="/">HOME</a></li>
        </ul>
        </div>
        </nav>
  </div> 
        <br>
        <br>
   <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card blue-grey darken-4">
            <div class="card-content white-text">
                <span class="card-title center" style="font-size:35px; color:white;"><b><u>Make Profile</u></b></span>
                <br>
                <br>
                <div class="row">
    <form class="col s12" method ="post" action="/profilex" enctype="multipart/form-data">
              {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">perm_identity</i>
          <input id="first_name"  name="name" type="text" class="validate" required>
          <label for="" style="font-size:15px;color:white;"> Name*</label>
        </div>
        <div class="input-field col s6">
            
          <input id="last_name"  name="roll" type="text" class="validate">
          <label for=""  style=" font-size:15px;color:white;">Roll Number</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s6">
          <!--   <i class="material-icons prefix">perm_identity</i> -->
           <input class="with-gap" name="gen" type="radio" id="m"  />
      <label for="test3">Male</label>
        <input class="with-gap" name="gen" type="radio" id="m"  />
      <label for="">Female</label>
        </div>
        <div class="input-field col s6">
            
          <input id="specs" type="text" name="specs" class="validate">
          <label for=""  style=" font-size:15px;color:white;">Specilaization</label>
        </div>
      </div>


      <div class="row">
       
        <div class="input-field col m12">
            
          <input id="proj1" type="text"  name="proj1"class="validate">
          <label for=""  style=" font-size:15px;color:white;">Project Name</label>
        </div>

         <!-- <div class="input-field col s6">
            
           <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Project Description</label>
        </div> -->

      </div>



       <div class="row">
       
        <div class="input-field col m12">
            
          <input id="proj2" type="text"  name="proj2" class="validate">
          <label for=""  style=" font-size:15px;color:white;">Project Description</label>
        </div>

         <!-- <div class="input-field col s6">
            
           <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Project Description</label>
        </div> -->

      </div>




       <div class="row">
        <div class="input-field col m12">
           <!--  <i class="material-icons prefix">perm_identity</i> -->
          <input id="emp" type="text" name="emp" class="validate" >
          <label for="" style="font-size:15px;color:white;"> Employer/Institute presently studying at</label>
        </div>
        
      </div>


       <div class="row">
        <div class="input-field col s6">
         <!--    <i class="material-icons prefix">perm_identity</i> -->
          <input id="ach" type="text" name="ach" class="validate" >
          <label for="" style="font-size:15px;color:white;"> Achievements</label>
        </div>
        <div class="input-field col s6">
            
          <input id="phonenum" type="tel" name="phonenum" class="validate">
          <label for=""  style=" font-size:15px;color:white;">Phone Number</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s6">
        <!--     <i class="material-icons prefix">perm_identity</i> -->
          <input id="fb" type="text" class="validate" name="fb" required>
          <label for="" style="font-size:15px;color:white;"> FB url</label>
        </div>
        <div class="input-field col s6">
            
          <input id="linkedin" type="text" name="linkedIn" class="validate">
          <label for=""  style=" font-size:15px;color:white;">Linked In url</label>
        </div>
      </div>

      <!--  <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">perm_identity</i>
          <input id="first_name" type="text" class="validate" required>
          <label for="first_name" style="font-size:15px;color:white;"> </label>
        </div>
        
      </div> -->


     <!--  <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">email</i>
            
          <input id="email" type="email" class="validate" required>
          <label for="email" data-error="wrong" data-success="right" style="font-size:15px; color:white;">Email Id*</label>
        </div>
      </div> -->
        
        <div class="row">
     
        <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file"  multiple >
      </div>
      <div class="file-path-wrapper">
        <input  class="file-path validate" type="file"  style="font-size:15px;color:white;" placeholder="Upload one or more files*">
      </div>
    </div>
                    
 <button class="btn waves-effect waves-light left" type="reset" class="btn">Reset</button>
        
      <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
                    <br>
                    <br>
         </form>
  </div>
            </div>
          </div>
        </div>
      

        <footer class="page-footer wow fadeInUp" style="background-color: #263238;">
      <div class="footer-copyright">
        <div class="container">
        © 2017 Find Fake, All rights reserved.
        </div>
      </div>
    </footer>
      

      <script>
      $(document).ready(function() {
    $('select').material_select();
  });
    </script>
    </body>
        </html>