<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JobPostings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="job-postings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posting_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posting_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posting_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posting_location_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posting_location_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posting_comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'job_site_id')->textInput() ?>

    <?= $form->field($model, 'employment_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_range')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'technology_stack')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'archive')->textInput() ?>

    <?= $form->field($model, 'applied_on')->textInput() ?>

    <?= $form->field($model, 'rejected_on')->textInput() ?>

    <?= $form->field($model, 'interviewed_on')->textInput() ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <?= $form->field($model, 'updated_on')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
