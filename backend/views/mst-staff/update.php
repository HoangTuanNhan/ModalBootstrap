<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MstStaff */

$this->title = 'Update Mst Staff: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mst Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mst-staff-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>