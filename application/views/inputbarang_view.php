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
            <a class="navbar-brand" href="#">
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

    </nav>      
    <div class="container-fluid main-container">
        <div class="col-md-3 sidebar">
            <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
    <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
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
        <div class="col-md-9 content">
              <div class="panel panel-default">
    <div class="panel-heading">
  <div class="well well-sm">
                <form class="form-horizontal" action="inputbarang/tambahbarang" method="post">
                    <fieldset>
                        <legend class="text-center header">Input Barang</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Username</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="username" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>No computer</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="no_computer" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Operating Sistem</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="os" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keadaan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keadaan" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Gambar</label></span>
                            <div class="col-md-8">
                                 <a href="./uploadgambar/showform" target="_blank">Klik Disini untuk Upload Gambar</a> 
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Owner</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="owner" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Lokasi</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="lokasi" type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <legend class="text-center header">Hardware</legend>
                        <br>

                        <legend class="text-left header">Processor</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_processor" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_processor" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_prosesor" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_prosesor" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Motherboard</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_motherboard" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_motherboard" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_motherboard" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_motherboard" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">RAM 1</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_ram1" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_ram1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_ram1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_ram1" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">RAM 2</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_ram2" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_ram2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_ram2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_ram2" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">VGA Card 1</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_vga1" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_vga1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_vga1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_vga1" type="text" class="form-control">
                            </div>
                        </div>  


                        <br>

                        <legend class="text-left header">VGA Card 2</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_vga2" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_vga2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_vga2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_vga2" type="text" class="form-control">
                            </div>
                        </div>  

                        <br>

                        <legend class="text-left header">HDD 1</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_hdd1" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_hdd1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_hdd1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_hdd1" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">HDD 2</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_hdd2" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_hdd2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_hdd2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_hdd2" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Optical Drive 1</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_optical1" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_optical1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_optical1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_optical1" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Optical Drive 2</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_optical2" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_optical2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_optical2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_optical2" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Network Card</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_network" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_network" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_network" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_network" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Sound Card</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_sound" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_sound" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_sound" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_sound" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Keyboard</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_keyboard" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_keyboard" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_keyboard" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_keyboard" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Mouse</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_mouse" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_mouse" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_mouse" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_mouse" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Monitor</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_monitor" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_monitor" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_monitor" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_monitor" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Printer 1</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_printer1" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_printer1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_printer1" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_printer1" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Printer 2</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_printer2" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_printer2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_printer2" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_printer2" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Printer 3</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_printer3" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_printer3" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_printer3" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_printer3" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Scanner</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_scanner" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_scanner" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_scanner" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_scanner" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">IP Address</legend>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Alamat</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="alamat_ip" type="text" class="form-control">
                            </div>
                        </div>

                       

                        <br>
                        <br>

                         <legend class="text-center header">Software</legend>

                         <br>

                          <legend class="text-left header">Microsoft Office</legend>

                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_office" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_office" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Symantec</legend>

                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_symantec" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_symantec" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Radmin</legend>

                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_radmin" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_radmin" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Internet Explorer</legend>

                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_ie" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_ie" type="text" class="form-control">
                            </div>
                        </div>

                        <br>

                        <legend class="text-left header">Mozilla Firefox</legend>

                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_firefox" type="text" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_firefox" type="text" class="form-control">
                            </div>
                        </div>



                          <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
</div>
        </div>
        
    </div>
</body>

</html>
