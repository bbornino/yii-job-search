<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JobPostings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="job-postings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_site_id')->textInput() ?>

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6">
            <?= $form->field($model, 'company_url')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-sm-12 col-md-6">
            <?= $form->field($model, 'posting_title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12 col-md-6">
            <?= $form->field($model, 'posting_url')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-sm-12 col-md-6">
            <?= $form->field($model, 'posting_location_city')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6 col-md-3">
            <?= $form->field($model, 'posting_location_type')->dropDownList(['On-Site' => 'On-Site', 
                                                    'Hybrid' => 'Hybrid', 'Remote' => 'Remote']) ?>
        </div>
        <div class="col-sm-6 col-md-3">
            <?= $form->field($model, 'employment_type')->dropDownList(['Full-time' => 'Full-time', 
                                                    'Freelance' => 'Freelance', 'Contract' => 'Contract']) ?>
        </div>
        <!-- <?= $form->field($model, 'posting_id')->textInput(['maxlength' => true]) ?> -->
        <!-- <?= $form->field($model, 'archive')->textInput() ?> -->
    </div>

    <div class="row pt-3">
        <div class="col-sm-6 col-md-3">
            <?= $form->field($model, 'pay_range')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6 col-md-3">
            <?= $form->field($model, 'applied_on')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6 col-md-3">
            <?= $form->field($model, 'rejected_on')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6 col-md-3">
            <?= $form->field($model, 'interviewed_on')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col">
            <?= $form->field($model, 'technology_stack')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col">
        <?= $form->field($model, 'posting_comments')->textarea(['rows' => 12]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
