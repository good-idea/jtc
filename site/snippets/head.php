<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title><?php echo $site->title()?></title>
  <?php if ($page->title() == 'Home'): ?>
  	  <meta name="description" content="<?php echo html($site->description()) . ' - Projects'; foreach ($pages->visible() as $page) {echo ", ";} ?>"/>
  <?php else: ?>
  	  <meta name="description" content="<?php echo html($site->description()) . ' - ' . html($page->title()) . ' - ' . html($page->text()) ?>"/>
  <?php endif ?>
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=3" />
  <?php echo css('assets/css/site.css') ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-57066515-1', 'auto');  ga('send', 'pageview');</script>
</head>
