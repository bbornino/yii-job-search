<?php

use app\models\JobPostings;
use yii\helpers\Html;
use yii\widgets\DetailView;
$formatter =  \Yii::$app->formatter;

/** @var yii\web\View $this */
/** @var app\models\JobSites $model */

$postingsModel = new JobPostings;
$sitePostings = $postingsModel::findAll(['job_site_id' => $model->id]);

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Job Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link rel="stylesheet" href="assets/datatables.min.css">
<script src="assets/557efdd0/jquery.min.js"></script>
<script src="assets/datatables.min.js"></script>
<script>
$( document ).ready( function() {

    new DataTable('#postings_dt', {
        
    })

    $('tr').click(function() {
        location = 'index.php?r=job-postings%2Fupdate&id=' + this.attributes.posting_id.value
    })
})

</script>

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
            <strong>URL</strong><br>
            <?= $model->url ?>
        </div>
        <div class="col">
            <strong>Rating</strong><br>
            <?= $model->rating ?>
        </div>
        <div class="col">
            <strong>Last Visited</strong><br>
            <?= $formatter->asDate($model->last_visited_on, 'medium') ?>
        </div>
        <div class="col">
            <strong>Resume Last Updated</strong><br>
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

    <div class="container mt-5">
        <h2>Add a Job Posting</h2>
        <div class="job-postings-form">
            <form id="w0" method="post" action="/index.php?r=job-postings%2Fcreate">
                <!-- Hidden Fields -->
                <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" 
                    value="<?= Yii::$app->request->csrfToken; ?>" />
                <input type="hidden" value="<?= $model->id ?>"
                    id="jobpostings-job_site_id" name="JobPostings[job_site_id]">
                <input type="hidden" value="<?= date("Y-m-d H:i:s") ?>"
                    id="jobpostings-applied_on" name="JobPostings[applied_on]">

                <div class="row pt-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group field-jobpostings-company_name">
                            <label class="control-label" for="jobpostings-company_name">Company Name</label>
                            <input type="text" class="form-control"
                                    id="jobpostings-company_name" name="JobPostings[company_name]"></input>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group field-jobpostings-posting_title">
                            <label class="control-label" for="jobpostings-posting_title">Posting Title</label>
                            <input type="text" class="form-control"
                                    id="jobpostings-posting_title" name="JobPostings[posting_title]"></input>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group field-jobpostings-location_city">
                            <label class="control-label" for="jobpostings-location_city">Location City</label>
                            <input type="text" class="form-control"
                                    id="jobpostings-location_city" name="JobPostings[location_city]"></input>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="form-group field-jobpostings-location_type">
                            <label class="control-label" for="jobpostings-location_type">Location Type</label>
                            <select class="form-control"
                                    id="jobpostings-location_type" name="JobPostings[location_type]">
                                <option value='Remote' selected>Remote</option>
                                <option value='Hybrid' >Hybrid</option>
                                <option value='On-Site' >On-Site</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create Job Posting</button>
                </div>
            </form>
        </div>


    </div>

    <div class="container mt-5">
        <h2>Job Postings Applied</h2>
        <table id='postings_dt' class="table table-striped" style="width:100%">
            <thead>
                <th>Company Name</th>
                <th>Posting Title</th>
                <th>Posting Type</th>
                <th>Posting City</th>
                <th>Applied On</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php 
                    if (isset($sitePostings) && !empty($sitePostings) && sizeof($sitePostings) > 0 ) {
                        foreach($sitePostings as $postingItem) { ?>
                    <tr posting_id = <?= $postingItem->id ?> >
                        <td><?= $postingItem->company_name ?></td>
                        <td><?= $postingItem->posting_title ?></td>
                        <td><?= $postingItem->posting_location_type ?></td>
                        <td><?= $postingItem->posting_location_city ?></td>
                        <td><?= $postingItem->applied_on ?></td>
                        <td><?= $postingItem->company_name ?></td>
                    </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</div>
