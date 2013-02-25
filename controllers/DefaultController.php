<?php

class DefaultController extends AdminController
{

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $this->render(
            'index',
            array(
                 'title'  => AdminpModule::t('Administrators Panel'),
                 'models' => $this->module->modelsList,
            )
        );
    }

//    public function actionError()
//    {
//        if($error=Yii::app()->errorHandler->error)
//        {
//            if(Yii::app()->request->isAjaxRequest)
//                echo $error['message'];
//            else
//                $this->render('error', $error);
//        }
//    }


}