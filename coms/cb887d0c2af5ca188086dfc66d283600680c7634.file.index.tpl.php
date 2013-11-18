<?php /* Smarty version Smarty-3.1.12, created on 2013-11-18 10:52:00
         compiled from "E:\www\xstudio\tpls\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648352785e47507c04-69776148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb887d0c2af5ca188086dfc66d283600680c7634' => 
    array (
      0 => 'E:\\www\\xstudio\\tpls\\index.tpl',
      1 => 1384743119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648352785e47507c04-69776148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52785e47717200_65133702',
  'variables' => 
  array (
    'login' => 0,
    'icon1' => 0,
    'ico' => 0,
    'i' => 0,
    'icon2' => 0,
    'icon3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52785e47717200_65133702')) {function content_52785e47717200_65133702($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="云" />
<meta name="description" content="在线云App演示，`<?php echo @SNAME;?>
`，专注于WEB应用、新技术的开发，致力于WEB安全性研究，推动开源，推动网络安全。" />
<title><?php echo @SNAMET;?>
 - <?php echo @SNAME;?>
</title>
<link rel="stylesheet" type="text/css" href="public/css/index.css" />
<link rel="shortcut icon" href="public/images/index.ico" type="image/x-icon" />
</head>

<body>
	<div id="content">
   		<div class="pagelist">
        	<ul id="ulpl">
            	<li class="listli">
                	<ul id="listul">
                    	<?php if (!$_smarty_tpl->tpl_vars['login']->value){?>
                    		<li class="ico"><a href="http://yueqian.sinaapp.com"><img src="public/images/icon/WEBQQ.png" alt="" title="点击访问主页" /></a></li>
                        <?php }else{ ?>
                        	<li class="ico"><a onClick="sepcialManage('pwdmg', 'dialog_pwd', '修改密码', 'frame/userinfo/')" href="javascript:void(0);"><img src="public/images/index.jpg" alt="" title="修改密码" /></a></li>
                        <?php }?>
            			<li class="active"><a class="p p1" href="javascript:void(0);"></a></li>
                        <li class="list"><a class="p p2" href="javascript:void(0);"></a></li>
                        <li class="list"><a class="p p3" href="javascript:void(0);"></a></li>
                    </ul>
                </li>
                <li class="navig"></li>
            	<li class="search"><a href="javascript:void(0);" id="sa"></a></li>
                <li class="end"></li>
            </ul>
        </div> 	
        <div id="sform">
            <input type="txt" class="txt" value="检索应用..." name="content" />
            <input type="button" name="btn" value="" class="sub"/>
        </div>
        <div class="toolbar">
        	<ul>
            	<?php if ($_smarty_tpl->tpl_vars['login']->value){?>
            		<li><a href="javascript:void(0)" onClick="sepcialManage('market', 'dialog_ket', '应用市场', 'frame/appmarket.php?icon=推荐')"><img src="public/images/icon/应用市场.png" alt=""  title="应用市场"/></a></li>
                	<li><a target="_blank" href="javascript:void(0)" onClick="sepcialManage('log', 'dialog_ket', '更新日志', 'frame/log.php')"><img src="public/images/icon/WEBQQ.png" alt=""  title="更新日志"/></a></li>
                    <li class="bt"><a title="主题设置" class="object" href="javascript:void(0)" onClick="sepcialManage('obmg', 'dialog_obj', '主题设置', 'frame/object.html')"></a><a title="注销" href="./?action=logout" class="logout"></a></li>
                <?php }?>
            </ul>
        </div>
   		<div class="page">
        	<ul id="ulp">
            	<?php if (isset($_smarty_tpl->tpl_vars['icon1']->value['back_img'])){?>
            		<li class="page1" style="background-image:url(public/images/themes/<?php echo $_smarty_tpl->tpl_vars['icon1']->value['back_img'];?>
)">
                <?php }else{ ?>
                	<li class="page1">
                <?php }?>
                	<?php  $_smarty_tpl->tpl_vars['ico'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ico']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = array_chunk($_smarty_tpl->tpl_vars['icon1']->value['ico'],5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ico']->key => $_smarty_tpl->tpl_vars['ico']->value){
$_smarty_tpl->tpl_vars['ico']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['ico']->key;
?>
                    	<ul>
                        	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ico']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ico']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            	<li class="listli">
                                    <div onClick="loadFrame('<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
')" title="<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
">
                                        <img src="public/images/icon/<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
.png" alt="" />
                                        <span><?php echo mb_substr($_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'],0,6,'utf8');?>
</span>
                                    </div>
                                </li>
                            <?php }} ?>
                        </ul>
                    <?php } ?>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['icon2']->value['back_img'])){?>
            		<li class="page2" style="background-image:url(public/images/themes/<?php echo $_smarty_tpl->tpl_vars['icon2']->value['back_img'];?>
)">
                <?php }else{ ?>
                	<li class="page2">
                <?php }?>
                	<?php  $_smarty_tpl->tpl_vars['ico'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ico']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = array_chunk($_smarty_tpl->tpl_vars['icon2']->value['ico'],5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ico']->key => $_smarty_tpl->tpl_vars['ico']->value){
$_smarty_tpl->tpl_vars['ico']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['ico']->key;
?>
                    	<ul>
                        	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ico']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ico']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            	<li class="listli">
                                    <div onClick="loadFrame('<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
')" title="<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
">
                                        <img src="public/images/icon/<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
.png" alt="" />
                                        <span><?php echo mb_substr($_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'],0,6,'utf8');?>
</span>
                                    </div>
                                </li>
                            <?php }} ?>
                        </ul>
                    <?php } ?>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['icon3']->value['back_img'])){?>
            		<li class="page3" style="background-image:url(public/images/themes/<?php echo $_smarty_tpl->tpl_vars['icon3']->value['back_img'];?>
)">
                <?php }else{ ?>
                	<li class="page3">
                <?php }?>
                	<?php  $_smarty_tpl->tpl_vars['ico'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ico']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = array_chunk($_smarty_tpl->tpl_vars['icon3']->value['ico'],5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ico']->key => $_smarty_tpl->tpl_vars['ico']->value){
$_smarty_tpl->tpl_vars['ico']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['ico']->key;
?>
                    	<ul>
                        	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ico']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ico']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            	<li class="listli">
                                    <div onClick="loadFrame('<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
')" title="<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
">
                                        <img src="public/images/icon/<?php echo $_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
.png" alt="" />
                                        <span><?php echo mb_substr($_smarty_tpl->tpl_vars['ico']->value[$_smarty_tpl->tpl_vars['i']->value]['name'],0,6,'utf8');?>
</span>
                                    </div>
                                </li>
                            <?php }} ?>
                      </ul>
                    <?php } ?>
                </li>
            </ul>
        </div>
        <div class="bottomBarBg"></div>
        <div class="bottomBarBgTask"></div>
        <div id="btbar"></div>
    </div>
    
	<script type="text/javascript" src="public/js/move.js"></script>
	<script type="text/javascript" src="public/js/drag.js"></script>
	<script type="text/javascript" src="public/js/public.js"></script>
	<script type="text/javascript" src="public/js/ajax.js"></script>
	<script type="text/javascript" src="public/js/index.js"></script>
    <?php if (!$_smarty_tpl->tpl_vars['login']->value){?>
	    <?php echo $_smarty_tpl->getSubTemplate ('frame/login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
</body>
</html>
<?php }} ?>