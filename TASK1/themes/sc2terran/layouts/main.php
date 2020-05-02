<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo Html::encode($this->title); ?></title>
<link href="<?php echo $this->theme->baseUrl; ?>/css/style1.css" rel="stylesheet" type="text/css">

<?php $this->head(); ?>
</head>

<body>
<?php $this->beginBody(); ?>
<div id="everything">

    <div id="header">
      <h1><?php echo Html::encode(\Yii::$app->name); ?></h1>
    </div>
    <div id="middle">
      <div id="left_column">
       	  <div id="navigation">
            <?php echo Menu::widget(array(
              'options' => array('class' => 'nav'),
              'items' => array(
                array('label' => 'Home', 'url' => array('/site/index')),
                array('label' => 'About', 'url' => array('/site/about')),
                array('label' => 'Contact', 'url' => array('/site/contact')),
                Yii::$app->user->isGuest ?
                  array('label' => 'Login', 'url' => array('/site/login')) :
                  array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
              ),
            )); ?>
          </div>
      </div>
        <div id="middle_column">
		  <div class="date_break">News for 01/02/07</div>
          <div class="post">
            <?php echo $content; ?>
          </div>
          <div class="post">
            <h1>Title</h1>
            <div class="post_body">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam non  urna. Phasellus id diam at diam fermentum pulvinar. Donec quis nibh non  nibh semper aliquet. Cras sed nisl. Pellentesque habitant morbi  tristique senectus et netus et malesuada fames ac turpis egestas.  Vestibulum ultricies, nisi at mattis facilisis, dolor arcu feugiat  velit, eu vehicula leo justo at neque. Nunc quis augue id dolor varius  tristique.</p>
              <ul>
              <li>Item1</li>
              <li>Item2</li>
              <li>Item3</li>
              </ul>
            </div>
		    <div class="post_info"><div class="postedby">Posted by: Author</div><div class="timestamp">1:00PM 01/02/07</div></div>
          </div>
          <div class="post">
            <h1>Title</h1>
            <div class="post_body"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam non  urna. Phasellus id diam at diam fermentum pulvinar. Donec quis nibh non  nibh semper aliquet. Cras sed nisl. Pellentesque habitant morbi  tristique senectus et netus et malesuada fames ac turpis egestas.  Vestibulum ultricies, nisi at mattis facilisis, dolor arcu feugiat  velit, eu vehicula leo justo at neque. Nunc quis augue id dolor varius  tristique. Ut tempor lacinia justo. Vestibulum eu magna. Nullam porta.  Duis hendrerit ornare magna. Suspendisse potenti. Phasellus et eros.  Integer et nibh. Pellentesque ac felis a nibh porttitor fringilla.  Fusce imperdiet arcu vitae mauris.</p></div>
		    <div class="post_info"><div class="postedby">Posted by: Author</div><div class="timestamp">1:00PM 01/02/07</div></div>
          </div>
          <div class="post">
            <h1>Title</h1>
            <div class="post_body"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam non  urna. Phasellus id diam at diam fermentum pulvinar. Donec quis nibh non  nibh semper aliquet. Cras sed nisl. Pellentesque habitant morbi  tristique senectus et netus et malesuada fames ac turpis egestas.  Vestibulum ultricies, nisi at mattis facilisis, dolor arcu feugiat  velit, eu vehicula leo justo at neque. Nunc quis augue id dolor varius  tristique. Ut tempor lacinia justo. Vestibulum eu magna. Nullam porta.  Duis hendrerit ornare magna. Suspendisse potenti. Phasellus et eros.  Integer et nibh. Pellentesque ac felis a nibh porttitor fringilla.  Fusce imperdiet arcu vitae mauris.</p></div>
		    <div class="post_info"><div class="postedby">Posted by: Author</div><div class="timestamp">1:00PM 01/02/07</div></div>
          </div>
        </div>
        <div id="right_column">
       	  <div class="box">Poll:</div>
            <div class="box">Features:</div>
          <div class="box">Links:</div>
        </div>
        <br clear="all">
    </div>
	<div id="footer">
    <div id="subnav"><a href="#">SubNav1</a> | <a href="#">SubNav2</a> | <a href="#">SubNav3</a> | <a href="#">SubNav4</a> | <a href="#">SubNav5</a> | <a href="#">SubNav6</a></div>
    <span class="copyright">StarCraft&reg; II and Blizzard Entertainment&reg; are all trademarks or registered trademarks of Blizzard Entertainment in the United States and/or other countries. <br> These terms and all related materials, logos, and images are copyright &copy; Blizzard Entertainment. This site is in no way associated with or endorsed by Blizzard Entertainment&reg;.</span></div>
    
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>