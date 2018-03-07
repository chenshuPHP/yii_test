<?php
/**
 * @author: mojifan [<https://github.com/mojifan>]
 */
namespace frontend\controllers;
use yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\UploadForm;
use yii\web\MethodNotAllowedHttpException;
use yii\web\NotFoundHttpException;
/**
 * 基类
 * @package backend\components
 */
class BaseController extends Controller{
    /**
     * @inheritdoc
     */

    protected function getFirstError($errors=array()){

        foreach ($errors as $key=>$val){
            $errors=$val['0'];
        }
        return $errors;

    }



}