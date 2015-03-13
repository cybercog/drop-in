<?php

use app\models\Languages;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datecontrol\DateControl;
use kartik\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-8"><?= $form->field($model, 'Name')->textInput(['maxlength' => 255]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'Gender')->dropDownList(['M' => 'Male', 'F' => 'Female'], ['prompt' => '- Choose Gender']) ?></div>

    <div class="col-md-8">
        <?php
        echo $form->field($model, 'ConfirmationDate')->widget(DateControl::classname(), [
            'type' => DateControl::FORMAT_DATE,
            'displayFormat' => 'php:d M Y',
            'saveFormat' => 'php:Y-m-d',
        ]);
        ?>            
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'Eligible')->dropDownList([1 => 'Yes', 0 => 'No'], ['prompt' => '- Choose']) ?>
    </div>
    <div class="col-md-12">
        <?= $form->field($model, 'Interpreter')->dropDownList(ArrayHelper::map(Languages::find()->orderBy('Language')->all(), 'ID', 'Language')) ?>    
        <?= $form->field($model, 'Comments', ['template' => "Comments\n\n{input}\n{hint}\n{error}"])->textArea(array('rows' => 5, 'placeholder' => 'Elegibility comments and other important issues.')); ?>
        <?= $form->field($model, 'CommentsOld', ['template' => "Comments\n\n{input}\n{hint}\n{error}"])->textArea(array('rows' => 5, 'placeholder' => 'Please don\'t add new comments here this field will be deleted in the future...')); ?>
    </div>    
</div>    
<div class="form-group">
    <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-warning']) ?>        
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>
