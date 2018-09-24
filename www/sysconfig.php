<?php
	// 이 파일은 어디서든지 선언되어야만 합니다.

	// ANIDB 상수 활성화.
	define('_ANIDB_', true);
	
	// 변수 공격 가능성 제거
	$db = $member = $login = array();
	
	// 각종 경로를 지정합니다. 끝에 슬래시('/')는 제외해주세요.
	define('ANI_PATH', '/home/moework/anidb'); //설치경로
	define('ANI_LAYOUT_PATH', ANI_PATH.'/layout');
	define('ANI_LAYOUT_MAIN_PATH', ANI_LAYOUT_PATH.'/main');
	define('ANI_LAYOUT_PUBLIC_PATH', ANI_LAYOUT_PATH.'/public');

	// 각종 웹상 주소 위치를 지정합니다. 끝에 슬래시('/')는 제외해주세요.
	define('ANI_URL', 'https://anidb.kr'); // 절대주소
	define('ANI_LAYOUT_URL', ANI_URL.'/layout');
	define('ANI_LAYOUT_MAIN_URL', ANI_LAYOUT_URL.'/main');
	define('ANI_LAYOUT_PUBLIC_PATH', ANI_LAYOUT_URL.'/public');