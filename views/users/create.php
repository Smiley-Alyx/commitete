<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Добавить посетителей';
$this->params['breadcrumbs'][] = ['label' => 'Посетители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
