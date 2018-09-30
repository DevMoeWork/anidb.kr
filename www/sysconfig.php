<?php
	// 이 파일은 어디서든지 선언되어야만 합니다.

	// ANIDB 상수 활성화.
	define('_ANIDB_', true);
	
	// 변수 공격 가능성 제거
	$db = $member = $login = $process = $genre = array();
	
	// 각종 경로를 지정합니다. 끝에 슬래시('/')는 제외해주세요.
	define('ANI_PATH', '/home/moework/anidb.kr/www'); //설치경로
	define('ANI_LAYOUT_PATH', ANI_PATH.'/layout');
	define('ANI_LAYOUT_SKIN_PATH', ANI_LAYOUT_PATH.'/default');
	define('ANI_CSS_PATH', ANI_LAYOUT_PATH.'/asset/css');
	define('ANI_JS_PATH', ANI_LAYOUT_PATH.'/asset/js');
	define('ANI_FONT_PATH', ANI_LAYOUT_PATH.'/asset/font');
	define('ANI_LAYOUT_MAIN_PATH', ANI_LAYOUT_PATH.'/main');
	define('ANI_LAYOUT_PUBLIC_PATH', ANI_LAYOUT_PATH.'/public');
	define('ANI_LIB_PATH', ANI_PATH.'/lib');

	// 각종 웹상 주소 위치를 지정합니다. 끝에 슬래시('/')는 제외해주세요.
	define('ANI_URL', 'http://anidb.kr'); // 절대주소
	define('ANI_LAYOUT_URL', ANI_URL.'/layout');
	define('ANI_LAYOUT_SKIN_URL', ANI_LAYOUT_URL.'/default');
	define('ANI_CSS_URL', ANI_LAYOUT_SKIN_URL.'/asset/css');
	define('ANI_JS_URL', ANI_LAYOUT_SKIN_URL.'/asset/js');
	define('ANI_FONT_URL', ANI_LAYOUT_SKIN_URL.'/asset/font');
	define('ANI_LAYOUT_MAIN_URL', ANI_LAYOUT_URL.'/main');
	define('ANI_LAYOUT_PUBLIC_URL', ANI_LAYOUT_URL.'/public');
	define('ANI_LIB_URL', ANI_URL.'/lib');

	// 데이터베이스 관련 정보
	include_once(ANI_LIB_PATH.'/general.lib.php'); // General Database
	include_once(ANI_PATH.'/database.php'); // MySQL Account Info
	include_once(ANI_LIB_PATH.'/mysqli.database.php'); // MySQLi Database / MySQL Database Loading
	sql_connect(); // MySQLi Start

	$genre = array('SF', '공포', '닌자', '드라마', '디스토피아', '로맨스', '로봇', '모험', '뮤지컬', '미스터리', '변신', 'BL', '서부', '서스팬스', '스릴러', '스포츠', '시대극', '액션', '여장', '일상물', '종교', '코미디', '판타지', '학원물', '하렘', '역하렘', '마법소녀', '백합', '음악', '고어', '아동', '성인', '공포', '만화');
	
	ob_start();