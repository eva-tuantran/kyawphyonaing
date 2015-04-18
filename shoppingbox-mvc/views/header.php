<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL;?>public/css/default.css" />
	<link href="<?php echo URL;?>public/css/styles.css" rel="stylesheet" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>public/js/custom.js"></script>
</head>
<body>
<?php Session::init();?>

<div id="header">
	<ul class="cart">
	<li><?php if(Session::get('loggedIn') == true):?>
	<a href="<?php echo URL;?>dashboard/logout">Logout</a>
	<?php else:?>
	<a href="<?php echo URL;?>login">Login</a>
	<?php endif;?>
	</li>
	</ul>
	<ul class="currency">
	<li class="currency_headline">Currencies</li>
	<li class="listmenu">
	<form action="" method="get">
	<select name="currency"><option>US Dollar</option><option>Japan Yen</option></select>
	</form>
	</li>
	</ul>
	<ul class="menu">
	<li class="home"><a href="<?php echo URL;?>index">Index</a></li>
	<li class="line"></li>
	<li class="new"><a href="<?php echo URL;?>help">Help</a></li>
	<li class="line"></li>
	</ul>
	<img src="public/images/Thailand-Shop-Online-Banner-2.gif" width="764" height="260" alt="Banner" /></div>
</div>

<div id="content">
<div id="leftPan">
<div id="categories">
<h2></h2>
<ul>
<br /><li><a href="#">IT Devices</a></li><br />
<br /><li><a href="#">Fashion</a></li><br />
<br /><li><a href="#">Health</a></li><br />
<br /><li><a href="#">Sports</a></li><br />
<br /><li><a href="#">Services</a></li><br />
<br /><li><a href="#">Books</a></li><br />
<br /><li><a href="#">Media</a></li><br />
<br /><li><a href="#">Event Supplies</a></li><br />
<br /><li><a href="#">Others</a></li><br />

</ul>
</div>
</div>
<div id="middlePan">