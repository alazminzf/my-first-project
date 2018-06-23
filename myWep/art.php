<!DOCTYPE html>
<html lang="en">

<head>
    <title>الصفحه الرئيسية</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
    <meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">



    <link rel="stylesheet" href="../css/headerCss.css" />

  <link rel="stylesheet" href="../css/menu.css"/>
  <link rel="stylesheet" href="../css/content.css"/>

</head>




<body background-color="red">




    <!-- بداية الهيدر-->
    <div align="center">
        <!-- big image -->
        <div class="header-image"><img src="../photo/header4.png">
    <!-- نهاية الهيدر-->

        <!-- Fixed navbar -->
        
            <!-- بداية القائمه-->

 <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
            <!-- نهاية القائمه-->

<div style="padding-left:16px">


            <!-- بداية الشريط-->

<font size="5"> 
<marquee behavior="alternate">رمضان كريم كل عام وانتم بخير </marquee></font> 
            <!-- بداية الشريط-->


            <!-- بداية المحتوى-->


<div id="columns">
  <figure>
  <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/cinderella.jpg">
	<figcaption>Cinderella wearing European fashion of the mid-1860’s</figcaption>
	</figure>
	
	<figure>
	<img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/rapunzel.jpg">
	<figcaption>Rapunzel, clothed in 1820’s period fashion</figcaption>
	</figure>
	
  <figure>
	<img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/belle.jpg">
	<figcaption>Belle, based on 1770’s French court fashion</figcaption>
	</figure>
  
	<figure>
	<img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/mulan_2.jpg">
	<figcaption>Mulan, based on the Ming Dynasty period</figcaption>
	</figure>
	
   <figure>
	 <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/sleeping-beauty.jpg">
	<figcaption>Sleeping Beauty, based on European fashions in 1485</figcaption>
	</figure>
	
   <figure>
	 <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/pocahontas_2.jpg">
	<figcaption>Pocahontas based on 17th century Powhatan costume</figcaption>
	</figure>
  
	<figure>
	<img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/snow-white.jpg">
	<figcaption>Snow White, based on 16th century German fashion</figcaption>
	</figure>	
  
   <figure>
	<img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/ariel.jpg">
	<figcaption>Ariel wearing an evening gown of the 1890’s</figcaption>
	</figure>
  
    <figure>
	<img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/tiana.jpg">
    <figcaption>Tiana wearing the <i>robe de style</i> of the 1920’s</figcaption>
	</figure>	
	</div>

</div>

            <!-- نهاية المحتوى-->

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

        </div>

    </div>







</body>

</html>