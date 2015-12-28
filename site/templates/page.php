<?php snippet('head')?>
<body id="<?= $page->template() ?>">
	<div class="c"><h2><?php echo $page->title() ?></h2>
		<?php if ($page->hasImages() == TRUE): ?>
			<?php foreach ($page->images() as $image): ?>
				<img src="<?php echo $image->url() ?>">
			<?php endforeach ?>
		<?php endif ?>
		<div class="c">
		<p><?php echo kirbytext($page->text()) ?></p>
		</div>
	</div>
</body>