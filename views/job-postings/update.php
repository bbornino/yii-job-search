<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JobPostings $model */

$this->title = 'Update Job Postings: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Job Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-postings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
