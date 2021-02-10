<?php
    
    if(isset($_POST['submit'])){

        $name=(isset($_POST['name']) ? $_POST['name'] : null );
        $subject=(isset($_POST['subject']) ? $_POST['subject'] : null );
        $email=(isset($_POST['email']) ? $_POST['email'] : null );
        $message=(isset($_POST['message']) ? $_POST['message'] : null );
        
        if(!empty($name && $email && $message && $subject)){

            $to=$email;
            $subject="Thank You";
            $headers="From: nsdr2000@gmail.com";
            $body="Thank you for your Feedback  $name";
            mail($to,$subject,$body,$headers);
            
            $admin="nsdr2000@gmail.com";
            $subjectadmin="$name Details";
            $headersadmin="From : $name ,$email";
            $bodyadmin="Name : ".$name."\n Email : ".$email."\n Feedback : ".$message;
            mail($admin,$subjectadmin,$bodyadmin,$headersadmin);     
            echo "Your Feedback has been sent";        
        }
        else echo "Please input all the parameters";
    
    }
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script> 
<style>
   #mapid { 
     width: 300px; height: 300px;
      margin: auto;
      }
   </style>
   
</head>
<body>
<?php include 'nav.php' ?>
  <div class="formMapContain">
      <div class="modal">
        <form
                id="contact-form"
                action="POST"
                name="ContactForm"      
              >
                <i class="fas fa-times fa-1x close"></i>
                <h2 style="text-align: center">Get in Touch</h2>

                <label>Name</label>
                <input required class="input-field" type="text" name="name" />

                <label>Subject</label>
                <input required class="input-field" type="text" name="subject" />

                <label>Email</label>
                <input required class="input-field" type="text" name="email" />

                <label>Message</label>
                <textarea required class="input-field" name="message"></textarea>       
                <input id="submit-btn" type="submit" value="Send" name="submit" />
        </form>
      </div>  
      <div class="mapContain">
        <div id="mapid">        
        </div>
        <div class="videocontain">
          <video width="320" height="240" id="video" controls>
            <source src="images/videoplayback.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <br>
          <button onclick="playPause()">Play/Pause</button> 
          <button onclick="makeBig()">Big</button>
          <button onclick="makeSmall()">Small</button>
          <button onclick="makeNormal()">Normal</button>
        </div>
      </div>
      
  </div>     
</body>
<script> 
    var myVideo = document.getElementById("video"); 
      console.log(myVideo)
    function playPause() { 
      if (myVideo.paused) 
        myVideo.play(); 
      else 
        myVideo.pause(); 
    } 

    function makeBig() { 
        myVideo.width = 560; 
    } 

    function makeSmall() { 
        myVideo.width = 320; 
    } 

    function makeNormal() { 
        myVideo.width = 420; 
    } 
    </script> 
<script src="js/contactmap.js"></script>
</html>