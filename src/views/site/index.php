<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Экологическое право</h1>

        <?php

        $bill = \app\models\Bill::find()
            ->orderBy(['id' => SORT_DESC])
            ->one();

        echo '<pre>';
        print_r($bill);
        echo '<pre>';



        ?>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

    </div>
</div>