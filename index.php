<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
  margin-left: 120px;
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
<body>
<div class="one">
       <form name="signup" action="s1.php" method="post" onsubmit ="return validateform();">
               
                          <div> <legend> <b> Sign up</b>  </legend> </div>
                                  <label for="name"> Name </label><br/>
                                  <input name="name" type="text" maxlength="20" size="45"><br/>

                                  <label for="uid"> ID </label><br/>
                                  <input type="email"   name="uid" size="45" maxlength="20" ><br>

                                  <label for="pwd"> Password </label><br/>
                                  <input type="Password"  name="pwd" size="45" maxlength="20" ><br>
                              
                                  
                <br/>

                       
                <input type="submit" value="Submit now">
                <input type="reset" value="Clear now"><br>
                <a href="l.php"  style="text-align: center;"><button type="button">Log in</button></a>
            </form>

</div>

<script >
  function validateform() {
    var x = document.signup.name.value;
    var y = document.signup.uid.value;
    var z = document.signup.pwd.value;
    var atposition = y.indexOf("@");  
    var dotposition = y.lastIndexOf("."); 
    if (x==""||x==null) {
        alert("Name must be filled out");
        return false;
    }
    else if(y==""||y==null){
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
}
</script>
</body>
</html>