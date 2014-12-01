<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Game */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="game-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'league_id')->textInput() ?>

    <?= $form->field($model, 'home_team')->textInput() ?>

    <?= $form->field($model, 'visit_team')->textInput() ?>

    <?= $form->field($model, 'time')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
