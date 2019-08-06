<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Profile';
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <legend>Thêm thông tin</legend>

            <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data ']]); ?>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">  
                    
                    <?= $form->field($model, 'familyname')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'name')->textInput() ?>
 

                    <?= $form->field($model, 'avatar')->fileInput()  ?>

            </div>        
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">       

                <?= $form->field($model, 'phonenumber')->textInput()  ?>

                <?= $form->field($model, 'birthday')->textInput(['class'=>'picker']) ?>

            </div>
        </div>    

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'user-button']) ?>
        </div>    

        <?php ActiveForm::end(); ?>

    </div>
    <legend  id="profile1">Trang cá nhân</legend>
    <div class="container"  id="profile">
        
        <div class="row">
            <?php if ($model) : ?>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="avartar">
                <img src="" alt="" >
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <table>
                    
                    <tr>
                        <td><strong>Tên người dùng:</strong></td>
                        <td><?php echo $model->familyname ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tên gọi:</strong></td>
                        <td><?php echo $model->name ?></td>
                    </tr>
                    <tr>
                        <td><strong>Số điện thoại:</strong></td>
                        <td><?php echo $model->phonenumber ?></td>
                    </tr>
                    <tr>
                        <td><strong>Ngày sinh:</strong></td>
                        <td><?php echo $model->birthday ?></td>
                    </tr>
                    
                </table>
            </div>
        <?php endif; ?>
        </div>
    </div>
    <hr>
</div>
