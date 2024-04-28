<?php

use app\models\JobSites;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JobSiteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Job Sites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-sites-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Job Sites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'url:url',
            'rating',
            'review_text',
            'last_visited_on',
            //'description:ntext',
            //'rating',
            //'resume_format',
            //'stores_resume',
            //'active',
            //'github_field',
            //'project_site_field',
            //'email_alert_info:email',
            //'last_visited_on',
            //'resume_updated_on',
            //'created_on',
            //'updated_on',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JobSites $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
