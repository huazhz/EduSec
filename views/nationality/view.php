<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nationality */

$this->title = $model->nationality_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Configuration'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nationality List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xs-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-search"></i> <?php echo Yii::t('app', 'View Nationality') ?></h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
	<?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-block btn-back']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->nationality_id], ['class' => 'btn btn-block btn-info']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->nationality_id], [
            'class' => 'btn btn-block btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?> 
	</div>
   </div>
</div>

<div class="col-xs-12">
<div class="box box-primary view-item">

 <div class="nationality-view">
    <?= DetailView::widget([
        'model' => $model,
	'options'=>['class'=>'table  detail-view'],
        'attributes' => [
           // 'nationality_id',
            'nationality_name',
            [
		'attribute' => 'created_at',
		'value' => Yii::$app->formatter->asDateTime($model->created_at),
	    ],
            [
		'attribute' => 'created_by',
		'value' => $model->createdBy->user_login_id,
	    ],
	    [
		'attribute' => 'updated_at',
		'value' => ($model->updated_at == null) ? " - ": Yii::$app->formatter->asDateTime($model->updated_at),
	    ],
	    [
		'attribute' => 'updated_by',
        'value' => ($model->updated_at == null) ? " - ": $model->updatedBy->user_login_id,
	    ],
           // 'is_status',
        ],
    ]) ?>

</div></div></div>
