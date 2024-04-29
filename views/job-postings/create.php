<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JobPostings $model */

$this->title = 'Create Job Postings';
$this->params['breadcrumbs'][] = ['label' => 'Job Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-postings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
