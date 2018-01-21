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

  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body class="page-index has-hero">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->

  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <h2 class="block-title">My Profile</h2>   
        </div>
      </div><br>
      <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8 col-sm-12 col-xs-12">
              <div class="well well-sm">
                  <div class="row">
                      <div class="col-sm-3 col-sm-6">
                          <div class="row">
                            <div class="col-sm-12">
                              <img src=<?php echo base_url('book-img/profile.png')?> alt="" class="img-thumbnail img-responsive" />
                            </div>
                          </div><br>                                        
                          <div class="row">
                            <div class="col-sm-12 text-center">
                              <a href="<?php echo base_url('index.php/ChangePasswordController')?>" class="btn btn-primary">Change password</a>
                            </div>
                          </div>
                      </div>  
                      <div class="col-sm-1"></div>                   
                      <div class="col-sm-8 col-sm-6">
                        <?php if($profile != null){
                          echo '<div class="row"><hr>
                                  <div class="col-sm-4">
                                    <h5>First name:</h5>
                                  </div>
                                  <div class="col-sm-8">
                                    <h5>'.$profile[0]['ReaderFname'].'</h5>
                                  </div>
                                </div><hr>';
                          echo '<div class="row">
                                  <div class="col-sm-4">
                                    <h5>Last name:</h5>
                                  </div>
                                  <div class="col-sm-8">
                                    <h5>'.$profile[0]['ReaderLname'].'</h5>
                                  </div>
                              </div><hr>';              
                          echo '<div class="row">
                                  <div class="col-sm-4">
                                    <h5>Gender:</h5>
                                  </div>
                                  <div class="col-sm-8">
                                    <h5>'.$profile[0]['ReaderGender'].'</h5>
                                  </div>
                              </div><hr>';  
                          echo '<div class="row">
                                  <div class="col-sm-4">
                                    <h5>Birthday:</h5>
                                  </div>
                                  <div class="col-sm-8">
                                    <h5>'.date("d/m/Y", strtotime($profile[0]['ReaderDateBirth'])).'</h5>
                                  </div>
                              </div><hr>';
                          echo '<div class="row">
                                  <div class="col-sm-4">
                                    <h5>Telephone:</h5>
                                  </div>
                                  <div class="col-sm-8">
                                    <h5>'.$profile[0]['ReaderTel'].'</h5>
                                  </div>
                              </div><hr>';
                        }?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>

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

  
</body>

</html>
