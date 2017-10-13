<?php

	/*
	 * @ 使用 curl 模拟表单提交
	 * @ 2017-10-10
	 */

	$postData  = [
		'name' => '雨醉风尘',
		'content' => '打败你的根本就不是高考，而是懒做、胆怯又不善于成长的自己罢了。'
	];

	$url = 'http://localhost/Mooc_Practice_Demo/758/post.php';

	$ch = curl_init();

	#设置提交的网址
	curl_setopt($ch, CURLOPT_URL, $url);

	#设置提交的方法
	curl_setopt($ch, CURLOPT_POST, 1);

	#设置提交的数据
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

	#提交成功后数据返回字符串
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$outPut = curl_exec($ch);

	curl_close($ch);

?>
