<?php /* Smarty version Smarty-3.1.12, created on 2013-11-18 10:15:29
         compiled from "E:\www\xstudio\tpls\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1004052897841997891-87412161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '636782d7c8e8124fdb6d17fb2427327c0df31ee2' => 
    array (
      0 => 'E:\\www\\xstudio\\tpls\\admin.tpl',
      1 => 1357215263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1004052897841997891-87412161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icons' => 0,
    'icon' => 0,
    'ico_type' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52897841a8da52_67786494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52897841a8da52_67786494')) {function content_52897841a8da52_67786494($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理云 - <?php echo @SNAME;?>
</title>
<link rel="stylesheet" href="../public/css/admin.css" type="text/css" />
<link rel="shortcut icon" href="../public/images/index.ico" type="image/x-icon" />
</head>

<body>
	<div class="content">
    	<a href="./?logout=true">退出</a>
    	<table>
        	<caption>应用列表</caption>
        	<tr>
            	<td class="n">应用名</td>
                <td class="u">链接</td>
                <td class="t">类型</td>
                <td class="d">描述</td>
                <td>管理</td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
            	<tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_name'];?>
</td>
                	<td><?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_url'];?>
</td>
                	<td><?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_type'];?>
</td>
                	<td><?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_desc'];?>
</td>
                	<td><a href="">编辑</a> / <a href="">删除</a></td>
                </tr>
            <?php } ?>
            <tr>
            	<td colspan="5">&nbsp;</td>
            </tr>
            <form action="./" method="post">
                <tr>
                    <td><input class="txt" type="text" name="ico_name" value="" /></td>
                    <td><input class="txt" type="text" name="ico_url" value="" /></td>
                    <td>
                        <select class="txt" name="ico_type">
                            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ico_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                    <td><input class="txt" type="text" name="ico_desc" value="" /></td>
                    <td><input type="submit" class="sub" name="action" value="Add" /></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>
<?php }} ?>