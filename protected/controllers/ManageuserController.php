<?php

class ManageuserController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionManage(){
            
           # $this->layout='//layouts/main';
           
           
           #$this->layout=FALSE;
           #echo $this->render('manage',"",TRUE); 
        
            $this->render('manage',"",FALSE);
        }
        
        public function actionView() {
            $this->layout=FALSE;
             echo $this->render('viewprofile',"",TRUE); 
                   
        }





        // Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}