<div class="slider">
  <div class="slide-content">
    <ul class="slides">
		{foreach $slider_banner as $banner}
		<li data-step="{$banner@iteration}" class="active">
			<!--<div class="animation-text">
				<span></span>{$banner.title|strip_tags}
			</div>-->
			<a href="res/images/{$banner.file}" class="fancy"><img src="res/images/{$banner.file}" alt="{$banner.title|strip_tags}"></a>
		</li>
	  	{/foreach}
    </ul>
    <a class="fancy_trigger">click to view slideshow</a>
  </div>
  {if $setting_data.show_slider_arrows == 1}
  <button class="btn btn-link btn-slider-prev" disabled="">
  	<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link playbtn">
  	<span class="glyphicon glyphicon glyphicon-play" style="font-size:20px" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link btn-slider-next">
  	<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
  </button>
  {/if}
</div>

