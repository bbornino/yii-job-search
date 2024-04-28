<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JobSites;

/**
 * JobSiteSearch represents the model behind the search form of `app\models\JobSites`.
 */
class JobSiteSearch extends JobSites
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rating', 'stores_resume', 'active', 'github_field', 'project_site_field'], 'integer'],
            [['name', 'url', 'review_text', 'email_alert_info', 'description', 'resume_format', 'last_visited_on', 'resume_updated_on', 'created_on', 'updated_on'], 'safe'],
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
        $query = JobSites::find();

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
            'rating' => $this->rating,
            'stores_resume' => $this->stores_resume,
            'active' => $this->active,
            'github_field' => $this->github_field,
            'project_site_field' => $this->project_site_field,
            'last_visited_on' => $this->last_visited_on,
            'resume_updated_on' => $this->resume_updated_on,
            'created_on' => $this->created_on,
            'updated_on' => $this->updated_on,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'review_text', $this->review_text])
            ->andFilterWhere(['like', 'email_alert_info', $this->email_alert_info])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'resume_format', $this->resume_format]);

        return $dataProvider;
    }
}
