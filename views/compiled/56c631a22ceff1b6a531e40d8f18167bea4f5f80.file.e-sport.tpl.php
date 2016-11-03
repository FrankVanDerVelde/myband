<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 20:07:31
         compiled from "views\e-sport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2848257fe34b4210476-89683116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c631a22ceff1b6a531e40d8f18167bea4f5f80' => 
    array (
      0 => 'views\\e-sport.tpl',
      1 => 1478199899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2848257fe34b4210476-89683116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe34b422eb79_68976282',
  'variables' => 
  array (
    'resultesport' => 0,
    'esports' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe34b422eb79_68976282')) {function content_57fe34b422eb79_68976282($_smarty_tpl) {?><H1 class="pageTitle"> Champions </H1>
<section>
<table summary="Tournament Bracket" class="bracket">

<?php  $_smarty_tpl->tpl_vars['esports'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['esports']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultesport']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['esports']->key => $_smarty_tpl->tpl_vars['esports']->value) {
$_smarty_tpl->tpl_vars['esports']->_loop = true;
?>
    <tr>
        <th class="tableClear"><?php echo $_smarty_tpl->tpl_vars['esports']->value['tijd'];?>
</th>
            <td> <img src="images/teams/<?php echo $_smarty_tpl->tpl_vars['esports']->value['img1'];?>
" class="esportimage" alt=""> <br> <?php echo $_smarty_tpl->tpl_vars['esports']->value['team1'];?>
</td>
             <td class="tablevs">VS</td>
             <td> <img src="images/teams/<?php echo $_smarty_tpl->tpl_vars['esports']->value['img2'];?>
" class="esportimage" alt=""> <br> <?php echo $_smarty_tpl->tpl_vars['esports']->value['team2'];?>
</td>
        </div>
    </tr>
 <?php } ?>	
	
</table>
</section>
<style>
	table.bracket {
		border: 1px solid black;
		text-align: center;
	}
	
	.bracket td {
		border: 1px solid black;
		width: 10em;
	}
	
	.bracket td img {
		float: left;
	}
	
	.bracket th {
		background-color: black;
		color: white;
	}
	
	.tableClear {
		clear: both;
		width: 10em;
	}
	
	.tablevs {
		
	}
	
</style>

<!--
<tr>
    <th>Tijd</th>
    <th>Team 1</th>
	<th>Tegen</th>
    <th>Team 2</th>
</tr>
<tr>
    <td><p>1:00 AM</p></td>
	<td><p>SKTelecom T1</p></td>
	<td><p>VS</p></td>
	<td><p>Cloud9</p></td>
</tr>
<tr>
    <td><p>2:00 AM</p></td>
	<td><p>Flash Wolves</p></td>
	<td><p>VS</p></td>
	<td><p>I May</p></td>
	
</tr>
<tr>
    <td><p>3:00 AM</p></td>
	<td><p>TSM</p></td>
	<td><p>VS</p></td>
	<td><p>Samsung Galaxy</p></td>
</tr>
<tr>
    <td><p>4:00 AM</p></td>
	<td><p>Royal Never Give Up</p></td>
	<td><p>VS</p></td>
	<td><p>Splyce</p></td>
</tr>
	<tr>
    <td><p>5:00 AM</p></td>
	<td><p>H2k</p></td>
	<td><p>VS</p></td>
	<td><p>INTZ</p></td>
</tr>
	<tr>
    <td><p>6:00 AM</p></td>
	<td><p>Edward Gaming</p></td>
	<td><p>VS</p></td>
	<td><p>ahq e-Sports Club</p></td>
</tr>
-->

<?php }} ?>
