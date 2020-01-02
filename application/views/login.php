<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="asset/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>asset/js/login.js"></script>
	<title>Login Inventaris</title>
</head>
<body>
<link href="asset/css/login.css" rel="stylesheet">

<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="row">                
           <div class="iconmelon"> <img src="asset/img/kp.png" style="width:400px;height:150px;"> </div>
        </div>
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Inventaris PLN Persero</div>
            </div>     

            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username');?>">                                    
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>">
                    </div>            
                                                            

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-primary pull-right" name="submit" value="O K"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>
</body>
</html>