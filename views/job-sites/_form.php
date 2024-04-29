<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$formatter =  \Yii::$app->formatter;

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
            <div class="form-group field-jobsites-last_visited_on">
                <label class="control-label" for="jobsites-last_visited_on">Last Visited On</label>
                <input type="date" id="jobsites-last_visited_on" class="form-control"
                        name="JobSites[last_visited_on]" 
                        value="<?= $model->last_visited_on ?>">
                <div class="help-block"></div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group field-jobsites-resume_updated_on">
                <label class="control-label" for="jobsites-resume_updated_on">Resume Updated On</label>
                <input type="date" id="jobsites-resume_updated_on" class="form-control"
                        name="JobSites[resume_updated_on]" 
                        value="<?= $model->resume_updated_on ?>">
                <div class="help-block"></div>
            </div>
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
