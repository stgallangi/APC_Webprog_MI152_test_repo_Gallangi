<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Page';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
<head>
<style>
#para1 {
font-family: "Time New Roman", Times, serif;
font-size: 70px;
color: Black;
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
    background-color: black;
}


</style>
	</head>
	<body>

<div class="mypage_view">
    <h1><?= Html::encode($this->title) ?></h1>

    <table width="100%"  border="0">
 <tr>
 <td bgcolor="#b5dcb3" height = "100">
  <p id="para1"> Stevenson Gallangi </p>
 </hr>

<tr>
 <td bgcolor="#eee" height="700" align ="center">
 <p id="para2"> WELCOME TO MY WEBSITE! </p>
  </br>

  </br>
  </br>
	<center>
	  <img src = "me1.jpg" width="500" height="400" ></center>
        <img src = "g9.gif" width="500" height="400" ></center>
	<br>
</br>
</br>
</br>
<p id="para3">
 Hi I'm Stevenson Gallangi, </br>
 born in January 22, 1999 at Taguig city, </br>
 17 years of age, Currently studying BSIT Major in Mobile and Internet</br>
 </br></p>
 My Favorite sites:
 </br>
<a href="http://9gag.com/" target="_top">http://9gag.com//</a> </br>
<a href="http://facebook.com/" target="_top">http://facebook.com//</a> </br>
<a href="http://steamcommunity.com/" target="_top">http://steamcommunity.com//</a> </br>
<a href="http://reddit.com/" target="_top">http://reddit.com//</a> </br>
<a href="http://khanacademy.org/" target="_top">http://khanacademy.org//</a> </br>
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
</div>