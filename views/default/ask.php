<?php
use artkost\qa\Module;

$this->title = Module::t('Ask a Question');
$this->params['breadcrumbs'][] = ['label' => Module::t('Questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1><?= $this->title ?></h1>
            <?= $this->render('parts/form-question', ['model' => $model]) ?>
        </div>
    </div>
</div>

