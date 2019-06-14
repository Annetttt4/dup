<?php

namespace app\controllers;

use Yii;
use app\models\Abiturient;
use app\models\Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\models\Orientation;
use yii\behaviors\TimeStampBehavior;
use yii\db\ActiveRecord;
use yii\filters\AccessControl;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Statistica;
use yii\data\SqlDataProvider;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['view','index','login','static'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        
        ];
    }

    public function actionIndex()
    {
        $searchModel = new Search();
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $searchModel = new Search();
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'searchModel' => $searchModel,
        ]);
    }

    public function actionCreate()
    {
        $model = new Abiturient();

        if ($model->load(Yii::$app->request->post())) {
           
            if($model->validate()){
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

        public function actionStatic(){
 
            $model = new Abiturient();
            
            $static=new Statistica();
 
                $array=$static->CoutAll();
           
            return $this->render('static', [
                'model' => $model,
                'all'=>$array,
                'count'=> $count_all,
            ]);
        }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Abiturient::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
   
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect('index.php?r=site/index');
    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            return $this->goBack();
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    
    }
  
}
