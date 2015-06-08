<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:02
         compiled from "C:\WebServ\httpd\subrion\templates\common\opengraph.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22512556c27faa91d08-15725289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f299125a90d7734b3305c58286f8d57ab87b1ec' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\opengraph.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22512556c27faa91d08-15725289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27faab2429_62602350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27faab2429_62602350')) {function content_556c27faab2429_62602350($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['core']->value['page']['info']['og'])) {?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['og']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<meta property="og:<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" content="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
	<?php } ?>
<?php }?><?php }} ?>
