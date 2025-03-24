<?php

namespace Rhymix\Modules\EasyManage\Controllers;

/**
 * 운영도우미
 * 
 * Copyright (c) zodkr
 * 
 * Generated with https://www.poesis.dev/tools/rxmodulegen
 */
class Index extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		$this->setTemplatePath($this->module_path . 'views/');
	}
	
	/**
	 * 메인 화면 예제
	 */
	public function dispEasyManageIndex()
	{
		// 뷰 파일명 지정
		$this->setTemplateFile('index');
	}
}
