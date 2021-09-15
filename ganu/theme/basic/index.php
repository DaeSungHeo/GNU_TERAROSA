<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<section id="mainVisual">
					<!-- Slider main container -->
					
						<!-- Additional required wrapper -->
						
							

							<div class="latest_wr">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/swiper_card2', 'banner',3,0);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>
								
					
					
					
					<div class="info_box">
						<div class="info_txt">
							<div class="info on">
							<div class="latest_wr">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_block3', 'banner1',1,100);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>
							
							</div>
						
						</div>
					
					</div>
					
				
				</section>
                        
<!-- 여기부터 -->
<div id="hh">


<div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
  <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block_15', 'content5',2,100);		// 최소설치시 자동생성되는 갤러리게시판
    ?>

    
  
  </div>
</div>

    </div>
<!-- 여기까지 -->


<div id="hha" >
        <div class="h1h1">
    <h2 class="h2h2">STORY</h2>
    </div>
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block_12', 'content2',4,100);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    </div>

<div id="hha1">
<?php echo latest('theme/pic_list4', 'content3',1,0);?>
<?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block_13', 'content1',4,0);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    

    </div>  

    <div id="hha2">
        <h2 class="hh1">SHOP</h2>
        <div class="hh2">
      

        <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block_14', 'content4',4,100);		// 최소설치시 자동생성되는 갤러리게시판
    ?>

   
    </div>
    </div>


    <div id="hh3">
      <h2># SNS</h2>
  <div class="carousel-gallery">
    <div class="swiper-container">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_list5', 'content6',6,0);		// 최소설치시 자동생성되는 갤러리게시판
    ?>

        
    </div>
  </div>
</div>

<div id="map" style="width:100%;height:350px;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=b5d48fac7718c058b3c0d9630290eae1"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div  
    mapOption = { 
        center: new kakao.maps.LatLng(37.506004190244916, 127.05619028462704), // 지도의 중심좌표
        level: 9 // 지도의 확대 레벨
    };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
 
 // 마커를 표시할 위치와 title 객체 배열입니다 
 var positions = [
     {
         title: '테라로사 커피공장', 
         latlng: new kakao.maps.LatLng(37.696089773377345, 128.89193011346663)
     },
     {
         title: '테라로사 경포호수점', 
         latlng: new kakao.maps.LatLng(37.78810895979361, 128.90734011161868)
     },
     {
         title: '테라로사 사천점', 
         latlng: new kakao.maps.LatLng(37.82266175057859, 128.88503915579773)
     },
     {
         title: '테라로사 임당점',
         latlng: new kakao.maps.LatLng(37.754886384420566, 128.8945108269605)
     },
     {
         title: '테라로사 광화문점', 
         latlng: new kakao.maps.LatLng(37.574940244150774, 126.97958112510759)
     },
     {
         title: '테라로사 포스코센터점', 
         latlng: new kakao.maps.LatLng(37.506004190244916, 127.05619028462704)
     },
     {
         title: '테라로사 길동점', 
         latlng: new kakao.maps.LatLng(37.53628234768484, 127.14635838462758)
     },
     {
         title: '테라로사 국립현대미술관(서울)점', 
         latlng: new kakao.maps.LatLng(37.5789461322319, 126.9801179116145)
     },
       {
         title: '테라로사 노을공원점', 
         latlng: new kakao.maps.LatLng(37.56945692587783, 126.87960621161433)
     },
       {
         title: '테라로사 코엑스점', 
         latlng: new kakao.maps.LatLng(37.51090107461127, 127.05980096743495)
     },
       {
         title: '테라로사 예술의전당점', 
         latlng: new kakao.maps.LatLng(37.47924830393669, 127.01175054414755)
     },
       {
         title: '테라로사 한남점', 
         latlng: new kakao.maps.LatLng(37.534880874611076, 126.99953176928507)
     },
       {
         title: '테라로사 동탄호수점', 
         latlng: new kakao.maps.LatLng(37.17069241071275, 127.10494617112741)
     },
       {
         title: '테라로사 판교점', 
         latlng: new kakao.maps.LatLng(37.389472366854015, 127.09206694229607)
     },
       {
         title: '테라로사 서종점', 
         latlng: new kakao.maps.LatLng(37.62493935229827, 127.35433115024502)
     },
       {
         title: '테라로사 세종점', 
         latlng: new kakao.maps.LatLng(36.504251176502066, 127.2609370929777)
     },
       {
         title: '테라로사 수영점', 
         latlng: new kakao.maps.LatLng(35.177632130160916, 129.11471848458297)
     },
       {
         title: '테라로사 서귀포점', 
         latlng: new kakao.maps.LatLng(33.24971696370177, 126.6184823808495)
     },
     
 ];

