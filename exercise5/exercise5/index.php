<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
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
<div id="plot">
<center>
<h1>Data</h1>
<label>enter data here!</label>
	
<?php
include_once 'dbconfig.php';

//delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
//delete condition
?>
<center>


<div id="body">
 <div id="content">
 
    <table align="center">
    <tr>
    <th colspan="9"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>Name</th>
    <th>Nick Name</th>
    <th>Email</th>
	<th>Home Address</th>
	<th>Gender</th>
	<th>Cell Phone</th>
	<th>comments:</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($link, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
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
