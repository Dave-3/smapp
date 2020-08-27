<?php 
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use common\models\LoginForm;
use frontend\models\SignupForm;

$model = new LoginForm();
$signupmodel = new SignupForm()

?>

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?= Url::to(['site/index'])?>"><img src="<?= Yii::$app->request->baseUrl;?>/images/shamba-map.png" data-sticky-logo="<?= Yii::$app->request->baseUrl;?>/images/shamba-map.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li>
							<a class="current" href="<?= Url::to(['site/index'])?>">Home</a>
						</li>

						<li>
							<a href="#">Buy</a>
						</li>

						<li>
							<a href="#">Sell</a>
						</li>

						<li>
							<a href="#">Advertise</a>
						</li>
						<li>
							<a href="#">Sellers</a>
						</li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			 <!-- Right Side Content -->
           			 <?php if (Yii::$app->user->isGuest){?>
            			<div class="right-side">
            				<div class="header-widget">
            					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
            					<a href="#" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
            				</div>
            			</div>
            			<?php }else if(Yii::$app->user){?>
                            			<div class="right-side">
                            				<div class="header-widget">
                            					<!-- User Menu -->
                            					<div class="user-menu">
                            						<div class="user-name"><span><img src="<?= Yii::$app->request->baseUrl;?>/images/dashboard-avatar.jpg" alt=""></span>Hi, Tom!</div>
                            						<ul>
                            							<li><a href="<?= Url::to(['dashboard/panel'])?>"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                            							<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                            							<li><a href="#"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
                            							<li><a href="<?= Url::to(['site/logout'])?>" data-method="post"> <i class="sl sl-icon-power"></i> Logout</a></li>
                            						</ul>
                            					</div>
                            					<a href="<?= Url::to(['dashboard/add-listing'])?>" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
                            				</div>
                            			</div>
						<?php }?>
					<!-- Right Side Content / End -->
			
			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
						 <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                            <?= $form->field($model, 'username')->textInput(['class'=>'im im-icon-Male','autofocus' => true]) ?>
            
                            <?= $form->field($model, 'password')->passwordInput() ?>
            
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            
                            <div style="color:#999;margin:1em 0">
                                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                                <br>
                                Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                            </div>
            
                            <div class="form-group">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
            
                        <?php ActiveForm::end(); ?>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">
						 <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                            <?= $form->field($signupmodel, 'username')->textInput(['autofocus' => true]) ?>
            
                            <?= $form->field($signupmodel, 'email') ?>
            
                            <?= $form->field($signupmodel, 'password')->passwordInput() ?>
            
                            <div class="form-group">
                                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            </div>
            
                        <?php ActiveForm::end(); ?>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->
		</div>
	</div>
	<!-- Header / End -->

</header>
