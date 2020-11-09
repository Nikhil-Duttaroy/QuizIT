<?php
require ("connect.php");
$success=null; 
$error=null;
$name=(isset($_POST['username']) ? $_POST['username'] : null );
$email=(isset($_POST['email']) ? $_POST['email'] : null );
$password=(isset($_POST['password']) ? $_POST['password'] : null );
$password1=(isset($_POST['password1']) ? $_POST['password1'] : null );
if(isset($_POST['submit'])){
 
    if(!empty($name && $password && $email && $password1)){

        $compare = "SELECT * FROM students";//where email='$email'
        $result = mysqli_query($conn, $compare);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $stored_email=$row["email"];
                if($stored_email === $email){
                    die ("User already exists");
                    // mysqli_close($conn);
                }               
                }                          
            }
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                if($password === $password1){
                    $password=md5($password);
                    $sql="INSERT into user (name,password,email) VALUES('$name','$password','$email');";
                    $sql .= "INSERT INTO marks (student_id) SELECT MAX(id) FROM students";
                    
                    if (mysqli_multi_query($conn, $sql)) {
                        do {
                            /* store first result set */
                            if ($result = mysqli_store_result($conn)) {
                                while ($row = mysqli_fetch_row($result)) {
                                    
                                }
                                mysqli_free_result($result);
                            }
                            /* print divider */
                            if (mysqli_more_results($conn)) {
                                echo "<script type='text/javascript'>alert('New user Added');
                                window.location='login.php';
                                </script>";
                                header("Location: login.php"); 
                            }
                        } while (mysqli_next_result($conn));
                    } 
                    else {
                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    
                }
                    else $error="Passwords Don't match";
                }
                else $error="Please enter a valid email";           
        }
        else  $error="Input Values";
        // mysqli_close($conn);    
    }
?>