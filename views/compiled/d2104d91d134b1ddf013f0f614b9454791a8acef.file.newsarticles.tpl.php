<?php /* Smarty version Smarty-3.1.18, created on 2016-10-05 15:13:55
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2422957f4f68284e8f6-29719166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1475673232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2422957f4f68284e8f6-29719166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f6828d4060_66947501',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f6828d4060_66947501')) {function content_57f4f6828d4060_66947501($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\Jaar2\\MyBandProject\\myband\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Jaar2\\MyBandProject\\myband\\libs\\plugins\\modifier.date_format.php';
?><section>
	<article>
		<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
		
		<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
		<img src='images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
'>
		<br>
		<content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</content>
		<br>
		<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created']," %e. %B. %Y");?>
</p>
		<?php } ?>

	</article>
</section><?php }} ?>
