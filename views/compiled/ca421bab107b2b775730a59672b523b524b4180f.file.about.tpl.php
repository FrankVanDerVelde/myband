<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 21:26:23
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2184357fe2b0e3485b1-70311625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478204782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2184357fe2b0e3485b1-70311625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe2b0e3ab678_68002737',
  'variables' => 
  array (
    'resultabout' => 0,
    'aboutitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe2b0e3ab678_68002737')) {function content_57fe2b0e3ab678_68002737($_smarty_tpl) {?><section>
<?php  $_smarty_tpl->tpl_vars['aboutitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aboutitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultabout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aboutitem']->key => $_smarty_tpl->tpl_vars['aboutitem']->value) {
$_smarty_tpl->tpl_vars['aboutitem']->_loop = true;
?>
		<article>
		<div class="aboutDiv">
		<h1 class="pageTitle"><?php echo $_smarty_tpl->tpl_vars['aboutitem']->value['titel'];?>
</h1><br>
		<img src="images/<?php echo $_smarty_tpl->tpl_vars['aboutitem']->value['image'];?>
"  class="aboutimage"  alt=""><br></a>
		<p><?php echo $_smarty_tpl->tpl_vars['aboutitem']->value['intro'];?>
</p>
		<h2 class="centeredh2"><?php echo $_smarty_tpl->tpl_vars['aboutitem']->value['head1'];?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['aboutitem']->value['paragraph1'];?>
</p>
		<h2 class="centeredh2"><?php echo $_smarty_tpl->tpl_vars['aboutitem']->value['head2'];?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['aboutitem']->value['paragraph2'];?>
</p>
		</div>
		</article>
	<?php } ?>
<div id="video">
	<iframe width="350" src="https://www.youtube.com/embed/BGtROJeMPeE" frameborder="0" allowfullscreen></iframe>
	</div>
</section>
<style>
	#video {
		text-align: center;
	}
</style><?php }} ?>
