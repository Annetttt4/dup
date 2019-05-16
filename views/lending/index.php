<?php
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Orientation;

$this->title = 'День открытых дверей';
?>
    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url(/web/img/image.png);"></div>

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="banner-content">
                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                           День открытых дверей в РКСИ!<br>дд.месяц.2019 год<br> Время!
                        </h1>

                        <!-- Subheading -->
                        <p class="lead text-white text-center mb-5">
                           Вход свободный!
                        </p>

                        <!-- Button -->
                        <p class="text-center mb-0" >
                            <a href="#form"  class="btn btn-primary ">
                               ЗАРЕГИСТИРОВАТЬСЯ
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


 

    <!-- SECTIONS
    ================================================== -->
    <!-- PAGES
    ================================================== -->

    <!-- FEATURES
    ================================================== -->
    <section class="section bg-light" id="about">
    <div class="prokrutka">
        <div class="container">
            <div class="row ">

                <div class="col-lg-6 ">
                    <div class="about-content">
                        <h2 class="display-5">
                        Что будет на мероприятии?
                        </h2>
                        <p>Регистрация</p>
                        <ul class="list-unstyled skill-list ">
                            <li>Вы получите сувениры нашего колледжа, а так же нашу газету и  буклеты.</li>
                         </ul>

                            <p>Официальная часть</p>
                        
                        <ul class="list-unstyled skill-list ">
                        <li>речь директора колледжа</li>
                        <li>презентация о направлениях и специальностях</li>
                        <li>рассказ о студенческих мероприятиях, дополнительном образовании в колледже</li>
                        <li>информация о подготовительных курсах</li>
                        <li>презентация правил поступления и подачи документов.</li>
                        </ul>

                        <p>Экскурсия по колледжу</p>
                        <ul class="list-unstyled skill-list ">
                        <li>посещение аудиторий и лабороторий колледжа</li>
                        <li>возможность самостоятельно попробывать свои силы в программировнии </li>
                        <li>изучение структуры обучения .</li>
                        </ul>
                     </div>
                       
                </div>
             </div>
         </div>
     </div>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6">
                        <h2 class="display-5">
                        Выступят с речью
                        </h2>
