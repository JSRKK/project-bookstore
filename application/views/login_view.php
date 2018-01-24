<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="<?php echo base_url('assets/bootstrab/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/bootstrab/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/bootstrab/css/style.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/bootstrab/css.css')?>" rel="stylesheet" >
</head>

<body class="background-login">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <?php if($this->session->flashdata('error')): ?>    
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p><center> <?php echo $this->session->flashdata('error') ?> </center><p>
                        </div>
                    <?php endif; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="">
                        <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('index.php/LoginController/check_login'); ?> " method="post" id="reg_form">
                                <fieldset>
                                    <div class="form-group row">
                                        <div class="col-sm-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                </span>
                                                <input name="username" placeholder="username" class="form-control" type="text" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12  inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock"></i>
                                                </span>
                                                <input name="password1" placeholder="password" class="form-control" type="password"  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center row">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success btn-block" value="เข้าสู่ระบบ"/>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>      
    <script src="<?php echo base_url('assets/bootstrab/js/validate.js')?>"></script>
</body>

</html>