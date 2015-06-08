<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:30:22
         compiled from "C:\WebServ\httpd\subrion\plugins\guestbook\templates\front\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23540556c343e768f26-33564722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec73e74f4c471ba3bc79bd81f1f45d4a67fa0c78' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\plugins\\guestbook\\templates\\front\\index.tpl',
      1 => 1416734774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23540556c343e768f26-33564722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'guestbook' => 0,
    'config' => 0,
    'message' => 0,
    'sess_id' => 0,
    'total_messages' => 0,
    'aTemplate' => 0,
    'member' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c343ec338c5_36128568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c343ec338c5_36128568')) {function content_556c343ec338c5_36128568($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['guestbook']->value) {?>
	<div class="ia-items">
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['guestbook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
			<div class="media ia-item ia-item-bordered">
				<div class="media-body">
					<div class="description">
						<?php if (!$_smarty_tpl->tpl_vars['config']->value['html_guestbook']&&$_smarty_tpl->tpl_vars['config']->value['gb_auto_approval']) {?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['body'], ENT_QUOTES, 'UTF-8', true);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['message']->value['body'];?>

						<?php }?>
					</div>
				</div>
				<div class="ia-item-panel">
					<span class="pull-right">
						<i class="icon-user"></i>
						<?php if (!$_smarty_tpl->tpl_vars['message']->value['member_id']) {?>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['author_url'], ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						<?php } else { ?>
							<?php echo iaSmartyPlugins::ia_url(array('type'=>'link','item'=>'members','data'=>$_smarty_tpl->tpl_vars['message']->value,'text'=>$_smarty_tpl->tpl_vars['message']->value['author']),$_smarty_tpl);?>

						<?php }?>

						&nbsp; <i class="icon-calendar"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['message']->value['date'],$_smarty_tpl->tpl_vars['config']->value['date_format']);?>


						<?php if (iaCore::STATUS_INACTIVE==$_smarty_tpl->tpl_vars['message']->value['status']&&($_smarty_tpl->tpl_vars['message']->value['sess_id']==$_smarty_tpl->tpl_vars['sess_id']->value)) {?><span><?php echo iaSmartyPlugins::lang(array('key'=>'message_approval'),$_smarty_tpl);?>
</span><?php }?>
					<span>
				</div>
			</div>
		<?php } ?>
	</div>
<?php } else { ?>
	<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'no_guestbook_messages'),$_smarty_tpl);?>
</div>
<?php }?>

<?php echo iaSmartyPlugins::pagination(array('aTotal'=>$_smarty_tpl->tpl_vars['total_messages']->value,'aTemplate'=>$_smarty_tpl->tpl_vars['aTemplate']->value,'aItemsPerPage'=>$_smarty_tpl->tpl_vars['config']->value['gb_messages_per_page'],'aNumPageItems'=>5,'aTruncateParam'=>"guestbook/%page%"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['config']->value['gb_account_submissions_only']||$_smarty_tpl->tpl_vars['member']->value) {?>
	<form action="" method="post" id="guestbook" class="ia-form ia-form-bordered">
		<?php echo iaSmartyPlugins::preventCsrf(array(),$_smarty_tpl);?>

		<div class="fieldset">
			<h4 class="title"><?php echo iaSmartyPlugins::lang(array('key'=>'add_message'),$_smarty_tpl);?>
</h4>

			<div class="fieldset-wrapper content">
				<?php if ($_smarty_tpl->tpl_vars['member']->value) {?>
					<input type="hidden" name="author" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
">
					<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
">
					<input type="hidden" name="aurl" value="">
				<?php } else { ?>
					<div class="control-group">
						<label class="control-label" for="message-author"><?php echo iaSmartyPlugins::lang(array('key'=>'message_author'),$_smarty_tpl);?>
:</label>
						<input type="text" id="message-author" name="author" value="<?php if (isset($_POST['author'])) {?><?php echo htmlspecialchars($_POST['author'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
					</div>
					<div class="control-group">
						<label class="control-label" for="author-email"><?php echo iaSmartyPlugins::lang(array('key'=>'author_email'),$_smarty_tpl);?>
:</label>
						<input type="text" id="author-email" class="text" name="email" value="<?php if (isset($_POST['email'])) {?><?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
					</div>
					<div class="control-group">
						<label class="control-label" for="author-url"><?php echo iaSmartyPlugins::lang(array('key'=>'author_url'),$_smarty_tpl);?>
:</label>
						<input type="text" id="author-url" class="text" name="aurl" value="<?php if (isset($_POST['aurl'])) {?><?php echo htmlspecialchars($_POST['aurl'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>http://<?php }?>">
					</div>
				<?php }?>

				<div class="control-group">
					<?php if (!$_smarty_tpl->tpl_vars['member']->value) {?>
						<label class="control-label" for="guestbook_form"><?php echo iaSmartyPlugins::lang(array('key'=>'msg'),$_smarty_tpl);?>
:</label>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['config']->value['html_guestbook']) {?>
						<?php echo iaSmartyPlugins::ia_wysiwyg(array('value'=>$_smarty_tpl->tpl_vars['body']->value,'name'=>'message'),$_smarty_tpl);?>

					<?php } else { ?>
						<textarea name="message" class="input-block-level" rows="8" id="guestbook_form"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea>
						<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'jquery/plugins/jquery.textcounter'),$_smarty_tpl);?>

					<?php }?>
				</div>

				<?php echo $_smarty_tpl->getSubTemplate ('captcha.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


				<input type="hidden" name="action" value="add">
			</div>

			<div class="form-actions">
				<input type="submit" id="add_message" name="add_message" value="<?php echo iaSmartyPlugins::lang(array('key'=>'leave_message'),$_smarty_tpl);?>
" class="btn btn-primary">
			</div>
		</div>
	</form>
<?php }?>

<?php echo iaSmartyPlugins::ia_print_js(array('files'=>'ckeditor/ckeditor, _IA_URL_plugins/guestbook/js/front/index'),$_smarty_tpl);?>
<?php }} ?>
