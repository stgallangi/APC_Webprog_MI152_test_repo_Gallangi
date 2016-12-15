<html>

<head>

<style>

 ul{
	padding:1px;
	overflow:hidden;
	list-style-type:none;
	margin:0;
	background-color:"#151515";
	z-index:0;
	}
	
	
   li img
   {
	   padding:0px;
	   float:left;
	   z-index:0;
	   }
	   
	   
   li a{
	color:black;
   padding:10px;
   float:right;
   text-decoration:none;
   font-family: Impact;
   font-size:30px;
   z-index:0;
   }
   
   
   li a:hover
   {
	   background-color:white;
	   color:black;
	   font-size:33px;}

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
</style>
	   </head>
        </style>
        <body>
     <body>
	<table width="100%"  border="0">
 <tr>
 <td bgcolor="#b5dcb3" height = "100">
  <p id="para1"> Stevenson Gallangi </p>
 </hr>
 <center>
		<ul>
<a href="<?php echo site_url('users'); ?>">Form</a> |
<a href="<?php echo site_url('users/create'); ?>">Add User</a> |
<a href="<?php echo base_url('index.php/user_controller/mypage')?>" target="_self">Home</a> |
<a href="<?php echo base_url('index.php/user_controller/trivia')?>" target="_self">Trivia</a> |
<a href="<?php echo base_url('index.php/user_controller/about')?>" target="_self">About Me</a> |
</ul>

</center>
</body>
</html>

