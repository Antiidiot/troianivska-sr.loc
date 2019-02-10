<?php
namespace frontend\controllers;


use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function setMeta($title=null, $keywords=null, $descriptions=null)
    {
        $this->view->title=$title;
        $this->view->registerMetaTag(['name'=>'keywords','content'=>$keywords]);
        $this->view->registerMetaTag(['name'=>'descriptions','content'=>$descriptions]);
    }

    public function actionIndex()
    {
        $this->setMeta('Троянівська с/р | Головна','Троянівська с/р, Трояніка','Троянівська с/р | Головна, Органи місцевого самоврядування, Офіційний сайт');
        return $this->render('index');
    }

}
