<H1 class="pageTitle"> Home </H1>
<section id="artikelsSection">
	
	<article>
		{foreach from=$result item=oneItem}
		
		
		<div class="plaatjeDiv">
		<h1>{$oneItem.title}</h1>
		<img src='images/{$oneItem.image}' class="artikelImage">
			</div>
		<br>
		<content class="artikelContent">{$oneItem.content}</content>
		<!--		|truncate:30-->
		<br>
		<p>{$oneItem.date_created|date_format:" %e. %B. %Y" }</p>
		{/foreach}
		
	</article>
</section>

    <section style="text-align: center">    
            <ul class="pagination">
				{for $foo=1 to $total_number_newsarticles}
                   <li><a href="index.php?action=home&page_number={$foo}">{$foo}</a></li>
               {/for}
            </ul>
    </section>

<!--
              <li><a href="#">«</a></li>
              <li><a href="?action=home&page_number=1">1</a></li>
              <li><a class="active" href="?action=home&page_number=2">2</a></li>
              <li><a href="?action=home&page_number=1">3</a></li>
              <li><a href="#">»</a></li>
-->