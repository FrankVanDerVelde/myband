<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 20:19:46
         compiled from "views\details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10971581740af233895-49961788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934469c29e3ddb987896cf10d6b7b8f3e50d7c6d' => 
    array (
      0 => 'views\\details.tpl',
      1 => 1478200784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10971581740af233895-49961788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581740af26b1a8_94328755',
  'variables' => 
  array (
    'resultchampionsdetails' => 0,
    'championitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581740af26b1a8_94328755')) {function content_581740af26b1a8_94328755($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['champ'] = new Smarty_variable($_GET['id'], null, 0);?>





<section>
	<?php  $_smarty_tpl->tpl_vars['championitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['championitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultchampionsdetails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['championitem']->key => $_smarty_tpl->tpl_vars['championitem']->value) {
$_smarty_tpl->tpl_vars['championitem']->_loop = true;
?>
		<article>
	<div class="div-icons">
		<div class="imageNameTitle">
			<img src="images/champions/<?php echo $_smarty_tpl->tpl_vars['championitem']->value['img'];?>
" class="icons" alt="">
			<h2><?php echo $_smarty_tpl->tpl_vars['championitem']->value['name'];?>
</h2>
			<b><?php echo $_smarty_tpl->tpl_vars['championitem']->value['description'];?>
</b>
		</div>

		<div class="loreVideo">
			<p><?php echo $_smarty_tpl->tpl_vars['championitem']->value['lore'];?>
</p>

			<iframe width="560" height="315" src="<?php echo $_smarty_tpl->tpl_vars['championitem']->value['championsSpotlight'];?>
" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</article>
	<?php } ?>
</section>
<?php }} ?>
