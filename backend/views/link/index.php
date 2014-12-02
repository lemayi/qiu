<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '帖子';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-index">

    <p>
        <?= Html::a('新增帖子', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'title',
            [
                'attribute' => 'type_id',
                'format' => 'html',
                'value'=>function ($model) {
                            if(1 == $model->type_id){
                                return Html::tag('span', '链接', ['class' => 'label label-success glyphicon']);
                            }
                            if(2 == $model->type_id){
                                return Html::tag('span', '文字', ['class' => 'label label-danger glyphicon']);
                            }
                            if(3 == $model->type_id){
                                return Html::tag('span', '图片', ['class' => 'label label-danger glyphicon']);
                            }
                        },
                'filter'=> ['1' => '链接', '2' => '文字', '3' => '图片'],
            ],
            [
                'attribute' => 'status',
                'format' => 'html',
                'value'=>function ($model) {
                            if(1 == $model->status){
                                return Html::tag('span', ' ', ['class' => 'label label-success glyphicon glyphicon-ok']);
                                // return '<span class="glyphicon glyphicon-ok"></span>';
                            }else if(2 == $model->status){
                                return Html::tag('span', ' ', ['class' => 'label label-danger glyphicon glyphicon-remove']);
                            }
                        },
                'filter'=> ['1' => '启用', '2' => '禁用'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['width' => '7%'],
            ],
        ],
    ]); ?>

</div>
