<?php
/*!
@name:防洪接口文件
@description:防洪接口调用文件
@author:墨渊 
@version:2.0
@time:2017-10-22
@copyright:优启梦&墨渊
*/
function getIP()
//定义函数
{
    static $realip;
	//定义常量
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
    return $realip;
}

$bool = false;

if ($_GET['code']==='js') {
    echo "function scip(){document.write(\"";
    echo "您的IP是：".getip();
    echo "\");}";
	$bool = true;
   }

if ($_GET['code']==='js-txt') {
    echo "function sciptxt(){document.write(\"";
    echo getip();
    echo "\");}";
	$bool = true;
   }

if (!$bool){   
echo getip();}
?>