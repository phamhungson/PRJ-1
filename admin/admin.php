<?php 
include('module/config.php');
include('session.php');
ob_start();
if(!isset($_SESSION["id"])){
	header("location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mos-css/web.css"  />
<link rel="stylesheet" type="text/css" href="admin/boostrap3/css/boostrap.css">
<title>Trang quan tri</title>
<link rel="stylesheet" type="text/css" href="../library/font-awesome/css/font-awesome.css">
</head>
 	 
<body >
<div  style=" padding:1px 0px 0px 0px; ">
  <div class="container" style="width: 1300px; border: 1px solid #dcdcdc ;  margin:  0px auto; ">
<?php
     include('module/config.php') ?>
	<?php include('module/modau1.php') ?>
<?php 
    include ('module/menu.php');
	
?>
<div id="wrapper" style="width:1300px; background:url(mos-css/img/d.PNG); font-size:14px">
  <?php 
   
	include ('module/content.php');	
?>
</div>
<?php include ('module/footder.php');?>
</div>
</div>
</body>
</html>