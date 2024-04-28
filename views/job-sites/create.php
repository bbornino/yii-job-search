<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JobSites $model */

$this->title = 'Create Job Sites';
$this->params['breadcrumbs'][] = ['label' => 'Job Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-sites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
