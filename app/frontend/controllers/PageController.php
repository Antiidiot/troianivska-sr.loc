<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.11.2018
 * Time: 21:09
 */

namespace frontend\controllers;


class PageController extends SiteController
{

    public function actionGallery()
    {
        $this->setMeta('Троянівська с/р | Фото-Галерея');
        return $this->render('gallery');
    }

    public function actionContact()
    {
        $this->setMeta('Троянівська с/р | Контакти');
        return $this->render('contact');
    }

    public function actionAbout()
    {
        $this->setMeta('Троянівська с/р | Про нас');
        return $this->render('about');
    }

}