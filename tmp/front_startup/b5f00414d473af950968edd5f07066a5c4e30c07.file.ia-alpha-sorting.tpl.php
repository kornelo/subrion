<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:42:31
         compiled from "C:\WebServ\httpd\subrion\templates\common\ia-alpha-sorting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21607556c2907da6ce4-36246861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f00414d473af950968edd5f07066a5c4e30c07' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\ia-alpha-sorting.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21607556c2907da6ce4-36246861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'letters' => 0,
    'letter' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c2907ddd6a3_06935259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c2907ddd6a3_06935259')) {function content_556c2907ddd6a3_06935259($_smarty_tpl) {?><div class="alpha-sorting">
	<?php  $_smarty_tpl->tpl_vars['letter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['letter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['letters']->value['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['letter']->key => $_smarty_tpl->tpl_vars['letter']->value) {
$_smarty_tpl->tpl_vars['letter']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['letter']->value==$_smarty_tpl->tpl_vars['letters']->value['active']||!in_array($_smarty_tpl->tpl_vars['letter']->value,$_smarty_tpl->tpl_vars['letters']->value['existing'])) {?>
			<span class="btn btn-mini<?php if ($_smarty_tpl->tpl_vars['letter']->value==$_smarty_tpl->tpl_vars['letters']->value['active']) {?> btn-success<?php }?> disabled"><?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
</span>
		<?php } else { ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
/" class="btn btn-mini"><?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
</a>
		<?php }?>
	<?php } ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="btn btn-mini btn-warning" title="<?php echo iaSmartyPlugins::lang(array('key'=>'reset'),$_smarty_tpl);?>
"><i class="icon-remove"></i></a>
</div><?php }} ?>
