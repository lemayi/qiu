<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Player */

$this->title = '编辑球员: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '球员', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="player-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
