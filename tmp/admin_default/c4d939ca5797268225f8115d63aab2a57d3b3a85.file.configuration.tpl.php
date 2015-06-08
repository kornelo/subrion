<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:26:38
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8216556c335e76f9b2-95361331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4d939ca5797268225f8115d63aab2a57d3b3a85' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\configuration.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8216556c335e76f9b2-95361331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'value' => 0,
    'field_show' => 0,
    'config' => 0,
    'dependent_fields' => 0,
    'tooltips' => 0,
    'pageAction' => 0,
    'core' => 0,
    'key' => 0,
    'value2' => 0,
    'subkey' => 0,
    'subvalue' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c335f572024_24789579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c335f572024_24789579')) {function content_556c335f572024_24789579($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_html_file')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.ia_html_file.php';
if (!is_callable('smarty_function_html_radio_switcher')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.html_radio_switcher.php';
?><?php if (isset($_smarty_tpl->tpl_vars['params']->value)) {?>
<form enctype="multipart/form-data" method="post" class="sap-form form-horizontal">
	<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

	<div class="wrap-list">
		<div class="wrap-group">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['show'])) {?>
				<?php $_smarty_tpl->tpl_vars['field_show'] = new Smarty_variable(explode('|',$_smarty_tpl->tpl_vars['value']->value['show']), null, 0);?>

				<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'dependent_fields', null); ob_start(); ?>
					data-id="js-<?php echo $_smarty_tpl->tpl_vars['field_show']->value[0];?>
-<?php echo $_smarty_tpl->tpl_vars['field_show']->value[1];?>
" <?php if ((!empty($_smarty_tpl->tpl_vars['field_show']->value[0])&&$_smarty_tpl->tpl_vars['config']->value[$_smarty_tpl->tpl_vars['field_show']->value[0]]!=$_smarty_tpl->tpl_vars['field_show']->value[1])) {?> style="display: none;"<?php }?>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, array("$_capture_buffer" => ob_get_contents()), true);
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['dependent_fields'] = new Smarty_variable('', null, 0);?>
			<?php }?>

			<?php if ('divider'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
				<?php if (!$_smarty_tpl->tpl_vars['value']->first) {?>
					</div>
					<div class="wrap-group" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
				<?php }?>
				<a name="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"></a>
				<div class="wrap-group-heading" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>


					<?php if (isset($_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['value']->value['name']])) {?>
						<a href="#" class="js-tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['value']->value['name']];?>
"><i class="i-info"></i></a>
					<?php }?>
				</div>
			<?php } elseif ('hidden'!=$_smarty_tpl->tpl_vars['value']->value['type']) {?>
				<div class="row <?php if ('custom'==$_smarty_tpl->tpl_vars['pageAction']->value) {?>custom<?php }?>" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
					<label class="col col-lg-2 control-label" for="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['description'], ENT_QUOTES, 'UTF-8', true);?>

						<?php if (isset($_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['value']->value['name']])) {?>
							<a href="#" class="js-tooltip" title="<?php echo $_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['value']->value['name']];?>
"><i class="i-info"></i></a>
						<?php }?>
					</label>

					<?php if (in_array($_smarty_tpl->tpl_vars['value']->value['type'],array('textarea','tpl'))) {?>
						<div class="col col-lg-8">
					<?php } else { ?>
						<div class="col col-lg-4">
					<?php }?>

					<?php if ('custom'==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
						<div class="pull-right">
							<span class="js-set-custom"><?php echo iaSmartyPlugins::lang(array('key'=>'config_set_custom'),$_smarty_tpl);?>
</span>
							<span class="js-set-default"><?php echo iaSmartyPlugins::lang(array('key'=>'config_set_default'),$_smarty_tpl);?>
</span>
						</div>
					<?php }?>

					<input type="hidden" class="chck" name="chck[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['classname']!='custom') {?>1<?php } else { ?>0<?php }?>" />
					<?php if ('password'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<?php if ('custom'==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
							<div class="item_val"><?php if (empty($_smarty_tpl->tpl_vars['value']->value['default'])) {?><?php echo iaSmartyPlugins::lang(array('key'=>'config_empty_password'),$_smarty_tpl);?>
<?php } else { ?>***********<?php }?></div>
						<?php }?>

						<div class="item_input">
							<input type="password" class="js-input-password" name="param[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
						</div>
					<?php } elseif ('text'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<?php if ('expiration_action'==$_smarty_tpl->tpl_vars['value']->value['name']) {?>
							<select name="param[expiration_action]">
								<option value=""<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'nothing'),$_smarty_tpl);?>
</option>
								<option value="remove"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='remove') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'remove'),$_smarty_tpl);?>
</option>
								<optgroup label="Status">
									<option value="approval"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='approval') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'approval'),$_smarty_tpl);?>
</option>
									<option value="banned"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='banned') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'banned'),$_smarty_tpl);?>
</option>
									<option value="suspended"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='suspended') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'suspended'),$_smarty_tpl);?>
</option>
								</optgroup>
								<optgroup label="Type">
									<option value="regular"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='regular') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'regular'),$_smarty_tpl);?>
</option>
									<option value="featured"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='featured') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'featured'),$_smarty_tpl);?>
</option>
									<option value="partner"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']=='partner') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'partner'),$_smarty_tpl);?>
