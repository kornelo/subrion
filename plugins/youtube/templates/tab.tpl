{if isset($item.youtube_video) && $item.youtube_video && isset($youtube_video)}
	{capture append='tabs_content' name='youtube_video'}
		<div id="youtube_video" class="ia-wrap text-center">
			<object width="425" height="355">
				<param name="movie" value="http://www.youtube.com/v/{$youtube_video}&rel=1"></param>
				<param name="wmode" value="transparent"></param>
				<embed src="http://www.youtube.com/v/{$youtube_video}&rel=1" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed>
			</object>
		</div>
	{/capture}
{/if}