<?php header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	 <!-- Framework CSS -->
	<base href="<?=base_url();?>">
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<body>
	<h1><?=$header_message?></h1>