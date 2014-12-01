<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Season */

$this->title = '新增赛季';
$this->params['breadcrumbs'][] = ['label' => '赛季', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="season-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
