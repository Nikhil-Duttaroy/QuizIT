<html>
<head>
  
  <meta charset="UTF-8">
 
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


<div>
<h3>Enter User Name </h3>

<input type="text" name="usrEmailID" id ="usrEmailID" >
<br/><br/>
<input type="button" onclick="getUser()" value="Click Me"/>


</div>

<div>
<p id="userDetail"></p> 
<div>


</body>
</html>