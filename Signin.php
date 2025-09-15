<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="Signin.css?= <?php echo time(); ?>">
    <link rel="stylesheet" href="personal.css?= <?php echo time(); ?>">
    <script src="index.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap">

</head>
<body Background="real.jpg">
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

    <div class="mainsignupcontainer">
        <div class="mainsignupcontent">
            <br><br><br>
            <div class="mainsignupcontenttitle">Sign Up</div>
            <div class="mainsignupcontentdescription">Fill up the contents below in order to make an account.</div>
            <br><br>
            <div class="labelsforinputs">Username</div>
            <input type="username" class="inputdescription" placeholder="Username">
            <div class="labelsforinputs">Email</div>
            <input type="email" class="inputdescription" placeholder="Email">
            <div class="labelsforinputs">Password</div>
            <input type="password" class="inputdescription" placeholder="Password">
            <div class="labelsforinputs">Confirm Password</div>
            <input type="password" class="inputdescription" placeholder="Password">
            <br><br><br>
            <a href="thelogin.php" class="linktolog">Already have an account?</a>
            <br><br>
            <a href="personal.php" class="createaccountbutton" >Create Account</a>
        </div>
    </div>

</body>
</html>