<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'emp_no',
            //'birth_date',
            //'first_name',
            //'last_name',
            [
              'label'=>'Employee Name',
              'attribute' => 'full_Name',
              //'value' => 'first_name',
            ],
            [
              'attribute' => 'title',
              'value' => 'empNoTitles.title',
            ],

            [
              'attribute' => 'salary',
              'value' => 'empNoSalaries.salary',
            ],


            [
              'attribute'=>'departments',
                'value' => function($model) {
                    foreach ($model->departments as $group) {
                        $departmentsNames[] = $group->dept_name;
                    }
                    return implode("\n", $departmentsNames);
                },
            ],





            //'gender',
            //'hire_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
