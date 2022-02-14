<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row text-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Internal ID</th>
                    <th scope="col">Last Modify</th>
                    <th scope="col">Regulator</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($models as $model){
                        if(!empty($model->internal_id)) {
                            echo '<tr>';
                            echo '<th scope="row">' . $model->id . '</th>';
                            echo '<td>' . $model->internal_id . '</td>';
                            echo '<td>' . $model->last_modify . '</td>';
                            echo '<td>' . $model->regulator . '</td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
            <?= \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                    ]); ?>
        </div>

    </div>
</div>
