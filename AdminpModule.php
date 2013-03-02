<?php

/**
 * AdminpModule
 *
 * @uses      CWebModule
 * @package   YiiAdmin
 * @version   $id$
 * @copyright 2010
 * @author    Firstrow <firstrow@gmail.com>
 * @license   BSD
 */
class AdminpModule extends CWebModule
{

    private $_assetsUrl;
    public $title = '';

    public function init()
    {
        error_reporting(E_ALL | E_STRICT);
//        error_reporting(E_ALL ^ E_NOTICE);

        Yii::app()->clientScript->registerCoreScript('jquery');

//        Yii::app()->setComponents(
//            array(
//                 'errorHandler' => array(
//                     'errorAction' => 'yiiadmin/default/error',
//                 ),
//                 'user'         => array(
//                     'class'          => 'CWebUser',
//                     'stateKeyPrefix' => 'yiiadmin',
//                     'loginUrl'       => Yii::app()->createUrl('yiiadmin/default/login'),
//                 ),
//            )
//        );

        $this->setImport(
            array(
                 'adminp.models.*',
                 'adminp.components.*',
//                 'zii.widgets.grid.CGridColumn',
            )
        );
    }


    public static function t($message)
    {
        return Yii::t('AdminpModule.adminp', $message);
    }

    /**
     * Get list of all modules
     *
     * @access public
     * @return array
     */
    public function getModelsList()
    {
        return array();
    }

//    public function beforeControllerAction($controller, $action)
//    {
//        if(parent::beforeControllerAction($controller, $action))
//        {
//            $this->controller=$controller;
//            $route=$controller->id.'/'.$action->id;
//
//            $publicPages=array(
//                'default/login',
//                'default/error',
//            );
//            if($this->password!==false && Yii::app()->user->isGuest && !in_array($route,$publicPages))
//                Yii::app()->user->loginRequired();
//            else
//                return true;
//        }
//        return false;
//    }

    /**
     * @return string the base URL that contains all published asset files.
     */
    public function getAssetsUrl()
    {
        if($this->_assetsUrl===null)
            $this->_assetsUrl=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.modules.adminp.assets'));
        return $this->_assetsUrl;
    }

    /**
     * @param string the base URL that contains all published asset files.
     */
    public function setAssetsUrl($value)
    {
        $this->_assetsUrl=$value;
    }
}
