<?php
	if(!defined('_ANIDB_')) exit; // 개별 파일 접근 제한.
?>

  <!-- Header -->
  <header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Anime DB</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span id="Filter">Filter :</span>
      <button class="w3-button w3-black" onclick="<?php  ?>">ALL</button>
      <button class="w3-button w3-white">1분기</button>
      <button class="w3-button w3-white">2분기</button>
      <button class="w3-button w3-white">3분기</button>
      <button class="w3-button w3-white">4분기</button>
      <button class="w3-button w3-white">지난년도</button>
    </div>
    </div>
  </header>

  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Fate/kaleid liner 프리즈마☆이리야</b></p>
        <p>TYPE-MOON사의 《Fate 시리즈》에서 파생된 스핀오프 마법소녀물 만화 시리즈. 월간 콤프에이스에서 연재중이며 작가는 히로야마 히로시. 국내 정발 번역은 정홍식.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>카드캡터 사쿠라</b></p>
        <p>일본의 유명 작가 그룹인 CLAMP의 만화와, 그를 원작으로 한 동명의 애니메이션이다. 한국에서는 원제인 카드캡터 사쿠라와 함께 초기 한국어판 만화 제목 및 SBS 방영판 제목인 카드캡터 체리라는 이름으로도 유명하다. 약칭은 한국에서는 '카캡사'와 '카캡체', 일본에서는 CCS, 'CCさくら'로 통용된다.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>에로망가 선생</b></p>
        <p>일본의 라이트 노벨. 후시미 츠카사가 내 여동생이 이렇게 귀여울 리가 없어 완결 이후에 집필한 신작이며 일러스트레이터는 전작과 똑같이 칸자키 히로. 1권이 2013년 12월 10일 전격문고에서 출간되었다. 2017년 4월 23일 기준으로 판매 누계 100만부를 돌파했다. #</p>
      </div>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="./file/p1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="./file/p2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="./file/p3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="##" class="w3-bar-item w3-black w3-button">1</a>
      <a href="<?php ?>" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
