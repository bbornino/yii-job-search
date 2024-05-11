<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\JobPostings $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Job Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="job-postings-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row mt-3">
        <div class="col">
            <strong>Company Name</strong><br>
            <?= $model->company_name ?>
        </div>
        <div class="col">
            <strong>Posting Title</strong><br>
            <?= $model->posting_title ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <strong>Pay Range</strong><br>
            <?= $model->pay_range ?>
        </div>
        <div class="col">
            <strong>Location City</strong><br>
            <?= $model->posting_location_city ?>
        </div>
        <div class="col">
            <strong>Location Type</strong><br>
            <?= $model->posting_location_type ?>
        </div>
        <div class="col">
            <strong>Employment Type</strong><br>
            <?= $model->employment_type ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <strong>Technology Stack</strong><br>
            <?= $model->technology_stack ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <strong>Posting Comments</strong><br>
            <?= $model->posting_comments ?>
        </div>
    </div>

    <!-- <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'company_name',
            'company_url:url',
            'posting_title',
            'posting_id',
            'posting_url:url',
            'posting_location_city',
            'posting_location_type',
            'posting_comments:ntext',
            'job_site_id',
            'employment_type',
            'pay_range',
            'technology_stack',
            'archive',
            'applied_on',
            'rejected_on',
            'interviewed_on',
            'created_on',
            'updated_on',
        ],
    ]) ?> -->

</div>
