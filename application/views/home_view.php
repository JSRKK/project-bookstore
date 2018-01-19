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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body class="page-index has-hero">

  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">
    <div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->
            <!--Slide 1-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 col-md-push-6 item-caption">
                  <h2 class="h1 text-weight-light">
                      Welcome to <span class="text-primary">Flexor</span>
                    </h2>
                    <h4>
                      Super flexible responsive theme with a modest design touch.
                    </h4>
                  <p>Perfect for your App, Web service, company or portfolio! Magna tincidunt sociis ac integer amet non. Rhoncus augue? Tempor porttitor sed, aliquet phasellus a, nisi nunc aliquet nec rhoncus enim porttitor ultrices lacus tristique?</p>
                  <a href="https://bootstrapmade.com" class="btn btn-more btn-lg i-right">Buy Now <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-6 col-md-pull-6 hidden-xs">
                  <img src="<?php echo base_url('assets/img/slides/slide1.png')?>" alt="Slide 1" class="center-block img-responsive">
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-right-md item-caption">
                  <h2 class="h1 text-weight-light">
                      <span class="text-primary">Flexor</span> Bootstrap Theme
                    </h2>
                  <h4>
                      High quality, responsive theme!
                    </h4>
                  <p>Perfect for your App, Web service, company or portfolio! Magna tincidunt sociis ac integer amet non. Rhoncus augue? Tempor porttitor sed, aliquet phasellus a, nisi nunc aliquet nec rhoncus enim porttitor ultrices lacus tristique?</p>
                  <a href="https://bootstrapmade.com" class="btn btn-more btn-lg"><i class="fa fa-plus"></i> Learn More</a>
                </div>
                <div class="col-md-6 hidden-xs">
                  <img src="<?php echo base_url('assets/img/slides/slide2.png')?>" alt="Slide 2" class="center-block img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- ======== @Region: #content ======== -->
  <div id="content">  
     
    <!--Showcase-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">Recommended</h2>
          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":5, "pagination":false, "navigation":true, "itemsScaleUp":true}'>

          <?php if($books1 != null)
              foreach($books1 as $key => $row):?>              
                <div class="item ">                 
                  <a href="<?php echo base_url('index.php/BookDetailController/index?book_id='.$row["book_id"])?>" class="overlay-wrapper">   
                      <img src="<?php echo base_url('book-img/'.$row['book_id'].'/'.$row['book_img'].'.jpg')?>" alt="Project 1 image" class="img-responsive underlay" style="margin: 0 auto; width:200px;height:250px">
                      <span class="overlay">                    
                        <span class="overlay-content"> <span class="h4">View</span> </span>
                      </span>
                  </a>                                      
                  <div class="item-details bg-noise">
                    <h5 class="item-title" style="max-width: 160px"><?php echo '<a href="#">'.$row['book_name'].' </a>' ?></h5>
                    <p style="color:#595959; font-size:12px;"><?php echo $row['publisher_name'] ?></p>
                    <?php 
                      if($row['book_discount'] > 0){
                        echo '<h5><span href="#" style="color:#f57224;">฿'.$row['book_total'].'</span></h5>';
                        echo '<h5><span style="text-decoration: line-through; color:#595959a1;">฿'.$row["book_price"].'</span>'.' '.'<span">'."-".$row["book_discount"]."%".'</span></h5>';
                      }
                      else{
                        echo '<h5><span href="#">฿'.$row['book_price'].'</span></h5>'; 
                      }
                    ?>
                    <h5><span class="stars-container stars-<?php echo $row['book_score']?>" style="color:#FE980F">★★★★★</span></h5>                                                                     
                  </div>
              </div>                                         
            <?php endforeach ?> 
        </div><hr style="color:#595959">
        <h2 class="block-title">Popular</h2>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":5, "pagination":false, "navigation":true, "itemsScaleUp":true}'>

          <?php if($books2 != null)
              foreach($books2 as $key => $row):?>              
                <div class="item ">                 
                  <a href="<?php echo base_url('index.php/BookDetailController/index?book_id='.$row["book_id"])?>" class="overlay-wrapper">   
                      <img src="<?php echo base_url('book-img/'.$row['book_id'].'/'.$row['book_img'].'.jpg')?>" alt="Project 1 image" class="img-responsive underlay" style="margin: 0 auto; width:200px;height:250px">
                      <span class="overlay">                    
                        <span class="overlay-content"> <span class="h4">View</span> </span>
                      </span>
                  </a>                                      
                  <div class="item-details bg-noise">
                    <h5 class="item-title" style="max-width: 160px"><?php echo '<a href="#">'.$row['book_name'].' </a>' ?></h5>
                    <p style="color:#595959; font-size:12px;"><?php echo $row['publisher_name'] ?></p>   
                    <?php 
                      if($row['book_discount'] > 0){
                        echo '<h5><span href="#" style="color:#f57224;">฿'.$row['book_total'].'</span></h5>';
                        echo '<h5><span style="text-decoration: line-through; color:#595959a1;">฿'.$row["book_price"].'</span>'.' '.'<span">'.$row["book_discount"]."%".'</span></h5>';
                      }
                      else{
                        echo '<h5><span href="#">฿'.$row['book_price'].'</span></h5>'; 
                      }
                    ?>    
                    <h5><span class="stars-container stars-<?php echo $row['book_score']?>" style="color:#FE980F">★★★★★</span></h5>                              
                  </div>
              </div>                                         
            <?php endforeach ?> 
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
