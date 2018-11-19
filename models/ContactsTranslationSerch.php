<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ContactsTranslation;

/**
 * ContactsTranslationSerch represents the model behind the search form of `app\models\ContactsTranslation`.
 */
class ContactsTranslationSerch extends ContactsTranslation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'сontact_id', 'locale_id', 'zip'], 'integer'],
            [['company_title', 'image', 'phone', 'email', 'country', 'city', 'region', 'adress'], 'safe'],
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
        $query = ContactsTranslation::find();

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
            'сontact_id' => $this->сontact_id,
            'locale_id' => $this->locale_id,
            'zip' => $this->zip,
        ]);

        $query->andFilterWhere(['like', 'company_title', $this->company_title])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'adress', $this->adress]);

        return $dataProvider;
    }
}
