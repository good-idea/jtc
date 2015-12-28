<?php snippet('head')?>
<body id="<?= $page->template() ?>">

<div id="main">
<?php foreach ($pages->visible() as $page): ?>
	<?php if ($page->children()->count() == 0): ?>
		<div class="c"><h2 style="text-decoration:line-through"><?php echo kirbytext($page->title()) ?></h2></div>
	<?php else: ?>
	<div class="c"><h2><?php echo kirbytext($page->title()) ?></h2>
	<?php foreach ($page->children()->visible() as $child): ?>
		<div class="c">
			<a href="<?php echo $child->url() ?>"><h2 class="title"><?php echo $child->title() ?></a></h2>
		</div>
	<?php endforeach; ?>
	<?php endif ?>
	</div>

<?php endforeach; ?>
<div id="footer">
	<?php foreach ($pages->invisible() as $page): ?>
		<?php if ($page->title() != "Error" && $page->title() != "Home" && $page->title() != "sitemap"): ?>
			<div class="c"><a href="<?php echo $page->url() ?>"><h2><?php echo $page->title() ?></h2></a>
			</div>
		<?php endif?>
	<?php endforeach; ?>
	<div id= "globe" class="c">
		<h2 class="globeButton">&#9680;</h2>
		<div class="globe">
			<script type="text/javascript" src="http://jk.revolvermaps.com/2/1.js?i=ak3ddcuuskt&amp;s=250&amp;m=0&amp;v=true&amp;r=false&amp;b=000000&amp;n=false&amp;c=ff0000" async="async"></script>
		</div>
	</div>

	<script>
		$( ".globeButton" ).click(function() {
			$( ".globe" ).toggle(50);
		});
	</script>
	

</body>
