function validateForm(){  
    var name=document.getElementById('signup').username.value;  
    var password=document.getElementById('signup').password.value;
    var email=document.getElementById('signup').email.value;
    var password1=document.getElementById('signup').password1.value;
    var atposition=email.indexOf("@");  
    var dotposition=email.lastIndexOf(".");     
        if (name==null || name==""){
            alert("Please Enter Your Name");  
            return false;
        } 
        else if (password==null || password==""){  
            alert("Please Enter Your Password");  
            return false;         }
        else if (email==null || email==""){  
            alert("Please Enter Your Email");  
            return false;         }
        else if (password1==null || password1==""){  
            alert("Please Enter Confirm Your password");  
            return false;         }
        else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){
            alert("Enter a valid Email");
            return false          }
        // else if(password!==null || password!==""){
        //     if(password.match(/[a-z]/g) && password.match(/[A-Z]/g) && password.match(/[0-9]/g) && password.length>=8 && password===password1)
        //     return true;
        //     else{
        //     alert("Password must match and be of 8 characters and contain a UpperCase , a LowerCase and a number ");
        //     return false;
        //     } }            
        return true;    
    }





    