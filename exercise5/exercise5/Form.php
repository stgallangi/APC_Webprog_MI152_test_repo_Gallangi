<html>
<head>
<style>
#para1 {
font-family: "Time New Roman", Times, serif;
font-size: 70px;
color: Blue;
}
#para2 {
font-family: "Time New Roman", Times, serif;
font-size: 90px;
color: Black;
}
#para3 {
font-family: "Time New Roman", Times, serif;
font-size: 30px;
color: Black;
}

body {
    background-color: darkblue;
}
.error {color: #FF0000;}
</style>
<title>My Site</title>
</head>


<body>

<table width="100%"  border="0">
 <tr>
 <td bgcolor="#b5dcb3" height = "100">
  <p id="para1"> Stevenson Gallangi </p>
 </hr>
 <center>
 
<a href="mypage.php" target="_self">HOME</a> |
<a href="interest.php" target="_self">INTEREST</a> |
<a href="gal.php" target="_parent">TRIVIAS</a> 
<a href="Form.php" target="_parent">FORM.PHP</a> 

</center>
 </td>
 </tr>
 

 
<tr>
 <td bgcolor="#eee" height="700"  align ="center">

</br>
</br>
</br>
<p id="para3">
<?php	
$nameErr = $emailErr = $genderErr = $nicknameErr = "";
$name = $email = $gender = $comment = $nickname = $home = $cnum = "";
//name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  //nickname
   if (empty($_POST["nickname"])) {
	  $nicknameErr = "Nickname is required";
  } else {
	  $nickname = test_input($_POST["nickname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  //email
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  //address
  if (empty($_POST["home"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home"]);
  }
  //gender
    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  //contact
  if (empty($_POST["cnum"])){
	  $num = "";
  } else {
	  $cnum = test_input($_POST["cnum"]);
  }
 //comments
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div id="myform">
<h2>Fill Up the form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">*<?php echo $emailErr;?></span>
  <br><br>
  Home Address: <input type="text" name="home" value="<?php echo $home;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cellphone Number: <input type="number" name="cnum" value="<?php echo $cnum;?>">
  <br><br>
  Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
<?php
echo "<h2>Results:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $gender;
echo "<br>";
echo $cnum;
echo "<br>";
echo $comment;
echo "<br>";

?>
 </p>
 </br>
 </br>
 </br>
 </tr>
 <tr>
 <td colspan="2" bgcolor="#b5dcb3">
 <center>
 Copyright ©StevensonGallangi
 </center>
 </td>
 </tr>
</table>
</body>
</html>
