<?php
    define("PATH", str_replace('\\', '/', dirname(dirname(__FILE__))));
	include PATH.'/libs/Smarty.class.php';
	$smarty=new Smarty();
	//设置模板目录
    $smarty -> setTemplateDir(PATH."/tpls")
    //设置编译目录
            -> setCompileDir(PATH."/coms");
    
	