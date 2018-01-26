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
                <?php if($this->session->flashdata('type') == 'password') :?>
                <div class="text-center">
                  <h4>
                    <span>คุณได้เปลี่ยนรหัสผ่านใหม่เรียบร้อย</span>                 
                  </h4>
                  <p style="color:green;font-size:60px">
                      <i class="fa fa-check-circle-o"></i>
                    </p>
                  <a href="<?php echo base_url('index.php/LoginController'); ?>" class="btn btn-success">กลับไปยังหน้าล็อคอิน</a>
                </div>   
                <?php elseif($this->session->flashdata('type') == 'register') :?>  
                <div class="text-center">
                  <h4>
                    <span>คุณได้สมัครสมาชิกเรียบร้อย</span>                   
                  </h4>
                  <p style="color:green;font-size:60px">
                      <i class="fa fa-check-circle-o"></i>
                    </p>
                  <a href="<?php echo base_url('index.php/HomeController'); ?>" class="btn btn-success">กลับไปหน้าหลัก</a>
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