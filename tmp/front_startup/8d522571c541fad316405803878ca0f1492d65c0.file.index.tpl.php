<?php /* Smarty version Smarty-3.1.19, created on 2015-06-01 06:30:14
         compiled from "C:\WebServ\httpd\subrion\plugins\portfolio\templates\front\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20431556c34366e3447-91147621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d522571c541fad316405803878ca0f1492d65c0' => 
    array (
      0 => 'C:\\WebServ\\httpd\\subrion\\plugins\\portfolio\\templates\\front\\index.tpl',
      1 => 1426829248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20431556c34366e3447-91147621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'portfolio_entry' => 0,
    'config' => 0,
    'portfolio_entries' => 0,
    'pf_entry' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_556c34369d90a7_26528495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c34369d90a7_26528495')) {function content_556c34369d90a7_26528495($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/WebServ/httpd/subrion/includes/smarty/plugins\\modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['portfolio_entry']->value)) {?>
	<div class="media ia-item portfolio-entry">
		<p class="ia-item-date"><?php echo iaSmartyPlugins::lang(array('key'=>'posted_on'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['portfolio_entry']->value['date_added'],$_smarty_tpl->tpl_vars['config']->value['date_format']);?>
</p>

		<?php if ($_smarty_tpl->tpl_vars['portfolio_entry']->value['image']) {?>
			<div class="ia-item-image"><?php echo iaSmartyPlugins::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['portfolio_entry']->value['image'],'fullimage'=>true,'title'=>$_smarty_tpl->tpl_vars['portfolio_entry']->value['title']),$_smarty_tpl);?>
</div>
		<?php }?>

		<div class="ia-item-body"><?php echo $_smarty_tpl->tpl_vars['portfolio_entry']->value['body'];?>
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
	<?php if ($_smarty_tpl->tpl_vars['portfolio_entries']->value) {?>
		<div class="pf">
			<div class="row-fluid">
				<?php  $_smarty_tpl->tpl_vars['pf_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pf_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolio_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pf_entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['pf_entry']->key => $_smarty_tpl->tpl_vars['pf_entry']->value) {
$_smarty_tpl->tpl_vars['pf_entry']->_loop = true;
 $_smarty_tpl->tpl_vars['pf_entry']->iteration++;
?>
					<div class="span3">
						<div class="pf__item">
							<?php if ($_smarty_tpl->tpl_vars['pf_entry']->value['image']) {?>
								<a href="<?php echo @constant('IA_URL');?>
portfolio/<?php echo $_smarty_tpl->tpl_vars['pf_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['pf_entry']->value['alias'];?>
" class="pf__item__image"><?php echo iaSmartyPlugins::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['pf_entry']->value['image'],'title'=>$_smarty_tpl->tpl_vars['pf_entry']->value['title']),$_smarty_tpl);?>
</a>
							<?php }?>
						</div>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['pf_entry']->iteration%4==0) {?>
						</div>
						<div class="row-fluid">
					<?php }?>
				<?php } ?>
			</div>
		</div>

		<?php echo iaSmartyPlugins::pagination(array('aTotal'=>$_smarty_tpl->tpl_vars['pagination']->value['total'],'aTemplate'=>$_smarty_tpl->tpl_vars['pagination']->value['template'],'aItemsPerPage'=>$_smarty_tpl->tpl_vars['config']->value['portfolio_entries_per_page'],'aNumPageItems'=>5),$_smarty_tpl);?>

	<?php } else { ?>
		<div class="alert alert-info"><?php echo iaSmartyPlugins::lang(array('key'=>'pf_no_entries'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?><?php }} ?>
