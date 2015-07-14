<?php

require_once('functions.php');

$menu_items = [];
$menu_items[] = ['Start', '/', 'home'];
$menu_items[] = ['Anmälan', '/anmalan', 'anmalan'];
$menu_items[] = ['Startlista', '/startlista', 'startlista'];
//$menu_items[] = ['Resultat', '/resultat', 'resultat'];

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Skånes 6-timmarslopp</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo Roots\Sage\Assets\asset_path('styles/main.css'); ?>">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta property="og:title" content="Skånes 6-timmarslopp - 29/8 2015" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://folbert.com/skane6h/" />
  <meta property="og:image" content="http://folbert.com/skane6h//dist/images/6hloppkarta.jpg" />

  <script type="text/javascript">var switchTo5x=true;</script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher: "567d4c72-b782-42e0-9705-4c16ccadee19", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script></script>

</head>
<body>

  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php /*<span class="navbar-brand">Skånes 6-timmarslopp</span>*/ ?>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <?php

            $menu_html = '';

            foreach($menu_items AS $menu_item) {

              $menu_html .= '<li';

              if($page_id === $menu_item[2]) {
                $menu_html .= ' class="active"';
              }

              $menu_html .= '><a href="' . $menu_item[1] . '">';

              if($page_id === $menu_item[2]) {
                $menu_html .= ' <span class="sr-only">(current)</span>';
              }

              $menu_html .= $menu_item[0];
              $menu_html .= '</a></li>';

            }

            echo $menu_html;

          ?>
        </ul>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>