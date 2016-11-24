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
#plot{
	width: 1000px;
	height: 1200px;
	background: rgba(0,0,0,0.1);
	padding: 5px;
	color: black;
	margin: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	font-family:"Time New Roman", Times, serif;
	font-size:25px;
	vertical-align:baseline;
	}

</style>
	<link rel="stylesheet" type="text/css" href="Style.css">
<center>
<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	$hadd = $_POST['hadd'];
	$gender = $_POST['gender']; 
	$cpnum = $_POST['cpnum'];
	$comment = $_POST['comment']; 
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET name='$name', nickname='$nickname',email='$email',hadd='$hadd',gender='$gender',cpnum='$cpnum',comment='$comment' WHERE user_id=".$_GET['edit_id'];   
 // sql query for update data into database 
 
// sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  window.location.href='index.php';
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>

</center>
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
<a href="gal.php" target="_parent">TRIVIAS</a> |
<a href="Form.php" target="_parent">FORM.PHP</a> |
<a href="index.php" target="_parent">SQL FORM</a> 
</center>
 </td>
 </tr>
 

 
<tr>
 <td bgcolor="#eee" height="700"  align ="center">

</br>
</br>
</br>
<p id="para3">
<center>
<div id="plot">
<h1>Form</h1>

<div id="header">
 <div id="content">
    <label>Please fill out the form.</label>
    </div>
	<div id="body">		
	<div id="content">
    <form method="post">
    <table align="center">
   <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required/></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickkame" value="<?php echo $fetched_row['nickname'];?>"required/></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email'];?>" required></td>
    </tr>
	<tr>
    <td><textarea name="hadd" placeholder ="home address" rows ="3" cols="30"><?php echo $fetched_row['hadd'];?></textarea></td>
    </tr>
	<tr>
    <td><input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="female">Female
	<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="male">Male
	</td>
    </tr>
	<tr>
    <td><input type="text" name="cpnum" placeholder="Cellphone Number" value="<?php echo $fetched_row['cpnum'];?>"required></td>
    </tr>
	<tr>
    <td><textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $fetched_row['comment'];?></textarea></td>
    </tr>
	<tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
	 </table>
    </form>
    </div>
</div>

</center>
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
