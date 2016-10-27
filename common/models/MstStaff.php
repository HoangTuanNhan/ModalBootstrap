<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mst_staff".
 *
 * @property integer $id
 * @property integer $management_login_id
 * @property string $name
 * @property string $short_name
 * @property integer $store_id
 * @property string $position
 * @property integer $career
 * @property integer $assign_product_id
 * @property string $sex
 * @property integer $permission_id
 * @property string $email
 * @property string $memo
 * @property string $avatar
 * @property string $catch
 * @property string $introduction
 * @property string $image1
 * @property string $image1_note
 * @property string $image2
 * @property string $image2_note
 * @property string $item_option_1
 * @property string $item_option_2
 * @property string $item_option_3
 * @property string $item_option_4
 * @property string $item_option_5
 * @property string $link_title_1
 * @property string $link_url_1
 * @property string $link_icon_1
 * @property string $link_title_2
 * @property string $link_url_2
 * @property string $link_icon_2
 * @property string $link_title_3
 * @property string $link_url_3
 * @property string $link_icon_3
 * @property string $show_flg
 * @property string $del_flg
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 */
class MstStaff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['management_login_id', 'email', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['management_login_id', 'store_id', 'career', 'assign_product_id', 'permission_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['short_name'], 'string', 'max' => 5],
            [['position'], 'string', 'max' => 20],
            [['sex', 'show_flg', 'del_flg'], 'string', 'max' => 1],
            [['email'], 'string', 'max' => 60],
            [['memo', 'image1_note', 'image2_note'], 'string', 'max' => 500],
            [['avatar', 'image1', 'image2', 'item_option_1', 'item_option_2', 'item_option_3', 'item_option_4', 'item_option_5', 'link_title_1', 'link_icon_1', 'link_title_2', 'link_icon_2', 'link_title_3', 'link_icon_3'], 'string', 'max' => 100],
            [['catch'], 'string', 'max' => 25],
            [['introduction'], 'string', 'max' => 250],
            [['link_url_1', 'link_url_2', 'link_url_3'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'management_login_id' => 'Management Login ID',
            'name' => 'Name',
            'short_name' => 'Short Name',
            'store_id' => 'Store ID',
            'position' => 'Position',
            'career' => 'Career',
            'assign_product_id' => 'Assign Product ID',
            'sex' => 'Sex',
            'permission_id' => 'Permission ID',
            'email' => 'Email',
            'memo' => 'Memo',
            'avatar' => 'Avatar',
            'catch' => 'Catch',
            'introduction' => 'Introduction',
            'image1' => 'Image1',
            'image1_note' => 'Image1 Note',
            'image2' => 'Image2',
            'image2_note' => 'Image2 Note',
            'item_option_1' => 'Item Option 1',
            'item_option_2' => 'Item Option 2',
            'item_option_3' => 'Item Option 3',
            'item_option_4' => 'Item Option 4',
            'item_option_5' => 'Item Option 5',
            'link_title_1' => 'Link Title 1',
            'link_url_1' => 'Link Url 1',
            'link_icon_1' => 'Link Icon 1',
            'link_title_2' => 'Link Title 2',
            'link_url_2' => 'Link Url 2',
            'link_icon_2' => 'Link Icon 2',
            'link_title_3' => 'Link Title 3',
            'link_url_3' => 'Link Url 3',
            'link_icon_3' => 'Link Icon 3',
            'show_flg' => 'Show Flg',
            'del_flg' => 'Del Flg',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
