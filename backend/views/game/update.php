<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Game */

$this->title = '编辑比赛: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '比赛', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="game-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
