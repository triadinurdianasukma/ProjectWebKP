<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>asset/css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- JS Theme -->
    <script type="text/javascript" href="<?=base_url()?>asset/js/menuutama.js"></script>
</head>

<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
            MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('menuutama');?>">
                Administrator
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
            <form class="navbar-form navbar-left" method="GET" role="search">
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown ">
                    <a href="<?php echo site_url('login/logout');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Logout
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>      <div class="container-fluid main-container">
        <div class="col-md-3 sidebar">
            <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
    <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo site_url('menuutama');?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="<?php echo site_url('inputbarang');?>"><span class="glyphicon glyphicon-plus"></span> Input Komputer Baru</a></li>
                    <li><a href="<?php echo site_url('kelola');?>"><span class="glyphicon glyphicon-pencil"></span> Kelola Data Komputer</a></li>
                    <li><a href="<?php echo site_url('laporan');?>"><span class="glyphicon glyphicon-save-file"></span> Laporan</a></li>
                </ul>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </div>
</div>          
    </div>
        <div class="col-md-9">
        <div class="panel panel-default">
         <div class="panel-heading" align="center"> Dashboard </div>
        <div class="panel-body" align="center"> Selamat datang di halaman dasboard </div>
        </div> 
    </div> 
</div> 
</body> 
</html>