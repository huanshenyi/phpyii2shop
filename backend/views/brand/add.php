<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'name');
echo $form->field($model,'intro')->textarea();
echo $form->field($model,'imgFile')->fileInput();
echo $form->field($model,'sort');
echo $form->field($model,'status')->radioList([1=>'正常',0=>'隠す']);
echo \yii\bootstrap\Html::submitButton('提出',['class'=>'btn btn-info']);

\yii\bootstrap\ActiveForm::end();