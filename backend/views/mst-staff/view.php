<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MstStaff */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mst Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-staff-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'management_login_id',
            'name',
            'short_name',
            'store_id',
            'position',
            'career',
            'assign_product_id',
            'sex',
            'permission_id',
            'email:email',
            'memo',
            'avatar',
            'catch',
            'introduction',
            'image1',
            'image1_note',
            'image2',
            'image2_note',
            'item_option_1',
            'item_option_2',
            'item_option_3',
            'item_option_4',
            'item_option_5',
            'link_title_1',
            'link_url_1:url',
            'link_icon_1',
            'link_title_2',
            'link_url_2:url',
            'link_icon_2',
            'link_title_3',
            'link_url_3:url',
            'link_icon_3',
            'show_flg',
            'del_flg',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
