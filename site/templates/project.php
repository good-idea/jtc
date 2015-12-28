<?php snippet('head')?>

<body id="project">
<div class="c">
<?php echo kirbytext($page->parent()->title()); ?>

<div class="c"><span class="title"><?php if ( strlen($page->longtitle()) > 1 ) { echo kirbytext($page->longtitle()); } else { echo kirbytext($page->title()); }; ?></span>
	<?php if (null !== $page->date()) { echo kirbytext($page->projectdate()); } ?>

	<p><?php echo kirbytext($page->text()) ?></p>

	<?php if ($page->hasFiles() == TRUE): ?>
		<?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>
			<img src="<?= $image->url() ?>">
			<?php if (strlen($image->caption()) > 2): ?>
			<p class="caption"><?= $image->caption() ?></p>
			<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>
</div>
</div>
</body>