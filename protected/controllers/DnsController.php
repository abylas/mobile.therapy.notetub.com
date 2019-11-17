<?php

class DnsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

    public function getArecord()
    {
        $arec = $_POST['Dns']['arecord'];

        $tab = "\t";
        $threetab = "\t\t\t";
        $in = 'IN';
        $a = 'A';
        $semicolon = ';';
        $ctag = "CNAME";

        $split_arec_lines = explode("\n", $arec);
        $lines = "";

        foreach($split_arec_lines as $value) {
            $val_split = explode(",", $value);
            if (count($val_split) == 0) {
                $lines = $lines . "\n";
                continue;
            } else {
                $domain = $val_split[0];
                $ip = isset($val_split[1]) ? $val_split[1] : "  ";
                $arec_final = $domain . $threetab . $in . $tab . $a . $tab . $ip;
                if(isset($val_split[1])) {
                    $lines = $lines . $arec_final . "\n";
                }
                else
                {
                    $lines = $lines . "\n";
                }
            }
        }
        return $lines;
    }

    public function getCname()
    {
        $cname = $_POST['Dns']['cname'];

        $tab = "\t";
        $threetab = "\t\t\t";
        $in = 'IN';
        $a = 'A';
        $semicolon = ';';
        $ctag = "CNAME";

        $split_cname_lines = explode("\n", $cname);
        $lines = "";

        foreach($split_cname_lines as $value) {
            $val_split = explode(",", $value);
            if (count($val_split) == 0) {
                $lines = $lines . "\n";
                continue;
            } else {
                $domain = $val_split[0];
                $ip = isset($val_split[1]) ? $val_split[1] : "  ";
                $cname_final = $domain . $threetab . $in . $tab . $ctag . $tab . $ip;
                if(isset($val_split[1])) {
                    $lines = $lines . $cname_final . "\n";
                }
                else
                {
                    $lines = $lines . "\n";
                }
            }
        }
        return $lines;
    }

    public function getMicro()
    {
        $micro = $_POST['Dns']['microservice'];

        $tab = "\t";
        $threetab = "\t\t\t";
        $in = 'IN';
        $a = 'A';
        $semicolon = ';';
        $ctag = "CNAME";

        $split_micro_lines = explode("\n", $micro);
        $lines = "";

        foreach($split_micro_lines as $value) {
            $val_split = explode(",", $value);
            if (count($val_split) == 0) {
                $lines = $lines . "\n";
                continue;
            } else {
                $domain = $val_split[0];
                $ip = isset($val_split[1]) ? $val_split[1] : "  ";
                $micro_final = $domain . $threetab . $in . $tab . $ctag . $tab . $ip;
                if(isset($val_split[1])) {
                    $lines = $lines . $micro_final . "\n";
                }
                else
                {
                    $lines = $lines . "\n";
                }
            }
        }
        return $lines;
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Dns;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dns']))
		{
			$model->attributes=$_POST['Dns'];


			$model->arecord =  $this->getArecord();

			if(isset($_POST['dns']['cname'])) {
                $model->cname = $this->getCname();
            }
            if(isset($_POST['dns']['microservice'])) {
                $model->microservice = $this->getMicro();
            }

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dns']))
		{
			$model->attributes=$_POST['Dns'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Dns');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dns('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dns']))
			$model->attributes=$_GET['Dns'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Dns::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dns-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
