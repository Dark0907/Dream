<?php
#获取浏览器类型

#Public是声明公有变量、类或函数的前缀，单独文件方法不能使用public
//public function index() {
	function index() {
        $browser = 'other';

        if(strpos($_SERVER["HTTP_USER_AGENT"], "TheWorld") || strpos($_SERVER["HTTP_USER_AGENT"], "QIHU THEWORLD")){
            $browser = 'world';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "Maxthon")){
            $browser = 'aoyou';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "TencentTraveler")){ //  or (strpos($_SERVER["HTTP_USER_AGENT"], "Trident") AND strpos($_SERVER["HTTP_USER_AGENT"], "SLCC2"))
            $browser = 'telcent';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "SE 2") AND strpos($_SERVER["HTTP_USER_AGENT"], "MetaSr")){
            $browser = 'sogou';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "360SE") AND !strpos($_SERVER["HTTP_USER_AGENT"], "TencentTraveler")){
            $browser = '360';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "QIHU 360EE") AND !strpos($_SERVER["HTTP_USER_AGENT"], "TencentTraveler")){
            $browser = '360';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "MSIE 9.0")){
            $browser = 'ie9';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "MSIE 8.0")){
            $browser = 'ie8';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "MSIE 7.0")){
            $browser = 'ie7';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "MSIE 6.0")){
            $browser = 'ie6';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "Firefox")){
            $browser = 'firefox';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "Chrome")){
            $browser = 'chrome';
        }elseif(strpos($_SERVER["HTTP_USER_AGENT"], "Safari")){
            $browser = 'safari';
        }

        return $browser;exit;
        //redirect("/start/$browser");
    }

    print(index());

