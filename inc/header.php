<?php
    date_default_timezone_set('Asia/Tokyo');
?>

<!doctype html>
<html class="no-js" lang="ja">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="theme-color" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="./meta/icon.png">
    <link rel="shortcut icon" href="./meta/favicon.ico">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slidein.css">
    <link rel="stylesheet" href="./css/drawer.css">

    <!-- 各種css -->
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/top.css">
</head>
<body>
    <div class="container">
        <header>
            <section class="innerHeader">
                <a href="">logo</a>
                <ul class="pc-navi">
                    <li><a href="">ホーム</a></li>
                </ul>
            </section>
        </header>

        <!-- モバイルのみドロワーメニュー -->
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul>
                <li><a href="">ホーム</a></li>
            </ul>
        </div>
        <!-- /モバイルのみドロワーメニュー -->