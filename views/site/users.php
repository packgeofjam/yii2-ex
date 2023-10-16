<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<table>
    <?php foreach ($users as $i=>$userlist):?>
        <tr>
            <td><?= $userlist->id ?></td>
            <td><?= $userlist->username ?></td>
            <td><?= $userlist->email ?></td>
            <td><?= $userlist->status ?></td>
            <td>
                <?php
                if ($userlist->status) {
                    echo '<a class="btn btn-primary" href="' . Url::to(['/site/status' , 'id' => $users[$i]->id]) . '">Activate</a>';
                } else {
                    echo '<a class="btn btn-primary" href="' . Url::to(['/site/status' , 'id' => $users[$i]->id]) . '">Deactivate</a>';
                }?>
            </td>
        </tr>
    <?php endforeach;?>
</table>