<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:38:43
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29636556c2823933160-67652602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33517193efc597632dc9be787df5ab8abf0ceaaa' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\pages.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29636556c2823933160-67652602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pageAction' => 0,
    'pagesGroup' => 0,
    'pageGroup' => 0,
    'pageId' => 0,
    'parentPageId' => 0,
    'pageTitle' => 0,
    'extensions' => 0,
    'extension' => 0,
    'custom_url' => 0,
    'isHomePage' => 0,
    'config' => 0,
    'menus' => 0,
    'menu_list' => 0,
    'menu' => 0,
    'selectedMenus' => 0,
    'core' => 0,
    'code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c2823bca668_05532018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c2823bca668_05532018')) {function content_556c2823bca668_05532018($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radio_switcher')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.html_radio_switcher.php';
if (!is_callable('smarty_modifier_replace')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.replace.php';
?><form method="post" id="page_form" class="sap-form form-horizontal">
	<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

	<input type="hidden" name="language" id="js-active-language">
	<input type="hidden" name="extras" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['extras'], ENT_QUOTES, 'UTF-8', true);?>
">

	<div class="wrap-list">
		<div class="wrap-group">
			<div class="wrap-group-heading">
				<h4><?php echo iaSmartyPlugins::lang(array('key'=>'options'),$_smarty_tpl);?>
</h4>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'name'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="input-name"<?php if (iaCore::ACTION_EDIT==$_smarty_tpl->tpl_vars['pageAction']->value) {?> readonly<?php }?>>
					<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?><p class="help-block"><?php echo iaSmartyPlugins::lang(array('key'=>'unique_name'),$_smarty_tpl);?>
</p><?php }?>
				</div>
			</div>

			<?php if (!$_smarty_tpl->tpl_vars['item']->value['service']&&!$_smarty_tpl->tpl_vars['item']->value['readonly']) {?>

				<div class="row js-local-url-field">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'parent'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<select name="parent_id" id="input-parent">
							<option value="0"><?php echo iaSmartyPlugins::lang(array('key'=>'_no_parent_page_'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['pageGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageGroup']->key => $_smarty_tpl->tpl_vars['pageGroup']->value) {
$_smarty_tpl->tpl_vars['pageGroup']->_loop = true;
?>
								<optgroup label="<?php echo $_smarty_tpl->tpl_vars['pageGroup']->value['title'];?>
">
									<?php  $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageTitle']->_loop = false;
 $_smarty_tpl->tpl_vars['pageId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pageGroup']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageTitle']->key => $_smarty_tpl->tpl_vars['pageTitle']->value) {
$_smarty_tpl->tpl_vars['pageTitle']->_loop = true;
 $_smarty_tpl->tpl_vars['pageId']->value = $_smarty_tpl->tpl_vars['pageTitle']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['pageId']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['parentPageId']->value==$_smarty_tpl->tpl_vars['pageId']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php } ?>
								</optgroup>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="row" id="js-field-remote-url" style="display: none;">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'page_external_url'),$_smarty_tpl);?>
</label>
					<div class="col col-lg-4">
						<input type="text" name="custom_url" id="input-custom-url" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom_url'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['custom_url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
					</div>
				</div>

				<div class="row js-local-url-field">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'custom_url'),$_smarty_tpl);?>
</label>
					<div class="col col-lg-4">
						<div class="input-group">
							<input type="text" name="alias" id="input-alias" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
">
							<input type="hidden" name="extension" value="<?php if ($_smarty_tpl->tpl_vars['item']->value['extension']) {?>.<?php echo $_smarty_tpl->tpl_vars['item']->value['extension'];?>
