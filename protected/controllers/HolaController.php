<?php 

class HolaController extends Controller
{
	public function actionIndex()
	{
		#$model=CActiveRecord::model("Users")->findAll();    /* Sin definir el metodo en el modelo */
		$model=Users::model()->findAll();					 /* Definiendo el metodo en el modelo */	
		$twitter="@jorechp";
		$this->render("index", array("model"=>$model,"twitter"=>$twitter));
		
	}


}
