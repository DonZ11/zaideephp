<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log in</title>
  <link rel="stylesheet" href="personal.css?= <?php echo time(); ?>">
  <link rel="stylesheet" href="thelogin.css?= <?php echo time(); ?>">

</head>
<body>
  
    <div class="head-class"> 
   <ul>    
   <a href="personal.php"><h1>Home</h1></a>
   <a href="about.php"><h1>About</h1></a>
   <a href="product.php"><h1>Product</h1></a>
   <a href="Services.php"><h1>Services</h1></a>
   <a href="contact.php"><h1>Contact</h1></a>
  
      <a href="Signin.php" class="SignBtn">
    <button class="SigninBtnz">Sign In</button>
   </a>
</ul>
       
 </div> 

 <div class="form-wrapper">
    <h1>Log in</h1>
    <form id="signin-form">
      <div class="form-item">
        <input type="email" id="email" placeholder="Email Address" required />
      </div>
      <div class="form-item">
        <input type="password" id="password" placeholder="Password" required />
      </div>
      <div class="button-panel">
        <input type="submit" class="button" value="Sign In" />
      </div>
    </form>
    <div class="form-footer">
      <p><a href="Signin.php">Create an account</a></p>
      <p><a href="#">Forgot password?</a></p>
    </div>
  </div>


  

  <script src="script.js"></script>
  
</body>
</html>