<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 05:42:41
         compiled from "C:\WebServ\httpd\subrion\templates\common\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28158556c2911ec1d23-98901159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c5456815927f7be8f047bedca1e912ea78a79b' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\templates\\common\\search.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28158556c2911ec1d23-98901159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'adv' => 0,
    'items' => 0,
    'item' => 0,
    'fields' => 0,
    'k' => 0,
    'item_fields' => 0,
    'f' => 0,
    'title' => 0,
    'fieldType' => 0,
    'conditions' => 0,
    'value' => 0,
    'cond' => 0,
    'key' => 0,
    'val' => 0,
    'results' => 0,
    'atotal' => 0,
    'atemplate' => 0,
    'limit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c29121a11e5_35622558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c29121a11e5_35622558')) {function content_556c29121a11e5_35622558($_smarty_tpl) {?><form method="post" class="form-inline ia-form page__search">
	<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>


	<div class="search-bar">
		<input class="input-block-level" type="text" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['query'], ENT_QUOTES, 'UTF-8', true);?>
">
		<button class="btn btn-primary" type="submit"><?php echo iaSmartyPlugins::lang(array('key'=>'search'),$_smarty_tpl);?>
</button>
		<?php if (!$_smarty_tpl->tpl_vars['adv']->value) {?>
			<a href="<?php echo @constant('IA_URL');?>
advsearch/<?php if (isset($_smarty_tpl->tpl_vars['search']->value['id'])&&$_smarty_tpl->tpl_vars['search']->value['id']) {?>?id=<?php echo $_smarty_tpl->tpl_vars['search']->value['id'];?>
<?php }?>" class="btn btn-link"><?php echo iaSmartyPlugins::lang(array('key'=>'switch_to_advanced_search'),$_smarty_tpl);?>
</a>
		<?php } else { ?>
			<a href="<?php echo @constant('IA_URL');?>
search/<?php if (isset($_smarty_tpl->tpl_vars['search']->value['id'])&&$_smarty_tpl->tpl_vars['search']->value['id']) {?>?id=<?php echo $_smarty_tpl->tpl_vars['search']->value['id'];?>
<?php }?>" class="btn btn-link"><?php echo iaSmartyPlugins::lang(array('key'=>'switch_to_regular_search'),$_smarty_tpl);?>
</a>
		<?php }?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['adv']->value) {?>
		<div class="search-items">
			<div class="row-fluid">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
					<div class="span4">
						<label class="checkbox">
							<input type="checkbox" name="items[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['search']->value['terms']['items']&&array_key_exists($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['search']->value['terms']['items'])) {?> checked<?php }?>>
							<?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['item']->value,'default'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

						</label>
					</div>
			
					<?php if ($_smarty_tpl->tpl_vars['item']->iteration%3==0) {?>
						</div>
						<div class="row-fluid">
					<?php }?>
				<?php } ?>
			</div>
		</div>

	    <div class="search-pane">
			<?php  $_smarty_tpl->tpl_vars['item_fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_fields']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_fields']->key => $_smarty_tpl->tpl_vars['item_fields']->value) {
$_smarty_tpl->tpl_vars['item_fields']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item_fields']->key;
?>
				<div class="search-pane-fieldset" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_fields">
					<h3 class="title"><?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['k']->value,'default'=>$_smarty_tpl->tpl_vars['k']->value),$_smarty_tpl);?>
</h3>
					<div class="content">
						<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("field_".((string)$_smarty_tpl->tpl_vars['f']->value['name']), null, 0);?>
							<div class="control-group">
								<label class="control-label"><?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
