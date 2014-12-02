<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Player */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '球员', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-view">

    <p>
        <?= Html::a('新增球员', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('编辑', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这条数据？',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('返回', ['index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'image',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => (1 == $model->status) ? Html::tag('span', ' ', ['class' => 'label label-success glyphicon glyphicon-ok']) 
                                                 : Html::tag('span', ' ', ['class' => 'label label-danger glyphicon glyphicon-remove']),
            ],
            [
                'attribute' => 'created_at',
                'value' => date('Y-m-d H:i:s', $model->created_at),
            ],
            [
                'attribute' => 'updated_at',
                'value' => date('Y-m-d H:i:s', $model->updated_at),
            ],
        ],
    ]) ?>

</div>
