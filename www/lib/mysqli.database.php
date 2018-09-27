<?php
	if(!defined('_ANIDB_')) exit; // 개별 파일 접근 제한.
	
	// MySQLi 데이터베이스 접속
	function sql_connect(){
		global $db;
		if(function_exists('mysqli_connect')){
			$db['connect'] = mysqli_connect(DB_HOST.':'.DB_PORT, DB_ID, DB_PW, DB_NAME) or die('MySQLi Error!');
		}else{
			$db['connect'] = mysql_connect(DB_HOST.':'.DB_PORT, DB_ID, DB_PW) or die('MySQL Error!');;
			$db['select_db'] = mysql_select_db(DB_NAME, $db['connect']);
		}
	}

	// MySQLi 데이터베이스 쿼리 전송
	function sql_query($query, $link){
		global $db;
		if(!$link){ $link = $db['connect']; }
		if(function_exists('mysqli_query')){
			return mysqli_query($query, $link);
		}else{
			return mysql_query($query, $link);	
		}
	}

	// MySQLi 데이터베이스 배열로 가져오기
	function sql_fetch_array($query){
		if(function_exists('mysqli_fetch_array')){
			return mysqli_fetch_array($query, MYSQL_ASSOC);
		}else{
			return mysql_fetch_array($query, MYSQL_ASSOC);	
		}
	}

	// MySQLi 첫번째 값만 배열로 가져오기
	function sql_fetch($query){
		return sql_fetch_array(sql_query($query));
	}

	// MySQLi 마지막 인덱스 값 들고오기
	function sql_insert_id($link){
		global $db;
		if(!$link){ $link = $db['connect']; }
		if(function_exists('mysqli_insert_id')){
			return mysqli_insert_id($link);
		}else{
			return mysql_insert_id($link);	
		}
	}