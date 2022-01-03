<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 11:54:03
  from '/Applications/MAMP/htdocs/FINI _D4/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b7345be65c62_20784178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6bc124d467f25e81980ac8b3e7d5946fd10212' => 
    array (
      0 => '/Applications/MAMP/htdocs/FINI _D4/templates/login.tpl',
      1 => 1639396381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7345be65c62_20784178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169687575361b7345be44aa8_32432385', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213601485561b7345be48a67_46105935', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_169687575361b7345be44aa8_32432385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_169687575361b7345be44aa8_32432385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_213601485561b7345be48a67_46105935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_213601485561b7345be48a67_46105935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
<form action="login" method="post">

    <label><b>Email</b></label><br />
    <input type="email" placeholder="Adresse valide" name="email" value=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />
    <label ><b>Password</b></label><br />
    <input type="password" placeholder="Minimum 8 caractères" name="psw"><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['psw'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />
    <button type="submit">Sign in</button><br />

</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
