<?php /* Smarty version Smarty-3.1.12, created on 2013-11-05 11:10:27
         compiled from "E:\www\xstudio\tpls\appmarket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:820652785eb4585415-90755158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f4c64ffd789bb8be5ae06308f53cbf05d84925' => 
    array (
      0 => 'E:\\www\\xstudio\\tpls\\appmarket.tpl',
      1 => 1383620681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '820652785eb4585415-90755158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52785eb467b5c5_47148661',
  'variables' => 
  array (
    'total' => 0,
    'types' => 0,
    'type' => 0,
    'icons' => 0,
    'icon' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52785eb467b5c5_47148661')) {function content_52785eb467b5c5_47148661($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../public/css/appmarket.css" type="text/css" />
<title>应用市场</title>
</head>

<body style=" width:590px; height:400px;">
	<div class="content">
    	<div class="search">
        	<span>共有 <strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong> 个应用</span>
            <form action="./appmarket.php" method="get">
                <input type="text" class="txt" name="ico_name" value="<?php echo $_GET['ico_name'];?>
"/>
                <input type="hidden" name="action" value="search" />
                <input type="submit" value="" class="sub" />
            </form>
        </div>
		<div class="bt">
        	<div class="bar">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                    <li>
                        <?php if ($_GET['icon']==$_smarty_tpl->tpl_vars['type']->value){?>
                            <a class="active" href="appmarket.php?icon=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</a>
                        <?php }else{ ?>
                            <a href="appmarket.php?icon=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</a>
                        <?php }?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="fr">
                <div class="info">
                    <table>
                        <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                            <tr>
                                <td class="i"><span class="ri"></span><img src="../public/images/icon/<?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_name'];?>
.png" alt="" /></td>
                                <td class="d">
                                    <span class="n"><?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_name'];?>
</span>
                                    <span class="d">描述：
                                        <?php if ($_smarty_tpl->tpl_vars['icon']->value['ico_desc']==''){?>
                                            暂无
                                        <?php }else{ ?>
                                            <?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_desc'];?>

                                        <?php }?>
                                    </span>
                                </td>
                                <td>
                                	<?php ob_start();?><?php echo cookie_isExist(array('ico_name'=>$_smarty_tpl->tpl_vars['icon']->value['ico_name']),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?>
                                        <a class="add" href="javascript:void(0)" onClick="sendRequest('add', '<?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['icon']->value['ico_url'];?>
', this)"></a>
                                    <?php }else{ ?>
                                        <span style="color:red; font-size:12px">已添加</span>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="page">
                    <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../public/js/ajax.js"></script>
    <script type="text/javascript" src="../public/js/appmarket.js"></script>
</body>
</html>
<?php }} ?>