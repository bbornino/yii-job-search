<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JobPostings;

/**
 * JobPostingSearch represents the model behind the search form of `app\models\JobPostings`.
 */
class JobPostingSearch extends JobPostings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'job_site_id', 'archive'], 'integer'],
            [['company_name', 'company_url', 'posting_title', 'posting_id', 'posting_url', 'posting_location_city', 'posting_location_type', 'posting_comments', 'employment_type', 'pay_range', 'technology_stack', 'applied_on', 'rejected_on', 'interviewed_on', 'created_on', 'updated_on'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = JobPostings::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'job_site_id' => $this->job_site_id,
            'archive' => $this->archive,
            'applied_on' => $this->applied_on,
            'rejected_on' => $this->rejected_on,
            'interviewed_on' => $this->interviewed_on,
            'created_on' => $this->created_on,
            'updated_on' => $this->updated_on,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'company_url', $this->company_url])
            ->andFilterWhere(['like', 'posting_title', $this->posting_title])
            ->andFilterWhere(['like', 'posting_id', $this->posting_id])
            ->andFilterWhere(['like', 'posting_url', $this->posting_url])
            ->andFilterWhere(['like', 'posting_location_city', $this->posting_location_city])
            ->andFilterWhere(['like', 'posting_location_type', $this->posting_location_type])
            ->andFilterWhere(['like', 'posting_comments', $this->posting_comments])
            ->andFilterWhere(['like', 'employment_type', $this->employment_type])
            ->andFilterWhere(['like', 'pay_range', $this->pay_range])
            ->andFilterWhere(['like', 'technology_stack', $this->technology_stack]);

        return $dataProvider;
    }
}
