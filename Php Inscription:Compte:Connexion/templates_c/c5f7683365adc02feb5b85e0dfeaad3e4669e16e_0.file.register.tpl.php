<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-23 12:39:12
  from 'C:\laragon\www\tps\TP4\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619ce0f0ef1078_61724259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f7683365adc02feb5b85e0dfeaad3e4669e16e' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\register.tpl',
      1 => 1637671141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ce0f0ef1078_61724259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1928265543619ce0f0bc6f38_08643472', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1653660373619ce0f0bc87a0_31443395', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_1928265543619ce0f0bc6f38_08643472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1928265543619ce0f0bc6f38_08643472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1653660373619ce0f0bc87a0_31443395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1653660373619ce0f0bc87a0_31443395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Register</h1>
<div id='main'>
<form action="register" method="post">

    <label><b>Nom</b></label><br />
    <input type="nom" placeholder="Nom" name="nom" value=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />

    <label><b>Email</b></label><br />
    <input type="email" placeholder="Adresse valide" name="email" value=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />

    <label ><b>Password</b></label><br />
    <input type="password" placeholder="Minimum 8 caractères" name="psw"><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['psw'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />

    <label><b>Ville</b></label><br />
    <input type="ville" placeholder="Ville" name="ville" value=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['ville'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['ville'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />

    <label><b>Pays</b></label><br />
    <input type="Pays" placeholder="Pays" name="pays" value=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['pays'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['pays'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br /> <br />


    <button type="submit">Sign in</button><br />
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
