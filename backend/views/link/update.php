<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Link */

$this->title = '编辑帖子: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '帖子', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="link-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
