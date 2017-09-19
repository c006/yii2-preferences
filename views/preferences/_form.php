<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model c006\preferences\models\Preferences */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preferences-form">

    <div class="item-container margin-top-30 margin-bottom-30">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'key')->textInput(['maxlength' => TRUE]) ?>

        <?= $form->field($model, 'value')->textInput(['maxlength' => TRUE]) ?>

        <?= $form->field($model, 'editable')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
