<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MstStaff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mst-staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'management_login_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_id')->textInput() ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'career')->textInput() ?>

    <?= $form->field($model, 'assign_product_id')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permission_id')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'introduction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image1_note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image2_note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_option_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_option_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_option_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_option_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_option_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_title_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_url_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_icon_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_title_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_url_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_icon_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_title_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_url_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_icon_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'del_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
