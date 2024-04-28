<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JobSites $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="job-sites-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-5">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-5">
            <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-2">
            <?= $form->field($model, 'rating')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <!-- <?= $form->field($model, 'resume_format')->textInput(['maxlength' => true]) ?> -->
            <?= $form->field($model, 'resume_format')->dropDownList(['Builder Only' => 'Builder Only', 
                                                    'PDF Only' => 'PDF Only', 'Both' => 'Both']) ?>
        </div>
        <div class="col-2">
            <?= $form->field($model, 'github_field')->radioList(['1' => 'Yes', '0' => 'No']) ?>
        </div>
        <div class="col-2">
            <?= $form->field($model, 'project_site_field')->radioList(['1' => 'Yes', '0' => 'No']) ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'last_visited_on')->textInput() ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'resume_updated_on')->textInput() ?>
        </div>
    </div>




    <?= $form->field($model, 'review_text')->textInput(['maxlength' => true]) ?>

    

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


    <!-- <?= $form->field($model, 'email_alert_info')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'stores_resume')->textInput() ?>
    <?= $form->field($model, 'created_on')->textInput() ?>
    <?= $form->field($model, 'updated_on')->textInput() ?>
    <?= $form->field($model, 'active')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
