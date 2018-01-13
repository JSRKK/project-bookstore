<!DOCTYPE html>
<html lang="en">
  <style>
body {
    padding-top: 50px;
}
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {
    #adv-search {
        width: 500px;
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 500px;
    }
}
</style>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    <!--Showcase-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">Search</h2>
        <div class="item-carousel row" >
          <?php if($books != null)
              foreach($books as $key => $row):?> 
                <div class="item item-book col-md-3" >
                  <a href="<?php echo base_url('index.php/BookDetailController?book_id='.$row['book_ID']);?>" class="overlay-wrapper">
                  <img src="<?php echo base_url('book-img/'.$row['book_ID'].'/'.$row['bookImageCover'].'.jpg')?>" alt="Project 1 image" class="img-responsive underlay" style="margin: 0 auto;width:200px;height:250px">             
                  </a>
                  <div class="item-details bg-noise">
                    <h5 class="item-title text-center">
                       <?php echo '<a href="#">'.$row['bookName'].' </a>' ?>
                    </h5>
                  </div>
                </div>                        
              <?php endforeach ?> 
          <?php if($books === null) 
            echo "<h3 class='text-center'>Empty</h3>";
          ?>
        </div>
        <div class="row">
          <?php if($books != null)
            echo '<ul class="pagination" id="pagination"></ul>';
          ?>
        </div>
      </div>
    </div>
  </div>

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

  <script type="text/javascript">
    function getPageList(totalPages, page, maxLength) {
      if (maxLength < 5) throw "maxLength must be at least 5";
  
      function range(start, end) {
          return Array.from(Array(end - start + 1), (_, i) => i + start); 
      }
  
      var sideWidth = maxLength < 9 ? 1 : 2;
      var leftWidth = (maxLength - sideWidth*2 - 3) >> 1;
      var rightWidth = (maxLength - sideWidth*2 - 2) >> 1;
      if (totalPages <= maxLength) {
          // no breaks in list
          return range(1, totalPages);
      }
      if (page <= maxLength - sideWidth - 1 - rightWidth) {
          // no break on left of page
          return range(1, maxLength-sideWidth-1)
              .concat([0])
              .concat(range(totalPages-sideWidth+1, totalPages));
      }
      if (page >= totalPages - sideWidth - 1 - rightWidth) {
          // no break on right of page
          return range(1, sideWidth)
              .concat([0])
              .concat(range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
      }
      // Breaks on both sides
      return range(1, sideWidth)
          .concat([0])
          .concat(range(page - leftWidth, page + rightWidth)) 
          .concat([0])
          .concat(range(totalPages-sideWidth+1, totalPages));
  }
  
  $(function () {
      // Number of items and limits the number of items per page
      var numberOfItems = $(".item-book").length;
      var limitPerPage = 12;
      // Total pages rounded upwards
      var totalPages = Math.ceil(numberOfItems / limitPerPage);
      // Number of buttons at the top, not counting prev/next,
      // but including the dotted buttons.
      // Must be at least 5:
      var paginationSize = 7; 
      var currentPage;
  
      function showPage(whichPage) {
          if (whichPage < 1 || whichPage > totalPages) return false;
          currentPage = whichPage;
          $(".item-book").hide()
              .slice((currentPage-1) * limitPerPage, 
                      currentPage * limitPerPage).show();
          // Replace the navigation items (not prev/next):            
          $(".pagination li").slice(1, -1).remove();
          getPageList(totalPages, currentPage, paginationSize).forEach( item => {
              $("<li>").addClass("page-item")
                       .addClass(item ? "current-page" : "disabled")
                       .toggleClass("active", item === currentPage).append(
                  $("<a>").addClass("page-link").attr({
                      href: "javascript:void(0)"}).text(item || "...")
              ).insertBefore("#next-page");
          });
          // Disable prev/next when at first/last page:
          $("#previous-page").toggleClass("disabled", currentPage === 1);
          $("#next-page").toggleClass("disabled", currentPage === totalPages);
          return true;
      }
  
      // Include the prev/next buttons:
      $(".pagination").append(
          $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
              $("<a>").addClass("page-link").attr({
                  href: "javascript:void(0)"}).text("Prev")
          ),
          $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
              $("<a>").addClass("page-link").attr({
                  href: "javascript:void(0)"}).text("Next")
          )
      );
      // Show the page links
      $(".item-book").show();
      showPage(1);
  
      // Use event delegation, as these items are recreated later    
      $(document).on("click", ".pagination li.current-page:not(.active)", function () {
          return showPage(+$(this).text());
      });
      $("#next-page").on("click", function () {
          return showPage(currentPage+1);
      });
  
      $("#previous-page").on("click", function () {
          return showPage(currentPage-1);
      });
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