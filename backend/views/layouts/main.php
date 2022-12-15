<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Button;
use yii\bootstrap5\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="container-xl">
    <div class="wrap h-100 d-flex flex-column">
        <?php echo $this->render('_header') ?>
        <main class="d-flex">
            <?php echo $this->render('_sidebar') ?>

            <div class="content-wrapper p-3">
                <?= Alert::widget() ?>
                <?= $content ?>

            </div>
        </main>

    </div>

</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
