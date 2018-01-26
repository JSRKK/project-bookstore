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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
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
    <div class="container">
    <?php $session_data = $this->session->userdata('loged_in'); ?>
      <p id="user_id" hidden><?php echo $session_data['userid']; ?></p>
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
          <h2 class="block-title">Book Detail</h2>
          <div class="row"> 
            <div class="col-sm-3">                                               
              <?php if($books != null){?>        
                <img src="<?php echo base_url('book-img/'.$books[0]['book_id'].'/'.$books[0]['book_img'].'.jpg')?>"  width="300" height="150">
                <br>
                <?php if($book_check == null){?>
                  <div class="text-center">
                    <a href="<?php echo base_url('index.php/ReadbookController/index?book_id='.$books[0]['book_id'])?>" class="btn btn-success"><i class="fa fa-book"></i> ทดลองอ่านฟรี</a>
                  </div>
                <?php } ?>

                <?php if($book_check != null){?>
                  <div class="text-center">
                    <a href="<?php echo base_url('index.php/ReadbookController/index?book_id='.$books[0]['book_id'])?>" class="btn btn-lg btn-success"><i class="fa fa-book"></i> อ่าน</a>
                  </div>
                <?php }?> 
              <?php } ?> 
            </div>                       
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-12">
                  <h2 style="font-weight: bold"><?php echo $books[0]['book_name']?></h2><hr>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-3">
                  <span style="font-size: 18px;">รายละเอียด:</span>
                </div>
                <div class="col-sm-9">
                  <span style="font-size: 14px;"><?php echo $books[0]['book_detail']?></span>
                </div>
              </div><hr>
              <div class="row">
                <div class="col-sm-3">
                  <span style="font-size: 18px;">วันที่วางขาย:</span>
                </div>
                <div class="col-sm-9">
                  <span style="font-size: 18px;" class="pull-right"> <?php echo $books[0]['book_date']?></span>
                </div>
              </div><hr>  
              <div class="row">
                <div class="col-sm-3">
                  <span style="font-size: 18px;">สำนักพิมพ์/ผู้แต่ง:</span>
                </div>
                <div class="col-sm-9">
                  <span style="font-size: 18px;" class="pull-right"><?php echo $books[0]['publisher_name']?></span>
                </div>
              </div><hr>  
              <div class="row">
                <div class="col-sm-3">
                  <span style="font-size: 18px;">จำนวนหน้า:</span>
                </div>
                <div class="col-sm-9">
                  <span style="font-size: 18px;" class="pull-right"><?php echo $books[0]['book_page']?></span>
                </div>
              </div><hr>  
              <div class="row">
                <div class="col-sm-3">
                  <span style="font-size: 18px;">แชร์หนังสือ:</span>
                </div>
                <div class="col-sm-9">
                  <span style="font-size: 18px;" class="pull-right">
                    <a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://www.example.com&p[images][0]=&p[title]=Title%20Goes%20Here&p[summary]=Description%20goes%20here!" 
                        target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"
                        style='color:blue'>
                        <i class="fa fa-fw fa-facebook-square" ></i>
                        Share
                    </a>
                  </span>
                </div>
              </div><hr> 
              <?php if($books[0]['book_discount'] > 0 && $book_check == null){ ?>
                <div class="row">
                  <div class="col-sm-3">
                    <span style="font-size: 18px;">โปรโมชั่นส่วนลด:</span>
                  </div>
                  <div class="col-sm-9">
                    <span style="font-size: 18px;" class="pull-right"><?php echo $books[0]['book_discount']?>%</span>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="col-sm-3">
                    <span style="font-size: 18px;">หมดเขต:</span>
                  </div>
                  <div class="col-sm-9">
                    <span style="font-size: 18px;" class="pull-right"><?php echo $books[0]['book_dateStart']?> - <?php echo $books[0]['book_dateStop']?></span>
                  </div>
                </div><hr>      
              <?php } ?>
              <div class="row"> 
                <div class="col-sm-12">                      
                  <?php if($books[0]['book_discount'] > 0 && $book_check == null) :?>
                    <button id="buy" data-toggle="modal" 
                      data-id="<?php echo $books[0]["book_id"]?>"
                      data-name="<?php echo $books[0]["book_name"]?>" 
                      data-price="<?php echo $books[0]["book_total"]?>" 
                      data-img="<?php echo $books[0]["book_img"]?>"
                      class="btn btn-info pull-right">
                      ซื้อ ฿<span style="text-decoration: line-through;"><?php echo $books[0]['book_price']?></span> <span><?php echo $books[0]['book_total']?></span>
                    </button>                 
                    <button type="button" class="btn btn-warning pull-right" style = "margin-right: 20px"><i class="fa fa-fw fa-gift"></i> ส่งของขวัญ</button>
                  <?php elseif ($books[0]['book_discount'] <= 0 && $book_check == null) :?>
                    <button id="buy" data-toggle="modal" 
                      data-id="<?php echo $books[0]["book_id"]?>"
                      data-name="<?php echo $books[0]["book_name"]?>" 
                      data-price="<?php echo $books[0]["book_price"]?>" 
                      data-img="<?php echo $books[0]["book_img"]?>"
                      class="btn btn-info pull-right">
                      ซื้อ ฿<?php echo $books[0]['book_price']?>
                    </button>                  
                    <button type="button" class="btn btn-warning pull-right" style = "margin-right: 20px"><i class="fa fa-fw fa-gift"></i> ส่งของขวัญ</button>
                  <?php endif;?>
                </div>
              </div>
            </div>
          </div><hr>
          <div class="row container">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-3">
                  <h4>ความคิดเห็น</h4>
                </div>
                <div class="col-sm-9">
                  <a href="#" data-toggle="modal" 
                  data-id="<?php echo $books[0]["book_id"]?>" 
                  data-name="<?php echo $books[0]["book_name"]?>"
                  data-img="<?php echo $books[0]["book_img"]?>"
                  class="btn btn-default pull-right open-myModal2">
                  <i class="fa fa-pencil"></i> เขียนความคิดเห็น</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                    <h1 class="text-center"><?php echo $books[0]['score']?></h1>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                    <h3 class="text-center" style="color:#FE980F">
                      <span class="stars-container stars-<?php echo ($books[0]['score']/5)*100 ?>">★★★★★</span>
                    </h3>
                </div>
              </div><br>
              <div class="row" >
                <div class="col-sm-12" id="user-comment">
                  <?php if($users != null)
                  
                    foreach($users as $key => $row):?>
                      <?php if($key > $books[0]['limit']) break; ?>
                      <div class="row">
                        <div class="col-sm-1">
                          <img src="<?php echo base_url('user-img/'.strtoupper($row['ReaderFname'][0]).'.png')?>" alt="User image" class="img-circle">
                        </div>
                        <div class="col-sm-10">
                          <div class="row">
                            <div class="col-sm-12">
                              <span><?php echo $row['ReaderFname']?></span>
                              <span><?php echo $row['ReaderLname']?></span>                                                       
                            </div>
                          </div>                                                
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="row">
                                <div class="col-sm-10">
                                  <p class="stars-container stars-<?php echo ($row['reviewScore']/5)*100 ?>">★★★★★</p>
                                  <span style="color:#33333361;font-size:14px"><?php echo date("d/m/Y H:m", strtotime($row['reviewDateTime']))?></span>
                                  <p style="font-size:13px"><?php echo $row['reviewComment']?></p>
                                </div>
                                <div class="col-sm-1">
                                      <a href="#" style="font-size:20px; color:#4a4747c7;"><i class="fa fa-thumbs-up"></i></a>                          
                                </div>
                                <div class="col-sm-1">
                                      <a href="#" style="font-size:20px; color:#4a4747c7;"><i class="glyphicon glyphicon-option-vertical"></i></a>                          
                                </div>
                              </div>
                            </div>
                          </div>                                                  
                        </div>
                      </div><hr>
                    <?php endforeach ?>
                    <div class="row" id="comment">
                      <div class="col-sm-12 text-center">
                        <a href="#comment" id="btn_more" class="btn btn-default">View more <i class="fa fa-chevron-down"></i> </a>
                       <input type="hidden" id="hiddencomment" name="hiddencomment" value="0"/>                                         
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>  
    </div>
  </div>
 
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">รายละเอียดการชำระเงิน
          <span class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </span>
        </h4>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-4">
                <img id="img-url" src="<?php echo base_url('')?>" alt="Project 1 image" class="img-responsive underlay" style="margin: 0 auto;">
              </div>
              <div class="col-sm-8">
                  <span type="text" id="book-name"></span><hr>
                  THB <span type="text" id="book-price"></span><hr>
              </div>
          </div>
            <form id="tempForm" class="form-horizontal" action="<?php echo base_url('index.php/BookDetailController/buy'); ?>" method="post" hidden>
              <fieldset>
                  <div class="form-group row">
                      <div class="col-sm-8  col-sm-offset-2 inputGroupContainer">
                          <div class="input-group">
                              <input id="book_id" name="book_id" class="form-control" type="text" >
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-sm-8  col-sm-offset-2 inputGroupContainer">
                          <div class="input-group">
                              <input id="book_price" name="book_price" class="form-control" type="text">
                          </div>
                      </div>
                  </div><br>
                  <div class="text-center row">
                      <div class="col-sm-12">
                          <input type="submit" class="btn btn-lg btn-primary btn-block" value="submit"/>
                      </div>
                  </div>
              </fieldset>
            </form>
        </div>
        <div class="modal-footer">
          <button id="before-submit" type="button" class="btn btn-primary">ชำระเงิน</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>          
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal-comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">
            <?php if (isset($this->session->userdata['loged_in'])) {
                $session_data = $this->session->userdata('loged_in'); ?>
                <span style="font-size: 16px;"><?php echo $session_data['fName']; ?></span>
                <span><?php echo $session_data['lName']; ?></span>
            <?php }?>
            <span class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </span>
          </h4>
        </div>
        <div class="modal-body">
          <div class="row">
                <div class="col-sm-4">
                  <img id="img-url2" src="<?php echo base_url('')?>" alt="Project 1 image" class="img-responsive underlay" style="margin: 0 auto;">
                  <p class="text-center" type="text" id="book-name"></p>
                </div>
                <div class="col-sm-8 text-center">
                  <textarea class="form-control" id="user-comment" rows="7" style="resize: none;"placeholder="พิมพ์ข้อความเพื่อแสดงความคิดเห็นเกี่ยวกับหนังสือเล่มนี้" require></textarea><hr>
                  <p style="margin-bottom:-15px">ให้คะแนน</p>
                  <h2 class="stars-container stars-50">★★★★★</h2>
                </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="" class="btn btn-info">ตกลง</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>          
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <h3 style="color:red;">ซื้อหนังสือไม่สำเร็จ! <i class="fa fa-times-circle-o"></i></h3>
          <p>จำนวนเงินไม่เพียงพอต่อการซื้อหนังสือ กรุณาเติมเงินเข้าสู่ระบบก่อนซื้อหนังสือใหม่อีกครั้ง</p>
          <a href="<?php echo base_url('index.php/TopUpController') ?>" class="btn btn-success">ไปที่หน้าเติมเงิน</a>
          <a href="" class="btn btn-primary">ยกเลิก</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <h3 style="color:red;">ซื้อหนังสือสำเร็จ! <i class="fa fa-check-circle-o"></i></h3>
          <p>คุณได้ซื้อหนังสือเรียบร้อย สามารถดูหนังสือที่ซื้อได้จาก My Library ของคุณ</p>
          <a href="" class="btn btn-info">ตกลง</a>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $('#buy').click(function ()
    {
      var url = "<?php echo base_url(); ?>"+'book-img/'+$(this).data('id')+'/'+$(this).data('img')+'.jpg';      
      $(".modal-body #book-name").html($(this).data('name'));
      $(".modal-body #book-price").html($(this).data('price'));
      $('.modal-body img').attr('src', url);
      $('#exampleModal').modal('show');
    });  

    $(document).on("click", ".open-myModal2", function () 
    {
      var url = "<?php echo base_url(); ?>"+'book-img/'+$(this).data('id')+'/'+$(this).data('img')+'.jpg';      
      $(".modal-body #book-name").html($(this).data('name'));
      $('.modal-body #img-url2').attr('src', url);
      $('#modal-comment').modal('show');
    });     

    $('#before-submit').click(function () {
      var cash = <?php echo $this->session->flashdata('cash') ?>;
      var book_price = <?php echo $books[0]['book_price'] ?>;
      var book_discount = <?php echo $books[0]['book_total'] ?>;
      var id = document.getElementById('user_id').innerHTML;
      if(id != ""){
        if(book_discount > 0){
          if(cash >= book_discount){
            document.getElementById('book_id').value = <?php echo $books[0]['book_id'] ?>;
            document.getElementById('book_price').value = <?php echo $books[0]['book_total'] ?>;
            $('#tempForm').submit();          
          }
          else{
            $('#modal-error').modal('show');
            $('#exampleModal').modal('hide');
          }
        }
        else{
          if(cash >= book_price){
            document.getElementById('book_id').value = <?php echo $books[0]['book_id'] ?>;
            document.getElementById('book_price').value = <?php echo $books[0]['book_total'] ?>; 
            $('#tempForm').submit();         
          }
          else{
            $('#modal-error').modal('show');
            $('#exampleModal').modal('hide');
          }
        } 
      }
      else{
        $('#tempForm').submit();
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

</body>

</html>
