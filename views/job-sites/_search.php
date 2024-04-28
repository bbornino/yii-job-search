<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JobSiteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="job-sites-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'review_text') ?>

    <?= $form->field($model, 'email_alert_info') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'resume_format') ?>

    <?php // echo $form->field($model, 'stores_resume') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'github_field') ?>

    <?php // echo $form->field($model, 'project_site_field') ?>

    <?php // echo $form->field($model, 'last_visited_on') ?>

    <?php // echo $form->field($model, 'resume_updated_on') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <?php // echo $form->field($model, 'updated_on') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
