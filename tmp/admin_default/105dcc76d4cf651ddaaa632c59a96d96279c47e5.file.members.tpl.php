<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:29
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26187556c27d9aab4c5-53324271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105dcc76d4cf651ddaaa632c59a96d96279c47e5' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\members.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26187556c27d9aab4c5-53324271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_count' => 0,
    'item' => 0,
    'usergroups' => 0,
    'value' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27d9b78d04_29802982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27d9b78d04_29802982')) {function content_556c27d9b78d04_29802982($_smarty_tpl) {?><form method="post" enctype="multipart/form-data" class="sap-form form-horizontal">
	<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array('email', null, 'field_after'); ob_start(); ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'members','action'=>'password')); $_block_repeat=true; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'members','action'=>'password'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-password"><?php echo iaSmartyPlugins::lang(array('key'=>'password'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<input type="password" class="js-input-password" name="_password" id="input-password" value="<?php if (isset($_POST['_password'])) {?><?php echo htmlspecialchars($_POST['_password'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-password-confirmation"><?php echo iaSmartyPlugins::lang(array('key'=>'password_confirm'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<input type="password" name="_password2" id="input-password-confirmation" value="<?php if (isset($_POST['_password2'])) {?><?php echo htmlspecialchars($_POST['_password2'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'members','action'=>'password'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'members','action'=>'usergroup')); $_block_repeat=true; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'members','action'=>'usergroup'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-usergroup"><?php echo iaSmartyPlugins::lang(array('key'=>'usergroup'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<?php if (isset($_smarty_tpl->tpl_vars['admin_count']->value)&&$_smarty_tpl->tpl_vars['admin_count']->value==1&&$_smarty_tpl->tpl_vars['item']->value['usergroup_id']==1) {?>
						<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'usergroup_disabled'),$_smarty_tpl);?>
</div>
						<input type="hidden" name="usergroup_id" value="1">
					<?php } else { ?>
						<select name="usergroup_id" id="input-usergroup">
							<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
							<option<?php if ($_smarty_tpl->tpl_vars['item']->value['usergroup_id']==$_smarty_tpl->tpl_vars['value']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo iaSmartyPlugins::lang(array('key'=>"usergroup_".((string)$_smarty_tpl->tpl_vars['name']->value)),$_smarty_tpl);?>
</option>
							<?php } ?>
						</select>
					<?php }?>
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'members','action'=>'usergroup'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, array("$_capture_buffer" => ob_get_contents()), true);
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php echo $_smarty_tpl->getSubTemplate ('field-type-content-fieldset.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('isSystem'=>true), 0);?>

</form><?php }} ?>
