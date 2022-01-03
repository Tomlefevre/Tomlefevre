<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 20:22:41
  from '/Applications/MAMP/htdocs/TD4/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bba01185ad02_11018542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '656e94150e8f42ba443ff95f8e6a3a295139825b' => 
    array (
      0 => '/Applications/MAMP/htdocs/TD4/templates/login.tpl',
      1 => 1639685843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bba01185ad02_11018542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116414473461bba011806b35_95063998', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11881057961bba01181d384_22392691', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_116414473461bba011806b35_95063998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_116414473461bba011806b35_95063998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11881057961bba01181d384_22392691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11881057961bba01181d384_22392691',
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
