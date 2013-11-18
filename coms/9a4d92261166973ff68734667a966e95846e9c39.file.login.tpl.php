<?php /* Smarty version Smarty-3.1.12, created on 2013-06-07 17:00:25
         compiled from "D:\www\xstudio\yun\tpls\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:396751b1a129e7fab6-15173624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4d92261166973ff68734667a966e95846e9c39' => 
    array (
      0 => 'D:\\www\\xstudio\\yun\\tpls\\login.tpl',
      1 => 1357216542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '396751b1a129e7fab6-15173624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b1a129ef3518_18025130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b1a129ef3518_18025130')) {function content_51b1a129ef3518_18025130($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录云 - <?php echo @SNAME;?>
</title>
<link rel="stylesheet" href="../public/css/login.css" type="text/css" />
<link rel="shortcut icon" href="../public/images/index.ico" type="image/x-icon" />
</head>

<body>
  <div class="container">
		<div class="logo"></div>
        <div class="form">
        	<form action="./" method="post">
                <p>
                    <label>
                        用户名<br/>
                        <input type="text" value="" class="txt" name="name" />
                    </label>
                </p>
                <p>
                    <label>
                    	密码<br/>
                        <input type="password" class="txt" name="password"/>
                    </label>
                </p>
                <p class="bottom">
                	<label class="rem"><input name="rememberme" type="checkbox" value="forever" > 记住我的登录信息</label>
                    <input type="submit" class="sub" value="登录" />
                    <input type="hidden" name="action" value="login" />
                </p>
            </form>
        </div>
        <div class="alink">
        	<p>
        		<a href="../">&larr; 回到 <?php echo @SNAME;?>
 首页</a>
        	</p>
        </div>
    </div>	
</body>
</html><?php }} ?>