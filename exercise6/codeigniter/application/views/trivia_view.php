<html>
<head>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
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
</style>
<link rel="stylesheet" href="<?php echo base_url('css/Style.css');?>">
<title>Trivias</title>
</head>
</style>
</head>


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
 </td>
 </tr>
 
	<br>
 </td>
 </tr>
<tr>
 <td bgcolor="#eee" height="700" align ="center">
 <h2 id="header2">Trivias about me</br>
<button type="button" onclick="document.getElementById('trivias').style.display='block'">Click Here!</button>
</h2>


<div id="trivias" style="display:none">

 </br>
  <p id="para2"> Trivias about me </p>
  In my state, I often play sports. Want to know what sports I am involved?
  </br>
  <p id="sports" style="display:none"><br>
 I enjoy playing sports in which brain is used more than brawn,</br>
 Chess, Badminton, and Basketball, </br>
 I liked chess because I enjoy doing tactics in order to win just like in basketball.</br>
 I only play badminton when I want to crush my friends. </br>
 </br>
 <img src="<?php echo base_url('css/uploads/a1.jpg')?>" width ="600" height ="500" /> <br></p>
<button type="button" onclick="document.getElementById('sports').style.display='block'">Show the answer!</button>
</br>
</br>
I play video games as well like..?
  </br>
  <p id="games" style="display:none"><br>
DOTA2, CS:GO, Witcher,</br>
 I like DOTA2 because like in Chess, I enjoy doing tactics in order to win. I hate losing but having a fun time is the priority</br>
I like first person games as well like FPS and some RPG. Nothing beats a game with a nice plot. </br>
 </br>
  <img src="<?php echo base_url('css/uploads/aa2.gif')?>" width ="600" height ="500" /> <br></p>
<button type="button" onclick="document.getElementById('games').style.display='block'">Click Click Click!</button>
</br>
</br>
Bands I like the mosts are?
  </br>
  <p id="bands" style="display:none"><br>
Maroon5, Panic at the disco, All time low, My Chemical Romance, and A rocket to the moon</br>
I don't need to explain why. Just listen and you'll know.</br>
I still prefer listening to this old but gold bands than listening to new loud and messy ones. </br>
 </br>
  <img src="<?php echo base_url('css/uploads/a3.gif')?>" width ="600" height ="500" /> <br></p>

<button type="button" onclick="document.getElementById('bands').style.display='block'">Know More!</button>
</br>
</br>
What is my first choice?
  </br>
  <p id="1stchoice" style="display:none"><br>
'Sugar', and 'Don't wanna know' of Maroon 5</br>
Tune and lyrics really got me.<br>
A nice melody perhaps. I can't explain but there is something that really caught me.<br>
 </br>
  <img src="<?php echo base_url('css/uploads/g5.gif')?>" width ="600" height ="500" /> <br></p>
    <img src="<?php echo base_url('css/uploads/g6.gif')?>" width ="600" height ="500" /> <br></p>
<button type="button" onclick="document.getElementById('1stchoice').style.display='block'">Go On!</button>
</br>
</br>
Want to see some of my works?
 <p id="gallery" style="display:none"><br>
<button onclick="document.getElementById('myImage1').src='<?php echo base_url('css/uploads/g1.jpg')?>'">1st pic</button>
<button onclick="document.getElementById('myImage1').src='<?php echo base_url('css/uploads/g2.jpg')?>'">2nd pic</button>
<button onclick="document.getElementById('myImage1').src='<?php echo base_url('css/uploads/g3.jpg')?>'">3rd pic</button>
<button onclick="document.getElementById('myImage1').src='<?php echo base_url('css/uploads/g4.jpg')?>'">4th pic</button>
</br>
</br>
</br>
 <img id = 'myImage1' src="<?php echo base_url('css/uploads/g1.jpg')?>" width ="600" height ="500" /> <br></p>
</br>
<button type="button" onclick="document.getElementById('gallery').style.display='block'">Here Here!</button>
</br>
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
</div>
</body>
</html>
