<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<title>Login</title>
<link href="http://52.26.18.77/css/reset.css" rel="stylesheet" media="all">
<link href="/css/style.css?=1513198239" rel="stylesheet" media="all">
<link href="/css/logRegStyle.css?=1504722299" rel="stylesheet" media="all">
<link href="http://52.26.18.77/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!-- Internet Explorer HTML5 enabling code: -->
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<style type="text/css">
.clear { zoom: 1; display: block; }
</style>
<![endif]-->


</head>

<body >

<section class="loginSec">
	<!--Logo start-->
	<section class="logo">
		<figure><?php echo Html::img('@web/images/OrangeLien_logo_title_white.png') ?>
</figure>
    </section>
    <!--Logo end-->
    
    <!--Login header start-->
    <section class="logiheader">
    	<section class="profilePic"><figure><?php echo Html::img('@web/images/OrangeLien_logo_orange.png') ?></figure></section>
        <h1>Login</h1>
    </section>
    <!--Login header end-->
        <!--Login form start-->
    <section class="formSec">
    	<div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </form>
         <!--Forgot password start-->
        <section class="loginFp">
            
            <section class="clear"></section>
        </section>
        <!--Forgot password end-->
    </section>
    <!--Login form end-->
</section>
<div id="bottomseal">
    <img src="/images/comodo_secure_seal.png">
</div>
<script src="http://52.26.18.77/js/jquery.js"></script>
<script src="/js/custom.js?=1513198239"></script>
<script src="http://52.26.18.77/js/validate.js"></script>
</body>
</html>