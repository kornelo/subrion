<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:26:12
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19679556c33446eb5e0-53977602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a83cc07426a47f45e01d147ad9b83f15f0a2fdb0' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\languages.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19679556c33446eb5e0-53977602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageAction' => 0,
    'config' => 0,
    'core' => 0,
    'item' => 0,
    'direction' => 0,
    'action' => 0,
    'language' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c3344efd329_31281142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c3344efd329_31281142')) {function content_556c3344efd329_31281142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_html_file')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.ia_html_file.php';
?><div id="js-add-phrase-dialog-placeholder" style="margin:0px;height:0px;overflow:hidden;"><?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>
</div>

<?php if (iaCore::ACTION_READ!=$_smarty_tpl->tpl_vars['pageAction']->value) {?>
	<form method="post" class="sap-form form-horizontal">
		<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>


		<div class="wrap-list">
			<div class="wrap-group">
				<div class="wrap-group-heading">
					<h4>
						<?php if (iaCore::ACTION_EDIT==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
							<?php echo iaSmartyPlugins::lang(array('key'=>'edit_language'),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo iaSmartyPlugins::lang(array('key'=>'copy_master_language_to','lang'=>$_smarty_tpl->tpl_vars['core']->value['languages'][$_smarty_tpl->tpl_vars['config']->value['lang']]['title']),$_smarty_tpl);?>

						<?php }?>
					</h4>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'language_iso_code'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<input id="input-code" size="2" maxlength="2" type="text" name="code" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
">
					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<input id="input-title" size="10" maxlength="40" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'language_locale'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<input id="input-locale" type="text" name="locale" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['locale'];?>
">
					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'language_date_format'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<input id="input-date_format" type="text" name="date_format" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date_format'];?>
">
					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'language_direction'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<select name="direction">
							<?php  $_smarty_tpl->tpl_vars['direction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['direction']->_loop = false;
 $_from = array('auto','ltr','rtl'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['direction']->key => $_smarty_tpl->tpl_vars['direction']->value) {
$_smarty_tpl->tpl_vars['direction']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['direction']->value==$_smarty_tpl->tpl_vars['item']->value['direction']) {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>"language_direction_".((string)$_smarty_tpl->tpl_vars['direction']->value)),$_smarty_tpl);?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>

			<?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</form>
<?php } else { ?>
	<?php if ('list'==$_smarty_tpl->tpl_vars['action']->value) {?>
		<div class="widget widget-default">
			<div class="widget-content">
				<table cellspacing="0" cellpadding="0" class="table table-light">
					<thead>
						<tr>
							<th width="30"></th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'language'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'language_iso_code'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'language_locale'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'language_date_format'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'language_direction'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'master'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'default'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'status'),$_smarty_tpl);?>
</th>
							<th><?php echo iaSmartyPlugins::lang(array('key'=>'download'),$_smarty_tpl);?>
</th>
							<th></th>
						</tr>
					</thead>
					<tbody id="languagesList">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
							<tr>
								<td>
									<span class="btn btn-default uploads-list-item__drag-handle"><i class="i-list-2"></i></span>
								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
 - <a href="<?php echo @constant('IA_ADMIN_URL');?>
languages/phrases/?language=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"><?php echo iaSmartyPlugins::lang(array('key'=>'edit_phrases'),$_smarty_tpl);?>
</a>
								</td>
								<td class="iso-val"><?php echo $_smarty_tpl->tpl_vars['language']->value['iso'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['language']->value['locale'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['language']->value['date_format'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['language']->value['direction'];?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['language']->value['master']) {?>
										<span class="btn btn-xs disabled"><i class='i-checkmark'></i></span>
									<?php }?>
								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['config']->value['lang']) {?>
										<span class="btn btn-xs disabled"><i class='i-checkmark'></i></span>
									<?php } elseif (iaCore::STATUS_ACTIVE==$_smarty_tpl->tpl_vars['language']->value['status']) {?>
										<a class="btn btn-success btn-xs" href="<?php echo @constant('IA_ADMIN_URL');?>
languages/default/<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
/"><i class='i-checkmark'></i></a>
									<?php }?>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['language']->value['status'];?>
</td>
								<td>
									<a class="btn btn-default btn-xs" href="<?php echo @constant('IA_ADMIN_URL');?>
languages/download/<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
/"><i class="i-box-add"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'download'),$_smarty_tpl);?>
</a>
								</td>
								<td>
									<a class="btn btn-default btn-xs" href="<?php echo @constant('IA_ADMIN_URL');?>
languages/edit/<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
/"><i class="i-cog"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'settings'),$_smarty_tpl);?>
</a>

									<?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1&&$_smarty_tpl->tpl_vars['code']->value!=$_smarty_tpl->tpl_vars['config']->value['lang']) {?>
										<a class="btn btn-danger btn-xs js-remove-lang-cmd" href="<?php echo @constant('IA_ADMIN_URL');?>
languages/rm/<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
/"><i class='i-close'></i> <?php echo iaSmartyPlugins::lang(array('key'=>'delete'),$_smarty_tpl);?>
</a>
									<?php }?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	<?php } elseif ('phrases'==$_smarty_tpl->tpl_vars['action']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('grid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ('download'==$_smarty_tpl->tpl_vars['action']->value) {?>
		<form method="post" class="sap-form form-horizontal">
			<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

			<div class="wrap-list">
				<div class="wrap-group">
					<div class="wrap-group-heading"><h4><?php echo iaSmartyPlugins::lang(array('key'=>'download'),$_smarty_tpl);?>
</h4></div>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'language'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<select name="lang">
								<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'file_format'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<select name="file_format">
								<option value="csv"<?php if (isset($_POST['file_format'])&&$_POST['file_format']=='csv') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'csv_format'),$_smarty_tpl);?>
