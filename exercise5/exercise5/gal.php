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
font-size: 60px;
color: Black;
}
body {
    background-color: darkblue;
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
 <img id="myImage" src="a1.jpg" style="width:500px"></p>
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
 <img id="myImage" src="aa2.gif" style="width:500px"></p>
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
 <img id="myImage" src="a3.gif" style="width:500px"></p>
<button type="button" onclick="document.getElementById('bands').style.display='block'">Know More!</button>
</br>
</br>
What is my first choice?
  </br>
  <p id="1stchoice" style="display:none"><br>
It was architecture.</br>
I really want to build something for myself. Something that won't satisfy just myself but also other people.</br>
Sadly, Tuition in UST is so high and it was hard to apply for scholarship so here I am, Taking IT. </br>
 </br>
 <img id="myImage" src="a4.jpg" style="width:500px"></p>
<button type="button" onclick="document.getElementById('1stchoice').style.display='block'">Go On!</button>
</br>
</br>
Want to see some of my works?
 <p id="gallery" style="display:none"><br>
<button onclick="document.getElementById('myImage1').src='g1.jpg'">1st pic</button>
<button onclick="document.getElementById('myImage1').src='g2.jpg'">2nd pic</button>
<button onclick="document.getElementById('myImage1').src='g3.jpg'">3rd pic</button>
<button onclick="document.getElementById('myImage1').src='g4.jpg'">4th pic</button>
</br>
</br>
</br>
<img id="myImage1" src="g1.jpg" style="width:500px"></p>
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
</body>
</html>
