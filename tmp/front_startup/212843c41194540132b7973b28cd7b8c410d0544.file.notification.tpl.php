<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:03
         compiled from "C:\WebServ\httpd\subrion\templates\common\notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1941556c27fb6d0818-84872050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '212843c41194540132b7973b28cd7b8c410d0544' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\notification.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941556c27fb6d0818-84872050',
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
  'unifunc' => 'content_556c27fb6ec1c9_74025299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27fb6ec1c9_74025299')) {function content_556c27fb6ec1c9_74025299($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['core']->value['notifications']) {?>
	<?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['entries']->key;
?>
		<div class="alert alert-block alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
			<ul class="unstyled">
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
	<?php } ?>
<?php } else { ?>
	<div id="notification" class="alert alert-info" style="display: none;"></div>
<?php }?><?php }} ?>
