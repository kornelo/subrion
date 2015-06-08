<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:10
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113556c27c6016110-11360691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a591dc92790622c2feb105148fbfd26748f9a6a' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\notification.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113556c27c6016110-11360691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'type' => 0,
    'entries' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27c6034584_25210333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27c6034584_25210333')) {function content_556c27c6034584_25210333($_smarty_tpl) {?><div id="notification" style="display: none;"></div>
<?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['entries']->key;
?>
	<?php if ('system'!=$_smarty_tpl->tpl_vars['type']->value) {?>
		<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
				<?php } ?>
			</ul>
		</div>
	<?php }?>
<?php } ?><?php }} ?>
