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
    <link href="<?php echo base_url('assets/bootstrab/css.css')?>" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="background-login" data-stellar-background-ratio="0.1">
        <div id="content-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-3">
                        <a style="margin-top:-15%;margin-left:30%" class="navbar-brand" href="<?php echo base_url('index.php/HomeController') ?>"
                            title="Home">
                        </a>
                        <?php if($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p>
                                <center>
                                    <?php echo $this->session->flashdata('error') ?> </center>
                                <p>
                        </div>
                        <?php endif; ?>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-horizontal" action="<?php echo base_url('index.php/LoginController/check_login'); ?> " method="post" id="reg_form">
                                    <fieldset>
                                        <div class="form-group row text-center" style="margin-top:40px;margin-bottom:30px">
                                            <h5 style="font-weight: bold">CHANGE PASSWORD</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                            <div class="inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-lock"></i>
                                                    </span>
                                                    <input type="password" id="oldPassword" name="oldPassword" minlength="6" placeholder="Old Password" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-lock"></i>
                                                    </span>
                                                    <input type="password" id="password" name="password" minlength="6" placeholder="New Password" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-lock"></i>
                                                    </span>
                                                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <div class="text-center row">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="เข้าสู่ระบบ" />
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
    </div>
    <script>
        $('#alert').click(function () {
            alert('จำรหัสไม่ได้ก็ไม่ต้องเข้าสิจ๊ะ!!!');
        });
    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <script src="<?php echo base_url('assets/bootstrab/js/validate.js')?>"></script>
</body>

</html>