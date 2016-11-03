<section>
{foreach from=$resultabout item=aboutitem}
		<article>
		<div class="aboutDiv">
		<h1 class="pageTitle">{$aboutitem.titel}</h1><br>
		<img src="images/{$aboutitem.image}"  class="aboutimage"  alt=""><br></a>
		<p>{$aboutitem.intro}</p>
		<h2 class="centeredh2">{$aboutitem.head1}</h2>
		<p>{$aboutitem.paragraph1}</p>
		<h2 class="centeredh2">{$aboutitem.head2}</h2>
		<p>{$aboutitem.paragraph2}</p>
		</div>
		</article>
	{/foreach}
<div id="video">
	<iframe width="350" src="https://www.youtube.com/embed/BGtROJeMPeE" frameborder="0" allowfullscreen></iframe>
	</div>
</section>
<style>
	#video {
		text-align: center;
	}
</style>