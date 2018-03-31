<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="CSS/main.css" rel="stylesheet">
    <link href="JS/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<header>    
<div class="container-fluid">
    <div class="row">
    
        <div class="col-xs-3 main-logo">
            <a href="index.php?page=index">
    <img src="https://s-media-cache-ak0.pinimg.com/originals/f0/25/2a/f0252a320059d48a8ac22a0eedfefe44.png">
</a>
</div>
        <div class="col-xs-9">
            <ul class="main-menu">
                <li class="main-menu-item <?php echo $page == 'index' ? 'active' : '';?>">
                <a href="index.php?page=index"> Home</a>
                </li>
                <li class="main-menu-item <?php echo $page == 'Articles' ? 'active' : '';?>">
                <a href="index.php?page=Articles"> Articles</a>
                </li>
                <li class="main-menu-item <?php echo $page == 'Chat' ? 'active' : '';?>">
                <a href="index.php?page=Chat"> Chat</a>
                </li>
                <li class="main-menu-item <?php echo $page == 'Register' ? 'active' : '';?>">
                <a href="index.php?page=Register"> Registration</a>
                </li>
            </li>
            <li class="main-menu-item <?php echo $page == 'About_Us' ? 'active' : '';?>">
            <a href="index.php?page=About_Us"> About Us</a>
            </li>


        </div>
</header>