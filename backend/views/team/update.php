<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Team */

$this->title = '编辑球队: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '球队', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="team-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
