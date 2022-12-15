<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;

$this->title = 'My Yii Application';
?>
<br>
<br>
<br>
<?php
echo Nav::widget([
        'options' => [
                'class' => 'd-flex flex-column nav-pills '
],
   'items' => [
        [
            'label' => 'Dashboard',
            'url' => ['/site/index'],
        ],
       [
            'label' => 'Videos',
            'url' => '/video/index'
       ]
       ]
 ]);
?>

