<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JobPostingSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="job-postings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'company_url') ?>

    <?= $form->field($model, 'posting_title') ?>

    <?= $form->field($model, 'posting_id') ?>

    <?php // echo $form->field($model, 'posting_url') ?>

    <?php // echo $form->field($model, 'posting_location_city') ?>

    <?php // echo $form->field($model, 'posting_location_type') ?>

    <?php // echo $form->field($model, 'posting_comments') ?>

    <?php // echo $form->field($model, 'job_site_id') ?>

    <?php // echo $form->field($model, 'employment_type') ?>

    <?php // echo $form->field($model, 'pay_range') ?>

    <?php // echo $form->field($model, 'technology_stack') ?>

    <?php // echo $form->field($model, 'archive') ?>

    <?php // echo $form->field($model, 'applied_on') ?>

    <?php // echo $form->field($model, 'rejected_on') ?>

    <?php // echo $form->field($model, 'interviewed_on') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <?php // echo $form->field($model, 'updated_on') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
