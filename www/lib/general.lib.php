<?php
	if(!defined('_ANIDB_')) exit; // 개별 파일 접근 제한.

	// 파일 끝에 반드시 추가해야할 코드
	function stream_end(){
		$contents = ob_get_contents();
		ob_end_flush();
	}

	function head_stylesheet($link,$order){
		echo $link;
	}
	function head_javascript($script, $order){

	}