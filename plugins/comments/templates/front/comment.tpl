<div class="media ia-item ia-item-bordered">
	<div class="media-body">
		<div class="description">{$comment.body}</div>	
	</div>
	<div class="ia-item-panel">
		<div class="pull-right">
			{if $comment.author_avatar}
				{assign var='author_avatar' value=$comment.author_avatar|unserialize}
				{if $author_avatar}
					{printImage imgfile=$author_avatar.path width=40 height=40 title=$comment.author}
				{else}
					<img src="{$img}no-avatar.png" alt="{$comment.author}" width="40" height="40">
				{/if}
			{else}
				<img src="{$img}no-avatar.png" alt="{$comment.author}" width="40" height="40">
			{/if}
		</div>
		{lang key='by'}
		{if  0 == $comment.member_id}
			<a href="{$comment.url|escape:'html'}" rel="nofollow">{$comment.author|escape:"html"}</a>
		{else}
			{ia_url type="link" data=$comment item='members' text=$comment.author}
		{/if}
		<br>
		{lang key='on'}
		{$comment.date|date_format:$config.date_format}
	</div>
</div>