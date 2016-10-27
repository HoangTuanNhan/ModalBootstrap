<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MstStaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'management_login_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'short_name') ?>

    <?= $form->field($model, 'store_id') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'career') ?>

    <?php // echo $form->field($model, 'assign_product_id') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'permission_id') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'memo') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'catch') ?>

    <?php // echo $form->field($model, 'introduction') ?>

    <?php // echo $form->field($model, 'image1') ?>

    <?php // echo $form->field($model, 'image1_note') ?>

    <?php // echo $form->field($model, 'image2') ?>

    <?php // echo $form->field($model, 'image2_note') ?>

    <?php // echo $form->field($model, 'item_option_1') ?>

    <?php // echo $form->field($model, 'item_option_2') ?>

    <?php // echo $form->field($model, 'item_option_3') ?>

    <?php // echo $form->field($model, 'item_option_4') ?>

    <?php // echo $form->field($model, 'item_option_5') ?>

    <?php // echo $form->field($model, 'link_title_1') ?>

    <?php // echo $form->field($model, 'link_url_1') ?>

    <?php // echo $form->field($model, 'link_icon_1') ?>

    <?php // echo $form->field($model, 'link_title_2') ?>

    <?php // echo $form->field($model, 'link_url_2') ?>

    <?php // echo $form->field($model, 'link_icon_2') ?>

    <?php // echo $form->field($model, 'link_title_3') ?>

    <?php // echo $form->field($model, 'link_url_3') ?>

    <?php // echo $form->field($model, 'link_icon_3') ?>

    <?php // echo $form->field($model, 'show_flg') ?>

    <?php // echo $form->field($model, 'del_flg') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
