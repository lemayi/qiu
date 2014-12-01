<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\League */

$this->title = '编辑联赛: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '联赛', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="league-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
