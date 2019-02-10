<?php

namespace frontend\controllers;

class CompositionController extends SiteController
{
  
    public function actionIndex()
    {
        $this->setMeta('afdafdasdfasd');
        return $this->render('index');
    }

	public function actionPresident()
	{
	    $this->setMeta('Троянівська с/р | Голова');
	    return $this->render('president');
	}

    public function actionSecretary()
    {
        $this->setMeta('Троянівська с/р | Секретар');
        return $this->render('secretary');
    }

    public function actionMainBooker()
    {
        $this->setMeta('Троянівська с/р | Головний бухгалтер');
        return $this->render('main-booker');
    }

    public function actionBooker()
    {
        $this->setMeta('Троянівська с/р | Бухгалтер');
        return $this->render('booker');
    }

    public function actionCashier()
    {
        $this->setMeta('Троянівська с/р | Касир');
        return $this->render('cashier');
    }

    public function actionPlanner()
    {
        $this->setMeta('Троянівська с/р | Землеупорядник');
        return $this->render('planner');
    }

    public function actionSocialSpecialist()
    {
        $this->setMeta('Троянівська с/р | Землеупорядник');
        return $this->render('social-specialist');
    }

    public function actionSocialWorker()
    {
        $this->setMeta('Троянівська с/р | Землеупорядник');
        return $this->render('social-worker');
    }
}