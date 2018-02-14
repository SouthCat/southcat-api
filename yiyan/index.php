<?php
/*!
@name:防洪接口文件
@description:防洪接口调用文件
@author:墨渊 
@version:2.0
@time:2017-10-22
@copyright:优启梦&墨渊
*/
if ($_GET['charset']=='GBK'){
    header('Content-Type: text/html; charset=GBK');
      $array=file('southcat.txt');
  $rand=rand(0,3385);
  function utf8_to_gbk($str){
    return mb_convert_encoding($str, 'gbk', 'utf-8');
}
    $string=$array[$rand];
    if ($_GET['code']==='js') {
          echo "function southcat(){document.write(\"";
          echo trim(utf8_to_gbk($string)) . "\");}";
        }else{
          echo trim(utf8_to_gbk($string));
          }
	}else{
    header('Content-Type: text/html; charset=UTF-8');
  $array=file('southcat.txt');
  $rand=rand(0,3385);
  $string=$array[$rand];
    if ($_GET['code']==='js') {
          echo "function southcat(){document.write(\"";
          echo trim($string);
          echo "\");}";
        }else{
          echo trim($string);
          }
	}
?>