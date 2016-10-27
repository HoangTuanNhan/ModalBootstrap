<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MstStaff;

/**
 * MstStaffSearch represents the model behind the search form about `common\models\MstStaff`.
 */
class MstStaffSearch extends MstStaff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'management_login_id', 'store_id', 'career', 'assign_product_id', 'permission_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name', 'short_name', 'position', 'sex', 'email', 'memo', 'avatar', 'catch', 'introduction', 'image1', 'image1_note', 'image2', 'image2_note', 'item_option_1', 'item_option_2', 'item_option_3', 'item_option_4', 'item_option_5', 'link_title_1', 'link_url_1', 'link_icon_1', 'link_title_2', 'link_url_2', 'link_icon_2', 'link_title_3', 'link_url_3', 'link_icon_3', 'show_flg', 'del_flg'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = MstStaff::find();

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
            'management_login_id' => $this->management_login_id,
            'store_id' => $this->store_id,
            'career' => $this->career,
            'assign_product_id' => $this->assign_product_id,
            'permission_id' => $this->permission_id,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'short_name', $this->short_name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'memo', $this->memo])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'catch', $this->catch])
            ->andFilterWhere(['like', 'introduction', $this->introduction])
            ->andFilterWhere(['like', 'image1', $this->image1])
            ->andFilterWhere(['like', 'image1_note', $this->image1_note])
            ->andFilterWhere(['like', 'image2', $this->image2])
            ->andFilterWhere(['like', 'image2_note', $this->image2_note])
            ->andFilterWhere(['like', 'item_option_1', $this->item_option_1])
            ->andFilterWhere(['like', 'item_option_2', $this->item_option_2])
            ->andFilterWhere(['like', 'item_option_3', $this->item_option_3])
            ->andFilterWhere(['like', 'item_option_4', $this->item_option_4])
            ->andFilterWhere(['like', 'item_option_5', $this->item_option_5])
            ->andFilterWhere(['like', 'link_title_1', $this->link_title_1])
            ->andFilterWhere(['like', 'link_url_1', $this->link_url_1])
            ->andFilterWhere(['like', 'link_icon_1', $this->link_icon_1])
            ->andFilterWhere(['like', 'link_title_2', $this->link_title_2])
            ->andFilterWhere(['like', 'link_url_2', $this->link_url_2])
            ->andFilterWhere(['like', 'link_icon_2', $this->link_icon_2])
            ->andFilterWhere(['like', 'link_title_3', $this->link_title_3])
            ->andFilterWhere(['like', 'link_url_3', $this->link_url_3])
            ->andFilterWhere(['like', 'link_icon_3', $this->link_icon_3])
            ->andFilterWhere(['like', 'show_flg', $this->show_flg])
            ->andFilterWhere(['like', 'del_flg', $this->del_flg]);

        return $dataProvider;
    }
}
