<?php

use app\models\JobPostings;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JobPostingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Job Postings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-postings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Job Postings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'company_name',
            'company_url:url',
            'posting_title',
            'posting_id',
            //'posting_url:url',
            //'posting_location_city',
            //'posting_location_type',
            //'posting_comments:ntext',
            //'job_site_id',
            //'employment_type',
            //'pay_range',
            //'technology_stack',
            //'archive',
            //'applied_on',
            //'rejected_on',
            //'interviewed_on',
            //'created_on',
            //'updated_on',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JobPostings $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
