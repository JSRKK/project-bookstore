<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="<?php echo base_url('assets/bootstrab/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/bootstrab/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/bootstrab/css/style.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/bootstrab/css.css')?>" rel="stylesheet">
</head>

<body class="">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <a style="margin-top:-10%;margin-left:35%" class="navbar-brand" href="<?php echo base_url('index.php/HomeController') ?>"
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
            <div class="panel-body row">
              <div class="container2">
                <?php if($this->session->flashdata('success')) :?>
                <div class="text-center">
                  <h3>
                    <?php echo $this->session->flashdata('success') ?>
                    <span style="color:green;font-size:25px">
                      <i class="fa fa-check-circle-o"></i>
                    </span>
                  </h3>
                  <a href="<?php echo base_url('index.php/HomeController'); ?>" class="btn btn-success">ตกลง</a>
                </div>
                <?php else:?>
                <form class="form-horizontal" action="<?php echo base_url('index.php/RegisterController/register'); ?>" method="post" id="reg_form">
                  <fieldset>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group text-center">
                          <h5 style="font-weight: bold">REGISTER</h5>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" id="username" name="username" minlength="6" placeholder="Username" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-fw fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password" minlength="6" placeholder="Password" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-fw fa-lock"></i>
                            </span>
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </span>
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-transgender"></i>
                            </span>
                            <select id="gender" name="gender" class="form-control" required>
                              <option value="" selected>Gender</option>
                              <option value="Female">Female</option>
                              <option value="Male">Male</option>
                              <option value="Other">Other</option>
                              <option value="Rather not say">Rather not say</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group">
                            <span class="input-group-addon">
                              <i class="glyphicon glyphicon-earphone"></i>
                            </span>
                            <input type="tel" class="form-control" name="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' minlength="10"
                              maxlength="10" placeholder="Tel" required>
                          </div>
                        </div>
                      </div>
                    </div><br>
                    <input class="btn btn-lg btn-primary btn-block" id="submit" type="submit" value="สมัครสามาชิก">
                  </fieldset>
                </form>
              </div>
              <?php endif; ?>
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