<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:30:30
         compiled from "C:\WebServ\httpd\subrion\plugins\news\templates\front\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858556c3446b7f9d7-83003090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a575079afe71ffa889f53db56fab1f1eb4f5b08b' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\plugins\\news\\templates\\front\\index.tpl',
      1 => 1428983484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858556c3446b7f9d7-83003090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entry' => 0,
    'config' => 0,
    'news' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c3446effe69_99345907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c3446effe69_99345907')) {function content_556c3446effe69_99345907($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['entry']->value)) {?>
	<div class="media ia-item news-entry">
		<p class="ia-item-date"><?php echo iaSmartyPlugins::lang(array('key'=>'posted_on'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value['date'],$_smarty_tpl->tpl_vars['config']->value['date_format']);?>
 <?php echo iaSmartyPlugins::lang(array('key'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['fullname'];?>
</p>

		<?php if ($_smarty_tpl->tpl_vars['entry']->value['image']) {?>
			<div class="ia-item-image"><?php echo iaSmartyPlugins::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['entry']->value['image'],'fullimage'=>true,'title'=>$_smarty_tpl->tpl_vars['entry']->value['title']),$_smarty_tpl);?>
</div>
		<?php }?>

		<div class="ia-item-body"><?php echo $_smarty_tpl->tpl_vars['entry']->value['body'];?>
</div>

		<hr>
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_pinterest_pinit"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
		</div>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5170da8b1f667e6d"></script>
		<!-- AddThis Button END -->
	</div>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
		<div class="ia-items newsreel">
			<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
				<div class="media ia-item">
					<?php if ($_smarty_tpl->tpl_vars['entry']->value['image']) {?>
						<a href="<?php echo @constant('IA_URL');?>
news/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['entry']->value['alias'];?>
" class="pull-left ia-item-thumbnail"><?php echo iaSmartyPlugins::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['entry']->value['image'],'width'=>'150','title'=>$_smarty_tpl->tpl_vars['entry']->value['title'],'class'=>'media-object'),$_smarty_tpl);?>
</a>
					<?php }?>
					<div class="media-body">
						<h4 class="media-heading">
							<a href="<?php echo @constant('IA_URL');?>
news/<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['entry']->value['alias'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a>
						</h4>
						<p class="ia-item-date"><?php echo iaSmartyPlugins::lang(array('key'=>'posted_on'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value['date'],$_smarty_tpl->tpl_vars['config']->value['date_format']);?>
 <?php echo iaSmartyPlugins::lang(array('key'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value['fullname'];?>
</p>
						<div class="ia-item-body"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value['body']),$_smarty_tpl->tpl_vars['config']->value['news_max'],'...');?>
</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<?php echo iaSmartyPlugins::pagination(array('aTotal'=>$_smarty_tpl->tpl_vars['pagination']->value['total'],'aTemplate'=>$_smarty_tpl->tpl_vars['pagination']->value['url'],'aItemsPerPage'=>$_smarty_tpl->tpl_vars['pagination']->value['limit'],'aNumPageItems'=>5),$_smarty_tpl);?>

	<?php } else { ?>
		<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'no_news'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?><?php }} ?>
