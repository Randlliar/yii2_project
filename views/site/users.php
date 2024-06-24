<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


$this->title = 'Users list';
$this->params['breadcrumbs'][] = $this->title;

try {
    $users = Yii::$app->db->createCommand('SELECT * FROM user_info')
        ->queryAll();
} catch (\yii\db\Exception $e) {
    $users = null;
}
?>

<div class="site-users">
    <h1><?= Html::encode($this->title) ?></h1>

<?php if ($users != null):?>
    <table class="table">
        <thead>
        <tr>
            <th>
                Full name
            </th>
            <th>
                User ID
            </th>
        </tr>
        </thead>
        <?php foreach($users as $person): ?>
            <tr>
                <td class=""><?= $person['first_name'] . ' ' . $person['last_name']; ?></td>
                <td class=""><?= $person['id'] ?></td>
                <td class="">        <button>Remove</button>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <div>Database connection failed</div>
    <?php endif; ?>



</div>
