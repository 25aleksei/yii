<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\news\models\Tegs */

$this->title = Yii::t('ML', 'Update {modelClass}: {modelName}', [
	'modelClass' => Yii::t('ML','Tegs'),
	'modelName' => $model->title
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'Tegs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('ML', 'Update');
?>
<div class="tegs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
