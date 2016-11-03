<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 19:58:11
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2422957f4f68284e8f6-29719166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478199468,
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
    'total_number_newsarticles' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f6828d4060_66947501')) {function content_57f4f6828d4060_66947501($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Jaar2\\MyBandProject\\myband\\libs\\plugins\\modifier.date_format.php';
?><H1 class="pageTitle"> Home </H1>
<section id="artikelsSection">
	
	<article>
		<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
		
		
		<div class="plaatjeDiv">
		<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
		<img src='images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
' class="artikelImage">
			</div>
		<br>
		<content class="artikelContent"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content>
		<!--		|truncate:30-->
		<br>
		<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created']," %e. %B. %Y");?>
</p>
		<?php } ?>
		
	</article>
</section>

    <section style="text-align: center">    
            <ul class="pagination">
				<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['total_number_newsarticles']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_number_newsarticles']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                   <li><a href="index.php?action=home&page_number=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
               <?php }} ?>
            </ul>
    </section>

<!--
              <li><a href="#">«</a></li>
              <li><a href="?action=home&page_number=1">1</a></li>
              <li><a class="active" href="?action=home&page_number=2">2</a></li>
              <li><a href="?action=home&page_number=1">3</a></li>
              <li><a href="#">»</a></li>
--><?php }} ?>
