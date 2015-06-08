<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:43:06
         compiled from "C:\WebServ\httpd\subrion\plugins\questions_and_answers\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12407556c373ade2901-51330370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee76572d33f81155a32661a2a318df7d4f50927' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\plugins\\questions_and_answers\\templates\\admin\\index.tpl',
      1 => 1424085490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12407556c373ade2901-51330370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'questions' => 0,
    'pageAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c373b0c63d5_15176004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c373b0c63d5_15176004')) {function content_556c373b0c63d5_15176004($_smarty_tpl) {?><form action="" method="post" enctype="multipart/form-data" class="sap-form form-horizontal">
	<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>


	<div class="wrap-list">
		<div class="wrap-group">
			<div class="wrap-group-heading">
				<h4><?php echo iaSmartyPlugins::lang(array('key'=>'options'),$_smarty_tpl);?>
</h4>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-name"><?php echo iaSmartyPlugins::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<input type="text" id="input-name" name="title" size="32" value="<?php echo $_smarty_tpl->tpl_vars['questions']->value['title'];?>
">
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="body"><?php echo iaSmartyPlugins::lang(array('key'=>'question'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-8">
					<?php echo iaSmartyPlugins::ia_wysiwyg(array('name'=>"body",'value'=>$_smarty_tpl->tpl_vars['questions']->value['body']),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-date"><?php echo iaSmartyPlugins::lang(array('key'=>'date'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<div class="input-group">
						<input type="text" class="js-datepicker" name="date" id="input-date" value="<?php echo $_smarty_tpl->tpl_vars['questions']->value['date'];?>
">
						<span class="input-group-addon js-datepicker-toggle"><i class="i-calendar"></i></span>
					</div>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-status"><?php echo iaSmartyPlugins::lang(array('key'=>'status'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<select name="status" id="input-status">
						<option value="active"<?php if ($_smarty_tpl->tpl_vars['questions']->value['status']=='active') {?> selected="selected"<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'active'),$_smarty_tpl);?>
</option>
						<option value="inactive"<?php if ($_smarty_tpl->tpl_vars['questions']->value['status']=='inactive') {?> selected="selected"<?php }?>><?php echo iaSmartyPlugins::lang(array('key'=>'inactive'),$_smarty_tpl);?>
</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-actions inline">
			<input type="submit" name="save" class="btn btn-primary" value="<?php if (iaCore::ACTION_EDIT==$_smarty_tpl->tpl_vars['pageAction']->value) {?><?php echo iaSmartyPlugins::lang(array('key'=>'save_changes'),$_smarty_tpl);?>
<?php } else { ?><?php echo iaSmartyPlugins::lang(array('key'=>'add'),$_smarty_tpl);?>
<?php }?>">
			<?php echo $_smarty_tpl->getSubTemplate ('goto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
</form>

<?php echo iaSmartyPlugins::ia_add_media(array('files'=>'datepicker'),$_smarty_tpl);?>
<?php }} ?>
