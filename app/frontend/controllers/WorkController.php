<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.12.2018
 * Time: 22:42
 */

namespace frontend\controllers;


class WorkController extends SiteController
{

    public function actionGraphs()
    {
        return $this->render('graphs');
    }

    public function actionAppeal()
    {
        return $this->render('appeal');
    }

    public function actionAdministrative()
    {
        return $this->render('administrative');
    }
}