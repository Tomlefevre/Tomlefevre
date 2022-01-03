<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-23 13:48:26
  from 'C:\laragon\www\tps\TP4\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619cf12af144c7_89725225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2566e4338f3059340d7d60054eeba98fe17e86' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\login.tpl',
      1 => 1637675303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619cf12af144c7_89725225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1532602605619cf12aefb420_94503351', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47124366619cf12aefc916_28839094', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_1532602605619cf12aefb420_94503351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1532602605619cf12aefb420_94503351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_47124366619cf12aefc916_28839094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_47124366619cf12aefc916_28839094',
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
