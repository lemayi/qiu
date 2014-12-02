<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Player */

$this->title = '新增球员';
$this->params['breadcrumbs'][] = ['label' => '球员', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
