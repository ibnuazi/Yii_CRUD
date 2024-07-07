<?php
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Yii CRUD Web Application';
?>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .table-container {
        overflow-x: auto;
        margin: 20px;
    }

    .responsive-table {
        width: 100%;
        border-collapse: collapse;
    }

    .responsive-table th, .responsive-table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .responsive-table th {
        background-color: #f4f4f4;
    }
    .custom-width-button {
        width: 100px;
    }
</style>
<div class="site-index">
    <?php if (Yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-success">
            <?= Yii::$app->session->getFlash('message'); ?>
        </div>
    <?php endif; ?>
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Yii CRUD Web Application</h1>
    </div>
    <div class="table-container">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($posts) > 0) : ?>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?= Html::encode($post->Id); ?></td>
                            <td><?= Html::encode($post->Name); ?></td>
                            <td><?= Html::encode($post->Phone); ?></td>
                            <td><?= Html::encode($post->Email); ?></td>
                            <td>
                                <span><?= Html::a('View', ['view', 'id' => $post->Id], ['class' => 'btn btn-info btn-sm']) ?></span>
                                <span><?= Html::a('Update', ['update', 'id' => $post->Id], ['class' => 'btn btn-warning btn-sm']) ?></span>
                                <span><?= Html::a('Delete', ['delete', 'id' => $post->Id], [
                                        'data-method' => 'post',
                                        'data-confirm' => 'Are you sure you want to delete this item?',
                                        'class' => 'btn btn-danger btn-sm'
                                    ]) ?></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No Records Found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="row mt-3">
        <?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary custom-width-button']) ?>
    </div>
</div>