</option>
								<option value="sql"<?php if (isset($_POST['file_format'])&&$_POST['file_format']=='sql') {?> selected<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'sql_format'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'filename'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<input type="text" name="filename" value="<?php if (isset($_POST['filename'])&&$_POST['filename']) {?><?php echo htmlspecialchars($_POST['filename'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>subrion_<?php echo @constant('IA_VERSION');?>
_<?php echo @constant('IA_LANGUAGE');?>
<?php }?>">
						</div>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<input type="submit" class="btn btn-success" value="<?php echo iaSmartyPlugins::lang(array('key'=>'download'),$_smarty_tpl);?>
">
			</div>
		</form>

		<form action="<?php echo @constant('IA_ADMIN_URL');?>
languages/import/" method="post" enctype="multipart/form-data" class="sap-form form-horizontal">
			<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

			<div class="wrap-list">
				<div class="wrap-group">
					<div class="wrap-group-heading"><h4><?php echo iaSmartyPlugins::lang(array('key'=>'import'),$_smarty_tpl);?>
</h4></div>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'file_format'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<select name="format">
								<option value="csv"<?php if (isset($_POST['format'])&&$_POST['format']=='csv') {?> selected="selected"<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'csv_format'),$_smarty_tpl);?>
</option>
								<option value="sql"<?php if (isset($_POST['format'])&&$_POST['format']=='sql') {?> selected="selected"<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'sql_format'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<input type="text" name="title">
						</div>
					</div>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'import_from_pc'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<?php echo smarty_function_ia_html_file(array('name'=>'language_file'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'import_from_server'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<input type="text" name="language_file2" value="../updates/">
						</div>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<input type="submit" class="btn btn-success" value="<?php echo iaSmartyPlugins::lang(array('key'=>'import'),$_smarty_tpl);?>
" name="form-import">
			</div>
		</form>
	<?php } elseif ('comparison'==$_smarty_tpl->tpl_vars['action']->value) {?>
		<?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
			<?php echo iaSmartyPlugins::ia_add_media(array('files'=>'css:grid-extra'),$_smarty_tpl);?>


			<div id="js-legend-panel" style="display: none;">
				<p><span style="background-color: #e0f2f7; display: inline-block; height: 20px; width: 40px;"></span> Identical phrases pair</p>
				<p><span style="background-color: #eaeaea; display: inline-block; height: 20px; width: 40px;"></span> Incomplete phrases pair</p>
			</div>

			<div id="js-comparison-grid"></div>
		<?php }?>
	<?php }?>

	<?php echo iaSmartyPlugins::ia_add_media(array('files'=>'js:intelli/intelli.grid,js:admin/languages'),$_smarty_tpl);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmartyPlugins::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

intelli.config.language = '<?php echo @constant('IA_LANGUAGE');?>
';
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
