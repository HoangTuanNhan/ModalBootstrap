<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\Util;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Students */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'MstStaff'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .staff-form {
        width:200px;
       
    }
</style>
<div class="staff-form">



    <h1><?= Html::encode($this->title) ?></h1>
    
       
          <?php
                $form = ActiveForm::begin([
                    'id' => 'staffForm',
                    //'enableClientValidation' => false,
                    'validateOnBlur' => false,
                    'validateOnChange' => false,
                    'validateOnType' => false,
                    'validateOnSubmit' => true,
                    'options' => ['enctype' => 'multipart/form-data']
            ]);
           ?>
            <div>
                <a href="javascript:void(0);" title="菅沼 ユウスケ" >
                    <img src="https://simgbp.hotp.jp/CSP/IMG_SRC/45/16/B012264516/B012264516_115-153.jpg" class="bdImgGray w115 h153" alt="" oncontextmenu="return false;" />
                </a>
            </div>
                            
            <p class="b"><?php echo $model->name ?></p>
            <p class="f" style="color:red"><?php echo $model->position ?></p>
            <p class="m">（歴10年）</p>
            <p class="t">柔らかさ/透明感/外国人風カラーならお任せください♪
                【<a href="javascript:void(0);" title="詳細" class="jscStylistDetailTrigger1">詳細</a>】
            </p>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Preview Data</button>
            </div>
        <?php ActiveForm::end(); ?>			  
</div>
 <!-- Modal -->
<div id="students-form-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">STYLIST </br> 後藤 　たかおゴトウ タカオ</h4>
                                                
            </div>
            <div class="modal-body">
                <?= $this->render('_staff-confirm', ['model' => $model]) ?>
            </div>
           
        </div>

    </div>
</div>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
            function send_the_1st_form() {
                $(document).ready(function () {
                    $('#staffForm').submit();
                });
            }

            $(document).ready(function () {
                $('#staffForm').on('afterValidate', function (e) { // afterValidate
                    $("#staffForm").submit(function (e) {
                        e.preventDefault(); // stop submitting
                    
                    // Transfer data from the first form to second form
                    $('.students-form-view .b').val($('.staff-form .b').val());
                    $('.students-form-view .f').val($('.staff-form .f').val());
                    $('.students-form-view .m').val($('.staff-form .m').val());
                  

                    $('.students-form-view input[type="file"]').attr('data-krajee-fileinput',
                            $('.staff-form input[type="file"]').attr('data-krajee-fileinput'));

                    // copy image data to preview
                    var $imageData = $('.staff-form .file-preview-image').attr('src');
                    $('.students-form-view .kv-file-content img').attr('src', $imageData);
                    //$('.students-form-preview input[name="Students[file_image]"]:hidden').val($imageData); // will hide modal but allow upload :(

                    // Show the modal hidden behind which contains the second form
                    $(window).ready(function () {
                        $("#students-form-modal").modal("show");
                    });
                    return false; // stop submitting from the first form
                    });
                });
            });

</script>