<?php } else { ?>/<?php }?>">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<?php if (empty($_smarty_tpl->tpl_vars['item']->value['extension'])) {?><?php echo iaSmartyPlugins::lang(array('key'=>'no_extension'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['extension'];?>
<?php }?>
									<span class="caret"></span>
								</button>
								<ul id="js-page-extension-list" class="dropdown-menu pull-right">
									<li<?php if (empty($_smarty_tpl->tpl_vars['item']->value['extension'])) {?> class="active"<?php }?>><a href="#" data-extension="/"><?php echo iaSmartyPlugins::lang(array('key'=>'no_extension'),$_smarty_tpl);?>
</a></li>
									<li class="divider"></li>
									<?php  $_smarty_tpl->tpl_vars['extension'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extension']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extension']->key => $_smarty_tpl->tpl_vars['extension']->value) {
$_smarty_tpl->tpl_vars['extension']->_loop = true;
?>
									<li<?php if ($_smarty_tpl->tpl_vars['item']->value['extension']==$_smarty_tpl->tpl_vars['extension']->value) {?> class="active"<?php }?>><a href="#" data-extension=".<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
</a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<p id="js-alias-placeholder" class="help-block"><?php echo iaSmartyPlugins::lang(array('key'=>'page_url_will_be'),$_smarty_tpl);?>
: <span class="text-danger"></span></p>
					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'external_url'),$_smarty_tpl);?>
</label>
					<div class="col col-lg-4">
						<?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom_url'])&&$_smarty_tpl->tpl_vars['item']->value['custom_url']!=''||isset($_POST['unique'])&&$_POST['unique']==1) {?>
							<?php $_smarty_tpl->tpl_vars['custom_url'] = new Smarty_variable(1, null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['custom_url'] = new Smarty_variable(0, null, 0);?>
						<?php }?>
						<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['custom_url']->value,'name'=>'unique'),$_smarty_tpl);?>

					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'no_follow_url'),$_smarty_tpl);?>
</label>
					<div class="col col-lg-4">
						<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['nofollow'],'name'=>'nofollow'),$_smarty_tpl);?>

					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'open_in_new_window'),$_smarty_tpl);?>
</label>
					<div class="col col-lg-4">
						<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['new_window'],'name'=>'new_window'),$_smarty_tpl);?>

					</div>
				</div>

				<div class="row js-local-url-field">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'password'),$_smarty_tpl);?>
</label>
					<div class="col col-lg-4">
						<input type="text" name="passw" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['passw'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['passw'], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (isset($_POST['passw'])) {?><?php echo htmlspecialchars($_POST['passw'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
					</div>
				</div>
			<?php } else { ?>
				<input type="hidden" value="1" name="service">
			<?php }?>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'use_as_home_page'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<?php if ($_smarty_tpl->tpl_vars['isHomePage']->value) {?>
						<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'already_home_page'),$_smarty_tpl);?>
</div>
					<?php } else { ?>
						<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['isHomePage']->value,'name'=>'home_page'),$_smarty_tpl);?>

						<p class="help-block"><?php echo iaSmartyPlugins::lang(array('key'=>'current_home_page'),$_smarty_tpl);?>
: <span class="text-danger"><?php echo iaSmartyPlugins::lang(array('key'=>"page_title_".((string)$_smarty_tpl->tpl_vars['config']->value['home_page'])),$_smarty_tpl);?>
</span></p>
					<?php }?>
				</div>
			</div>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'manage_menus','action'=>iaCore::ACTION_ADD)); $_block_repeat=true; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'manage_menus','action'=>iaCore::ACTION_ADD), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'show_menus'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<ul class="nav nav-tabs">
							<?php  $_smarty_tpl->tpl_vars['menu_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu_list']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu_list']->key => $_smarty_tpl->tpl_vars['menu_list']->value) {
$_smarty_tpl->tpl_vars['menu_list']->_loop = true;
 $_smarty_tpl->tpl_vars['menu_list']->iteration++;
