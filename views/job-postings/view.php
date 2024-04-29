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

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
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
    ]) ?>

</div>
