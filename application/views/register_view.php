<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Register - Flexor Bootstrap Theme</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/img/icons/114x114.png')?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/img/icons/72x72.png')?>">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/img/icons/default.png')?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.theme.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.transitions.min.css')?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<!-- ======== @Region: body ======== -->

<body class="fullscreen-centered page-register">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
          <a class="navbar-brand center-block" href="index.html" title="Home">
            <h1 class="hidden">
                <img src="img/logo.png" alt="Flexor Logo">
                Flexor
              </h1>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                  Sign Up
                </h3>
            </div>
            <div class="panel-body">
              <div class="row"><br>
              <div class="col-sm-1"></div>
                <div class="col-sm-10">               
                  <form data-toggle="validator" accept-charset="UTF-8" role="form" action= "<?php echo base_url('index.php/RegisterController/register'); ?>" method="POST">
                    <fieldset>
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                          <input type="text" class="form-control" id="username" name="username" minlength="6" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                          <input type="password" id="password" name="password" minlength="6" placeholder="Password" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                          <input type="password" id="confirmPassword" data-match="#password" placeholder="Confirm Password" class="form-control" required>
                        </div>
                      </div> 
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-text-background"></i></span>
                          <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
                        </div>
                      </div> 
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-text-background"></i></span>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
                        </div>
                      </div> 
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="fa fa-transgender"></i></span>
                          <select id="gender" name="gender" class="form-control" required>
                            <option value="" selected>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth" required>
                        </div>
                      </div>   
                      <div class="form-group">
                        <div class="input-group input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                          <input type="tel" class="form-control" name="tel" minlength="10" maxlength="10" placeholder="Tel" required>
                        </div>
                      </div>                            
                      <input class="btn btn-lg btn-primary btn-block" id="submit" type="submit" value="Register">
                    </fieldset>
                  </form>
                </div>
              </div>
              <p class="m-b-0 m-t">Already signed up? <a href="<?php echo base_url('index.php/LoginController'); ?>">Login here</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
  </div>

  <script>
      var password = document.getElementById("password"), confirm_password = document.getElementById("confirmPassword");

      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("โปรดใส่รหัสผ่านให้ถูกต้อง");
        } else {
          confirm_password.setCustomValidity('');
        }
      }

      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
  </script>
  <!-- Required JavaScript Libraries -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/stellar/stellar.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js')?>"></script>
  <script src="contactform/contactform.js')?>"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="<?php echo base_url('assets/js/color-switcher.js')?>"></script>

  <!--Contactform script -->
  <script src="<?php echo base_url('assets/contactform/contactform.js')?>"></script>

</body>

</html>
