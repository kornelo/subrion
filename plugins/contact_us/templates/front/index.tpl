<div class="slogan">
	{lang key='contact_top_text'}
</div>

<form action="{$smarty.const.IA_URL}contacts/" method="post" id="contact" class="ia-form">
	{preventCsrf}

	<div class="control-group">
		<label class="control-label" for="name">{lang key='fullname'}: <span class="required">*</span></label>
		<div class="controls">
			<input type="text" name="name" id="contact-name" value="{if isset($smarty.post.name)}{$smarty.post.name}{/if}">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="email">{lang key='email'}: <span class="required">*</span></label>
		<div class="controls">
			<input type="text" name="email" id="contact-email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="phone">{lang key='phone'}:</label>
		<div class="controls">
			<input type="text" name="phone" id="contact-phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{/if}">
		</div>
	</div>

	{if !empty($subjects)}
		<div class="control-group">
			<label class="control-label" for="subject">{lang key='subject'}:</label>
			<div class="controls">
				<select name="subject" id="contact-subject">
					<option>{lang key='_select_'}</option>
					{foreach $subjects as $subject}
						<option value="{lang key=$subject default=$subject}">{lang key=$subject default=$subject}</option>
					{/foreach}
				</select>
			</div>
		</div>
	{/if}

	<div class="control-group">
		<label class="control-label" for="msg">{lang key='contact_reason'}: <span class="required">*</span></label>
		<div class="controls">
			<textarea class="input-block-level" id="msg" name="msg" rows="5">{if isset($smarty.post.msg)}{$smarty.post.msg}{/if}</textarea>
			{ia_add_js}
$(function()
{
	$('#msg').dodosTextCounter('500', { counterDisplayElement: 'span', counterDisplayClass: 'textcounter_msg' });
	$('.textcounter_msg').addClass('textcounter').wrap('<p class="help-block text-right"></p>').before('{lang key='chars_left'} ');
});
			{/ia_add_js}
			{ia_print_js files='jquery/plugins/jquery.textcounter'}
		</div>
	</div>
	
	{include file='captcha.tpl'}

	<div class="form-actions">
		<input type="submit" class="btn btn-primary" value="{lang key='send'}">
	</div>
</form>