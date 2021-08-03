<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-compatible" content="ie=edge">
<title>header </title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="" rel="stylesheet" type="text/css">
<link	rel="stylesheet"	href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/5.11.2/css/all.css">
<link	href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<style>
body{
background-image: linear-gradient(#3498DB,#154360); margin: 0px;
padding: 0px;
font-family: "open sans",sans-serif;}
a{
color: black;
text-decoration: none; 
font-family: 'Montserrat', sans-serif;}
header{
background-color: aliceblue; border-bottom: 5px solid #db8301; height: 60px;
padding: 17px;}
#left-nav{ float: left;
height: 100%;}
ul li{
list-style-type: none;}
#right-nav{ float: right;}
#right-nav li{
display: inline-block; margin: 10px;}
button{
position: absolute; top: 50%;
left: 50%;
transform: translate(-50%, -50%);}
button{
background: none; color: #ccc; width: 240px; height: 80px;
border: 1px solid #338033; font-size: 18px;
border-radius: 4px; transition: 6s; overflow: hidden;}
button:focus{ outline: none;}
button:before{ content: ''; display: block; position: absolute;
background: rgba(255,255,255,.5); width: 60px;
height: 100%;
left: 0;
top: 0; opacity: .5s;
filter: blur(30px);
transform: translate(-130px) skewX(-15deg);}
button:after{
content: ''; display: block; position: absolute;
background: rgba(255,255,255,.2); width: 30px;
height: 100%; left: 30px; top: 0;
opacity: 0;
filter: blur(30px);
transform: translate(-100px) scaleX(-15deg);}
button:hover{ background: #338033; cursor: pointer;}
button:hover:before{
transform: translate(300px) skewX(-15deg); opacity: .6;
transition: .7s;}
button:hover:after{
transform: translate(300px) skewX(-15deg); opacity: 1;
transition: .7s;}

footer{
background: #f4f9ff; padding:50px 0px; margin-top: 200px;}
.foot{
max-width: 1000px; margin: auto; padding: 10px 10px; display: flex;
justify-content: space-between; align-items: center;
flex-wrap: wrap-reverse;}
.social-media{
  margin: 0;
  padding: 0;
  list-style: none;
}
.social-media ul{
  display: flex;
}
.social-media ul li{
  position: relative;
  display:flex;
  font-size: 25px;
  height: auto;
  width: auto;
  background:#f4f9ff;
  line-height: 10px;
  border-radius: 50;
  margin: 0 15px;
  cursor: pointer;

}
.social-media ul li:before{
position: absolute;
content: '';
top:0;
left:0;
background: #db8301;
height: 50%;
width:50;
border-radius: 50%;
z-index: -1;
transform: scale(0.9);
transition: .5s;
}
.social-media a:hover{ color: #db8301;}


.left-col p{
font-size: 15px;
text-align:center;}
.right-col h1{
font-size: 20px;}
.right-col p{
font-family:sans-serif; font-size: 20px;}
.border{
width: 100px; height: 4px;
background: #db8301;}
.wrapper{
min-height: 600px;}
.table-content{
border-collapse: collapse; margin: 25px 0;
font-size: 0.9en; min-width: 400px;
border-radius: 5px 5px 0 0; overflow: hidden;
box-shadow: 0 0 50px rgba(0, 0, 0, 0.15);}
.table-content thead tr{ background-color: #009879; color: #ffffff;
text-align: left; font-weight: bold;}
.table-content th,
.table-content td{ padding: 12px 15px;
font-family:'Raleway', sans-serif;}
.table-content tbody tr{
border-bottom: 1px solid #dddddd;}
.table-content tbody tr:nth-last-of-type(even){ background-color: beige;}
.table-content tbody tr:nth-last-of-type(odd){ background-color: blanchedalmond;}
.table-content tbody tr:last-of-type{ border-bottom: 3px solid #009879;}
</style>
<body>
<header>
<ul id="left-nav">
<li></li>
</ul>
<ul id="right-nav">
<li><a href="main.html">HOME</a></li>
<li><a href="crs.html">COURSES</a></li>
<li><a href="about.html" >ABOUT</a></li>
</ul>
</header>
<section>
<center>
<form action="" method="post" enctype="multipart/form-data">
<table class="table-content">
<thead>
<tr>
<th>S.NO</th>
<th>Name</th>
<th>Father Name</th>
<th>Gender</th>
<th>Email</th>
<th>Number</th>
<th>Aadhar number</th>
<th>college</th>
<th>Place</th>
<th>Address</th>
<th>Courses</th>
<th>Timing</th>
</tr>
</thead>
<tbody>
<?php
$connection = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'register');
$query = " SELECT * FROM information ";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($query_run))
{
?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['fathername'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['number']?></td>
<td><?php echo $row['aadharNumber']?></td>
<td><?php echo $row['college']?></td>
<td><?php echo $row['place']?></td>
<td><?php echo $row['address']?></td>
<td><?php echo $row['courses']?></td>
<td><?php echo $row['Timing']?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</form>
</center>
</section>
<footer>
<div class="foot">
<div class="left-col">
<img srcset="http://localhost/project/pictures/d1.png" alt="" class="logo">
<div class="social-media">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li></ul>
</div>
<p class="right-text"></p>
</div>
<div class="right-col">
<h1>DETAILS</h1>
<div class="border"></div>
<p>Thiagarajar polytechnic college</p>
<p>junction main road</p>
<p>salem-636005.</p>
</div>
</div>
</footer>
</body>
</html>