// 마커 이미지의 이미지 주소입니다
var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기 입니다
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
        image : markerImage // 마커 이미지 
    });
}
</script>


    
    <script>
  AOS.init();

$(function(){
    var count = 0;
    setInterval(function(){
        count++ ;
        count = count % 3 ;
        $("#hha .list"+(count+1)).addClass("act").siblings().removeClass("act")
    }, 2500);
    $(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

});
(function () {
    var expand;
    expand = function () {
        var $input, $search;
        $search = $('.search');
        $input = $('.input');
        if ($search.hasClass('close')) {
            $search.removeClass('close');
            $input.removeClass('square');
        } else {
            $search.addClass('close');
            $input.addClass('square');
        }
        if ($search.hasClass('close')) {
            $input.focus();
        } else {
            $input.blur();
        }
    };
    $(function () {
        var $accordion, $wideScreen;
        $accordion = $('#accordion').children('li');
        $wideScreen = $(window).width() > 767;
        if ($wideScreen) {
            $accordion.on('mouseenter click', function (e) {
                var $this;
                e.stopPropagation();
                $this = $(this);
                if ($this.hasClass('out')) {
                    $this.addClass('out');
                } else {
                    $this.addClass('out');
                    $this.siblings().removeClass('out');
                }
            });
        } else {
            $accordion.on('touchstart touchend', function (e) {
                var $this;
                e.stopPropagation();
                $this = $(this);
                if ($this.hasClass('out')) {
                    $this.addClass('out');
                } else {
                    $this.addClass('out');
                    $this.siblings().removeClass('out');
                }
            });
        }
    });
    $(function () {
        var $container, $menu, $menubtn, $navbar;
        $menubtn = $('#hb');
				$navbar = $('.navbar');
        $menu = $('.navigation');
        $container = $('.site-inner');
        $menubtn.on('click', function (e) {
            if ($menubtn.hasClass('active')) {
                $menubtn.removeClass('active');
                $menu.removeClass('slide-right');
                $container.removeClass('slide-right');
								$navbar.removeClass('slide-right');
            } else {
                $menubtn.addClass('active');
                $menu.addClass('slide-right');
                $container.addClass('slide-right');
								$navbar.addClass('slide-right');
            }
        });
    });
    $(function () {
        var $button, clickOrTouch;
        clickOrTouch = 'click touchstart';
        $button = $('#search-button');
        $button.on(clickOrTouch, expand);
    });
    $(function () {
        var $box;
        $box = $('.sm-box');
        $box.on('click', function (e) {
					e.preventDefault();
            var $this;
            $this = $(this);
            if ($this.hasClass('active')) {
                $this.removeClass('active');
            } else {
                $this.addClass('active');
            }
        });
    });
}.call(this));

$(function(){
  
  var swiper = new Swiper('.carousel-gallery .swiper-container', {
    effect: 'slide',
    speed: 5000,
    slidesPerView: 5,
    spaceBetween: 20,
    simulateTouch: true,
    autoplay: {
      delay: 5000,
      stopOnLastSlide: false,
      disableOnInteraction: false
    },
    pagination: {
      el: '.carousel-gallery .swiper-pagination',
      clickable: true
    },
    breakpoints: {
      // when window width is <= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 5
      },
      // when window width is <= 480px
      425: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is <= 640px
      768: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  }); /*http://idangero.us/swiper/api/*/

  

});
</script>


<?php

include_once(G5_THEME_PATH.'/tail.php');
