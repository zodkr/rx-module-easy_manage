<?php

namespace Rhymix\Modules\EasyManage\Controllers;

/**
 * 운영도우미
 * 
 * Copyright (c) zodkr
 * 
 * Generated with https://www.poesis.dev/tools/rxmodulegen
 */
class Read extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		$this->setTemplatePath($this->module_path . 'views/');
	}
	
	/**
	 * 글읽기 화면 예제
	 */
	public function dispEasyManageRead()
	{
		// 글번호 받아오기
		$item_srl = \Context::get('item_srl');
		
		// 뷰 파일명 지정
		$this->setTemplateFile('read');
	}
}
