<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job_postings".
 *
 * @property int $id
 * @property string $company_name
 * @property string|null $company_url
 * @property string $posting_title
 * @property string|null $posting_id
 * @property string|null $posting_url
 * @property string|null $posting_location_city
 * @property string|null $posting_location_type
 * @property string|null $posting_comments
 * @property int $job_site_id
 * @property string|null $employment_type
 * @property string|null $pay_range
 * @property string|null $technology_stack
 * @property int|null $archive
 * @property string|null $applied_on
 * @property string|null $rejected_on
 * @property string|null $interviewed_on
 * @property string $created_on
 * @property string|null $updated_on
 */
class JobPostings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job_postings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['posting_comments'], 'string'],
            [['job_site_id', 'created_on'], 'required'],
            [['job_site_id', 'archive'], 'integer'],
            [['applied_on', 'rejected_on', 'interviewed_on', 'created_on', 'updated_on'], 'safe'],
            [['company_name', 'company_url', 'posting_title', 'posting_id', 'posting_url', 'posting_location_city', 'posting_location_type', 'employment_type', 'pay_range', 'technology_stack'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'company_url' => 'Company Url',
            'posting_title' => 'Posting Title',
            'posting_id' => 'Posting ID',
            'posting_url' => 'Posting Url',
            'posting_location_city' => 'Posting Location City',
            'posting_location_type' => 'Posting Location Type',
            'posting_comments' => 'Posting Comments',
            'job_site_id' => 'Job Site ID',
            'employment_type' => 'Employment Type',
            'pay_range' => 'Pay Range',
            'technology_stack' => 'Technology Stack',
            'archive' => 'Archive',
            'applied_on' => 'Applied On',
            'rejected_on' => 'Rejected On',
            'interviewed_on' => 'Interviewed On',
            'created_on' => 'Created On',
            'updated_on' => 'Updated On',
        ];
    }
}
