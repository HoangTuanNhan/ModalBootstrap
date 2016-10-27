<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Classes;
use kartik\file\FileInput;
use common\components\Util;
/* @var $this yii\web\View */
/* @var $model2 common\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .stylist{
        float:left;
    }
    .play{
        padding-top:63px;
         width:240px;
    }
    .fun{
      float:left;
    }
    .demo{
        padding :0;
    }
    
</style>
<div class="students-form-view">
<div class="row">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
    <div class ="col-md-3">
                <a href="javascript:void(0);" title="菅沼 ユウスケ" class="stylist">
                    <img src="https://simgbp.hotp.jp/CSP/IMG_SRC/45/16/B012264516/B012264516_115-153.jpg" class="bdImgGray w115 h153" alt="" oncontextmenu="return false;" />
                </a>
    </div>
            
    <div class ="col-md-9">
        <div class="main">
        <h5 style="color:red"><?php echo $model->name ?></h5>
        <p>今の雰囲気にさらに柔らかさや可愛くなるポイントをプラスしていきます☆透明感の高いカラーリングでグレージュ系の透け感のあるイメージのプラスや、ふわっとした柔らさがでる質感をパーマカットでプラス、グラデーションやハイライト
            で今のスタイルにグッとくるポイントをプラスしてさらに上がる毎日にしていきましょう♪
        </p>
        </div>
        <div class="center">
            <ul  class="demo">
                <li style="list-style:none"  class ="fun">
                    <a href="javascript:void(0);" title="菅沼 ユウスケ" class="stylist">
                        <img src="https://simgbp.hotp.jp/CSP/IMG_SRC/27/49/B013742749/B013742749_89-119.jpg" class="bdImgGray w115 h153" alt="" oncontextmenu="return false;" />
                    </a>
                    <p class ="play">
                        ☆グレージュ・ラベンダー・ブロンドベージュカラーが得意です☆
                    </p>
                </li>
                 
            
                <li style="list-style:none"  class ="fun">
                    <a href="javascript:void(0);" title="菅沼 ユウスケ" class="stylist">
                        <img src="https://simgbp.hotp.jp/CSP/IMG_SRC/27/49/B013742749/B013742749_89-119.jpg" class="bdImgGray w115 h153" alt="" oncontextmenu="return false;" />
                    </a>
                    <p class ="play">
                        ☆グレージュ・ラベンダー・ブロンドベージュカラーが得意です☆
                    </p>
                </li>
                <div style="clear: both;"></div>
                 
            </ul>
             <div style="clear: both;"></div>
        </div> 
       
        <div class="mT30" >
            <table class="stylistStatus" border="1">
		<tbody>
                    
                    <tr>
                        <th>得意なイメージ</th>
                        <td>12年</td>
                    </tr>
                    
                    <tr>
			<th>得意なイメージ</th>
                        <td>カジュアル・ストリート</td>
                    </tr>   
                    <tr>
                        <th>得意な技術</th>
			<td>カラーリストの資格も持つスタイリストです！お客様一人一人に似合わせること・カラーの色持ち・配色バランスにこだわってます♪ロング～ショートまで外国人風の柔らかいヌケ感と質感を作るのが好きです☆</td>
                    </tr>
                    <tr>
			<th>趣味・マイブーム</th>
			<td>海外旅行（２年の海外生活、３０カ国以上）、ファッション、アート（実家が直島の近くです♪）、本（家に１０００冊）、映画（数えられないほど見てます♪）、サイクリング、SNSなどなど</td>
                    </tr>
		</tbody>
            </table>
	</div>

        
    </div>

<?php ActiveForm::end(); ?>
    </div>

</div>
