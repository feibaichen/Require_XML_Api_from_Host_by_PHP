<?php

class response
{
	public static function xml(){
		header("Content-Type:text/xml");
		$xml="<?xml version='1.0' encoding ='UTF-8'?>\n";
		$xml.="<root>\n";
		$xml.="<code>200</code>";
		$xml.="<message>数据返回成功</message>";
		$xml.="<data>\n";
		$xml.="<id>1</id>\n";
		$xml.="<name>feibaichen</name>\n";
		$xml.="</data>\n";
		$xml.="</root>";
		echo $xml;
	}

}

	Response::xml();
  ?>