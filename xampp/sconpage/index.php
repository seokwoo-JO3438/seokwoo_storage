<!DOCTYPE html>
<html lang="ko">

<head>
  <?php
  include "./db.php";
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SCON - Sports Contest</title>
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./css/page1.css">
  <link rel="stylesheet" href="./css/jquery-ui.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">



</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SCON</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Introduce</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Make a room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Enter a room</a>
          </li>
          <?php
          if(!isset($_SESSION['email'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <?php
        }else{
          ?>
          <li class="nav-item">
            <a class="nav-link" href="./member/logout.php">Logout</a>
          </li>
          <?php
        }
        ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">

        <div class="intro-heading text-uppercase">SCON</div>
          <div class="intro-lead-in">Enjoy your own sports contest</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">더 알아보기</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Introduce</h2>
          <h3 class="section-subheading text-muted">It's made for you.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">A new meeting</h4>
          <p class="text-muted">매번 똑같은 상대와의 경기에 지루하신 분<br>새로운 매칭을 통해 실력을 향상 시키고 싶은 분<br>비슷한 실력을 갖춘 사람을 만나고 싶은 분</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Worker</h4>
          <p class="text-muted">대회를 일일이 확인하기 바쁘신 분<br>바쁜 일정에 개최 된 대회에 참여하지 못하는 분<br></p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Location</h4>
          <p class="text-muted">원하는 경기장에서 스포츠를 즐기고 싶으신 분</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Make a room -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">MAKE A ROOM</h2>
          <h3 class="section-subheading text-muted">나만의 대회를 만들어주세요.</h3>
        </div>
      </div>
    <form action="./room/room_ok.php" method="POST">
      <div style="margin-top:5%"class="option_wrap">
      <div class="option_box_left">
        <div class="box_left_L">
          <label for="kind"><strong>Select</strong></label>
          <select id="kind" name="kind">
            <option value="tennis" selected>테니스</option>
            <option value="badminton">배드민턴</option>
            <option value="sparring">스파링</option>
          </select>
        </div><!--
     --><div class="box_left_R">
           <label for="location"><strong>Location</strong></label>
           <select id="location" name="location">
             <option value="서울" selected>서울</option>
             <option value="부산">부산</option>
             <option value="대구">대구</option>
             <option value="인천">인천</option>
             <option value="강원도">강원도</option>
             <option value="광주">광주</option>
             <option value="대전">대전</option>
             <option value="울산">울산</option>
             <option value="경남">경상남도</option>
           </select>
        </div>
      </div><!--
   --><div class="option_box_right">
        <div class="box_right_R">
        <div class="box_right_R_L stadiumstyle" style="width:100%">
          <label for="stadium"><strong>Stadium</strong></label>
          <input type="text" name="stadium">
        </div>
        </div><!--
   --><div class="box_right_L">
       <label for="datepicker"><strong>Date</strong></label>
       <input type="text" id="datepicker1" name="Date" class="ico-date-picker" placeholder="선택하세요" value readonly>
      </div>
    </div>
    </div>
    <div class="option_wrap">
    <div class="option_box_left">
      <div class="box_left_L addlength" style="width:100%">
        <label for="content"><strong>Content</strong></label>
          <input style="letter-spacing:-1px" type="text" name="content" placeholder="1줄 이내에 간략히 내용을 입력해주세요.">
      </div><!--
    -->
    </div><!--
    --><div class="option_box_right">
      <div class="box_right_L">
        <label for="title"><strong>Title</strong></label>
        <input type="text" name="title">

      </div><!--
    --><div class="box_right_R">
         <div class="box_right_R_L">
           <label for="people"><strong>People</strong></label>
           <select style="width:37% !important"id="people"class="select1" name="people">
             <option value="8" selected>8</option>
             <option value="4">4</option>
             <option value="6">6</option>
             <option value="10">10</option>
             <option value="12">12</option>
             <option value="14">14</option>
           </select>
         </div><!--
      --><div style="position:absolute; "class="box_right_R_R">
           <?php
           if(!isset($_SESSION['email'])){ ?>
           <button class="btnsize" id="btn-submit" type="button" onclick="moom()"><strong>방만들기</strong></button>
           <script language='JavaScript'>
             function moom(){
               alert("로그인 화면으로 이동합니다.");
               location.href='/login.php';
             }
           </script>
           <?php
           }
            else{  ?>

             <button class="btnsize"type="submit" id="btn-submit"><strong>방만들기</strong></button>

           <?php
           }
           ?>

         </div>
       </div>
    </div>
    </div>
    </form>
  </div>
    <div id="map" style="width:1000px;height:400px;"></div>

  </section>

  <!-- Enter a room -->

    <section style="padding:20% auto 20% auto"class="bg-light page-section" id="portfolio">
      <div class="container" style="padding-bottom: 14%">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ENTER A ROOM</h2>
            <h3 class="section-subheading text-muted">원하는 종목을 선택해주세요.</h3>
          </div>
        </div>

        <div class="row">
          <div id="tab_top_1" class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link">
              <div class="portfolio-hover1">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img style="box-shadow: 0 1px 10px rgba(0,0,0,0.5);"class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Tennis</h4>
              <div class="text-muted">검색하기</div>
            </div>
          </div>
          <div id="tab_top_2"class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link">
              <div class="portfolio-hover2">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img style="box-shadow: 0 1px 10px rgba(0,0,0,0.5);"class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Badminton</h4>
              <div class="text-muted">검색하기</div>
            </div>
          </div>
          <div id="tab_top_3"class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link">
              <div class="portfolio-hover3">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img style="box-shadow: 0 1px 10px rgba(0,0,0,0.5);"class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Sparring</h4>
              <div class="text-muted">검색하기</div>
            </div>
          </div>
          <!--tennis_search-->
          <div id="club_1" class="seokwoo">
          <div class="fresh-table toolbar-color-orange">
                <table id="fresh-table1" class="table">
                    <colgroup>
                      <col width="10px">
                      <col width="150px">
                      <col width="10px">
                      <col width="150px">
                      <col width="80px">
                      <col width="20px">
                      <col width="30px">
                    </colgroup>
                    <thead>
                      <th class="idx">Master Email</th>
                      <th class="title">Title</th>
                      <th class="location">Location</th>
                      <th class="stadium">Stadium</th>
                      <th class="date">Date</th>
                      <th class="people">People</th>
                      <th class="actions">Confirm</th>
                    </thead>
                    <tbody id="loop">
                      <?php
                      $sql = 'select * from tennis_room ' ;
                      $result = mysqli_query($db, $sql);
                      while($row = $result->fetch_assoc())
                      {
                       ?>
                        <tr>
                          <td class="idx"><?php echo $row['email']?></td>
                          <td class="title"> <?php echo $row['title'] ?></td>
                          <td class="location"><?php echo $row['location']?></td>
                          <td class="stadium"><?php echo $row['stadium']?></td>
                          <td class="date"><?php echo $row['date']?></td>
                          <td class="people"><?php echo $row['people']?></td>
                          <td><button onClick = "location.href='./view_page1.php?email=<?php echo $row['email']?>&idx=<?php echo $row['idx']?>' " style="background-color:orange;"class="btn-ro">Click</button></td>
                        </tr>
                        <?php
                      }?>
                    </tbody>
                </table>
            </div>
          </div>
          <!--sparring_search-->
          <div id="club_2" class="seokwoo">
          <div class="fresh-table toolbar-color-azure">
                <table id="fresh-table2" class="table">
                    <colgroup>
                      <col width="10px">
                      <col width="150px">
                      <col width="10px">
                      <col width="150px">
                      <col width="80px">
                      <col width="20px">
                      <col width="30px">
                    </colgroup>
                    <thead>
                      <th class="idx">Master Email</th>
                      <th class="title">Title</th>
                      <th class="location">Location</th>
                      <th class="stadium">Stadium</th>
                      <th class="date">Date</th>
                      <th class="people">People</th>
                      <th class="actions">Confirm</th>
                    </thead>
                    <?php
                    $sql = 'select * from badminton_room ' ;
                    $result = mysqli_query($db, $sql);
                    while($row = $result->fetch_assoc())
                    {
                     ?>
                      <tr>
                        <td class="idx"><?php echo $row['email']?></td>
                        <td class="title"> <?php echo $row['title'] ?></td>
                        <td class="location"><?php echo $row['location']?></td>
                        <td class="stadium"><?php echo $row['stadium']?></td>
                        <td class="date"><?php echo $row['date']?></td>
                        <td class="people"><?php echo $row['people']?></td>
                        <td><button onClick = "location.href='./view_page2.php?email=<?php echo $row['email']?>&idx=<?php echo $row['idx']?>' " style="background-color:#36AFEC;"class="btn-ro">Click</button></td>
                      </tr>
                      <?php
                    }?>
                    </tbody>
                </table>
            </div>
          </div>
          <!--sparring_search-->
          <div id="club_3" class="seokwoo ">
          <div class="fresh-table toolbar-color-red">
            <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
            -->
                <table id="fresh-table3" class="table">
                    <colgroup>
                      <col width="10px">
                      <col width="150px">
                      <col width="10px">
                      <col width="150px">
                      <col width="80px">
                      <col width="20px">
                      <col width="30px">
                    </colgroup>
                    <thead>
                      <th class="idx">Master Email</th>
                      <th class="title">Title</th>
                      <th class="location">Location</th>
                      <th class="stadium">Stadium</th>
                      <th class="date">Date</th>
                      <th class="people">People</th>
                      <th class="actions">Confirm</th>
                    </thead>
                    <tbody id="loop">
                      <?php
                      $sql = 'select * from sparring_room ' ;
                      $result = mysqli_query($db, $sql);
                      while($row = $result->fetch_assoc())
                      {
                       ?>
                        <tr>
                          <td class="idx"><?php echo $row['email']?></td>
                          <td class="title"> <?php echo $row['title'] ?></td>
                          <td class="location"><?php echo $row['location']?></td>
                          <td class="stadium"><?php echo $row['stadium']?></td>
                          <td class="date"><?php echo $row['date']?></td>
                          <td class="people"><?php echo $row['people']?></td>
                          <td><button onClick = "location.href='./view_page3.php?email=<?php echo $row['email']?>&idx=<?php echo $row['idx']?>' " style="background-color:#ED362C;"class="btn-ro">Click</button></td>
                        </tr>
                        <?php
                      }?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </section>


  <!-- Bootstrap core JavaScript -->
  <script src="./js/jquery-3.4.1.js"></script>
  <script src="./js/jquery-ui.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <script>
    $("input[id^='datepicker']").each(function() {

    var _this = this.id;

    $('#' + _this).datepicker({
      dateFormat: 'yy-mm-dd'
      ,showOtherMonths: true
      ,showMonthAfterYear: true
      ,changeYear: true
      ,changeMonth: true
      ,showOn: "both"
      ,buttonImage: "./css/calendar.jpg"
            ,buttonImageOnly: true
            ,buttonText: "선택"
            ,yearSuffix: "년"
            ,monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12']
            ,monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월']
            ,dayNamesMin: ['일','월','화','수','목','금','토']
            ,dayNames: ['일요일','월요일','화요일','수요일','목요일','금요일','토요일']
            ,minDate: "-0D"
            ,maxDate: "+2M 26D"
      });
       $('#datepicker').datepicker('setDate', 'today');
    });
  </script>

  <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap-table.js"></script>
  <script src="./effect.js"> </script>

  <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=09b0a7cd449514e47de28a8b73b862df&libraries=services,clusterer,drawing"></script>
  <script>
  // 마커를 클릭하면 장소명을 표출할 인포윈도우 입니다
  var infowindow = new kakao.maps.InfoWindow({zIndex:1});

  var mapContainer = document.getElementById('map'), // 지도를 표시할 div
      mapOption = {
          center: new kakao.maps.LatLng(37.566826, 126.9786567), // 지도의 중심좌표
          level: 3 // 지도의 확대 레벨
      };

  // 지도를 생성합니다
  var map = new kakao.maps.Map(mapContainer, mapOption);

  // 장소 검색 객체를 생성합니다
  var ps = new kakao.maps.services.Places();

  // 키워드로 장소를 검색합니다
  ps.keywordSearch('체육관', placesSearchCB);

  // 키워드 검색 완료 시 호출되는 콜백함수 입니다
  function placesSearchCB (data, status, pagination) {
      if (status === kakao.maps.services.Status.OK) {

          // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
          // LatLngBounds 객체에 좌표를 추가합니다
          var bounds = new kakao.maps.LatLngBounds();

          for (var i=0; i<data.length; i++) {
              displayMarker(data[i]);
              bounds.extend(new kakao.maps.LatLng(data[i].y, data[i].x));
          }

          // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
          map.setBounds(bounds);
      }
  }

  // 지도에 마커를 표시하는 함수입니다
  function displayMarker(place) {

      // 마커를 생성하고 지도에 표시합니다
      var marker = new kakao.maps.Marker({
          map: map,
          position: new kakao.maps.LatLng(place.y, place.x)
      });

      // 마커에 클릭이벤트를 등록합니다
      kakao.maps.event.addListener(marker, 'click', function() {
          // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
          infowindow.setContent('<div style="padding:5px;font-size:12px;">' + place.place_name + '</div>');
          infowindow.open(map, marker);
      });
  }
  </script>

  <script type="text/javascript">

    $("table[id^='fresh-table']").each(function() {
         var _this = this.id;

             full_screen = false;

          $().ready(function(){

              $('#' + _this).bootstrapTable({
                  toolbar: ".toolbar",

                  "showRefresh": true,
                  "search": true,
                  "showToggle": true,
                  "showColumns": true,
                  "filter": true,
                  "ordering": true,
                  "order": [[0,"desc"]],
                  "paging": true,
                  "pagination": true,
                  "striped": true,
                  "sortable": true,
                  "pageSize": 8,
                  "pageList": [8,10,25,50,100],

                  formatShowingRows: function(pageFrom, pageTo, totalRows){
                      //do nothing here, we don't want to show the text "showing x of y from..."
                  },
                  formatRecordsPerPage: function(pageNumber){
                      return pageNumber + " rows visible";
                  },
                  icons: {
                      refresh: 'fa fa-refresh',
                      toggle: 'fa fa-th-list',
                      columns: 'fa fa-columns',
                      detailOpen: 'fa fa-plus-circle',
                      detailClose: 'fa fa-minus-circle'
                  }
              });
          });
  });
      </script>



</body>

</html>
