<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReferencesTranslation;

/**
 * ReferencesTranslationSerch represents the model behind the search form of `app\models\ReferencesTranslation`.
 */
class ReferencesTranslationSerch extends ReferencesTranslation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'locale_id', 'customer_id'], 'integer'],
            [['year', 'project_image', 'project_title', 'customer_image', 'customer_title', 'project_body', 'customer_body'], 'safe'],
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
        $query = ReferencesTranslation::find();

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
            'locale_id' => $this->locale_id,
            'customer_id' => $this->customer_id,
        ]);

        $query->andFilterWhere(['like', 'year', $this->year])
            ->andFilterWhere(['like', 'project_image', $this->project_image])
            ->andFilterWhere(['like', 'project_title', $this->project_title])
            ->andFilterWhere(['like', 'customer_image', $this->customer_image])
            ->andFilterWhere(['like', 'customer_title', $this->customer_title])
            ->andFilterWhere(['like', 'project_body', $this->project_body])
            ->andFilterWhere(['like', 'customer_body', $this->customer_body]);

        return $dataProvider;
    }
}
