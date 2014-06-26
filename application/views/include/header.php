<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Clinic</title>
  <link href=<?php echo BASE_URL; ?>"static/asset/css/bootstrap.min.css" rel="stylesheet">
  <link href=<?php echo BASE_URL; ?>"static/style.css" rel="stylesheet">
	<script>
    //function for clock
    function startTime()
    {
		var today=new Date();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
		
		var d=today.getDate();
		var mm=today.getMonth()+1;
		var y=today.getFullYear();
		// add a zero in front of numbers<10
		m=checkTime(m);
		s=checkTime(s);
		
		
		
		document.getElementById('dates').innerHTML=d+"/"+mm+"/"+y;
		document.getElementById('clock').innerHTML=h+":"+m+":"+s;
		t=setTimeout('startTime()',500);
    }
    function checkTime(i)
    {
		if (i<10)
		{
			i="0" + i;
		}
		return i;
    }
    </script>
</head>
<body onLoad="startTime()">
  <div class="container">
  <div class="row">
  	<div class="col-md-12" align="center">
        <div class="slideshow">
        <ul class="slideshow">
            <li class="show"><img width="940" height="300" src="<?php echo BASE_URL;?>static/images/bannerfyp.jpg" alt="&quot;Enter your caption here&quot;" /></li>
            <li><img width="940" height="300" src="<?php echo BASE_URL;?>static/images/move01.jpg" alt="&quot;Enter your caption here&quot;" /></li>
            <li><img width="940" height="300" src="<?php echo BASE_URL;?>static/images/nurse1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
            <li><img width="940" height="300" src="<?php echo BASE_URL;?>static/images/langkah.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          </ul> 
      </div><!--close slideshow-->  
    </div>
  </div>