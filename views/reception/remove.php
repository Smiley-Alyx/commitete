<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use kartik\date\DatePicker;
use yii\validators\Validator;

/* @var $this yii\web\View */

$this->title = 'Удаление даты';
$this->params['breadcrumbs'][] = ['label' => 'Список записей', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Управление датами', 'url' => ['/reception/management']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reception-time">
	<div class="container">
	
    	<h1><?= Html::encode($this->title) ?></h1>
	
    	<?php $form = ActiveForm::begin(); ?>
        <div class="calendar-form col-md-6">
            <label>Удаляемая дата</label>
            <?= DatePicker::widget([
                'options' => ['placeholder' => 'Выберете необходимую дату'],
                'name' => 'Reception[datePlan]',
                'pluginOptions' => [
                    'format' => 'dd-mm-yyyy',
                    'todayHighlight' => true,
                    'autoclose'=>true,
                    'daysOfWeekDisabled' => [0, 1, 3, 5, 6],
                ]
            ]); ?>
        </div>

    	<div class="col-md-4">
    		<?= $form->field($model, 'operatorPlan')->dropDownList([
                '0' => 'Весь день',
    			'1' => 'Первый',
    			'2' => 'Второй', 
    			'3' => 'Третий'
    		], 
    		[
    			'options' => [
    				'3' => ['Selected' => true]
    			]
    		]
    	); ?>
    	</div>
    </div> 	
	<div class="container">
		<?= Html::submitButton('Удалить', 
            [
                'class' => 'btn btn-danger',
                'id' => 'disbut',
                'onclick' => 'return confirm("В удаляемой дате могут быть записи! Вы уверены что хотите удалить???")',
                //'data-confirm' => Yii::t('yii', 'В удаляемой дате могут быть записи! Вы уверены что хотите удалить???'),
                /*
                'data' => [
                    'confirm' => 'В удаляемой дате могут быть записи! Вы уверены что хотите удалить???',
                    'method' => 'post'
                ],
                */
                'disabled' => 'disabled',
            ]); 
        ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        $('#w1').on('change', function(){
            $('#disbut').removeAttr("disabled");
        });
    });
</script>

