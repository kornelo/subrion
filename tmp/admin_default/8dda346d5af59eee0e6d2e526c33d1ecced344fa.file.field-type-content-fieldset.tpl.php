<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:37:29
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\field-type-content-fieldset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6184556c27d9c1ea81-67595315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dda346d5af59eee0e6d2e526c33d1ecced344fa' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\field-type-content-fieldset.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6184556c27d9c1ea81-67595315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_sections' => 0,
    'section' => 0,
    'key' => 0,
    'grouptitle' => 0,
    'fieldset_before' => 0,
    'exceptions' => 0,
    'field' => 0,
    'fieldset_after' => 0,
    'isSystem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c27d9cb7f16_47253293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c27d9cb7f16_47253293')) {function content_556c27d9cb7f16_47253293($_smarty_tpl) {?><div class="wrap-list">
	<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
		<?php if (!empty($_smarty_tpl->tpl_vars['section']->value['fields'])&&isset($_smarty_tpl->tpl_vars['section']->value['name'])) {?>
			<?php if ('___empty___'!=$_smarty_tpl->tpl_vars['key']->value) {?>
				<?php $_smarty_tpl->tpl_vars['grouptitle'] = new Smarty_variable("fieldgroup_".((string)$_smarty_tpl->tpl_vars['section']->value['name']), null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['grouptitle'] = new Smarty_variable('other', null, 0);?>
			<?php }?>

			<div class="wrap-group" id="<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
">
				<div class="wrap-group-heading">
					<h4><?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['grouptitle']->value),$_smarty_tpl);?>

						<?php if (isset($_smarty_tpl->tpl_vars['section']->value['description'])&&$_smarty_tpl->tpl_vars['section']->value['description']) {?>
							<a href="#" class="js-tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['section']->value['description'];?>
"><i class="i-info"></i></a>
						<?php }?>
					</h4>
				</div>

				<?php if (isset($_smarty_tpl->tpl_vars['fieldset_before']->value[$_smarty_tpl->tpl_vars['section']->value['name']])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset_before']->value[$_smarty_tpl->tpl_vars['section']->value['name']];?>
<?php }?>

				<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
					<?php if (!isset($_smarty_tpl->tpl_vars['exceptions']->value)||!in_array($_smarty_tpl->tpl_vars['field']->value['name'],$_smarty_tpl->tpl_vars['exceptions']->value)) {?>
						<?php echo $_smarty_tpl->getSubTemplate ('field-type-content-manage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>
				<?php } ?>

				<?php if (isset($_smarty_tpl->tpl_vars['fieldset_after']->value[$_smarty_tpl->tpl_vars['section']->value['name']])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset_after']->value[$_smarty_tpl->tpl_vars['section']->value['name']];?>
<?php }?>
			</div>
		<?php }?>
	<?php } ?>

	<?php if (isset($_smarty_tpl->tpl_vars['isSystem']->value)&&$_smarty_tpl->tpl_vars['isSystem']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
</div>
<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'jquery/plugins/jquery.numeric'),$_smarty_tpl);?>
<?php }} ?>
