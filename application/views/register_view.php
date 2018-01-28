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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="">
  <div id="content-register">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <a style="margin-top:-10%;margin-left:30%" class="navbar-brand" href="<?php echo base_url('index.php/HomeController') ?>"
            title="Home">
          </a><br>
          <div class="panel panel-default">
            <div class="panel-body row">
              <div class="container2">
                <form class="form-horizontal" action="<?php echo base_url('index.php/RegisterController/register'); ?>" method="post" id="reg_form">
                  <fieldset>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group text-center">
                          <h5 style="font-weight: bold">REGISTER</h5>
                        </div>
                        <div class="form-group">
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                              </span>
                              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required>
                            </div>
                          </div>

                        </div>
                        <div class="form-group">
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                              </span>
                              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                              </span>
                              <input type="text" pattern="[A-Za-z]{1}" class="form-control" id="username" name="username" minlength="6" placeholder="Username" onblur="check_if_exists()" required>
                            </div>
                            <span id="valid-username" class="pull-right" style="font-size:12px;"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="fa fa-fw fa-lock"></i>
                              </span>
                              <input type="password" id="password" name="password" minlength="6" placeholder="Password" class="form-control" required>
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
                        <div class="form-group">
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </span>
                              <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth" required>
                            </div>
                          </div>
                        </div>                       
                        <div class="form-group">
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-earphone"></i>
                              </span>
                              <input type="tel" pattern="([0]{1})([0-9]{9})" class="form-control" name="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' minlength="10"
                                maxlength="10" placeholder="Tel" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <label class="radio-inline"><input type="radio" name="gender" required>Female</label>
                              <label class="radio-inline"><input type="radio" name="gender" required>Male</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-12">
                          <input type="submit" class="btn btn-lg btn-primary btn-block" id="register" value="สมัครสมาชิก"/>
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
    function check_if_exists() {

    var username = $("#username").val();
    if(username.length >= 6){
      $.ajax(
          {
              type:"post",
              url: "<?php echo base_url(); ?>index.php/RegisterController/filename_exists",
              data:{ username:username},
              success:function(response)
              {
                  if (response == "true") 
                  {            
                      $('#valid-username').html('<span style="color: green;"></span>');
                  }
                  else if(response == "false")
                  {
                      $('#valid-username').html('<span style="color:red;">username นี้มีผู้ใช้งานไปแล้ว</span>');
                  }  
              }
          });
      }
    }
  </script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
  <script src="<?php echo base_url('assets/bootstrab/js/validate.js')?>"></script>
</body>

</html>