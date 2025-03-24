<?php

namespace Rhymix\Modules\Easy_manage\Controllers;

/**
 * 운영도우미
 * 
 * Copyright (c) zodkr
 * 
 * Generated with https://www.poesis.dev/tools/rxmodulegen
 */
class Write extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		$this->setTemplatePath($this->module_path . 'views/');
	}
	
	/**
	 * 글쓰기 화면 예제
	 */
	public function dispEasy_manageWrite()
	{
		// 뷰 파일명 지정
		$this->setTemplateFile('write');
	}
	
	/**
	 * 글쓰기 POST 액션 예제
	 */
	public function procEasy_manageWrite()
	{
		// XE에서는 view와 controller로 분리되어 있었으나,
		// 네임스페이스를 사용하여 각각의 클래스를 여러 개로 나눌 수 있게 되었으므로
		// 연관된 기능들을 하나의 클래스에 모아서 편리하게 관리할 수 있습니다.
		// GET, POST 액션은 여전히 disp, proc으로 구분합니다.
	}
}
