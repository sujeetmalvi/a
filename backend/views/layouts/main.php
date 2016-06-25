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
AppAsset::register($this);
?>
<?php echo uran1980\yii\widgets\pace\Pace::widget([
    'color' => 'black',
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
        'brandLabel' => 'Yes ERP',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        //configuration menu starts here

        $menuItems[]='<li><a href="index.php?r=student-master">Admission</a></li>';

         $menuItems[]='
         <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Configuration <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a  href="index.php?r=class-master">Class</a>
                </li>
               <li>
                    <a  href="index.php?r=section">Section</a>
                </li>
                <li>
                    <a  href="index.php?r=class-section-relation">Class Section Assign</a>
                </li>
                <li>
                    <a  href="index.php?r=fee-master">Fee </a>
                </li>
                <li>
                    <a  href="index.php?r=fee-type">Fee Type</a>
                </li>
                <li>
                    <a  href="index.php?r=district">District</a>
                </li>
                <li>
                    <a  href="index.php?r=state">State</a>
                </li>
                <li>
                    <a  href="index.php?r=payment-mode">Payment Mode</a>
                </li>
                <li>
                    <a  href="index.php?r=route">Route</a>
                </li>
                <li>
                    <a  href="index.php?r=route-immediate-stations">Route Stations</a>
                </li>
                <li>
                    <a  href="index.php?r=transport">Transport</a>
                </li>
                <li>
                    <a  href="index.php?r=transport-route">Transport Route</a>
                </li>
                <li>
                    <a  href="index.php?r=student-catagory">Student Catagory</a>
                </li>
                <li>
                    <a  href="index.php?r=session">Session</a>
                </li>
            </ul>
        </li>';



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
   <div class="row">

<div class="col-md-3">
    <?php 

echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'heading' => 'Welcome',
    'items' => [
        [
            'url' => '',
            'label' => 'Home',
            'icon' => 'home'
        ],
        [
            'label' => 'Help',
            'icon' => 'question-sign',
            'items' => [
                ['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
                ['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
            ],
        ],
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
