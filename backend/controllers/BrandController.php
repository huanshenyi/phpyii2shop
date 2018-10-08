<?php

namespace backend\controllers;

use backend\models\Brand;
use yii\web\Request;
use yii\web\UploadedFile;

class BrandController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    //ブランド挿入
    public function actionAdd()
    {

        $model=new Brand();
        $request = new Request();
        if($request->isPost){
            $model->load($request->post());

            $model->imgFile= UploadedFile::getInstance($model,'imgFile');

            if($model->validate()){
                if($model->imgFile){
                    $fileName='/images/brand/'.uniqid().'.'.$model->imgFile->extension;
                    $model->imgFile->saveAs(\Yii::getAlias('@webroot').$fileName,false);
                    $model->logo=$fileName;
                }
                $model->save();
                \Yii::$app->session->setFlash('success','ブランド挿入成功');
                return $this->redirect(['brand/index']);
            }
        }

        return $this->render('add',['model'=>$model]);

    }
}
