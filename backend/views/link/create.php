<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Link */

$this->title = '新增帖子';
$this->params['breadcrumbs'][] = ['label' => '帖子', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
