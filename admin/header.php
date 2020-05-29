<?php

if(isset($_SESSION['adminbilgi']))
    {
  echo '<meta HTTP-EQUIV="REFRESH" content="0; url=../index.php">';
    }
    else
    {
  
    }
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
 Wod-Hack bakanlarfake Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
         WodHack
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">Anasayfa</i>
              <p>Anasayfa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./ayarlar.php">
              <i class="material-icons">Ayarlar</i>
              <p>Ayarlar</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./loglar.php">
              <i class="material-icons">Loglar</i>
              <p>Loglar</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./hakkimizda.php">
              <i class="material-icons">Hakkimizda</i>
              <p>Hakkimizda</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="https://www.hakankaraarslan.com.tr/">
              <i class="material-icons">İletisim</i>
              <p>İletisim</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="https://www.instagram.com/hakan.karaarslan">
              <i class="material-icons">Wodhack</i>
              <p>Wodhack</p>
            </a>
          </li>

          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Anasayfa</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
           
         
           
            </ul>
          </div>
        </div>
      </nav>
      