?>
								<?php if ($_smarty_tpl->tpl_vars['menu_list']->value['list']) {?>
									<li<?php if ($_smarty_tpl->tpl_vars['menu_list']->iteration==1) {?> class="active"<?php }?>><a href="#tab-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['menu_list']->value['title'],' ','');?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['menu_list']->value['title'];?>
</a></li>
								<?php }?>
							<?php } ?>
						</ul>

						<div class="tab-content">
							<?php  $_smarty_tpl->tpl_vars['menu_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu_list']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu_list']->key => $_smarty_tpl->tpl_vars['menu_list']->value) {
$_smarty_tpl->tpl_vars['menu_list']->_loop = true;
 $_smarty_tpl->tpl_vars['menu_list']->iteration++;
?>
								<?php if ($_smarty_tpl->tpl_vars['menu_list']->value['list']) {?>
									<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['menu_list']->iteration==1) {?> active<?php }?>" id="tab-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['menu_list']->value['title'],' ','');?>
">
										<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="menus[]" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
" id="p_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value['id'],$_smarty_tpl->tpl_vars['selectedMenus']->value)) {?> checked<?php }?>> <?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>

												</label>
											</div>
										<?php } ?>
									</div>
								<?php }?>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'manage_menus','action'=>iaCore::ACTION_ADD), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<div class="js-local-url-field">
				<?php if ('page'==$_smarty_tpl->tpl_vars['item']->value['filename']) {?>
					<div class="row">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'custom_template'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['custom_tpl'],'name'=>'custom_tpl'),$_smarty_tpl);?>

						</div>
					</div>

					<div class="row" id="js-field-tpl-filename" style="display: none;">
						<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'custom_template_filename'),$_smarty_tpl);?>
</label>
						<div class="col col-lg-4">
							<input type="text" name="template_filename" id="input-tpl-filename" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['template_filename'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['template_filename'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
						</div>
					</div>
				<?php }?>
			</div>
		</div>

		<div class="wrap-group js-local-url-field">
			<div class="wrap-group-heading">
				<h4><?php echo iaSmartyPlugins::lang(array('key'=>'seo'),$_smarty_tpl);?>
</h4>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'meta_description'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<textarea name="meta_description" rows="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['meta_description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'meta_keywords'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<input type="text" name="meta_keywords" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['meta_keywords'], ENT_QUOTES, 'UTF-8', true);?>
">
				</div>
			</div>
		</div>

		<div class="wrap-group" id="js-content-fields">
			<div class="row">
				<ul class="nav nav-tabs">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['language']->iteration=0;
 $_smarty_tpl->tpl_vars['language']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
 $_smarty_tpl->tpl_vars['language']->iteration++;
 $_smarty_tpl->tpl_vars['language']->index++;
 $_smarty_tpl->tpl_vars['language']->first = $_smarty_tpl->tpl_vars['language']->index === 0;
?>
						<li<?php if ($_smarty_tpl->tpl_vars['language']->iteration==1) {?> class="active"<?php }?>><a href="#tab-language-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" data-toggle="tab" data-language="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</a></li>
					<?php } ?>
				</ul>

				<div class="tab-content">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['language']->iteration=0;
 $_smarty_tpl->tpl_vars['language']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
 $_smarty_tpl->tpl_vars['language']->iteration++;
 $_smarty_tpl->tpl_vars['language']->index++;
 $_smarty_tpl->tpl_vars['language']->first = $_smarty_tpl->tpl_vars['language']->index === 0;
?>
					<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['language']->first) {?> active<?php }?>" id="tab-language-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
						<div class="row">
							<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>
							<div class="col col-lg-10">
								<input type="text" name="titles[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['titles'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['titles'][$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
							</div>
						</div>
						<div class="row js-local-url-field">
							<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'page_content'),$_smarty_tpl);?>
</label>
							<div class="col col-lg-10">
								<textarea rows="30" name="contents[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['contents'][$_smarty_tpl->tpl_vars['code']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['contents'][$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</form>
<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'ckeditor/ckeditor, admin/pages'),$_smarty_tpl);?>
<?php }} ?>
