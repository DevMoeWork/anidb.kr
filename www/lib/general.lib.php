<?php
	if(!defined('_ANIDB_')) exit; // 개별 파일 접근 제한.

	// 파일 끝에 반드시 추가해야할 코드
	function stream_end(){
		global $process;
		$contents = ob_get_contents();
		
		// 헤더에 들어갈 문자열 치환
		preg_replace("/{{#SITE_META_TAG#}}/", implode('\n', $process['metatag']), $contents, 1);
		preg_replace("/{{#SITE_STYLESHEET#}}/", implode('\n', $process['stylesheet']), $contents, 1);
		preg_replace("/{{#SITE_JAVASCRIPT#}}/", implode('\n', $process['javascript']), $contents, 1);
		
		//ob_end_flush();
	}

	function head_stylesheet($link){
		$process['stylesheet'][] = $link;
	}
	function head_javascript($script){
		$process['javascript'][] = $script;
	}