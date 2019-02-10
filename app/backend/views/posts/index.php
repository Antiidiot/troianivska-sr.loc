<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Posts;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити статтю', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'title',
            [
                    'attribute'=>'description',
                    'filterInputOptions'=>['class'=>'hidden'],
            ],
            [
                'attribute'=>'description',
                'filterInputOptions'=>['class'=>'hidden'],
            ],
            [
                    'attribute'=>'status',
                    'filter'=>['Не опублікована','Опублікована'],
                    'filterInputOptions' => ['prompt' => 'Фільтрувати по статусу', 'class' => 'form-control',]
            ],
            [
                    'attribute'=>'category_id',
                    'filter'=>Posts::getCategoryList(),
                'filterInputOptions' => ['prompt' => '', 'class' => 'form-control', 'id' => null],
                    'value'=>'category.nameCategory'
            ],
            [
                    'label'=>'Картинка',
                    'format'=>'html',
                    'value'=>function($img)
                    {
                        return Html::img($img->getImage(),['width'=>'180px']);
                    }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
