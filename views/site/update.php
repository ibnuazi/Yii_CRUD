<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Yii CRUD Web Application';
?>
<style>
    body {
    font-family: Arial, sans-serif;
}

/* .body-container {
    overflow-x: auto;
    margin: 20px;
} */

/* .responsive-table {
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
} */
</style>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Update </h1>
    </div>
    <div class="body-container">
        <?php 
        $form=ActiveForm::begin()
        ?>
        <div class="row">
           <div class="form-group">
            <div class="col-lg-6">
                <?=$form->field($post,'Name')?>
            </div>
           </div>
        </div>
        <div class="row">
           <div class="form-group">
            <div class="col-lg-6">
                <?=$form->field($post,'Phone')?>
            </div>
           </div>
        </div>
        <div class="row">
           <div class="form-group">
            <div class="col-lg-6">
                <?=$form->field($post,'Email')?>
            </div>
           </div>
        </div>
        <div class="row">
           <div class="form-group">
            <div class="col-lg-6">
                <div class="col-lg-3">
                     <?= Html::submitButton('Update',['class'=>'btn btn-primary']);?>
                </div>
                <div class="col-lg-2 mt-3">
                     <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-dark">Go Back</a>
                </div>
            </div>
           </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>
