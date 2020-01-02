<html>
<head>
	<link rel="stylesheet" type="text/css" href="asset/css/error.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
	<title>Error 404</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions">
                	<a href="<?php echo site_url('landing');?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>