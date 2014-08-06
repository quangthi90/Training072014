<!DOCTYPE html>




<html style="" id="d" class="wide-ly  gecko ff3 win js js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" xml:lang="en" lang="en" dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>

<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/bootstrap-reponsive.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/css.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/cached_fcd11c7a3f81dc721b4715a0bfb8e17b_rgmin.css" />
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/on-dark.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/widget002.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/template.css" />
<script type="text/javascript" src="catalog/view/javascript/myscript.js"></script>

<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/tabs.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" src="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<script type="text/javascript" src="catalog/view/javascript/myscript.js"></script>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<!--[if IE 7]> 
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/Topic 7/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php if ($stores) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
<?php foreach ($stores as $store) { ?>
$('body').prepend('<iframe src="<?php echo $store; ?>" style="display: none;"></iframe>');
<?php } ?>
});
//--></script>
<?php } ?>
<?php echo $google_analytics; ?>
</head>
<!-- <?php echo $body_class; ?> -->
<body class="bx verimg  col-n revo-pfs">
<iframe src="R.Gen%20-%20OpenCart%20Modern%20Store%20Design_files/hub.htm" style="position: absolute; top: -9999em; width: 10px; height: 10px;" name="twttrHubFrameSecure" tabindex="0" scrolling="no" allowtransparency="true" id="twttrHubFrameSecure" frameborder="0"></iframe><iframe src="R.Gen%20-%20OpenCart%20Modern%20Store%20Design_files/hub_002.htm" style="position: absolute; top: -9999em; width: 10px; height: 10px;" name="twttrHubFrame" tabindex="0" scrolling="no" allowtransparency="true" id="twttrHubFrame" frameborder="0"></iframe>
<div id="container" class="menu-bx">
<div id="header-wrapper" class="head0 ">
  <header id="header">  
      <div id="welcome">
        <?php if (!$logged) { ?>
        <?php echo $text_welcome; ?>
        <?php } else { ?>
        <?php echo $text_logged; ?>
        <?php } ?>
      </div>
      <div id="search">
        <div class="button-search"></div>
        <span class="search-box">
        <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
        </span>
      </div>
  
    <?php echo $cart; ?>

    <?php echo $currency; ?>
    <div class="links">
      <a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a>
      <a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a>
      <a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a>
      <a href="<?php echo $account; ?>"><?php echo $text_account; ?></a>  
    </div>
  </div>
</div>
<!-- </div> -->    
</header>

  <!-- <?php echo $language; ?> -->
<?php if ($categories) { ?>

<div class="navigation-bar no-home" style="opacity: 1;">
<div style="width: 163px; opacity: 1;" class="store-logo"> -->
    <a href="http://localhost/training/index.php?route=common/home" id="logo" style="margin-left: -81.5px;
margin-top: -17.5px;">
    <img src="http://rgenmodernstore-demo1.rgenesis.com/image/data/demo01_images/logo.png" title="R.Gen - OpenCart Modern Store Design" alt="R.Gen - OpenCart Modern Store Design" height="35" width="163">       </a>
  </div>
<nav style="width: 987px;" id="menu">
 <span><span class="menu-name">Menu</span></span>
    <ul class="menu-data"> <!-- vd: menu-women sub -->
    <?php foreach ($categories as $category) { ?>
    <li class="<?php //echo$bien ?> sub">
    <a class="top-lvl" href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
      <?php if ($category['children']) { ?>
      <div class="sub-menu <?php// echo $bien; ?>"> <!-- $bien: menu-html-wrp -->
        <div class="menu-html menu-mega">
          <?php for ($i = 0; $i < count($category['children']);) { ?>
          <ul>
            <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
            <?php for (; $i < $j; $i++) { ?>
            <?php if (isset($category['children'][$i])) { ?>
            <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
            <?php } ?>
            <?php } ?>
          </ul>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </li>
    <?php } ?>
  </ul>
          <div class="wrapper"></div>
</nav>


<?php } ?>
<?php if ($error) { ?>
    <div class="warning"><?php echo $error ?><img src="catalog/view/theme/Topic 7/image/close.png" alt="" class="close" /></div>
<?php } ?>
<div id="notification"></div>

