<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 19:58:56
         compiled from "views\champions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:858957fe34b2e5e9c5-83338335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254bf5efe9a7f94ef7d3f8beb4e905c9187d3b86' => 
    array (
      0 => 'views\\champions.tpl',
      1 => 1478199535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858957fe34b2e5e9c5-83338335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe34b2e7c9b2_38406403',
  'variables' => 
  array (
    'resultchampions' => 0,
    'championitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe34b2e7c9b2_38406403')) {function content_57fe34b2e7c9b2_38406403($_smarty_tpl) {?><H1 class="pageTitle"> Champions </H1>
<section>
	
	<div id="championsSection">
		


	<?php  $_smarty_tpl->tpl_vars['championitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['championitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultchampions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['championitem']->key => $_smarty_tpl->tpl_vars['championitem']->value) {
$_smarty_tpl->tpl_vars['championitem']->_loop = true;
?>
		
		<div class="div-icons">
		<b><?php echo $_smarty_tpl->tpl_vars['championitem']->value['name'];?>
</b><br>
		<a href="?action=details&id=<?php echo $_smarty_tpl->tpl_vars['championitem']->value['id'];?>
">
		<img src="images/champions/<?php echo $_smarty_tpl->tpl_vars['championitem']->value['img'];?>
"  class="icons"  alt=""><br></a>
		</div>
		
	<?php } ?>
	</div>	
</section><?php }} ?>
