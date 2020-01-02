<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kelola</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>asset/css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=base_url()?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- JS Theme -->
    <script type="text/javascript" href="<?=base_url()?>asset/js/menuutama.js"></script>

    <script type="text/javascript" href="<?=base_url()?>asset/js/bootstrap.js"></script>
    <script type="text/javascript" href="<?=base_url()?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" href="<?=base_url()?>asset/js/jquery.js"></script>

    <!-- DATA TABLES -->
    <link href="<?=base_url()?>asset/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" href="<?=base_url()?>asset/js/bootstrap.min.js"></script>
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
                <li>
                    <a href="<?php echo site_url('login/logout');?>">
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
         <div class="panel-heading" align="center"> Data Inventaris  </div>
          <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No Komputer</th>
                        <th>Username komputer</th>
                        <th>Sistem Operasi</th>
                        <th>Keadaan</th>
                        <th>Owner</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php
                                foreach($result as $row)
                                {?>
                                <tr>
                                    <td align='center'><?php echo $row->no_computer?>
                                    <td align='center'><?php echo $row->username_computer?>
                                    <td align='center'><?php echo $row->os?>
                                    <td align='center'><?php echo $row->keadaan?>
                                    <td align='center'><?php echo $row->nama_owner?>
                                    <td align='center'><?php echo $row->lokasi?>
                                    <td align='center'><a class='btn btn-info btn-sm' href="<?php echo base_url()."kelola/edit/".$row->id_computer;?>">Edit</a>
                                    <td align='center'><a class='btn btn-info btn-sm' href="<?php echo base_url()."kelola/getdetail/".$row->id_computer;?>">View</a> </td>
                                    <td align='center'><a class='btn btn-danger btn-sm' href="<?php echo base_url()."kelola/hapus/".$row->id_computer;?>" onclick="return confirm('Apakah anda yakin akan mengahapus data?')">Delete</a> </td>
                                </tr>
                                <?php
                            }?>
                      </tr>
                    <tbody>
                    </tfoot>
                  </table>
        </div> 
    </div> 
</div> 
                  <!-- jQuery -->
    <script src="<?=base_url()?>asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>asset/js/jquery.easing.min.js"></script>

               <!-- DATA TABES SCRIPT -->
    <script src="<?=base_url()?>asset/css/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>asset/css/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>


       </body> 
</html>