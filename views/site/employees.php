<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-employees">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        This is the About page. You may modify the following file to customize its content:
    </p>
    <table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Fullname</th>
					<th>Title</th>
					<th>Department</th>
					<th>Salary</th>
				</tr>
        <?php
        foreach ($object as $model) {
          ?>
            <tr>
                <td> <?= $model->emp_no?> </td>
                <td> <?= $model->first_name?> </td>



            </tr>
          <?php
        }
        ?>
      </table>



    <code><?= __FILE__ ?></code>

</div>
