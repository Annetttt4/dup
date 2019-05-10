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

/**
 * AbiturientController implements the CRUD actions for Abiturient model.
 */
class UserController extends Controller
{
   // public $layout='basic';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
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

    /**
     * Lists all Abiturient models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Search();
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Abiturient model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $searchModel = new Search();
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'searchModel' => $searchModel,
        ]);
    }



        public function actionStatic(){
            return $this->render('static');
        }
  
    /**
     * Finds the Abiturient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Abiturient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Abiturient::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }


       public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            return $this->redirect('index.php?r=abiturient/index');
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    

}
