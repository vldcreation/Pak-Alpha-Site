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
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?></title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/files/main_style.css' title='wsite-theme-css' />
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
  <?php $this->beginBody(); ?>
<div id="header-wrap">
  <div id="header-top">
    <table id="header">
      <tr>
        <!-- <td id="logo"><span class='wsite-logo'><a href='#'><span id="wsite-title"></span></a></span></td> -->
        <td id="header-right">
          <table>
            <tr>
              <td class="phone-number"></td>
              <td class="social"></td>
              <td class="search"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <div style="clear:both"></div>
    <div id="navigation">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'nav',
        ],
    ]);
    $navitem =[
        ['label' => 'Home', 'url' => ['/home/index']],
        ['label' => 'Produk', 'url' => ['/produk/index']],
        ['label' => 'Kategori', 'url' => ['/kategori/index']],
        ['label' => 'Supplier', 'url' => ['/supplier/index']],
        ['label' => 'About', 'url' => ['/home/about']],
    ];
    
        if(Yii::$app->user->isGuest){
                array_push($navitem, ['label' => 'Login', 'url' => ['/site/login']] ,['label' => 'Register', 'url' => ['/site/register']]);
            
            }
            else{
                array_push($navitem, '<li>'. Html::beginForm(['/site/logout'], 'post'). Html::submitButton('Logout ('.Yii::$app->user->identity->username .')',['class' => 'btn btn-link logout']).Html::endForm().'</li>');
        }

        // if( Yii::$app->user->isGuest )
        // {
        //     return Yii::$app->getResponse()->redirect(array(Url::to(['site/login'],302)));
        // }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $navitem
    ]);
    NavBar::end();
    ?>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="main-wrap">
  <div id="main">
    <div id="banner">
      <div class="wsite-header"></div>
    </div>
    <div id="content">
      <div id='wsite-content' class='wsite-not-footer'>
        <?php echo $content; ?>
</div>

      <div class="clear"></div>
    </div>
  </div>
</div>
<div id="footer-wrap">
  <div id="footer">
  <p class="pull-left">&copy; 11319028 | VLD <?= date('Y') ?></p>
    <?php echo Html::encode(\Yii::$app->name); ?>

    <div class="clear"></div>
  </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>