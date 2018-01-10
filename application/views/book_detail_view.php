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
  <?php include('header_view.php') ?>  

  <!-- ======== @Region: #content ======== -->
  <div id="content">
 
     <!-- ******************เขียน code******************  -->
        <div class="container">
          <div class="row contact" id="contact">
              <div class="col-md-1"> </div>
              <div class="col-md-3">
                <h1>Book Detail</h1>
                <img src="<?php echo base_url('book-img/thinkvictory.jpg')?>"  width="300" height="150">
                <center><button type="button" class="btn btn-lg btn-success">ทดลองอ่าน</button></center>
              </div>
                <div class="col-md-8 ">
                
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3><strong>แค่คิดว่าทำได้คุณก็ชนะ</strong></h3>
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
                    <h4><span style="color :green">199฿</span></h4> 
                    <br>
                    รายละเอียด :
                    <br>
                    "แค่คิดว่าทำได้ คุณก็ชนะ" เล่มนี้ ถ่ายทอดเคล็ดลับที่จะทำให้คุณประสบความสำเร็จ ร่ำรวย และบรรลุทุกเป้าหมายในชีวิตอย่างใจคิด เป็น "เคล็ดลับ" ที่ทรงพลังจากแนวคิดและถ้อยคำของบุคคลที่ประสบความสำเร็จระดับตำนาน ที่จะผลักดันให้คุณ "ประสบความสำเร็จ" ได้เช่นกัน
                    <br>
                    <h4>
                    วันที่วางขาย <p class = "pull-right"> 19 ตุลาคม 2560</p>
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
                    <button type="button" class="btn btn-lg btn-success pull-right" style = "margin-left: 20px">
                      ซื้อ
                    </button>
                    <button type="button" class="btn btn-lg btn-success pull-right">
                      ส่งของขวัญ
                    </button>
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
