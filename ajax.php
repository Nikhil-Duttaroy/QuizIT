<html>
<head>
  <link rel="stylesheet" href="css/index.css">  
  <meta charset="UTF-8">
<style>
  .ajaxholder{
    width: 100%;
    height:50vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .btn {
  width: 150px;
  background-color: #4d84e2;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: black;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

.btn:hover {
  background-color:  var(--secondaryColor);
}
input[type=text]{
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 5px;
  border: 1px solid var(--secondaryColor);
  font-size: 14px;
}

</style>
<script>
function getUser() {
  usrEmailID = document.getElementById("usrEmailID").value;
  if (usrEmailID == ""){
      return
  }
  var obj = {usrEmail: usrEmailID};
  console.log(usrEmailID);
  var userJSON = JSON.stringify(obj);

  var txt ="";
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    console.log(this.responseText);
        myObj = JSON.parse(this.responseText); 
        console.log(myObj);
        if (myObj.length === 0) { 
            txt = "No details found"
        }
        else{
        for (x in myObj) { 
            txt += "User name is: "+ myObj[x].name + " and user id is: " +myObj[x].id +" and user email is: "+ myObj[x].email + "<br>"; 
        } 
        }
       document.getElementById("userDetail").innerHTML = txt; 
      
    }
  }
  xmlhttp.open("POST","indexphpajaxgetuserdetails.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  console.log(userJSON);
  xmlhttp.send("user=" + userJSON ); 
}
</script>
</head>
<body>
<?php include("nav.php"); ?>
<div class="ajaxholder">
  <div class="container">
    <h3>Enter User Name </h3>
    <input type="text" name="usrEmailID" id ="usrEmailID" >
    <br/><br/>
    <button class= "btn" onclick="getUser()" > Get User </button>
  </div>
  <div>
    <p id="userDetail"></p> 
  <div>
</div>


</body>
</html>