<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Лист</h1>
<table>
    <?php foreach ($models as $model):?>
    <tr>
        <td><?= $model->code ?></td>
        <td><?= $model->name ?></td>
        <td><?= $model->population ?></td>
    </tr>
    <?php endforeach;?>
</table>