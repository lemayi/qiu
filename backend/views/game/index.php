<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '比赛';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-index">

    <p>
        <?= Html::a('新增比赛', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'league_id',
            'home_team',
            'visit_team',
            'time',
            
            [
                'attribute' => 'status',
                'format' => 'html',
                'value'=>function ($model) {
                            switch ($model->status) {
                                case '1':
                                    return Html::tag('span', '未开始', ['class' => 'label label-success glyphicon']);
                                    break;
                                case '2':
                                    return Html::tag('span', '进行中', ['class' => 'label label-success glyphicon']);
                                    break;
                                case '3':
                                    return Html::tag('span', '已结束', ['class' => 'label label-success glyphicon']);
                                    break;
                                case '4':
                                    return Html::tag('span', '延期', ['class' => 'label label-success glyphicon']);
                                    break;
                                case '5':
                                    return Html::tag('span', '中断', ['class' => 'label label-success glyphicon']);
                                    break;
                                default:
                                    return '';
                                    break;
                            }
                        },
                'filter'=> ['1' => '未开始', '2' => '进行中', '3' => '已结束', '4' => '延期', '5' => '中断'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['width' => '7%'],
            ],
        ],
    ]); ?>

</div>