</label>
								<div class="controls">
									<div class="row-fluid">
										<?php $_smarty_tpl->tpl_vars['fieldType'] = new Smarty_variable($_smarty_tpl->tpl_vars['f']->value['type'], null, 0);?>
										<div class="span4">
											<select class="input-block-level" name="cond[<?php echo $_smarty_tpl->tpl_vars['f']->value['item'];?>
][<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
]">
												<?php  $_smarty_tpl->tpl_vars['cond'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cond']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['conditions']->value[$_smarty_tpl->tpl_vars['fieldType']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cond']->key => $_smarty_tpl->tpl_vars['cond']->value) {
$_smarty_tpl->tpl_vars['cond']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['cond']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['f']->value['cond'])&&$_smarty_tpl->tpl_vars['cond']->value==$_smarty_tpl->tpl_vars['f']->value['cond']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
</option>
												<?php } ?>
											</select>
										</div>
										<div class="span8">
											<?php if ('combo'==$_smarty_tpl->tpl_vars['fieldType']->value) {?>
												<select class="input-block-level" name="f[<?php echo $_smarty_tpl->tpl_vars['f']->value['item'];?>
][<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
][]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['f']->value['val'])&&is_array($_smarty_tpl->tpl_vars['f']->value['val'])&&(in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['f']->value['val'])||isset($_smarty_tpl->tpl_vars['val']->value)&&in_array($_smarty_tpl->tpl_vars['val']->value,$_smarty_tpl->tpl_vars['f']->value['val']))) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
													<?php } ?>
												</select>
											<?php } elseif ('radio'==$_smarty_tpl->tpl_vars['fieldType']->value) {?>
												<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
													<label class="radio horizontal">
														<input type="radio" name="f[<?php echo $_smarty_tpl->tpl_vars['f']->value['item'];?>
][<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['f']->value['val'])&&($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['f']->value['val']||isset($_smarty_tpl->tpl_vars['val']->value)&&$_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['f']->value['val'])) {?> checked<?php }?>>
														<?php echo $_smarty_tpl->tpl_vars['val']->value;?>

													</label>
												<?php } ?>
											<?php } elseif ('checkbox'==$_smarty_tpl->tpl_vars['fieldType']->value) {?>
												<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
													<label class="checkbox horizontal">
														<input type="checkbox" name="f[<?php echo $_smarty_tpl->tpl_vars['f']->value['item'];?>
][<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['f']->value['val'])&&is_array($_smarty_tpl->tpl_vars['f']->value['val'])&&(in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['f']->value['val'])||isset($_smarty_tpl->tpl_vars['val']->value)&&in_array($_smarty_tpl->tpl_vars['val']->value,$_smarty_tpl->tpl_vars['f']->value['val']))) {?> checked<?php }?>>
														<?php echo $_smarty_tpl->tpl_vars['val']->value;?>

													</label>
												<?php } ?>
											<?php } elseif ('image'==$_smarty_tpl->tpl_vars['fieldType']->value||'storage'==$_smarty_tpl->tpl_vars['fieldType']->value) {?>
												<input type="hidden" name="f[<?php echo $_smarty_tpl->tpl_vars['f']->value['item'];?>
][<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
]" value="">
											<?php } else { ?>
												<input class="input-block-level" type="text" name="f[<?php echo $_smarty_tpl->tpl_vars['f']->value['item'];?>
][<?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['f']->value['val'])) {?><?php echo $_smarty_tpl->tpl_vars['f']->value['val'];?>
<?php }?>">
											<?php }?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			<div class="actions">
				<button class="btn btn-primary" type="submit"><?php echo iaSmartyPlugins::lang(array('key'=>'search'),$_smarty_tpl);?>
</button> 
			</div>
		</div>
	<?php }?>
</form>

<?php if ($_smarty_tpl->tpl_vars['search']->value&&$_smarty_tpl->tpl_vars['results']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
		<div class="search-results">
			<h3 class="title"><?php echo iaSmartyPlugins::lang(array('key'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
</h3>
			<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

		</div>
	<?php } ?>

	<?php echo iaSmartyPlugins::pagination(array('aTotal'=>$_smarty_tpl->tpl_vars['atotal']->value,'aTemplate'=>$_smarty_tpl->tpl_vars['atemplate']->value,'aItemsPerPage'=>$_smarty_tpl->tpl_vars['limit']->value,'aNumPageItems'=>5),$_smarty_tpl);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmartyPlugins::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	var search = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['query'], ENT_QUOTES, 'UTF-8', true);?>
';
	if (search.length > 0)
	{
		var patt = new RegExp('('+search+')', 'mgi');

		$('.search-results :not(:has(div,span,p,td,table,a,img)):not(legend):visible:not(br)')
		.filter('div,p,td,span,a')
		.each(function()
		{
			var text = $(this).text();
			if (patt.exec(text))
			{
				text = text.replace(patt, '<span class="highlight">$1</span>');
				$(this).html(text); 
			}
		});
	}
});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } elseif ($_smarty_tpl->tpl_vars['search']->value) {?>
	<div class="message alert"><?php echo iaSmartyPlugins::lang(array('key'=>'nothing_found'),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'frontend/search'),$_smarty_tpl);?>
<?php }} ?>
