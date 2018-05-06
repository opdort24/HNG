
<html>
<head>
<title>HNG internship first</title>
<style>

#body{
  position: absolute;
  width: 811px;
  height: 582px;
  background: url(farm-3358870_960_720.jpg), #C4C4C4;
  margin-left: 300px;
}

#header{
  width: 811px;
  height: 73px;
  background: rgba(196, 196, 196, 0.7);
  color: #4A2929;
}

.text1{
  font-family: Rockwell;
  font-style: normal;
  font-weight: bold;
  line-height:normal;
  font-size: 64px;
  text-align: center;
}

.text2{
  font-weight: 800;
  font-family: Alegreya;
  font-style: italic;
  font-size: 18px;
  text-align: right;
  line-height: 0px;
}


#time{
  margin: auto;
  margin-top: 180px;
  width: 304px;
  height: 75px;
  background: #F75F5F;
  opacity: 0.7;
  color: #000;
  padding: 15px;
}

#footer{
  position: relative;
  top: 152px;
  width: 811px;
  height: 73px;
  background: rgba(196, 196, 196, 0.7);

}


</style>
</head>
<body>
  <div id="body">

<div id = "header" class="text1"> HNG INTERNSHIP 4.0 </div>
<?php
date_default_timezone_set('Africa/Lagos');
$date = date("F j, Y");
$time = date("m:i:s a");
?>
<div id = "time">
  <span class="text1 noOpacity" style="font-size:50px; text-align:center; "><?php echo "$time"; ?> </span><br>
  <p class = "text2" style="text-align:center; margin-top:5px"><?php echo "$date"; ?> </p>
</div>


<div id = "footer" class="text2">
  <span style="margin:20px; line-height:50px; text-align:right;">by SouthSide</span>
</div>

  </div>
</body>
</html>
