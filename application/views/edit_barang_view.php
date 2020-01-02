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
                    <li><a href="<?php echo site_url('denah');?>"><span class="glyphicon glyphicon-th"></span> Denah</a></li>
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
    <?php foreach ($hasil as $key => $row)?>
           <form class="form-horizontal" action="<?php echo base_url()."kelola/updatedata/".$row->id_computer;?>" method="post">
                    <fieldset>
                        <legend class="text-center header">Input Barang</legend>
<?php 
foreach ($hasil as $key=>$row) 
    {?>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Username</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="username" type="text" class="form-control" value="<?php echo $row->username_computer?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>No computer</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="no_computer" type="text" class="form-control" value="<?php echo $row->no_computer?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Operating Sistem</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="os" type="text" class="form-control" value="<?php echo $row->os?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keadaan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keadaan" type="text" class="form-control" value="<?php echo $row->keadaan?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Gambar</label></span>
                            <div class="col-md-8">
                                 <a href="<?=base_url()?>./uploadgambar/showform" target="_blank">Klik Disini untuk Upload Gambar</a> 
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Owner</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="owner" type="text" class="form-control" value="<?php echo $row->nama_owner?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Lokasi</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="lokasi" type="text" class="form-control" value="<?php echo $row->lokasi?>">
                            </div>
                        </div>
                <?php
                    }
                ?>
                        <br>
                        <br>
                        <legend class="text-center header">Hardware</legend>
                        <br>

                        <legend class="text-left header">Processor</legend>
<?php 
foreach ($hasil2 as $key=>$row2) 
    {?>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_processor" type="text" class="form-control" value="<?php echo $row2->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_processor" type="text" class="form-control" value="<?php echo $row2->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_prosesor" type="text" class="form-control" value="<?php echo $row2->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_prosesor" type="text" class="form-control" value="<?php echo $row2->keterangan?>">
                            </div>
                        </div>
                        <?php
                    }
?>
                        <br>

                        <legend class="text-left header">Motherboard</legend>
<?php 
foreach ($hasil3 as $key=>$row3) 
    {?>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_motherboard" type="text" class="form-control" value="<?php echo $row3->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_motherboard" type="text" class="form-control" value="<?php echo $row3->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_motherboard" type="text" class="form-control" value="<?php echo $row3->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_motherboard" type="text" class="form-control" value="<?php echo $row3->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">RAM 1</legend>
<?php 
foreach ($hasil4 as $key=>$row4) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_ram1" type="text" class="form-control" value="<?php echo $row4->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_ram1" type="text" class="form-control" value="<?php echo $row4->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_ram1" type="text" class="form-control" value="<?php echo $row4->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_ram1" type="text" class="form-control" value="<?php echo $row4->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">RAM 2</legend>
<?php 
foreach ($hasil5 as $key=>$row5) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_ram2" type="text" class="form-control" value="<?php echo $row5->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_ram2" type="text" class="form-control" value="<?php echo $row5->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_ram2" type="text" class="form-control" value="<?php echo $row5->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_ram2" type="text" class="form-control" value="<?php echo $row5->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">VGA Card 1</legend>
<?php 
foreach ($hasil6 as $key=>$row6) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_vga1" type="text" class="form-control" value="<?php echo $row6->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_vga1" type="text" class="form-control" value="<?php echo $row6->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_vga1" type="text" class="form-control" value="<?php echo $row6->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_vga1" type="text" class="form-control" value="<?php echo $row6->keterangan?>">
                            </div>
                        </div>  
<?php
                    }
?>

                        <br>

                        <legend class="text-left header">VGA Card 2</legend>
