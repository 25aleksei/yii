<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\news\models\Tegs */

$this->title = Yii::t('ML', 'Create {modelClass}', [
	'modelClass' => Yii::t('ML','Tegs')
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('ML', 'Tegs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tegs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
