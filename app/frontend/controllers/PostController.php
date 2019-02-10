<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.11.2018
 * Time: 23:05
 */

namespace frontend\controllers;


class PostController extends SiteController
{

    public function actionNews()
    {
        $this->setMeta('Троянівська с/р | Новини');
        return $this->render('news');
    }

    public function actionAdvertisement()
    {
        $this->setMeta('Троянівська с/р | Оголошення');
        return $this->render('advertisement');
    }

}