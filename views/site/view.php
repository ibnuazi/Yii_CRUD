<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Yii CRUD Web Application';
?>

<style>
    .btn{
        width: 100px;
        margin: 20px;
    }
</style>

<div class="site-index">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">View Details </h1>
    </div>
    <div class="body-container">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $post->Name; ?></li>
            <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $post->Phone; ?></li>
            <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $post->Email; ?></li>
        </ul>
        <div class="row">
               <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
