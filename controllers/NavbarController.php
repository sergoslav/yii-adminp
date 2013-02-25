<?php

class NavbarController extends AdminController
{

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $this->render(
            'index'
        );
    }

}