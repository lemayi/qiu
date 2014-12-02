<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Game */

$this->title = '新增比赛';
$this->params['breadcrumbs'][] = ['label' => '比赛', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
