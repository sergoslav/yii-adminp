<?php

class DefaultController extends AdminController
{
    protected $_viewPath = '';
    protected $_viewAttributes = array();


    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        Yii::log(__METHOD__);
        $this->_renderLayout();
    }

    public function getAdminPanelTitle() {
        return AdminpModule::t($this->module->title);
    }


    protected function _renderLayout() {
        $this->render(
            '../dashboard/index',
            array(
                'test'  => 'pppppppp',
            )
        );
    }

    public function setView() {

    }

    public function getView() {
        return $this->_viewPath;
    }

    public function setViewAttributes() {

    }

    public function getViewAttributes() {
        return $this->_viewAttributes;
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