<?php 
foreach ($hasil7 as $key=>$row7) 
    {?>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_vga2" type="text" class="form-control" value="<?php echo $row7->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_vga2" type="text" class="form-control" value="<?php echo $row7->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_vga2" type="text" class="form-control" value="<?php echo $row7->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_vga2" type="text" class="form-control" value="<?php echo $row7->keterangan?>">
                            </div>
                        </div>  
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">HDD 1</legend>
<?php 
foreach ($hasil8 as $key=>$row8) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_hdd1" type="text" class="form-control" value="<?php echo $row8->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_hdd1" type="text" class="form-control" value="<?php echo $row8->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_hdd1" type="text" class="form-control" value="<?php echo $row8->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_hdd1" type="text" class="form-control" value="<?php echo $row8->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">HDD 2</legend>
<?php 
foreach ($hasil9 as $key=>$row9) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_hdd2" type="text" class="form-control" value="<?php echo $row9->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_hdd2" type="text" class="form-control" value="<?php echo $row9->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_hdd2" type="text" class="form-control" value="<?php echo $row9->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_hdd2" type="text" class="form-control" value="<?php echo $row9->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Optical Drive 1</legend>
<?php 
foreach ($hasil10 as $key=>$row10) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_optical1" type="text" class="form-control" value="<?php echo $row10->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_optical1" type="text" class="form-control" value="<?php echo $row10->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_optical1" type="text" class="form-control" value="<?php echo $row10->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_optical1" type="text" class="form-control" value="<?php echo $row10->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Optical Drive 2</legend>
<?php 
foreach ($hasil11 as $key=>$row11) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_optical2" type="text" class="form-control" value="<?php echo $row11->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_optical2" type="text" class="form-control" value="<?php echo $row11->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_optical2" type="text" class="form-control" value="<?php echo $row11->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_optical2" type="text" class="form-control" value="<?php echo $row11->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Network Card</legend>
<?php 
foreach ($hasil12 as $key=>$row12) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_network" type="text" class="form-control" value="<?php echo $row12->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_network" type="text" class="form-control" value="<?php echo $row12->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_network" type="text" class="form-control" value="<?php echo $row12->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_network" type="text" class="form-control" value="<?php echo $row12->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Sound Card</legend>
<?php 
foreach ($hasil13 as $key=>$row13) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_sound" type="text" class="form-control" value="<?php echo $row13->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_sound" type="text" class="form-control" value="<?php echo $row13->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_sound" type="text" class="form-control" value="<?php echo $row13->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_sound" type="text" class="form-control" value="<?php echo $row13->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Keyboard</legend>
<?php 
foreach ($hasil14 as $key=>$row14) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_keyboard" type="text" class="form-control" value="<?php echo $row14->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_keyboard" type="text" class="form-control" value="<?php echo $row14->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_keyboard" type="text" class="form-control" value="<?php echo $row14->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_keyboard" type="text" class="form-control" value="<?php echo $row14->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Mouse</legend>
<?php 
foreach ($hasil15 as $key=>$row15) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_mouse" type="text" class="form-control" value="<?php echo $row15->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_mouse" type="text" class="form-control" value="<?php echo $row15->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_mouse" type="text" class="form-control" value="<?php echo $row15->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_mouse" type="text" class="form-control" value="<?php echo $row15->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Monitor</legend>
<?php 
foreach ($hasil16 as $key=>$row16) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_monitor" type="text" class="form-control" value="<?php echo $row16->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_monitor" type="text" class="form-control" value="<?php echo $row16->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_monitor" type="text" class="form-control" value="<?php echo $row16->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_monitor" type="text" class="form-control" value="<?php echo $row16->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Printer 1</legend>
<?php 
foreach ($hasil17 as $key=>$row17) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_printer1" type="text" class="form-control" value="<?php echo $row17->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_printer1" type="text" class="form-control" value="<?php echo $row17->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_printer1" type="text" class="form-control" value="<?php echo $row17->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_printer1" type="text" class="form-control" value="<?php echo $row17->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Printer 2</legend>
<?php 
foreach ($hasil18 as $key=>$row18) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_printer2" type="text" class="form-control" value="<?php echo $row18->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_printer2" type="text" class="form-control" value="<?php echo $row18->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_printer2" type="text" class="form-control" value="<?php echo $row18->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_printer2" type="text" class="form-control" value="<?php echo $row18->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Printer 3</legend>
<?php 
foreach ($hasil19 as $key=>$row19) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_printer3" type="text" class="form-control" value="<?php echo $row19->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_printer3" type="text" class="form-control" value="<?php echo $row19->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_printer3" type="text" class="form-control" value="<?php echo $row19->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_printer3" type="text" class="form-control" value="<?php echo $row19->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Scanner</legend>
<?php 
foreach ($hasil20 as $key=>$row20) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Merk</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="merk_scanner" type="text" class="form-control" value="<?php echo $row20->merk?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Tipe</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="tipe_scanner" type="text" class="form-control" value="<?php echo $row20->tipe?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Nomor Serial</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="seri_scanner" type="text" class="form-control" value="<?php echo $row20->no_seri?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Keterangan</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="keterangan_scanner" type="text" class="form-control" value="<?php echo $row20->keterangan?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">IP Address</legend>
<?php 
foreach ($hasil21 as $key=>$row21) 
    {?>
                        <div class="form-group">
                            <span class="col-md-2 text-left"><label>Alamat</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="alamat_ip" type="text" class="form-control" value="<?php echo $row21->merk?>">
                            </div>
                        </div>
<?php
                    }
?>                       
                       <br>
 
                         <legend class="text-center header">Software</legend>
<?php 
foreach ($hasil22 as $key=>$row22) 
    {?>
                         <br>

                          <legend class="text-left header">Microsoft Office</legend>

                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_office" type="text" class="form-control" value="<?php echo $row22->installed?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_office" type="text" class="form-control" value="<?php echo $row22->version?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>
<?php 
foreach ($hasil23 as $key=>$row23) 
    {?>
                        <legend class="text-left header">Symantec</legend>

                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_symantec" type="text" class="form-control" value="<?php echo $row23->installed?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_symantec" type="text" class="form-control" value="<?php echo $row23->version?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Radmin</legend>
<?php 
foreach ($hasil24 as $key=>$row24) 
    {?>
                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_radmin" type="text" class="form-control" value="<?php echo $row24->installed?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_radmin" type="text" class="form-control" value="<?php echo $row24->version?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Internet Explorer</legend>
<?php 
foreach ($hasil25 as $key=>$row25) 
    {?>
                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_ie" type="text" class="form-control" value="<?php echo $row25->installed?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_ie" type="text" class="form-control" value="<?php echo $row25->version?>">
                            </div>
                        </div>
<?php
                    }
?>
                        <br>

                        <legend class="text-left header">Mozilla Firefox</legend>
<?php 
foreach ($hasil26 as $key=>$row26) 
    {?>
                          <div class="form-group">
                            <span class="col-md-2 text-left"><label>Installed</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="installed_firefox" type="text" class="form-control" value="<?php echo $row26->installed?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-2 text-left"><label>Version</label></span>
                            <div class="col-md-8">
                                <input id="fname" name="version_firefox" type="text" class="form-control" value="<?php echo $row26->version?>">
                            </div>
                        </div>
<?php
                    }
?>
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
