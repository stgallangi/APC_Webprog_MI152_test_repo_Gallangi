<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Trivias';
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
	<div class="trivia_view">
    <h1><?= Html::encode($this->title) ?></h1>

    <table width="100%"  border="0">
 <tr>
 <td bgcolor="#b5dcb3" height = "100">
  <p id="para1"> Stevenson Gallangi </p>
 </hr>
 	<br>
 </td>
 </tr>
<tr>
 <td bgcolor="#eee" height="700" align ="center">
  <h2 id="header2">Trivias</br>
 <div class="box">
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script>
$(document).ready(function()
{
$("#show").click(function(){
    $("answers").toggle(500);
});
});
</script>
<br>
<br>
<ul>
<?php foreach ($trivia as $trivias): ?>
    <li>
        <?= Html::encode("{$trivias->trivia}") ?>:
        <h5>Answer: </h5>

        <answers style=display:none><strong><?= Html::encode("({$trivias->trivia})") ?> </strong></answers>
        <br>
    </li>
<?php endforeach; ?>
  <button id="show">Show all answer</button>
</ul>
</body>
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

