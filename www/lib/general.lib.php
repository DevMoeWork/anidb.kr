<?php
	if(!defined('_ANIDB_')) exit; // 개별 파일 접근 제한.

	// 파일 끝에 반드시 추가해야할 코드
	function stream_end(){
		global $process;
		$contents = ob_get_contents();
		
		// 헤더에 들어갈 문자열 치환
		$contents = preg_replace("/\{\{\#SITE_META_TAG\#\}\}/", implode(PHP_EOL, $process['metatag']), $contents, 1);
		$contents = preg_replace("/\{\{\#SITE_STYLESHEET\#\}\}/", implode(PHP_EOL, $process['stylesheet']), $contents, 1);
		$contents = preg_replace("/\{\{\#SITE_JAVASCRIPT\#\}\}/", implode(PHP_EOL, $process['javascript']), $contents, 1);
		
		ob_end_clean();
		
		echo $contents;
	}

	function head_stylesheet($link){
		global $process;
		$process['stylesheet'][] = $link;
	}
	function head_javascript($script){
		global $process;
		$process['javascript'][] = $script;
	}
	function head_metatag($tag){
		global $process;
		$process['metatag'][] = $tag;
	}