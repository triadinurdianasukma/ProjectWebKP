<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventori</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>asset/css/grayscale.css" rel="stylesheet">

    <!-- DATA TABLES -->
    <link href="<?=base_url()?>asset/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> <span class="glyphicon glyphicon-home"></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Data Inventaris</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('login');?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Inventaris</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                   <thead>
                      <tr>
                        <th>No Komputer</th>
                        <th>Username komputer</th>
                        <th>Sistem Operasi</th>
                        <th>Keadaan</th>
                        <th>Owner</th>
                        <th>Lokasi</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php
                                foreach($result as $row)
                                {
                                    echo "    <tr>" . "\n";
                                    echo "        <td>" . $row->no_computer . "</td>" . "\n";
                                    echo "        <td>" . $row->username_computer . "</td>" . "\n";
                                    echo "        <td>" . $row->os . "</td>" . "\n";
                                    echo "        <td>" . $row->keadaan . "</td>" . "\n";
                                    echo "        <td>" . $row->nama_owner . "</td>" . "\n";
                                    echo "        <td>" . $row->lokasi  . "</td>" . "\n";
                                    echo "    </tr>" . "\n";
                                }
                            ?>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p><a href="landing/fullversion">Copyright Inventaris 2015</a></p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?=base_url()?>asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="a<?=base_url()?>sset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>asset/js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>asset/js/grayscale.js"></script>

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
