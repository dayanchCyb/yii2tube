<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\video $model */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">


    <br>
    <br>

    <h1><?= Html::encode($this->title) ?></h1>
<div class="d-flex justify-content-center align-items-center">
        <div class="upload-icon">
            <i class="fa-solid fa-upload h1"></i>
        </div>
    <br>

        <p class="p-0">
            Drag and drop a file you want to upload
        </p>
        <p class="text-muted">Your video will be private until you publish it</p>
    <br>
    <?php \yii\bootstrap5\ActiveForm::begin()?>
        <button class="btn btn-primary btn-file">
            select file
            <input type="file" id="videoFile" name="video">
        </button>
    <?php \yii\bootstrap5\ActiveForm::end()?>
</div>


</div>
