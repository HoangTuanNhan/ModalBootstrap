<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MstStaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mst Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mst Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'management_login_id',
            'name',
            'short_name',
            'store_id',
            // 'position',
            // 'career',
            // 'assign_product_id',
            // 'sex',
            // 'permission_id',
            // 'email:email',
            // 'memo',
            // 'avatar',
            // 'catch',
            // 'introduction',
            // 'image1',
            // 'image1_note',
            // 'image2',
            // 'image2_note',
            // 'item_option_1',
            // 'item_option_2',
            // 'item_option_3',
            // 'item_option_4',
            // 'item_option_5',
            // 'link_title_1',
            // 'link_url_1:url',
            // 'link_icon_1',
            // 'link_title_2',
            // 'link_url_2:url',
            // 'link_icon_2',
            // 'link_title_3',
            // 'link_url_3:url',
            // 'link_icon_3',
            // 'show_flg',
            // 'del_flg',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
