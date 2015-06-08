<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:31:44
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\blocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13991556c3490053d57-64584492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec8efff59d2fefbc2ea8c2bf9f7f9ac17cbbf839' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\blocks.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13991556c3490053d57-64584492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageAction' => 0,
    'item' => 0,
    'types' => 0,
    'type' => 0,
    'positions' => 0,
    'position' => 0,
    'core' => 0,
    'code' => 0,
    'language' => 0,
    'pagesGroup' => 0,
    'row' => 0,
    'classname' => 0,
    'post_key' => 0,
    'pages' => 0,
    'page' => 0,
    'group' => 0,
    'key' => 0,
    'menuPages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c3490d57a25_57653677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c3490d57a25_57653677')) {function content_556c3490d57a25_57653677($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radio_switcher')) include 'C:/WebServ/httpd/subrion/includes/smarty/intelli_plugins\\function.html_radio_switcher.php';
?><form method="post" class="sap-form form-horizontal">
	<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>


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
					<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
						<input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['name'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
						<p class="help-block"><?php echo iaSmartyPlugins::lang(array('key'=>'unique_name'),$_smarty_tpl);?>
</p>
					<?php } else { ?>
						<input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" disabled>
					<?php }?>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'type'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<select name="type" id="input-block-type">
					<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
						<?php if (iaBlock::TYPE_MENU!=$_smarty_tpl->tpl_vars['type']->value) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'blocks','action'=>$_smarty_tpl->tpl_vars['type']->value)); $_block_repeat=true; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'blocks','action'=>$_smarty_tpl->tpl_vars['type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['item']->value['type']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::access(array('object'=>'admin_pages','id'=>'blocks','action'=>$_smarty_tpl->tpl_vars['type']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					<?php } ?>
					</select>
					<p class="help-block">
						<span data-type="plain" style="display: none;"><?php echo iaSmartyPlugins::lang(array('key'=>'block_type_tip_plain'),$_smarty_tpl);?>
</span>
						<span data-type="html" style="display: none;"><?php echo iaSmartyPlugins::lang(array('key'=>'block_type_tip_html'),$_smarty_tpl);?>
</span>
						<span data-type="smarty" style="display: none;"><?php echo iaSmartyPlugins::lang(array('key'=>'block_type_tip_smarty'),$_smarty_tpl);?>
</span>
						<span data-type="php" style="display: none;"><?php echo iaSmartyPlugins::lang(array('key'=>'block_type_tip_php'),$_smarty_tpl);?>
</span>
					</p>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'position'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<select name="position">
						<?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['positions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['position']->value['name'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['position'])&&$_smarty_tpl->tpl_vars['item']->value['position']==$_smarty_tpl->tpl_vars['position']->value['name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['position']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'css_class_name'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<input type="text" name="classname" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['classname'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['classname'];?>
<?php }?>">
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'show_header'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['header'],'name'=>'header'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" style="display: none;">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'collapsible'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['collapsible'],'name'=>'collapsible'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" style="display: none;">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'collapsed'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['collapsed'],'name'=>'collapsed'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" id="js-multi-language-row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'multilingual'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['multilingual'],'name'=>'multilingual'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" id="languages" style="display: none;">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'language'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" id="js-check-all-lngs" value="1"<?php if (isset($_POST['select_all'])&&$_POST['select_all']=='1') {?> checked<?php }?>> <?php echo iaSmartyPlugins::lang(array('key'=>'select_all'),$_smarty_tpl);?>

						</label>
					</div>

					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
						<div class="checkbox">
							<label>
								<input type="checkbox" class="js-language-check" name="languages[]" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['languages'])&&in_array($_smarty_tpl->tpl_vars['code']->value,$_smarty_tpl->tpl_vars['item']->value['languages'])) {?> checked<?php }?>> <?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>

							</label>
						</div>
					<?php } ?>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'block_visible_everywhere'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['sticky'],'name'=>'sticky'),$_smarty_tpl);?>

					<p class="js-visibility-visible help-block"><?php echo iaSmartyPlugins::lang(array('key'=>'block_visibility_exceptions_visible'),$_smarty_tpl);?>
</p>
					<p class="js-visibility-hidden help-block"><?php echo iaSmartyPlugins::lang(array('key'=>'block_visibility_exceptions_hidden'),$_smarty_tpl);?>
