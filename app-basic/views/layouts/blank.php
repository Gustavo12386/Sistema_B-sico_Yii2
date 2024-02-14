<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language?>">
<head>
    <meta charset="<?= Yii::$app->charset?>">
    <?= $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1'])?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody()?>

<div class="container">
  <?= $content; ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
