<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JobSites $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="job-sites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'review_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_alert_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <?= $form->field($model, 'resume_format')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stores_resume')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'github_field')->textInput() ?>

    <?= $form->field($model, 'project_site_field')->textInput() ?>

    <?= $form->field($model, 'last_visited_on')->textInput() ?>

    <?= $form->field($model, 'resume_updated_on')->textInput() ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <?= $form->field($model, 'updated_on')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
