<!DOCTYPE html>

<html>

<head>
 
 <title>Pro-Descriptor</title>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
 <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  
<!-- nav -->
  <nav class="navbar navbar-default">
    
<div class="container-fluid">
     
 <div class="navbar-header">
    
    <a class="navbar-brand" href="index.html">Pro-Descriptor</a>
     
 </div>
  
   <ul class="nav navbar-nav navbar-right">
  
      <li><a href="home.html">Home</a></li>
  
      <li><a href="profile.html">Profile</a></li>
  
      <li><a href="#">Logout</a></li>
 
     </ul>
   
 </div>
  </nav>
  
<!-- ./nav -->


  <!-- main -->
  
<main class="container">
   
 <div class="row">
    
  <div class="col-md-3">
       
 <!-- edit profile -->
     
   <div class="panel panel-default">
        
  <div class="panel-body">
         
   <h4>Edit profile</h4>
         
   <form method="post" action="">
  
            <div class="form-group">
            
<input class="form-control" type="text" name="status" placeholder="Status" value="">
      
        </div>

              
<div class="form-group">
             
   <input class="form-control" type="text" name="location" placeholder="Location" value="">
     
         </div>

           
   <div class="form-group">
         
       <input class="btn btn-primary" type="submit" name="update_profile" value="Save">
            
  </div>
    
        </form>
         
 </div>
      
  </div>
      
  <!-- ./edit profile -->
      
</div>
     
 <div class="col-md-6">
      
  <!-- user profile -->
      
  <div class="media">
      
    <div class="media-left">
            
<img src="img/1.jpg" class="media-object" style="width: 128px; height: 128px;">
       
   </div>
     
     <div class="media-body">
     
       <h2 class="media-heading">MGR Mozilla Club</h2>
      
    <p>Status: Progress towards proficiency!, Location: Chennai, India</p>
     
     </div>
        </div>
   
     <!-- user profile -->

    
    <hr>

     
   <!-- timeline -->
     
   <div>
         
 <!-- post -->
       
   <div class="panel panel-default">
  
   <div class="panel-body">
      
        <p>Hey humans! This is our first post. Hurray!!!</p>
 
   </div>
         
   <div class="panel-footer">
           
   <span>posted 2018-5-06 20:45:01 by MGR Mozilla Club</span> 
              
<span class="pull-right"><a class="text-danger" href="#">[delete]</a></span>
        
    </div>
          </div>
       
   <!-- ./post -->
        </div>
        
<!-- ./timeline -->
      </div>
 
     <div class="col-md-3">
        
<!-- friends -->
        <div class="panel panel-default">
     
     <div class="panel-body">
            
<h4>Friends</h4>
            <ul>
           
   <li>
                <a href="#">Gowtham</a> 
    
            <a class="text-danger" href="#">[Remove]</a>
 
             </li>
            </ul>
          </div>
        </div>
      
  <!-- ./friends -->
      </div>
    </div>
  </main>

  <!-- ./main -->

  <!-- footer -->
  <footer class="container text-center">
  
  <ul class="nav nav-pills pull-right">
    
  <li>Pro-Descriptor - Made by MGR Mozilla Club</li>
 
   </ul>
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
 <script type="text/javascript" src="js/script.js"></script>
</body>
</html>