<?php
/* Smarty version 3.1.39, created on 2024-06-14 06:44:54
  from 'C:\xampp\htdocs\project2024b\templates\home\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_666bcac6dc46f4_52776999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5854aac951fb83306b06dfed7368bcf006073c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\home\\list.tpl',
      1 => 1718340292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666bcac6dc46f4_52776999 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<form action="home_smtylist.php" method="POST">


<h1>一覧</h1><table border="1">
商品検索：<input type="text" size=20 maxlength="30" name="input1"><br>
<tr>
    <td>name</td>
    <td>stock</td>
</tr>
<form action="form2.php" method="POST">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
    <tr>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['stock'];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
</body>
</html><?php }
}