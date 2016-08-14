<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel c006\preferences\models\search\Preferences */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Preferences');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preferences-index">

    <h1 class="title-large"><?= Html::encode($this->title) ?></h1>

    <div class="item-container margin-top-30 margin-bottom-30">
        <?= Html::a(Yii::t('app', 'Create Preferences'), ['create'], ['class' => 'btn btn-secondary']) ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel'  => $searchModel,
            'columns'      => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'key',
                'value',
                'editable',

                ['class'    => 'yii\grid\ActionColumn',
                 'template' => '<div class="nowrap">{update} {delete}</div>'],
            ],
        ]); ?>

    </div>
</div>
