<?php
  require ("connect.php");
  $success=null; 
  $error=null;
  $name=(isset($_POST['name']) ? $_POST['name'] : null );
  $email=(isset($_POST['email']) ? $_POST['email'] : null );
  $password=(isset($_POST['password']) ? $_POST['password'] : null );
  if(isset($_POST['submit'])){
      echo "Hello";
      if(!empty($name && $email && $password)){
          $password=md5($password);
          $select = "SELECT * FROM admin where name='$name' and email='$email' and password='$password'"; 
          $result = mysqli_query($conn, $select);
        
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $name=$row['name'];      
                  $mail=$row['email'];        
                  session_start();
                  $_SESSION['user'] = $name;
                  $_SESSION['mail'] = $mail;
                  header("location: adminhome.php");
              }       
          }
          else $error = "Your Login Name or Password is invalid";                          
      }
      else  $error="Input Values";
  }    
          // mysqli_close($conn);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?php include 'nav.php' ?>
<div class="formContain">
      <div class="modal">
        <form
                id="adminlogin-form"
                method="POST"
                action="adminlogin.php"
                name="adminloginForm"  
                    
              >  
                <h2 style="text-align: center">Admin Login</h2>

                <label>Name</label>
                <input required class="input-field" type="text" name="name" value="<?php echo $name ?>" />

                <label>Email</label>
                <input required class="input-field" type="email" name="email" value="<?php echo $email ?>"/>

                <label>Password</label>
                <input required class="input-field" type="password" name="password" />
                  
                <input id="submit-btn" type="submit" name="submit" value="Submit" />
        </form>
      </div>  
</body>
</html>
