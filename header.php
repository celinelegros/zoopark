<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Zoopark</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.min.css" type="text/css" />
</head>
<body>
  <nav class=" ">
    <div class="search-bar nav-wrapper lighten-1 container">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  <nav class="white nav-princip" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php bloginfo('url'); ?>" class="brand-logo"><h1 class="brand"><?php bloginfo('name'); ?>/<em><?php bloginfo('description'); ?></em></h1></a>
      <ul class="right hide-on-med-and-down">
        <?php wp_nav_menu(array(
            'container'         =>  '',
            'theme_location'    =>  'main_nav',
            'fallback_cb'       =>  false
        )); ?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <?php wp_nav_menu(array(
            'container'         =>  '',
            'theme_location'    =>  'main_nav',
            'fallback_cb'       =>  false
        )); ?>     
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>