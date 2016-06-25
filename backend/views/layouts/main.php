<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use kartik\sidenav\SideNav;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php echo uran1980\yii\widgets\pace\Pace::widget([
    'color' => 'red',
    'theme' => 'flash',
]); ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'School Manager',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {



        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
           
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
   <div class="row box2">

<div class="col-md-2 box1">
    <?php 
$item='home';
$type='u';
echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,

    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', 'icon' => 'home', 'url' => Url::to(['/site'])],

        ['label' => 'Configuration', 'icon' => 'cog', 'items' => [

            ['label' => 'Class and Section', 'icon' => 'bullhorn', 'items' => [
                ['label' => 'Class', 'url' => Url::to(['/class-master'])],
                ['label' => 'Section', 'url' => Url::to(['/section'])],
                ['label' => 'Class Section Assign', 'url' => Url::to(['/class-section-relation'])],
            ]],
            ['label' => 'Fee & Payment','icon'=>'','items'=>[
                ['label' => 'Fee', 'url' => Url::to(['/fee-master'])],
                ['label' => 'Fee Type', 'url' => Url::to(['/fee-type'])],
                ['label' => 'Payment Mode', 'url' => Url::to(['/payment-mode'])],
            ]],
            ['label'=> 'Location','icon'=>'','items'=>[
                ['label' => 'Country', 'url' => Url::to(['/fee-master'])],
                ['label' => 'State', 'url' => Url::to(['/state'])],
                ['label' => 'District', 'url' => Url::to(['/district'])],
            ]],
            ['label'=> 'Transport','icon'=>'','items'=>[
                ['label' => 'Transport', 'url' => Url::to(['/transport'])],
                ['label' => 'Transport Route', 'url' => Url::to(['/transport-route'])],
                ['label' => 'Route', 'url' => Url::to(['/route'])],
                ['label' => 'Route Stations', 'url' => Url::to(['/route-immediate-stations'])]
            ]],
            ['label' => 'Student Category', 'url' => Url::to(['/student-catagory','icon'=>''])],
            ['label' => 'Session', 'url' => Url::to(['/session','icon'=>''])],
        ]],

        ['label' => 'Books', 'icon' => 'book', 'items' => [
            ['label' => ' New Arrivals', 'url' => Url::to(['/site/new-arrivals'])],
            ['label' => ' Most Popular', 'url' => Url::to(['/site/most-popular'])],
            ['label' => 'Read Online', 'icon' => 'cloud', 'items' => [
                ['label' => 'Online 1', 'url' => Url::to(['/site/online-1'])],
                ['label' => 'Online 2', 'url' => Url::to(['/site/online-2'])]
            ]],
        ]],

        ['label' => 'Profile', 'icon' => 'user', 'url' => Url::to(['/site/profile'])],
    ],
]);


    ?>
 </div>
 <div class="col-md-9">   
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>        
    </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
