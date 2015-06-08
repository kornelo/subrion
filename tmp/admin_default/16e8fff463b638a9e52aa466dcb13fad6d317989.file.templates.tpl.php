<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:53:38
         compiled from "C:\WebServ\httpd\subrion\admin\templates\default\templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30193556c39b23cb004-20413438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e8fff463b638a9e52aa466dcb13fad6d317989' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\admin\\templates\\default\\templates.tpl',
      1 => 1430129388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30193556c39b23cb004-20413438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templates' => 0,
    'template' => 0,
    'tmpl' => 0,
    'core' => 0,
    'screenshot' => 0,
    'note' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c39b29ae778_81903990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c39b29ae778_81903990')) {function content_556c39b29ae778_81903990($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.date_format.php';
?><div class="plates plates--templates">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['template']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->iteration++;
?>
			<div class="col col-lg-3">
				<div class="media plate<?php if (isset($_smarty_tpl->tpl_vars['template']->value['remote'])) {?> plate--remote<?php }?><?php if ($_smarty_tpl->tpl_vars['template']->value['name']==$_smarty_tpl->tpl_vars['tmpl']->value) {?> plate--active<?php }?>">
					<div class="plate__image">
						<?php if (!isset($_smarty_tpl->tpl_vars['template']->value['remote'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['template']->value['logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
" rel="ia_lightbox[<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
]">
								<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value['logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
">
							</a>
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['template']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
" target="_blank">
								<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value['logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
">
							</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['template']->value['screenshots'])&&$_smarty_tpl->tpl_vars['template']->value['screenshots']) {?>
							<div class="screenshots hidden">
								<?php  $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screenshot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screenshot']->key => $_smarty_tpl->tpl_vars['screenshot']->value) {
$_smarty_tpl->tpl_vars['screenshot']->_loop = true;
?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
/docs/img/<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['name'];?>
" rel="ia_lightbox[<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
]" title="<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['title'];?>
"></a>
								<?php } ?>
							</div>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['template']->value['remote'])&&$_smarty_tpl->tpl_vars['template']->value['price']>0) {?>
							<div class="plate__badge plate__badge--premium">Premium &mdash; $<?php echo $_smarty_tpl->tpl_vars['template']->value['price'];?>
</div>
						<?php }?>

						<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
							<div class="plate__note"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</div>
						<?php } ?>
					</div>
					<div class="media-body">
						<div class="plate__heading">
							<h4><?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['template']->value['version'];?>
</small></h4>
						</div>
						<p class="plate__info">
							<?php echo iaSmartyPlugins::lang(array('key'=>'date'),$_smarty_tpl);?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['template']->value['date'],$_smarty_tpl->tpl_vars['config']->value['date_format']);?>
<br>
							<?php echo iaSmartyPlugins::lang(array('key'=>'compatibility'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['template']->value['compatibility'];?>

						</p>

						<?php if ($_smarty_tpl->tpl_vars['template']->value['buttons']) {?>
							<form method="post" class="clearfix">
								<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

								<input type="hidden" name="template" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['template']->value['name']!=$_smarty_tpl->tpl_vars['tmpl']->value) {?>
									<button type="submit" name="install" class="btn btn-success btn-sm"><i class="i-checkmark"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'set_as_default_template'),$_smarty_tpl);?>
</button>
								<?php } else { ?>
									<?php if (@constant('INTELLI_DEBUG')) {?>
										<button type="submit" name="reinstall" class="btn btn-warning btn-sm"><i class="i-loop"></i></button>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['template']->value['config_groups']) {?>
										<a href="<?php echo @constant('IA_ADMIN_URL');?>
configuration/<?php echo $_smarty_tpl->tpl_vars['template']->value['config_groups'][0]['name'];?>
/" class="btn btn-sm btn-default" title="<?php echo iaSmartyPlugins::lang(array('key'=>'go_to_config'),$_smarty_tpl);?>
"><i class="i-cog"></i></a>
									<?php }?>
								<?php }?>
								<a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
" class="btn btn-sm btn-default js-cmd-info" title="<?php echo iaSmartyPlugins::lang(array('key'=>'details'),$_smarty_tpl);?>
"><i class="i-info"></i></a>
								<?php if ($_smarty_tpl->tpl_vars['template']->value['name']!=$_smarty_tpl->tpl_vars['tmpl']->value) {?>
									<a href="<?php echo @constant('IA_URL');?>
index/?preview=<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
" class="btn btn-sm btn-default" title="<?php echo iaSmartyPlugins::lang(array('key'=>'preview'),$_smarty_tpl);?>
" target="_blank"><i class="i-eye"></i></a>
								<?php }?>
							</form>
						<?php } elseif (isset($_smarty_tpl->tpl_vars['template']->value['remote'])) {?>
							<?php if ($_smarty_tpl->tpl_vars['template']->value['price']>0) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['template']->value['url'];?>
" class="btn btn-default btn-sm" target="_blank" title="<?php echo iaSmartyPlugins::lang(array('key'=>'view'),$_smarty_tpl);?>
"><i class="i-eye"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'view'),$_smarty_tpl);?>
</a>
							<?php } else { ?>
								<form method="post" class="clearfix">
									<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

									<button type="submit" name="download" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
" class="btn btn-success btn-sm"><i class="i-box-add"></i> <?php echo iaSmartyPlugins::lang(array('key'=>'download'),$_smarty_tpl);?>
</button>
									<a href="<?php echo $_smarty_tpl->tpl_vars['template']->value['url'];?>
" class="btn btn-default btn-sm" target="_blank" title="<?php echo iaSmartyPlugins::lang(array('key'=>'preview'),$_smarty_tpl);?>
"><i class="i-eye"></i></a>
								</form>
							<?php }?>
						<?php } else { ?>
							<a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
" class="btn btn-default btn-sm js-cmd-info" title="<?php echo iaSmartyPlugins::lang(array('key'=>'details'),$_smarty_tpl);?>
"><i class="i-info"></i></a>
						<?php }?>
					</div>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['template']->iteration%4==0) {?>
				</div>
				<div class="row">
			<?php }?>
		<?php } ?>
	</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmartyPlugins::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('.preview').on('click', function(e)
{
	e.preventDefault();
	$(this).parent().find('.screenshots a:first').trigger('click');
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmartyPlugins::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'admin/templates'),$_smarty_tpl);?>
<?php }} ?>
