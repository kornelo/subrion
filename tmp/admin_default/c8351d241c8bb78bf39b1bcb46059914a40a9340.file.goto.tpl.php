<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:30
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\goto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7207556c27dabf46a7-85900988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8351d241c8bb78bf39b1bcb46059914a40a9340' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\goto.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7207556c27dabf46a7-85900988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goto' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27dac1f543_49541139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27dac1f543_49541139')) {function content_556c27dac1f543_49541139($_smarty_tpl) {?><label><?php echo iaSmartyPlugins::lang(array('key'=>'and_then'),$_smarty_tpl);?>
</label>
<select name="goto" class="goto-actions">
	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_POST['goto'])&&$_POST['goto']==$_smarty_tpl->tpl_vars['action']->value) {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['name']->value,'default'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
</option>
	<?php } ?>
</select><?php }} ?>
