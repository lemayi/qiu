<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\League */

$this->title = '新增联赛';
$this->params['breadcrumbs'][] = ['label' => '联赛', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="league-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
