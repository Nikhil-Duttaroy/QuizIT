<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
    <script src="js/validate.js"></script>
    <title>Login & Sign up</title>
  </head>
  <body>
    <div class="container">
      <nav>
        <ul class="navbar">
          <li class="navItems">
            <a href="index.php"
              ><img src="images/QuizIT logodarklogo.svg" alt="Logo" class="navLogo" width="45px"
            /></a>
          </li>
      </nav>
      <div class="forms-container">
        <div class="signin-signup">
<?php
  require ("connect.php");
  $success=null; 
  $error=null;

  $email=(isset($_POST['email']) ? $_POST['email'] : null );
  $password=(isset($_POST['password']) ? $_POST['password'] : null );
  if(isset($_POST['submit'])){
  
      if(!empty($email && $password)){
          $password=md5($password);

          
          $select = "SELECT * FROM user where email='$email' and password='$password'"; 
          $result = mysqli_query($conn, $select);
        
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $name=$row['name'];      
                  $mail=$row['email'];        
                  session_start();
                  $_SESSION['user'] = $name;
                  $_SESSION['mail'] = $mail;
                  header("location: home.php");
              }       
          }
          else $error = "Your Login Name or Password is invalid";                          
      }
      else  $error="Input Values";
  }    
          // mysqli_close($conn);    
?>

        <!-- Sign In Form -->
          <form action="login.php" class="sign-in-form" method="POST">
            <h2 class="title">Log in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" name="email" value="<?php echo $email ?>"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <p style="color: red;"><?php echo $error;?></p>
            <input type="submit" value="Login" class="btn solid" name="submit" />
            <p class="social-text">Log in as Admin</p>
            <div class="social-media">
              <a href="adminlogin.php" class="social-icon">
                <i class="fas fa-users-cog"></i>
              </a>        
            </div>
          </form>

          <!-- Sign Up Form -->
          <form action="register.php" class="sign-up-form" id="signup" onsubmit="return validateForm();" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="password1"/>
            </div>
            <p style="color: red;"><?php echo $error;?></p>
            <input type="submit" class="btn" value="Sign up" name="submit"/>
            <!-- <p class="social-text" >Or Sign up with</p>
            <div class="social-media">           
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h2>New here ?</h2>
            <p style="font-size: 1.1rem;">
              Create a account to start your Quizzing Journey!!!!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p style="font-size: 1.1rem;">
              Continue your Journey from where u left !!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/login.js"></script>
    
  </body>
</html>
