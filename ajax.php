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
td{
  text-align: center;
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

  var id ="";
  var name ="";
  var email ="";
  var score ="";
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
            id=myObj[x].id;                
            name=myObj[x].name;
            email=myObj[x].email;
            score=myObj[x].score ;
        } 
        }
       document.getElementById("txt").innerHTML= txt;
       document.getElementById("id").innerHTML = id;
       document.getElementById("name").innerHTML =name;
       document.getElementById("email").innerHTML = email;
       document.getElementById("score").innerHTML = score; 
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
    <h3>Enter User Email </h3>
    <input type="text" name="usrEmailID" id ="usrEmailID" >
    <br/><br/>
    <button class= "btn" onclick="getUser()" > Get User </button>
  </div>
  <div style="width: 50%;">
    <table border="1" 
           cellpadding="15" id="userDetail" style="width:100%;" >
      <tr>
        <th>User Id</th>
        <th>User Name </th>
        <th>Email</th>
        <th>Score</th>
      </tr>
      <tr>
        <td id="id">-</td>
        <td id="name">-</td>
        <td id="email">-</td>
        <td id="score">-</td>
      </tr>
    </table>
    <h2 id="txt"></h2> 
  <div>
</div>
</body>
</html>