<?php /* Smarty version Smarty-3.1.12, created on 2013-06-07 16:27:19
         compiled from "frame\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1055251b199671c7f94-57358135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0bdf7c4017b5299bd1a545add209039441716ca' => 
    array (
      0 => 'frame\\login.html',
      1 => 1357643347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055251b199671c7f94-57358135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b199671ded56_41731519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b199671ded56_41731519')) {function content_51b199671ded56_41731519($_smarty_tpl) {?><div class="bg"></div>
<div class="container" id="log">
	<div class="tt">
    	<span>登录云桌面</span>
    </div>
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
                <a class="r" href="javascript:register()">注册一个？</a>
                <input type="submit" class="sub" value="登录" />
                <input type="hidden" name="action" value="login" />
            </p>
        </form>
    </div>
</div>	

<div class="reg" id="rg">
	<div class="tt">
    	<span>注册新账号</span>
    </div>
	<div class="form">
        <form id="regform" onSubmit="return validateData('click')" action="./" method="post">
        	<table>
            	<tr>
                	<td class="f">用户名</td>
                    <td class="t"><input type="text" maxlength="20" value="" class="txt" name="regname" /></td><td class="e"></td>
                </tr>
            	<tr>
                	<td class="f">密码</td>
                    <td class="t"><input type="password" maxlength="21" class="txt" name="regpassword"/></td><td class="e"></td>
                </tr>
            	<tr>
                	<td class="f">确认密码</td>
                    <td class="t"><input type="password" maxlength="21" class="txt" name="regrepassword"/></td><td class="e"></td>
                </tr>
            	<tr>
                	<td class="f">验证码</td>
                    <td class="t">
                    	<input type="text" value="" maxlength="4" class="cod" name="regvcode" />
                        <img id="cd"  onclick="this.src='config/code.src.php?'+Math.random()" style="position:relative; top:10px;" src="config/code.src.php" title="看不清？换一个" alt=""/>
                        <span class="ch"><a href="#"  onclick="document.getElementById('cd').src='config/code.src.php?'+Math.random()">换一张?</a></span>
                    </td><td class="e"></td>
                </tr>
            	<tr>
                	<td></td>
                    <td class="t">
                    	<input type="submit" class="sub" value="注册" />
                		<input type="hidden" name="action" value="register" />
                        
                    </td>
                    <td><label>已有账号？<a href="javascript:login()">登录</a></label></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<script type="text/javascript" src="public/js/register.js"></script><?php }} ?>