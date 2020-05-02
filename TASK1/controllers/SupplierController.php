<?php

namespace app\controllers;

use Yii;
use app\models\Supplier;
use app\models\SupplierSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\bootstrap\Alert;
use yii\web\ForbiddenHttpException;

/**
 * SupplierController implements the CRUD actions for Supplier model.
 */

class SupplierController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Supplier models.
     * @return mixed
     */

    // public function beforeAction($action){
    //     if (parent::beforeAction($action)){
    //         if (Yii::$app->user->isGuest){
    //             Yii::$app->user->loginUrl = ['/site/login', 'return' => \Yii::$app->request->url];
    //             $this->redirect(Yii::$app->user->loginUrl)->send();
    //         }
    //     }}
    public function actionIndex()
    {
        $searchModel = new SupplierSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        //ifNot Logged in,redirect all user to login
        if(Yii::$app->user->isGuest)
        {
            return Yii::$app->getResponse()->redirect((['site/login']));
        }
        else{
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

    /**
     * Displays a single Supplier model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Supplier model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if( Yii::$app->user->can('create-supplier'))
        {
        $model = new Supplier();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_supplier]);
        }
        else{
        return $this->render('create', [
            'model' => $model,
        ]);
        }
    }else{
        throw new ForbiddenHttpException;
    }
    }

    /**
     * Updates an existing Supplier model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if( Yii::$app->user->can('create-supplier'))
        {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_supplier]);
            }
            else{
            return $this->render('update', [
                'model' => $model,
            ]);
            }
        }
        else{
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Deletes an existing Supplier model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if( Yii::$app->user->can('admin'))
        {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
        }
        else
        {
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the Supplier model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Supplier the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Supplier::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //active record
    public function actionActiveRecordSupplier()
    {
        $supplier = new Supplier();
        
        echo "<div class = 'supplier-index'>".
         Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Success active Record<br>Default Record adalah supplier PT.IndoMusik...',
        ])
        ."</div>";
    
        $supplier->nama_supplier = "PT.IndoMusik";
        $supplier->save();
        return $this->redirect(['view', 'id' => $supplier->id_supplier]);
        
    }

    //active update
    public function actionActiveRecordUpdate()
    {
        $supplier = Supplier::findOne(8); //findOne pada class Supplier (id_supplier = 8) 
        $supplier->nama_supplier = "PT.Berantas korona";
        $supplier->save();
    }

    //action SImpan
    public function actionSimpan()
    {
        $model = new Supplier();    //instantce kelas
        if($model->load(Yii::$app->request->get())&& $Model->save());
        {
            redirect(['view', 'id' => $model->id_supplier]);
        }
    }

    //Action LazyLoading
    public function actionLazyLoad()
    {
        echo "------------------------------------------------<br>";
        $kategories = Supplier::find()->all();
        foreach($kategories as $kategori)
        {
            echo "Supplier :".$kategori->nama_supplier."<br>";
            foreach($kategori->produks as $produk)
            {
                echo Html::a("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp")."=>".$produk->nama_produk."<br>";
            }
            echo "------------------------------------------------<br>";
        }
    }


    public function actionManageSupplier()
    {
        $searchModel = new SupplierSearch();  //instance ke var seacrh dari class parent SupplierSearch
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = new Supplier();
        if( Yii::$app->user->can('admin'))
        {
        return $this->render('tabSub',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
        }
        else
        {
            throw new ForbiddenHttpException;
        }
    }


}
