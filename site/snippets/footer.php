<?php foreach ($pages->invisible() as $page): ?>
	<?php if ($page->title() != "Error" && $page->title() != "Home" && $page->title() != "sitemap"): ?>
		<div class="c"><a href="<?php echo $page->url() ?>"><h2><?php echo $page->title ?></h2></a>
		</div>
	<?php endif?>
<?php endforeach; ?>
