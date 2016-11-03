<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 21:17:26
         compiled from "views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1711657e4f5509b6103-51375259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01944f6b4061c71cbb91782df46ef3603b7b840' => 
    array (
      0 => 'views\\head.tpl',
      1 => 1478204085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711657e4f5509b6103-51375259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e4f5509f4912_67422274',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4f5509f4912_67422274')) {function content_57e4f5509f4912_67422274($_smarty_tpl) {?><!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="icon" sizes="192x192" href="images/lolicon.png">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
		<header>
		
		<ul class="topnav" id="myTopnav">
		
		<li><a class="active" href="?action=home">Home</a></li>
		<li><a href="?action=champions">Champions</a></li>
		<li><a href="?action=e-sport">E-Sport</a></li>
		<li><a href="?action=about">About</a></li>
		<li><a href="?action=contact">Contact</a></li>
		<li><a href="?action=zoeken">Zoeken</a></li>
		 <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a> 
  </li>
		</ul>
			
		<div id="logoTag">
			<img src="images/riotlogo.png" alt="">
			<h2>WE ARE RIOTERS</h2>
</div>


</header>
		
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
<?php }} ?>
