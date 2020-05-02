<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\widgets\Alert;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title><?php echo Html::encode($this->title); ?></title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link type="text/css" rel="stylesheet" media="all" href="<?php echo $this->theme->baseUrl; ?>/css/style.css" />
        <link type="text/css" rel="stylesheet" media="all" href="<?php echo $this->theme->baseUrl; ?>/css/form.css" />
        <?php $this->head(); ?>  
   </head>
<body>
<?php $this->beginBody(); ?>
<div id="container">


<div id="page">
       <div id="header">
               <div class="site_title">
                       <h1><a href="http://demo.templatepanic.com" title="WP Theme Demo
home page"><?php echo Html::encode(\Yii::$app->name); ?></a></h1>
                       <div class="description">Here goes your great motto</div>
               </div> <!-- end site_title -->

               <div class="topmenu">
                  <?php echo Menu::widget(array(
                    'options' => array( 'id' => 'menu'),
                    'linkTemplate' => '<a href="{url}" class="menulink">{label}</a>',
                    'items' => array(
                      array('label' => 'Home', 'url' => array('/home/index')),
                      array('label' => 'Produk', 'url' => array('/produk/index')),
                      array('label' => 'Kategori', 'url' => array('/kategori/index')),
                      array('label' => 'Supplier', 'url' => array('/supplier/index')),
                      array('label' => 'About', 'url' => array('/home/about')),
                      array('label' => 'Contact', 'url' => array('/site/contact')),
                      Yii::$app->user->isGuest ?
                        array('label' => 'Login', 'url' => array('/site/login')) :
                        array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
                    ),
                  )); ?>
               </div> <!-- end topmenu -->
       </div> <!-- end header -->


        <div class="mainwrap">
            <div class="content">
                <?php echo $content; ?>
            </div>

       </div><!-- end columns_wrapper -->


       <div id="footer">

               <div class="footer-left">
                    <p>
                        Design <a href="http://www.game-puzzle.info/">Tetsuo</a><br />
                        Adopted by <a href="http://www.mehesz.net">mehesz<span style="color:#f00;">.</span>net</a>
                    </p>
               </div>

               <div class="footer-right">
                       <p>&#169; 2013 <a href="http://demo.templatepanic.com/" title="WP
Theme Demo" >WP Theme Demo</a></p>
               </div>

       </div> <!-- end footer -->


</div> <!-- end page -->

</div>

</body>
</html>