</option>
								</optgroup>
							</select>
						<?php } elseif ('captcha_preview'==$_smarty_tpl->tpl_vars['value']->value['name']) {?>
							<?php echo iaSmartyPlugins::captcha(array('preview'=>true),$_smarty_tpl);?>

						<?php } else { ?>
							<?php if ('custom'==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
								<div class="item_val"><?php if (empty($_smarty_tpl->tpl_vars['value']->value['default'])) {?><?php echo iaSmartyPlugins::lang(array('key'=>'config_empty_value'),$_smarty_tpl);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div>
							<?php }?>

							<div class="item_input">
								<input type="text" name="param[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
							</div>
						<?php }?>
					<?php } elseif ('textarea'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<?php if ('custom'==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
							<div class="item_val"><?php if (empty($_smarty_tpl->tpl_vars['value']->value['default'])) {?><?php echo iaSmartyPlugins::lang(array('key'=>'config_empty_value'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['default'];?>
<?php }?></div>
						<?php }?>

						<div class="item_input">
							<textarea name="param[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['value']->value['wysiwyg']=='1') {?>js-wysiwyg <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['code_editor']) {?>js-code-editor <?php }?>common" cols="45" rows="7"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
					<?php } elseif ('image'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<?php if (!is_writeable(@constant('IA_UPLOADS'))) {?>
							<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'upload_writable_permission'),$_smarty_tpl);?>
</div>
						<?php } else { ?>
							<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['value'])||$_smarty_tpl->tpl_vars['value']->value['name']=='site_logo') {?>
								<div class="thumbnail">
									<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['value'])) {?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
">
									<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['name']=='site_logo') {?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/<?php echo $_smarty_tpl->tpl_vars['config']->value['tmpl'];?>
/img/logo.png">
									<?php }?>
								</div>

								<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['value'])) {?>
									<div class="checkbox">
										<label><input type="checkbox" name="delete[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
]"> <?php echo iaSmartyPlugins::lang(array('key'=>'delete'),$_smarty_tpl);?>
</label>
									</div>
								<?php }?>
							<?php }?>

							<?php echo smarty_function_ia_html_file(array('name'=>$_smarty_tpl->tpl_vars['value']->value['name'],'value'=>$_smarty_tpl->tpl_vars['value']->value['value']),$_smarty_tpl);?>

						<?php }?>
					<?php } elseif ('checkbox'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<div class="item_input">
							<input type="checkbox" name="param[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">
						</div>
					<?php } elseif ('radio'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<?php if ('custom'==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
							<div class="item_val"><?php if ($_smarty_tpl->tpl_vars['value']->value['default']==1) {?>ON<?php } else { ?>OFF<?php }?></div>
						<?php }?>

						<div class="item_input">
							<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['value']->value['value'],'name'=>$_smarty_tpl->tpl_vars['value']->value['name'],'conf'=>true),$_smarty_tpl);?>

						</div>
					<?php } elseif ('select'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<?php if ('custom'==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
							<div class="item_val"><?php if ($_smarty_tpl->tpl_vars['value']->value['name']=='lang') {?><?php echo $_smarty_tpl->tpl_vars['value']->value['values'][$_smarty_tpl->tpl_vars['value']->value['default']];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['default'];?>
<?php }?></div>
						<?php }?>

						<div class="item_input">
							<select name="param[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
]" <?php if (count($_smarty_tpl->tpl_vars['value']->value['values'])==1) {?> disabled="disabled"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">
								<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
									<?php if ('lang'==$_smarty_tpl->tpl_vars['value']->value['name']) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['value']->value['value']||$_smarty_tpl->tpl_vars['value2']->value==$_smarty_tpl->tpl_vars['value']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['value2']->value['title'];?>
</option>
									<?php } elseif (is_array($_smarty_tpl->tpl_vars['value2']->value)) {?>
										<optgroup label="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
											<?php  $_smarty_tpl->tpl_vars['subvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subvalue']->key => $_smarty_tpl->tpl_vars['subvalue']->value) {
$_smarty_tpl->tpl_vars['subvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['subvalue']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['subkey']->value==$_smarty_tpl->tpl_vars['value']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['subvalue']->value;?>
</option>
											<?php } ?>
										</optgroup>
									<?php } else { ?>
										<option value="<?php echo trim($_smarty_tpl->tpl_vars['value2']->value,"'");?>
"<?php if (trim($_smarty_tpl->tpl_vars['value2']->value,"'")==$_smarty_tpl->tpl_vars['value']->value['value']) {?> selected<?php }?>><?php echo trim($_smarty_tpl->tpl_vars['value2']->value,"'");?>
</option>
									<?php }?>
								<?php } ?>
							</select>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='itemscheckbox'&&'custom'!=$_smarty_tpl->tpl_vars['pageAction']->value) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['value']->value['items'])) {?>
							<div class="item_input">
								<input type="hidden" name="param[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
][]">
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
									<p>
										<input type="checkbox" id="icb_<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
" name="param[<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['checked']) {?> checked<?php }?>>
										<label for="icb_<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
									</p>
								<?php } ?>
							</div>
						<?php } else { ?>
							<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'no_implemented_packages'),$_smarty_tpl);?>
</div>
						<?php }?>
					<?php } elseif ('tpl'==$_smarty_tpl->tpl_vars['value']->value['type']) {?>
						<?php if (file_exists($_smarty_tpl->tpl_vars['value']->value['multiple_values'])) {?>
							<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['value']->value['multiple_values'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<?php echo iaSmartyPlugins::lang(array('key'=>'template_file_error'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['multiple_values'];?>

						<?php }?>
					<?php }?>
					</div>
				</div>
			<?php }?>
		<?php } ?>
	</div>

	<div class="form-actions"><input type="submit" name="save" id="save" class="btn btn-primary" value="<?php echo iaSmartyPlugins::lang(array('key'=>'save_changes'),$_smarty_tpl);?>
"></div>
</form>
<?php }?>

<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'utils/edit_area/edit_area, ckeditor/ckeditor, admin/configuration'),$_smarty_tpl);?>
<?php }} ?>
