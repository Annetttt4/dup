

<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?= Html::csrfMetaTags() ?>
    <title><?=Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://api-maps.yandex.ru/2.0-stable/?apikey=<df179c3a-88ee-4058-90a4-bd2188f4f10a>&load=package.standard&lang=ru-RU" type="text/javascript"></script>

</head>


<?php $this->beginBody() ?>
<body id="page-top">

    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-togglable  fixed-top " id="mainNav">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand js-scroll-trigger" href="rksi.ru/">
            <div class="logo-img">
            <img src="/web/img/1.png" alt="" class="logo-img" >
            </a>
</div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="bg-overlay"></div>
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#page-top">
                        Тел.: (863) 294-71-47     
                        </a>
                    </li>
                </ul>
            </div>
            <!-- / .navbar-collapse -->
        </div>
        <!-- / .container -->
    </nav>
    <?= $content ?>

</div>
</section>
    <!-- FOOTER
    ================================================== -->
    <footer class="top-padding bg-dark">
        <!--Content -->
        <div class="container">
            <div class="row align-self-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Адрес колледжа
                        </a>
                        <p>ул.Тургеневская, 10/6, г.Ростов-на-Дону,344082</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                           Приемная комиссия
                        </a>
                        <p>тел.(863)294-71-47</p>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Официальный сайт
                        </a>
                        <p>http://rksi.ru/</p>
                    </div>
                </div>

                
        </div>
        <!-- / .container -->
    </footer>

  
  

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