</p>
				</div>
			</div>

			<div class="row" id="js-pages-list">
				<label class="col col-lg-2 control-label"></label>

				<div class="col col-lg-8">
					<ul class="nav nav-tabs">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
							<li<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> class="active"<?php }?>><a href="#tab-visible_<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
						<?php } ?>
					</ul>

					<div class="tab-content">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
							<?php $_smarty_tpl->tpl_vars['post_key'] = new Smarty_variable("select_all_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
							<?php $_smarty_tpl->tpl_vars['classname'] = new Smarty_variable("visible_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
							<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
">
								<div class="checkbox checkbox-all">
									<label>
										<input type="checkbox" value="1" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" name="select_all_<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" id="select_all_<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
"<?php if (isset($_POST[$_smarty_tpl->tpl_vars['post_key']->value])&&$_POST[$_smarty_tpl->tpl_vars['post_key']->value]=='1') {?> checked<?php }?>> <?php echo iaSmartyPlugins::lang(array('key'=>'select_all_in_tab'),$_smarty_tpl);?>

									</label>
								</div>

								<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['page']->value['group']==$_smarty_tpl->tpl_vars['group']->value) {?>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="pages[]" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
" id="page_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['page']->value['name'],$_smarty_tpl->tpl_vars['item']->value['pages'])) {?> checked<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

											</label>
										</div>
										<?php if ($_smarty_tpl->tpl_vars['page']->value['suburl']) {?>
											<div class="subpages" style="display:none" rel="<?php echo $_smarty_tpl->tpl_vars['page']->value['suburl'];?>
::<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;</div>
											<input type="hidden" name="subpages[<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']];?>
<?php } elseif (isset($_POST['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']])) {?><?php echo $_POST['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']];?>
<?php }?>" id="subpage_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
										<?php }?>
									<?php }?>
								<?php } ?>
							</div>
						<?php } ?>
					</div>

					<div class="checkbox checkbox-all">
						<label>
							<input type="checkbox" value="1" name="select_all" id="js-pages-select-all"<?php if (isset($_POST['select_all'])&&$_POST['select_all']=='1') {?> checked<?php }?>> <?php echo iaSmartyPlugins::lang(array('key'=>'select_all'),$_smarty_tpl);?>

						</label>
					</div>
				</div>
			</div>

			<div id="pages" class="row" style="display: none;">
				<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'pages_contains'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="1" name="all_pages" id="all_pages"<?php if (isset($_POST['all_pages'])&&$_POST['all_pages']=='1') {?> checked<?php }?>> <?php echo iaSmartyPlugins::lang(array('key'=>'select_all'),$_smarty_tpl);?>

						</label>
					</div>

					<ul class="nav nav-tabs">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
							<li<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> class="active"<?php }?>><a href="#tab-pages_<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
						<?php } ?>
					</ul>

					<div class="tab-content">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
							<?php $_smarty_tpl->tpl_vars['post_key'] = new Smarty_variable("all_pages_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
							<?php $_smarty_tpl->tpl_vars['classname'] = new Smarty_variable("pages_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
							<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="1" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['post_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['post_key']->value;?>
"<?php if (isset($_POST[$_smarty_tpl->tpl_vars['post_key']->value])&&$_POST[$_smarty_tpl->tpl_vars['post_key']->value]=='1') {?> checked<?php }?>>
									</label>
								</div>

								<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['page']->value['group']==$_smarty_tpl->tpl_vars['group']->value) {?>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="pages[]" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['page']->value['name'],$_smarty_tpl->tpl_vars['menuPages']->value,true)) {?> checked<?php }?>>
											<?php if (empty($_smarty_tpl->tpl_vars['page']->value['title'])) {?><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
<?php }?>
										</label>
									</div>
									<?php }?>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap-list">
		<div class="wrap-group">
			<div class="wrap-group-heading">
				<h4><?php echo iaSmartyPlugins::lang(array('key'=>'block_contents'),$_smarty_tpl);?>
</h4>
			</div>

			<div class="wrap-row" id="blocks_contents" style="display: none;">
				<div class="row" id="js-external-row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'external_file'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['external'],'name'=>'external'),$_smarty_tpl);?>

					</div>
				</div>

				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<input type="text" name="title" value="<?php if (!is_array($_smarty_tpl->tpl_vars['item']->value['title'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
					</div>
				</div>

				<div class="row" id="js-multilingual-content-row">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'contents'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-8">
						<textarea name="content" id="multi_contents" rows="8" class="js-ckeditor"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
					</div>
				</div>

				<div class="row" id="external_filename">
					<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'filename'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<input type="text" name="filename" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['filename'])&&!empty($_smarty_tpl->tpl_vars['item']->value['filename'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['filename'], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (isset($_POST['filename'])) {?><?php echo htmlspecialchars($_POST['filename'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
						<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
							<p class="help-block"><?php echo iaSmartyPlugins::lang(array('key'=>'filename_notification'),$_smarty_tpl);?>
</p>
						<?php }?>
					</div>
				</div>
			</div>

			<div class="wrap-row" id="blocks_contents_multi" style="display: none;">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<div id="blocks_contents_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="wrap-row">
						<div class="row">
							<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'title'),$_smarty_tpl);?>
 <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</span></label>

							<div class="col col-lg-4">
								<input type="text" name="titles[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['titles'][$_smarty_tpl->tpl_vars['code']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['titles'][$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
							</div>
						</div>

						<div class="row">
							<label class="col col-lg-2 control-label"><?php echo iaSmartyPlugins::lang(array('key'=>'contents'),$_smarty_tpl);?>
 <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</span></label>

							<div class="col col-lg-8">
								<textarea name="contents[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" id="contents_<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" rows="8" class="js-ckeditor resizable"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['contents'][$_smarty_tpl->tpl_vars['code']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['contents'][$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</form>
<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'utils/edit_area/edit_area, ckeditor/ckeditor, admin/blocks'),$_smarty_tpl);?>
<?php }} ?>
