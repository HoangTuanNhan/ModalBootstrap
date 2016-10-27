<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MstStaff */

$this->title = 'Create Mst Staff';
$this->params['breadcrumbs'][] = ['label' => 'Mst Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mst-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
