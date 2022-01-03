<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 12:04:40
  from '/Applications/MAMP/htdocs/FINI _D4/templates/success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b736d8061295_92737756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3529e15d946b2d14414f0b121b32140db4b1b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/FINI _D4/templates/success.tpl',
      1 => 1639396603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b736d8061295_92737756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183237610261b736d805ce94_65559410', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207107745561b736d805fa59_78057553', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_183237610261b736d805ce94_65559410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_183237610261b736d805ce94_65559410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès!<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_207107745561b736d805fa59_78057553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_207107745561b736d805fa59_78057553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
    <p>Bien enregistré, vous pouvez vous rendre sur la page de <a href='login'>connexion</a></p>
</div>
<?php
}
}
/* {/block 'body'} */
}
