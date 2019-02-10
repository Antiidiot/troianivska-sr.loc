<?php

namespace frontend\controllers;

class DocumentController extends SiteController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegulation()
    {
        return $this->render('regulation');
    }

    public function actionBudget()
    {
        return $this->render('budget');
    }

    public function actionLocal()
    {
        return $this->render('local');
    }

    public function actionProgram()
    {
        return $this->render('program');
    }

    public function actionState()
    {
        return $this->render('state');
    }
}
