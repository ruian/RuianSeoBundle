<?php foreach ($metas as $key => $content): ?>
<meta name="<?php echo $key ?>" content="<?php echo $content ?>" />
<?php endforeach ?>
<?php foreach ($metas_http_equiv as $key => $content): ?>
<meta http-equiv="<?php echo $key ?>" content="<?php echo $content ?>" />
<?php endforeach ?>
