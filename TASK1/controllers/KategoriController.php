<?php

namespace app\controllers;

use Yii;
use app\models\Kategori;
use app\models\KategoriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\bootstrap\Alert;
use yii\web\ForbiddenHttpException;

/**
 * KategoriController implements the CRUD actions for Kategori model.
 */
class KategoriController extends Controller
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
     * Lists all Kategori models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KategoriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

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
     * Displays a single Kategori model.
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
     * Creates a new Kategori model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if( Yii::$app->user->can('admin'))
        {
            $model = new Kategori();

            if ($model->load(Yii::$app->request->get()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_kategori]);
            }
            else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
    }
    else{
        throw new ForbiddenHttpException;
    }
    }

    /**
     * Updates an existing Kategori model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if( Yii::$app->user->can('admin'))
        {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_kategori]);
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
     * Deletes an existing Kategori model.
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
        else{
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the Kategori model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kategori the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kategori::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //action Simpan pada active Form nantinya "kategori/simpan"
    public function actionSimpan()
    {
        $model = new Kategori();

        if($model->load(Yii::$app->request->get()) && $model->save())
        {
            return $this->redirect(['view', 'id' => $model->id_kategori]);
        }
    }

    public function actionActiveRecordKategori()
    {
        $kategori = new Kategori();
        
        echo "<div class = 'kategori-index'>".
         Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Success active Record<br>Default Record adalah kategori obat obatan...',
        ])
        ."</div>";
    
        $kategori->nama_kategori = "Obat-Obatan";
        $kategori->deskripsi = "Perlindungan untuk melawan Penyakit";
        $kategori->save();
        return $this->redirect(['view', 'id' => $kategori->id_kategori]);
        
    }

    public function actionActiveRecordUpdate()
    {
        $kategori = Kategori::findOne(1); //findOne pada class Kategori (id_kategori = 1) 
        $kategori->nama_kategori = "Sipanganon";
        $kategori->save();
    }

  
    //Lazy Load
    public function actionLazyLoad()
    {
        echo "------------------------------------------------<br>";
        $kategories = Kategori::find()->all();
        foreach($kategories as $kategori)
        {
            echo "Kategori :".$kategori->nama_kategori."<br>";
            foreach($kategori->produks as $produk)
            {
                echo Html::a("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp")."=>".$produk->nama_produk."<br>";
            }
            echo "------------------------------------------------<br>";
        }
    }

    //ManageCategori
    public function actionManageKategori()
    {
        $searchModel = new KategoriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = new Kategori();
       if( Yii::$app->user->can('admin'))
        {
            return $this->render('tab',[
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'model' => $model,
        ]);
        }
        else{
            throw new ForbiddenHttpException;
        }
    }

    


}
