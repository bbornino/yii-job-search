<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Yii is a very light PHP based framework. This application is a very light intro to using the framework that tracks one of those necessary tasks all software developers will take on: tracking your job hunting.
    </p>

    <p>The Job Sites lists all of the sites one is tracking, and all of the postings found by each one.</p>
    <p>The Job Postings shows all postings... total.  Which can be helpful when searching</p>


    <!-- <code><?= __FILE__ ?></code> -->
</div>