</div>
</div>
                </div>
            <div class="container">
            <div class="row mt-5 align-items-center ">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content-2 ">
                    <div class="client-img">
                    <img src="/web/img/3.jpg" alt="" class="img-fluid ">
                         </div>
                    </div>
                </div>
                

                <div class="col-lg-6 col-md-6">
                    <div class="about">
                    <p>Горбунов Сергей Николаевич</p>
                             <footer>Директор РКСИ</footer>
                    </div>
                </div>
            </div>
        </div>


            <div class="container">
            <div class="row mt-5 align-items-center ">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content-2 ">
                    <div class="client-img">
                    <img src="/web/img/2.jpg" alt="" class="img-fluid ">
                         </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="about">
                    <p>Филиппенко Михаил Юрьевич</p>
                             <footer>Зав. кафедрой программирования и компьютерных систем </footer>
                    </div>
                </div>
            </div>
        </div>

       


        <div class="container">
            <div class="row mt-5 align-items-center ">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content-2 ">
                    <div class="client-img">
                                    <img src="/web/img/4.jpg" alt="" class="img-fluid ">
                         </div>
                       </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="about">
                    <p>Комова Ольга Валерьевна</p>
                    <footer>Ответственный секретарь приемной комиссии. </footer>
                    </div>
                </div>
            </div>
            <p class="text-center mb-0" >
                            <a href="#form" target="_blank" class="btn btn-primary ">
                               ЗАРЕГИСТИРОВАТЬСЯ
                            </a>
                        </p>
        </div>
    </section>


    <section class="section" id="feature">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-6 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Почему стоит поступать в РКСИ
                    </h2>
                </div>
            </div>
            <!-- / .row -->

            <div class="row justy-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="text-center feature-block">
                        <div class="feature-icon-block mb-4">
                            <i class="fa fa-gem"></i>
                        </div>
                        <h4 class="mb-3 "></h4>
                        <p>  Обучение студентов в авторизованных учебных центрах ведущих телекоммуникационных компаний:</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="text-center feature-block">
                        <div class="feature-icon-block mb-4">
                            <i class="fa fa-anchor"></i>
                        </div>
                        <h4 class="mb-3"></h4>
                        <p> Безлимитный доступ по двум выделенным высокоскоростным каналам к сети Интернет, бесплатный WI-FI в учебном корпусе колледжа.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="text-center feature-block">
                        <div class="feature-icon-block mb-4">
                            <i class="fa fa-clock"></i>
                        </div>
                        <h4 class="mb-3"> </h4>
                        <p>Стипендии Правительства РФ, Губернатора Ростовской области, предприятий IT-отрасли лучшим студентам.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="text-center feature-block">
                        <div class="feature-icon-block mb-4">
                            <i class="fa fa-dice"></i>
                        </div>
                        <h4 class="mb-3"></h4>
                        <p>Проживание иногородних студентов в благоустроенных общежитиях в центре города</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- / .container -->
    </section>


    <!-- ABOUT
    ================================================== -->
    



    <!-- SERVICES
    ================================================== -->
    <section class="section" id="service">
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Достижения РКСИ
                    </h2>

                </div>
            </div>
            <!-- / .row -->


            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
                    <div class="service-block d-flex">
                        <div class="service-icon ">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="service-content ">
                            <h4><span>HTML</span> web template</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="service-content">
                            <h4><span>Wordpress</span> theme Conversion</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="service-content">
                            <h4><span>PSD</span> web template</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="service-content">
                            <h4>Wordpress <span> Theme Installation</span> </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-bug"></i>
                        </div>
                        <div class="service-content">
                            <h4>Html Css <span>BUG Fixing</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt"></i>
                        </div>
                        <div class="service-content">
                            <h4>24 Hours <span>Dedicated Support </span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section bg-light" id="portfolio">
        <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="portfolio-block">
                        <img src="/web/img/8.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Всероссийская олимпиада профиссионального мастерства обучающихся</h4>
                        </div>
                        <!-- <div class="overlay-content">
                            <a href="single-portfolio.html"><i class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="portfolio-block">
                        <img src="/web/img/9.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Регеональный чемпионат "Молодые профессионалы" (WorldSkills Russia)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="portfolio-block">
                        <img src="/web/img/6.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Международная конгресс-выставка "Global Education-Образование без границ"</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="portfolio-block">
                        <img src="/web/img/7.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Международная олимпиада в сфере информационнных технологий "IT-Планета"</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="portfolio-block">
                        <img src="/web/img/10.png" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Связь-информ</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing
    ================================================== -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="rectangel">
                 <div class="orientation">
                   
                    <!-- Heading -->
                    <h2 class="lg-title mb-2 ">
                        Направления 
                    </h2>   

                    <ul class="orientationName" >
                    <?php foreach ($array as $item): ?>
                        <li><?php echo $item->name ?></li>
                        <?php endforeach ?>
                        </ul>
                  
                        <p class="text-right mb-0" >
                        <a href="#" class="btn btn-primary right ">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>


   

    <!-- Contact
    ================================================== -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-8 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                    <a name="form">Регистрация</a>
                    </h2>

                </div>
            </div>
            <!-- / .row -->
        <?php if(Yii::$app->session->hasFlash('success')): ?>
        <?php echo Yii::$app->session->getFlash('success'); ?>
        <?php endif; ?>
        <?php if(Yii::$app->session->hasFlash('error')): ?>
        <?php echo Yii::$app->session->getFlash('error'); ?>
        <?php endif; ?>
        <div class="row justify-content-center">
                <div class="col-lg-8">
                <div class="contact__form">
        <?php 
             Pjax::begin([]);
             $form = ActiveForm::begin([ 'options' => ['data' => ['pjax' => false]],
    ]);
        ?>

<?= $form->field($model, 'surname') ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'lastname') ?>
<?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
  'mask' => '+7 (999) 999 99 99',]); ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'klass') ?>
<?= $form->field($model, 'orientation')->dropdownList(
    Orientation::find()->select(['name', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Выберети направление']
);?>
<?= $form->field($model, 'GPA') ?>

<?= $form->field($model, 'date') ?>



<div class="form-group">
<?= Html::submitButton('Регистрация', ['class' => 'byt2 but2 but2en btn', 'name' => 'login-button']) ?>
</div>
<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>
        </div>
    </section>
    <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Как пройти к колледжу   
                    </h2>

                </div>
            </div>
            </div>
    <div id="map" style="height: 400px"></div>
  