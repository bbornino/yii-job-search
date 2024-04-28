<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job_sites".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $review_text
 * @property string $email_alert_info
 * @property string $description
 * @property int $rating
 * @property string $resume_format
 * @property int $stores_resume
 * @property int $active
 * @property int $github_field
 * @property int $project_site_field
 * @property string|null $last_visited_on
 * @property string|null $resume_updated_on
 * @property string|null $created_on
 * @property string|null $updated_on
 */
class JobSites extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job_sites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['description'], 'string'],
            [['rating', 'stores_resume', 'active', 'github_field', 'project_site_field'], 'integer'],
            [['last_visited_on', 'resume_updated_on', 'created_on', 'updated_on'], 'safe'],
            [['name', 'email_alert_info', 'resume_format'], 'string', 'max' => 50],
            [['url', 'review_text'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'review_text' => 'Review Text',
            'email_alert_info' => 'Email Alert Info',
            'description' => 'Description',
            'rating' => 'Rating',
            'resume_format' => 'Resume Format',
            'stores_resume' => 'Stores Resume',
            'active' => 'Active',
            'github_field' => 'Has Github Field',
            'project_site_field' => 'Has Project Site Field',
            'last_visited_on' => 'Last Visited On',
            'resume_updated_on' => 'Resume Updated On',
            'created_on' => 'Created On',
            'updated_on' => 'Updated On',
        ];
    }
}
