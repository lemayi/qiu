<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\League */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="league-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatusList()) ?>

    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'seo_keyword')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'seo_desc')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '编辑', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
