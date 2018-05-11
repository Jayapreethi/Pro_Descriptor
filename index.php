
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
       
 <a class="navbar-brand" href="index.php">Pro-Descriptor</a>
      
</div>
 
</div>
  
</nav>
  
<!-- ./nav -->

 
 <!-- main -->
 
 <main class="container">
  
<h1 class="text-center">Hello from Pro-Descriptor! <br>
<small>A simple forum for your project ideas.</small></h1>

 
   <div class="row">
     
 <div class="col-md-6">
        
<h4>Login to explore project ideas!</h4>

  
  <!-- login form -->
  
<form method="post" action="login.php">
  
<div class="form-group">
           
 <input class="form-control" type="text" name="username" placeholder="Username">
       
   </div>

          
<div class="form-group">
            
<input class="form-control" type="password" name="password" placeholder="Password">
        
  </div>

<?php
  $error = $_GET['login_error'];
  $register = $_GET['registered'];
  if($error==true){
    echo "<span style='color: red'>username or password is invaied</span>";
  }
?>
   <div class="form-group">
           
 <input class="btn btn-primary" type="submit" name="login" value="Login">
 </div>
      
  </form>
      
  <!-- ./login form -->
    
  </div>
      
<div class="col-md-6">
       
 <h4>Don't have an account yet? Register!</h4>

       
 <!-- register form -->
     
   <form method="post" action="register.php">
          
<div class="form-group">
           
 <input class="form-control" type="text" name="username" placeholder="Username">
       
   </div>

      
    <div class="form-group">
       
     <input class="form-control" type="text" name="location" placeholder="Location">
      
    </div>

      
    <div class="form-group">
    
        <input class="form-control" type="password" name="password" placeholder="Password">
 
 </div>
 <?php
  if($register == true){
    echo "<span style='color: red'>username or password is invaied</span>";
  }
 ?>
 <div class="form-group">
        
<input class="btn btn-success" type="submit" name="register" value="Register">
        
  </div>
        </form>
   
     <!-- ./register form -->
   
   </div>
    </div>
  
</main>
  <!-- ./main -->

  <!-- footer -->
  <footer class="container text-center">
  
  <ul class="nav nav-pills pull-right">
    
  <li>Pro-Descriptor - Made by [MGR Mozilla Club]</li>
    
</ul>
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
 <script type="text/javascript" src="js/script.js">
</script>

</body>

</html>