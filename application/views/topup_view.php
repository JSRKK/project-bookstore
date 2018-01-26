<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>BookStore Online</title>
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
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/icons/favicon.png')?>">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/img/icons/114x114.png')?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/img/icons/72x72.png')?>">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/img/icons/default.png')?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.theme.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.transitions.min.css')?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="page-index has-hero">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  

  <!-- ======== @Region: #content ======== -->
  
  <div id="content">
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">Top-up</h2>
        <div class="row">
          <!-- <span id='check-modal' hidden></span>      -->
          <div class="col-sm-3"></div>
          <div class="col-sm-6 well">
            <form id="myform" action="<?php echo base_url('index.php/TopUpController/setTopUp'); ?>" class="form-horizontal" method="POST">
              <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                  <label class="control-label pull-right">Username:</label>
                </div>
                <div class="col-sm-6">
                  <?php if (isset($this->session->userdata['loged_in'])) {
                      $session_data = $this->session->userdata('loged_in'); ?>
                  <label class="control-label">
                    <?php echo $session_data['userid']; ?>
                  </label>
                  <?php }?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                  <label class="control-label pull-right">SerialNo.(TrueMoney):</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="serial" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="serial"
                    value="" minlength="14" maxlength="14" placeholder="Enter Serial Number (14)" onkeyup="Submit();">
                    <span id="validate" style="color:red;"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <!-- <input type="submit" class="btn btn-success" value="เติมเงิน"> -->
                  <input type="button" class="btn btn-success submit-serial" value="เติมเงิน" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
                  
      <!-- Modal -->
      <div class="modal fade" id="confirmmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ยืนยันการติมเงิน
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </h5>
                </div>
                <div class="modal-body">
                  <span>คุณต้องการเติมเงินเข้าสู่ระบบใช่ หรือ ไม่?</span>
                </div>
                <div class="modal-footer">
                  <div class="loader"></div> 
                  <a href="#" id="submit" class="btn btn-info btn-md" data-loading-text="<i class='fa fa-spinner fa-spin '></i> ตกลง">ตกลง</a>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>   
    
    <script>  
      function Submit(){
        var letter = document.getElementById('validate').innerHTML;
        if(letter.length > 0){
          document.getElementById('validate').innerHTML = "";
        }
      }

      $(document).ready(function() {    
        var error = <?php echo $this->session->flashdata('error');?>;
        if (error !== 'empty'){
          document.getElementById('validate').innerHTML = "*หมายเลขนี้ถูกใช้งานไปแล้ว";
        } 
      });

      $('.submit-serial').click(function () {
        if(serial.value == "" || serial.value.length < 14){
            document.getElementById('validate').innerHTML = "*กรุณากรอกหมายเลขทรูมันนี่ให้ครบ 14 หลัก";
        }
        else{
          $("#confirmmodal").modal("show");
          document.getElementById('validate').innerHTML = "";
          <?php echo $this->session->set_flashdata('check','empty');?>
        }
      });

      $('#submit').click(function () {
        var serial = document.getElementById("serial");
        if(serial.value != "" && serial.value.length >= 14){
          var $this = $(this);
          $this.button('loading');
          setTimeout(function() {
              $this.button('reset');
              $('#myform').submit();              
          }, 2000);
        }
        else{
          $("#confirmmodal").modal("hide");         
        }
      });  
    </script>

    <!-- Required JavaScript Libraries -->
    <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/stellar/stellar.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/contactform/contactform.js')?>"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

    <!--Custom scripts demo background & colour switcher - OPTIONAL -->
    <script src="<?php echo base_url('assets/js/color-switcher.js')?>"></script>

    <!--Contactform script -->
    <script src="<?php echo base_url('assets/contactform/contactform.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrab/js/validate.js')?>"></script>
</body>

</html>