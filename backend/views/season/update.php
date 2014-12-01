<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Season */

$this->title = '编辑赛季: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '赛季', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="season-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
