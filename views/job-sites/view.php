<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
$formatter =  \Yii::$app->formatter;

/** @var yii\web\View $this */
/** @var app\models\JobSites $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Job Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="job-sites-view">

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

    <div class="row mt-3">
        <div class="col">
            <strong>URL</strong>
            <?= $model->url ?>
        </div>
        <div class="col">
            <strong>Rating</strong>
            <?= $model->rating ?>
        </div>
        <div class="col">
            <strong>Last Visited</strong>
            <?= $formatter->asDate($model->last_visited_on, 'medium') ?>
        </div>
        <div class="col">
            <strong>Resume Last Updated</strong>
            <?= $formatter->asDate($model->resume_updated_on, 'medium') ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <strong>Review Headline</strong>
            <?= $model->review_text ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <strong>Review Details</strong>
            <?= $model->description ?>
        </div>
    </div>



</div>
