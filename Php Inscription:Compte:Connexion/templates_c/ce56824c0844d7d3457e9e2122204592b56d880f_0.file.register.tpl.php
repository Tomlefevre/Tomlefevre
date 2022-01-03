<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 15:49:13
  from '/Applications/MAMP/htdocs/TD4/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba0e799a5ff5_71921735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce56824c0844d7d3457e9e2122204592b56d880f' => 
    array (
      0 => '/Applications/MAMP/htdocs/TD4/templates/register.tpl',
      1 => 1639396369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba0e799a5ff5_71921735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92763296161ba0e79988a91_11148697', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78303460361ba0e7998a5d3_76620419', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_92763296161ba0e79988a91_11148697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_92763296161ba0e79988a91_11148697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_78303460361ba0e7998a5d3_76620419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_78303460361ba0e7998a5d3_76620419',
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
