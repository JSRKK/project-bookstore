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
 
     <!-- ******************เขียน code******************  -->
        <div class="container">
          <div class="row contact" id="contact">
              <div class="col-md-1"> </div>
              <div class="col-md-3">
                <h1>Book Detail</h1>
                                                      
              <?php if($books != null)?>
                
                <img src="<?php echo base_url('book-img/'.$books[0]['book_id'].'/'.$books[0]['book_img'].'.jpg')?>"  width="300" height="150">
                <br>
                <?php if($book_check == null){?>
                  <center><button type="button" class="btn btn-lg btn-success">ทดลองอ่าน<button></center>
                <?php } ?>
                <?php if($book_check != null){?>
                  <center>
                  <a href=
                  "<?php echo base_url('index.php/ReadbookController/index?book_id='.$books[0]['book_id'])?>" 
                   class="btn btn-lg btn-success">
                   อ่าน</a></center>
                <?php }?>
              
                
                
              </div>
                <div class="col-md-8 ">
                
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3><strong><?php echo $books[0]['book_name']?></strong></h3>
                    <br>
                    
                    <span style = "color :#FE980F">
                    <class="list-group-item col-lg "> 
                      <i class="fa fa-fw fa-star pull-right"></i>
                    
                    <class="list-group-item col-lg "> 
                      <i class="fa fa-fw fa-star pull-right"></i>
                    
                    <class="list-group-item col-lg "> 
                      <i class="fa fa-fw fa-star pull-right"></i>
                    
                    <class="list-group-item col-lg "> 
                      <i class="fa fa-fw fa-star pull-right"></i>
                    
                    <class="list-group-item col-lg "> 
                      <i class="fa fa-fw fa-star pull-right"></i>
                    </span>
                    <p class = "pull-right"> คะแนน</p>
                    <br>
                    <h4><span style="color :green"><?php echo $books[0]['book_price']?>฿</span></h4> 
                    <br>
                    รายละเอียด :
                    <br>
                    <?php echo $books[0]['book_detail']?>
                    <br>
                    <h4>
                    วันที่วางขาย <p class = "pull-right"> <?php echo $books[0]['book_date']?></p>
                    <br>
                    <br>
                    สำนักพิมพ์ <p class = "pull-right"> บิสคิต, สนพ.</p>
                    <br>
                    <br>
                    จำนวนหน้า <p class = "pull-right"> 190</p>
                    <br>
                    <br>         
                    แชร์หนังสือ <p class = "pull-right"><span style="color :blue"><i class="fa fa-fw fa-facebook-square"></i></span></p>
                    <br>
                    <br>
                    </h4>
                    <?php if($book_check == null){
                      echo '<button data-toggle="modal" 
                        data-id="<?php echo $books[0]["book_id"]?>"
                        data-name="<?php echo $books[0]["book_name"]?>" 
                        data-price="<?php echo $books[0]["book_price"]?>" 
                        data-img="<?php echo $books[0]["book_img"]?>"
                        class="btn btn-lg btn-warning pull-right open-myModal">'
                        ."ซื้อ".
                      '</button>';
                    
                      echo '<button type="button" class="btn btn-lg btn-success pull-right" style = "margin-right: 20px">'
                        ."ส่งของขวัญ".
                      '</button>';
                    }
                    ?>
                </div>
            </div>
          

          <div class="row comment" id="comment">
            <div class="col-md-4"></div>
            <div class="col-md-8">
            <button type="button" class="btn btn-lg btn-success" style = "margin-right: 20px">
              แสดงความคิดเห็น
            </button>
            <button type="button" class="btn btn-lg btn-success" style = "margin-right: 20px">
              หนังสือที่เกี่ยวข้อง
            </button>
            <button type="button" class="btn btn-lg btn-success">
              ให้คะแนน
            </button>
              <h3> ความคิดเห็น </h3>

              ID : xxxxxxxxxx
              <br>
              <input type="text" class="form-control"  placeholder="ความคิดเห็น">
              <paper-button class="align-by-text style-scope ytd-comment-replies-renderer" noink="" role="button" tabindex="0" animated="" aria-disabled="false" elevation="0">
                View all 12 replies
              </paper-button>
            </div>
          </div>  
        </div>
     <!-- ******************เขียน code******************  -->

  <!-- ======== @Region: #footer ======== -->
  <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">

      <div class="row" id="contact">

        <div class="col-md-3">
          <address>
              <strong>Flexor Bootstrap Theme Inc</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> Sunshine House, Sunville. SUN12
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 019223 8092344
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@flexorinc.com
              <br>
            </address>
        </div>

        <div class="col-md-6">
          <h4 class="text-uppercase">
              Contact Us
            </h4>
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

        <div class="col-md-3">
          <h4 class="text-uppercase">
              Follow Us On:
            </h4>
          <!--social media icons-->
          <div class="social-media social-media-stacked">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div>

      </div>

      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © Flexor Theme</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
            <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by BootstrapMade.com
          </div>
        </div>
        <div class="col-md-5">
          <ul class="list-inline pull-right">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <a href="#top" class="scrolltop">Top</a>

    </div>
  </footer>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">รายละเอียดการชำระเงิน</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
                <div class="col-md-4">
                  <img id="img-url" src="<?php echo base_url('')?>" alt="Project 1 image" class="img-responsive underlay" style="margin: 0 auto;">
                </div>
                <div class="col-md-8">
                    <span type="text" id="book-name"></span><hr>
                    ฿<span type="text" id="book-price"></span><hr>
                </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">ชำระเงิน</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>          
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).on("click", ".open-myModal", function () 
    {
      var url = "<?php echo base_url(); ?>"+'book-img/'+$(this).data('id')+'/'+$(this).data('img')+'.jpg';      
      $(".modal-body #book-name").html($(this).data('name'));
      $(".modal-body #book-price").html($(this).data('price'));
      $('.modal-body img').attr('src', url);
      $('#exampleModal').modal('show');
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

</body>

</html>
