<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
    <style type="text/css">
form{
text-align: center;
font-size: 25px;

}    
.one{
  margin-left: 460px;
  margin-top: 170px;
  background-color: rgba(0,0,0,0.3);
  height: 370px;
  color: white;
  width: 400px;

}

legend{
  margin-left: 135px;
  margin-bottom: 18px;
  padding-top: 20px;
  font-size: 50px;
  font-family: fantasy;
}
body{
  background-image: url("12.png");
  background-size: cover;
}



  </style>

</head>
<body onload="checkCookie()">

<div class="one" >
       <form name="signup" action="l1.php" method="post" onsubmit ="return validateform();">
                
                           <legend> <b> Log in </b> </legend> 
                                

                                  <label for="uid"> ID </label><br/>
                                  <input type="email"   name="uid" size="45" maxlength="20" ><br>

                                  <label for="pwd"> Password</label><br/>
                                  <input type="Password" name="pwd" size="45" maxlength="20" ><br>
                              
                                  
              <br>
                       
                <input type="submit" value="Submit now">
                <input type="reset" value="Clear now"><br>
                <a href="index.php" style="text-align: center;"><button type="button">Sign up</button></a>
            </form>
</div>

<script >
  function validateform() {
    var y = document.signup.uid.value;
    var z = document.signup.pwd.value;
    var atposition = y.indexOf("@");  
    var dotposition = y.lastIndexOf("."); 
    if(y==""||y==null){
      alert("Please enter email");
      return false;
    } 
    else if(z==""||z==null){
      alert("Please enter password");
      return false;
    }
    else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=y.length){  
        alert("Please enter a valid e-mail address");  
        return false;  
    }  
    else{
      transfer();
    }    
}

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

   function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
  }

  function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } 
  }

 function transfer(){
    var inp = document.signup.uid.value;
    setCookie("username", inp, 30);
  }
</script>
</body>
</html>