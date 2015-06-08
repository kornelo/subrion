{if iaCore::ACTION_ADD == $pageAction}
	<form method="post" enctype="multipart/form-data" action="{$smarty.const.IA_SELF}" id="questions_and_answers" class="ia-form">
			{preventCsrf}

			<div class="fieldset-wrapper">
				{if !empty($member)}
				<p>Greetings {$member.fullname}</p>
				{else}
				<div class="control-group">
					<label class="control-label" for="name">{lang key='fullname'}:</label>
					<input type="text" name="name" id="name" class="text" value="{if isset($smarty.post.name)}{$smarty.post.name|escape:'html'}{/if}" >
				</div>

				<div class="control-group">
					<label class="control-label" for="email">{lang key='email'}:</label>
					<input type="text" name="email" id="email" class="text" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'html'}{/if}">
				</div>
				{/if}
				<div class="control-group">
					<label class="control-label" for="name">Title:</label>
					<input type="text" name="title" id="title" class="text span9" value="{if isset($smarty.post.title)}{$smarty.post.title|escape:'html'}{/if}" >
				</div>

				<div class="control-group">
					<label class="control-label" for="body">{lang key='question'}:</label>
					<textarea name="body" id="body" class="input-block-level" rows="5">{if isset($smarty.post.body)}{$smarty.post.body|escape:'html'}{/if}</textarea>
					{ia_add_js}
						jQuery(function($)
						{
							$('#body').dodosTextCounter({$config.questions_and_answers_max_len}, {
							counterDisplayElement: 'span',
							counterDisplayClass: 'textcounter_body'
						});

						$('.textcounter_body').addClass('textcounter').wrap('<p class="help-block text-right"></p>').before('{lang key='chars_left'} ');
						});
					{/ia_add_js}

					{ia_print_js files='jquery/plugins/jquery.textcounter'}
				</div>

				<div class="control-group">
					<label><input style="margin-bottom:6px;" class="common" type="checkbox" name="send_mail" value="1"/> {lang key='email_notification'}</label><br>
				</div>
				
				{include file='captcha.tpl'}
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Ask</button>
				</div>
			</div>
		</form>
{else}
	{if isset($topic)}
		<div class="media ia-item ia-item-bordered">
			<div class="pull-left">
				<div class="pull-left">
					{if $topic.avatar}
						{assign avatar $topic.avatar|unserialize}
						{if $avatar}
							{printImage imgfile=$avatar.path width=66 height=66 title=$oneitem.fullname|default:$oneitem.username class='media-object'}
						{/if}
					{else}
						<i class="avatar avatar-color-{$topic.avatar_color} avatar-md">{$topic.avatar_letter}</i>
					{/if}

				</div>
			</div>
			<div class="media-body">
				<div style="margin-bottom:15px;">
					<span style="color: rgb(144, 142, 142);font-size: 13px;font-style:italic;font-weight:bold;float:left">{$topic.name}</span><span style="color: rgb(144, 142, 142);font-size: 13px;font-style:italic;font-weight:bold;float:right">{$topic.date|date_format:$config.date_format}</span><br>
				</div>
				<div class="ia-item-body" style="min-height:129px;">{$topic.body}</div><br>

			</div>
		</div>

		<div>
			{if !empty($topic_answers)}
				{foreach $topic_answers as $answers}
					<div class="media ia-item" style="border:1px solid #FFF;padding:10px;">
						<div class="pull-left">
							<div class="pull-left">
								{if $answers.avatar}
									{assign avatar $answers.avatar|unserialize}
									{if $avatar}
										{printImage imgfile=$avatar.path width=66 height=66 title=$oneitem.fullname|default:$oneitem.username class='media-object'}
									{/if}
								{else}
									<i class="avatar avatar-color-{$answers.avatar_color} avatar-md">{$answers.avatar_letter}</i>
								{/if}

							</div>
						</div>
						<div class="media-body">
							<div style="margin-bottom:15px;">
								<span style="color: rgb(144, 142, 142);font-size: 13px;font-style:italic;font-weight:bold;float:left">{$answers.member}</span><span style="color: rgb(144, 142, 142);font-size: 13px;font-style:italic;font-weight:bold;float:right">{$answers.date|date_format:$config.date_format}</span><br>
							</div>
							<div class="ia-item-body" style="min-height:40px;">{$answers.body}</div><br>
							{if $member.id == $answers.member_id}
								<span class="pull-right"><a href="{$smarty.const.IA_SELF}/?del=true&post_id={$answers.id}">Delete</a></span>
							{/if}
						</div>
						<hr>
					</div>
				{/foreach}
			{else}
				<p align="center">{lang key='be_first'}</p>
				<hr>
			{/if}
		</div>
		<br>
		{if $authorized_member}
			{if $member}
				<form method="post" enctype="multipart/form-data" action="{$smarty.const.IA_SELF}" id="questions_and_answers" class="ia-form">
			{preventCsrf}
				
			<div class="fieldset-wrapper">
				{if !empty($member)}

				{else}
					<div class="control-group">
						<label class="control-label" for="intopic_name">{lang key='fullname'}:</label>
						<input type="text" name="intopic_name" class="text" value="{if isset($smarty.post.intopic_name)}{$smarty.post.intopic_name|escape:'html'}{/if}" >
					</div>

					<div class="control-group">
						<label class="control-label" for="intopic_email">{lang key='email'}:</label>
						<input type="text" name="intopic_email" class="text" value="{if isset($smarty.post.intopic_email)}{$smarty.post.intopic_email|escape:'html'}{/if}">
					</div>
				{/if}
				<input type="hidden" name="intopic_form" value="intopic_form">
				<div class="control-group">
					<label class="control-label" for="intopic_body">{lang key='your_answer'}:</label>
					<textarea name="intopic_body" class="input-block-level" rows="5">{if isset($smarty.post.intopic_body)}{$smarty.post.intopic_body|escape:'html'}{/if}</textarea>
					{ia_add_js}
						jQuery(function($)
						{
						$('#body').dodosTextCounter({$config.questions_and_answers_max_len}, {
						counterDisplayElement: 'span',
						counterDisplayClass: 'textcounter_body'
						});

						$('.textcounter_body').addClass('textcounter').wrap('<p class="help-block text-right"></p>').before('{lang key='chars_left'} ');
						});
					{/ia_add_js}

					{ia_print_js files='jquery/plugins/jquery.textcounter'}
				</div>

				{include file='captcha.tpl'}
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Answer</button>
				</div>
			</div>
		</form>
			{else}
				<p align="center">Please login first</p>
			{/if}
		{else}
		<form method="post" enctype="multipart/form-data" action="{$smarty.const.IA_SELF}" id="questions_and_answers" class="ia-form">
			{preventCsrf}
				
			<div class="fieldset-wrapper">
				{if !empty($member)}

				{else}
					<div class="control-group">
						<label class="control-label" for="intopic_name">{lang key='fullname'}:</label>
						<input type="text" name="intopic_name" class="text" value="{if isset($smarty.post.intopic_name)}{$smarty.post.intopic_name|escape:'html'}{/if}" >
					</div>

					<div class="control-group">
						<label class="control-label" for="intopic_email">{lang key='email'}:</label>
						<input type="text" name="intopic_email" class="text" value="{if isset($smarty.post.intopic_email)}{$smarty.post.intopic_email|escape:'html'}{/if}">
					</div>
				{/if}
				<input type="hidden" name="intopic_form" value="intopic_form">
				<div class="control-group">
					<label class="control-label" for="intopic_body">{lang key='your_answer'}:</label>
					<textarea name="intopic_body" class="input-block-level" rows="5">{if isset($smarty.post.intopic_body)}{$smarty.post.intopic_body|escape:'html'}{/if}</textarea>
					{ia_add_js}
						jQuery(function($)
						{
						$('#body').dodosTextCounter({$config.questions_and_answers_max_len}, {
						counterDisplayElement: 'span',
						counterDisplayClass: 'textcounter_body'
						});

						$('.textcounter_body').addClass('textcounter').wrap('<p class="help-block text-right"></p>').before('{lang key='chars_left'} ');
						});
					{/ia_add_js}

					{ia_print_js files='jquery/plugins/jquery.textcounter'}
				</div>

				{include file='captcha.tpl'}
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Answer</button>
				</div>
			</div>
		</form>
		{/if}
	{elseif $topics}
		<div class="slogan">{lang key='any_question'} <a href="questions_and_answers/add">Ask here</a></div>
		<div class="ia-items">
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>Questions</th>
						<th><center>Answers</center></th>
						<th><center>Views</center></th>
					</tr>
				</thead>
				{foreach $topics as $topic}
					<tr>
						<td>
							&nbsp;<a href='{$smarty.const.IA_URL}questions_and_answers/{$topic.id}-{$topic.alias}'>{$topic.title}</a></div>
						</td>
						<td><center>{if isset($topic.answers_count)}{$topic.answers_count}{else}0{/if}</center></td>
						<td class="pull-center"><center>{$topic.view_num}</center></td>
					</tr>
				{/foreach}
			</table>

		</div>
		
	{else}
			<div class="slogan">{lang key='any_question'} <a href="questions_and_answers/add">Ask here</a></div>
	{/if}
{ia_print_css files='_IA_URL_plugins/questions_and_answers/templates/front/css/css-avatars'}
{ia_print_css files='_IA_URL_plugins/questions_and_answers/templates/front/css/css-avatars.min.css'}
{/if}