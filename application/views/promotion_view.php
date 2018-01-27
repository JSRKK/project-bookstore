<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Promotion</title>
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


  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <!--Showcase-->
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">Promotion</h2>
        <?php if($books != null){
                for($i=0;$i<sizeof($books);$i++){
                    echo  "<div class='item-carousel row'>";
                    for($j=0;$j<sizeof($books[$i][0]);$j++){?>                  
                        <div class="item item-book col-sm-3" >
                            <a href="<?php echo base_url('index.php/BookDetailController?book_id='.$books[$i][0][$j]['book_id']);?>" class="overlay-wrapper">
                            <img src="<?php echo base_url('book-img/'.$books[$i][0][$j]['book_id'].'/'.$books[$i][0][$j]['book_img'].'.jpg')?>" alt="Project 1 image" class="img-responsive underlay" style="margin: 0 auto;width:200px;height:250px">             
                            </a>
                            <div class="item-details bg-noise" style="margin-left:25px">
                                <h5 class="item-title"><a href="<?php echo base_url('index.php/BookDetailController?book_id='.$books[$i][0][$j]['book_id']);?>"><?php echo $books[$i][0][$j]['book_name'] ?></a></h5>
                                <h5><?php echo '<span style="color:#595959;font-size:12px">'.$books[$i][0][$j]['publisher_name'].'</span>';?></h5>
                                <h5><?php echo '<span style="color:#f57224">'."฿".$books[$i][0][$j]['book_total'].'</span>';?></h5>                                                                          
                                <h5><?php echo "<span style='text-decoration: line-through; color:#595959a1;'>฿".$books[$i][0][$j]['book_price']."</span>"." "."<span>"."-".$books[$i][0][$j]['book_discount']."%".'</span>';?></h5>
                                <h5><?php echo '<span class="stars-container stars-"'.$books[$i][0][$j]["book_score"].'" style="color:#FE980F;">★★★★★</span>'?></h5>                                                       
                            </div>
                        </div>                       
                    <?php } ?>
                    <?php  echo '</div>'; ?>
                <?php }} ?> 
          <?php if($books === null) 
            echo "<h3 class='text-center'>Empty</h3>";
          ?>
        <div class="row">
          <?php if($books != null)
            echo '<ul class="pagination" id="pagination"></ul>';
          ?>
        </div>
      </div>
    </div>
  </div>

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
