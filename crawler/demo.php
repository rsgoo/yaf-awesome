<?php

require 'vendor/autoload.php';

use HtmlParser\ParserDom;

class  Crawler
{
	public function getImages($url)
	{
		$urlParser = parse_url($url);
		#文件夹名称
        $folderName = $urlParser['host'];
		if (!is_dir($folderName)) {
            mkdir($folderName);
        }

		$htmlContent = file_get_contents($url);
        $htmlDom = new ParserDom($htmlContent);
        $imgDom = $htmlDom->find('img');
        foreach ($imgDom as $image) {
            $imgSource = $image->getAttr('src');
            $imgOrigin = $image->getAttr('data-original');
            $imgRetina = $image->getAttr('data-retina');
            $imgDataSrc= $image->getAttr('data-src');

            $imgUrl = '';
            if ($imgDataSrc) {
                $imgUrl = $imgDataSrc;
			} elseif ($imgRetina) {
                $imgUrl = $imgRetina;
			} elseif ($imgOrigin) {
                $imgUrl = $imgOrigin;
			} else {
                $imgUrl = $imgSource;
			}
			if (strpos($imgUrl, '//')==0) {
                $imgUrl =  str_replace("//", '', $imgUrl);
			}
			if (strpos($imgUrl,'/')==0) {
				$imgUrl = $folderName.$imgUrl;
			}
			$saveImg = self::getImgData($imgUrl, $folderName);
			if ($saveImg) {
				echo 'success'.$saveImg.PHP_EOL;
			} else {
				echo 'failed'.PHP_EOL;
			}
		}

	}

    protected function getImgData($imgUrl, $folderName)
    {
        $imgParser = parse_url($imgUrl);

        //$imgParser = parse_url('http://p1.music.126.net/qFaCvRNzDRgj-8JBsQTO9w==/3401888996481455.jpg?param=180y180');
        $pathInfo  = $imgParser['path'];
        $pathArr   = explode('/', $pathInfo);
        $pathArrLen= count($pathArr);
        $fileName  = $pathArr[$pathArrLen-1];



		$ch = curl_init($imgUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        //读取图片信息
        $rawData = curl_exec($ch);
        curl_close($ch);
        $fileName = microtime(true).'.jpg';
		$imgSavePath = $folderName.'/'.$fileName;
        $rest = file_put_contents($imgSavePath,$rawData);

		if ($rest) {
			return $fileName;
		} else {
			return false;
		}

    }
}

$testDemo = new Crawler();

$testDemo->getImages('https://www.ithome.com/html/it/329586.htm');


?>
