<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.12.2018
 * Time: 23:27
 */

namespace frontend\controllers;


class GeneralController extends SiteController
{

    public function actionHistory()
    {
        return $this->render('history');
    }

    public function actionInfrastructure()
    {
        return $this->render('infrastructure');
    }

}